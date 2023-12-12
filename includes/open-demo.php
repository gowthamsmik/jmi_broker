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

if ($_SESSION[1] == 'ar') {
    $title = "لوحة التحكم | فتح حساب تجريبى ";
    include('ar.cpanel.trading-platforms.php');
} elseif ($_SESSION[1] == 'ru') {
    $title = "Панель управления | Открыть демо-счет";
    include('ru.cpanel.trading-platforms.php');
} else {
    $title = "Control Panel | Open Demo Account";
    include('cpanel.trading-platforms.php');
}

$conn->close();
?>
