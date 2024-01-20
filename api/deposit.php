<?php 
include('common.php');
use MarcialPaulG\Coinbase\Checkout;
use MarcialPaulG\Coinbase\Coinbase;

require_once '../vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    depositValidation($data);
   
    if($data['methodName']=='coinbase'){

       
            $coinbase['url']=coinBaseDeposit($data['accountNo'],$data['amount'],$coinBaseApiKey,$coinbaseUrl);
            
            $paymentType =$data['methodName'];
          
            $currency=$data['currency'];
            $type=1;
            $epayAccountNumber=$data['accountNo'];
            $amount=$data['amount'];
            $website_accounts_id=$websiteAccountId;
        
            $notify= "$amount USD New Coinbase Deposited ";
        
        
            $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
                $trasactions = $conn->prepare($transquery);
                $account = (float)$data['cbAccountId'];
                $amount = (float)$data['cbAmount'];
                $currency = (int)$data['cbCurrency'];
                $details_admin = (int)$data['cbAccount'];
               
                $via = $_GET['paymentType'];
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
              

          
            echo json_encode(array("status"=>"success","message" => "Password updated successfully","data"=>$coinbase));
       

    }

   


}

http_response_code(405);
























?>