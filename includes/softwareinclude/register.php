<?php

include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the AJAX request
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $userName = $_POST['userName'];
    $userRole = 2;
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $dialCode = $_POST['dialCode'];
    $currentTimestamp = date('Y-m-d H:i:s');
    $account_status = 1;
    $email_status = 1;
    $mobile_status = 1;

    // Check if the email already exists
    $checkExistingSql = "SELECT * FROM website_accounts WHERE email = '$email' OR mobile = '$phone' OR username = '$userName'";
    $checkExistingResult = $conn->query($checkExistingSql);
    $message = "";

    if ($checkExistingResult->num_rows > 0) {
        while ($row = $checkExistingResult->fetch_assoc()) {
            if ($row['email'] == $email) {
                // Email already exists, output an error message
                echo "Email already exists";
                break;
            }
            if ($row['mobile'] == $phone) {
                // Phone number already exists, output an error message
                echo "Phone Number already exists";
                break;
            }
            if ($row['username'] == $userName) {
                // User name already exists, output an error message
                echo "Username already exists";
                break;
            }
        }
    } else {
        $insertUserSql = "INSERT INTO website_accounts (title,email, password,fullname,gender,mobile,username,country_code,account_status,mobile_status,email_status,updated_at,created_at) 
        VALUES ('$gender','$email', '$password','$name','$gender','$phone','$userName','$dialCode','$account_status','$mobile_status','$email_status','$currentTimestamp','$currentTimestamp')";
        $res = $conn->query($insertUserSql);
        if ($res === TRUE) {
            // Insert successful
            echo "User successfully registered!";
        } else {
            // Error inserting user, output error message and the MySQL error
            echo "Error: " . $insertUserSql . "<br>" . $conn->error;
        }
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method";
}

$conn->close();

?>
