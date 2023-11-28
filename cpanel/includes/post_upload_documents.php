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

// Validate input
if (!empty($_FILES['document'])) {
    $documentType = isset($_POST['document_type']) ? $_POST['document_type'] : '';
    $documentDescription = isset($_POST['document_description']) ? $_POST['document_description'] : '';

    // Validate document type
    if (!preg_match('/^[0-9]*$/', $documentType) || strlen($documentType) < 1 || strlen($documentType) > 1) {
        // Handle validation error
    }

    // Validate document file
    if ($_FILES['document']['size'] > 2048 * 1024 || !in_array($_FILES['document']['type'], ['image/jpeg', 'image/bmp', 'image/png', 'application/pdf', 'image/jpg'])) {
        // Handle validation error
    }

    $document = new stdClass();
    $destinationPath = 'user_documents/user_documents/';
    $filename = rand(1, 1000000) . time() . '.' . pathinfo($_FILES['document']['name'], PATHINFO_EXTENSION);
    $document->document = 'user_documents/' . $filename;
    $document->website_accounts_id = $user['id'];
    $document->type = $documentType;
    $document->description = $documentDescription;
    $document->status = 0;

    $stmtInsertDocument = $conn->prepare("INSERT INTO documents (document, website_accounts_id, type, description, status) VALUES (:document, :website_accounts_id, :type, :description, :status)");
    $stmtInsertDocument->bindParam(':document', $document->document);
    $stmtInsertDocument->bindParam(':website_accounts_id', $document->website_accounts_id);
    $stmtInsertDocument->bindParam(':type', $document->type);
    $stmtInsertDocument->bindParam(':description', $document->description);
    $stmtInsertDocument->bindParam(':status', $document->status);
    $stmtInsertDocument->execute();

      // Backup your default mailer
      $backup = Mail::getSwiftMailer();
      $data['title']=1;
      $data['name']='Admin';
      $data['details']=$user->email.' Documents have been loaded and waiting for approval';
      $subject=' Documents awaiting approval';
      Mail::to('support@jmibrokers.com')->send(new Queued($data,$subject));
      //dd(' error');

      // Restore your original mailer
      Mail::setSwiftMailer($backup);
      
    move_uploaded_file($_FILES['document']['tmp_name'], $destinationPath . $filename);

    // Handle notification creation and sending (similar logic as in your code)
    
    if ($_SERVER['REQUEST_URI'] == '/ar') {
        header('Location: ar/cpanel/documents?status-success=تم رفع المستند بنجاح وينتظر مراجعة الادارة');
        exit();
    } elseif ($_SERVER['REQUEST_URI'] == '/ru') {
        header('Location: ru/cpanel/documents?status-success=Документ успешно загружен и ожидает рассмотрения администраторами');
        exit();
    } else {
        header('Location: en/cpanel/documents?status-success=Your document has been uploaded successfully and waiting for approval');
        exit();
    }
} else {
    if ($_SERVER['REQUEST_URI'] == '/ar') {
        header('Location: ar/cpanel/documents?status-error=المستند غير موجود في الطلب');
        exit();
    } elseif ($_SERVER['REQUEST_URI'] == '/ru') {
        header('Location: ru/cpanel/documents?status-error=Документ не найден в запросе');
        exit();
    } else {
        header('Location: en/cpanel/documents?status-error=Document not found in the request');
        exit();
    }
}
?>
