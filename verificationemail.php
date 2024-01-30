<?php
error_reporting(3);
include('includes/softwareinclude/config.php');
$email = $_REQUEST['email'];
$token = random_int(100000, 999999);
$activationcode = $token;
try {
  require_once 'vendor/autoload.php';
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
  $mailbody='<!DOCTYPE html>
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
             

              <p>Here is the verification code for email verification:</p>
              <p style="font-family: Arial, sans-serif; font-size: 16px; color: #333; background-color: #f0f0f0; padding: 10px; text-align: center;font-size:50px">
                  '.$token.'
              </p>

  
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
  $message = (new Swift_Message('Verification From JMI'))
    ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
    ->setTo($email)
    ->setBody($mailbody,'text/html')
  ;

$checkInUserSql= "SELECT * FROM website_accounts WHERE email = '$email'";
$checkInUserSql=$conn->query($checkInUserSql);
if ($checkInUserSql->num_rows <= 0) {

  // Send the message
  $result = $mailer->send($message);
  $columnToCheck='email';
  $checkExistingSql = "SELECT * FROM email_verification WHERE email = '$email'";
  $checkExistingResult = $conn->query($checkExistingSql);
  if($result){
  if($checkExistingResult->num_rows > 0){
    $UPDATEDATA="UPDATE email_verification SET token = '$token' WHERE email = '$email'";
    $UPDATERESULT=$conn->query($UPDATEDATA);
    if($UPDATERESULT===TRUE){
      echo "true";
    }else{
      echo "updated faile -- false";
    }  
  }else{
    $INSERTDATA="INSERT INTO email_verification (email, token) VALUES ('$email', '$token')" ;
    $INSERTRESULT= $conn->query($INSERTDATA);
    if($INSERTRESULT===TRUE){
      echo "true";
    }else{
      echo "false";
    }
  }
}else{
  echo "sending email failed ---false";
}
} else {echo "Available";}
} catch (Exception $e) {
  echo "false".$e->getMessage();
}
$conn->close();
?>