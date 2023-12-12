<?php

$siteurl = 'http://localhost/cms/';
$webeurl = 'http://localhost/';
include('includes/functions.php');

$session_user = $_SESSION['sessionuser'];
$input = $_POST;

// Replace with your actual implementation for querying the database
$user = getUserByUsernameOrEmail($session_user);
if($user != null)
{ 
    $userId = $user['id'];
    $notifications_all = getNotificationsForUser($userId);
    $notifications_unseen = getUnseenNotificationsForUser($userId);
    $accounts = getFxAccountsForUser($userId);
    /* if ($_REQUEST['segment'] == 'ar') {
        $title = "لوحة التحكم | التحويلات الداخلية ";
        include('ar/cpanel/internal-transfer.php');
    } elseif ($_REQUEST['segment'] == 'ru') {
        $title = "Панель управления | Внутренний трансфер ";
        include('ru/cpanel/internal-transfer.php');
    } else {
        $title = "Control Panel | Internal Transfer";
        include('cpanel/internal-transfer.php');
    } */
}
?>
