<?php
include("config.php");
error_reporting(3);
$userId=$_SESSION['sessionuserid'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];

// Check if email exists
$emailExists = checkExistence('email', $email);

// Check if mobile exists
$mobileExists = checkExistence('mobile', $mobile);

// Check if username exists
$usernameExists = checkExistence('username', $username);

$errors = array();

// Check for each field and store error messages
if ($emailExists) {
    $errors['email'] = 'Email already exists.';
}

if ($mobileExists) {
    $errors['mobile'] = 'Mobile number already exists.';
}

if ($usernameExists) {
    $errors['username'] = 'Username already exists.';
}

// Respond with the result
if (!empty($errors)) {
    echo json_encode(array('status' => 'exists', 'errors' => $errors));
} else {
    echo json_encode(array('status' => 'unique'));
}

$conn->close();
function checkExistence($field, $value) {
    global $conn;
    $userId=$_SESSION['sessionuserid'];
    $sql = "SELECT COUNT(*) AS count FROM website_accounts WHERE $field = '$value' AND id <> $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['count'] > 0;
    }

    return false;
}
?>