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
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('support@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Duiuw^%^&tw$@@$er$%&^gf*');
    $mailer = new Swift_Mailer($transport);
       
    $mailTo="gopi.smiksystems@gmail.com";

    $message = (new Swift_Message(''))
            ->setFrom(['support@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($mailTo)
            ->setBody($mailBody)
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);
        return '';
}
   

?>















