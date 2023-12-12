<?php
        include("config.php");
        session_start();

        $_SESSION['pageType'] = 'menu';
        $_SESSION['currentPage'] = 'open-account';

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

        // Get live accounts
        $stmtLiveAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = :userId AND account_type = 'live'");
        $stmtLiveAccounts->bindParam(':userId', $user['id']);
        $stmtLiveAccounts->execute();
        $liveAccounts = $stmtLiveAccounts->fetchAll(PDO::FETCH_ASSOC);

        // Get demo accounts
        $stmtDemoAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = :userId AND account_type = 'demo'");
        $stmtDemoAccounts->bindParam(':userId', $user['id']);
        $stmtDemoAccounts->execute();
        $demoAccounts = $stmtDemoAccounts->fetchAll(PDO::FETCH_ASSOC);

        // Location (assuming you have a GeoIP class or function)
        $location = GeoIP::getLocation();

        // if( Request::segment(1) =='ar'){
        //     $title = "لوحة التحكم | حساب IB";
        //     return view('ar.cpanel.ib',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts'));
        // }elseif( Request::segment(1) =='ru'){
        //     $title = "Панель управления | IB аккаунт";
        //     return view('ru.cpanel.ib',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts'));
        // }else{
        //     $title = "Control Panel | IB Overview";
        //     return view('cpanel.ib',compact('title','user','notifications_all','notifications_unseen','location','demo_accounts','live_accounts'));
        // }

?>
