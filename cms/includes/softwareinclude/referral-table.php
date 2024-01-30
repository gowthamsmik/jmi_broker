<?php include('config.php');
mysqli_set_charset($conn, "utf8mb4");
error_reporting(3);
session_start();
$recordsPerPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 0;
$offset = ($page - 1) * $recordsPerPage;
$search = isset($_GET['Search']) ? $_GET['Search'] : '';
// $referralId = $_SESSION['sessionuserid'] + 10000;

$website_accounts_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($page != 0) {


    $referralAccountsQuery = "SELECT * FROM website_accounts WHERE fullname LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC LIMIT ?, ?";
    $referralAccountsStmt = $conn->prepare($referralAccountsQuery);
    $referralAccountsStmt->bind_param("ii", $offset, $recordsPerPage);


    $referralAccountsStmt->execute();
    $referralAccountsResult = $referralAccountsStmt->get_result();
    $referralAccounts = $referralAccountsResult->fetch_all(MYSQLI_ASSOC);


    // Assuming $website_account is appropriately defined
    // $filteredAccounts = array_filter($referralAccounts, function ($account) use ($website_account) {
    //     return $account['website_accounts_id'] == $website_account['id'];
    // });

    // $filteredAccounts now contains the filtered results based on the condition

    // Count total records for pagination
    $stmtTotalRecords = $conn->prepare("SELECT COUNT(*) as total FROM website_accounts WHERE fullname LIKE '%$search%'");
    $stmtTotalRecords->execute();

    // Check for errors
    if ($stmtTotalRecords->error) {
        echo "Error: " . $stmtTotalRecords->error;
        exit();
    }

    $resultTotalRecords = $stmtTotalRecords->get_result();
    $totalRecords = $resultTotalRecords->fetch_assoc()['total'];
    $i = 0;
    foreach ($referralAccounts as $accounts) {
        $liveAccountsQuery = "SELECT * FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type = 1";
        $liveAccountsStmt = $conn->prepare($liveAccountsQuery);
        $liveAccountsStmt->bind_param("i", $accounts['id']);
        $liveAccountsStmt->execute();
        $liveAccountsResult = $liveAccountsStmt->get_result();
        $liveAccounts = $liveAccountsResult->fetch_all(MYSQLI_ASSOC);
    
        $demoAccountsQuery = "SELECT * FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type = 0";
        $demoAccountsStmt = $conn->prepare($demoAccountsQuery);  // Corrected: Changed from $liveAccountsStmt to $demoAccountsStmt
        $demoAccountsStmt->bind_param("i", $accounts['id']);
        $demoAccountsStmt->execute();
        $demoAccountsResult = $demoAccountsStmt->get_result();  // Corrected: Changed from $liveAccountsStmt to $demoAccountsStmt
        $demoAccounts = $demoAccountsResult->fetch_all(MYSQLI_ASSOC);
    
        $website_accounts_live_id = 0;
        $totalLiveAccounts = count($liveAccounts);
        if ($totalLiveAccounts > 0) {
            $website_accounts_live_id = $liveAccounts[0]['website_accounts_id'];
        }
        $referralAccounts[$i]['totalLiveAccounts'] = $totalLiveAccounts;
        $referralAccounts[$i]['website_accounts_live_id'] = $website_accounts_live_id;
    
        $website_accounts_demo_id = 0;
        $totalDemoAccounts = count($demoAccounts);
        if ($totalDemoAccounts > 0) {
            $website_accounts_demo_id = $demoAccounts[0]['website_accounts_id'];
        }
        $referralAccounts[$i]['totalDemoAccounts'] = $totalDemoAccounts;
        $referralAccounts[$i]['website_accounts_demo_id'] = $website_accounts_demo_id;
    
        $i++;
    }
    

    echo json_encode(['referralAccounts' => $referralAccounts, 'totalPages' => ceil($totalRecords / $recordsPerPage)]);
    exit();
}


if ($website_accounts_id != 0) {

    $liveAccountsQuery = "SELECT  *  FROM fx_accounts WHERE  website_accounts_id= ?";
    $liveAccountsStmt = $conn->prepare($liveAccountsQuery);
    $liveAccountsStmt->bind_param("i", $website_accounts_id);
    $liveAccountsStmt->execute();
    $liveAccountsResult = $liveAccountsStmt->get_result();
    $liveAccounts = $liveAccountsResult->fetch_all(MYSQLI_ASSOC);
    echo json_encode(['liveAccounts' => $liveAccounts]);
    exit();
}




?>