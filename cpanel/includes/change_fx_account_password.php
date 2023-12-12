<?php
include("config.php");
include("functions.php");
error_reporting(0);
session_start();




$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'documents';
$id = isset($_POST['account_id']) ? $_POST['account_id'] : 0;

$SessionUserId = $_SESSION['sessionuserid'];



$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ?");
$stmtUser->bind_param("i", $SessionUserId);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();


$stmtfxAccount = $conn->prepare("SELECT * FROM fx_accounts WHERE id = ?");
$stmtfxAccount->bind_param("i", $id);
$stmtfxAccount->execute();
$stmtfxAccountResult = $stmtfxAccount->get_result();
$fxAccount = $stmtfxAccountResult->fetch_assoc();

if (md5($_POST['old_password']) == $fxAccount['password']) {

  

$hashedOldPassword = md5($_POST['old_password']);
$hashedNewinvestorPassword = md5($_POST['password']);

$stmtfxAccount = $conn->prepare("UPDATE fx_accounts SET investor_password = ?, password = ?, updated_at = NOW() WHERE id = ? AND website_accounts_id = ?");
$stmtfxAccount->bind_param("ssii", $hashedNewinvestorPassword, $hashedOldPassword, $id, $user['id']);
$stmtfxAccount->execute();

$_SESSION['live_account_meesage'] = "Password Changed Successfully.";
echo '<script>window.location.href = document.referrer;</script>';
}
else
{
    $_SESSION['live_account_meesage'] = "Invalid Account Password.";
    echo '<script>window.location.href = document.referrer;</script>';
}