<?php

include("config.php");
session_start();

$input = $_REQUEST;

$sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';

$stmt = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
$stmt->bindParam(':user', $sessionUser);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bindParam(':userId', $user['id']);
$stmtNotificationsAll->execute();
$notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
$stmtNotificationsUnseen->bindParam(':userId', $user['id']);
$stmtNotificationsUnseen->execute();
$notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

// Assuming you have a function to validate the request
function validateRequest($request, $rules)
{
    // Implement your validation logic here
}

// Assuming you have a function to check the hashed password
function checkPassword($inputPassword, $hashedPassword)
{
    // Implement your password check logic here
}

validateRequest($_REQUEST, [
    'password' => 'required|min:8|max:40',
    'confirmpassword' => 'required|min:8|max:40|same:password',
]);

if (checkPassword($_REQUEST['currentpassword'], $user['password'])) {
    $encpassword = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

    $user['password'] = $encpassword;

    // Assuming you have a function to save user changes
    if (saveUserChanges($user)) {
        $redirectUrl = '';

        if ($_SERVER['REQUEST_URI'] == '/ar') {
            $redirectUrl = 'ar/cpanel/profile?status-success=تم تغيير كلمة السر';
        } elseif ($_SERVER['REQUEST_URI'] == '/ru') {
            $redirectUrl = 'ru/cpanel/profile?status-success=Пароль обновлен!';
        } else {
            $redirectUrl = 'en/cpanel/profile?status-success=Password updated!';
        }

        header("Location: $redirectUrl");
        exit();
    }
} else {
    $errorUrl = '';

    if ($_SERVER['REQUEST_URI'] == '/ar') {
        $errorUrl = 'ar/cpanel/profile?status-error=كلمة السر الحالية غير صحيحة';
    } elseif ($_SERVER['REQUEST_URI'] == '/ru') {
        $errorUrl = 'ru/cpanel/profile?status-error=Неверный текущий пароль!';
    } else {
        $errorUrl = 'en/cpanel/profile?status-error=Current Password Wrong !';
    }

    header("Location: $errorUrl");
    exit();
}

function saveUserChanges($user)
{
    global $conn; // Assuming $conn is your database connection

    $stmt = $conn->prepare("UPDATE website_accounts SET password = :password WHERE id = :userId");
    $stmt->bindParam(':password', $user['password']);
    $stmt->bindParam(':userId', $user['id']);

    return $stmt->execute();
}

?>
