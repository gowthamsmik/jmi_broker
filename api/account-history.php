<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (!isset($_GET['id'])) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ID_REQUIRED_ERROR_MESSAGE));
        exit();

    }
   
    $accountId=$_GET['id'];
    $query = "SELECT id, status, account_id, 'JMI Server', account_type, currency, account_group, account_radio_type, leverage, password  FROM fx_accounts WHERE id = ? and website_accounts_id = ? ";

    $stmtAccounts = $conn->prepare($query);


    $stmtAccounts->bind_param("ii", $accountId,$websiteAccountId);


    $stmtAccounts->execute();
    $resultAccounts = $stmtAccounts->get_result();
    $accounts = $resultAccounts->fetch_all(MYSQLI_ASSOC);

   

    if(count($accounts)<=0){
        echo json_encode(array("status" => ERROR_STATUS, "message" => ACCOUNT_NOT_FOUND_ERROR_MESSAGE));
        exit();
    }


   $response = array();
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

        $fx_balance = get_string_between($ret, 'Balance:', 'Equity');
        $fx_equity = get_string_between($ret, 'Equity:', 'Margin');
        $fx_name = get_string_between($ret, $accountId, '202');

        $ret2 = $ret3;

        
        $response['equities']=$fx_equity != null ? $fx_equity : '';
        $response['account_history']=$ret2 != null ? $ret2 : '';

    }

  
    http_response_code(200);
    echo json_encode(array("status" => "success", "message" => GET_ALL_ACCOUNT_SUCCESS_MESSAGE, "data" => $response));
    exit();


}
http_response_code(405);






?>