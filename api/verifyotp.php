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
        if (!isset($data['emailVerifyOtp']) || !isset($data['email'])) {
            $response['status'] = 'error';
            $response['message'] = 'All fields (email,emailVerifyOtp) are required';
            http_response_code(400);  
        } else {
        $emailOtp = $data['emailVerifyOtp'];
        $email = $data['email'];


    $checkExistingEmailVerifySql = "SELECT * FROM email_verification WHERE email = '$email'";
    $checkExistingResult = $conn->query($checkExistingEmailVerifySql);

    if ($checkExistingResult->num_rows > 0) {
        $user = $checkExistingResult->fetch_assoc();
        if ($emailOtp == $user['token']) {
            
            $UPDATEDATA="UPDATE website_accounts SET email_status =1 WHERE email = '$email'";
            $UPDATERESULT=$conn->query($UPDATEDATA);

            $response['status'] = 'success';
            $response['message'] = 'Email otp verified successful';
            http_response_code(200);
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Incorrect Otp,Please enter correct otp';
            http_response_code(400);
        }
    } else {
        $response['status'] ='error';
        $response['message'] = 'User not found! Please Register';
        http_response_code(400);
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
