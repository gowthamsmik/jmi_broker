<?php
include('config.php');
error_reporting(0);
session_start();

$token1 = $_GET['token1'];
$token2 = $_GET['token2'];
$token3 = $_GET['token3'];
$token5 = $_GET['token5'];
$token6 = $_GET['token6'];
$token7 = $_GET['token7'];
$token8 = $_GET['token8'];

$username = $token3 . $token6 . $token8;

// Get the account based on the username
$accounttQuery = "SELECT * FROM website_accounts WHERE username = ?";
$accounttStmt = $conn->prepare($accounttQuery);
$accounttStmt->bind_param("s", $username);
$accounttStmt->execute();
$accounttResult = $accounttStmt->get_result();

if ($accounttResult && $accounttResult->num_rows > 0) {
    $user = $accounttResult->fetch_assoc();

    // Check if tokens are valid
    if ($token1 == md5($user['id']) && $token2 == $user['resettoken'] && $token5 == md5(md5($user['email'])) && $token7 == md5(date('d')) && ($user['resettoken_time'] + 3600) > time()) {
        // Set userressetpassword session
        $_SESSION['userressetpassword'] = $username;

        // Redirect based on language segment
        $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');
        $redirectPath = ($languageSegment == 'ar') ? '/ar/cpanel/resetpassword' : (($languageSegment == 'ru') ? '/ru/cpanel/resetpassword' : '/cpanel/resetpassword');

        // Redirect to the reset password page
        header("Location: " . $redirectPath);
        exit();
    } else {
        // Redirect with error message
        $errorMessage = ($languageSegment == 'ar') ? 'رابط خطأ , أطلب رابط أخر' : (($languageSegment == 'ru') ? 'Неверная ссылка Запрос другого' : 'Invalid Link Request Another');
        $redirectPath = ($languageSegment == 'ar') ? '/ar/forgot-password' : (($languageSegment == 'ru') ? '/ru/forgot-password' : '/en/forgot-password');

        header("Location: " . $redirectPath . "?status-error=" . urlencode($errorMessage));
        exit();
    }
} else {
    // Redirect with error message
    $errorMessage = ($languageSegment == 'ar') ? 'رابط خطأ , أطلب رابط أخر' : (($languageSegment == 'ru') ? 'Неверная ссылка Запрос другого' : 'Invalid Link Request Another');
    $redirectPath = ($languageSegment == 'ar') ? '/ar/forgot-password' : (($languageSegment == 'ru') ? '/ru/forgot-password' : '/en/forgot-password');

    header("Location: " . $redirectPath . "?status-error=" . urlencode($errorMessage));
    exit();
}
?>
