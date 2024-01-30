<?php
include('config.php');
mysqli_set_charset($conn, "utf8mb4");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fetch website accounts data based on AJAX request
if (isset($_POST['type']) && $_POST['type'] == 'fetchWebsiteAccounts') {
    $page = isset($_POST['page']) ? $_POST['page'] : 1;
    $perPage = 10;
    $searchValue = isset($_POST['search']) ? $_POST['search'] : '';

    // Validate and sanitize input to prevent SQL injection
    $page = intval($page);
    $perPage = intval($perPage);
    $searchValue = $conn->real_escape_string($searchValue);

    $offset = ($page - 1) * $perPage;
    $searchCondition = '';

    // if (!empty($searchValue)) {
    //     $searchCondition = " AND (wa.username LIKE '%$searchValue%' OR 
    //     wa.fullname LIKE '%$searchValue%' OR 
    //     wa.email LIKE '%$searchValue%' OR
    //     fa.account_id LIKE '%$searchValue%')";
    // }

    // $sql =  "SELECT wa.*, fa.* FROM website_accounts AS wa
    // LEFT JOIN fx_accounts AS fa ON wa.id = fa.website_accounts_id
    // WHERE 1 $searchCondition
    // ORDER BY wa.id DESC LIMIT $offset, $perPage";
    $sql =  "SELECT wa.*, fa.* FROM website_accounts AS wa
    LEFT JOIN fx_accounts AS fa ON wa.id = fa.website_accounts_id
    WHERE wa.username LIKE '%$searchValue%' OR 
          wa.fullname LIKE '%$searchValue%' OR 
          wa.email LIKE '%$searchValue%' OR
          fa.account_id LIKE '%$searchValue%'
    ORDER BY wa.id DESC LIMIT $offset, $perPage";

    $res = $conn->query($sql);

    if ($res === false) {
        // Handle query error
        echo json_encode(['error' => 'Error executing the query']);
        exit();
    }

    $data = [];
    while ($row = $res->fetch_assoc()) {
        $data[] = $row;
    }

    // Get the total number of records (ignoring limit for pagination)
    $totalCountSql = "SELECT COUNT(*) as total FROM website_accounts WHERE 1 $searchCondition";
    $totalCountResult = $conn->query($totalCountSql);

    if ($totalCountResult === false) {
        // Handle total count query error
        echo json_encode(['error' => 'Error fetching total count']);
        exit();
    }

    $totalCount = $totalCountResult->fetch_assoc()['total'];

    // Return the data and total count as JSON
    echo json_encode(['data' => $data, 'totalRecords' => $totalCount]);
    exit();
}

// Add other functions or logic as needed
?>
