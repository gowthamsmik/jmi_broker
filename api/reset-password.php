<?php 
include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    resetPasswordValidation($data);
    // exit();

    


    $newPassword=md5($data['confirmPassword']);

    $checkExistingSql = "SELECT password FROM website_accounts WHERE id = '$websiteAccountId'";
    $checkExistingResult = $conn->query($checkExistingSql);
    http_response_code(400);    
    if ($checkExistingResult->num_rows > 0) {
        $existingPassword = $checkExistingResult->fetch_assoc()['password'];
    
       
        if (md5($data['confirmPassword']) == $existingPassword) {
            echo json_encode(array("status"=>ERROR_STATUS,"message" => "New Password  cannot be same as  current Password."));
            exit();
        }
    }

    $updateSql = "UPDATE website_accounts SET password = '$newPassword' WHERE id = '$websiteAccountId'";
    $updateResult = $conn->query($updateSql);
    $conn->close();
    if (!$updateResult) { 
       
        echo json_encode(array("status"=>ERROR_STATUS,"message" => "Somthing went wrong! try after some time."));
        exit();
    }
    http_response_code(200);    
    echo json_encode(array("status"=>"success","message" => "Password updated successfully"));
   exit();

}

http_response_code(405);
























?>