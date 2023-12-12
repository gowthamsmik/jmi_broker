<?php
include("config.php");
error_reporting(0);
session_start();

        $sessionUser = isset($_SESSION['sessionuser']) ? $_SESSION['sessionuser'] : '';

        //$location = GeoIP::getLocation();

        $stmt = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
        $stmt->bind_param('ss', $sessionUser,$sessionUser);
        $stmt->execute();
        $stmtuser = $stmt->get_result();
        $user = $stmtuser->fetch_assoc();
  
        $userId = $user['id'];
        $stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8");
        $stmtNotificationsAll->bind_param('i', $userId);
        $stmtNotificationsAll->execute();
        $notifystatement = $stmtNotificationsAll->get_result();
        $notificationsAll = $notifystatement->fetch_all(MYSQLI_ASSOC);
        

        $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = ? AND notification_status = 0");
        $stmtNotificationsUnseen->bind_param('i', $userId);
        $stmtNotificationsUnseen->execute();
        $notifystatement = $stmtNotificationsUnseen->get_result();
        $notificationsUnseen = $notifystatement->fetch_all(MYSQLI_ASSOC);
        

        $stmtLiveAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = ? AND account_type = 'live'");
        $stmtLiveAccounts->bind_param('i', $userId);
        $stmtLiveAccounts->execute();
        $Livestatement = $stmtLiveAccounts->get_result();
        $live_accounts = $Livestatement->fetch_all(MYSQLI_ASSOC);
         

        $stmtDemoAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = ? AND account_type = 'demo'");
        $stmtDemoAccounts->bind_param('i', $userId);
        $stmtDemoAccounts->execute();
        $demostatement = $stmtDemoAccounts->get_result();
        $demoAccounts = $demostatement->fetch_all(MYSQLI_ASSOC);
        
        $stmtDocuments = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = ? ");
        $stmtDocuments->bind_param('i', $userId);
        $stmtDocuments->execute();
        $stmtDocument = $stmtDocuments->get_result();
        $documents = $stmtDocument->fetch_all(MYSQLI_ASSOC);
         


        $input = $_REQUEST; // Assuming $input comes from the request

// Check if profile is not completed
if ($user['country'] == '' && $user['mobile'] == '') {
    // Redirect based on the language segment
    $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
    header("Location: $redirectUrl");
    exit;
}

$login = $input['account_id'];
$password = $input['password'];

