<?php
include('config.php');
error_reporting(3);
session_start();

// Check if the user is logged in
if ($_SESSION['sessionuser']) {
    $session_user = $_SESSION['sessionuser'];
    
    // Get user data
    $userQuery = "SELECT * FROM website_accounts WHERE username = ? OR email = ?";
    $userStmt = $conn->prepare($userQuery);
    $userStmt->bind_param("ss", $session_user, $session_user);
    $userStmt->execute();
    $userResult = $userStmt->get_result();
    
    if ($userResult && $userResult->num_rows > 0) {
        $user = $userResult->fetch_assoc();

        // Get user notifications
        $userId = (int) $user['id'];
        $notificationsQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? ORDER BY id DESC LIMIT 8";
        $notificationsStmt = $conn->prepare($notificationsQuery);
        $notificationsStmt->bind_param("i", $userId);
        $notificationsStmt->execute();
        $notificationsResult = $notificationsStmt->get_result();
        $notifications_all = $notificationsResult->fetch_all(MYSQLI_ASSOC);

        // Get unseen notifications
        $notificationsUnseenQuery = "SELECT * FROM Notifications WHERE website_accounts_id = ? AND notification_status = 0";
        $notificationsUnseenStmt = $conn->prepare($notificationsUnseenQuery);
        $notificationsUnseenStmt->bind_param("i", $userId);
        $notificationsUnseenStmt->execute();
        $notificationsUnseenResult = $notificationsUnseenStmt->get_result();
        $notifications_unseen = $notificationsUnseenResult->fetch_all(MYSQLI_ASSOC);

        // Get user live accounts
        $accountsQuery = "SELECT * FROM fx_accounts WHERE website_accounts_id = ?";
        $accountsStmt = $conn->prepare($accountsQuery);
        $accountsStmt->bind_param("i", $userId);
        $accountsStmt->execute();
        $accountsResult = $accountsStmt->get_result();
        $accounts = $accountsResult->fetch_all(MYSQLI_ASSOC);

        // Get input data
        $input = $_POST;
        $copy_from = $input['copy_from'];
         
        // Validate input
        if ($input['copy_from'] == 'other') {
            $copy_from = $input['other_account'];
            if (!isset($input['other_account']) || !preg_match('/^[0-9]*$/', $input['other_account']) || strlen($input['other_account']) > 9) {
                redirectOnFailure();
            }
        } else {
            if (!isset($input['copy_to']) || !preg_match('/^[0-9]*$/', $input['copy_to']) || strlen($input['copy_to']) > 9) {
                redirectOnFailure();
            }
        }

        if (!isset($input['copy_from']) || !preg_match('/^[0-9]*$/', $input['copy_from']) || strlen($input['copy_from']) > 9) {
            redirectOnFailure();
        }

        if (!isset($input['percentage']) || !is_numeric($input['percentage']) || $input['percentage'] < 0 || $input['percentage'] == 0) {
            redirectOnFailure();
        }

        if (!isset($input['password']) || $input['password'] == '') {
            redirectOnFailure();
        }

        // Check the password
        $query = "|MODE=7|LOGIN=" . $input['copy_to'] . "|[CPASS=" . $input['password'];

        $ret = executeSocketRequest('89.116.30.28', $query);

        if ($ret == null || $ret == 'error') {
            $ret = executeSocketRequest('92.204.139.189', $query);
        }

        $ret = rtrim($ret, "\r\n");
        $result = json_decode($ret);
        var_dump($result);exit(0);
        // Check the result
        if (is_object($result) && isset($result->result) && $result->result == 0) {
            // Insert copy trade record
            $transactionQuery = "INSERT INTO CopyTrade (website_accounts_id, copy_from, copy_to, percentage, status, details_user, details_admin)
                                 VALUES (?, ?, ?, ?, 0, '', '')";
            $transactionStmt = $conn->prepare($transactionQuery);
            $transactionStmt->bind_param("iiid", $userId, $copy_from, $input['copy_to'], $input['percentage']);
            $transactionStmt->execute();

            // Insert user notification
            $notificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link)
                                 VALUES (?, 0, 'Your copy trade request has been received successfully.', 'Your copy trade request has been received successfully.', 'تم استلام طلب نسخ التداول الخاص بك بنجاح.', 'تم استلام طلب نسخ التداول الخاص بك بنجاح.', 'Ваш запрос на копирование был успешно получен.', 'Ваш запрос на копирование был успешно получен.', '/cpanel/copy-trade')";
            $notificationStmt = $conn->prepare($notificationQuery);
            $notificationStmt->bind_param("i", $userId);
            $notificationStmt->execute();

            // Insert admin notification
            $adminNotificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link)
                                       VALUES (999999999, 0, ?, '/spanel/copy-trade?&bymail=' . ? . '&')";
            $adminNotificationStmt = $conn->prepare($adminNotificationQuery);
            $adminNotificationStmt->bind_param("ss", $user['email'], $user['email']);
            $adminNotificationStmt->execute();

            // Redirect based on language segment
            $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');

            header("Location: ../copy-trade.php?tab=1");
            exit();
        } else {
            // Redirect on failure
            redirectOnFailure();
        }
    } else {
        // Redirect if user is not found
        redirectOnFailure();
    }
} else {
    // Redirect if user is not logged in
    header("Location: login.php");
    exit();
}

// Function to execute socket request
function executeSocketRequest($ip, $query)
{
    $ret = 'error';

    // Open socket
    $q = "WMQWEBAPI MASTER=jmi2020" . $query . "\nQUIT\n";
    $ptr = @fsockopen($ip, '443', $errno, $errstr, 5);

    // Check connection
    if ($ptr) {
        // Send request
        if (fputs($ptr, $q) !== false) {
            // Clear default answer
            $ret = '';

            // Receive answer
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

// Function to redirect on failure
function redirectOnFailure()
{
    global $languageSegment;

    $errorMessage = isset($languageSegment) && $languageSegment == 'ar' ? 'فشل طلب النقل' : 'Copy request failed';
    $errorMessageKey = isset($languageSegment) && $languageSegment == 'ar' ? 'status-error' : 'status-error';

    if (isset($languageSegment) && $languageSegment == 'ar') {
        header("Location: ar/cpanel/copy-trade")->with($errorMessageKey, $errorMessage);
    } elseif (isset($languageSegment) && $languageSegment == 'ru') {
        header("Location: ru/cpanel/copy-trade")->with($errorMessageKey, $errorMessage);
    } else {
        header("Location: ../copy-trade.php?tab=1")->with($errorMessageKey, $errorMessage);
    }

    exit();
}
?>
