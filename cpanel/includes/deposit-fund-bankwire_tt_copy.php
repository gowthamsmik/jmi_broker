<?php
include("config.php");
include("functions.php");
error_reporting(3);

// Flash messages
$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'add-account';
global $conn;
// Get session user


$sessionUser = isset($_SESSION['sessionuser']) ? $_SESSION['sessionuser'] : '';

// Get user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param('ss', $sessionUser, $sessionUser);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();
//var_dump($user);exit(0);
$userId = $user['id'];


$amount = $_POST['amount'];
$account_number = $_POST['account_number'];
$currency = $_POST['currency'];

// // Validate the request
if (!isset($_FILES['ttcopy']) || !isset($_FILES['invoice'])) {
    echo "Invalid request";
}


// Validation for file types and size (you might want to adjust this)
if (
    ($_FILES['ttcopy']['type'] !== 'application/pdf' && $_FILES['ttcopy']['type'] !== 'image/jpeg' && $_FILES['ttcopy']['type'] !== 'image/png') ||
    ($_FILES['invoice']['type'] !== 'application/pdf' && $_FILES['invoice']['type'] !== 'image/jpeg' && $_FILES['invoice']['type'] !== 'image/png') ||
    $_FILES['ttcopy']['size'] > 2048000 || $_FILES['invoice']['size'] > 2048000
) {
    echo "Invalid file types or sizes"  ;
}

// Move uploaded files to destination
$time = time();

$destinationPath = __DIR__ . '/../../assets/ttcopy/';



//$destinationPath = 'E:\\yasss\\SOFTWARE\\xamp8.1.25\\htdocs\\jmi-olive\\assets\\ttcopy\\';

$filename1 = rand(1, 1000000) . $time . '.' . pathinfo($_FILES['ttcopy']['name'], PATHINFO_EXTENSION);
move_uploaded_file($_FILES['ttcopy']['tmp_name'], $destinationPath . $filename1);

$filename2 = rand(1, 1000000) . $time . '.' . pathinfo($_FILES['invoice']['name'], PATHINFO_EXTENSION);
move_uploaded_file($_FILES['invoice']['tmp_name'], $destinationPath . $filename2);

$details_admin = $destinationPath . $filename1;
// Insert into database
$stmt = $conn->prepare("INSERT INTO transactions (website_accounts_id, account, amount, currency, type, via, status, details_admin, details_user) VALUES (?, ?, ?, ?, '0', 'Bank Wire', '0', ?, '')");
$stmt->bind_param('iidss', $userId, $account_number, $amount, $currency, $details_admin);

$stmt->execute();


// // Insert notification into database
if($currency==1){$currencyy='USD';};
$notification=$amount.' '.$currencyy.' New Bank Wire Deposited ';
$notification_link='/cms/deposite-f-requests?&bymail='.$user['email'].'&';
$stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES ('999999999', '0', ?, ?)");

$stmtNotification->bind_param('ss',$notification, $notification_link);
$stmtNotification->execute();

// // Backup your default mailer
 // Assuming you have a Swift Mailer instance

$data['title'] = 1;
$data['name'] = 'Admin';
$data['details'] = $amount . ' ' . $currency . ' New Bank Wire Deposited By ' . $user['email'] . '<br />TT File :<a href="' . $destinationPath . $filename1 . '">Here</a><br />Invoice File :<a href="' . $destinationPath . $filename2 . '">Here</a>';
$subject = $amount . ' ' . $currency . ' New Bank Deposited By ' . $user['email'];
// $mailer->send(new Queued($data, $subject));

// // Restore your original mailer
// $mailer = $backup;
sendMailsToAdmin($data['details'] ,$subject);


// // Insert another notification into database
$stmtNotification1 = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, '0', 'Your deposit has been delivered successfully, our backoffice department will handle it soon.',
 'Your deposit has been delivered successfully, our backoffice department will handle it soon.', 'تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة', 
 'تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة', 'Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.', 
 'Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.', '/cpanel/transactional-history')");
$stmtNotification1->bind_param('i', $userId);
$stmtNotification1->execute();

echo "success";
?>
