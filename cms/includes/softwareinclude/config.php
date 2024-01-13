<?php
error_reporting(0);
session_start();

global $siteurl;
global $webeurl;
global $hostname;
$hostname = 'jmibrokers.com';
$siteurl = 'https://jmibrokers.com/cms/';
$webeurl = 'https://jmibrokers.com/';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmibroker';
global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}
