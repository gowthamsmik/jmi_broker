<?php 
	session_start();
	$_SESSION['sessionkey'] = "";
	$_SESSION['sessionuser'] = "";
	session_destroy();
    echo "logged out Successfully";
?>