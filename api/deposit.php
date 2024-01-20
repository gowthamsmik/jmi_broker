<?php 
include('common.php');
use MarcialPaulG\Coinbase\Checkout;
use MarcialPaulG\Coinbase\Coinbase;

require_once '../vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    depositValidation($data);

    $checkAccount = accountDetails($data['accountNo'], $websiteAccountId);

    
    if ($checkAccount->num_rows <= 0) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => INVALID_ACCOUNT_ERROR_MESSAGE));
        exit();

    }
   
    if($data['methodName']=='coinbase'){

       
            $coinbase['url']=coinBaseDeposit($data['accountNo'],$data['amount'],$coinBaseApiKey,$coinbaseUrl);
            
            
            $notify= $data['amount']."USD New Coinbase Deposited ";
        
        
                $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
                $trasactions = $conn->prepare($transquery);
                $account = (int)$data['accountNo'];
                $amount = (float)$data['amount'];
                $currency = 1;
                $details_admin ='';
               
                $via ="coinbase";
                $type = 0;
                $status = 0;
                $trasactions->bind_param("idsisii",$account,$amount,$currency,$type,$via,$websiteAccountId,$status);
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
              

            http_response_code(200);
            echo json_encode(array("status"=>SUCCESS_STATUS,"message" => DEPOSIT_SUCCESS_MESSAGE,"data"=>$coinbase));
       
            exit();
    }

    else if($data['methodName']=='epay'){

        
      

        $epay['url'] = "https://api.epay.com/paymentApi/merReceive?PAYEE_ACCOUNT=backoffice@jmibrokers.com&PAYEE_NAME=JMI%20BROKERS%20LTD&PAYMENT_AMOUNT=".$data['amount']."&SUGGESTED_MEMO=FUND%20JMI%20BROKERS%20ACCOUNT%20NUMBER%20:%20".$data['accountNo']."&INTERFACE_LANGUAGE=EN_US&CHARACTER_ENCODING=UTF-8&PAYMENT_UNITS=USD&STATUS_URL=https://www.jmibrokers.com/en/epay/success&PAYMENT_URL=https://jmibrokers.com/en&NOPAYMENT_URL=https://www.jmibrokers.com/en/epay/cancel&V2_HASH=".MD5('backoffice@jmibrokers.com:'.$data['amount'].':USD:b81d40a4c44514fede3aa34a2f71899e')."&";

        $notify= $data['amount']."USD New Epay Deposited ";


        $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $account = (int)$data['accountNo'];
        $amount = (float)$data['amount'];
        $currency = (int)$data['currency'];
        $website_accounts_id = $websiteAccountId;
        $via = "epay";
        $type = 0;
        $status = 0;
        $trasactions->bind_param("idsisii",$account,$amount,$currency,$type,$via,$website_accounts_id,$status);
        $trasactions->execute();

       


        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification =$notify;
        $notification_link ="/cms/deposite-f-requests";
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
        
        http_response_code(200);
        echo json_encode(array("status"=>SUCCESS_STATUS,"message" => DEPOSIT_SUCCESS_MESSAGE,"data"=>$epay));
        exit();



    }
    

   

    exit();
}

http_response_code(405);
























?>