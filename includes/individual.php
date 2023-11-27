<?php
 
         include("config.php");
         session_start();

        $_SESSION['pageType'] = 'menu';
        $_SESSION['currentPage'] = 'open-account';

        $sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';
        
        $location = GeoIP::getLocation();

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

        
        $stmtLiveAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = :userId AND account_type = 'live'");
        $stmtLiveAccounts->bindParam(':userId', $user['id']);
        $stmtLiveAccounts->execute();
        $liveAccounts = $stmtLiveAccounts->fetchAll(PDO::FETCH_ASSOC);

// Fetch demo accounts
        $stmtDemoAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = :userId AND account_type = 'demo'");
        $stmtDemoAccounts->bindParam(':userId', $user['id']);
        $stmtDemoAccounts->execute();
        $demoAccounts = $stmtDemoAccounts->fetchAll(PDO::FETCH_ASSOC);

        


        // if( Request::segment(1) =='ar'){
        //     $title = "لوحة التحكم | حساب شخصى";
        //     return view('ar.cpanel.individual',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts'));
        // }elseif( Request::segment(1) =='ru'){
        //     $title = "Панель управления | Индивидуальный аккаунт";
        //     return view('ru.cpanel.individual',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts'));
        // }else{
        //     $title = "Control Panel | Individual Account";
        //     return view('cpanel.individual',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts'));
        // }

    
    ?>