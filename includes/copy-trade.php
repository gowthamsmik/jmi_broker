<?php
include('config.php');
error_reporting(0);
session_start();

// Check if the user is logged in
if ($_SESSION['user']) {
    $session_user = $_SESSION['user'];

    // Get user data
    $userQuery = "SELECT * FROM website_accounts WHERE username = ? OR email = ?";
    $userStmt = $conn->prepare($userQuery);
    $userStmt->bind_param("ss", $session_user, $session_user);
    $userStmt->execute();
    $userResult = $userStmt->get_result();

    if ($userResult && $userResult->num_rows > 0) {
        $user = $userResult->fetch_assoc();

        // Get user notifications
        $notificationsQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8";
        $notificationsStmt = $conn->prepare($notificationsQuery);
        $notificationsStmt->bind_param("i", $user['id']);
        $notificationsStmt->execute();
        $notificationsResult = $notificationsStmt->get_result();
        $notifications_all = $notificationsResult->fetch_all(MYSQLI_ASSOC);

        // Get unseen notifications
        $notificationsUnseenQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? AND notification_status = 0";
        $notificationsUnseenStmt = $conn->prepare($notificationsUnseenQuery);
        $notificationsUnseenStmt->bind_param("i", $user['id']);
        $notificationsUnseenStmt->execute();
        $notificationsUnseenResult = $notificationsUnseenStmt->get_result();
        $notifications_unseen = $notificationsUnseenResult->fetch_all(MYSQLI_ASSOC);

        // Get user copy trades
        $copyTradesQuery = "SELECT * FROM CopyTrade WHERE website_accounts_id = ?";
        $copyTradesStmt = $conn->prepare($copyTradesQuery);
        $copyTradesStmt->bind_param("i", $user['id']);
        $copyTradesStmt->execute();
        $copyTradesResult = $copyTradesStmt->get_result();
        $copy_trades = $copyTradesResult->fetch_all(MYSQLI_ASSOC);

        // Get user live accounts
        $accountsQuery = "SELECT * FROM fx_accounts_live WHERE website_accounts_id = ?";
        $accountsStmt = $conn->prepare($accountsQuery);
        $accountsStmt->bind_param("i", $user['id']);
        $accountsStmt->execute();
        $accountsResult = $accountsStmt->get_result();
        $accounts = $accountsResult->fetch_all(MYSQLI_ASSOC);

        // Set language segment
        $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');

        // Set title based on language segment
        $title = ($languageSegment == 'ar') ? "لوحة التحكم |  نسخ الصفقات" : (($languageSegment == 'ru') ? "Панель управления | Внутренний трансфер" : "Control Panel | Copy Trade");

        // Include the corresponding view file based on language segment
        include(($languageSegment == 'ar') ? 'ar_cpanel_copy_trade.php' : (($languageSegment == 'ru') ? 'ru_cpanel_copy_trade.php' : 'cpanel_copy_trade.php'));
    } else {
        // Redirect if user is not found
        header("Location: login.php");
        exit();
    }
} else {
    // Redirect if user is not logged in
    header("Location: login.php");
    exit();
}
?>
