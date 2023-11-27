<?php
error_reporting(0);
session_start();


function getUserReferrals($userId, $conn)
{
    $directRef = [];
    $stmt = $conn->prepare("SELECT * FROM website_accounts WHERE invited_by = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        $directRef[] = $row;
    }
    
    $stmt->close();
    
    $allRef = $directRef;
    foreach ($directRef as $ref) {
        $subRef = getUserReferrals($ref['id'], $conn);
        if (!empty($subRef)) {
            $allRef = array_merge($allRef, $subRef);
        }
    }

    return $allRef;
}

$sessionUser = $_SESSION['user'];
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param("ss", $sessionUser, $sessionUser);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();

$stmtNotificationsAll = $conn->prepare("SELECT * FROM Notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8");
$stmtNotificationsAll->bind_param("i", $user['id']);
$stmtNotificationsAll->execute();
$resultNotificationsAll = $stmtNotificationsAll->get_result();
$notificationsAll = [];
while ($row = $resultNotificationsAll->fetch_assoc()) {
    $notificationsAll[] = $row;
}

$stmtNotificationsUnseen = $conn->prepare("SELECT * FROM Notifications WHERE website_accounts_id = ? AND notification_status = 0");
$stmtNotificationsUnseen->bind_param("i", $user['id']);
$stmtNotificationsUnseen->execute();
$resultNotificationsUnseen = $stmtNotificationsUnseen->get_result();
$notificationsUnseen = [];
while ($row = $resultNotificationsUnseen->fetch_assoc()) {
    $notificationsUnseen[] = $row;
}

$stmtLiveAccounts = $conn->prepare("SELECT * FROM fx_accounts_live WHERE website_accounts_id = ?");
$stmtLiveAccounts->bind_param("i", $user['id']);
$stmtLiveAccounts->execute();
$resultLiveAccounts = $stmtLiveAccounts->get_result();
$liveAccounts = [];
while ($row = $resultLiveAccounts->fetch_assoc()) {
    $liveAccounts[] = $row;
}

$stmtIbAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE account_type = 2 AND account_radio_type = 1 AND website_accounts_id = ?");
$stmtIbAccounts->bind_param("i", $user['id']);
$stmtIbAccounts->execute();
$resultIbAccounts = $stmtIbAccounts->get_result();
$ibAccounts = [];
while ($row = $resultIbAccounts->fetch_assoc()) {
    $ibAccounts[] = $row;
}

$allReferrals = getUserReferrals($user['id'], $conn);

$refLiveAccounts = [];
foreach ($allReferrals as $ref) {
    $stmtRefLive = $conn->prepare("SELECT * FROM fx_accounts WHERE account_radio_type = 1 AND website_accounts_id = ?");
    $stmtRefLive->bind_param("i", $ref['id']);
    $stmtRefLive->execute();
    $resultRefLive = $stmtRefLive->get_result();
    while ($row = $resultRefLive->fetch_assoc()) {
        $refLiveAccounts[] = $row;
    }
}

$refDemoAccounts = [];
foreach ($allReferrals as $ref) {
    $stmtRefDemo = $conn->prepare("SELECT * FROM fx_accounts WHERE account_radio_type = 0 AND website_accounts_id = ?");
    $stmtRefDemo->bind_param("i", $ref['id']);
    $stmtRefDemo->execute();
    $resultRefDemo = $stmtRefDemo->get_result();
    while ($row = $resultRefDemo->fetch_assoc()) {
        $refDemoAccounts[] = $row;
    }
}

$stmtReferralsStatics = $conn->prepare("SELECT * FROM referrals_statics WHERE ref_id = ?");
$stmtReferralsStatics->bind_param("i", $user['id'] + 10000);
$stmtReferralsStatics->execute();
$resultReferralsStatics = $stmtReferralsStatics->get_result();
$referralsStatics = [];
while ($row = $resultReferralsStatics->fetch_assoc()) {
    $referralsStatics[] = $row;
}

$title = "Control Panel | My Referrals";
include('cpanel.my-referrals.php');
$conn->close();
?>
