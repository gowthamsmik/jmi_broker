<?php
include("config.php");
session_start();

// Simulate the behavior of Session::flash
$_SESSION['pageType'] = 'tools';
$_SESSION['currentPage'] = 'forex-calculator';

$session_user = isset($_SESSION['user']) ? $_SESSION['user'] : '';

// Replace this with your logic for getting user location
$location = 'your_location';

try {
    $stmt = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
    $stmt->bindParam(':user', $session_user);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
    $stmtNotificationsAll->bindParam(':userId', $user['id']);
    $stmtNotificationsAll->execute();
    $notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

    $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
    $stmtNotificationsUnseen->bindParam(':userId', $user['id']);
    $stmtNotificationsUnseen->execute();
    $notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

    $segment = isset($_REQUEST['segment']) ? $_REQUEST['segment'] : '';

   
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
