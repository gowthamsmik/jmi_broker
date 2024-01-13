<?php
include('config.php');
error_reporting(3);
session_start();

// Number of records per page
$recordsPerPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 0;
$offset = ($page - 1) * $recordsPerPage;

$referralId = $_SESSION['sessionuserid'] + 10000;

$website_accounts_id = isset($_GET['id']) ? intval($_GET['id']) : 0;




        if($page!=0){
        $referralAccountsQuery = "SELECT * FROM website_accounts WHERE invited_by = ? ORDER BY id DESC LIMIT ? , ?";
        $referralAccountsStmt = $conn->prepare($referralAccountsQuery);
        $referralAccountsStmt->bind_param("iii", $referralId,$offset,$recordsPerPage);
        $referralAccountsStmt->execute();
        $referralAccountsResult = $referralAccountsStmt->get_result();
        $referralAccounts = $referralAccountsResult->fetch_all(MYSQLI_ASSOC);



       

          // Count total records for pagination
          $stmtTotalRecords = $conn->prepare("SELECT COUNT(*) as total FROM website_accounts WHERE invited_by = ?");
          $stmtTotalRecords->bind_param("i", $referralId);
          $stmtTotalRecords->execute();
          $resultTotalRecords = $stmtTotalRecords->get_result();
          $totalRecords = $resultTotalRecords->fetch_assoc()['total'];

          $i=0;
          foreach($referralAccounts as $accounts){
            $liveAccountsQuery = "SELECT  *  FROM fx_accounts WHERE  website_accounts_id= ?";
            $liveAccountsStmt = $conn->prepare($liveAccountsQuery);
            $liveAccountsStmt->bind_param("i",$accounts['id']);
            $liveAccountsStmt->execute();
            $liveAccountsResult = $liveAccountsStmt->get_result();
            $liveAccounts = $liveAccountsResult->fetch_all(MYSQLI_ASSOC);
            $website_accounts_id=0;
            $totalAccounts=count($liveAccounts);
            if(count($liveAccounts)>0){
              $website_accounts_id= $liveAccounts[0]['website_accounts_id'];
            }
            $referralAccounts[$i]['totalAccounts'] = $totalAccounts;
            $referralAccounts[$i]['website_accounts_id'] = $website_accounts_id;
          
            $i++;
    
          }
          
          echo json_encode(['referralAccounts' => $referralAccounts, 'totalPages' => ceil($totalRecords / $recordsPerPage)]);
          exit();
        }


        if($website_accounts_id!=0){

          $liveAccountsQuery = "SELECT  *  FROM fx_accounts WHERE  website_accounts_id= ?";
          $liveAccountsStmt = $conn->prepare($liveAccountsQuery);
          $liveAccountsStmt->bind_param("i",$website_accounts_id);
          $liveAccountsStmt->execute();
          $liveAccountsResult = $liveAccountsStmt->get_result();
          $liveAccounts = $liveAccountsResult->fetch_all(MYSQLI_ASSOC);

          echo json_encode(['liveAccounts' => $liveAccounts]);
          exit();
        }




?>