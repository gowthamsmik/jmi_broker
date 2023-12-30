<?php

include("config.php");
session_start();

$input = $_POST; // Assuming form data is submitted using POST
$sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$location = GeoIP::getLocation();

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

// Fetch live accounts
$stmtLiveAccounts = $conn->prepare("SELECT * FROM fx_accounts_live WHERE user_id = :userId");
$stmtLiveAccounts->bindParam(':userId', $user['id']);
$stmtLiveAccounts->execute();
$liveAccounts = $stmtLiveAccounts->fetchAll(PDO::FETCH_ASSOC);

// Fetch demo accounts
$stmtDemoAccounts = $conn->prepare("SELECT * FROM fx_accounts_demo WHERE user_id = :userId");
$stmtDemoAccounts->bindParam(':userId', $user['id']);
$stmtDemoAccounts->execute();
$demoAccounts = $stmtDemoAccounts->fetchAll(PDO::FETCH_ASSOC);

// Fetch documents
$stmtDocuments = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = :userId");
$stmtDocuments->bindParam(':userId', $user['id']);
$stmtDocuments->execute();
$documents = $stmtDocuments->fetchAll(PDO::FETCH_ASSOC);

// Check if profile is not completed
if ($user['country'] == '' || $user['mobile'] == '') {
    $errorMessage = '';
    if ($_REQUEST['lang'] == 'ar') {
        $errorMessage = 'من فضلك اكمل الملف الشخصى أولا.';
    } elseif ($_REQUEST['lang'] == 'ru') {
        $errorMessage = 'Пожалуйста, сначала заполните свой профиль.';
    } else {
        $errorMessage = 'Please complete your profile first.';
    }

    header("Location: /{$_REQUEST['lang']}/cpanel/profile?status-error={$errorMessage}");
    exit();
}

