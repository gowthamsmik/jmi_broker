<?php

include('includes/softwareinclude/config.php');
error_reporting(3);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST['email'];
try {
  require 'vendor/autoload.php';
  // echo "post" .$_SERVER["REQUEST_METHOD"] .$_POST['email'];exit(0);

  $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
  $transport->setUsername('support@jmibrokers.com');
  //$transport->setPassword('JMI159BROKERS');
  $transport->setPassword('Duiuw^%^&tw$@@$er$%&^gf*');


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

     // Create a message
    $message = (new Swift_Message('Verfication Code For Your Password Resetting '))
    ->setFrom(['support@jmibrokers.com' => 'Jmi brokers'])
    ->setTo($email)
    ->setBody('Here is the verification link for resetting your password  = ' . $resetlink);


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