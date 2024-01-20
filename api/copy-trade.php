<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    copyTradeValidation($data);

    $copyFromAccount = $data['copyFrom'];
    $copyToAccount = $data['copyTo'];

    $checkCopyToAccount = accountDetails($copyToAccount, $websiteAccountId);

    http_response_code(400);
    if ($checkCopyToAccount->num_rows <= 0) {

        echo json_encode(array("status" => ERROR_STATUS, "message" => COPY_TO_INVALID_ACCOUNT_ERROR_MESSAGE));
        exit();

    }






    //check of password
    $query = "|MODE=7|LOGIN=" . $data['copyTo'] . "|[CPASS=" . $data['MT4Password'];
    //--- prepare query
//--- send request
    $ret = 'error';
    //---- open socket
    $q = "WMQWEBAPI MASTER=jmi2020" . $query . "\nQUIT\n";

    /*$ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
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
        //--- send request
        $ret = 'error';
        //---- open socket
        $q = "WMQWEBAPI MASTER=jmi2020" . $query . "\nQUIT\n";
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

    if (is_object($result) && isset($result->result) && $result->result == 0) {


        $websiteAccountQuery = "SELECT * FROM website_accounts WHERE id = ?";
        $websiteAccountStmt = $conn->prepare($websiteAccountQuery);
        $websiteAccountStmt->bind_param("i", $websiteAccountId);
        $websiteAccountStmt->execute();
        $websiteAccountResult = $websiteAccountStmt->get_result();
        $websiteAccount = $websiteAccountResult->fetch_all(MYSQLI_ASSOC);




        $success = true;
        $copyto = $data['copyTo'];
        $percentage = $data['percentage'];
        $useremail = $websiteAccount[0]['email'];
        $status = 0;
        $details_user = '';
        $details_add = '';

        // Insert copy trade record
        $transactionQuery = "INSERT INTO copy_trade (website_accounts_id, copy_from, copy_to, percentage, status, details_user, details_admin)
                                 VALUES (?, ?, ?, ?,?,?,?)";
        $transactionStmt = $conn->prepare($transactionQuery);
        $transactionStmt->bind_param("iiidiss", $websiteAccountId, $copyFromAccount, $copyto, $percentage, $status, $details_user, $details_add);
        $transactionStmt->execute();


        // Insert user notification
        $notificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link)
                                 VALUES (?, 0, 'Your copy trade request has been received successfully.', 'Your copy trade request has been received successfully.', 'تم استلام طلب نسخ التداول الخاص بك بنجاح.', 'تم استلام طلب نسخ التداول الخاص بك بنجاح.', 'Ваш запрос на копирование был успешно получен.', 'Ваш запрос на копирование был успешно получен.', '/cpanel/copy-trade')";
        $notificationStmt = $conn->prepare($notificationQuery);
        $notificationStmt->bind_param("i", $websiteAccountId);
        $notificationStmt->execute();

        $website_account_adminid = 999999999;
        $notification_status = 0;
        $notification_message = "Successfuly copy the trade";
        $notification_link = '/cms/copy-trade?&bymail=';

        // Insert admin notification

        $adminNotificationQuery = "INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link)
                                       VALUES (?,?,?,?)";
        $adminNotificationStmt = $conn->prepare($adminNotificationQuery);
        $adminNotificationStmt->bind_param("iiss", $website_account_adminid, $notification_status, $notification_message, $notification_link);
        $adminNotificationStmt->execute();
        http_response_code(201);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => COPY_TRADE_SUCCESS_MESSAGE));


    } else {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => COPY_TRADE__ERROR_MESSAGE));
    }
    $conn->close();
    exit();
}



http_response_code(405);










?>