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

// function saveTransactions() {
//     global $conn;

//     // Assuming $_SESSION["username"] contains the website_accountid
//     $websiteAccountId = $_SESSION["sessionuserid"];
//     $sql = "SELECT * FROM fx_accounts WHERE website_accounts_id = '$websiteAccountId' AND account_radio_type = 1";
//     $result = array(); // Initialize an array to store all rows
//     $res = $conn->query($sql);

//     if ($res) {
//         while ($row = $res->fetch_assoc()) {
//             $result[] = $row; // Add each row to the result array
//         }
//     } else {
//         echo "Error: " . $conn->error;
//     }

//     return $result;
// }


// function addWithdrawTransaction($userId, $accountNumber, $amount, $currency, $coinbaseAccount) {
//     global $conn;
//     try {

//         $stmt = $conn->prepare("INSERT INTO transactions (website_accounts_id, account, amount, currency, type, via, status, details_user, details_admin) VALUES (:userId, :accountNumber, :amount, :currency, :type, :via, :status, :detailsUser, :detailsAdmin)");

//         $type = 1; // Withdraw
//         $via = 'CoinBase';
//         $status = 0;
//         $detailsUser = '';
//         $detailsAdmin = 'CoinBase Account: ' . $coinbaseAccount;

//         $stmt->bindParam(':userId', $userId);
//         $stmt->bindParam(':accountNumber', $accountNumber);
//         $stmt->bindParam(':amount', $amount);
//         $stmt->bindParam(':currency', $currency);
//         $stmt->bindParam(':type', $type);
//         $stmt->bindParam(':via', $via);
//         $stmt->bindParam(':status', $status);
//         $stmt->bindParam(':detailsUser', $detailsUser);
//         $stmt->bindParam(':detailsAdmin', $detailsAdmin);

//         $stmt->execute();

//         echo "Transaction added successfully.";
//     } catch (PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }

//     $conn = null;
// }




function fetchHtmlContent($url)
{
    $htmlContent = file_get_contents($url);
    return $htmlContent;
}


function pipCalculator()
{
    // API endpoint URL
    $apiUrl = 'https://www.investing.com/tools/forex-pip-calculator';

    // Get HTML content
    $ch = curl_init($apiUrl);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Your User Agent');

    $htmlContent = curl_exec($ch);

    if (curl_errno($ch)) {
        die('Curl error: ' . curl_error($ch));
    }

    // Close cURL session
    curl_close($ch);

    $pattern = '/<tbody>(.+?)<\/tbody>/s';
    preg_match($pattern, $htmlContent, $matches);

    // Output the extracted data
    if (!empty($matches[1])) {
        $bodyHtml = $matches[1];

        // Parse the HTML using DOMDocument for better structure
        $dom = new DOMDocument();
        @$dom->loadHTML('<table>' . $bodyHtml . '</table>');

        $data = [];

        // Loop through each table row
        foreach ($dom->getElementsByTagName('tr') as $row) {
            $rowData = [];

            // Loop through each table cell in the row
            foreach ($row->getElementsByTagName('td') as $cell) {
                $rowData[] = trim($cell->nodeValue);
            }

            // Add the row data to the main data array
            $data[] = $rowData;
        }

        return $data;
    } else {
        return []; // Return an empty array if data is not found
    }
}




function heatmap()
{
    // Target URL
    $url = 'https://www.investing.com/tools/currency-heatmap';

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Your User Agent');

    // Execute cURL session and get the HTML content
    $htmlContent = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        die('Curl error: ' . curl_error($ch));
    }

    // Close cURL session
    curl_close($ch);

    // Create a DOMDocument
    $dom = new DOMDocument;

    // Load HTML content into the DOMDocument
    @$dom->loadHTML($htmlContent);

    // Locate the section with id "leftColumn"
    $leftColumn = $dom->getElementById('leftColumn');

    // Output the HTML content for debugging
    //echo $dom->saveHTML($leftColumn) . "||||||";

    // Output the extracted data
    if ($leftColumn) {
        return $dom->saveHTML($leftColumn);
    } else {
        return 'Data not found.';
    }
}



