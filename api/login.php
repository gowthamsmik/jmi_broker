<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");
// header("Access-Control-Allow-Headers: Content-Type");
include('../includes/softwareinclude/config.php');
require '../vendor/autoload.php';

use Firebase\JWT\JWT;
$response = array(); // Initialize an array for the response

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the AJAX request
    
    $data = json_decode(file_get_contents("php://input"), true);
    if ($data === null) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid JSON data';
        http_response_code(400);  
    } else {
        if (!isset($data['userNameOrPhone']) || !isset($data['password'])) {
            $response['status'] = 'error';
            $response['message'] = 'Both userNameOrPhone and password are required';
            http_response_code(400);  
        } else {
    $userNameOrPhone = $data['userNameOrPhone'];
    $password = $data['password'];
    $userRole = 2;

    if (preg_match('/^[0-9]+$/', $userNameOrPhone)) {
        $columnToCheck = 'mobile';
    } elseif (filter_var($userNameOrPhone, FILTER_VALIDATE_EMAIL)) {
        $columnToCheck = 'email';
    } else {
        $columnToCheck = 'username';
    }

    // Check if the username or phone exists in the database
    $checkExistingSql = "SELECT * FROM website_accounts WHERE $columnToCheck = '$userNameOrPhone'";
    $checkExistingResult = $conn->query($checkExistingSql);

    if ($checkExistingResult->num_rows > 0) {
        $user = $checkExistingResult->fetch_assoc();
        if (md5($password) == $user['password']) {
            $userId = $user['id'];
            $userEmail = $user['email'];
            $gender = $user['gender'];
            $status = $user['account_status'];
            $userName = $user['username'];
            $name = $user['fullname'];
            $id = $user['id'];
            $userPhone = $user['mobile'];
            $usertype = $userRole;
            $payload = array(
                "user_id" => $userId,
                "exp" => time() + 3600 
            );
            $response['status'] = 'success';
            $response['message'] = 'Login Successful';
            $secretKey = 'your_secret_key';
            $namdat='reheje';
            $jwt = JWT::encode($payload, $secretKey, 'HS256');
            $headers = ['HS256'];
            //$decoded = JWT::decode($jwt, $secretKey, $headers);
            $response['data'] = array(
                'id' => $id,
                'token'=>$jwt,
                'username' => $userName,
                'fullname' => $name,
                'email' => $userEmail,
                'mobile' => $userPhone,
                'gender' => $gender,
                'account_status' => $status,
            );
            http_response_code(200);
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Incorrect Password';
            http_response_code(400);
        }
    } else {
        $response['status'] ='error';
        $response['message'] = 'User not found! Please Register to login.';
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
