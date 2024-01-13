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
    require_once '../../vendor/autoload.php';
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    // $data['title'] = 1;
    // $data['name'] = 'Admin';
    // $subject = 'send email ';
    $mailsBody='<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">
               
  
                <p>'.$mailBody.'</p>
  
    
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
    $message = (new Swift_Message(''))
            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($mailTo)
            ->setBody($mailsBody,'text/html')
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);
    
}

function sendMailForDocumentUpload($mailBody,$mailSubject){
    require_once '../../vendor/autoload.php';
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
    $mailer = new Swift_Mailer($transport);
       
    $mailTo="support@jmibrokers.com";
    $mailsBody='<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">
               
  
               <p>'.$mailBody.'</p>
  
    
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
    $message = (new Swift_Message(''))
            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($mailTo)
            ->setBody($mailsBody,'text/html')
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);
        return '';
}
function add_become_partner($title, $name, $email, $company, $headOfficeLocation, $city, $country_code, $phoneno)
{
    global $conn;
    $sql = "INSERT INTO `becomepartner`( `title`, `name`, `email`,`company`,`headOfficeLocation`,`city`,`country_code`,`phoneno`) VALUES ('$title','$name','$email','$company','$headOfficeLocation','$city','$country_code','$phoneno')";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error----: " . $conn->error;
    }
    return $res;
}


?>