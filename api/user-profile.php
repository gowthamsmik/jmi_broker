<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $sql = "SELECT  id,  title, fullname,  username,   email,  gender,  birthday,  birthmonth,  birthyear,  country, town_city, post_code,  country_code, home,  mobile,  address2,   address1,  employment_status, nature_of_business, annual_income, net_worth,invited_by, created_at, updated_at FROM website_accounts WHERE id = ?"; 

    $websiteAccountStmt = $conn->prepare($sql);
    $websiteAccountStmt->bind_param("i", $websiteAccountId);
    $websiteAccountStmt->execute();
    $websiteAccountStmtResult = $websiteAccountStmt->get_result();
    $websiteAccount = $websiteAccountStmtResult->fetch_all(MYSQLI_ASSOC);

    
    if (empty($websiteAccount[0]['profilePicture'])) {
        $websiteAccount[0]['profilePicture'] = "assets/images/profiles/default-profile.png";
    }

    
    $sql = "SELECT * FROM fx_accounts where website_accounts_id= ? AND account_radio_type = 1";
    $accountStmt = $conn->prepare($sql);
    $accountStmt->bind_param("i",$websiteAccountId);
    $accountStmt->execute();
    $accountStmtResult = $accountStmt->get_result();
    $accounts= $accountStmtResult->fetch_all(MYSQLI_ASSOC);

    $countQuery="SELECT COUNT(*) as totalCopyTrades FROM copy_trade WHERE website_accounts_id = ?";
    $stmtTotalRecords = $conn->prepare($countQuery);
    $stmtTotalRecords->bind_param("i",$websiteAccountId);
    $stmtTotalRecords->execute();
    $resultTotalRecords = $stmtTotalRecords->get_result();
    $totalCopyTrades = $resultTotalRecords->fetch_assoc()['totalCopyTrades'];

   

    $equities=array();
    foreach ($accounts as $account) {


        $ret = 'error';
        $accountId = $account['account_id'];
        $accountPassword = $account['password'];
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
        if ($ret == Null or $ret == 'error') {
            //---- open socket
            //$ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
            $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
            //---- check connection
            if ($ptr) {
                //---- send request

                if (fputs($ptr, "WUSERINFO-login=$accountId|password=$accountPassword\nQUIT\n")) {
                    //---- clear default answer
                    $ret = '';
                    //---- receive answer

                    while (!feof($ptr)) {
                        $line = fgets($ptr, 128);
                        if ($line == "end\r\n")
                            break;
                        $ret .= $line;
                    }
                }

            }

        }




        //account history
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 3);    //last 3 years
        $endTime = time();  // current time
        $ret3 = 'error';

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
        if ($ret3 == Null or $ret3 == 'error') {
            $ptr2 = fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
            //$ptr2=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
            //---- check connection
            if ($ptr2) {
                //---- send request

                if (fputs($ptr2, "WUSERHISTORY-login=$accountId|password=$accountPassword|from=$startTime|to=$endTime\nQUIT\n")) {
                    //---- clear default answer
                    $ret3 = '';

                    //---- receive answer
                    while (!feof($ptr2)) {
                        $line2 = fgets($ptr2, 128);
                        if ($line2 == "end\r\n")
                            break;
                        $ret3 .= $line2;
                    }
                }
            }
        }

        // $fx_balance = get_string_between($ret, 'Balance:', 'Equity');
        $fx_equity = get_string_between($ret, 'Equity:', 'Margin');
        // $fx_name = get_string_between($ret, $accountId, '202');

        $ret2 = $ret3;

        array_push($equities, $fx_equity!=null?$fx_equity:0);

        

        
     
    }
    
        $websiteAccount[0]['totalFxAccount'] = count($accounts);
        $websiteAccount[0]['totamAmount'] = array_sum($equities);
        $websiteAccount[0]['totalTrading'] = $totalCopyTrades;
        $websiteAccount[0]['referralLink'] = $siteurl.'index.php?myref='.$websiteAccountId+10000;

       
        


    http_response_code(200);
    echo json_encode(array("status" => "success", "message" => GET_USER_PROFILE_SUCCESS_MESSAGE, "data" => $websiteAccount));
    exit();


}
http_response_code(405);






?>