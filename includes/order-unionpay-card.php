<?php
include('config.php');
error_reporting(0);
session_start();

$siteurl = 'http://localhost/cms/';
$webeurl = 'http://localhost/';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmibroker';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get the title based on language segment
function getTitle($languageSegment)
{
    switch ($languageSegment) {
        case 'ar':
            return "فقدت كلمة السر";
        case 'ru':
            return "Забыл пароль";
        default:
            return "Forgot Password";
    }
}

// Get the language segment from the request URI
$languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false
    ? 'ar'
    : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false
        ? 'ru'
        : 'en');

// Get the title based on language segment
$title = getTitle($languageSegment);

// Get session user
$session_user = isset($_SESSION['user']) ? $_SESSION['user'] : '';

// Get user data
$userQuery = "SELECT * FROM website_accounts WHERE username = '$session_user' OR email = '$session_user'";
$userResult = $conn->query($userQuery);
$user = $userResult->fetch_assoc();

// Get user notifications
$notificationsQuery = "SELECT * FROM Notifications WHERE website_accounts_id = '{$user['id']}' ORDER BY id DESC LIMIT 8";
$notificationsResult = $conn->query($notificationsQuery);
$notificationsAll = $notificationsResult->fetch_all(MYSQLI_ASSOC);

// Get user documents
$documentsQuery = "SELECT * FROM website_accounts WHERE id = '{$user['id']}'";
$documentsResult = $conn->query($documentsQuery);
$documents = $documentsResult->fetch_assoc()['documents'];

// Check if profile is not completed
if (empty($user['country']) || empty($user['mobile'])) {
    $errorMessage = ($languageSegment == 'ar')
        ? 'من فضلك اكمل الملف الشخصى أولا.'
        : (($languageSegment == 'ru') ? 'Пожалуйста, сначала заполните свой профиль.' : 'Please complete your profile first.');
    redirectWithError($errorMessage);
}

// Check if there are less than 2 approved documents
$approvedDocumentsCount = 0;
foreach ($documents as $document) {
    if ($document['status'] == 1) {
        $approvedDocumentsCount++;
    }
}

if ($approvedDocumentsCount < 2) {
    $errorMessage = ($languageSegment == 'ar')
        ? 'من فضلك أرفع المستندات أولا.'
        : (($languageSegment == 'ru') ? 'Пожалуйста, сначала загрузите свои документы.' : 'Please upload your documents first.');
    redirectWithError($errorMessage);
}

// Get unionpay cards
$unionpayCardsQuery = "SELECT * FROM unionpay_cards WHERE user_id = '{$user['id']}'";
$unionpayCardsResult = $conn->query($unionpayCardsQuery);
$unionpayCards = $unionpayCardsResult->fetch_all(MYSQLI_ASSOC);

if (count($unionpayCards) > 0) {
    $unionpayCard = $unionpayCards[0];
    if ($unionpayCard['status'] == 2) {
        $unionpayCard['status'] = 0;
        $updateUnionpayCardQuery = "UPDATE unionpay_cards SET status = 0 WHERE user_id = '{$user['id']}'";
        $conn->query($updateUnionpayCardQuery);
    } else {
        echo "false";
        exit();
    }
} else {
    $insertUnionpayCardQuery = "INSERT INTO unionpay_cards (user_id, status) VALUES ('{$user['id']}', 0)";
    $conn->query($insertUnionpayCardQuery);

    $mailContent = [
        'fullname' => $user['fullname'],
    ];

    // Send mail
    $to = $user['email'];
    $subject = 'UnionPay Card Request Instructions';
    $headers = [
        'From' => 'finance@jmibrokers.com',
        'Cc' => 'finance@jmibrokers.com',
        'Content-Type' => 'multipart/mixed; boundary="boundary"',
    ];

    $attachments = [
        'Application Form.pdf',
        'KYC and Card Loading.pdf',
        'Online Account Registration.pdf',
        'Application Form-SAMPLE.pdf',
    ];

    $message = "Please find the attached files for UnionPay Card request instructions.\r\n";
    $message .= "Thank you.";

    $success = mailWithAttachments($to, $subject, $message, $headers, $attachments);

    if (!$success) {
        echo "false";
        exit();
    }
}

// Notify admin
$adminNotificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link) 
VALUES (999999999, 0, '{$user['email']} is requesting a unionpay card', '/cms/union-pay-card?&bymail={$user['email']}&')";
$conn->query($adminNotificationQuery);

echo "true";

// Function to redirect with an error message
function redirectWithError($errorMessage)
{
    global $languageSegment;
    if ($languageSegment == 'ar') {
        redirectTo("/ar/cpanel/profile", ['status-error' => $errorMessage]);
    } elseif ($languageSegment == 'ru') {
        redirectTo("/ru/cpanel/profile", ['status-error' => $errorMessage]);
    } else {
        redirectTo("/en/cpanel/profile", ['status-error' => $errorMessage]);
    }
}

// Function to send mail with attachments
function mailWithAttachments($to, $subject, $message, $headers, $attachments)
{
    $boundary = 'boundary';

    $headersString = '';
    foreach ($headers as $key => $value) {
        $headersString .= "$key: $value\r\n";
    }

    $headersString .= "MIME-Version: 1.0\r\n";
    $headersString .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    $attachmentsString = '';
    foreach ($attachments as $attachment) {
        $fileContent = file_get_contents(public_path() . "/assets/Files/$attachment");
        $attachmentsString .= "--$boundary\r\n";
        $attachmentsString .= "Content-Type: application/pdf; name=\"$attachment\"\r\n";
        $attachmentsString .= "Content-Disposition: attachment; filename=\"$attachment\"\r\n";
        $attachmentsString .= "Content-Transfer-Encoding: base64\r\n";
        $attachmentsString .= "\r\n";
        $attachmentsString .= chunk_split(base64_encode($fileContent));
        $attachmentsString .= "\r\n";
    }

    $message = "--$boundary\r\n" . $message;
    $message .= "\r\n$attachmentsString--$boundary--\r\n";

    return mail($to, $subject, $message, $headersString);
}

// Function to redirect to a specific URL with optional parameters
function redirectTo($url, $params = [])
{
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    header("Location: $url");
    exit();
}
?>
