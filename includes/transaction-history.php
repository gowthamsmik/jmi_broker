<?php
$sessionUser = $_SESSION['sessionuser'];
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

if (isset($_GET['neteller--']) && $_GET['neteller--'] == 'success' && $_SESSION['deposit'] == 'neteller--') {
    $_SESSION['deposit'] = 'empty';

    $stmtTransaction = $conn->prepare("INSERT INTO Transactions (website_accounts_id, account, amount, currency, type, via, status, details_admin, details_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $accountNumber = $_SESSION['jmiaccountnumber'];
    $amount = $_SESSION['amount'] / 100;
    $orderId = $_SESSION['orderid'];
    $stmtTransaction->bind_param("isdsisiss", $user['id'], $accountNumber, $amount, 'USD', $type = 0, $via = 'Neteller', $status = 0, $detailsAdmin = "order_id:$orderId jmia_account:$accountNumber amount:$amount", $detailsUser = '');
    $stmtTransaction->execute();

    $stmtNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (?, ?, ?, ?)");
    $notificationAmount = $_SESSION['amount'] / 100;
    $stmtNotification->bind_param("iiss", $id = 999999999, $status = 0, $notificationAmount . 'USD New Neteller Deposited', $link = '/spanel/deposit-fund-requests?&bymail=' . $user['email']);
    $stmtNotification->execute();

    // Additional email sending logic here...

    if ($_SESSION[1] == 'ar') {
        header("Location: ar/cpanel/transaction-history");
        exit();
    } elseif ($_SESSION[1] == 'ru') {
        header("Location: ru/cpanel/transaction-history");
        exit();
    } else {
        header("Location: en/cpanel/transaction-history");
        exit();
    }
} elseif (isset($_GET['neteller']) && $_GET['neteller'] == 'failed') {
    // Redirect logic for failed Neteller transaction...

    if ($_SESSION[1] == 'ar') {
        header("Location: ar/cpanel/transaction-history");
        exit();
    } elseif ($_SESSION[1] == 'ru') {
        header("Location: ru/cpanel/transaction-history");
        exit();
    } else {
        header("Location: en/cpanel/transaction-history");
        exit();
    }
} elseif (isset($_GET['ac_transaction_status']) && $_GET['ac_transaction_status'] == 'COMPLETED' && $_SESSION['PAYMENT_METHOD'] == 'AdvCash' && $_SESSION['PAYMENT_AMOUNT'] == $_GET['ac_merchant_amount']) {
    // Logic for completed AdvCash transaction...

    $stmtTransaction = $conn->prepare("INSERT INTO Transactions (website_accounts_id, account, amount, currency, type, via, status, details_admin, details_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $accountNumber = $_SESSION['PAYMENT_ACCOUNT_NUMBER'];
    $amount = $_SESSION['PAYMENT_AMOUNT'];
    $orderId = $_GET['ac_order_id'];
    $stmtTransaction->bind_param("isdsisiss", $user['id'], $accountNumber, $amount, 'USD', $type = 0, $via = 'AdvCash', $status = 0, $detailsAdmin = "order_id:$orderId jmia_account:$accountNumber amount:$amount", $detailsUser = '');
    $stmtTransaction->execute();

    $stmtNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (?, ?, ?, ?)");
    $notificationAmount = $_SESSION['PAYMENT_AMOUNT'];
    $stmtNotification->bind_param("iiss", $id = 999999999, $status = 0, $notificationAmount . 'USD New AdvCash Deposited', $link = '/spanel/deposit-fund-requests?&bymail=' . $user['email']);
    $stmtNotification->execute();

    // Additional email sending logic here...

    $_SESSION['PAYMENT_AMOUNT'] = '';
    $_SESSION['PAYMENT_ACCOUNT_NUMBER'] = '';
    $_SESSION['PAYMENT_METHOD'] = '';

    if ($_SESSION[1] == 'ar') {
        header("Location: ar/cpanel/transaction-history");
        exit();
    } elseif ($_SESSION[1] == 'ru') {
        header("Location: ru/cpanel/transaction-history");
        exit();
    } else {
        header("Location: en/cpanel/transaction-history");
        exit();
    }
} else {
    // Logic for other cases...

    $stmtTransactions = $conn->prepare("SELECT * FROM all_transactions WHERE website_accounts_id = ?");
    $stmtTransactions->bind_param("i", $user['id']);
    $stmtTransactions->execute();
    $resultTransactions = $stmtTransactions->get_result();
    $transactions = [];
    while ($row = $resultTransactions->fetch_assoc()) {
        $transactions[] = $row;
    }

    if ($_SESSION[1] == 'ar') {
        $title = "لوحة التحكم | تاريخ التحويلات";
        include('ar.cpanel.transaction-history.php');
    } elseif ($_SESSION[1] == 'ru') {
        $title = "Панель управления | Transactions History";
        include('ru.cpanel.transaction-history.php');
    } else {
        $title = "Control Panel | Transactions History";
        include('cpanel.transaction-history.php');
    }
}

 
?>
