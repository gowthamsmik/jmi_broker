<?php 
	session_start();
	$_SESSION['sessionkey'] = "";
	$_SESSION['sessionuser'] = "";

	// unset($_SESSION['sessionadmin']);
	// unset($_SESSION['sessionkeyadmin']);

	session_destroy();
    echo "logged out Successfully";
?>