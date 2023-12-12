<?php
include('includes/softwareinclude/config.php');
global $conn;

$passwordnew = md5($_POST['newPassword']);

$email = isset($_POST['useremail']) ? $_POST['useremail'] : '';

// Prepare and bind the update statement
$stmt = $conn->prepare("UPDATE website_accounts SET password = ? WHERE email = ?");
$stmt->bind_param("ss", $passwordnew, $email);

// Execute the statement
if ($stmt->execute()) {
    echo "success";
} else {
    echo "Error updating password: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
