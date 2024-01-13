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
    // Fetch FX account details
    $stmtAccount = $conn->prepare("SELECT * FROM fx_accounts WHERE id = ? AND website_accounts_id = ?");
    $stmtAccount->bind_param("ii", $id, $user['id']);
    $stmtAccount->execute();
    $resultAccount = $stmtAccount->get_result();
    $account = $resultAccount->fetch_assoc();

    if ($account) {
        // Update account status
        $stmtUpdateAccount = $conn->prepare("UPDATE fx_accounts SET status = 5 WHERE id = ? AND website_accounts_id = ?");
        $stmtUpdateAccount->bind_param("ii", $id, $user['id']);
        $stmtUpdateAccount->execute();

        // Save notification for admin
        $stmtAdminNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (?, 0, ?, ?)");
        $stmtAdminNotification->bind_param("iss", 999999999, $user['email'] . ' Has Request Account Deleting', '/cms/website-account?&bymail=' . $user['email'] . '&');
        $stmtAdminNotification->execute();

        // Save notification for user
        $stmtUserNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, 0, ?, ?, ?, ?, ?, ?, ?)");
        $stmtUserNotification->bind_param("ississsss", $user['id'], 'Account deleting request processed successfully, You will be notified when it\'s done.', 'Account deleting request processed successfully, You will be notified when it\'s done.', 'تمت استلام طلب حذف  الحساب بنجاح ، وسيتم إعلامك عند الانتهاء', 'تمت استلام طلب حذف  الحساب بنجاح ، وسيتم إعلامك عند الانتهاء', 'Запрос на удаление учетной записи успешно обработан, вы получите уведомление, когда это будет сделано.', 'Запрос на удаление учетной записи успешно обработан, вы получите уведомление, когда это будет сделано.', '/cpanel/live-account');
        $stmtUserNotification->execute();

        // Send email notification to admin
        $backup = Mail::getSwiftMailer();
        $data['title'] = 1;
        $data['name'] = 'Admin';
        $data['details'] = 'FX Account ' . $id . ' deleting request <br />Email= ' . $user['email'] . ' - <br />user_id=' . $user['id'];
        $subject = 'FX Account ' . $id . ' deleting Request';
        Mail::to('support@jmibrokers.com')->send(new Queued($data, $subject));
        Mail::setSwiftMailer($backup);
    }
}

// Close database connection
$conn->close();

// Redirect back
header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>
