<?php
include('config.php');
session_start();

$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'withdraw-fund';
$session_user = $_SESSION['user'];
$location = geoip_record_by_name($_SERVER['REMOTE_ADDR']);

// Replace with your actual database connection logic
// Assume website_accounts and Notifications are your database tables
// and fx_accounts_live is a related table
// The following queries are placeholders, update them accordingly
$userResult = mysqli_query($connection, "SELECT * FROM website_accounts WHERE username = '$session_user' OR email = '$session_user'");
$user = mysqli_fetch_assoc($userResult);

$notificationsAllResult = mysqli_query($connection, "SELECT * FROM Notifications WHERE website_accounts_id = {$user['id']} ORDER BY id DESC LIMIT 8");
$notifications_all = mysqli_fetch_all($notificationsAllResult, MYSQLI_ASSOC);

$notificationsUnseenResult = mysqli_query($connection, "SELECT * FROM Notifications WHERE website_accounts_id = {$user['id']} AND notification_status = 0");
$notifications_unseen = mysqli_fetch_all($notificationsUnseenResult, MYSQLI_ASSOC);

$accountsResult = mysqli_query($connection, "SELECT * FROM fx_accounts_live WHERE user_id = {$user['id']}");
$accounts = mysqli_fetch_all($accountsResult, MYSQLI_ASSOC);

$title = "Control Panel | withdraw";
if ($_SESSION['segment'] == 'ar') {
    $title = "لوحة التحكم | سحب";
    include 'ar.cpanel.withdraw-fund.php';
} elseif ($_SESSION['segment'] == 'ru') {
    $title = "Панель управления | изымать";
    include 'ru.cpanel.withdraw-fund.php';
} else {
    include 'cpanel.withdraw-fund.php';
}
?>
