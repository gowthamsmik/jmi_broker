<?php
error_reporting(0);
session_start();

$sessionUser = $_SESSION['user'];
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param("ss", $sessionUser, $sessionUser);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();

$stmtNotificationsAll = $conn->prepare("SELECT * FROM Notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bind_param("i", $user['id']);
$stmtNotificationsAll->execute();
$resultNotificationsAll = $stmtNotificationsAll->get_result();
$notificationsAll = [];
while ($row = $resultNotificationsAll->fetch_assoc()) {
    $notificationsAll[] = $row;
}

$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM Notifications WHERE website_accounts_id = ? AND notification_status = 0");
$stmtNotificationsUnseen->bind_param("i", $user['id']);
$stmtNotificationsUnseen->execute();
$resultNotificationsUnseen = $stmtNotificationsUnseen->get_result();
$notificationsUnseen = [];
while ($row = $resultNotificationsUnseen->fetch_assoc()) {
    $notificationsUnseen[] = $row;
}

$stmtLiveAccounts = $conn->prepare("SELECT * FROM fx_accounts_live WHERE website_accounts_id = ?");
$stmtLiveAccounts->bind_param("i", $user['id']);
$stmtLiveAccounts->execute();
$resultLiveAccounts = $stmtLiveAccounts->get_result();
$liveAccounts = [];
while ($row = $resultLiveAccounts->fetch_assoc()) {
    $liveAccounts[] = $row;
}

$stmtIbAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE account_type = 2 AND account_radio_type = 1");
$stmtIbAccounts->execute();
$resultIbAccounts = $stmtIbAccounts->get_result();
$ibAccounts = [];
while ($row = $resultIbAccounts->fetch_assoc()) {
    $ibAccounts[] = $row;
}

$title = "Control Panel | Referral System (IB) Overview";
include('cpanel.ib-overview.php');
$conn->close();
?>
