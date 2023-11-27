<?php
include('config.php');
error_reporting(0);
session_start();

$username_email = $_POST['username_email'];

// Get the account based on the email or username
$accounttQuery = "SELECT * FROM website_accounts WHERE email = ? OR username = ?";
$accounttStmt = $conn->prepare($accounttQuery);
$accounttStmt->bind_param("ss", $username_email, $username_email);
$accounttStmt->execute();
$accounttResult = $accounttStmt->get_result();

if ($accounttResult && $accounttResult->num_rows > 0) {
    $user = $accounttResult->fetch_assoc();

    // Generate reset tokens and update user record
    $restok = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20) . rand(1, 10000);
    $restoken = md5($restok);
    $token2 = md5($restoken);
    $email = $user['email'];
    $username = $user['username'];

    $userUpdateQuery = "UPDATE website_accounts SET resettoken = ?, resettoken_time = ? WHERE id = ?";
    $userUpdateStmt = $conn->prepare($userUpdateQuery);
    $userUpdateStmt->bind_param("sii", $token2, time(), $user['id']);
    $userUpdateStmt->execute();

    $token1 = md5($user['id']);
    $token3 = substr($username, 0, 2);
    $token5 = md5(md5($email));
    $token6 = substr($username, 2, 2);
    $token7 = md5(date('d'));
    $token8 = substr($username, 4, 40);

    // Build the reset link
    $resetlink = $webeurl . '/en/reset-password/' . $token1 . '/' . $token2 . '/' . $token3 . '/' . $token5 . '/' . $token6 . '/' . $token7 . '/' . $token8;

    // Send reset email
    $to = $email;
    $subject = 'Reset Your Password';
    $message = "Click the link below to reset your password:\n\n$resetlink\n\n";
    $headers = "From: info@jmibrokers.com";

    mail($to, $subject, $message, $headers);

    // Redirect based on language segment
    $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');
    $redirectPath = ($languageSegment == 'ar') ? '/ar/forgot-password' : (($languageSegment == 'ru') ? '/ru/forgot-password' : '/en/forgot-password');

    // Redirect with success message
    $successMessage = ($languageSegment == 'ar') ? 'لقد تم أرسال الرابط الخاص بتغيير كلمة السر الى بريدك' : (($languageSegment == 'ru') ? 'Мы отправляем ссылку сброса на вашу почту' : 'We Sent Reset Link To Your Mail');
    header("Location: " . $redirectPath . "?status-success=" . urlencode($successMessage));
    exit();
} else {
    // Redirect with error message
    $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');
    $redirectPath = ($languageSegment == 'ar') ? '/ar/forgot-password' : (($languageSegment == 'ru') ? '/ru/forgot-password' : '/en/forgot-password');

    $errorMessage = ($languageSegment == 'ar') ? 'البريد الألكترونى غير صحيح' : (($languageSegment == 'ru') ? 'Неверный адрес электронной почты или имя пользователя' : 'Wrong Mail or Username !!');
    header("Location: " . $redirectPath . "?status-error=" . urlencode($errorMessage));
    exit();
}
?>
