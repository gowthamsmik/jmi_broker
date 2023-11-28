<?php
include('config.php');

error_reporting(0);
session_start();

$session_user = $_SESSION['user'];
$location = GeoIP::getLocation();

// Database connection setup assumed

// Fetch user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param("ss", $session_user, $session_user);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();

// Check if user exists
if ($user) {
    // Define payment-related variables
    $mail_template = '';
    $mail_subject = '';

    if ($payment == 'neteller') {
        $mail_template = 'mails.requested_mails.neteller';
        $mail_subject = 'Neteller Payment Details';
    } elseif ($payment == 'skrill') {
        $mail_template = 'mails.requested_mails.skrill';
        $mail_subject = 'Skrill Payment Details';
    } elseif ($payment == 'bankwire') {
        $mail_template = 'mails.requested_mails.bankdetails';
        $mail_subject = 'Bank Payment Details';
    } elseif ($payment == 'moneygram') {
        $mail_template = 'mails.requested_mails.moneygram';
        $mail_subject = 'MoneyGram Payment Details';
    } elseif ($payment == 'westernunion') {
        $mail_template = 'mails.requested_mails.westernunion';
        $mail_subject = 'Western Union Payment Details';
    }

    // Send email
    if ($mail_template && $mail_subject) {
        $mail_data = ['fullname' => $user['fullname']];
        $mail_body = file_get_contents($mail_template); // Assuming mail templates are stored in files
        // Additional logic to replace placeholders in the mail body with data

        // Send mail logic, e.g., using PHP's mail function
        mail($user['email'], $mail_subject, $mail_body, 'From: finance@jmibrokers.com');
        
        return 'true';
    } else {
        return 'false'; // Invalid payment method
    }
} else {
    return 'false'; // User not found
}
$conn->close();
?>
