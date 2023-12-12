<?php

include("config.php");
session_start();

// Flash messages
$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'open-account';

$sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$location = GeoIP::getLocation();

// Fetch user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
$stmtUser->bindParam(':user', $sessionUser);
$stmtUser->execute();
$user = $stmtUser->fetch(PDO::FETCH_ASSOC);

// Fetch notifications
$stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bindParam(':userId', $user['id']);
$stmtNotificationsAll->execute();
$notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
$stmtNotificationsUnseen->bindParam(':userId', $user['id']);
$stmtNotificationsUnseen->execute();
$notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

// Fetch documents
$stmtDocuments = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = :userId");
$stmtDocuments->bindParam(':userId', $user['id']);
$stmtDocuments->execute();
$documents = $stmtDocuments->fetchAll(PDO::FETCH_ASSOC);

// Fetch live accounts
$stmtLiveAccounts = $conn->prepare("SELECT * FROM fx_accounts_live WHERE user_id = :userId");
$stmtLiveAccounts->bindParam(':userId', $user['id']);
$stmtLiveAccounts->execute();
$liveAccounts = $stmtLiveAccounts->fetchAll(PDO::FETCH_ASSOC);

// Fetch demo accounts
$stmtDemoAccounts = $conn->prepare("SELECT * FROM fx_accounts_demo WHERE user_id = :userId");
$stmtDemoAccounts->bindParam(':userId', $user['id']);
$stmtDemoAccounts->execute();
$demoAccounts = $stmtDemoAccounts->fetchAll(PDO::FETCH_ASSOC);

// Fetch customer agreement document
$stmtCustomerAgreement = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = :userId AND type = 8 AND status = 1");
$stmtCustomerAgreement->bindParam(':userId', $user['id']);
$stmtCustomerAgreement->execute();
$customerAgreement = $stmtCustomerAgreement->fetch(PDO::FETCH_ASSOC);

// Check if the user's country is set
// if ($user['country'] == '') {
//     $redirectPath = getRedirectPath('Complete your profile first');
// }

// // Check if documents are uploaded
// if (count($documents) < 1) {
//     $redirectPath = getRedirectPath('Upload your documents first');
// }

// // Check if at least one document is approved
// if (count($documents) > 0) {
//     $approvedDocumentsCount = 0;
//     foreach ($documents as $docum) {
//         if ($docum['status'] == 1) {
//             $approvedDocumentsCount++;
//         }
//     }
//     if ($approvedDocumentsCount < 1) {
//         $redirectPath = getRedirectPath('You should have at least 1 approved document');
//     }
// }

// // Redirect if needed
// if (isset($redirectPath)) {
//     header("Location: $redirectPath");
//     exit();
// }

// // Render the view
// if ($_SERVER['REQUEST_URI'] == '/ar') {
//     $title = "لوحة التحكم | فتح حساب";
//     include('ar.cpanel.open-account.php');
// } elseif ($_SERVER['REQUEST_URI'] == '/ru') {
//     $title = "Панель управления | Открыть учетную запись";
//     include('ru.cpanel.open-account.php');
// } else {
//     $title = "Control Panel | Open Account";
//     include('cpanel.open-account.php');
// }

// // Helper function to get the redirect path with a status message
// function getRedirectPath($statusMessage) {
//     if ($_SERVER['REQUEST_URI'] == '/ar') {
//         return "/ar/cpanel/profile?status-error=$statusMessage";
//     } elseif ($_SERVER['REQUEST_URI'] == '/ru') {
//         return "/ru/cpanel/profile?status-error=$statusMessage";
//     } else {
//         return "/en/cpanel/profile?status-error=$statusMessage";
//     }
//}
?>
