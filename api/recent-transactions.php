<?php
include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    
   
    $sql = "SELECT * FROM transactions where website_accounts_id= ? order by id desc limit 10";
    $transactionStmt = $conn->prepare($sql);
    $transactionStmt->bind_param("i",$websiteAccountId);
    $transactionStmt->execute();
    $transactionStmtResult = $transactionStmt->get_result();
    $transactions= $transactionStmtResult->fetch_all(MYSQLI_ASSOC);
    
    echo json_encode(array("status"=>"success","message" => TRANSACTION_SUCCESS_MESSAGE,"data"=>$transactions));
    exit();

}
http_response_code(405);


?>