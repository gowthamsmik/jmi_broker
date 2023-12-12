<?php
include('includes/softwareinclude/config.php');
$email = $_REQUEST['email'];
$userVerificationCode=$_REQUEST['emailcode'];
  $columnToCheck='email';
  $checkExistingSql = "SELECT * FROM email_verification WHERE $columnToCheck = '$email'";
  $checkExistingResult = $conn->query($checkExistingSql);
  $EmailData = $checkExistingResult->fetch_assoc();
if($EmailData["token"] == $userVerificationCode){
    echo "true";
}else{
    echo "false";
}
$conn->close();
?>