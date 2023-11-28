<?php
include('config.php');
session_start();

$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'deposit-fund';
$session_user = $_SESSION['user'];
$location = geoip_record_by_name($_SERVER['REMOTE_ADDR']);

// Replace with your actual database connection logic
// Assume website_accounts and Notifications are your database tables
// and fx_accounts_live is a related table
// The following queries are placeholders, update them accordingly
$userResult = mysqli_query($connection, "SELECT * FROM website_accounts WHERE username = '$session_user' OR email = '$session_user'");
$user = mysqli_fetch_assoc($userResult);

$notificationsAllResult = mysqli_query($connection, "SELECT * FROM Notifications WHERE website_accounts_id = {$user['id']} ORDER BY id DESC LIMIT 8");
$notifications_all = mysqli_fetch_all($notificationsAllResult, MYSQLI_ASSOC);

$notificationsUnseenResult = mysqli_query($connection, "SELECT * FROM Notifications WHERE website_accounts_id = {$user['id']} AND notification_status = 0");
$notifications_unseen = mysqli_fetch_all($notificationsUnseenResult, MYSQLI_ASSOC);

$accountsResult = mysqli_query($connection, "SELECT * FROM fx_accounts_live WHERE user_id = {$user['id']}");
$accounts = mysqli_fetch_all($accountsResult, MYSQLI_ASSOC);

$method = isset($_GET['method']) ? $_GET['method'] : '';

if ($method == 'credit-card') {
    $title = "Control Panel | Depit/Credit Card";
    include 'cpanel.deposit-fund-creditcard.php';
} elseif ($method == 'paypal') {
    $title = "Control Panel | PayPal";
    include 'cpanel.deposit-fund-paypal.php';
} elseif ($method == 'skrill') {
    $title = "Control Panel | Skrill";
    include 'cpanel.deposit-fund-skrill.php';
} elseif ($method == 'neteller') {
    $title = "Control Panel | Neteller";
    include 'cpanel.deposit-fund-neteller.php';
} elseif ($method == 'bankwire') {
    $title = "Control Panel | Bank Wire";
    include 'cpanel.deposit-fund-bankwire.php';
} elseif ($method == 'westernunion') {
    $title = "Control Panel | Western Union";
    include 'cpanel.deposit-fund-westernunion.php';
} elseif ($method == 'moneygram') {
    $title = "Control Panel | MoneyGram";
    include 'cpanel.deposit-fund-moneygram.php';
} elseif ($method == 'coinbase') {
    $title = "Control Panel | CoinBase";
    include 'cpanel.deposit-fund-coinbase.php';
} elseif ($method == 'fasapay') {
    $title = "Control Panel | FasaPay";
    include 'cpanel.deposit-fund-fasapay.php';
} elseif ($method == 'epay') {
    $title = "Control Panel | Epay";
    include 'cpanel.deposit-fund-epay.php';
} elseif ($method == 'sticpay') {
    $title = "Control Panel | SticPay";
    include 'cpanel.deposit-fund-sticpay.php';
} elseif ($method == 'advcash' || $method == 'advcash2') {
    $title = "Control Panel | AdvCash";
    include 'cpanel.deposit-fund-advcash.php';
} elseif ($method == 'payeer') {
    $title = "Control Panel | Payeer";
    include 'cpanel.deposit-fund-payeer.php';
} elseif ($method == 'perfect-money') {
    $title = "Control Panel | Perfect Money";
    include 'cpanel.deposit-fund-perfect-money.php';
} elseif ($method == 'epay-success') {
    // Handle epay success logic
    // ...

    if ($_SESSION['segment'] == 'ar') {
        header('Location: ar/cpanel/transaction-history?status=success');
    } elseif ($_SESSION['segment'] == 'ru') {
        header('Location: ru/cpanel/transaction-history?status=success');
    } else {
        header('Location: en/cpanel/transaction-history?status=success');
    }
} elseif ($method == 'epay-cancel') {
    // Handle epay cancel logic
    // ...

    if ($_SESSION['segment'] == 'ar') {
        header('Location: ar/cpanel/deposit-fund/epay?status=cancel');
    } elseif ($_SESSION['segment'] == 'ru') {
        header('Location: ru/cpanel/deposit-fund/epay?status=cancel');
    } else {
        header('Location: en/cpanel/deposit-fund/epay?status=cancel');
    }
} else {
    if ($_SESSION['segment'] == 'ar') {
        header('Location: ar/cpanel/deposit-fund');
    } elseif ($_SESSION['segment'] == 'ru') {
        header('Location: ru/cpanel/deposit-fund');
    } else {
        header('Location: en/cpanel/deposit-fund');
    }
}
?>
