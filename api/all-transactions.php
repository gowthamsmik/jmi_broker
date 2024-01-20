<?php
include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if(!isset($_GET['type'])){
        http_response_code(400);
        echo json_encode(array("status"=>ERROR_STATUS,"message" => TYPE_MISSING_ERROR_MESSAGE));
        exit();

    }
    $type = isValidTypeOfTransaction($_GET['type']);
    
    
    $sql = "SELECT * FROM transactions where website_accounts_id= ? order by id desc";
    if($type!=3){
        $sql = "SELECT * FROM transactions where type= ? and website_accounts_id= ? order by id desc";
    }
  
    $transactionStmt = $conn->prepare($sql);
    if($type!=3){
        $transactionStmt->bind_param("ii",$type,$websiteAccountId);
    }
    else{
        $transactionStmt->bind_param("i",$websiteAccountId);
    }
    
    $transactionStmt->execute();
    $transactionStmtResult = $transactionStmt->get_result();
    $transactions= $transactionStmtResult->fetch_all(MYSQLI_ASSOC);
    http_response_code(200);
    echo json_encode(array("status"=>SUCCESS_STATUS,"message" => TRANSACTION_SUCCESS_MESSAGE,"data"=>$transactions));
    exit();


}
http_response_code(405);


?>