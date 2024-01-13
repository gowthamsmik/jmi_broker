<?php
include('config.php');
include('functions.php');
error_reporting(0);

$session_user = $_SESSION['sessionuser'];

$sessionUserId = $_SESSION['sessionuserid'];

// Number of records per page
$recordsPerPage = 5;

// Get the current page number from the URL, default to 1 if not set
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate the offset for the SQL query
$offset = ($page - 1) * $recordsPerPage;

// Fetch live accounts with pagination
// $stmtAccounts = $conn->prepare("SELECT id, status, account_id,'JMI Server',account_type,currency,account_group,password,investor_password,'Ameer',leverage FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type=1 LIMIT ?, ?");
// $stmtAccounts->bind_param("iii", $sessionUserId, $offset, $recordsPerPage);
// $stmtAccounts->execute();
// $resultAccounts = $stmtAccounts->get_result();
// $accounts = $resultAccounts->fetch_all(MYSQLI_ASSOC);


$accountGroupsearch=getSearchContent($_GET['search']);
$orgSearch="%".$_GET['search']."%";
if($_GET['accountType']!="none")
  $accountTypeArray = [$_GET['accountType'],0];
else
  $accountTypeArray =[1,2];
// $query="SELECT id, status, account_id, 'JMI Server', account_type, currency, account_group, password, investor_password, 'Ameer', leverage FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type = 1 AND" .$search!=0?"account_group=1" . "AND CONCAT(id,'',status,'',account_id,'JMI Server',account_type,'',currency,'',account_group,'', password,'',investor_password,'Ameer',leverage) like ? ORDER BY id DESC LIMIT ?, ?";

$query = "SELECT id, status, account_id, 'JMI Server', account_type, currency, account_group, password, investor_password, 'Ameer', leverage FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type = 1 " . ($accountGroupsearch != 0 ? "AND account_group = ? " : "AND CONCAT(id,'',status,'',account_id,'JMI Server',account_type,'usd',currency,'',account_group,'', password,'',investor_password,'Ameer',leverage,created_at) LIKE ? ") ."AND account_type in (?, ?) ORDER BY id DESC LIMIT ?, ?";


$countQuery="SELECT COUNT(*) as total FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type=1 " . ($accountGroupsearch != 0 ? "AND account_group = ? " : "AND CONCAT(id,'',status,'',account_id,'JMI Server',account_type,'usd',currency,'',account_group,'', password,'',investor_password,'Ameer',leverage,created_at) LIKE ? ")."AND account_type in (?, ?)";





$stmtAccounts = $conn->prepare($query);
$stmtTotalRecords = $conn->prepare($countQuery); 
if($accountGroupsearch != 0){
  $stmtAccounts->bind_param("iiiiii",$sessionUserId,$accountGroupsearch,$accountTypeArray[0],$accountTypeArray[1], $offset, $recordsPerPage);
  $stmtTotalRecords->bind_param("iiii", $sessionUserId,$accountGroupsearch,$accountTypeArray[0],$accountTypeArray[1]);

}
else
{
 
  $stmtAccounts->bind_param("isiiii", $sessionUserId,$orgSearch,$accountTypeArray[0],$accountTypeArray[1], $offset, $recordsPerPage);
  $stmtTotalRecords->bind_param("isii", $sessionUserId,$orgSearch,$accountTypeArray[0],$accountTypeArray[1]);
}
$stmtAccounts->execute();
$resultAccounts = $stmtAccounts->get_result();
$accounts = $resultAccounts->fetch_all(MYSQLI_ASSOC);


