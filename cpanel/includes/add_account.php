<?php
include("config.php");
error_reporting(3);
            // Flash messages
            $_SESSION['pageType'] = 'menu';
            $_SESSION['currentPage'] = 'add-account';
            global $conn;
            // Get session user

            $sessionUser = isset($_SESSION['sessionuser']) ? $_SESSION['sessionuser'] : '';
         
            // Get user details
            $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
            $stmtUser->bind_param('ss', $sessionUser,$sessionUser);
            $stmtUser->execute();
            $resultUser = $stmtUser->get_result();
            $user = $resultUser->fetch_assoc();
            //var_dump($user);exit(0);
            $userId = $user['id'];
     
            // Get all notifications
            $stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id =  ? ORDER BY id DESC LIMIT 8");
            $stmtNotificationsAll->bind_param('i', $userId);
            $stmtNotificationsAll->execute();
            $resultNotificationsAll = $stmtNotificationsAll->get_result();
            $notificationsAll = $resultNotificationsAll->fetch_all(MYSQLI_ASSOC);

            // Get unseen notifications
            $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = ? AND notification_status = 0");
            $stmtNotificationsUnseen->bind_param('i', $userId);
            $stmtNotificationsUnseen->execute();
            $resultNotificationsUnseen = $stmtNotificationsUnseen->get_result();
            $notificationsUnseen = $resultNotificationsUnseen->fetch_all(MYSQLI_ASSOC);

            // Get live and demo accounts
            $liveAccountsStmt = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type = 1");
            $liveAccountsStmt->bind_param('i', $userId);
            $liveAccountsStmt->execute();
            $liveaccount = $liveAccountsStmt->get_result();
            $liveAccounts = $liveaccount->fetch_all(MYSQLI_ASSOC);

            $demoAccountsStmt = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = ? AND account_type = 'demo'");
            $demoAccountsStmt->bind_param('i', $userId);
            $demoAccountsStmt->execute();
            $demoaccount = $demoAccountsStmt->get_result();
            $demoAccounts = $demoaccount->fetch_all(MYSQLI_ASSOC);

            // Get documents
            $documentsStmt = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = ? ");
            $documentsStmt->bind_param('i', $userId);
            $documentsStmt->execute();
            $document = $documentsStmt->get_result();
            $documents = $document->fetch_all(MYSQLI_ASSOC)

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
