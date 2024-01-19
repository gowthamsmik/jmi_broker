<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

   


   
    $sql = "SELECT id,account_type,account_group,account_radio_type,account_id FROM fx_accounts where website_accounts_id= ? order by id desc";
    $accountStmt = $conn->prepare($sql);
    $accountStmt->bind_param("i",$websiteAccountId);
    $accountStmt->execute();
    $accountStmtResult = $accountStmt->get_result();
    $accounts= $accountStmtResult->fetch_all(MYSQLI_ASSOC);
    http_response_code(200);
    echo json_encode(array("status"=>"success","message" => GET_ALL_ACCOUNT_SUCCESS_MESSAGE,"data"=>$accounts));
    exit();
    

}
http_response_code(405);






?>