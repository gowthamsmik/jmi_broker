<?php
include("config.php");
error_reporting(3);


try{
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $title= $_POST['title'];
    $fullName= $_POST['fullName'];
    $email= $_POST['email'];

    $userName = $_POST['userName'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $birthMonth = $_POST['birthMonth'];
    $birthYear = $_POST['birthYear'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $townCity = $_POST['townCity'];
    $postCode = $_POST['postCode'];

    $homeCode =$_POST['homeCode'];

    $home = $_POST['home'];
    $mobileCode = $_POST['mobileCode'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $employmentStatus = $_POST['employmentStatus'];
    $natureOfBusiness = $_POST['natureOfBusiness'];
    $annualIncome = $_POST['annualIncome'];
    $netWorth = $_POST['netWorth'];
$account_status=1;
$mobile_status=1;
$email_status=1;

    $SessionUser=$_SESSION['sessionusername'];
    $SessionUserId=$_SESSION['sessionuserid'];

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
    echo $_POST;
    $patch_profile_stmt = $conn->prepare($patch_profile_sql);
    $patch_profile_stmt->bind_param("ssssiiiississsssiiiiiiii", $title,
    $fullName, $userName, $email, $gender, $birthDate, $birthMonth, $birthYear, $country, 
    $townCity, $postCode, $mobileCode, $home,$mobile, $address2, $address1, $employmentStatus, 
    $natureOfBusiness, $annualIncome, $netWorth, $account_status, $email_status, $mobile_status, $SessionUserId);

    // Assuming $hashedPassword is the hashed value of the password

    $executionSuccess = $patch_profile_stmt->execute();

   if ($executionSuccess) {
    echo "Succesfully updated" .$_POST;
    } else {
        echo "Error updating profile: " . $patch_profile_stmt->error;
    }
  

}
}catch(Exception $e){
    echo "Error In Updation".$e->getMessage();
}
?>
