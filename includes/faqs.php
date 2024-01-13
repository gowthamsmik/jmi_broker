<?php
include('config.php');

error_reporting(0);

$session_user = $_SESSION['sessionuser'];

$stmtFaq = $conn->prepare("SELECT * from faqs");
$stmtFaq->execute();
$resultFaq = $stmtFaq->get_result();
$faq = $resultFaq ->fetch_all(MYSQLI_ASSOC);

echo json_encode(['faqs' => $faq]);
?>
