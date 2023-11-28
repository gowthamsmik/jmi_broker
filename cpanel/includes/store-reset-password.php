<?php
include('config.php');
error_reporting(0);
session_start();

// Check if the userressetpassword session is not empty
if (!empty($_SESSION['userressetpassword'])) {
    $newpassword = $_POST['newpassword'];
    $confirmnewpassword = $_POST['confirmnewpassword'];

    // Get the account based on the username stored in the session
    $accounttQuery = "SELECT * FROM website_accounts WHERE username = ?";
    $accounttStmt = $conn->prepare($accounttQuery);
    $accounttStmt->bind_param("s", $_SESSION['userressetpassword']);
    $accounttStmt->execute();
    $accounttResult = $accounttStmt->get_result();

    if ($accounttResult && $accounttResult->num_rows > 0) {
        $user = $accounttResult->fetch_assoc();

        // Validate the new password and confirm new password
        if (!empty($newpassword) && !empty($confirmnewpassword) && $newpassword == $confirmnewpassword) {
            $encpassword = password_hash($newpassword, PASSWORD_DEFAULT);
            $user['resettoken_time'] = time() - 50000;
            $user['password'] = $encpassword;

            // Update the user with the new password
            $updateUserQuery = "UPDATE website_accounts SET resettoken_time = ?, password = ? WHERE id = ?";
            $updateUserStmt = $conn->prepare($updateUserQuery);
            $updateUserStmt->bind_param("isi", $user['resettoken_time'], $user['password'], $user['id']);
            $updateUserStmt->execute();

            // Redirect based on language segment
            $languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false ? 'ar' : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false ? 'ru' : 'en');
            if ($languageSegment == 'ar') {
                header("Location: /ar/login?status-success=تم تغيير كلمة اسر بنجاح");
            } elseif ($languageSegment == 'ru') {
                header("Location: /ru/login?status-success=Ваш пароль был успешно изменен");
            } else {
                header("Location: /en/login?status-success=Your Password Has Been Changed Successfully");
            }
            exit();
        } else {
            // Redirect back with error message
            $errorMessage = ($languageSegment == 'ar') ? 'كلمة السر يجب ان تكون متطابقة للتأكيد' : (($languageSegment == 'ru') ? 'Пароль должен быть равен Подтверждение пароля' : 'Password Must Equals Confirm Password');
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?status-error=" . urlencode($errorMessage));
            exit();
        }
    }
} else {
    // Flush session and redirect to the homepage if userressetpassword is empty
    session_unset();
    session_destroy();
    header("Location: /");
    exit();
}
?>
