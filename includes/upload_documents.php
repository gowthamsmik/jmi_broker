<?php

include("config.php");
session_start();

// Flash messages
$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'documents';

$sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$location = "";

// Fetch user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
$stmtUser->bindParam(':user', $sessionUser);
$stmtUser->execute();
$user = $stmtUser->fetch(PDO::FETCH_ASSOC);

// Fetch notifications
$stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bindParam(':userId', $user['id']);
$stmtNotificationsAll->execute();
$notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
$stmtNotificationsUnseen->bindParam(':userId', $user['id']);
$stmtNotificationsUnseen->execute();
$notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

// Fetch user documents
$stmtDocuments = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = :userId");
$stmtDocuments->bindParam(':userId', $user['id']);
$stmtDocuments->execute();
$documents = $stmtDocuments->fetchAll(PDO::FETCH_ASSOC);



?>
