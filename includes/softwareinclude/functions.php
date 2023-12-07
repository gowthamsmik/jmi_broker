<?php
include('config.php');
session_start();
function getAlltransactions($type){
    $newtype ='';
    global $conn;
    switch($type)
    {
        case 'all': $newtype='';break;
        case 'deposit': $newtype=0;break;
        case 'withdraw': $newtype=1;break;
        case 'internal': $newtype=2;break;
    }
    if($type!='all')
        $sql = "SELECT * FROM transactions where type=$newtype order by created_at desc";
    else
        $sql = "SELECT * FROM transactions  order by created_at desc";
    $res = $conn->query($sql);
    $result = array(); // Initialize an array to store all rows

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $result[] = $row; // Add each row to the result array
        }

    } else {
        echo "Error: " . $conn->error;
    }
    return $result;
}
function getAllLiveAccounts() {
    global $conn;

    // Assuming $_SESSION["username"] contains the website_accountid
    $websiteAccountId = $_SESSION["sessionuserid"];
    $sql = "SELECT * FROM fx_accounts WHERE website_accounts_id = '$websiteAccountId' AND account_radio_type = 1";
    $result = array(); // Initialize an array to store all rows
    $res = $conn->query($sql);

    if ($res) {
        while ($row = $res->fetch_assoc()) {
            $result[] = $row; // Add each row to the result array
        }
    } else {
        echo "Error: " . $conn->error;
    }

    return $result;
}
function getUser() {
    global $conn;

    // Assuming $_SESSION["username"] contains the website_accountid
    $websiteAccountId = $_SESSION["sessionuserid"];
    $sql = "SELECT * FROM website_accounts WHERE id = '$websiteAccountId' ";
    $result = array(); // Initialize an array to store all rows
    $res = $conn->query($sql);

    if ($res) {
        while ($row = $res->fetch_assoc()) {
            $result[] = $row; // Add each row to the result array
        }
    } else {
        echo "Error: " . $conn->error;
    }

    return $result;
}

function getUserDocuments(){
    global $conn;
     // Assuming $_SESSION["username"] contains the website_accountid
     $websiteAccountId = $_SESSION["sessionuserid"];
     $sql = "SELECT * FROM documents WHERE website_accounts_id = '$websiteAccountId' ";
     $result = array(); // Initialize an array to store all rows
     $res = $conn->query($sql);
 
     if ($res) {
         while ($row = $res->fetch_assoc()) {
             $result[] = $row; // Add each row to the result array
         }
     } else {
         echo "Error: " . $conn->error;
     }
 
     return $result;
}
function getActiveUserDocuments(){
    global $conn;
     // Assuming $_SESSION["username"] contains the website_accountid
     $websiteAccountId = $_SESSION["sessionuserid"];
     $sql = "SELECT * FROM documents WHERE website_accounts_id = '$websiteAccountId' AND status=1 ";
     $result = array(); // Initialize an array to store all rows
     $res = $conn->query($sql);
 
     if ($res) {
         while ($row = $res->fetch_assoc()) {
             $result[] = $row; // Add each row to the result array
         }
     } else {
         echo "Error: " . $conn->error;
     }
 
     return $result;
}

function mailSendToAdmin($mailSubject,$mailTo,$mailBody)
{
    echo "hrhrjejj";
    require_once '../../vendor/autoload.php';
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('support@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Duiuw^%^&tw$@@$er$%&^gf*');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    // $data['title'] = 1;
    // $data['name'] = 'Admin';
    // $subject = 'send email ';

    $message = (new Swift_Message(''))
            ->setFrom(['support@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($mailTo)
            ->setBody($mailBody)
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);
    
}
?>