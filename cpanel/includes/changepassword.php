<?php
error_reporting(3);
include("config.php");
$sessionId = $_SESSION['sessionuserid'];

try {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];

    // Fetch user data from the database
    $checkExistingQuery = "SELECT * FROM website_accounts WHERE id = ?";
    $stmt = $conn->prepare($checkExistingQuery);
    $stmt->bind_param('s', $sessionId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        echo "User not found";
        exit();
    }
    
    // Check if the current password is correct
    if (md5($currentPassword) == $user['password']) {
        // Hash the new password (use appropriate hashing algorithm, e.g., password_hash)
        $hashedNewPassword = md5($newPassword);
        // Update the user's password
        $updatePasswordQuery = "UPDATE website_accounts SET password = ? WHERE id = ?";
        $stmt = $conn->prepare($updatePasswordQuery);
        $stmt->bind_param('ss', $hashedNewPassword, $sessionId);
        $stmt->execute();

        echo "Password updated!";
    } else {
        echo "Current Password is incorrect";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

