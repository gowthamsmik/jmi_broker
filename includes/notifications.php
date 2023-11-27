<?php
include('config.php');
// Start the session
session_start();

// Get the user from the session
$session_user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

// Check if the user is logged in
if ($session_user) {

    // Escape user input to prevent SQL injection (replace this with proper input validation)
    $session_user = $conn->real_escape_string($session_user);

    // Query to get user data
    $userQuery = "SELECT * FROM website_accounts WHERE username = '$session_user' OR email = '$session_user'";
    $userResult = $conn->query($userQuery);

    // Check if the user exists
    if ($userResult && $userResult->num_rows > 0) {
        $user = $userResult->fetch_assoc();

        // Update notification status
        $userId = $user['id'];
        $updateNotificationsQuery = "UPDATE Notifications SET notification_status = 1 WHERE website_accounts_id = $userId";
        $conn->query($updateNotificationsQuery);

    } else {
        // Handle the case where the user is not found
        echo "User not found.";
    }

    // Close the database connection
    $conn->close();

} else {
    // Handle the case where the user is not logged in
    // Redirect to login page or show an error message
    header("Location: login.php");
    exit();
}
?>
