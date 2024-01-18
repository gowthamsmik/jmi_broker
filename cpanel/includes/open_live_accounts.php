<?php
include("config.php");
error_reporting(3);
include("functions.php");
$sessionUserId = $_SESSION['sessionuserid'];
try {
  $user = getUserDetails();
  //  $documents = getDocumentsByUser($sessionId);
  $mt4password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
  $mt4investor = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
  // if ($user['country']=='' || $user['mobile']==''){
  //   $errorMessage='Please complete your profile first.';
  //   header("Location: personal-details.php?status-error={$errorMessage}");

  // }
$stmtTotalDocument = $conn->prepare("SELECT COUNT(*) as totalDocument FROM documents WHERE website_accounts_id = ?");
$stmtTotalDocument->bind_param("i", $sessionUserId);
$stmtTotalDocument->execute();
$resultTotalDocument = $stmtTotalDocument->get_result();
$totalDocument = $resultTotalDocument->fetch_assoc()['totalDocument'];
$input=$_POST;
  if ($_POST['account_radio_type'] == 1) {

      if($totalDocument<1){
       echo "x0";
       exit();
      }
    

        
    

      if ($_POST['account_group'] == 1) {
        $account_group_text = 'Fixed Spread Account';
      } elseif ($_POST['account_group'] == 5) {
        $account_group_text = 'Scalping Account';
      } elseif ($_POST['account_group'] == 3) {
        $account_group_text = 'Variable Spread';
      } elseif ($_POST['account_group'] == 4) {
        $account_group_text = 'Bonus Account';
      }

      if ($_POST['account_type'] == 1) {
        $account_type_text = 'Individual';
      } elseif ($_POST['account_type'] == 2) {
        $account_type_text = 'IB';
      }

      $notify = "New live account request from Name={$user[0]['fullname']} - Type={$input['account_type']} - Group={$input['account_group']} - User ID={$user[0]['id']}";

      $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
      $notfications = $conn->prepare($notifyquery);
      $website_accounts_id = 999999999;
      $notification = $notify;
      $notification_link = "#open_account";
      $notification_status = 0;
      $created_at = date('Y-m-d H:i:s');
      $notfications->bind_param("issis", $website_accounts_id, $notification, $notification_link, $notification_status, $created_at);
      $notfications->execute();

      $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
      $notsfications = $conn->prepare($notifysquery);
      $website_accounts_id = $user[0]['id'];
      $notification_status = 0;
      $notification = "Opening account request processed successfully, you will be notified when it's done";
      $details = "Opening account request processed successfully, you will be notified when it's done";
      $notification_ar = 'تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء';
      $details_ar = 'تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء';
      $notification_ru = 'Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.';
      $details_ru = 'Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.';
      $notification_link = '/cpanel/live-account';
      $created_at = date('Y-m-d H:i:s');
      $notsfications->bind_param("iissssssss", $website_accounts_id, $notification_status, $notification, $details, $notification_ar, $details_ar, $notification_ru, $details_ru, $notification_link, $created_at);
      $notsfications->execute();

       
      //  // Backup your default mailer
      
       $data['title']=1;
       $data['name']='Admin';
       $data['details']=' New Open live account request <br />Name= '.$user[0]['fullname'].' <br />Type='.$account_type_text.' - <br />gourp='.$account_group_text.' - <br />user_id='.$user[0]['id'];
       $subject='New Live Account Request';
      //  sendMailsToAdmin($data['details'],$subject);
       supportEmail($data['details'], $subject,$adminEmail,'');


      

        echo 'x4';
        exit();
      } else {
        echo 'x6';
        exit();

      }
    }
   catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>