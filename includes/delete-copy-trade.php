<?php
// Include the config.php file
include('config.php');

// Continue with your existing code
error_reporting(0);
session_start();

// Check if the user is logged in
if ($_SESSION['user']) {
    // Get user data
    $session_user = $_SESSION['user'];
    $userQuery = "SELECT * FROM website_accounts WHERE username = ? OR email = ?";
    
    // Using prepared statement for user query
    $userStmt = $conn->prepare($userQuery);
    $userStmt->bind_param("ss", $session_user, $session_user);
    
    $userStmt->execute();
    $userResult = $userStmt->get_result();

    if ($userResult && $userResult->num_rows > 0) {
        $user = $userResult->fetch_assoc();

        // Get copy trade data
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $copyTradeQuery = "SELECT * FROM CopyTrade WHERE id = ? AND website_accounts_id = ?";
        
        // Using prepared statement for copy trade query
        $copyTradeStmt = $conn->prepare($copyTradeQuery);
        $copyTradeStmt->bind_param("ii", $id, $user['id']);
        
        $copyTradeStmt->execute();
        $copyTradeResult = $copyTradeStmt->get_result();

        if ($copyTradeResult && $copyTradeResult->num_rows > 0) {
            $copyTrade = $copyTradeResult->fetch_assoc();

            // Update copy trade status
            $updateCopyTradeQuery = "UPDATE CopyTrade SET status = 8 WHERE id = ?";
            
            // Using prepared statement for update query
            $updateCopyTradeStmt = $conn->prepare($updateCopyTradeQuery);
            $updateCopyTradeStmt->bind_param("i", $id);
            $updateCopyTradeStmt->execute();

            // Insert notification
            $notificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link)
                                 VALUES (?, 0, 'Your copy trade deleting request has been received successfully.', 'Your copy trade deleting request has been received successfully.', 'تم استلام طلب حذف نسخ التداول الخاص بك بنجاح.', 'تم استلام طلب حذف نسخ التداول الخاص بك بنجاح.', 'Ваш запрос на удаление копии сделки успешно получен.', 'Ваш запрос на удаление копии сделки успешно получен.', '/cpanel/copy-trade')";
            
            // Using prepared statement for notification query
            $notificationStmt = $conn->prepare($notificationQuery);
            $notificationStmt->bind_param("i", $user['id']);
            $notificationStmt->execute();

            // Redirect based on language segment
            $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');
            
            header("Location: $languageSegment/cpanel/copy-trade");
            exit();
        } else {
            // Handle the case where the copy trade is not found
            echo "Copy trade not found.";
        }
    } else {
        // Handle the case where the user is not found
        echo "User not found.";
    }
} else {
    // Handle the case where the user is not logged in
    // Redirect to login page or show an error message
    header("Location: login.php");
    exit();
}
?>
