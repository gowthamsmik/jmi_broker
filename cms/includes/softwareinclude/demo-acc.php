<?php
include('config.php');
mysqli_set_charset($conn, "utf8mb4");
error_reporting(E_ALL);
ini_set('display_errors', 1);

global $conn;
header('Content-Type: application/json');

// Retrieve page and search values from the POST request
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$searchValue = isset($_POST['search']) ? $_POST['search'] : '';

$perPage = 10;
$offset = ($page - 1) * $perPage;

$searchCondition = "";
if (!empty($searchValue)) {
    $searchCondition = "AND (account_id LIKE '%$searchValue%')";
}

$sql = "SELECT * FROM fx_accounts WHERE account_radio_type = 0 $searchCondition ORDER BY id DESC LIMIT $offset, $perPage";
$res = $conn->query($sql);

if ($res === false) {
    echo json_encode(['error' => 'Error executing the query']);
    exit();
}

$data = [];
while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

// Calculate total records for pagination
$totalRecordsSql = "SELECT COUNT(*) as total FROM fx_accounts WHERE account_radio_type = 0 $searchCondition";
$totalRecordsRes = $conn->query($totalRecordsSql);
$totalRecords = $totalRecordsRes->fetch_assoc()['total'];

echo json_encode(['data' => $data, 'totalRecords' => $totalRecords]);
exit();
?>
