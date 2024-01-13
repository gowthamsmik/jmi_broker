<?php

function resetPasswordValidation($data)
{
    http_response_code(400);
    if (isset($data['newPassword']) && isset($data['confirmPassword'])) {

        $newPassword = trim($data['newPassword']);
        $confirmPassword = trim($data['confirmPassword']);


        if (!empty($newPassword) && !empty($confirmPassword)) {
            if ($newPassword != $confirmPassword) {
                echo json_encode(array("status" => "error", "message" => "newPassword and confirmPassword  both should be mathch"));
                exit();
            }

            if (!isValidPassword($newPassword)) {


                echo json_encode(array("status" => "error", "message" => "Passwords must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter,one special character and one digit"));
                exit();

            }

        } else {

            echo json_encode(array("status" => "error", "message" => "Both newPassword and confirmPassword must be non-empty"));
            exit();
        }

    } else {

        echo json_encode(array("status" => "error", "message" => "Both newPassword and confirmPassword are required"));
        exit();
    }
}

function isValidPassword($password)
{
    return (
        strlen($password) >= 8 &&
        preg_match("/[A-Z]/", $password) &&
        preg_match("/[a-z]/", $password) &&
        preg_match("/[0-9]/", $password) &&
        preg_match("/[^A-Za-z0-9]/", $password) // At least one special character
    );
}



function isValidTypeOfTransaction($type)
{
    http_response_code(400);

    $allowedTypes = [

        'deposit',
        'withdraw',
        'transfer',
        'all',
    ];

    if (!in_array($type, $allowedTypes)) {

        echo json_encode(array("status" => ERROR_STATUS, "message" => INVALID_TYPE_ERROR_MESSAGE));
        exit();

    }

    return array_search($type, $allowedTypes);

}

function copyTradeValidation($data)
{
    http_response_code(400);
    $errors = array();

   
    if (!isset($data['copyFrom']) || !is_numeric(trim($data['copyFrom']))) {
        $errors['copyFrom'] = 'Copy From is required and should contain Account numbers.';
    }

    
    if (!isset($data['copyTo']) || !is_numeric(trim($data['copyTo']))) {
        $errors['copyTo'] = 'Copy To is required and should contain Account numbers.';
    }

   
    if (!isset($data['percentage']) || !is_numeric(trim($data['percentage']))) {
        $errors['percentage'] = 'Percentage is required and should contain only numbers.';
    }

    
    if (!isset($data['MT4Password']) || empty(trim($data['MT4Password']))) {
        $errors['MT4Password'] = 'MT4 Password is required.';
    }
    // elseif (strlen($data['MT4Password']) < 3) {
    //     $errors['MT4Password'] = 'MT4 Password should be at least 6 characters long.';
    // }

    
    if (count($errors) > 0) {
        
        // foreach ($errors as $field => $error) {
        //     $message .= $field . ': ' . $error . '<br>';
        // }
        echo json_encode(array("status" => ERROR_STATUS, "message" =>$errors));
    } 


}


function changePasswordValidation($data)
{
    http_response_code(400);
    if (isset($data['newPassword']) && isset($data['oldPassword'])) {

        $newPassword = trim($data['newPassword']);
        $confirmPassword = trim($data['oldPassword']);


        if (!empty($newPassword) && !empty($confirmPassword)) {
            if ($newPassword == $confirmPassword) {
                echo json_encode(array("status" => ERROR_STATUS, "message" => CHANGE_PASSWOERD_MATCH_ERROR_MESSAGE));
                exit();
            }

            if (!isValidPassword($newPassword)) {


                echo json_encode(array("status" => ERROR_STATUS, "message" => PASSWORD_ERROR_MESSAGE));
                exit();

            }

        } else {

            echo json_encode(array("status" => ERROR_STATUS, "message" => CHANGE_PASSWOERD_EMPTY_ERROR_MESSAGE));
            exit();
        }

    } else {

        echo json_encode(array("status" => ERROR_STATUS, "message" => CHANGE_PASSWOERD_REQUIRED_ERROR_MESSAGE));
        exit();
    }
}



