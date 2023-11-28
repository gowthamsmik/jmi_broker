<?php
include("config.php");
session_start();


            // Flash messages
            $_SESSION['pageType'] = 'menu';
            $_SESSION['currentPage'] = 'add-account';

            // Get session user
            $sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';

            // Get user details
            $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
            $stmtUser->bindParam(':user', $sessionUser);
            $stmtUser->execute();
            $user = $stmtUser->fetch(PDO::FETCH_ASSOC);

            // Get all notifications
            $stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
            $stmtNotificationsAll->bindParam(':userId', $user['id']);
            $stmtNotificationsAll->execute();
            $notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

            // Get unseen notifications
            $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
            $stmtNotificationsUnseen->bindParam(':userId', $user['id']);
            $stmtNotificationsUnseen->execute();
            $notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

            // Get live and demo accounts
            $liveAccountsStmt = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = :userId AND account_type = 'live'");
            $liveAccountsStmt->bindParam(':userId', $user['id']);
            $liveAccountsStmt->execute();
            $liveAccounts = $liveAccountsStmt->fetchAll(PDO::FETCH_ASSOC);

            $demoAccountsStmt = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = :userId AND account_type = 'demo'");
            $demoAccountsStmt->bindParam(':userId', $user['id']);
            $demoAccountsStmt->execute();
            $demoAccounts = $demoAccountsStmt->fetchAll(PDO::FETCH_ASSOC);

            // Get documents
            $documentsStmt = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = :userId");
            $documentsStmt->bindParam(':userId', $user['id']);
            $documentsStmt->execute();
            $documents = $documentsStmt->fetchAll(PDO::FETCH_ASSOC);

            // Set title and view based on language
            // if( Request::segment(1) =='ar'){
            //     $title = "لوحة التحكم | اضف حساب";
            //     return view('ar.cpanel.add-account',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts','documents'));
            // }elseif( Request::segment(1) =='ru'){
            //     $title = "Панель управления | Добавить существующий аккаунт";
            //     return view('ru.cpanel.add-account',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts','documents'));
            // }else{
            //     $title = "Control Panel | Add Existing Account";
            //     return view('cpanel.add-account',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts','documents'));
            // }

?>
