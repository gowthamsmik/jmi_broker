<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include PHPMailer classes manually
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
session_start();
include("includes/softwareinclude/functions.php");
// Validate email address
$maill = getAllMail();
$sendType = $_POST['sendto'];
$everySecond = $_POST['sendevery'];
$sendemailcount = $_POST['sendtoevery'];
$mailSubject = $_POST['mailsubject'];
$_SESSION['mailmsg'] = "Emails Sent Successfully";
$selectedMails = json_decode($_POST['selectedMails'], true);
print_r ($selectedMails);
try {
    if ($sendType == 1) {
        require_once '../vendor/autoload.php';
        $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
        $transport->setUsername('support@jmibrokers.com');
        $transport->setPassword('Duiuw^%^&tw$@@$er$%&^gf*');
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
        // Divide the email list into batches
        $emailBatches = array_chunk($maill, $sendemailcount);
        // Iterate through each batch
        // foreach ($emailBatches as $batch) {
        //     // Iterate through each email address in the batch
        //     foreach ($batch as $to) {
        //         // Create a message for each recipient
        //         $message = (new Swift_Message(''))
        //             ->setFrom(['support@jmibrokers.com' => 'Jmi brokers'])
        //             ->setTo($to)
        //             ->setBody($_POST['maildetails'], 'text/html')
        //             ->setSubject($mailSubject);
        //         // Send the email and check for success
        //         $mailSent = $mailer->send($message);
        //         // Output success or error message for each email
        //         echo $mailSent ? "Email sent successfully to $to.<br>" : "Error sending email to $to.<br>";
        //     }
        //     // Sleep for the specified interval between batches
        //     sleep($everySecond);
        // }
        $_SESSION['mailmsg'] = "Emails Sent Successfully";
        header("Location: send-mails.php");
    }  elseif ($sendType == 2) {
        // Sending emails to selected mails
        require_once '../vendor/autoload.php';
        $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
        $transport->setUsername('support@jmibrokers.com');
        $transport->setPassword('Duiuw^%^&tw$@@$er$%&^gf*');
        $mailer = new Swift_Mailer($transport);

        // foreach ($selectedMails as $to) {
        //     $message = (new Swift_Message(''))
        //         ->setFrom(['support@jmibrokers.com' => 'Jmi brokers'])
        //         ->setTo($to)
        //         ->setBody($_POST['maildetails'], 'text/html')
        //         ->setSubject($mailSubject);

        //     $mailSent = $mailer->send($message);

        //     echo $mailSent ? "Email sent successfully to $to.<br>" : "Error sending email to $to.<br>";

        //     sleep($everySecond);
        // }

    }
    $_SESSION['mailmsg'] = "Emails Sent Successfully";
    header("Location: send-mails.php");
    //header("Location: send-mails.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$e->getMessage()}";
}
?>