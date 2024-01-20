<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {

    

   
    $checkExistingSql = "SELECT account_status FROM website_accounts WHERE id = '$websiteAccountId'";
    $checkExistingResult = $conn->query($checkExistingSql);
    http_response_code(400);    
    if ($checkExistingResult->num_rows > 0) {
        $existingAccountStatus = $checkExistingResult->fetch_assoc()['account_status'];
    
       
        if ($existingAccountStatus==2) {
            echo json_encode(array("status"=>ERROR_STATUS,"message" => ACOOUNT_ALREADY_DELETED_ERROR_MESSAGE));
            exit();
        }
    }

    $updateSql = "UPDATE website_accounts SET account_status = 2 WHERE id = '$websiteAccountId'";
    $updateResult = $conn->query($updateSql);
    $conn->close();
    if (!$updateResult) { 
       
        echo json_encode(array("status"=>ERROR_STATUS,"message" => SOMTHING_WRONG_ERROR_MESSAGE));
        exit();
    }
    http_response_code(200);    
    echo json_encode(array("status"=>SUCCESS_STATUS,"message" => ACOOUNT_DELETED_SUCCESS_MESSAGE));
   exit();

}
http_response_code(405);










?>