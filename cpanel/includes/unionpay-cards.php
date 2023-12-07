<?php
include('config.php');
error_reporting(0);
session_start();

$siteurl = 'http://localhost/cms/';
$webeurl = 'http://localhost/';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jmi';
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
            return "لوحة التحكم | بطاقات يونيون باى";
        case 'ru':
            return "Панель управления | Unionpay Cards";
        default:
            return "Control Panel | Unionpay Cards";
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

// Get unionpay cards
$unionpayCardsQuery = "SELECT * FROM unionpay_cards WHERE user_id = '{$user['id']}'";
$unionpayCardsResult = $conn->query($unionpayCardsQuery);
$unionpayCards = $unionpayCardsResult->fetch_all(MYSQLI_ASSOC);

if ($languageSegment == 'ar') {
    return view('ar.cpanel.unionpay-cards', compact('title', 'user', 'unionpayCards', 'notificationsAll', 'documents'));
} elseif ($languageSegment == 'ru') {
    return view('ru.cpanel.unionpay-cards', compact('title', 'user', 'unionpayCards', 'notificationsAll', 'documents'));
} else {
    return view('cpanel.unionpay-cards', compact('title', 'user', 'unionpayCards', 'notificationsAll', 'documents'));
}
?>
