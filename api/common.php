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
$method = $_SERVER["REQUEST_METHOD"];
$requestUri = $_SERVER['REQUEST_URI'];
$secretKey="jmi#23444eerr###12345678";
$allowedUrls = [
    '/api/login.php',
       
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