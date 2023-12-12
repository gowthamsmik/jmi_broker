<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes manually
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
session_start();
include("includes/softwareinclude/functions.php");
include("includes/softwareinclude/config.php");

// Validate email address
$maill = getAllMail();
$sendType = $_POST['sendto'];
$everySecond = $_POST['sendevery'];
$sendemailcount = $_POST['sendtoevery'];
$mailSubject = $_POST['mailsubject'];
$_SESSION['mailmsg'] = "Emails Sent Successfully";
$selectedMails = json_decode($_POST['selectedMails'], true);
try {
    if ($sendType == 1) {
       
            $status = 'queued';
           // Insert a single entry in emails_queue table
            $save_file_sql = "INSERT INTO send_mail(send_type, every_second, send_count, subject, body, status) VALUES (?, ?, ?, ?, ?, ?)";
            $save_document_stmt = $conn->prepare($save_file_sql);
            $save_document_stmt->bind_param("iiisss", $sendType, $everySecond, $sendemailcount, $mailSubject, $_POST['maildetails'], $status);
            $save_document_stmt->execute();

            $queueId = $save_document_stmt->insert_id;
            // Insert email addresses into email_addresses table
            foreach ($maill as $email) {
                $insertEmailSql = "INSERT INTO emails_queue (email_address, queue_id) VALUES (?, ?)";
                $insertEmailStmt = $conn->prepare($insertEmailSql);
                $insertEmailStmt->bind_param("si", $email, $queueId);
                $insertEmailStmt->execute();
            }
    
    
        $_SESSION['mailmsg'] = "Emails Sent Successfully";
        header("Location: send-mails.php");
    } else {
        $status = 'queued';
           // Insert a single entry in emails_queue table
            $save_file_sql = "INSERT INTO send_mail(send_type, every_second, send_count, subject, body, status) VALUES (?, ?, ?, ?, ?, ?)";
            $save_document_stmt = $conn->prepare($save_file_sql);
            $save_document_stmt->bind_param("iiisss", $sendType, $everySecond, $sendemailcount, $mailSubject, $_POST['maildetails'], $status);
            $save_document_stmt->execute();
            
            $queueId = $save_document_stmt->insert_id;
            // Insert email addresses into email_addresses table
            foreach ($selectedMails as $email) {
                $insertEmailSql = "INSERT INTO emails_queue (email_address, queue_id) VALUES (?, ?)";
                $insertEmailStmt = $conn->prepare($insertEmailSql);
                $insertEmailStmt->bind_param("si", $email, $queueId);
                $insertEmailStmt->execute();
            }
        }
        $_SESSION['mailmsg'] = "Emails Sent Successfully";
        header("Location: send-mails.php");

    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$e->getMessage()}";
}
?>