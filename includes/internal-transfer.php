<?php
error_reporting(0);
session_start();

$siteurl = 'http://localhost/jmi/cms/';
$webeurl = 'http://localhost/jmi/';

$session_user = $_SESSION['user'];
$input = $_REQUEST;

// Replace with your actual implementation for querying the database
$user = getUserByUsernameOrEmail($session_user);
$notifications_all = getNotificationsForUser($user->id);
$notifications_unseen = getUnseenNotificationsForUser($user->id);
$accounts = getFxAccountsForUser($user->id);

if ($_REQUEST['segment'] == 'ar') {
    $title = "لوحة التحكم | التحويلات الداخلية ";
    include('ar/cpanel/internal-transfer.php');
} elseif ($_REQUEST['segment'] == 'ru') {
    $title = "Панель управления | Внутренний трансфер ";
    include('ru/cpanel/internal-transfer.php');
} else {
    $title = "Control Panel | Internal Transfer";
    include('cpanel/internal-transfer.php');
}
?>
