<?php 
error_reporting(3);
session_start();

global $siteurl;
global $webeurl;
$siteurl = 'https://jmibrokers.com/';
$webeurl = 'https://jmibrokers.com/';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmibroker';
global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}