// Validate input
if (empty($input['account_id']) || empty($input['password']) || empty($input['account_group'])) {
    // Handle validation error, redirect to the appropriate page
    $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
    header("Location: $redirectUrl");
    exit;
}
if($input['account_radio_type']==0){
// Add demo account
/* $ret = 'error';
$ptr = @fsockopen('85.234.143.239', '443', $errno, $errstr, 5);

if ($ptr) {
    if (fputs($ptr, "WUSERINFO-login=$login|password=$password\nQUIT\n")) {
        $ret = '';
        while (!feof($ptr)) {
            $line = fgets($ptr, 128);
            if ($line == "end\r\n") break;
            $ret .= $line;
        }
    }
    fclose($ptr);
} */

//$fx_balance = get_string_between($ret, 'Balance:', 'Equity');
//if (strpos($ret, 'Invalid Account') === false && strpos($fx_balance, '.') !== false) {
    $stmtFxAccount = $conn->prepare("INSERT INTO fx_accounts (account_id, account_type, account_group, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (:account_id, :account_type, :account_group, :currency, :leverage, :account_radio_type, :password, :investor_password, :website_accounts_id, :status)");
    $stmtFxAccount->bind_param(':account_id', $input['account_id']);
    $stmtFxAccount->bind_param(':account_type', 0);
    $stmtFxAccount->bind_param(':account_group', $input['account_group']);
    $stmtFxAccount->bind_param(':currency', 0);
    $stmtFxAccount->bind_param(':leverage', $input['leverage']);
    $stmtFxAccount->bind_param(':account_radio_type', $input['account_radio_type']);
    $stmtFxAccount->bind_param(':password', $input['password']);
    $stmtFxAccount->bind_param(':investor_password', $input['password']);
    $stmtFxAccount->bind_param(':website_accounts_id', $userId);
    $stmtFxAccount->bind_param(':status', 0);
    $stmtFxAccount->execute();

    $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (:website_accounts_id, :notification_status, :notification, :notification_link)");
    $stmtNotification->bind_param(':website_accounts_id', 999999999);
    $stmtNotification->bind_param(':notification_status', 0);
    $stmtNotification->bind_param(':notification', $user['email'] . ' Has Added A New Demo Account');
    $stmtNotification->bind_param(':notification_link', '/spanel/website-accounts?&bymail=' . $user['email']);
    $stmtNotification->execute();

    // Redirect based on the language segment
    $redirectUrl = '/' . Request::segment(1) . '/cpanel/demo-accounts';
    header("Location: $redirectUrl?status=success");
    exit;
/* } else {
    // Handle account creation failure, redirect to the appropriate page
    $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
    header("Location: $redirectUrl?status=error");
    exit;
} */
}
 elseif ($input['account_radio_type'] == 1) {
    // Open live account

    // Check if there is no customer account agreement or fewer than 2 documents approved
    $xx = 0;
    foreach ($documents as $document) {
        if ($document->type == 8 && $document->status == 1) {
            $xx++;
        }
    }

    // Uncomment the following block if you want to check for the number of documents and account agreement
    /*
    if ($xx == 0 || count($documents) < 2) {
        // Redirect based on the language segment
        $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
        header("Location: $redirectUrl");
        exit;
    }
    */

    // Check if he has 3 live accounts
    if (count($live_accounts) > 99) {
        // Redirect based on the language segment
        $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
        header("Location: $redirectUrl");
        exit;
    }

    /* $ret = 'error';
    // Open socket
    $ptr = @fsockopen('89.116.30.28', '443', $errno, $errstr, 5);
    // Check connection
    if ($ptr) {
        // Send request
        if (fputs($ptr, "WUSERINFO-login=$login|password=$password\nQUIT\n")) {
            // Clear default answer
            $ret = '';
            // Receive answer
            while (!feof($ptr)) {
                $line = fgets($ptr, 128);
                if ($line == "end\r\n") break;
                $ret .= $line;
            }
        }
        fclose($ptr);
    }

    if ($ret == null || $ret == 'error') {
        // Open socket
        $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
        // Check connection
        if ($ptr) {
            // Send request
            if (fputs($ptr, "WUSERINFO-login=$login|password=$password\nQUIT\n")) {
                // Clear default answer
                $ret = '';
                // Receive answer
                while (!feof($ptr)) {
                    $line = fgets($ptr, 128);
                    if ($line == "end\r\n") break;
                    $ret .= $line;
                }
            }
            fclose($ptr);
        }
    } */

    /* $fx_account2 = Fx_accounts::where('website_accounts_id', $user->id)->where('account_id', $input['account_id'])->get()->all(); */
   /*  if (count($fx_account2) > 0) {
        // Create account failed
        $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
        $status = 'status-error';
        $message = ''; */
        /* if (Request::segment(1) == 'ar') {
            $message = 'الحساب موجود بالفعل في قائمتك';
        } elseif (Request::segment(1) == 'ru') {
            $message = 'Аккаунт уже есть в вашем списке';
        } else {
            $message = 'Account is already exist in your list';
        } */
       /*  header("Location: $redirectUrl?$status=$message");
        exit; */
    //}

    //$fx_balance = get_string_between($ret, 'Balance:', 'Equity');
    $accountID = $input['account_id'];
    $accountgrp = $input['account_group'];
    $accounttype = $input['account_type'];
    $leverage = 500;
    $currency = 1;
    $accradiotype = $input['account_radio_type'];
    $password = $input['password'];
    $status = 0;
    //if (strpos($ret, 'Invalid Account') === false && strpos($fx_balance, '.') !== false) {
        $stmtFxAccount = $conn->prepare("INSERT INTO fx_accounts (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmtFxAccount->bind_param('isssiiisii', $accountID,$accountgrp,$accounttype,$currency,$leverage,$accradiotype,$password,$password,$userId,$status );
        /* $stmtFxAccount->bind_param('s',$accountgrp );
        $stmtFxAccount->bind_param('s', $accounttype);
        $stmtFxAccount->bind_param('i', $currency);
        $stmtFxAccount->bindParam(':leverage', $leverage);
        $stmtFxAccount->bind_param(':account_radio_type', $accradiotype);
        $stmtFxAccount->bind_param(':password',$password );
        $stmtFxAccount->bind_param(':investor_password', $password);
        $stmtFxAccount->bind_param(':website_accounts_id', $userId);
        $stmtFxAccount->bind_param(':status', $status); */
        $stmtFxAccount->execute();
        $emailacc = $user['email'];
        $notlink = '/spanel/website-accounts?&bymail='.$emailacc;
        $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (?,?,?,?)");
        $stmtNotification->bind_param('iiss',$accountID,$status,$emailacc,$notlink );
        /* $stmtNotification->bind_param(':notification_status', 0);
        $stmtNotification->bind_param(':notification', $user->email . ' Has Added A New Live Account');
        $stmtNotification->bind_param(':notification_link', '/spanel/website-accounts?&bymail=' . $user->email);
 */        $stmtNotification->execute();
        $notify = "Account number " . $input['account_id'] . " has been added to your account list successfully";
        $notifylink = '/cpanel/live-accounts';
        $notifydetails = "Account number " . $input['account_id'] . " has been added to your account list successfully";
        $stmtNotification1 = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link, details) VALUES (?,?,?,?,?)");
        $stmtNotification1->bind_param('issss', $userId,$status,$notify,$notifylink,$notifydetails);
        //notification_ar, details_ar, notification_ru, details_ru
       /*  $stmtNotification1->bind_param(':notification_status', 0);
        $stmtNotification1->bind_param(':notification', "Account number " . $input['account_id'] . " has been added to your account list successfully");
        $stmtNotification1->bind_param(':notification_link', '/cpanel/live-accounts');
        $stmtNotification1->bind_param(':details', "Account number " . $input['account_id'] . " has been added to your account list successfully");
        $stmtNotification1->bind_param(':notification_ar', 'تمت إضافة رقم الحساب ' . $input['account_id'] . ' إلى قائمة حسابك بنجاح');
        $stmtNotification1->bind_param(':details_ar', 'تمت إضافة رقم الحساب ' . $input['account_id'] . ' إلى قائمة حسابك بنجاح');
        $stmtNotification1->bind_param(':notification_ru', 'Номер счета ' . $input['account_id'] . ' успешно добавлен в список ваших учетных записей.');
        $stmtNotification1->bind_param(':details_ru', 'Номер счета ' . $input['account_id'] . ' успешно добавлен в список ваших учетных записей.'); */
        $stmtNotification1->execute();

        // Redirect based on the language segment
        //$redirectUrl = '/' . Request::segment(1) . '/cpanel/live-accounts';
        //header("Location: $redirectUrl?status-success=تم اضافة الحساب بنجاح");
        $_SESSION['msg'] = "Account Successfully added";
        header("Location:../add-existing-account.php?tab=1");
        exit;

   /*  } else {
        // Create account failed
        $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
        $status = 'status-error';
        $message = '';
        if (Request::segment(1) == 'ar') {
            $message = 'خطأ بفتح الحساب ,حاول مرة أخرى';
        } elseif (Request::segment(1) == 'ru') {
            $message = 'Ошибка добавления аккаунта';
        } else {
            $message = 'Adding Account Failed';
        }
        header("Location: $redirectUrl?$status=$message");
        exit;
    } */
}

?>

