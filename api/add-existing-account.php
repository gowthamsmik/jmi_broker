<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    addExistingAccountValidation($data);




    $login = $data['mt4LoginName'];
    $password = $data['mt4LoginPassword'];



    // Open live account

    // Check if there is no customer account agreement or fewer than 2 documents approved
    // $xx = 0;
    // foreach ($documents as $document) {
    //     if ($document->type == 8 && $document->status == 1) {
    //         $xx++;
    //     }
    // }

    // Uncomment the following block if you want to check for the number of documents and account agreement
    /*
    if ($xx == 0 || count($documents) < 2) {
        // Redirect based on the language segment
        $redirectUrl = '/' . Request::segment(1) . '/cpanel/add-account';
        header("Location: $redirectUrl");
        exit;
    }
    */

    // Check if he has 3 live accounts

    $checkExistingSql = "SELECT account_radio_type FROM fx_accounts WHERE  website_accounts_id = '$websiteAccountId' AND account_radio_type = 1";
    $checkExistingAccount = $conn->query($checkExistingSql);

    if ($checkExistingAccount->num_rows > 9) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => MAX_LIVE_ACCOUNT_ERROR_MESSAGE));
        exit();

    }


    $stmtFxAccounts = $conn->prepare("SELECT * FROM fx_accounts WHERE website_accounts_id = ? and  account_id = ?");
    $stmtFxAccounts->bind_param('ii', $websiteAccountId, $login);
    $stmtFxAccounts->execute();
    $stmtFxAccounts = $stmtFxAccounts->get_result();
    $fxAccounts = $stmtFxAccounts->fetch_all(MYSQLI_ASSOC);

    if (count($fxAccounts) > 0) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => LIVE_ACCOUNT_EXSIST_ERROR_MESSAGE));
        exit();
    }



    $ret = 'error';
    //---- open socket
    $ptr = @fsockopen('89.116.30.28', '443', $errno, $errstr, 5);
    //---- check connection
    if ($ptr) {
        //---- send request
        echo "1 sus";
        if (fputs($ptr, "WUSERINFO-login=$login|password=$password\nQUIT\n")) {
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
    if ($ret == Null or $ret == 'error') {
        //---- open socket
        $ptr = fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
        //---- check connection
        if ($ptr) {
            //---- send request

            if (fputs($ptr, "WUSERINFO-login=$login|password=$password\nQUIT\n")) {
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

    


    $fx_balance = get_string_between($ret, 'Balance:', 'Equity');

    if (strpos($ret, 'Invalid Account') === false && strpos($fx_balance, '.') !== false) {



        $accountID = $data['mt4LoginName'];
        $accountgrp = $data['accountGroup'];
        $accounttype = $data['accountType'];
        $leverage = 500;
        $currency = 0;
        $accradiotype = 1;
        $password = $data['mt4LoginPassword'];
        $status = 0;




        $stmtFxAccount = $conn->prepare("INSERT INTO fx_accounts (account_id, account_group, account_type, currency, leverage, account_radio_type, password, investor_password, website_accounts_id, status) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmtFxAccount->bind_param('isssiiisii', $accountID, $accountgrp, $accounttype, $currency, $leverage, $accradiotype, $password, $password, $websiteAccountId, $status);
        $stmtFxAccount->execute();


        $websiteAccountQuery = "SELECT * FROM website_accounts WHERE id = ?";
        $websiteAccountStmt = $conn->prepare($websiteAccountQuery);
        $websiteAccountStmt->bind_param("i", $websiteAccountId);
        $websiteAccountStmt->execute();
        $websiteAccountResult = $websiteAccountStmt->get_result();
        $websiteAccount = $websiteAccountResult->fetch_all(MYSQLI_ASSOC);


        $emailacc = $websiteAccount[0]['email'] . 'Has Added A New Live Account';
        $notlink = '/cms/website-account?&bymail=' . $websiteAccount[0]['email'] . '&';
        $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (999999999,?,?,?)");
        $stmtNotification->bind_param('iss', $status, $emailacc, $notlink);
        $stmtNotification->execute();





        $notify = "Account number " . $data['mt4LoginName'] . " has been added to your account list successfully";
        $notifylink = '/cpanel/live-account';
        $notifydetails = "Account number " . $data['mt4LoginName'] . " has been added to your account list successfully";

        $notification_ar = 'تمت إضافة رقم الحساب ' . $data['mt4LoginName'] . ' إلى قائمة حسابك بنجاح';
        $details_ar = 'تمت إضافة رقم الحساب ' . $data['mt4LoginName'] . ' إلى قائمة حسابك بنجاح';

        $notification_ru = 'Номер счета ' . $data['mt4LoginName'] . ' успешно добавлен в список ваших учетных записей.';
        $details_ru = 'Номер счета ' . $data['mt4LoginName'] . ' успешно добавлен в список ваших учетных записей.';


        $stmtNotification1 = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link, details,notification_ar,details_ar,notification_ru,details_ru) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmtNotification1->bind_param('iisssssss', $websiteAccountId, $status, $notify, $notifylink, $notifydetails, $notification_ar, $details_ar, $notification_ru, $details_ru);
        $stmtNotification1->execute();

        http_response_code(201);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => ACCOUNT_ADDED_SUCCESS_MESSAGE));
        exit();


    } else if (strpos($ret, 'Invalid Account') !== false) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ACCOUNT_NOT_FOUND_ERROR_MESSAGE));
        exit();
    } else {

       
        echo json_encode(array("status" => ERROR_STATUS, "message" => ADD_EXISTING_ACCOUNT_ERROR_MESSAGE));
        exit();
    }




}



http_response_code(405);



?>