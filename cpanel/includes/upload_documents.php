<?php

include("config.php");
include("functions.php");
session_start();
try {
    $SessionUser = $_SESSION['sessionusername'];
    $SessionUserId = $_SESSION['sessionuserid'];
    $targetDir = "../../assets/doc/user_documents/";
    $uploadtargetDir = "../assets/doc/user_documents/";
    $status=2;
    $documentType = $_POST['documentType'];
    $documentDescription = $_POST['documentDescription'];
    $documentFile = $_FILES['documentFile'];
   
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if ($documentFile['error'] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($documentFile['name'], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        $uploadtargetDir = $uploadtargetDir . $filename . "." . $fileExtension;

        // Check if a document with the same type already exists for the user
        $checkDocumentExistsStmt = $conn->prepare("SELECT COUNT(*) as count FROM documents WHERE website_accounts_id = ? AND type = ?");
        $checkDocumentExistsStmt->bind_param("ii", $SessionUserId, $documentType);
        $checkDocumentExistsStmt->execute();
        $result = $checkDocumentExistsStmt->get_result();
        $existDocument=$result->fetch_assoc();
        if ($existDocument['count'] > 0) {
   
            echo "Can't Upload Same Document!!";
            return;
        }


        if (move_uploaded_file($documentFile['tmp_name'], $targetFile)) {

           
            $save_file_sql = "INSERT INTO documents(website_accounts_id, document, description, type, status) VALUES (?, ?, ?, ?, ?)";
            $save_document_stmt = $conn->prepare($save_file_sql);
            $save_document_stmt->bind_param("issii", $SessionUserId, $uploadtargetDir, $documentDescription, $documentType, $status);
            $executionSuccess = $save_document_stmt->execute();            

            // $backup = Mail::getSwiftMailer();
            // $data['title'] = 1;
            // $data['name'] = 'Admin';
            // $data['details'] = $user->email . ' Documents have been loaded and waiting for approval';
            // $subject = ' Documents awaiting approval';
            // Mail::to('support@jmibrokers.com')->send(new Queued($data, $subject));
            // //dd(' error');

            // // Restore your original mailer
            // Mail::setSwiftMailer($backup);
            // $user=getwebsiteaccounts($SessionUserId);
            // $mailBody="$user[0]['email']. Documents have been loaded and waiting for approval";
            // $mailSubject="Documents awaiting approval";
            // $mailTo="gopi.smiksystems@gmail.com"
            // $sendMail = mailSendToAdmin($mailBody,$mailSubject,$mailTo);
            if ($executionSuccess) {
                $maild = getwebsiteaccounts($SessionUserId);
                //echo $maild[0]['email'];
                $userMail = $maild[0]['email'];
                $mailBody= "$userMail. Documents have been loaded and waiting for approval";
                $mailSubject="Documents awaiting approval";
                $sendMail = sendMailsToAdmin($mailBody,$mailSubject);
             echo "success" ;
             return;
             } else {
                 echo "Error updating profile: ";
             }
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Error: " . $documentFile['error'];
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}











// // Flash messages
// $_SESSION['pageType'] = 'menu';
// $_SESSION['currentPage'] = 'documents';

// $sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';
// $location = "";

// // Fetch user details
// $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
// $stmtUser->bindParam(':user', $sessionUser);
// $stmtUser->execute();
// $user = $stmtUser->fetch(PDO::FETCH_ASSOC);

// // Fetch notifications
// $stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
// $stmtNotificationsAll->bindParam(':userId', $user['id']);
// $stmtNotificationsAll->execute();
// $notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

// $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
// $stmtNotificationsUnseen->bindParam(':userId', $user['id']);
// $stmtNotificationsUnseen->execute();
// $notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

// // Fetch user documents
// $stmtDocuments = $conn->prepare("SELECT * FROM documents WHERE website_accounts_id = :userId");
// $stmtDocuments->bindParam(':userId', $user['id']);
// $stmtDocuments->execute();
// $documents = $stmtDocuments->fetchAll(PDO::FETCH_ASSOC);



?>
