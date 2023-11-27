<?php
include('config.php');
session_start();

function withdraw_fund_method($method)
{
    $_SESSION['pageType'] = 'menu';
    $_SESSION['currentPage'] = 'withdraw-fund';

    $session_user = $_SESSION['user'];
    $location = geoip_record_by_name($_SERVER['REMOTE_ADDR']);

    $user = getWebsiteAccount($session_user);
    $notifications_all = getNotifications($user->id, 8);
    $notifications_unseen = getUnseenNotifications($user->id);

    $accounts = getFXAccounts($user->id);

    if ($method == 'credit-card') {
        $title = "Control Panel | Depit/Credit Card";
        includeView('cpanel.withdraw-fund-creditcard', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'pronto') {
        $title = "Control Panel | Pronto";
        includeView('cpanel.withdraw-fund-pronto', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'skrill') {
        $title = "Control Panel | Skrill";
        includeView('cpanel.withdraw-fund-skrill', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'neteller') {
        $title = "Control Panel | Neteller";
        includeView('cpanel.withdraw-fund-neteller', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'bankwire') {
        $title = "Control Panel | Bank Wire";
        includeView('cpanel.withdraw-fund-bankwire', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'westernunion') {
        $title = "Control Panel | Western Union";
        includeView('cpanel.withdraw-fund-westernunion', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'fasapay') {
        $title = "Control Panel | Fasapay";
        includeView('cpanel.withdraw-fund-fasapay', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'epay') {
        $title = "Control Panel | Epay";
        includeView('cpanel.withdraw-fund-epay', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'advcash') {
        $title = "Control Panel | advcash";
        includeView('cpanel.withdraw-fund-advcash', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'payeer') {
        $title = "Control Panel | Payeer";
        includeView('cpanel.withdraw-fund-payeer', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'coinbase') {
        $title = "Control Panel | CoinBase";
        includeView('cpanel.withdraw-fund-coinbase', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } elseif ($method == 'perfect-money') {
        $title = "Control Panel | perfect Money";
        includeView('cpanel.withdraw-fund-perfect-money', compact('title', 'user', 'notifications_all', 'notifications_unseen', 'location', 'accounts'));
    } else {
        redirectPage();
    }
}

function includeView($view, $data)
{
    // Implement your view inclusion logic here
}

function redirectPage()
{
    $segment = $_SESSION['segment'];
    header("Location: $segment/cpanel/withdraw-fund");
}

function getWebsiteAccount($session_user)
{
    // Implement logic to retrieve user data based on $session_user
    // Example: $result = mysqli_query($connection, "SELECT * FROM website_accounts WHERE username = '$session_user' OR email = '$session_user'");
    // Then return the user object
}

function getNotifications($userId, $limit)
{
    // Implement logic to retrieve notifications based on $userId and $limit
    // Example: $result = mysqli_query($connection, "SELECT * FROM Notifications WHERE website_accounts_id = $userId ORDER BY id DESC LIMIT $limit");
    // Then return the notifications array
}

function getUnseenNotifications($userId)
{
    // Implement logic to retrieve unseen notifications based on $userId
    // Example: $result = mysqli_query($connection, "SELECT * FROM Notifications WHERE website_accounts_id = $userId AND notification_status = 0");
    // Then return the unseen notifications array
}

function getFXAccounts($userId)
{
    // Implement logic to retrieve FX accounts based on $userId
    // Example: $result = mysqli_query($connection, "SELECT * FROM fx_accounts_live WHERE user_id = $userId");
    // Then return the accounts array
}
?>