function internalTransferValidation($data)
{
    http_response_code(400);
    $errors = array();

    if (!isset($data['transferFrom']) || !is_numeric(trim($data['transferFrom']))) {
        $errors['transferFrom'] =TRANSFER_FROM_REQUIRED_ERROR_MESSAGE ;
    }

    if (!isset($data['transferTo']) || !is_numeric(trim($data['transferTo']))) {
        $errors['transferTo'] = TRANSFER_TO_REQUIRED_ERROR_MESSAGE;
    }

    if (!isset($data['transferAmount']) || !is_numeric(trim($data['transferAmount']))) {
        $errors['transferAmount'] = TRANSFER_AMOUNT_REQUIRED_ERROR_MESSAGE;
    }

    if (!isset($data['MT4Password']) || empty(trim($data['MT4Password']))) {
        $errors['MT4Password'] = MT4_PASSWORD_REQUIRED_ERROR_MESSAGE;
    }

    if (!isset($data['currency']) || strtoupper($data['currency']) !== 'USD') {
        $errors['currency'] = INVALID_CURRENCY_ERROR_MESSAGE;
    }

    if (count($errors) > 0) {
        $message = '';
        // foreach ($errors as $field => $error) {
        //     $message .= $field . ': ' . $error . '<br>';
        // }
        echo json_encode(array("status" => ERROR_STATUS, "message" => $errors));
    }
}


function addExistingAccountValidation($data)
{
    http_response_code(400);
    $errors = array();

    // Validate accountType
    if (!isset($data['accountType']) || !in_array($data['accountType'], array('1', '2'))) {
        $errors['accountType'] = INVALID_ACCOUNT_TYPE_ERROR_MESSAGE;
    }

    // Validate accountGroup
    if (!isset($data['accountGroup']) || !in_array($data['accountGroup'], array('1', '2', '3', '4'))) {
        $errors['accountGroup'] = INVALID_ACCOUNT_GROUP_ERROR_MESSAGE;
    }

    // Validate currency
    if (!isset($data['currency']) || strtoupper($data['currency']) !== 'USD') {
        $errors['currency'] = INVALID_CURRENCY_ERROR_MESSAGE;
    }

    // Validate mt4LoginName
    if (!isset($data['mt4LoginName']) || !ctype_digit($data['mt4LoginName'])) {
        $errors['mt4LoginName'] = INVALID_MT4LOGIN_NAME_ERROR_MESSAGE;
    }

    // Validate mt4LoginPassword
    if (!isset($data['mt4LoginPassword']) || empty(trim($data['mt4LoginPassword']))) {
        $errors['mt4LoginPassword'] = MT4_PASSWORD_REQUIRED_ERROR_MESSAGE;
    }

    

    if (count($errors) > 0) {
        echo json_encode(array("status" => ERROR_STATUS, "message" => $errors));
    }
}



function openLiveAccountValidation($data)
{
    http_response_code(400);
    $errors = array();

    // Validate accountType
    if (!isset($data['accountType']) || !in_array($data['accountType'], array('1', '2'))) {
        $errors['accountType'] = INVALID_ACCOUNT_TYPE_ERROR_MESSAGE;
    }

    // Validate accountGroup
    if (!isset($data['accountGroup']) || !in_array($data['accountGroup'], array('1', '2', '3', '4'))) {
        $errors['accountGroup'] = INVALID_ACCOUNT_GROUP_ERROR_MESSAGE;
    }

    // Validate currency
    if (!isset($data['currency']) || strtoupper($data['currency']) !== 'USD') {
        $errors['currency'] = INVALID_CURRENCY_ERROR_MESSAGE;
    }

   

    if (count($errors) > 0) {
        echo json_encode(array("status" => ERROR_STATUS, "message" => $errors));
    }
}






?>