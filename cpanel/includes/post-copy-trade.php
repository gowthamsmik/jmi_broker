<?php
include('config.php');
error_reporting(3);
//session_start();

// Check if the user is logged in
if ($_SESSION['sessionuser']) {

    $input = $_POST;
    $copy_from = $input['copy_from'];

    if($input['copy_from']=='other'){
        $copy_from=$input['other_account'];
    }
    $session_user = $_SESSION['sessionuser'];
    
    // Get user data
    $userQuery = "SELECT * FROM website_accounts WHERE username = ? OR email = ?";
    $userStmt = $conn->prepare($userQuery);
    $userStmt->bind_param("ss", $session_user, $session_user);
    $userStmt->execute();
    $userResult = $userStmt->get_result();
    
    if ($userResult && $userResult->num_rows > 0) {
        $user = $userResult->fetch_assoc();

        // Get user notifications
        $userId = (int) $user['id'];



        //check of password
$query="|MODE=7|LOGIN=".$input['copy_to']."|[CPASS=".$input['password'];
//--- prepare query
//--- send request
$ret='error';
//---- open socket
$q = "WMQWEBAPI MASTER=jmi2020".$query."\nQUIT\n";

/*$ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
//---- check connection
if($ptr)
{
//---- send request
  if(fputs($ptr,$q)!=FALSE)
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
}*/

if($ret == Null or $ret =='error')
{
//--- send request
$ret='error';
//---- open socket
$q = "WMQWEBAPI MASTER=jmi2020".$query."\nQUIT\n";
$ptr=fsockopen('92.204.139.189','443',$errno,$errstr,5);
//---- check connection
if($ptr)
{
//---- send request
if(fputs($ptr,$q)!=FALSE)
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

$ret = substr($ret,0,strlen($ret)-1);
$result = json_decode($ret);

if(is_object($result) && isset($result->result) && $result->result==0){

        // Get user live accounts
        $accountsQuery = "SELECT * FROM fx_accounts WHERE website_accounts_id = ?";
        $accountsStmt = $conn->prepare($accountsQuery);
        $accountsStmt->bind_param("i", $userId);
        $accountsStmt->execute();
        $accountsResult = $accountsStmt->get_result();
        $accounts = $accountsResult->fetch_all(MYSQLI_ASSOC);

       
            
           
            $success = true;
            $copyto = $input['copy_to'];
            $percentage= $input['percentage'];
            $useremail=$user['email'];
            $status=0;
            $details_user= '';
            $details_add='';
           
            // Insert copy trade record
            $transactionQuery = "INSERT INTO copy_trade (website_accounts_id, copy_from, copy_to, percentage, status, details_user, details_admin)
                                 VALUES (?, ?, ?, ?,?,?,?)";
            $transactionStmt = $conn->prepare($transactionQuery);
            $transactionStmt->bind_param("iiidiss", $userId, $copy_from, $copyto, $percentage,$status,$details_user,$details_add);
            $transactionStmt->execute();
         
            // Insert user notification
            $notificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link)
                                 VALUES (?, 0, 'Your copy trade request has been received successfully.', 'Your copy trade request has been received successfully.', 'تم استلام طلب نسخ التداول الخاص بك بنجاح.', 'تم استلام طلب نسخ التداول الخاص بك بنجاح.', 'Ваш запрос на копирование был успешно получен.', 'Ваш запрос на копирование был успешно получен.', '/cpanel/copy-trade')";
            $notificationStmt = $conn->prepare($notificationQuery);
            $notificationStmt->bind_param("i", $userId);
            $notificationStmt->execute();
        
            $website_account_adminid=999999999;
            $notification_status=0;
            $notification_message="Successfuly copy the trade";
            $notification_link='/cms/copy-trade?&bymail=';

            // Insert admin notification
           
            $adminNotificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link)
                                       VALUES (?,?,?,?)";
            $adminNotificationStmt = $conn->prepare($adminNotificationQuery);
            $adminNotificationStmt->bind_param("iiss", $website_account_adminid, $notification_status,$notification_message,$notification_link);
            $adminNotificationStmt->execute();

            // Redirect based on language segment
            $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');
            $_SESSION['cpysuccess'] = true;
            header("Location: ../copy-trade.php?tab=1");
            
        }
        else{
            $_SESSION['copy_trade_meesage']="Copy request failed";
            header("Location: ../copy-trade.php?tab=1");
        }
    }
}

?>
