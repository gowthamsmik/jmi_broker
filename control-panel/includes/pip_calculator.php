<?php


    include("config.php");
    session_start();

    $_SESSION['pageType'] = 'tools';
    $_SESSION['currentPage'] = 'pip-calculator';

    $sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';

    // Replace this with your logic for getting user location
    $location = ''; // Replace with your logic

    $stmt = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
    $stmt->bindParam(':user', $sessionUser);
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

    $calculator = file_get_contents('https://www.investing.com/tools/forex-pip-calculator');

    $title = "JMI Brokers | Pip Calculator";
   

?>
