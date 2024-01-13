<?php 
include('includes/config.php');
//echo 'please wait! while redirecting';
extract($_POST);

insert_lead($f_name,$l_name,$email,$message);
?>
<meta http-equiv="refresh" content="0;URL='https://jmibrokers.com/thankyou.php'" />    