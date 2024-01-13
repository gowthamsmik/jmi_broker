<?php
include("config.php");
include("functions.php");
error_reporting(3);
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

   
if (!$user['country'] or !$user['mobile']) {
    
$_SESSION['profile_meesage'] = "Please Update Profile.";
    header("Location: ../personal-details.php");
    
}


$login = $input['account_id'];
$password = $input['password'];


 if ($input['account_radio_type'] == 1) {
    // Open live account

    // Check if there is no customer account agreement or fewer than 2 documents approved
    // $xx = 0;
    // foreach ($documents as $document) {
    //     if ($document->type == 8 && $document->status == 1) {
    //         $xx++;
    //     }
    // }

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
    if (count($live_accounts) > 9) {
       
        $_SESSION['add-existing-account-message']='Reached Maximum Live Account.';
        header("Location: ../add-existing-account.php");
        
       
        
    }

    $ret='error';
    //---- open socket
       $ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
    //---- check connection
       if($ptr)
         {
          //---- send request
          echo "1 sus";
          if(fputs($ptr,"WUSERINFO-login=$login|password=$password\nQUIT\n"))
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

        }
if($ret == Null or $ret == 'error')
{
//---- open socket
$ptr=fsockopen('92.204.139.189','443',$errno,$errstr,5);
//---- check connection
if($ptr)
{
//---- send request

if(fputs($ptr,"WUSERINFO-login=$login|password=$password\nQUIT\n"))
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

}
}

        $stmtFxAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = ? and  account_id = ?");
        $stmtFxAccounts->bind_param('ii', $userId,$input['account_id']);
        $stmtFxAccounts->execute();
        $stmtFxAccounts = $stmtFxAccounts->get_result();
        $fxAccounts= $stmtFxAccounts->fetch_all(MYSQLI_ASSOC);
       
        if (count($fxAccounts) > 0) {
            $_SESSION['add-existing-account-message']="Account is already exist in your list";
            header("Location: ../add-existing-account.php");
        } 
      
       
       
        $fx_balance =get_string_between($ret, 'Balance:', 'Equity');
      
        if(strpos($ret, 'Invalid Account') === false && strpos($fx_balance, '.') !== false) {
           
        

            $accountID = $input['account_id'];
            $accountgrp = $input['account_group'];
            $accounttype = $input['account_type'];
            $leverage = 500;
            $currency = 0;
            $accradiotype = $input['account_radio_type'];
            $password = $input['password'];
            $status = 0;


           
   
        $stmtFxAccount = $conn->prepare("INSERT INTO fx_accounts (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmtFxAccount->bind_param('isssiiisii', $accountID,$accountgrp,$accounttype,$currency,$leverage,$accradiotype,$password,$password,$userId,$status );
        $stmtFxAccount->execute();

        

        $emailacc = $user['email'].'Has Added A New Live Account';
        $notlink = '/cms/website-account?&bymail='.$user['email'].'&';
        $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (999999999,?,?,?)");
        $stmtNotification->bind_param('iss',$status,$emailacc,$notlink );
        $stmtNotification->execute();


        


        $notify = "Account number " . $input['account_id'] . " has been added to your account list successfully";
        $notifylink = '/cpanel/live-account';
        $notifydetails = "Account number " . $input['account_id'] . " has been added to your account list successfully";

        $notification_ar='تمت إضافة رقم الحساب '.$input['account_id'].' إلى قائمة حسابك بنجاح';
        $details_ar='تمت إضافة رقم الحساب '.$input['account_id'].' إلى قائمة حسابك بنجاح';

        $notification_ru='Номер счета '.$input['account_id'].' успешно добавлен в список ваших учетных записей.';
        $details_ru='Номер счета '.$input['account_id'].' успешно добавлен в список ваших учетных записей.';


        $stmtNotification1 = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link, details,notification_ar,details_ar,notification_ru,details_ru) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmtNotification1->bind_param('iisssssss', $userId,$status,$notify,$notifylink,$notifydetails,$notification_ar,$details_ar,$notification_ru,$details_ru);  
        $stmtNotification1->execute();
        
       
        $_SESSION['add-existing-account-message'] = "Account Successfully added";
       
        
        }
    else if(strpos($ret, 'Invalid Account') !== false){
        $_SESSION['add-existing-account-message'] = 'Invalid Account';
    }
    else{
      
        $_SESSION['add-existing-account-message'] = 'Adding Account Failed';
    }
    header("Location: ../add-existing-account.php");
    
   
      
}


?>

