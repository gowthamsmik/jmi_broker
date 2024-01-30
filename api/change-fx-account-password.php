<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "PUT") {

    if (!isset($_GET['id'])) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ID_REQUIRED_ERROR_MESSAGE));
        exit();

    }

    changeFxAccountPasswordValidation($data);


    $id = $_GET['id'];
    $stmtfxAccount = $conn->prepare("SELECT * FROM fx_accounts WHERE id = ? and website_accounts_id = ?");
    $stmtfxAccount->bind_param("ii", $id, $websiteAccountId);
    $stmtfxAccount->execute();
    $stmtfxAccountResult = $stmtfxAccount->get_result();
    $fxAccount = $stmtfxAccountResult->fetch_assoc();
    if (!$fxAccount) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ACCOUNT_NOT_FOUND_ERROR_MESSAGE));
        exit();
    }
    if ($fxAccount['status'] != 0) {

        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ACCOUNT_NOT_EDITABLE_ERROR_MESSAGE));
        exit();

    }
    try{

    $accountId = $fxAccount['account_id'];
    $accountPassword = $fxAccount['password'];
    //check of password
    $query = "|MODE=7|LOGIN=" . $accountId . "|[CPASS=" . $data['oldRealPassword'];
    //--- prepare query
//change real master password
    $query1 = "|MODE=2|LOGIN=" . $accountId . "|CPASS=" . $data['oldRealPassword'] . "|NPASS=" . $data['newRealPassword'] . "|TYPE=0";
    //change investor password
    $query2 = "|MODE=2|LOGIN=" . $accountId . "|CPASS=" . $data['oldRealPassword'] . "|NPASS=" . $data['newInvestorPassword'] . "|TYPE=1";

    //--- send request
    $ret = 'error';
    //---- open socket
    $q = "WMQWEBAPI MASTER=jmi2020" . $query . "\nQUIT\n";

    /* $ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
     
  //---- check connection
     if($ptr)
       {
        //---- send request
          if(fputs($ptr,$q)!=FALSE)
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
        fclose($ptr);
       }*/

    if ($ret == Null or $ret == 'error') {
        $ptr = fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
        //---- check connection
        if ($ptr) {
            //---- send request
            if (fputs($ptr, $q) != FALSE) {
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
            fclose($ptr);
        }
    }

    $ret = substr($ret, 0, strlen($ret) - 1);
    $result = json_decode($ret);

    //result 0  means success
    if ($result->result == 1 || $result->result == 5) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => INVALID_DATA_ERROR_MESSAGE));
        exit;
    }
    if ($result->result == 6) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => NOT_ENOUGH_MONEY_ERROR_MESSAGE));
        exit();

    }

    if ($result->result == 0) {
        $ret1 = 'error';
        $q = "WMQWEBAPI MASTER=jmi2020" . $query2 . "\nQUIT\n";
        /*$ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
     //---- check connection
        if($ptr)
          {
           //---- send request
             if(fputs($ptr,$q)!=FALSE)
             {
              //---- clear default answer
              $ret1='';
              //---- receive answer
              while(!feof($ptr))
               {
                $line=fgets($ptr,128);
                if($line=="end\r\n") break;
                $ret1.= $line;
               }
             }
           fclose($ptr);
          }*/

        if ($ret1 == Null or $ret1 == 'error') {
            $q = "WMQWEBAPI MASTER=jmi2020" . $query2 . "\nQUIT\n";
            $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
            //---- check connection
            if ($ptr) {
                //---- send request
                if (fputs($ptr, $q) != FALSE) {
                    //---- clear default answer
                    $ret1 = '';
                    //---- receive answer
                    while (!feof($ptr)) {
                        $line = fgets($ptr, 128);
                        if ($line == "end\r\n")
                            break;
                        $ret1 .= $line;
                    }
                }
                fclose($ptr);
            }
        }

        $ret1 = substr($ret1, 0, strlen($ret1) - 1);
        $result1 = json_decode($ret);

        $ret2 = 'error';
        $q = "WMQWEBAPI MASTER=jmi2020" . $query1 . "\nQUIT\n";
        /*$ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
     //---- check connection
        if($ptr)
          {
           //---- send request
             if(fputs($ptr,$q)!=FALSE)
             {
              //---- clear default answer
              $ret2='';
              //---- receive answer
              while(!feof($ptr))
               {
                $line=fgets($ptr,128);
                if($line=="end\r\n") break;
                $ret2.= $line;
               }
             }
           fclose($ptr);
          }*/

        if ($ret2 == Null or $ret2 == 'error') {
            $q = "WMQWEBAPI MASTER=jmi2020" . $query1 . "\nQUIT\n";
            $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
            //---- check connection
            if ($ptr) {
                //---- send request
                if (fputs($ptr, $q) != FALSE) {
                    //---- clear default answer
                    $ret2 = '';
                    //---- receive answer
                    while (!feof($ptr)) {
                        $line = fgets($ptr, 128);
                        if ($line == "end\r\n")
                            break;
                        $ret2 .= $line;
                    }
                }
                fclose($ptr);
            }
        }

        $ret2 = substr($ret2, 0, strlen($ret2) - 1);
        $result2 = json_decode($ret2);

        if ($result1->result == 0 && $result2->result == 0) {




            $stmtfxAccount = $conn->prepare("UPDATE fx_accounts SET investor_password = ?, password = ?, updated_at = NOW() WHERE id = ? AND website_accounts_id = ?");
            $stmtfxAccount->bind_param("ssii", $data['newInvestorPassword'], $data['newRealPassword'], $id, $websiteAccountId);
            $stmtfxAccount->execute();


            http_response_code(200);
            echo json_encode(array("status" => "success", "message" => PASSWORD_CHANGE_SUCCESS_MESSAGE));
            exit();

        } else {

            http_response_code(400);
            echo json_encode(array("status" => ERROR_STATUS, "message" => PASSWORD_CHANGE_ERROR_MESSAGE));
            exit();


        }

    }
}
catch(Exception){

     http_response_code(400);
            echo json_encode(array("status" => ERROR_STATUS, "message" => PASSWORD_CHANGE_ERROR_MESSAGE));
            exit();


}




}
http_response_code(405);


?>