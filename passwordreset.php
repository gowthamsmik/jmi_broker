<?php

include('includes/softwareinclude/config.php');
error_reporting(3);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST['email'];
try {
  require 'vendor/autoload.php';
  // echo "post" .$_SERVER["REQUEST_METHOD"] .$_POST['email'];exit(0);

  $transport = new \Swift_SmtpTransport('smtp.sendgrid.net', 587, 'tls');
  //$transport->setUsername('marketing@jmibrokers.com');
  //$transport->setPassword('JMI159BROKERS');
  //$transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
  $transport->setUsername('apikey');
  $transport->setPassword('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');

  // Create the Mailer using your created Transport
  $mailer = new Swift_Mailer($transport);
  $data['title'] = 1;
  $data['name'] = 'Admin';
  $subject = 'verification email ';

 
$checkInUserSql= "SELECT * FROM website_accounts WHERE email = '$email'";
$checkInUserSql=$conn->query($checkInUserSql);
if ($checkInUserSql->num_rows > 0) {
    $uservalue=$checkInUserSql->fetch_assoc();
    $restok = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20) . rand(1, 10000);
    $restoken = md5($restok);
    $token2 = md5($restoken);
    $email = $uservalue['email'];
    $username = $uservalue['username'];
 
    $token1 = md5($uservalue['id']);
    //
    $token3 = substr($username, 0, 2);
    $token5 = ($email);
    $token6 = substr($username, 2, 2);
    $token7 = md5(date('d'));
    $token8 = substr($username, 4, 40);

    $currentTime=time();
    $resetlink = "http" . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "s" : "") . "://$_SERVER[HTTP_HOST]/forgot-password.php?userid=$token1&token=$token2&email=$token5&";
    $mailtmpBody='<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">

                <p>Here is the verification link for resetting your password:</p>
                <a href='.$resetlink.'
                            style="border: 0;
                            border-radius:10px;
                            background: #04001f;
                            color: #fff;
                            text-decoration: none;
                            padding: 0.25rem 1.5rem;
                            cursor: pointer;" >Reset Password</a>
    
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
     // Create a message
    $message = (new Swift_Message('Verfication Code For Your Password Resetting '))
    ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
    ->setTo($email)
    ->setBody($mailtmpBody,'text/html');


    $UPDATEDATA="UPDATE website_accounts SET resettoken = '$token2', resettoken_time = $currentTime WHERE email = '$email'";
    $UPDATERESULT=$conn->query($UPDATEDATA);
    if($UPDATERESULT===TRUE){
      $result = $mailer->send($message);
      echo "true";
    }else{
      echo "false";
    }  
} else {echo "Available";}
} catch (Exception $e) {
  echo "false";
}
}else{
  echo "Invalid request method";
}
$conn->close();
?>