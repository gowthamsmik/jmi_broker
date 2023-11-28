<?php
error_reporting(0);
session_start();

$session_user = $_SESSION['user'];
$location = GeoIP::getLocation();
$input = $_REQUEST;

// Database connection setup assumed
$conn = new mysqli("localhost", "username", "password", "database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param("ss", $session_user, $session_user);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();

if ($user) {
    // Define account group and type texts
    $account_group_text = getAccountGroupText($input['account_group']);
    $account_type_text = getAccountTypeText($input['account_type']);

    // Create and save notifications
    $notification = createNotification($conn, 999999999, 'Live Account Edit Request', $account_type_text, $input, $user->id);
    $notification1 = createNotification($conn, $user->id, 'Account editing request processed successfully', $account_type_text, $input, $user->id, true);

    // Send email notification to support
    sendEmailNotification('support@jmibrokers.com', 'Live Account Edit Request', 'New Edit live account request', $account_type_text, $input, $user->id);

    // Redirect based on language
    if ($_REQUEST['lang'] == 'ar') {
        header("Location: /ar/cpanel/live-accounts?status-success=تم طلب تعديل حساب بنجاح وسيتم ابلاغك بفتح الحساب فى خلال ساعة عمل");
    } elseif ($_REQUEST['lang'] == 'ru') {
        header("Location: /ru/cpanel/live-accounts?status-success=Запрос на открытие счета Успешно, Вы получите уведомление об этом в течение 1 часа");
    } else {
        header("Location: /en/cpanel/live-accounts?status-success=Account has been edited successfully. You will receive a notification during one business hour");
    }
} else {
    die("User not found");
}

function getAccountGroupText($group)
{
    if ($group == 1) {
        return 'Variable Spread';
    } elseif ($group == 5) {
        return 'Variable Spread + Bonus';
    } elseif ($group == 2) {
        return 'ECN Live';
    } elseif ($group == 3) {
        return 'Fixed Spread';
    } elseif ($group == 4) {
        return 'Fixed Spread + Bonus';
    }
}

function getAccountTypeText($type)
{
    return ($type == 1) ? 'Individual' : 'IB';
}

function createNotification($conn, $accountId, $notification, $accountTypeText, $input, $userId, $isArabic = false)
{
    $notificationObj = new stdClass();
    $notificationObj->website_accounts_id = $accountId;
    $notificationObj->notification_status = 0;
    $notificationObj->notification = getNotificationText($notification, $accountTypeText, $input, $isArabic);
    $notificationObj->notification_link = '/cpanel/live-accounts';
    $notificationObj->save();

    return $notificationObj;
}

function getNotificationText($notification, $accountTypeText, $input, $isArabic = false)
{
    $format = ($isArabic) ? 'ar' : 'ru';
    return $isArabic ? $notification->{$format} : $notification;
}

function sendEmailNotification($to, $subject, $details, $accountTypeText, $input, $userId)
{
    $message = "New Edit live account request\n Type=$accountTypeText\n - leverage={$input['leverage']}\n - group={$input['account_group']}\n - Account_id={$userId}\n - user_id={$userId}\n - Login={$input['account_login']}";

    // Send mail logic, e.g., using PHP's mail function
    mail($to, $subject, $message, 'From: finance@jmibrokers.com');
}

?>
