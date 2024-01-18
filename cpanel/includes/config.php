<?php 
error_reporting(3);
session_start();
require_once  'C:/xampp/htdocs/jmi/vendor';



global $siteurl;
global $webeurl;

global $marketingUserName;
global $marketingEmail;
global $marketingPassword;

global $supportUserName;
global $supportEmail;
global $supportPassword;
global $adminEmail;

global $supporterMailer;
global $supporterMessage;
global $marketingMailer;
global $marketingMessage;

$siteurl = 'https://jmibrokers.com/';
$webeurl = 'https://jmibrokers.com/';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmibroker';
$marketingUserName = 'marketing@jmibrokers.com';
$marketingEmail = 'marketing@jmibrokers.com';
$marketingPassword = 'Ngjht$#fgr%ru34gjjv%*%#';
$marketingName= 'Jmi brokers';

$supportUserName = 'support.s@jmibrokers.com';
$supportEmail = 'support.s@jmibrokers.com';
$supportPassword = 'dkkkiiuudddshh2024@';
$supportName= 'Jmi brokers';

$adminEmail = 'gopi.smiksystems@gmail.com';


global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$supportTransport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
$supportTransport->setUsername($supportUserName);
$supportTransport->setPassword($supportPassword);
$supporterMailer = new Swift_Mailer($supportTransport);
$supporterMessage = (new Swift_Message(''))
        ->setFrom([$supportEmail => $supportName]);

$marketingTransport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
$marketingTransport->setUsername($marketingUserName);
$marketingTransport->setPassword($marketingPassword);

$marketingMailer = new Swift_Mailer($marketingTransport);
$marketingMessage = (new Swift_Message(''))
    ->setFrom([$marketingEmail => $marketingName]);