function scrapeLeftColumn()
{
    // Target URL
    $url = 'https://www.investing.com/tools/currency-heatmap';

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Your User Agent');

    // Execute cURL session and get the HTML content
    $htmlContent = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        die('Curl error: ' . curl_error($ch));
    }

    // Close cURL session
    curl_close($ch);

    // Create a DOMDocument
    $dom = new DOMDocument;

    // Load HTML content into the DOMDocument
    @$dom->loadHTML($htmlContent);

    // Locate the section with id "leftColumn"
    $leftColumn = $dom->getElementById('leftColumn');

    // Output the HTML content for debugging
    echo $dom->saveHTML($leftColumn) . "||||||";

    // Output the extracted data
    if ($leftColumn) {
        $result = '';

        // Extract h2 element
        $h2Element = $leftColumn->getElementsByTagName('h2')->item(0);
        if ($h2Element) {
            $result .= $dom->saveHTML($h2Element);
        }

        // Extract table element
        $tableElement = $leftColumn->getElementsByTagName('table')->item(0);
        if ($tableElement) {
            $result .= $dom->saveHTML($tableElement);
        }

        return $result;
    } else {
        return 'Data not found.';
    }
}


function getwebsiteaccounts($userId)
{
    global $conn;
    $webaccountsQuery = "SELECT * FROM website_accounts WHERE id = ? ";
    $webaccountsStmt = $conn->prepare($webaccountsQuery);
    $webaccountsStmt->bind_param("i", $userId);
    $webaccountsStmt->execute();
    $webaccountsResult = $webaccountsStmt->get_result();
    $webaccounts = $webaccountsResult->fetch_all(MYSQLI_ASSOC);
    return $webaccounts;
}

function getFxAccountsForUser($userId)
{
        global $conn;
        $accountsQuery = "SELECT * FROM fx_accounts WHERE website_accounts_id = ? and account_radio_type=1";
        $accountsStmt = $conn->prepare($accountsQuery);
        $accountsStmt->bind_param("i", $userId);
        $accountsStmt->execute();
        $accountsResult = $accountsStmt->get_result();
        $accounts = $accountsResult->fetch_all(MYSQLI_ASSOC);
        return $accounts;
}

function getUnseenNotificationsForUser($userId)
{
        //$userId = (int)$user['id'];
        global $conn;
        $notificationsUnseenQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? AND notification_status = 0";
        $notificationsUnseenStmt = $conn->prepare($notificationsUnseenQuery);
        $notificationsUnseenStmt->bind_param("i", $userId);
        $notificationsUnseenStmt->execute();
        $notificationsUnseenResult = $notificationsUnseenStmt->get_result();
        $notifications_unseen = $notificationsUnseenResult->fetch_all(MYSQLI_ASSOC); 
        return $notifications_unseen;
} 


function getDocumentsByUser($userId)
{
    global $conn;
    $documentsQuery = "SELECT * FROM documents WHERE id = ? AND status = 1";
    $webaccountsStmt = $conn->prepare($documentsQuery);
    $webaccountsStmt->bind_param("i", $userId); 
    $webaccountsStmt->execute();
    $webaccountsResult = $webaccountsStmt->get_result();
    $documents = $webaccountsResult->fetch_all(MYSQLI_ASSOC);
    return $documents;
}

function getUserByUsernameOrEmail($username)
{
    $user = null;
    global $conn;
    $userQuery = "SELECT * FROM website_accounts WHERE username = ? OR email = ?";
    $userStmt = $conn->prepare($userQuery);
    $userStmt->bind_param("ss", $username, $username);
    $userStmt->execute();
    $userResult = $userStmt->get_result();
    if ($userResult && $userResult->num_rows > 0) {
        $user = $userResult->fetch_assoc();
    }
    return $user;
}

