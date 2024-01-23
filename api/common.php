<?php
error_reporting(3);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");
// header("Access-Control-Allow-Headers: Content-Type");

include('../includes/softwareinclude/config.php');


include('validation.php');

include('functions.php');

include ('constants.php');


global $data;
global $headers;
global $websiteAccountId;
global $secretKey;
global $coinBaseApiKey;
global $coinbaseUrl;
$method = $_SERVER["REQUEST_METHOD"];
$requestUri = $_SERVER['REQUEST_URI'];
$secretKey="jmi#23444eerr###12345678";
$coinBaseApiKey = '9e47bfc4-929e-4407-adcd-02174e8166aa';
$coinbaseUrl ='https://commerce.coinbase.com/checkout/';
$allowedUrls = [
    '/api/login.php',
    '/api/register.php',
    '/api/countries.php'
       
];

switch ($method) {
    case "GET":
    case "DELETE":
        break;

    case "POST":
    case "PUT":
        $data = json_decode(file_get_contents("php://input"), true);
        break;

    default:
        break;
}

$headers = getallheaders();


if (!in_array($requestUri, $allowedUrls)) {
        
          verifyAuthorization($headers);
}



?>