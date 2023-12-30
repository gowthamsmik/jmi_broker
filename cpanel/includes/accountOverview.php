<?php 
    include('config.php');
    error_reporting(3);
    include("functions.php");
    if(!isset($_SESSION))session_start();
    $username = isset($_SESSION['sessionuser'])?$_SESSION['sessionuser']:$_SESSION['useremail'];
    $user = getUserByUsernameOrEmail($username);
    $userId = $user['id'];
    $notificationuser = getNotificationsForUser($userId);
    $notificationunseen = getUnseenNotificationsForUser($userId);
    $webaccounts = getFxAccountsForUser($userId);  


$countQuery="SELECT COUNT(*) as total FROM fx_accounts WHERE website_accounts_id = ? AND account_radio_type=1";
$stmtTotalRecords = $conn->prepare($countQuery); 
$stmtTotalRecords->bind_param("i", $userId);
$stmtTotalRecords->execute();
$resultTotalRecords = $stmtTotalRecords->get_result();
$totalRecords = $resultTotalRecords->fetch_assoc()['total'];


    $balances=array();
        $equities=array();
        $names=array();
   

        foreach($webaccounts as $account){

               $ret='error';
               $accountId=$account['account_id'];
               $accountPassword=$account['password'];
           
            /*$ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
           
               if($ptr)
                 {
                
                  if(fputs($ptr,"WUSERINFO-login=$accountId|password=$accountPassword\nQUIT\n"))
                    {
                   
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
       
        $ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
       
        if($ptr)
        {
        //---- send request
        if(fputs($ptr,"WUSERINFO-login=$accountId|password=$accountPassword\nQUIT\n"))
          {
        
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



             $fx_balance = get_string_between($ret, 'Balance:', 'Equity');
             $fx_equity = get_string_between($ret, 'Equity:', 'Margin');
             $fx_name = get_string_between($ret, $accountId, '202');


            array_push($balances, $fx_balance!=null?$fx_balance:0);
            array_push($equities, $fx_equity!=null?$fx_equity:0);
            array_push($names, $fx_name!=null?$fx_name:0);

        }
	
	?>