function getNotificationsForUser($userId)
{
    global $conn;
    $notificationsQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8";
    $notificationsStmt = $conn->prepare($notificationsQuery);
    $notificationsStmt->bind_param("i", $userId);
    $notificationsStmt->execute();
    $notificationsResult = $notificationsStmt->get_result();
    $notifications_all = $notificationsResult->fetch_all(MYSQLI_ASSOC);
    return $notifications_all;
}


function sendMailsToAdmin($mailBody,$mailSubject){
    require_once '../../vendor/autoload.php';
    try{
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    //$transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    //$transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
    $transport->setUsername('support.s@jmibrokers.com');
    $transport->setPassword('dkkkiiuudddshh2024@');
    $mailer = new Swift_Mailer($transport);
       
    // $mailTo="support@jmibrokers.com";
    $mailTo="gopi.smiksystems@gmail.com";
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
    catch(Exception){
        return '';
    }
}


function getAllInvoices() {
    global $conn;

    // Assuming $_SESSION["username"] contains the website_accountid
    $websiteAccountId = $_SESSION["sessionuserid"];
    $sql = "SELECT * FROM invoices WHERE user_id = '$websiteAccountId' ORDER BY id DESC";
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


function sendDocumentToMail($filePath, $invoiceId,  $mailSubject,$mailBody,$toEmail)
{
    // Path to the generated PDF file
    //$pdfFilePath = 'E:\yasss\SOFTWARE\xamp8.1.25\htdocs\jmi-olive\assets\invoices' . $newfilename . '.pdf';

    // Check if the file exists
    if (file_exists($filePath)) {
        //$mailSubject = 'Bank Payment Details for` Invoice ' . $invoiceId;

        // Email body (customize as needed)
        //$mailBody = 'New Railsed Invoice ' . $invoiceId;

        // Create the Swift_SmtpTransport instance
        $transport = new Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
        $transport->setUsername('marketing@jmibrokers.com');
        $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');

        // Create the Swift_Mailer instance
        $mailer = new Swift_Mailer($transport);
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
        // Create the Swift_Message instance
        $message = (new Swift_Message(''))
            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($toEmail)
            ->setBody($mailsBody,'text/html')
            ->setSubject($mailSubject);

        // Attach the PDF file
        $attachment = Swift_Attachment::fromPath($filePath);
        $message->attach($attachment);

        // Send the email
        $mailSent = $mailer->send($message);

        if ($mailSent) {
            return 'Email sent successfully.';
        } else {
            return 'Failed to send email.';
        }
    } else {
        return 'PDF file not found.';
    }
}


function getAccountDetails($acount_id)
{
    global $conn;
    $stmtfxAccount = $conn->prepare("SELECT * FROM fx_accounts WHERE id = ?");
    $stmtfxAccount->bind_param("i", $acount_id);
    $stmtfxAccount->execute();
    $stmtfxAccountResult = $stmtfxAccount->get_result();
    $fxAccount = $stmtfxAccountResult->fetch_assoc();
    
    return $fxAccount;
}

function getMyReferrals($userId) {
    global $conn;
    $referralId = $userId + 10000;
    $sql = "SELECT * FROM website_accounts WHERE invited_by=$referralId";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    // Fetch all rows as an associative array
    $referralsArray = array();
    while ($row = $res->fetch_assoc()) {
        $referralsArray[] = $row;
    }

    return $referralsArray;
}


function getUserDetails() {
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


function get_string_between($string, $start, $end)
{
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


function sendMailsToUser($mailBody,$mailSubject,$mailTo){
    require_once '../../vendor/autoload.php';
    try{
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
    $mailer = new Swift_Mailer($transport);
       
   
    $mailsbody='<!DOCTYPE html>
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
            ->setBody($mailsbody,'text/html')
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);
        return '';
    }
    catch(Exception){
        return '';
    }
}
?>















