<?php
error_reporting(0);
session_start();
include("config.php");
include("functions.php");
$session_user = $_SESSION['user'];
// $location = GeoIP::getLocation();
$input = $_REQUEST;
$SessionUserId = $_SESSION['sessionuserid'];

// Database connection setup assumed
// $conn = new mysqli("localhost", "username", "password", "database");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Fetch user details
// $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
// $stmtUser->bind_param("ss", $session_user, $session_user);
// $stmtUser->execute();
// $resultUser = $stmtUser->get_result();
// $user = $resultUser->fetch_assoc();

if ($SessionUserId) {
    // Define account group and type texts
    $account_group_text = getAccountGroupText($input['account_group']);
    $account_type_text = getAccountTypeText($input['account_type']);

    // Create and save notifications
    // $notification = createNotification($conn, 999999999, 'Live Account Edit Request', $account_type_text, $input, $user->id);
    // $notification1 = createNotification($conn, $user->id, 'Account editing request processed successfully', $account_type_text, $input, $user->id, true);

    // Save notification for admin
    $stmtAdminNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link) VALUES ('999999999', 0, ?, '#edit_account')");
    $stmtAdminNotification->bind_param("s", $notificationText);
    $notificationText = sprintf(
        'Live Account Edit Request - Type=%s - leverage=%s - group=%s - Account_id=%s - user_id=%s - Login=%s',
        $account_type_text,
        $input['leverage'],
        $account_group_text,
        $id,
        $SessionUserId,
        $input['account_login']
    );
    $stmtAdminNotification->execute();

    // Save notification for user
    $notification="Account editing request processed successfully, You will be notified when it's done.";
    $details="Account editing request processed successfully, You will be notified when it's done.";
    $notificationTextAr = 'تمت استلام طلب تعديل بيانات الحساب بنجاح ، وسيتم إعلامك عند الانتهاء';
    $notificationDetailsAr = 'تمت استلام طلب تعديل بيانات الحساب بنجاح ، وسيتم إعلامك عند الانتهاء';
    $notificationTextRu = 'Запрос на редактирование учетной записи успешно обработан, вы получите уведомление, когда оно будет выполнено.';
    $notificationDetailsRu = 'Запрос на редактирование учетной записи успешно обработан, вы получите уведомление, когда оно будет выполнено.';


    $stmtUserNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, 0, ?, ?, ?, ?, ?, ?, '/cpanel/live-accounts')");
    $stmtUserNotification->bind_param("issssss", $SessionUserId, $notification,$details,$notificationTextAr,$notificationDetailsAr, $notificationTextRu, $notificationDetailsRu);
   
    $stmtUserNotification->execute();

    // Send email notification to support
    $data['title'] = 1;
    $data['name'] = 'Admin';
    $data['details'] = 'New Edit live account request <br /> Type='.$account_type_text.'<br /> - leverage='.$input['leverage'].'<br /> - gourp='.$account_group_text.'<br /> - Account_id='.$input['account_login'].'<br /> - user_id='. $SessionUserId.'<br /> - Login='.$input['account_login'];
    $subject = 'Live Account Edit Request';
    sendMailsToAdmin($data['details'],$subject);

    $_SESSION['live_account_meesage'] = "Account Update Rquest sent successfully.";
    echo '<script>window.location.href = "'.$siteurl.'cpanel/live-account.php";</script>';

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

// function createNotification($conn, $accountId, $notification, $accountTypeText, $input, $userId, $isArabic = false)
// {
//     $notificationObj = new stdClass();
//     $notificationObj->website_accounts_id = $accountId;
//     $notificationObj->notification_status = 0;
//     $notificationObj->notification = getNotificationText($notification, $accountTypeText, $input, $isArabic);
//     $notificationObj->notification_link = '/cpanel/live-accounts';
//     $notificationObj->save();

//     return $notificationObj;
// }

// function getNotificationText($notification, $accountTypeText, $input, $isArabic = false)
// {
//     $format = ($isArabic) ? 'ar' : 'ru';
//     return $isArabic ? $notification->{$format} : $notification;
// }

// function sendEmailNotification($to, $subject, $details, $accountTypeText, $input, $userId)
// {
//     $message = "New Edit live account request\n Type=$accountTypeText\n - leverage={$input['leverage']}\n - group={$input['account_group']}\n - Account_id={$userId}\n - user_id={$userId}\n - Login={$input['account_login']}";

//     // Send mail logic, e.g., using PHP's mail function
//     mail($to, $subject, $message, 'From: finance@jmibrokers.com');
// }

?>