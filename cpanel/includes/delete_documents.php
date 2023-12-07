<?php



include("config.php");
session_start();

try{
// Flash messages
$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'documents';

//$sessionUser = isset($_SESSION['sessionusername']) ? $_SESSION['usessionusername'] : '';
$SessionUserId = $_SESSION['sessionuserid'];
//$location = GeoIP::getLocation();


// Fetch user details

$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ?");
$stmtUser->bind_param("i", $SessionUserId);
$stmtUser->execute();
$user = $stmtUser->get_result();
$user = $user->fetch_assoc();


// Fetch notifications
$stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bind_param("i", $user['id']);
$stmtNotificationsAll->execute();
$notificationsAll = $stmtNotificationsAll->get_result();
$notificationsAll = $notificationsAll->fetch_assoc();


$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = ? AND notification_status = 0");
$stmtNotificationsUnseen->bind_param("i", $user['id']);
$stmtNotificationsUnseen->execute();
$notificationsUnseen = $stmtNotificationsUnseen->get_result();
$notificationsUnseen = $notificationsUnseen->fetch_assoc();


// Fetch document details
//$data = json_decode(file_get_contents("php://input"), true);
$id = $_POST['document_id'];

$stmtDocument = $conn->prepare("SELECT * FROM documents WHERE id = ? AND website_accounts_id = ?");
$stmtDocument->bind_param("ii", $id,$user['id']);
$stmtDocument->execute();
$document = $stmtDocument->get_result();
$document = $document->fetch_assoc();


if ($document && $document['type'] !== 8) {
    $lastDocument = $document['document'];
    $path = substr($lastDocument, strpos($lastDocument, "assets/user_documents"));
    
   
    // Delete the document
    $stmtDeleteDocument = $conn->prepare("DELETE FROM documents WHERE id = ? AND website_accounts_id = ?");
    $stmtDeleteDocument->bind_param("ii", $id,$user['id']);
    $stmtDeleteDocument->execute();
   
    // Create notification
    $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link, created_at) VALUES ( ?, 0, 'Your document has been deleted successfully.', 'Your document has been deleted successfully.', 'تم حذف المستند الخاص بك بنجاح.', 'تم حذف المستند الخاص بك بنجاح.', 'Ваш документ был успешно удален.', 'Ваш документ был успешно удален.', '/cpanel/documents', NOW())");
    $stmtNotification->bind_param("i", $user['id']);
    $stmtNotification->execute();

    echo "deleted";
    exit();
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
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
