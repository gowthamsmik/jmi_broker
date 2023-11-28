<?php
error_reporting(0);
session_start();

$session_user = $_SESSION['user'];
$location = GeoIP::getLocation();
$input = $_REQUEST;

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

if ($user) {
    $account = getFxAccount($conn, $id, $user->id);

    // Check old password
    $query = "|MODE=7|LOGIN=" . $account['account_id'] . "|CPASS=" . $input['old_password'];
    $ret = sendWebSocketRequest($query);

    if ($ret == null || $ret == 'error') {
        $ret = sendWebSocketRequest($query, '92.204.139.189');
    }

    $ret = substr($ret, 0, strlen($ret) - 1);
    $result = json_decode($ret);

    // Result 0 means success
    if ($result->result == 1 || $result->result == 5) {
        return redirectToPageWithError('Invalid Data');
    }

    if ($result->result == 6) {
        return redirectToPageWithError('No Enough Money');
    }

    if ($result->result == 0) {
        // Change investor password
        $query2 = "|MODE=2|LOGIN=" . $account['account_id'] . "|CPASS=" . $input['old_password'] . "|NPASS=" . $input['investor_password'] . "|TYPE=1";
        $ret2 = sendWebSocketRequest($query2);

        // Change real master password
        $query1 = "|MODE=2|LOGIN=" . $account['account_id'] . "|CPASS=" . $input['old_password'] . "|NPASS=" . $input['password'] . "|TYPE=0";
        $ret1 = sendWebSocketRequest($query1);

        if ($ret1 == null || $ret1 == 'error') {
            $ret1 = sendWebSocketRequest($query1, '92.204.139.189');
        }

        if ($ret2 == null || $ret2 == 'error') {
            $ret2 = sendWebSocketRequest($query2, '92.204.139.189');
        }

        $ret1 = substr($ret1, 0, strlen($ret1) - 1);
        $result1 = json_decode($ret1);

        $ret2 = substr($ret2, 0, strlen($ret2) - 1);
        $result2 = json_decode($ret2);

        if ($result1->result == 0 && $result2->result == 0) {
            // Update database with new passwords
            updateFxAccountPasswords($conn, $id, $user->id, $input['password'], $input['investor_password']);

            return redirectToPageWithSuccess('Password Changed Successfully');
        } else {
            return redirectToPageWithError('Password Change Failed');
        }
    }
}

function getFxAccount($conn, $id, $userId)
{
    $stmt = $conn->prepare("SELECT * FROM fx_accounts WHERE id = ? AND website_accounts_id = ?");
    $stmt->bind_param("ii", $id, $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function sendWebSocketRequest($query, $ip = '89.116.30.28')
{
    $ret = 'error';
    $q = "WMQWEBAPI MASTER=jmi2020" . $query . "\nQUIT\n";
    $ptr = @fsockopen($ip, '443', $errno, $errstr, 5);

    if ($ptr) {
        if (fputs($ptr, $q) != FALSE) {
            $ret = '';
            while (!feof($ptr)) {
                $line = fgets($ptr, 128);
                if ($line == "end\r\n") break;
                $ret .= $line;
            }
        }
        fclose($ptr);
    }

    return $ret;
}

function updateFxAccountPasswords($conn, $id, $userId, $password, $investorPassword)
{
    $stmt = $conn->prepare("UPDATE fx_accounts SET password = ?, investor_password = ? WHERE id = ? AND website_accounts_id = ?");
    $stmt->bind_param("ssii", $password, $investorPassword, $id, $userId);
    $stmt->execute();
}

function redirectToPageWithError($message)
{
    if ($_REQUEST['lang'] == 'ar') {
        return header("Location: /ar/cpanel/live-accounts?status-error=$message");
    } elseif ($_REQUEST['lang'] == 'ru') {
        return header("Location: /ru/cpanel/live-accounts?status-error=$message");
    } else {
        return header("Location: /en/cpanel/live-accounts?status-error=$message");
    }
}

function redirectToPageWithSuccess($message)
{
    if ($_REQUEST['lang'] == 'ar') {
        return header("Location: /ar/cpanel/live-accounts?status-success=$message");
    } elseif ($_REQUEST['lang'] == 'ru') {
        return header("Location: /ru/cpanel/live-accounts?status-success=$message");
    } else {
        return header("Location: /en/cpanel/live-accounts?status-success=$message");
    }
}

?>
