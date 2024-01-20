<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    validateEditProfileData($data);



    $sql = "SELECT id, title, fullname, username, email, gender, birthday, birthmonth, birthyear, country, town_city, post_code, country_code, home, mobile, address2, address1, employment_status, nature_of_business, annual_income, net_worth, invited_by, created_at, updated_at FROM website_accounts WHERE id = ?";

    $websiteAccountStmt = $conn->prepare($sql);
    $websiteAccountStmt->bind_param("i", $websiteAccountId);
    $websiteAccountStmt->execute();
    $websiteAccountStmtResult = $websiteAccountStmt->get_result();
    $websiteAccount = $websiteAccountStmtResult->fetch_assoc(); // Using fetch_assoc as we only fetch one row

    $title = isset($data['title']) ? $data['title'] : $websiteAccount['title'];
    $fullName = isset($data['fullName']) ? $data['fullName'] : $websiteAccount['fullname'];
    $email = isset($data['email']) ? $data['email'] : $websiteAccount['email'];
    $userName = isset($data['userName']) ? $data['userName'] : $websiteAccount['username'];
    $gender = isset($data['gender']) ? $data['gender'] : $websiteAccount['gender'];
    $birthDate = isset($data['birthDate']) ? $data['birthDate'] : $websiteAccount['birthday'];
    $birthMonth = isset($data['birthMonth']) ? $data['birthMonth'] : $websiteAccount['birthmonth'];
    $birthYear = isset($data['birthYear']) ? $data['birthYear'] : $websiteAccount['birthyear'];
    $address1 = isset($data['address1']) ? $data['address1'] : $websiteAccount['address1'];
    $address2 = isset($data['address2']) ? $data['address2'] : $websiteAccount['address2'];
    $townCity = isset($data['townCity']) ? $data['townCity'] : $websiteAccount['town_city'];
    $postCode = isset($data['postCode']) ? $data['postCode'] : $websiteAccount['post_code'];
    $homeCode = isset($data['homeCode']) ? $data['homeCode'] : $websiteAccount['home'];
    $home = isset($data['home']) ? $data['home'] : $websiteAccount['home'];
    $countryCode = isset($data['countryCode']) ? $data['countryCode'] : $websiteAccount['country_code'];
    $mobile = isset($data['mobile']) ? $data['mobile'] : $websiteAccount['mobile'];
    $country = isset($data['country']) ? $data['country'] : $websiteAccount['country'];
    $employmentStatus = isset($data['employmentStatus']) ? $data['employmentStatus'] : $websiteAccount['employment_status'];
    $natureOfBusiness = isset($data['natureOfBusiness']) ? $data['natureOfBusiness'] : $websiteAccount['nature_of_business'];
    $annualIncome = isset($data['annualIncome']) ? $data['annualIncome'] : $websiteAccount['annual_income'];
    $netWorth = isset($data['netWorth']) ? $data['netWorth'] : $websiteAccount['net_worth'];
    $account_status = 1;
    $mobile_status = 1;
    $email_status = 1;



    $patch_profile_sql = 'UPDATE website_accounts
    SET
      title = ?,
      fullname = ?,
      username = ?,
      email = ?,
      gender = ?,
      birthday = ?,
      birthmonth = ?,
      birthyear = ?,
      country = ?,
      town_city = ?,
      post_code = ?,
      country_code = ?,
      home = ?,
      mobile = ?,
      address2 = ?,
      address1 = ?,
      employment_status = ?,
      nature_of_business = ?,
      annual_income = ?,
      net_worth = ?,
      account_status = ?,
      email_status = ?,
      mobile_status = ?
    WHERE id = ?';

    $patch_profile_stmt = $conn->prepare($patch_profile_sql);
    $patch_profile_stmt->bind_param(
        "ssssiiiississsssiiiiiiii",
        $title,
        $fullName,
        $userName,
        $email,
        $gender,
        $birthDate,
        $birthMonth,
        $birthYear,
        $country,
        $townCity,
        $postCode,
        $countryCode,
        $home,
        $mobile,
        $address2,
        $address1,
        $employmentStatus,
        $natureOfBusiness,
        $annualIncome,
        $netWorth,
        $account_status,
        $email_status,
        $mobile_status,
        $websiteAccountId
    );

   

    $executionSuccess = $patch_profile_stmt->execute();

    if ($executionSuccess) {

        http_response_code(200);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => GET_USER_PROFILE_UPDATE_SUCCESS_MESSAGE));
    } else {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => SOMTHING_WRONG_ERROR_MESSAGE));
    }


    exit();



}
http_response_code(405);






?>