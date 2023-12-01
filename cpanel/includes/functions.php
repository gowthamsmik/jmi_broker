<?php 
include('config.php');

function getUserByUsernameOrEmail($username)
{
    $user = null;
    global $conn;
    $userQuery = "SELECT * FROM website_accounts WHERE username = ? OR email = ?";
    $userStmt = $conn->prepare($userQuery);
    $userStmt->bind_param("ss", $username, $username);
    $userStmt->execute();
    $userResult = $userStmt->get_result();
    if ($userResult && $userResult->num_rows > 0) {
        $user = $userResult->fetch_assoc();
    }
    return $user;
}

function getNotificationsForUser($userId)
{
    global $conn;
    $notificationsQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8";
    $notificationsStmt = $conn->prepare($notificationsQuery);
    $notificationsStmt->bind_param("i", $userId);
    $notificationsStmt->execute();
    $notificationsResult = $notificationsStmt->get_result();
    $notifications_all = $notificationsResult->fetch_all(MYSQLI_ASSOC);
    return $notifications_all;
}

function getUnseenNotificationsForUser($userId)
{
        //$userId = (int)$user['id'];
        global $conn;
        $notificationsUnseenQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? AND notification_status = 0";
        $notificationsUnseenStmt = $conn->prepare($notificationsUnseenQuery);
        $notificationsUnseenStmt->bind_param("i", $userId);
        $notificationsUnseenStmt->execute();
        $notificationsUnseenResult = $notificationsUnseenStmt->get_result();
        $notifications_unseen = $notificationsUnseenResult->fetch_all(MYSQLI_ASSOC); 
        return $notifications_unseen;
} 

function getFxAccountsForUser($userId)
{
        global $conn;
        $accountsQuery = "SELECT * FROM fx_accounts WHERE website_accounts_id = ? and account_radio_type=1";
        $accountsStmt = $conn->prepare($accountsQuery);
        $accountsStmt->bind_param("i", $userId);
        $accountsStmt->execute();
        $accountsResult = $accountsStmt->get_result();
        $accounts = $accountsResult->fetch_all(MYSQLI_ASSOC);
        return $accounts;
}

function getwebsiteaccounts($userId)
{
    global $conn;
    $webaccountsQuery = "SELECT * FROM website_accounts WHERE id = ? ";
    $webaccountsStmt = $conn->prepare($webaccountsQuery);
    $webaccountsStmt->bind_param("i", $userId);
    $webaccountsStmt->execute();
    $webaccountsResult = $webaccountsStmt->get_result();
    $webaccounts = $webaccountsResult->fetch_all(MYSQLI_ASSOC);
    return $webaccounts;
}

?>