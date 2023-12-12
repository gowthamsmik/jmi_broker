<?php
error_reporting(3);
include('config.php');
include("functions.php");
session_start();
$websiteAccountId = $_SESSION["sessionuserid"];


 global $conn;
 if($_GET['paymentType']=='epay'){
 try {

    $ys =$_GET['paymentType'];

    $paymentType =$_POST['paymentType'];
    $accountNumber = $_POST['epayAccountId'];
    $currency=$_POST['epayCurrency'];
    $type=1;
    $epayAccountNumber=$_POST['epayAccount'];
    $amount=$_POST['epayAmount'];
    $website_accounts_id=$_POST['websiteAccountId'];

    $notify= "$amount  New Epay Withdraw";


    $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $account = (float)$_POST['epayAccountId'];
        $amount = (float)$_POST['epayAmount'];
        $currency = (int)$_POST['epayCurrency'];
        $details_admin = (int)$_POST['epayAccount'];
        $website_accounts_id = $websiteAccountId;
        $via = $_GET['paymentType'];
        $type = 1;
        $status = 0;
        $trasactions->bind_param("idsisii",$account,$amount,$currency,$type,$via,$website_accounts_id,$status);
        $trasactions->execute();

        echo $notify."stsyhs";


        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification =$notify;
        $notification_link = $notify;
        $notification_status = 0;
        $created_at=date('Y-m-d H:i:s');
        $notfications->bind_param("issis",$website_accounts_id,$notification,$notification_link,$notification_status,$created_at);
        $notfications->execute();

        echo "ehee";
        $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
        $notsfications = $conn->prepare($notifysquery);
        $website_accounts_id = $websiteAccountId;
        $notification_status = 0;
        $notification ='Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $details='Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $notification_ar='تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $details_ar='تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $notification_ru='Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $details_ru='Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $notification_link = '/cpanel/transaction-history';
        $created_at=date('Y-m-d H:i:s');
        $notsfications->bind_param("iissssssss",$website_accounts_id,$notification_status,$notification,$details,$notification_ar,$details_ar,$notification_ru,$details_ru,$notification_link,$created_at);
        $notsfications->execute();
        echo "end";

        header("Location:../transactional-history.php");

        // $notification1=new Notifications;
        // $notification1->website_accounts_id=$user->id;
        // $notification1->notification_status=0;
        // $notification1->notification='Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        // $notification1->details='Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        // $notification1->notification_ar='تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        // $notification1->details_ar='تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';

        // $notification1->notification_ru='Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        // $notification1->details_ru='Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';

        // $notification1->notification_link='/cpanel/transaction-history';
        // $notification1->save();
    //  $stmt = $conn->prepare("INSERT INTO transactions (website_accounts_id, account, amount, currency, type, via, status, details_user, details_admin) VALUES ($website_accounts_id, $accountNumber, :amount, :currency, :type, :via, :status, :detailsUser, :detailsAdmin)");

    //  $type = 1; // Withdraw
    //  $via = 'CoinBase';
    //  $status = 0;
    //  $detailsUser = '';
    //  $detailsAdmin = 'CoinBase Account: ' . $coinbaseAccount;

    //  $stmt->bindParam(':userId', $userId);
    //  $stmt->bindParam(':accountNumber', $accountNumber);
    //  $stmt->bindParam(':amount', $amount);
    //  $stmt->bindParam(':currency', $currency);
    //  $stmt->bindParam(':type', $type);
    //  $stmt->bindParam(':via', $via);
    //  $stmt->bindParam(':status', $status);
    //  $stmt->bindParam(':detailsUser', $detailsUser);
    //  $stmt->bindParam(':detailsAdmin', $detailsAdmin);

    //  $stmt->execute();

     echo "Transaction added successfully.";
 } catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
 }

 $conn = null;
 }
 else if($_GET['paymentType']=='bank_wire')
 {

    if ($currency == 1) {
        $currencyy = 'USD';
    }
    $amount  = $_POST['amount'];
    $account_number  = $_POST['account_number'];
    $currency  = $_POST['currency'];


    $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ?");
    $stmtUser->bind_param("i", $websiteAccountId);
    $stmtUser->execute();
    $user = $stmtUser->get_result();
    $user = $user->fetch_assoc();



    // // Insert into Transactions table
    $details_admin='Bank Name :' . $_POST['bank_name'] . 'Bank Swift :' . $_POST['bank_swift'] . 'Bank Account or IBan :' . $_POST['bank_iban'];
    $sqlTransaction = "INSERT INTO transactions (website_accounts_id, account, amount, currency, type, via, status, details_user, details_admin) VALUES (?, ?, ?, ?, 1, 'Bank Wire', 0, '', ?)";
    $stmtTransaction = $conn->prepare($sqlTransaction);
    $stmtTransaction->bind_param('iidss', $websiteAccountId, $account_number, $amount, $currency,$details_admin);
    $stmtTransaction->execute();
    
    // // Insert into Notifications table
    $notification = $_POST['amount'] . ' ' . $currencyy . ' New Bank Wire Withdraw ';
    $notificationLink = '/spanel/withdraw-fund-requests?&bymail=' . $user['email'] . '&';
    $sqlNotification = "INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (999999999, 0, ?, ?)";
    $stmtNotification = $conn->prepare($sqlNotification);
    $stmtNotification->bind_param('ss', $notification, $notificationLink);
    $stmtNotification->execute();
    
   
    // // Send email
    $subject = $_POST['amount'] . ' ' . $currencyy . ' New Bank Withdraw By' . $user['email'];
    $mailContent = $_POST['amount'] . ' ' . $currencyy . ' New Bank Withdraw By' . $user['email'];
    // $sqlEmail = "INSERT INTO emails (to_email, subject, content) VALUES ('support@jmibrokers.com', ?, ?)";
    // $stmtEmail = $conn->prepare($sqlEmail);
    // $stmtEmail->bind_param('ss', $subject, $mailContent);
    // $stmtEmail->execute();
    
    sendMailsToAdmin($mailContent ,$subject);

    
    // // Insert into Notifications table (for user)
    $sqlNotificationUser = "INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, 0, 'Your withdrawal request has been delivered, our backoffice department will handle it soon.', 'Your withdrawal request has been delivered, our backoffice department will handle it soon.', 'تم استلام طلب السحب بنجاح وستتم معالجته قريبًا من جهة الشركة', 'تم استلام طلب السحب بنجاح وستتم معالجته قريبًا من جهة الشركة', 'Ваш запрос на снятие был доставлен, наш бэк-офис скоро обработает его.', 'Ваш запрос на снятие был доставлен, наш бэк-офис скоро обработает его.', '/cpanel/transaction-history')";
    $stmtNotificationUser = $conn->prepare($sqlNotificationUser);
    $stmtNotificationUser->bind_param('i', $user['id']);
    $stmtNotificationUser->execute();

    echo "success";
    header("Location:../transactional-history.php");

    
 }
 
 else{
    $ys =$_GET['paymentType'];

    $paymentType =$_POST['paymentType'];
    $accountNumber = $_POST['cbAccountId'];
    $currency=$_POST['cbCurrency'];
    $type=1;
    $epayAccountNumber=$_POST['cbAccount'];
    $amount=$_POST['cbAmount'];
    $website_accounts_id=$_POST['websiteAccountId'];

    $notify= "$amount USD New CoinBase Withdraw ";


    $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $account = (float)$_POST['cbAccountId'];
        $amount = (float)$_POST['cbAmount'];
        $currency = (int)$_POST['cbCurrency'];
        $details_admin = (int)$_POST['cbAccount'];
        $website_accounts_id = $websiteAccountId;
        $via = $_GET['paymentType'];
        $type = 1;
        $status = 0;
        $trasactions->bind_param("idsisii",$account,$amount,$currency,$type,$via,$website_accounts_id,$status);
        $trasactions->execute();

        echo $notify."stsyhs";


        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification =$notify;
        $notification_link = $notify;
        $notification_status = 0;
        $created_at=date('Y-m-d H:i:s');
        $notfications->bind_param("issis",$website_accounts_id,$notification,$notification_link,$notification_status,$created_at);
        $notfications->execute();
       
        $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
        $notsfications = $conn->prepare($notifysquery);
        $website_accounts_id = $websiteAccountId;
        $notification_status = 0;
        $notification ='Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $details='Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $notification_ar='تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $details_ar='تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $notification_ru='Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $details_ru='Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $notification_link = '/cpanel/transaction-history';
        $created_at=date('Y-m-d H:i:s');
        $notsfications->bind_param("iissssssss",$website_accounts_id,$notification_status,$notification,$details,$notification_ar,$details_ar,$notification_ru,$details_ru,$notification_link,$created_at);
        $notsfications->execute();
        
        echo "end";

        header("Location:../transactional-history.php");

 }
?>