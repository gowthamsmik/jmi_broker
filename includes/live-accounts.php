
<?php
error_reporting(0);
session_start();

$session_user = $_SESSION['user'];
$location = GeoIP::getLocation();

// Database connection setup assumed
$conn = new mysqli("localhost", "username", "password", "database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param("ss", $session_user, $session_user);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();

$notifications_all = [];
$notifications_unseen = [];
$accounts = [];

if ($user) {
    // Fetch notifications
    $stmtNotificationsAll = $conn->prepare("SELECT * FROM Notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8");
    $stmtNotificationsAll->bind_param("i", $user['id']);
    $stmtNotificationsAll->execute();
    $resultNotificationsAll = $stmtNotificationsAll->get_result();
    $notifications_all = $resultNotificationsAll->fetch_all(MYSQLI_ASSOC);

    $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM Notifications WHERE website_accounts_id = ? AND notification_status = 0");
    $stmtNotificationsUnseen->bind_param("i", $user['id']);
    $stmtNotificationsUnseen->execute();
    $resultNotificationsUnseen = $stmtNotificationsUnseen->get_result();
    $notifications_unseen = $resultNotificationsUnseen->fetch_all(MYSQLI_ASSOC);

    // Fetch live accounts
    $stmtAccounts = $conn->prepare("SELECT * FROM fx_accounts_live WHERE website_accounts_id = ?");
    $stmtAccounts->bind_param("i", $user['id']);
    $stmtAccounts->execute();
    $resultAccounts = $stmtAccounts->get_result();
    $accounts = $resultAccounts->fetch_all(MYSQLI_ASSOC);

    $balances = [];
    $equities = [];
    $names = [];
    $account_history = [];

    foreach ($accounts as $account) {
        // Fetch user information
        $ret = '';
        $ptr = @fsockopen('89.116.30.28', '443', $errno, $errstr, 5);

        if ($ptr) {
            if (fputs($ptr, "WUSERINFO-login=$account['account_id']|password=$account['password']\nQUIT\n")) {
                while (!feof($ptr)) {
                    $line = fgets($ptr, 128);
                    if ($line == "end\r\n") break;
                    $ret .= $line;
                }
            }
            fclose($ptr);
        }

        if ($ret == Null or $ret == 'error') {
            $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);

            if ($ptr) {
                if (fputs($ptr, "WUSERINFO-login=$account['account_id']|password=$account['password']\nQUIT\n")) {
                    while (!feof($ptr)) {
                        $line = fgets($ptr, 128);
                        if ($line == "end\r\n") break;
                        $ret .= $line;
                    }
                }
                fclose($ptr);
            }
        }

        // Fetch account history
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 3);
        $endTime = time();
        $ret3 = '';

        $ptr2 = @fsockopen('89.116.30.28', '443', $errno, $errstr, 5);

        if ($ptr2) {
            if (fputs($ptr2, "WUSERHISTORY-login=$account['account_id']|password=$account['password']|from=$startTime|to=$endTime\nQUIT\n")) {
                while (!feof($ptr2)) {
                    $line2 = fgets($ptr2, 128);
                    if ($line2 == "end\r\n") break;
                    $ret3 .= $line2;
                }
            }
            fclose($ptr2);
        }

        if ($ret3 == Null or $ret3 == 'error') {
            $ptr2 = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);

            if ($ptr2) {
                if (fputs($ptr2, "WUSERHISTORY-login=$account['account_id']|password=$account['password']|from=$startTime|to=$endTime\nQUIT\n")) {
                    while (!feof($ptr2)) {
                        $line2 = fgets($ptr2, 128);
                        if ($line2 == "end\r\n") break;
                        $ret3 .= $line2;
                    }
                }
                fclose($ptr2);
            }
        }

        $fx_balance = $this->get_string_between($ret, 'Balance:', 'Equity');
        $fx_equity = $this->get_string_between($ret, 'Equity:', 'Margin');
        $fx_name = $this->get_string_between($ret, "$account['account_id']", '202');

        $ret2 = $ret3;

        array_push($balances, $fx_balance);
        array_push($equities, $fx_equity);
        array_push($names, $fx_name);
        array_push($account_history, $ret2);
    }
}

// Close database connection
$conn->close();

// Render the view
if ($_REQUEST['segment'] == 'ar') {
    $title = "لوحة التحكم | الحسابات الحقيقية ";
    include('ar.cpanel.live-accounts.php');
} elseif ($_REQUEST['segment'] == 'ru') {
    $title = "Панель управления | реальные счета ";
    include('ru.cpanel.live-accounts.php');
} else {
    $title = "Control Panel | Live Accounts";
    include('cpanel.live-accounts.php');
}
?>
