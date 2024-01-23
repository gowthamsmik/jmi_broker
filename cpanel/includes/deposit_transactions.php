<?php
error_reporting(3);
session_start();
include('config.php');
require '../../vendor/autoload.php';
use MarcialPaulG\Coinbase\Checkout;
use MarcialPaulG\Coinbase\Coinbase;

$websiteAccountId = $_SESSION["sessionuserid"];

 global $conn;
 if($_GET['paymentType']=='epay'){
 try {

    $ys =$_GET['paymentType'];

    $paymentType =$_POST['paymentType'];
    $accountNumber = $_POST['epayAccountId'];
    $currency=$_POST['epayCurrency'];
    $type=1;
    $amount=$_POST['epayAmount'];
    $website_accounts_id=$_POST['websiteAccountId'];

    $notify= "$amount USD New Epay Deposited ";


    $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $account = (float)$_POST['epayAccountId'];
        $amount = (float)$_POST['epayAmount'];
        $currency = (int)$_POST['epayCurrency'];
        $website_accounts_id = $websiteAccountId;
        $via = $_GET['paymentType'];
        $type = 0;
        $status = 0;
        $trasactions->bind_param("idsisii",$account,$amount,$currency,$type,$via,$website_accounts_id,$status);
        $trasactions->execute();

        echo $notify."stsyhs";


        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification =$notify;
        $notification_link ="/cms/deposite-f-requests";
        $notification_status = 0;
        $created_at=date('Y-m-d H:i:s');
        $notfications->bind_param("issis",$website_accounts_id,$notification,$notification_link,$notification_status,$created_at);
        $notfications->execute();

        echo "ehee";
        $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
        $notsfications = $conn->prepare($notifysquery);
        $website_accounts_id = $websiteAccountId;
        $notification_status = 0;
        $notification ='Your deposit has been delivered successfully, our backoffice department will handle it soon.';
        $details='Your deposit has been delivered successfully, our backoffice department will handle it soon.';
        $notification_ar='تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $details_ar='تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $notification_ru='Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.';
        $details_ru='Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.';
        $notification_link = '/cpanel/transactional-history';
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

        // $notification1->notification_link='/cpanel/transactional-history';
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
 }else{
    $ys =$_GET['paymentType'];

    $paymentType =$_POST['paymentType'];
    $accountNumber = $_POST['cbAccountId'];
    $currency=$_POST['cbCurrency'];
    $type=1;
    $epayAccountNumber=$_POST['cbAccount'];
    $amount=$_POST['cbAmount'];
    $website_accounts_id=$_POST['websiteAccountId'];

    $notify= "$amount USD New Coinbase Deposited ";

    


   
    $throw_exceptions = true;
    $coinbase = new Coinbase($coinBaseApiKey, $throw_exceptions);

    $checkout = new Checkout("JMIBrokers LTD",
        'Funding Account Number '.$_POST['cbAccountId'],
        "fixed_price",
        $amount,
        "USD",
        ['email', 'name']
    );

    try {
         $data = $coinbase->request($checkout);
        $url=$coinbaseUrl.$data['data']['id'];
     

    } catch (\Exception $exception) {

        $_SESSION['deposit_meesage']="Unable to create checkout";
        header("Location:../deposit.php?type=coin_base");
        exit();
      
        
    }


    $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $account = (int)$_POST['cbAccountId'];
        $amount = (float)$_POST['cbAmount'];
        $currency = (int)$_POST['cbCurrency'];
        $details_admin = (int)$_POST['cbAccount'];
        $website_accounts_id = $websiteAccountId;
        $via = $_GET['paymentType'];
        $type = 0;
        $status = 0;
        $trasactions->bind_param("idsisii",$account,$amount,$currency,$type,$via,$website_accounts_id,$status);
        $trasactions->execute();

      


        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification =$notify;
        $notification_link = "/cms/deposite-f-requests";
        $notification_status = 0;
        $created_at=date('Y-m-d H:i:s');
        $notfications->bind_param("issis",$website_accounts_id,$notification,$notification_link,$notification_status,$created_at);
        $notfications->execute();
       
        $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
        $notsfications = $conn->prepare($notifysquery);
        $website_accounts_id = $websiteAccountId;
        $notification_status = 0;
        $notification ='Your deposit has been delivered successfully, our backoffice department will handle it soon.';
        $details='Your deposit has been delivered successfully, our backoffice department will handle it soon.';
        $notification_ar='تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $details_ar='تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $notification_ru='Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.';
        $details_ru='Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.';
        $notification_link = '/cpanel/transactional-history';
        $created_at=date('Y-m-d H:i:s');
        $notsfications->bind_param("iissssssss",$website_accounts_id,$notification_status,$notification,$details,$notification_ar,$details_ar,$notification_ru,$details_ru,$notification_link,$created_at);
        $notsfications->execute();
      

        header("Location: $url");


 }
?>