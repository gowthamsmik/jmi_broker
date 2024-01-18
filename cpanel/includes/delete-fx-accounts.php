<?php
include("config.php");
include("functions.php");
error_reporting(0);
session_start();

// $session_user = $_SESSION['user'];
// $location = $_SESSION['geo_location'];
// $input = $_REQUEST;

// // Database connection setup assumed
// $conn = new mysqli("localhost", "username", "password", "database");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'documents';

//$sessionUser = isset($_SESSION['sessionusername']) ? $_SESSION['usessionusername'] : '';
$SessionUserId = $_SESSION['sessionuserid'];
$id = isset($_GET['id']) ? $_GET['id'] : null;


// Fetch user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ?");
$stmtUser->bind_param("i", $SessionUserId);
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
        $notification=$user['email'] . ' Has Request Account Deleting';
        $notification_link='/cms/website-account?&bymail=' . $user['email'] . '&';
        $stmtAdminNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link) VALUES ('999999999', 0, ?, ?)");
        $stmtAdminNotification->bind_param("ss",$notification, $notification_link);
        $stmtAdminNotification->execute();
        
        
        // Save notification for user
        $stmtUserNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, 0, 'Account deleting request processed successfully, You will be notified when its done.',
         'Account deleting request processed successfully, You will be notified when its done.', 
         'تمت استلام طلب حذف  الحساب بنجاح ، وسيتم إعلامك عند الانتهاء', 
         'تمت استلام طلب حذف  الحساب بنجاح ، وسيتم إعلامك عند الانتهاء', 
         'Запрос на удаление учетной записи успешно обработан, вы получите уведомление, когда это будет сделано.', 
         'Запрос на удаление учетной записи успешно обработан, вы получите уведомление, когда это будет сделано.', 
         '/cpanel/live-account')");
        $stmtUserNotification->bind_param("i",$user['id']);
        $stmtUserNotification->execute();

        // Send email notification to admin
        // $backup = Mail::getSwiftMailer();
        $data['title'] = 1;
        $data['name'] = 'Admin';
        $data['details'] = 'FX Account ' . $id . ' deleting request <br />Email= ' . $user['email'] . ' - <br />user_id=' . $user['id'];
        $subject = 'FX Account ' . $id . ' deleting Request';
        // Mail::to('support@jmibrokers.com')->send(new Queued($data, $subject));
        // Mail::setSwiftMailer($backup);

       
        // sendMailsToAdmin($data['details'],$subject);
        supportEmail($data['details'], $subject,$adminEmail,'');
       
    }
}

// Close database connection
$conn->close();


// // Redirect back
// header("Location: " . $_SERVER['HTTP_REFERER']);
// exit();

$_SESSION['live_account_meesage'] = "Account deleted successfully.";
echo '<script>window.location.href = document.referrer;</script>';
?>
