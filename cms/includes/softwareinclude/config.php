<?php 
error_reporting(0);
session_start();

global $siteurl;
global $webeurl;
$siteurl = 'http://localhost/jmi-cms/cms/';
$webeurl = 'http://localhost/jmi-cms/';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmi';
global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}