// Count total records for pagination
/*$stmtTotalRecords = $conn->prepare("SELECT COUNT(*) as total FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type=1 AND CONCAT(id,'',status,'',account_id,'JMI Server',account_type,'',currency,'',account_group,'', password,'',investor_password,'Ameer',leverage) like ?");
$stmtTotalRecords->bind_param("is", $sessionUserId,$search);*/
$stmtTotalRecords->execute();
$resultTotalRecords = $stmtTotalRecords->get_result();
$totalRecords = $resultTotalRecords->fetch_assoc()['total'];


        // $balances=array();
        // $equities=array();
        // $names=array();
        // $account_history=array();
        $test_array=array();

        $i=0;
        $j=1;
        foreach($accounts as $account){
          $accountDetails = $account['account_id'] . $account['account_type'] . $account['account_group'] . $account['leverage'] . $account['currency'];
          $accountDetails = strtolower($accountDetails);
          if($_GET['search']){
          if(strpos($accountDetails, strtolower($_GET['search'])) != false)
          {
           
            if($recordsPerPage * ($page-1)>$j)
              array_push($test_array, $account);
              $j++;
          }
        }
        else{
          $j++;
        }
         
            $ret='error';
            $accountId=$account['account_id'];
            $accountPassword=$account['password'];
            //---- open socket
            //$ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
            
            /*$ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
            //---- check connection
               if($ptr)
                 {
                  //---- send request
                
                  if(fputs($ptr,"WUSERINFO-login=$accountId|password=$accountPassword\nQUIT\n"))
                    {
                     //---- clear default answer
                    
                     $ret='';
                     //---- receive answer
                     while(!feof($ptr))
                      {
                       $line=fgets($ptr,128);
                       if($line=="end\r\n") break;
                       $ret.= $line;
                      }
                    }

                }*/
if($ret == Null or $ret =='error')
{
  //---- open socket
  //$ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
  $ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
  //---- check connection
     if($ptr)
       {
        //---- send request
       
        if(fputs($ptr,"WUSERINFO-login=$accountId|password=$accountPassword\nQUIT\n"))
          {
           //---- clear default answer
           $ret='';
           //---- receive answer
          
           while(!feof($ptr))
            {
             $line=fgets($ptr,128);
             if($line=="end\r\n") break;
             $ret.= $line;
            }
          }

      }
   
}


//account history
$startTime = mktime(0, 0, 0, 1, 1, date('Y')-3);    //last 3 years
$endTime = time();  // current time
$ret3='error';

            //$ptr2=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
          /*$ptr2=fsockopen('89.116.30.28','443',$errno,$errstr,5);

            //---- check connection
               if($ptr2)
                 {
                  //---- send request
                 
                 if(fputs($ptr2,"WUSERHISTORY-login=$accountId|password=$accountPassword|from=$startTime|to=$endTime\nQUIT\n"))
                    {
                     //---- clear default answer
                     $ret3='';
                    
                     //---- receive answer
                     while(!feof($ptr2))
                      {
                       $line2=fgets($ptr2,128);
                       if($line2=="end\r\n") break;
                       $ret3.= $line2;
                      }
                    }
                }*/
if($ret3 == Null or $ret3 =='error')
{
  $ptr2=fsockopen('92.204.139.189','443',$errno,$errstr,5);
  //$ptr2=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
  //---- check connection
  if($ptr2)
    {
     //---- send request
     
    if(fputs($ptr2,"WUSERHISTORY-login=$accountId|password=$accountPassword|from=$startTime|to=$endTime\nQUIT\n"))
       {
        //---- clear default answer
        $ret3='';
       
        //---- receive answer
        while(!feof($ptr2))
         {
          $line2=fgets($ptr2,128);
          if($line2=="end\r\n") break;
          $ret3.= $line2;
         }
       }
   }
}

$fx_balance = get_string_between($ret, 'Balance:', 'Equity');
$fx_equity = get_string_between($ret, 'Equity:', 'Margin');
$fx_name = get_string_between($ret, $accountId, '202');

$ret2 = $ret3;

// array_push($balances, $fx_balance);
// array_push($equities, $fx_equity);
// array_push($names, $fx_name);
// array_push($account_history, $ret2);

$accounts[$i]['balances'] = $fx_balance!=null?$fx_balance:'';
$accounts[$i]['equities'] = $fx_equity!=null?$fx_equity:'';
$accounts[$i]['names'] =$fx_name!=null?$fx_name:'';
$accounts[$i]['account_history'] = $ret2!=null?$ret2:'';
$i++;

}

// Return data as JSON
echo json_encode(['accounts' => $accounts, 'totalPages' => ceil($totalRecords / $recordsPerPage)]);
exit();



function getSearchContent($text){
   
  $text = str_replace(' ', '', strtolower($text));
  
  if(strpos("fixedspreadaccount", strtolower($text)) !== false)
  {
      $content=1;
  }
  else if(strpos("variablespreadaccount", strtolower($text)) !== false)
  {
      $content=3;
  }
  else if(strpos("bonusaccount", strtolower($text)) !== false )
  {
      $content=4;
  }
  else if(strpos("scalpingaccount", strtolower($text)) !== false)
  {
      $content=5;
  }
  else{
      $content=0;
  }

return $content;
  
}
?>
