<?php 
error_reporting(3);
session_start();

global $siteurl;
global $webeurl;

global $marketingUserName;
global $marketingEmail;
global $marketingPassword;

global $supportUserName;
global $supportEmail;
global $supportPassword;
global $adminEmail;

$siteurl = 'https://jmibrokers.com/';
$webeurl = 'https://jmibrokers.com/';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmibroker';

$marketingUserName ='marketing@jmibrokers.com';
$marketingEmail = 'marketing@jmibrokers.com';
$marketingPassword ='Ngjht$#fgr%ru34gjjv%*%#';

$supportUserName='support.s@jmibrokers.com';
$supportEmail='support.s@jmibrokers.com';
$supportPassword='dkkkiiuudddshh2024@';

$adminEmail='gopi.smiksystems@gmail.com';


global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}