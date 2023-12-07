<?php
include('config.php');
error_reporting(0);
session_start();

$siteurl = 'http://localhost/cms/';
$webeurl = 'http://localhost/';

$session_user = $_SESSION['user'];
$input = $_REQUEST;

$transfer_to = $input['transfer_to'];

if ($input['transfer_to'] == 'other') {
    $transfer_to = $input['other_account'];

    if (!preg_match('/^[0-9]*$/', $input['other_account']) || strlen($input['other_account']) > 9) {
        die("Other account validation failed.");
    }
} else {
    if (!preg_match('/^[0-9]*$/', $input['transfer_to']) || strlen($input['transfer_to']) > 9) {
        die("Transfer to validation failed.");
    }
}

if (!is_numeric($input['amount']) || $input['amount'] < 0) {
    die("Amount validation failed.");
}

if (!preg_match('/^[0-9]*$/', $input['transfer_from']) || strlen($input['transfer_from']) > 9) {
    die("Transfer from validation failed.");
}

if (!preg_match('/^[0-9]*$/', $input['currency']) || $input['currency'] < 1 || $input['currency'] > 1) {
    die("Currency validation failed.");
}

$query = "|MODE=7|LOGIN=" . $input['transfer_from'] . "|CPASS=" . $input['password'];

$query1 = "|MODE=4|LOGIN=" . $input['transfer_from'] . "|CPASS=" . $input['password'] . "|TOACC=" . $transfer_to . "|AMOUNT=" . $_POST['amount'];

$ret = 'error';

$q = "WMQWEBAPI MASTER=jmi2020" . $query . "\nQUIT\n";
$ptr = @fsockopen('89.116.30.28', '443', $errno, $errstr, 5);

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

if ($ret == Null or $ret == 'error') {
    $ret = 'error';
    $q = "WMQWEBAPI MASTER=jmi2020" . $query . "\nQUIT\n";
    $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
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
}

$ret = substr($ret, 0, strlen($ret) - 1);
$result = json_decode($ret);

if (is_object($result) && isset($result->result) && $result->result == 0) {
    $ret1 = 'error';
    $q = "WMQWEBAPI MASTER=jmi2020" . $query1 . "\nQUIT\n";
    $ptr = @fsockopen('89.116.30.28', '443', $errno, $errstr, 5);
    if ($ptr) {
        if (fputs($ptr, $q) != FALSE) {
            $ret1 = '';
            while (!feof($ptr)) {
                $line = fgets($ptr, 128);
                if ($line == "end\r\n") break;
                $ret1 .= $line;
            }
        }
        fclose($ptr);
    }

    if ($ret1 == Null or $ret1 == 'error') {
        $q = "WMQWEBAPI MASTER=jmi2020" . $query1 . "\nQUIT\n";
        $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
        if ($ptr) {
            if (fputs($ptr, $q) != FALSE) {
                $ret1 = '';
                while (!feof($ptr)) {
                    $line = fgets($ptr, 128);
                    if ($line == "end\r\n") break;
                    $ret1 .= $line;
                }
            }
            fclose($ptr);
        }
    }

    $ret1 = substr($ret1, 0, strlen($ret1) - 1);
    $result1 = json_decode($ret1);

    if ($result1->result == 0) {
        // Assume you have a Transactions model and the corresponding database table
        // You should replace this with your actual model and database table name
        // Also, you need to include the necessary model file or set up autoloading
        $transaction = new Transactions;
        $transaction->website_accounts_id = $user->id;
        $transaction->account = $transfer_to;
        $transaction->amount = $input['amount'];
        $transaction->currency = $input['currency'];
        $transaction->type = 2; // Assuming 2 is the type for internal transfers
        $transaction->via = $input['transfer_from'];
        $transaction->status = 1; // Assuming 1 is the status for successful transactions
        $transaction->details_user = '';
        $transaction->details_admin = '';
        $transaction->save();

        if (Request::segment(1) == 'ar') {
            header("Location: ar/cpanel/transaction-history?status-success=تم التحويل بنجاح");
            exit();
        } elseif (Request::segment(1) == 'ru') {
            header("Location: ru/cpanel/transaction-history?status-success=Успешно перенесено");
            exit();
        } else {
            header("Location: en/cpanel/transaction-history?status-success=Successfully Transfered");
            exit();
        }
    }
}

if (Request::segment(1) == 'ar') {
    header("Location: ar/cpanel/transaction-history?status-error=فشل التحويل");
    exit();
} elseif (Request::segment(1) == 'ru') {
    header("Location: ru/cpanel/transaction-history?status-error=Failed");
    exit();
} else {
    header("Location: en/cpanel/transaction-history?status-error=Failed");
    exit();
}
?>
