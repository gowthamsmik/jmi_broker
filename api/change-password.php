<?php 
include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
   
    changePasswordValidation($data);
    

    


    $newPassword=md5($data['newPassword']);

    $checkExistingSql = "SELECT password FROM website_accounts WHERE id = '$websiteAccountId'";
    $checkExistingResult = $conn->query($checkExistingSql);
    http_response_code(400);    
    if ($checkExistingResult->num_rows > 0) {
        $existingPassword = $checkExistingResult->fetch_assoc()['password'];
    
       
        if (md5($data['oldPassword']) != $existingPassword) {
            echo json_encode(array("status"=>ERROR_STATUS,"message" => INVALID_PASSWORD_ERROR_MESSAGE));
            exit();
        }
    }

    $updateSql = "UPDATE website_accounts SET password = '$newPassword' WHERE id = '$websiteAccountId'";
    $updateResult = $conn->query($updateSql);
    $conn->close();
    if (!$updateResult) { 
       
        echo json_encode(array("status"=>ERROR_STATUS,"message" => SOMTHING_WRONG_ERROR_MESSAGE));
        exit();
    }
    http_response_code(200);    
    echo json_encode(array("status"=>"success","message" => PASSWORD_UPDATED_SUCCESS_MESSAGE));
   exit();

}

http_response_code(405);
























?>