if ($input['account_radio_type'] == 0) {
    // Open demo account

    // Check if the user has 10 demo accounts
    if (count($demoAccounts) > 9) {
        $errorMessage = '';
        if ($_REQUEST['lang'] == 'ar') {
            $errorMessage = 'لديك الحد الأقصى لعدد الحسابات التجريبية المسموح بها.';
        } elseif ($_REQUEST['lang'] == 'ru') {
            $errorMessage = 'У вас достигнут максимальный лимит демо-счетов.';
        } else {
            $errorMessage = 'You have reached the maximum limit of demo accounts allowed.';
        }

        header("Location: /{$_REQUEST['lang']}/cpanel/open-account?status-error={$errorMessage}");
        exit();
    }

    $mt4password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
    $mt4investor = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);

    // Prepare user data for MT4 account creation
    $mt4UserData = [
        'email' => $user['email'],
        'password' => $mt4password,
        'group' => $input['account_group'],
        'leverage' => $input['leverage'],
        'zipcode' => $user['post_code'],
        'country' => $user['country'],
        'state' => ' ',
        'city' => $user['town_city'],
        'address' => $user['address1'],
        'comment' => ' ',
        'phone_password' => ' ',
        'status' => ' ',
        'id' => $user['id'],
        'agent' => ' ',
        'phone' => '+' . $user['country_code'] . $user['mobile'],
        'name' => $user['fullname'],
        'investor' => $mt4investor,
        'send_reports' => 1,
        'deposit' => $input['deposit'],
    ];

    // Prepare MT4 account creation query
    $mt4Query = "NEWACCOUNT MASTER=JMIBrokers2016|IP={$_SERVER['REMOTE_ADDR']}|GROUP={$mt4UserData['group']}|NAME={$mt4UserData['name']}|"
        . "PASSWORD={$mt4UserData['password']}|INVESTOR={$mt4UserData['investor']}|EMAIL={$mt4UserData['email']}|COUNTRY={$mt4UserData['country']}|"
        . "STATE={$mt4UserData['state']}|CITY={$mt4UserData['city']}|ADDRESS={$mt4UserData['address']}|COMMENT={$mt4UserData['comment']}|"
        . "PHONE={$mt4UserData['phone']}|PHONE_PASSWORD={$mt4UserData['phone_password']}|STATUS={$mt4UserData['status']}|ZIPCODE={$mt4UserData['zipcode']}|"
        . "ID={$mt4UserData['id']}|LEVERAGE={$mt4UserData['leverage']}|AGENT={$mt4UserData['agent']}|SEND_REPORTS={$mt4UserData['send_reports']}|DEPOSIT={$mt4UserData['deposit']}";

    // Send MT4 account creation request
    $mt4Response = sendMT4Request('85.234.143.239', '443', $mt4Query);

    if (strpos($mt4Response, 'blocked') !== false && strpos($mt4Response, '60') !== false) {
        $errorMessage = '';
        if ($_REQUEST['lang'] == 'ar') {
            $errorMessage = 'حدث خطأ أثناء فتح الحساب، يرجى المحاولة مرة أخرى. الرجاء الانتظار لمدة 60 ثانية والمحاولة مرة أخرى.';
        } elseif ($_REQUEST['lang'] == 'ru') {
            $errorMessage = 'Ошибка при создании учетной записи. Пожалуйста, подождите 60 секунд и повторите попытку.';
        } else {
            $errorMessage = 'Account creation failed. Please wait 60 seconds and try again.';
        }

        header("Location: /{$_REQUEST['lang']}/cpanel/open-account?status-error={$errorMessage}");
        exit();
    }

    if (strpos($mt4Response, 'OK') !== false) {
        $mt4Login = substr($mt4Response, strpos($mt4Response, "=") + 1);

        // Save demo account details to the database
        $stmtSaveDemoAccount = $conn->prepare("INSERT INTO fx_accounts_demo (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (:account_id, :account_group, :account_type, :currency, :leverage, :account_radio_type, :password, :investor_password, :website_accounts_id, :status)");
        $stmtSaveDemoAccount->bindParam(':account_id', $mt4Login);
        $stmtSaveDemoAccount->bindParam(':account_group', $input['account_group']);
        $stmtSaveDemoAccount->bindValue(':account_type', 0); // Assuming account_type for demo is always 0
        $stmtSaveDemoAccount->bindValue(':currency', 0); // Assuming currency for demo is always 0
        $stmtSaveDemoAccount->bindParam(':leverage', $input['leverage']);
        $stmtSaveDemoAccount->bindParam(':account_radio_type', $input['account_radio_type']);
        $stmtSaveDemoAccount->bindParam(':password', $mt4password);
        $stmtSaveDemoAccount->bindParam(':investor_password', $mt4investor);
        $stmtSaveDemoAccount->bindParam(':website_accounts_id', $user['id']);
        $stmtSaveDemoAccount->bindValue(':status', 0); // Assuming initial status is always 0
        $stmtSaveDemoAccount->execute();

        // Create a notification for the admin
        $stmtAdminNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (:adminId, :notificationStatus, :notification, :notificationLink)");
        $stmtAdminNotification->bindValue(':adminId', 999999999);
        $stmtAdminNotification->bindValue(':notificationStatus', 0);
        $stmtAdminNotification->bindValue(':notification', "{$user['email']} has created a new demo account");
        $stmtAdminNotification->bindValue(':notificationLink', "/cms/website-account?&bymail={$user['email']}&");
        $stmtAdminNotification->execute();

        $successMessage = '';
        if ($_REQUEST['lang'] == 'ar') {
            $successMessage = 'تم فتح الحساب بنجاح';
        } elseif ($_REQUEST['lang'] == 'ru') {
            $successMessage = 'Аккаунт успешно создан';
        } else {
            $successMessage = 'Account created successfully';
        }

        header("Location: /{$_REQUEST['lang']}/cpanel/demo-accounts?status-success={$successMessage}");
        exit();
    } else {
        $errorMessage = '';
        if ($_REQUEST['lang'] == 'ar') {
            $errorMessage = 'حدث خطأ أثناء فتح الحساب، يرجى المحاولة مرة أخرى.';
        } elseif ($_REQUEST['lang'] == 'ru') {
            $errorMessage = 'Ошибка при создании учетной записи';
        } else {
            $errorMessage = 'Account creation failed';
        }

        header("Location: /{$_REQUEST['lang']}/cpanel/open-account?status-error={$errorMessage}");
        exit();
    }
} elseif ($input['account_radio_type'] == 1) {
    // Open live account

    // Check if there is no customer account agreement or less than 2 documents approved
    $approvedDocumentCount = 0;
    foreach ($documents as $document) {
        if ($document['status'] == 1) {
            $approvedDocumentCount++;
        }
    }

    if ($approvedDocumentCount < 2) {
        $errorMessage = '';
        if ($_REQUEST['lang'] == 'ar') {
            $errorMessage = 'من فضلك أرفع المستندات أولاً.';
        } elseif ($_REQUEST['lang'] == 'ru') {
            $errorMessage = 'Пожалуйста, сначала загрузите свои документы.';
        } else {
            $errorMessage = 'Please upload your documents first.';
        }

        header("Location: /{$_REQUEST['lang']}/cpanel/documents?status-error={$errorMessage}");
        exit();
    }

    // Create a notification for the admin about the new live account request
    $stmtAdminNotificationLiveAccount = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (:adminId, :notificationStatus, :notification, :notificationLink)");
    $stmtAdminNotificationLiveAccount->bindValue(':adminId', 999999999);
    $stmtAdminNotificationLiveAccount->bindValue(':notificationStatus', 0);
    $stmtAdminNotificationLiveAccount->bindValue(':notification', "New live account request from Name={$user['fullname']} - Type={$input['account_type']} - Group={$input['account_group']} - User ID={$user['id']}");
    $stmtAdminNotificationLiveAccount->bindValue(':notificationLink', '#open_account');
    $stmtAdminNotificationLiveAccount->execute();

    // Create a notification for the user about the live account request
    $stmtUserNotificationLiveAccount = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (:userId, :notificationStatus, :notification, :details, :notificationAr, :detailsAr, :notificationRu, :detailsRu, :notificationLink)");
    $stmtUserNotificationLiveAccount->bindParam(':userId', $user['id']);
    $stmtUserNotificationLiveAccount->bindValue(':notificationStatus', 0);
    $stmtUserNotificationLiveAccount->bindValue(':notification', 'Opening account request processed successfully, you will be notified when its done');
    $stmtUserNotificationLiveAccount->bindValue(':details',"Opening account request processed successfully, you will be notified when it's done");
    
    $stmtUserNotificationLiveAccount->bindValue(':notification_ar', 'تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء');
    $stmtUserNotificationLiveAccount->bindValue(':details_ar','تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء');

    $stmtUserNotificationLiveAccount->bindValue(':notification_ru', 'Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.');
    $stmtUserNotificationLiveAccount->bindValue(':details_ru','Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.');

    $stmtUserNotificationLiveAccount->execute();



     // Backup your default mailer
     $backup = Mail::getSwiftMailer();
     $data['title']=1;
     $data['name']='Admin';
     $data['details']=' New Open live account request <br />Name= '.$user->fullname.' <br />Type='.$account_type_text.' - <br />gourp='.$account_group_text.' - <br />user_id='.$user->id;
     $subject='New Live Account Request';
     Mail::to('support@jmibrokers.com')->send(new Queued($data,$subject));
     // Restore your original mailer
     Mail::setSwiftMailer($backup);


     if( Request::segment(1) =='ru'){
         return Redirect::to('/ru/cpanel/live-accounts')->with('status-success', 'Запрос на открытие счета Успешно, Вы получите уведомление об этом в течение 1 часа');
     }elseif( Request::segment(1) =='ar'){
         return Redirect::to('/ar/cpanel/live-accounts')->with('status-success', 'تم استلام طلب فتح الحساب بنجاح');
     }else{
         return Redirect::to('/en/cpanel/live-accounts')->with('status-success', 'Opening account request processed successfully');
     }

        $mt4password = generateRandomString(8);
        $mt4investor = generateRandomString(8);

        $userEmail = $user->email;
        $groupName = $input['account_group'];
        $leverage = $input['leverage'];
        $postCode = $user->post_code;
        $country = $user->country;
        $townCity = $user->town_city;
        $address1 = $user->address1;
        $userID = $user->id;
        $countryCode = $user->country_code;
        $mobile = $user->mobile;
        $fullName = $user->fullname;

        //--- prepare query
        $query = "NEWACCOUNT MASTER=JMIBrokers2015|IP=$_SERVER[REMOTE_ADDR]|GROUP=$groupName|NAME=$fullName|" .
            "PASSWORD=$mt4password|INVESTOR=$mt4investor|EMAIL=$userEmail|COUNTRY=$country|" .
            "STATE= |CITY=$townCity|ADDRESS=$address1|COMMENT= |" .
            "PHONE=+$countryCode$mobile|PHONE_PASSWORD= |STATUS= |ZIPCODE=$postCode|" .
            "ID=$userID|LEVERAGE=$leverage|AGENT= |SEND_REPORTS=1";

            $ret = 'error';

            // Open socket
            $ptr = fsockopen('89.116.30.28', '443', $errno, $errstr, 5);
            
            // Check connection
            if ($ptr) {
                // Send request
                if (fputs($ptr, "W$query\nQUIT\n") !== false) {
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
            if($ret == Null or $ret == 'error')
            {
                $ptr=fsockopen('92.204.139.189','443',$errno,$errstr,5);
//---- check connection
                if($ptr)
                {
                    //---- send request
                    if(fputs($ptr,"W$query\nQUIT\n")!=FALSE)
                    {
                        //---- clear default answer
                        $ret='';
                        //---- receive answer
                        while(!feof($ptr))
                        {
                            $line=fgets($ptr,128);
                            if($line=="end\r\n") break;
                            $ret.= $line;
                        }
                    }
                    fclose($ptr);
                }
            }
            if (strpos($ret, 'OK') !== false) {
                $mt4login = substr($ret, strpos($ret, "=") + 1);
            
                // Assuming you have a function to insert data into the database
                $fx_account_data = [
                    'account_id' => $mt4login,
                    'account_group' => $input['account_group'],
                    'account_type' => $input['account_type'],
                    'currency' => 0,
                    'leverage' => $input['leverage'],
                    'account_radio_type' => $input['account_radio_type'],
                    'password' => $mt4password,
                    'investor_password' => $mt4investor,
                    'website_accounts_id' => $user->id,
                    'status' => 0,
                ];
                $fx_account = new stdClass();

                // Set Fx_accounts data
                $fx_account->account_id = $mt4login;
                $fx_account->account_group = $input['account_group'];
                $fx_account->account_type = $input['account_type'];
                $fx_account->currency = 0;
                $fx_account->leverage = $input['leverage'];
                $fx_account->account_radio_type = $input['account_radio_type'];
                $fx_account->password = $mt4password;
                $fx_account->investor_password = $mt4investor;
                $fx_account->website_accounts_id = $user->id;
                $fx_account->status = 0;

                // Prepare the SQL statement
                $sqlFxAccount = "INSERT INTO fx_accounts (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmtFxAccount = $conn->prepare($sqlFxAccount);

                // Bind parameters
                $stmtFxAccount->bind_param('ssssssssss', $fx_account->account_id, $fx_account->account_group, $fx_account->account_type, $fx_account->currency, $fx_account->leverage, $fx_account->account_radio_type, $fx_account->password, $fx_account->investor_password, $fx_account->website_accounts_id, $fx_account->status);

                // Execute the query
                $stmtFxAccount->execute();


                $notification_data = [
                    'website_accounts_id' => 999999999,
                    'notification_status' => 0,
                    'notification' => $user->email . 'Has Created A New Live Account',
                    'notification_link' => '/cms/website-account?&bymail=' . $user->email . '&',
                ];
                // Create a new Notifications object or use stdClass if you don't have a class
                $notification = new stdClass();

                // Set notification data
                $notification->website_accounts_id = 999999999;
                $notification->notification_status = 0;
                $notification->notification = $user->email . ' Has Created A New Live Account';
                $notification->notification_link = '/cms/website-account?&bymail=' . $user->email;

                // Prepare the SQL statement for notifications
                $sqlNotification = "INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (?, ?, ?, ?)";
                $stmtNotification = $conn->prepare($sqlNotification);

                // Bind parameters for notifications
                $stmtNotification->bind_param('ssss', $notification->website_accounts_id, $notification->notification_status, $notification->notification, $notification->notification_link);

                // Execute the query for notifications
                $stmtNotification->execute();
                
                // Redirect based on the language segment
                if (isset($_GET['lang'])) {
                    $lang = $_GET['lang'];
                } else {
                    $lang = 'en'; // Default language
                }
            
                switch ($lang) {
                    case 'ru':
                        header('Location: /ru/cpanel/live-accounts');
                        exit();
                    case 'ar':
                        header('Location: /ar/cpanel/live-accounts');
                        exit();
                    default:
                        header('Location: /en/cpanel/live-accounts');
                        exit();
                }
            } else {
                // Redirect based on the language segment
                if (isset($_GET['lang'])) {
                    $lang = $_GET['lang'];
                } else {
                    $lang = 'en'; // Default language
                }
            
                switch ($lang) {
                    case 'ru':
                        header('Location: /ru/cpanel/open-account');
                        exit();
                    case 'ar':
                        header('Location: /ar/cpanel/open-account');
                        exit();
                    default:
                        header('Location: /en/cpanel/open-account');
                        exit();
                }
            }}
    ?>