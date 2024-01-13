<?php 
error_reporting(0);
session_start();
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
global $siteurl;
global $webeurl;
$siteurl = 'https://jmibrokers.com/';
$webeurl = 'https://jmibrokers.com/';

if($uriSegments[1]=='cpanel'){
	
	if(!isset($_SESSION['sessionuserid'])){
		header("Location:" .$siteurl."");
		
	}
}
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmibroker';
$demoAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
$liveAccountURL = $siteurl . "cpanel/open-live-account.php?tab=1";
global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}