<?php

include("config.php");
session_start();

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

        $stmtDemoAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = :userId AND account_type = 'demo'");
        $stmtDemoAccounts->bindParam(':userId', $user['id']);
        $stmtDemoAccounts->execute();
        $demoAccounts = $stmtDemoAccounts->fetchAll(PDO::FETCH_ASSOC);

        $stmtDocuments = $conn->prepare("SELECT * FROM documents WHERE website_account_id = :userId");
        $stmtDocuments->bindParam(':userId', $user['id']);
        $stmtDocuments->execute();
        $documents = $stmtDocuments->fetchAll(PDO::FETCH_ASSOC);
        

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

// Add demo account
$ret = 'error';
$ptr = fsockopen('85.234.143.239', '443', $errno, $errstr, 5);

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
}

$fx_balance = get_string_between($ret, 'Balance:', 'Equity');
if (strpos($ret, 'Invalid Account') === false && strpos($fx_balance, '.') !== false) {
    $stmtFxAccount = $conn->prepare("INSERT INTO fx_accounts (account_id, account_type, account_group, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (:account_id, :account_type, :account_group, :currency, :leverage, :account_radio_type, :password, :investor_password, :website_accounts_id, :status)");
    $stmtFxAccount->bindParam(':account_id', $input['account_id']);
    $stmtFxAccount->bindParam(':account_type', 0);
    $stmtFxAccount->bindParam(':account_group', $input['account_group']);
    $stmtFxAccount->bindParam(':currency', 0);
    $stmtFxAccount->bindParam(':leverage', $input['leverage']);
    $stmtFxAccount->bindParam(':account_radio_type', $input['account_radio_type']);
    $stmtFxAccount->bindParam(':password', $input['password']);
    $stmtFxAccount->bindParam(':investor_password', $input['password']);
    $stmtFxAccount->bindParam(':website_accounts_id', $user['id']);
    $stmtFxAccount->bindParam(':status', 0);
    $stmtFxAccount->execute();

    $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (:website_accounts_id, :notification_status, :notification, :notification_link)");
    $stmtNotification->bindParam(':website_accounts_id', 999999999);
    $stmtNotification->bindParam(':notification_status', 0);
    $stmtNotification->bindParam(':notification', $user['email'] . ' Has Added A New Demo Account');
    $stmtNotification->bindParam(':notification_link', '/cms/website-account?&bymail=' . $user['email']);
    $stmtNotification->execute();

    // Redirect based on the language segment
    $redirectUrl = '/' . Request::segment(1) . '/cpanel/demo-accounts';
    header("Location: $redirectUrl?status=success");
    exit;
} else {
    // Handle account creation failure, redirect to the appropriate page
    $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
    header("Location: $redirectUrl?status=error");
    exit;
} elseif ($input['account_radio_type'] == 1) {
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

    $ret = 'error';
    // Open socket
    $ptr = fsockopen('89.116.30.28', '443', $errno, $errstr, 5);
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
        $ptr = fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
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
    }

    $fx_account2 = Fx_accounts::where('website_accounts_id', $user->id)->where('account_id', $input['account_id'])->get()->all();
    if (count($fx_account2) > 0) {
        // Create account failed
        $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
        $status = 'status-error';
        $message = '';
        if (Request::segment(1) == 'ar') {
            $message = 'الحساب موجود بالفعل في قائمتك';
        } elseif (Request::segment(1) == 'ru') {
            $message = 'Аккаунт уже есть в вашем списке';
        } else {
            $message = 'Account is already exist in your list';
        }
        header("Location: $redirectUrl?$status=$message");
        exit;
    }

    $fx_balance = get_string_between($ret, 'Balance:', 'Equity');
    if (strpos($ret, 'Invalid Account') === false && strpos($fx_balance, '.') !== false) {
        $stmtFxAccount = $conn->prepare("INSERT INTO fx_accounts (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (:account_id, :account_group, :account_type, :currency, :leverage, :account_radio_type, :password, :investor_password, :website_accounts_id, :status)");
        $stmtFxAccount->bindParam(':account_id', $input['account_id']);
        $stmtFxAccount->bindParam(':account_group', $input['account_group']);
        $stmtFxAccount->bindParam(':account_type', $input['account_type']);
        $stmtFxAccount->bindParam(':currency', 0);
        $stmtFxAccount->bindParam(':leverage', 500);
        $stmtFxAccount->bindParam(':account_radio_type', $input['account_radio_type']);
        $stmtFxAccount->bindParam(':password', $input['password']);
        $stmtFxAccount->bindParam(':investor_password', $input['password']);
        $stmtFxAccount->bindParam(':website_accounts_id', $user->id);
        $stmtFxAccount->bindParam(':status', 0);
        $stmtFxAccount->execute();

        $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (:website_accounts_id, :notification_status, :notification, :notification_link)");
        $stmtNotification->bindParam(':website_accounts_id', 999999999);
        $stmtNotification->bindParam(':notification_status', 0);
        $stmtNotification->bindParam(':notification', $user->email . ' Has Added A New Live Account');
        $stmtNotification->bindParam(':notification_link', '/cms/website-account?&bymail=' . $user->email);
        $stmtNotification->execute();

        $stmtNotification1 = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link, details, notification_ar, details_ar, notification_ru, details_ru) VALUES (:website_accounts_id, :notification_status, :notification, :notification_link, :details, :notification_ar, :details_ar, :notification_ru, :details_ru)");
        $stmtNotification1->bindParam(':website_accounts_id', $user->id);
        $stmtNotification1->bindParam(':notification_status', 0);
        $stmtNotification1->bindParam(':notification', "Account number " . $input['account_id'] . " has been added to your account list successfully");
        $stmtNotification1->bindParam(':notification_link', '/cpanel/live-account');
        $stmtNotification1->bindParam(':details', "Account number " . $input['account_id'] . " has been added to your account list successfully");
        $stmtNotification1->bindParam(':notification_ar', 'تمت إضافة رقم الحساب ' . $input['account_id'] . ' إلى قائمة حسابك بنجاح');
        $stmtNotification1->bindParam(':details_ar', 'تمت إضافة رقم الحساب ' . $input['account_id'] . ' إلى قائمة حسابك بنجاح');
        $stmtNotification1->bindParam(':notification_ru', 'Номер счета ' . $input['account_id'] . ' успешно добавлен в список ваших учетных записей.');
        $stmtNotification1->bindParam(':details_ru', 'Номер счета ' . $input['account_id'] . ' успешно добавлен в список ваших учетных записей.');
        $stmtNotification1->execute();

        // Redirect based on the language segment
        $redirectUrl = '/' . Request::segment(1) . '/cpanel/live-account';
        header("Location: $redirectUrl?status-success=تم اضافة الحساب بنجاح");
        exit;

    } else {
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
    }
}

?>

