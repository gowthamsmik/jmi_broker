<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {


    if (!isset($_GET['id'])) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ID_REQUIRED_ERROR_MESSAGE));
        exit();

    }
    if ((isset($_GET['fromDate']) && !isset($_GET['toDate'])) || (!isset($_GET['fromDate']) && isset($_GET['toDate']))) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => DATE_REQUIRED_ERROR_MESSAGE));
        exit();
    }
    if ((isset($_GET['fromDate']) && !isValidDateFormat($_GET['fromDate'])) || (isset($_GET['toDate']) && !isValidDateFormat($_GET['toDate']))) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => INVALID_DATE_ERROR_MESSAGE));
        exit();

    }

    $accountId = $_GET['id'];
    $query = "SELECT id, status, account_id, 'JMI Server', account_type, currency, account_group, account_radio_type, leverage, password  FROM fx_accounts WHERE id = ? and website_accounts_id = ? ";

    $stmtAccounts = $conn->prepare($query);


    $stmtAccounts->bind_param("ii", $accountId, $websiteAccountId);


    $stmtAccounts->execute();
    $resultAccounts = $stmtAccounts->get_result();
    $accounts = $resultAccounts->fetch_all(MYSQLI_ASSOC);



    if (count($accounts) <= 0) {
        echo json_encode(array("status" => ERROR_STATUS, "message" => ACCOUNT_NOT_FOUND_ERROR_MESSAGE));
        exit();
    }


    $response = array();
    $resultList = array();

    $account_history = array();
    $resultDetails = array();
    $resultDetail = array();
    $details = array();

    if (isset($_GET['fromDate']) && isset($_GET['toDate'])) {
        $fromDateTime = new DateTime($_GET['fromDate']);
        $toDateTime = new DateTime($_GET['toDate']);
        $fromDateTime->setTime(0, 0, 0);
        $toDateTime->setTime(0, 0, 0);

    }
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


        $response['equities'] = $fx_equity != null ? $fx_equity : '';
        $response['account_history'] = $ret2 != null ? $ret2 : '';
        array_push($account_history, $ret2);


        $history = explode("\r\n", $ret2);
        $i = 0;
        $j = 0;
        foreach ($history as $his) {

            //retrive history
            if ($i > 2 && $i < count($history) - 9) {
                $details[] = explode("\t", $his);


                $dateToCheck = DateTime::createFromFormat('Y.m.d H:i', $details[$j][1]);
                if (isset($_GET['fromDate']) && isset($_GET['toDate'])) {

                    $dateToCheck->setTime(0, 0, 0);
                    if ($dateToCheck >= $fromDateTime && $dateToCheck <= $toDateTime) {
                        $resultDetail[] = explode("\t", $his);
                    }
                } else {
                    $resultDetail[] = explode("\t", $his);
                }
                $j++;



            }


            //deposit profites extract logic
            if ($i > count($history) - 9 && $i < count($history) - 2) {
                $amount = 0;

                $parts = explode(':', $his);

                $depositKeyword = trim($parts[0]);
                $amount = floatval(trim($parts[1]));
                $depositKeyword = strtolower($depositKeyword);
                $resultDetails[$depositKeyword] = $amount;
            }

            $i++;
        }
        $resultDetails['accountHistory'] = $resultDetail;




        // Initialize an array to store the extracted values





    }




    // foreach ($account_history as $history2) {
    //     $history = explode("\r\n", $history2);

    //     $stripped = preg_replace('/\s+/', ' ', $history2);

    //     $history_arrays2 = explode(" ", $stripped);
    //     $full_history[] = $history_arrays2;
    // }


    // $array_to_remove = array("from", "to", "hedge", "close", "by", "Depsit", "Demo", 'limit', 'cancelled');
    // foreach ($full_history as $full_history0) {

    //     foreach ($full_history0 as $key => $value) {

    //         if (strpos($value, '#') !== false) {
    //             array_push($array_to_remove, $value);
    //         }


    //     }


    //     $history_arrays_new = array_diff($full_history0, $array_to_remove);
    //     $full_history_arr[] = $history_arrays_new;
    // }

    // $full_history_arr = array_values($full_history_arr);


    // foreach ($full_history_arr as $history2) {

    //     //$history = explode("\r\n",$history2);

    //     $history_arrays2 = array_values($history2);

    //     if (isset($history2[0])) {
    //         if (count($history2) <= 40) {
    //             $entry = array();

    //         } else {
    //             $history4_arr = explode(" ", $history2[4]);

    //             $int1 = count($history_arrays2) - 33;

    //             $int3 = 18;
    //             $i = 1;

    //             $int00 = 20;

    //             while ($int1 > 0) {


    //                 while ($int00 > 0) {


    //                     if (isset($history_arrays2[$int3])) {

    //                         //if(strpos($history_arrays2[$int3],"buy")>0){};

    //                         //for ($int3=18; $history_arrays2[$int3] < 100000 ; $int3++) {
    //                         // code...
    //                         //}

    //                         if (preg_match('/^[0-9]{6}$/', $history_arrays2[$int3])) {

    //                         } else {
    //                             $int3 = $int3 + 1;
    //                         }

    //                     }


    //                     $int00--;
    //                 }


    //                 $order=$int3;
    //                 $time1=$order+1;
    //                 $time11=$order+2;
    //                 $type=$order+3;
    //                 $lot=$order+4;
    //                 $symbol=$order+5;
    //                 $price1=$order+6;
    //                 $ssll=$order+7;
    //                 $ttpp=$order+8;
    //                 $time2=$order+9;
    //                 $time22=$order+10;
    //                 $price2=$order+11;
    //                 $swap=$order+13;
    //                 $profit=$order+14;








    //                 $entry = array(
    //                     "order" => isset($history_arrays2[$order]) ? $history_arrays2[$order] : 'Empty',
    //                     "time1" => isset($history_arrays2[$time1]) ? $history_arrays2[$time1] : 'Empty',
    //                     "time11" => isset($history_arrays2[$time11]) ? $history_arrays2[$time11] : 'Empty',
    //                     "type" => isset($history_arrays2[$type]) ? $history_arrays2[$type] : 'Empty',
    //                     "lot" => isset($history_arrays2[$lot]) ? $history_arrays2[$lot] : 'Empty',
    //                     "symbol" => isset($history_arrays2[$symbol]) ? $history_arrays2[$symbol] : 'Empty',
    //                     "price1" => isset($history_arrays2[$price1]) ? $history_arrays2[$price1] : 'Empty',
    //                     "ssll" => isset($history_arrays2[$ssll]) ? $history_arrays2[$ssll] : 'Empty',
    //                     "ttpp" => isset($history_arrays2[$ttpp]) ? $history_arrays2[$ttpp] : 'Empty',
    //                     "time2" => isset($history_arrays2[$time2]) ? $history_arrays2[$time2] : 'Empty',
    //                     "time22" => isset($history_arrays2[$time22]) ? $history_arrays2[$time22] : 'Empty',
    //                     "price2" => isset($history_arrays2[$price2]) ? '$' . $history_arrays2[$price2] : 'Empty',
    //                     "swap" => isset($history_arrays2[$swap]) ? $history_arrays2[$swap] : 'Empty',
    //                     "profit" => isset($history_arrays2[$profit]) ? '$' . $history_arrays2[$profit] : 'Empty',
    //                 );

    //                 $resultList[] = $entry;
    //                 $i++;
    //                 $int1 = $int1 - 15;
    //                 $int3 = $int3 + 15;
    //             }





    //         }
    //     }



    // }
    // $response['account_history']=$resultList;
    http_response_code(200);
    echo json_encode(array("status" => "success", "message" => GET_ALL_ACCOUNT_SUCCESS_MESSAGE, "data" => $resultDetails));
    exit();


}
http_response_code(405);






?>