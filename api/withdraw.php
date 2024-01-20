<?php
include('common.php');
use MarcialPaulG\Coinbase\Checkout;
use MarcialPaulG\Coinbase\Coinbase;

require_once '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    withdrawValidation($data);

    $checkAccount = accountDetails($data['accountNo'], $websiteAccountId);


    if ($checkAccount->num_rows <= 0) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => INVALID_ACCOUNT_ERROR_MESSAGE));
        exit();

    }

    $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ? ");
    $stmtUser->bind_param('i', $websiteAccountId);
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();
    $user = $resultUser->fetch_assoc();
    $userId = $user['id'];

    if ($data['methodName'] == 'coinbase') {







        $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status,details_admin) values (?,?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $account = (int) $data['accountNo'];
        $amount = (float) $data['amount'];
        $currency = 1;
        $details_admin = 'CoinBase Account :' . $data['methodAccount'];
        $website_accounts_id = $websiteAccountId;
        $via = 'coinbase';
        $type = 1;
        $status = 0;
        $trasactions->bind_param("idsisiis", $account, $amount, $currency, $type, $via, $website_accounts_id, $status, $details_admin);
        $trasactions->execute();


        $notify = "$amount USD New CoinBase Withdraw ";




        $details = $amount . ' ' . $data['currency'] . ' New CoinBase Withdraw By' . $user['email'];
        $subject = $amount . ' ' . $data['currency'] . ' New CoinBase Withdraw By' . $user['email'];

        sendMailsToAdmin($details, $subject);

        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification = $notify;
        $notification_link = "/cms/withdraw-f-requests";
        $notification_status = 0;
        $created_at = date('Y-m-d H:i:s');
        $notfications->bind_param("issis", $website_accounts_id, $notification, $notification_link, $notification_status, $created_at);
        $notfications->execute();



        $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
        $notsfications = $conn->prepare($notifysquery);
        $website_accounts_id = $websiteAccountId;
        $notification_status = 0;
        $notification = 'Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $details = 'Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $notification_ar = 'تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $details_ar = 'تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $notification_ru = 'Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $details_ru = 'Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $notification_link = '/cpanel/transactional-history';
        $created_at = date('Y-m-d H:i:s');
        $notsfications->bind_param("iissssssss", $website_accounts_id, $notification_status, $notification, $details, $notification_ar, $details_ar, $notification_ru, $details_ru, $notification_link, $created_at);
        $notsfications->execute();




        http_response_code(200);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => WITHDRAW_SUCCESS_MESSAGE));

        exit();
    } else if ($data['methodName'] == 'epay') {

        $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status,details_admin) values (?,?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $account = (float) $data['accountNo'];
        $amount = (float) $data['amount'];
        $currency = 1;
        $details_admin = 'Epay Account :' . $data['methodAccount'];
        $website_accounts_id = $websiteAccountId;
        $via = 'epay';
        $type = 1;
        $status = 0;
        $trasactions->bind_param("idsisiis", $account, $amount, $currency, $type, $via, $website_accounts_id, $status, $details_admin);
        $trasactions->execute();

        $notify = "$amount  New Epay Withdraw";


        $notifyquery = "insert into notifications (website_accounts_id,notification,notification_link,notification_status,created_at) values (?,?,?,?,?)";
        $notfications = $conn->prepare($notifyquery);
        $website_accounts_id = 999999999;
        $notification = $notify;
        $notification_link = "/cms/withdraw-f-requests";
        $notification_status = 0;
        $created_at = date('Y-m-d H:i:s');
        $notfications->bind_param("issis", $website_accounts_id, $notification, $notification_link, $notification_status, $created_at);
        $notfications->execute();


        $notifysquery = "insert into notifications (website_accounts_id,notification_status,notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link,created_at) values (?,?,?,?,?,?,?,?,?,?)";
        $notsfications = $conn->prepare($notifysquery);
        $website_accounts_id = $websiteAccountId;
        $notification_status = 0;
        $notification = 'Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $details = 'Your withdrawal request has been delivered, our backoffice department will handle it soon.';
        $notification_ar = 'تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $details_ar = 'تم استلام طلب السحب بنجاح وستتم معالجتة قريبا من جهة الشركة';
        $notification_ru = 'Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $details_ru = 'Ваша заявка на снятие была доставлена, наш бэк-офис скоро обработает ее.';
        $notification_link = '/cpanel/transactional-history';
        $created_at = date('Y-m-d H:i:s');
        $notsfications->bind_param("iissssssss", $website_accounts_id, $notification_status, $notification, $details, $notification_ar, $details_ar, $notification_ru, $details_ru, $notification_link, $created_at);
        $notsfications->execute();



        $details = $amount . ' ' . $data['currency'] . ' New Epay Withdraw By' . $user['email'];
        $subject = $amount . ' ' . $data['currency'] . ' New Epay Withdraw By' . $user['email'];

        sendMailsToAdmin($details, $subject);


        http_response_code(200);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => WITHDRAW_SUCCESS_MESSAGE));
        exit();



    } else if ($data['methodName'] == 'bankwire') {

        $amount = $data['amount'];
        $account_number = $data['accountNo'];
        $currency = 1;


          
        $details_admin = 'Bank Name :' . $data['bankName'] . 'Bank Swift :' . $data['bankSwift'] . 'Bank Account or IBan :' . $data['bankIban'];
        $sqlTransaction = "INSERT INTO transactions (website_accounts_id, account, amount, currency, type, via, status, details_user, details_admin) VALUES (?, ?, ?, ?, 1, 'Bank Wire', 0, '', ?)";
        $stmtTransaction = $conn->prepare($sqlTransaction);
        $stmtTransaction->bind_param('iidss', $websiteAccountId, $account_number, $amount, $currency, $details_admin);
        $stmtTransaction->execute();

        $currency = "USD";
       
        $notification = $data['amount'] . ' ' . $currency . ' New Bank Wire Withdraw ';
        $notificationLink = '/cms/withdraw-f-requests?&bymail=' . $user['email'] . '&';
        $sqlNotification = "INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES (999999999, 0, ?, ?)";
        $stmtNotification = $conn->prepare($sqlNotification);
        $stmtNotification->bind_param('ss', $notification, $notificationLink);
        $stmtNotification->execute();


      
        $subject = $data['amount'] . ' ' . $currency . ' New Bank Withdraw By' . $user['email'];
        $mailContent = $data['amount'] . ' ' . $currency . ' New Bank Withdraw By' . $user['email'];
       

        sendMailsToAdmin($mailContent, $subject);


        $sqlNotificationUser = "INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, 0, 'Your withdrawal request has been delivered, our backoffice department will handle it soon.', 'Your withdrawal request has been delivered, our backoffice department will handle it soon.', 'تم استلام طلب السحب بنجاح وستتم معالجته قريبًا من جهة الشركة', 'تم استلام طلب السحب بنجاح وستتم معالجته قريبًا من جهة الشركة', 'Ваш запрос на снятие был доставлен, наш бэк-офис скоро обработает его.', 'Ваш запрос на снятие был доставлен, наш бэк-офис скоро обработает его.', '/cpanel/transactional-history')";
        $stmtNotificationUser = $conn->prepare($sqlNotificationUser);
        $stmtNotificationUser->bind_param('i', $user['id']);
        $stmtNotificationUser->execute();

        http_response_code(200);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => WITHDRAW_SUCCESS_MESSAGE));
        exit();



    }




    exit();
}

http_response_code(405);
























?>