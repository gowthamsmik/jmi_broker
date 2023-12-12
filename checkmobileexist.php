<?php
include('includes/softwareinclude/config.php');
$phone = $_REQUEST['phone'];
  $columnToCheck='phone';
  $checkExistingSql = "SELECT * FROM users WHERE phone = '$phone'";
  $checkExistingResult = $conn->query($checkExistingSql);

  if ($checkExistingResult->num_rows > 0) {
    echo "1";
  }else{
    echo "0";
  }

  $conn->close();
  ?>
  