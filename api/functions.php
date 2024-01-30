<?php

error_reporting(3);
require '../vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use MarcialPaulG\Coinbase\Checkout;
use MarcialPaulG\Coinbase\Coinbase;

require_once '../vendor/autoload.php';
function verifyAuthorization($headers) {
    global $secretKey;
    global $websiteAccountId; 
    global $conn;
     
    
    if (!isset($headers['Authorization']) && !isset($headers['authorization'])) {

        echo json_encode(array("status"=>ERROR_STATUS,"message" => TOKEN_REQUIRED_ERROR_MESSAGE));        
        exit();
    }

    
    $token=isset($headers['Authorization'])?$headers['Authorization']:$headers['authorization'];
    $token = trim(str_replace("Bearer", "", $token));
    try{

        $decoded = JWT::decode($token, new Key($secretKey, 'HS256'));
        if ($decoded->exp < time()) {
         http_response_code(401);
        echo json_encode(array("status"=>ERROR_STATUS,"message" => TOKEN_EXPIRED_MESSAGE));   
        exit();

    }
    $websiteAccountId=$decoded->user_id;
    $websiteAccountId=$decoded->user_id;
    $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ? ");
    $stmtUser->bind_param('i', $websiteAccountId);
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();
    $user = $resultUser->fetch_assoc();
    if( $user['account_status']==2){
        http_response_code(400);
        echo json_encode(array("status"=>ERROR_STATUS,"message" => ACCOUNT_DELETED_MESSAGE)); 
        exit();

    }
    }
    catch(Exception){
        http_response_code(401);
        echo json_encode(array("status"=>ERROR_STATUS,"message" =>TOKEN_ERROR_MESSAGE));
        exit();  
    }
}



function get_string_between($string, $start, $end)
{
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}



function accountDetails($accountId,$websiteAccountId)
{
   
    global $conn;
    $checkExistingSql = "SELECT account_radio_type FROM fx_accounts WHERE account_id = '$accountId' AND website_accounts_id = '$websiteAccountId' AND account_radio_type = 1";
    return $conn->query($checkExistingSql);
}

function websiteAccountDetails($websiteAccountId)
{
    global $conn;
   
    $websiteAccountQuery = "SELECT * FROM website_accounts WHERE id = ?";
        $websiteAccountStmt = $conn->prepare($websiteAccountQuery);
        $websiteAccountStmt->bind_param("i", $websiteAccountId);
        $websiteAccountStmt->execute();
        $websiteAccountResult = $websiteAccountStmt->get_result();
        return $websiteAccountResult->fetch_all(MYSQLI_ASSOC);
}


function sendMailsToAdmin($mailBody,$mailSubject){
    require_once '../vendor/autoload.php';
    try{
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
    $mailer = new Swift_Mailer($transport);
       
    // $mailTo="support@jmibrokers.com";
    $mailTo="gopi.smiksystems@gmail.com";
    $mailsBody='<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://localhost/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">
               
                <p>'.$mailBody.'</p>
            
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
    $message = (new Swift_Message(''))
            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($mailTo)
            ->setBody($mailsBody,'text/html')
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);

        return '';
    }
    catch(Exception){
        return '';
    }
       
}

function coinBaseDeposit($accountNumber,$amount,$apiKey,$baseUrl){
    $throw_exceptions = true;
    $coinbase = new Coinbase($apiKey, $throw_exceptions);

    $checkout = new Checkout("JMIBrokers LTD",
            'Funding Account Number '.$accountNumber,
            "fixed_price",
            $amount,
            "USD",
            ['email', 'name']
        );

        try {
             $data = $coinbase->request($checkout);
            return $baseUrl.$data['data']['id'];         

        } catch (\Exception $exception) {

            // return redirect()->back()->with('status-error', 'Unable to create checkout. Error: '.$exception->getMessage());
            echo json_encode(array("status"=>ERROR_STATUS,"message" => $exception->getMessage()));
            exit();

        }
}

?>