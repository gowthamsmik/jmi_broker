<?php

include('common.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    try {
        
        openLiveAccountValidation($data);
        $websiteAccount = websiteAccountDetails($websiteAccountId);


        if (empty($websiteAccount[0]['country']) || empty($websiteAccount[0]['mobile'])) {
            echo json_encode(array("status" => ERROR_STATUS, "message" => PROFILE_NOT_COMPLETE_ERROR_MESSAGE));
            exit();
        }

        $stmtTotalDocument = $conn->prepare("SELECT COUNT(*) as totalDocument FROM documents WHERE website_accounts_id = ? and status = 1");
        $stmtTotalDocument->bind_param("i", $websiteAccountId);
        $stmtTotalDocument->execute();
        $resultTotalDocument = $stmtTotalDocument->get_result();
        $totalDocument = $resultTotalDocument->fetch_assoc()['totalDocument'];


        if ($totalDocument < 2) {
            echo json_encode(array("status" => ERROR_STATUS, "message" => DOCUMENT_NOT_UPLOAD_ERROR_MESSAGE));
            exit();
        }

       
        if ($data['accountGroup'] == 1) {
            $account_group_text = 'Fixed Spread Account';
        } elseif ($data['accountGroup'] == 2) {
            $account_group_text = 'Scalping Account';
        } elseif ($data['accountGroup'] == 3) {
            $account_group_text = 'Variable Spread';
        } elseif ($data['accountGroup'] == 4) {
            $account_group_text = 'Bonus Account';
        }

        if ($data['accountType'] == 1) {
            $account_type_text = 'Individual';
        } elseif ($data['accountType'] == 2) {
            $account_type_text = 'IB';
        }

        
        $notify = "New live account request from Name={$websiteAccount[0]['fullname']} - Type={$data['accountType']} - Group={$data['accountGroup']} - User ID={$websiteAccount[0]['id']}";

        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification = $notify;
        $notification_link = "#open_account";
        $notification_status = 0;
        $created_at = date('Y-m-d H:i:s');
        $notfications->bind_param("issis", $website_accounts_id, $notification, $notification_link, $notification_status, $created_at);
        $notfications->execute();

        $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
        $notsfications = $conn->prepare($notifysquery);
        $website_accounts_id = $websiteAccount[0]['id'];
        $notification_status = 0;
        $notification = "Opening account request processed successfully, you will be notified when it's done";
        $details = "Opening account request processed successfully, you will be notified when it's done";
        $notification_ar = 'تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء';
        $details_ar = 'تم استلام طلب فتح الحساب بنجاح وسيتم اعلامك عند الأنتهاء';
        $notification_ru = 'Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.';
        $details_ru = 'Запрос на открытие счета обработан успешно, вы получите уведомление, когда он будет выполнен.';
        $notification_link = '/cpanel/live-account';
        $created_at = date('Y-m-d H:i:s');
        $notsfications->bind_param("iissssssss", $website_accounts_id, $notification_status, $notification, $details, $notification_ar, $details_ar, $notification_ru, $details_ru, $notification_link, $created_at);
        $notsfications->execute();


        //  // Backup your default mailer
        
        $data['title'] = 1;
        $data['name'] = 'Admin';
        $data['details'] = ' New Open live account request <br />Name= ' . $websiteAccount[0]['fullname'] . ' <br />Type=' . $account_type_text . ' - <br />gourp=' . $account_group_text . ' - <br />user_id=' . $websiteAccount[0]['id'];
        $subject = 'New Live Account Request';
        sendMailsToAdmin($data['details'], $subject);




        http_response_code(200);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => LIVE_ACCOUNT_OPENING_SUCCESS_MESSAGE));
        exit();



    } catch (PDOException $e) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => SOMTHING_WRONG_ERROR_MESSAGE));
        exit();
    }

}
http_response_code(405);