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

    if (!isset($data['transferAmount']) || !is_numeric(trim($data['transferAmount'])) || $data['transferAmount']<=0) {
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

function validateEditProfileData($data) {
    http_response_code(400);
    $errors = array();

   

    // Validate title
    if (isset($data['title']) && !in_array($data['title'], array(0, 1, 2))) {
        $errors['title'] = 'title can only be 0, 1, or 2.';
    }

    // Validate fullname
    if (isset($data['fullName']) && empty(trim($data['fullName']))) {
        $errors['fullName'] = 'fullName must be  not empty.';
    }

    // Validate username
    if (isset($data['userName']) && empty(trim($data['userName']))) {
        $errors['userName'] = 'userName must be  not empty.';
    }

    // Validate email
    if (isset($data['email'])) {
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format.';
        }
    }

    // Validate gender
    if (isset($data['gender']) && !in_array($data['gender'], array(0, 1))) {
        $errors['gender'] = 'Gender can only be  0 or 1.';
    }

    if(isset($data['birthDay']) || isset($data['birthYear']) || isset($data['birthMonth']) )
    {
        if(!isset($data['birthDay']) || !isset($data['birthYear']) || !isset($data['birthMonth']) ||!is_numeric(trim($data['birthDay']))
        || !is_numeric(trim($data['birthYear'])) || !is_numeric(trim($data['birthMonth']))){
            $errors['dateOfBirth'] = 'For DOB updation birthDay,birthMonth and birthYear  is required and it Should  be valid day,month and year.';
            }
        else if(!validateBirthday($data['birthDay'],$data['birthMonth'],$data['birthYear'])){
            $errors['dateOfBirth'] = 'For DOB updation birthDay,birthMonth and birthYear  is required and it Should  be valid day,month and year.';
        }
        
    }

    // // Validate birthday
    // if (isset($data['birthDay']) && !($data['birthDay'] >= 1 && $data['birthDay'] <= 31)) {
    //     $errors['birthDay'] = 'Invalid birthDay';
    // }

    // // Validate birthmonth
    // if (isset($data['birthMonth']) && !($data['birthMonth'] >= 1 && $data['birthMonth'] <= 12)) {
    //     $errors['birthMonth'] = 'Invalid Birthmonth';
    // }

    // // Validate birthyear
    // if (isset($data['birthYear']) && !((date('Y') - $data['birthYear']) >= 10)) {
    //     $errors['birthYear'] = 'Birthyear must be optional and at least 10 years old.';
    // }

    // Validate country
    $countriesJson = file_get_contents('../assets/json/countries.json');
    $validCountries = json_decode($countriesJson, true);

    if (isset($data['country']) && !in_array($data['country'], array_column($validCountries, 'country'))) {
        $errors['country'] = 'Invalid Country.';
    }

    if (isset($data['countryCode']) && (!ctype_digit((string)$data['countryCode']) || !in_array($data['countryCode'], array_column($validCountries, 'code')))) {
        $errors['countryCode'] = 'Invalid countryCode.';
    }
    
    // Validate town_city
    if (isset($data['townCity']) && empty(trim($data['townCity']))) {
        $errors['townCity'] = 'townCity must be  not empty.';
    }

    // Validate post_code
    if (isset($data['postCode']) && !ctype_digit((string)$data['postCode'])) {
        $errors['postCode'] = 'Invalid postCode.';
    }

    // // Validate country_code
    // if (isset($data['country_code']) && !in_array($data['country_code'], array('91', '93'))) {
    //     $errors['country_code'] = 'Country Code must be optional and from the allowed list.';
    // }

    // Validate home and mobile numbers
    if (isset($data['home']) && !preg_match('/^\d{9}$/', $data['home'])) {
        $errors['home'] = 'Invalid home number format.';
    }

    if (isset($data['mobile']) && !preg_match('/^\d{9}$/', $data['mobile'])) {
        $errors['mobile'] = 'Invalid mobile number format.';
    }

    // Validate address2 and address1
    if (isset($data['address2']) && empty(trim($data['address2']))) {
        $errors['address2'] = 'address2 must be not empty.';
    }

    if (isset($data['address1']) && empty(trim($data['address1']))) {
        $errors['address1'] = 'address1 must be not empty.';
    }

    // Validate employment_status, nature_of_business, annual_income, net_worth
    $validOptions = array(
        'employmentStatus' => range(1, 5),
        'natureOfBusiness' => range(1, 26),
        'annualIncome' => range(1, 6),
        'netWorth' => range(1, 6),
    );

    foreach ($validOptions as $field => $options) {
        if (isset($data[$field]) && !in_array($data[$field], $options)) {
            $errors[$field] = 'Invalid '.ucfirst(str_replace('_', ' ', $field)) ;
        }
    }

    if (count($errors) > 0) {
        echo json_encode(array("status" => 'error', "message" => $errors));
    }
}

function validateBirthday($birthDay, $birthMonth, $birthYear) {
  
    if (($birthYear % 4 == 0 && $birthYear % 100 != 0) || ($birthYear % 400 == 0)) {
      
        $maxDaysInFeb = 29;
    } else {
        
        $maxDaysInFeb = 28;
    }

   
    $daysInMonth = [
        1 => 31, // January
        2 => $maxDaysInFeb, // February
        3 => 31, // March
        4 => 30, // April
        5 => 31, // May
        6 => 30, // June
        7 => 31, // July
        8 => 31, // August
        9 => 30, // September
        10 => 31, // October
        11 => 30, // November
        12 => 31 // December
    ];

    // Validate day and month
    if ($birthMonth < 1 || $birthMonth > 12 || $birthDay < 1 || $birthDay > $daysInMonth[$birthMonth]) {
        // Invalid month or day
        return false;
    }

    // Validate year
    if ($birthYear < 1900 || $birthYear > date('Y')-1) {
        // Invalid year
        return false;
    }

    // All validations passed
    return true;
}

function depositValidation($data)
{
    http_response_code(400);
    $errors = array();

    // Validate accountType
    if (!isset($data['methodName']) || !in_array($data['methodName'], array('epay', 'bankwire','coinbase'))) {
        $errors['methodName'] = INVALID_METHOD_NAME_ERROR_MESSAGE;
    }

    if (!isset($data['accountNo']) || !ctype_digit((string)$data['accountNo'])) {
        $errors['accountNo'] = INVALID_ACCOUNT_NO_ERROR_MESSAGE;
    }

    if (!isset($data['amount']) || !ctype_digit((string)$data['amount']) || $data['amount'] < 1 ) {
        $errors['amount'] = INVALID_AMOUNT_ERROR_MESSAGE;
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