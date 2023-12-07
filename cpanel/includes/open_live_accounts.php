<?php
include("config.php");
error_reporting(3);
include("../../includes/softwareinclude/functions.php");


$sessionId = $_SESSION['sessionuserid'];
try {
  $user = getUser();
  //  $documents = getDocumentsByUser($sessionId);
  $mt4password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
  $mt4investor = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
  // if ($user['country']=='' || $user['mobile']==''){
  //   $errorMessage='Please complete your profile first.';
  //   header("Location: personal-details.php?status-error={$errorMessage}");

  // }
  if ($_POST['account_radio_type'] == 0) {
    
    $mt4UserData = [
      'email' => $user[0]['email'],
      'password' => $mt4password,
      'group' => $_POST['account_group'],
      'leverage' => $_POST['leverage'],
      'zipcode' => $user[0]['post_code'],
      'country' => $user[0]['country'],
      'state' => ' ',
      'city' => $user[0]['town_city'],
      'address' => $user[0]['address1'],
      'comment' => ' ',
      'phone_password' => ' ',
      'status' => ' ',
      'id' => $user[0]['id'],
      'agent' => ' ',
      'phone' => '+' . $user[0]['country_code'] . $user[0]['mobile'],
      'name' => $user[0]['fullname'],
      'investor' => $mt4investor,
      'send_reports' => 1,
      'deposit' => $_POST['currencyBase'],
    ];

    $mt4Query = "NEWACCOUNT MASTER=JMIBrokers2016|IP={$_SERVER['REMOTE_ADDR']}|GROUP={$mt4UserData['group']}|NAME={$mt4UserData['name']}|"
      . "PASSWORD={$mt4UserData['password']}|INVESTOR={$mt4UserData['investor']}|EMAIL={$mt4UserData['email']}|COUNTRY={$mt4UserData['country']}|"
      . "STATE={$mt4UserData['state']}|CITY={$mt4UserData['city']}|ADDRESS={$mt4UserData['address']}|COMMENT={$mt4UserData['comment']}|"
      . "PHONE={$mt4UserData['phone']}|PHONE_PASSWORD={$mt4UserData['phone_password']}|STATUS={$mt4UserData['status']}|ZIPCODE={$mt4UserData['zipcode']}|"
      . "ID={$mt4UserData['id']}|LEVERAGE={$mt4UserData['leverage']}|AGENT={$mt4UserData['agent']}|SEND_REPORTS={$mt4UserData['send_reports']}|DEPOSIT={$mt4UserData['deposit']}";

    //$mt4Response = sendMT4Request('85.234.143.239', '443', $mt4Query);

    $mt4Response = 'hek';

    if ($mt4Response=='blocked') {
      echo 'x1';
      exit();
      //header("Location: deposit.php");
      //header("Location: open-live-account.php?status-error={$errorMessage}");
      //exit();
    }
      //if (strpos($mt4Response, 'OK') !== false) {
      if ($mt4Response=='hek') {
        //$mt4Login = substr($mt4Response, strpos($mt4Response, "=") + 1);
        $accountId=random_int(10000000, 99999999);
        $savedemoquery = "insert into fx_accounts (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) values (?,?,?,?,?,?,?,?,?,?)";
        $saveDemoAccount = $conn->prepare($savedemoquery);
        $account_id = $accountId;
        $account_group = (int) $_POST['account_group'];
        $account_type = (int) $_POST['account_type'];
        $currency = 0;
        $leverage = $_POST['leverage'];
        $account_radio_type = $_POST['account_radio_type'];
        $password = $mt4password;
        $investor_password = $mt4investor;
        $website_accounts_id = $user[0]['id'];
        $status = 1;
        $saveDemoAccount->bind_param("iiiisissii", $account_id, $account_group, $account_type, $currency, $leverage, $account_radio_type, $password, $investor_password, $website_accounts_id, $status);
        $executeResult = $saveDemoAccount->execute();

        

        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification = "{$user[0]['email']} has created a new demo account";
        $notification_link = "/spanel/website-accounts?&bymail={$user[0]['email']}&y";
        $notification_status = 0;
        $created_at = date('Y-m-d H:i:s');
        $notfications->bind_param("issis", $website_accounts_id, $notification, $notification_link, $notification_status, $created_at);
        $notfications->execute();


        echo 'x2';
        exit();
      } else {

        echo 'x3';
        exit();

        
      }
    } elseif ($_POST['account_radio_type'] == 1) {

      // $approvedDocumentCount = 0;
      // foreach ($documents as $document) {
      //   if ($document['status'] == 1) {
      //     $approvedDocumentCount++;
      //   }
      // }
      // echo "eeeeeeeeeee";
      // if ($approvedDocumentCount < 2) {

      //   echo '[Please upload your documents first.]';
      //   exit();

        
      // }

      // if ($_POST['account_group'] == 1) {
      //   $account_group_text = 'Fixed Spread Account';
      // } elseif ($_POST['account_group'] == 5) {
      //   $account_group_text = 'Scalping Account';
      // } elseif ($_POST['account_group'] == 3) {
      //   $account_group_text = 'Variable Spread';
      // } elseif ($_POST['account_group'] == 4) {
      //   $account_group_text = 'Bonus Account';
      // }

      // if ($_POST['account_type'] == 1) {
      //   $account_type_text = 'Individual';
      // } elseif ($_POST['account_type'] == 2) {
      //   $account_type_text = 'IB';
      // }

      // $notify = "New live account request from Name={$user[0]['fullname']} - Type={$input['account_type']} - Group={$input['account_group']} - User ID={$user[0]['id']}";

      // $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
      // $notfications = $conn->prepare($notifyquery);
      // $website_accounts_id = 999999999;
      // $notification = $notify;
      // $notification_link = "#open_account";
      // $notification_status = 0;
      // $created_at = date('Y-m-d H:i:s');
      // $notfications->bind_param("issis", $website_accounts_id, $notification, $notification_link, $notification_status, $created_at);
      // $notfications->execute();

      // $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
      // $notsfications = $conn->prepare($notifysquery);
      // $website_accounts_id = $websiteAccountId;
      // $notification_status = 0;
      // $notification = "Opening account request processed successfully, you will be notified when it's done";
      // $details = "Opening account request processed successfully, you will be notified when it's done";
      // $notification_ar = 'تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء';
      // $details_ar = 'تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء';
      // $notification_ru = 'Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.';
      // $details_ru = 'Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.';
      // $notification_link = '/cpanel/live-accounts';
      // $created_at = date('Y-m-d H:i:s');
      // $notsfications->bind_param("iissssssss", $website_accounts_id, $notification_status, $notification, $details, $notification_ar, $details_ar, $notification_ru, $details_ru, $notification_link, $created_at);
      // $notsfications->execute();


      //  // Backup your default mailer
      //  $backup = Mail::getSwiftMailer();
      //  $data['title']=1;
      //  $data['name']='Admin';
      //  $data['details']=' New Open live account request <br />Name= '.$user->fullname.' <br />Type='.$account_type_text.' - <br />gourp='.$account_group_text.' - <br />user_id='.$user->id;
      //  $subject='New Live Account Request';
      //  Mail::to('support@jmibrokers.com')->send(new Queued($data,$subject));
      //  // Restore your original mailer
      //  Mail::setSwiftMailer($backup);


      // echo 'x4';
      // exit();


      $mt4password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
      $mt4investor = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);

      $mt4UserData = [
        'email' => $user[0]['email'],
        'password' => $mt4password,
        'group' => $input['account_group'],
        'leverage' => $input['leverage'],
        'zipcode' => $user[0]['post_code'],
        'country' => $user[0]['country'],
        'state' => ' ',
        'city' => $user[0]['town_city'],
        'address' => $user[0]['address1'],
        'comment' => ' ',
        'phone_password' => ' ',
        'status' => ' ',
        'id' => $user[0]['id'],
        'agent' => ' ',
        'phone' => '+' . $user[0]['country_code'] . $user[0]['mobile'],
        'name' => $user[0]['fullname'],
        'investor' => $mt4investor,
        'send_reports' => 1,
        //'deposit' => $input['deposit'],
      ];

      $mt4Query = "NEWACCOUNT MASTER=JMIBrokers2015|IP={$_SERVER['REMOTE_ADDR']}|GROUP={$mt4UserData['group']}|NAME={$mt4UserData['name']}|"
        . "PASSWORD={$mt4UserData['password']}|INVESTOR={$mt4UserData['investor']}|EMAIL={$mt4UserData['email']}|COUNTRY={$mt4UserData['country']}|"
        . "STATE={$mt4UserData['state']}|CITY={$mt4UserData['city']}|ADDRESS={$mt4UserData['address']}|COMMENT={$mt4UserData['comment']}|"
        . "PHONE={$mt4UserData['phone']}|PHONE_PASSWORD={$mt4UserData['phone_password']}|STATUS={$mt4UserData['status']}|ZIPCODE={$mt4UserData['zipcode']}|"
        . "ID={$mt4UserData['id']}|LEVERAGE={$mt4UserData['leverage']}|AGENT={$mt4UserData['agent']}|SEND_REPORTS={$mt4UserData['send_reports']}}";

     
        $dfe='3332';
        if ($dfe="3332") {

        //$mt4login = substr($ret, strpos($ret, "=") + 1);
        $mt4login = '76543212';

        $accountId=random_int(10000000, 99999999);
        $savedemoquery = "insert into fx_accounts (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) values (?,?,?,?,?,?,?,?,?,?)";
        $saveDemoAccount = $conn->prepare($savedemoquery);
        $account_id = $accountId;
        $account_group = (int) $_POST['account_group'];
        $account_type = (int) $_POST['account_type'];
        $currency = 0;
        $leverage = $_POST['leverage'];
        $account_radio_type = $_POST['account_radio_type'];
        $password = $mt4password;
        $investor_password = $mt4investor;
        $website_accounts_id = $user[0]['id'];
        $status = 1;
        $saveDemoAccount->bind_param("iiiisissii", $account_id, $account_group, $account_type, $currency, $leverage, $account_radio_type, $password, $investor_password, $website_accounts_id, $status);
        $executeResult = $saveDemoAccount->execute();


        $notifysquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notficationsfx = $conn->prepare($notifysquery);
        $website_accounts_id = 999999999;
        $notification = "{$user[0]['email']} has created a New Live Account";
        $notification_link = "/spanel/website-accounts?&bymail={$user[0]['email']}&y";
        $notification_status = 0;
        $created_at = date('Y-m-d H:i:s');
        $notficationsfx->bind_param("issis", $website_accounts_id, $notification, $notification_link, $notification_status, $created_at);
        $notficationsfx->execute();

        echo 'x5';
        exit();
      } else {
        echo 'x6';
        exit();

      }
    }
  } catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>