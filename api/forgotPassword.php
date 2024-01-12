<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");
// header("Access-Control-Allow-Headers: Content-Type");
include('../includes/softwareinclude/config.php');
require '../vendor/autoload.php';

use Firebase\JWT\JWT;
$response = array(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $data = json_decode(file_get_contents("php://input"), true);
    if ($data === null) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid JSON data';
        http_response_code(400);  
    } else {
        if (!isset($data['mobileNumber'])) {
            $response['status'] = 'error';
            $response['message'] = 'mobileNumber is required';
            http_response_code(400);  
        } else {
        $phone = $data['mobileNumber'];

        $checkExistingSql = "SELECT * FROM website_accounts WHERE mobile = '$phone'";
        $checkExistingResult = $conn->query($checkExistingSql);
        
        if ($checkExistingResult->num_rows === 0) {
            // User not found
            $response['status'] = 'error';
            $response['message'] = 'mobileNumber is not found';
            http_response_code(404);
        } else {

            $response['status'] = 'success';
            $response['message'] = 'mobileNumber is found';
            http_response_code(200);
        }
            
}}
    
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
    http_response_code(405);
}

// Close database connection
$conn->close();

// Send the JSON response
echo json_encode($response);
?>
