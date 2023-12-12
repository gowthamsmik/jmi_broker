<?php
session_start();

// Unset specific session variables
unset($_SESSION['sessionadmin']);
unset($_SESSION['sessionkeyadmin']);

// Redirect to the login page
header("Location: login.php");
exit();
?>
