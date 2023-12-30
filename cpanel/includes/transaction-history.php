<?php
include('config.php');
error_reporting(0);
session_start();

$sessionUser = $_SESSION['sessionuser'];
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param("ss", $sessionUser, $sessionUser);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();


$SessionUserId = $_SESSION['sessionuserid'];

$recordsPerPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 0;
$offset = ($page - 1) * $recordsPerPage;


if($page!=0){


$search=getSearchContent($_GET['search']);
if($search!="transaction"){
$statusArray=[$search,-1,-1];
$search="%transaction%";
}
else{
$statusArray=[0,1,9];
$search="%".$_GET['search']."%";
}

    $newtype ='';
   
    switch($_GET['type'])
    {
        case 'all': $newtype='';break;
        case 'deposit': $newtype=0;break;
        case 'withdraw': $newtype=1;break;
        case 'internal': $newtype=2;break;
    }
    
    if($_GET['type']!='all')
        $sql = "SELECT * FROM transactions where type= ? and website_accounts_id= ? and CONCAT(status,'',details_user,'transaction',details_admin,'',account, '', amount, '', type,'',via,'',created_at,'',id) LIKE ? AND status in (?, ?, ?) order by id desc limit ?, ?";
    else
        $sql = "SELECT * FROM transactions where website_accounts_id= ? and CONCAT(status,'',details_user,'transaction',details_admin,'',account, '', amount, '', type,'',via,'',created_at,'',id) LIKE ? AND status in (?, ?, ?) order by id desc limit ?, ?";
    $transactionStmt = $conn->prepare($sql);
    if($_GET['type']!='all')
        $transactionStmt->bind_param("iisiiiii",$newtype, $user['id'],$search,$statusArray[0],$statusArray[1],$statusArray[2],$offset,$recordsPerPage);
    else
        $transactionStmt->bind_param("isiiiii", $user['id'],$search,$statusArray[0],$statusArray[1],$statusArray[2],$offset,$recordsPerPage);

    $transactionStmt->execute();
    $transactionStmtResult = $transactionStmt->get_result();
    $transactions= $transactionStmtResult->fetch_all(MYSQLI_ASSOC);

      // Count total records for pagination
      if($_GET['type']!='all'){
      $stmtTotalRecords = $conn->prepare("SELECT COUNT(*) as total FROM transactions WHERE website_accounts_id = ? and type= ? and CONCAT(status,'',details_user,'transaction',details_admin,'',account, '', amount, '', type,'',via,'',created_at,'',id) LIKE ? AND status in (?, ?, ?)");
      $stmtTotalRecords->bind_param("iisiii", $user['id'],$newtype,$search,$statusArray[0],$statusArray[1],$statusArray[2]);
      }
      else
      {
        $stmtTotalRecords = $conn->prepare("SELECT COUNT(*) as total FROM transactions WHERE website_accounts_id = ? and CONCAT(status,'',details_user,'transaction',details_admin,'',account, '', amount, '', type,'',via,'',created_at,'',id) LIKE ? AND status in (?, ?, ?)");
      $stmtTotalRecords->bind_param("isiii", $user['id'],$search,$statusArray[0],$statusArray[1],$statusArray[2]);
      }
      $stmtTotalRecords->execute();
      $resultTotalRecords = $stmtTotalRecords->get_result();
      $totalRecords = $resultTotalRecords->fetch_assoc()['total'];
      
      echo json_encode(['transactions' => $transactions, 'totalPages' => ceil($totalRecords / $recordsPerPage)]);
      exit();
}






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
    $stmtNotification->bind_param("iiss", $id = 999999999, $status = 0, $notificationAmount . 'USD New Neteller Deposited', $link = '/cms/deposite-f-requests?&bymail=' . $user['email']);
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
    $stmtNotification->bind_param("iiss", $id = 999999999, $status = 0, $notificationAmount . 'USD New AdvCash Deposited', $link = '/cms/deposite-f-requests?&bymail=' . $user['email']);
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

function getSearchContent($text){
   
   
    
    if(strpos("success", strtolower($text)) !== false)
    {
        $content=1;
    }
    else if(strpos("rejected", strtolower($text)) !== false)
    {
        $content=9;
    }
    else if(strpos("pending", strtolower($text)) !== false)
    {
        $content=0;
    }
    
    else{
        $content="transaction";
    }
  
  return $content;
    
}
$conn->close();
?>
