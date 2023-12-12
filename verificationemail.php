<?php
include('includes/softwareinclude/config.php');
$email = $_REQUEST['email'];
$token = random_int(100000, 999999);
$activationcode = $token;
try {
  require_once 'vendor/autoload.php';
  $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
  $transport->setUsername('support@jmibrokers.com');
  //$transport->setPassword('JMI159BROKERS');
  $transport->setPassword('Duiuw^%^&tw$@@$er$%&^gf*');

  // Create the Mailer using your created Transport
  $mailer = new Swift_Mailer($transport);
  $data['title'] = 1;
  $data['name'] = 'Admin';
  $subject = 'verification email ';

  // Create a message
  $message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['support@jmibrokers.com' => 'Jmi brokers'])
    ->setTo($email)
    ->setBody('Here is the verification code for email verification = ' . $token)
  ;

$checkInUserSql= "SELECT * FROM users WHERE email = '$email'";
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