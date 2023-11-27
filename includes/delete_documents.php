<?php

include("config.php");
session_start();

// Flash messages
$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'documents';

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

// Fetch document details
$id = isset($_GET['id']) ? $_GET['id'] : null;
$stmtDocument = $conn->prepare("SELECT * FROM documents WHERE id = :id AND website_accounts_id = :userId");
$stmtDocument->bindParam(':id', $id);
$stmtDocument->bindParam(':userId', $user['id']);
$stmtDocument->execute();
$document = $stmtDocument->fetch(PDO::FETCH_ASSOC);

if ($document && $document['type'] !== 8) {
    $lastDocument = $document['document'];
    $path = substr($lastDocument, strpos($lastDocument, "assets/user_documents"));

    // Delete the document
    $stmtDeleteDocument = $conn->prepare("DELETE FROM documents WHERE id = :id AND website_accounts_id = :userId");
    $stmtDeleteDocument->bindParam(':id', $id);
    $stmtDeleteDocument->bindParam(':userId', $user['id']);
    $stmtDeleteDocument->execute();

    // Create notification
    $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (:userId, 0, 'Your document has been deleted successfully.', 'Your document has been deleted successfully.', 'تم حذف المستند الخاص بك بنجاح.', 'تم حذف المستند الخاص بك بنجاح.', 'Ваш документ был успешно удален.', 'Ваш документ был успешно удален.', '/cpanel/documents')");
    $stmtNotification->bindParam(':userId', $user['id']);
    $stmtNotification->execute();
} else {
    if (!$document) {
        // Document not found
        header('Location: error_page.php?status-error=Document not found');
        exit();
    } elseif ($document['type'] === 8) {
        // Handle the case where document type is 8
        header('Location: error_page.php?status-error=Cannot delete documents of type 8');
        exit();
    }
}

// Redirect based on language
// if ($_SERVER['REQUEST_URI'] == '/ar') {
//     header('Location: ar/cpanel/documents');
//     exit();
// } elseif ($_SERVER['REQUEST_URI'] == '/ru') {
//     header('Location: ru/cpanel/documents');
//     exit();
// } else {
//     header('Location: en/cpanel/documents');
//     exit();
// }
?>
