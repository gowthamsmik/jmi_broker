<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {

    if (!isset($_GET['id'])) {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ID_REQUIRED_ERROR_MESSAGE));
        exit();

    }

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

    if ($fxAccount['status'] == 5) {

        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ACCOUNT_ALREDY_DELETE_ERROR_MESSAGE));
        exit();

    }
    if ($fxAccount['status'] != 0) {

        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => ACCOUNT_NOT_DELETE_ERROR_MESSAGE));
        exit();

    }



    $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ?");
    $stmtUser->bind_param("i", $websiteAccountId);
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();
    $user = $resultUser->fetch_assoc();




    // Update account status
    $stmtUpdateAccount = $conn->prepare("UPDATE fx_accounts SET status = 5 WHERE id = ? AND website_accounts_id = ?");
    $stmtUpdateAccount->bind_param("ii", $id, $user['id']);
    $stmtUpdateAccount->execute();

    // Save notification for admin
    $notification = $user['email'] . ' Has Request Account Deleting';
    $notification_link = '/cms/website-account?&bymail=' . $user['email'] . '&';
    $stmtAdminNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, notification_link) VALUES ('999999999', 0, ?, ?)");
    $stmtAdminNotification->bind_param("ss", $notification, $notification_link);
    $stmtAdminNotification->execute();


    // Save notification for user
    $stmtUserNotification = $conn->prepare("INSERT INTO Notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, 0, 'Account deleting request processed successfully, You will be notified when its done.',
     'Account deleting request processed successfully, You will be notified when its done.', 
     'تمت استلام طلب حذف  الحساب بنجاح ، وسيتم إعلامك عند الانتهاء', 
     'تمت استلام طلب حذف  الحساب بنجاح ، وسيتم إعلامك عند الانتهاء', 
     'Запрос на удаление учетной записи успешно обработан, вы получите уведомление, когда это будет сделано.', 
     'Запрос на удаление учетной записи успешно обработан, вы получите уведомление, когда это будет сделано.', 
     '/cpanel/live-account')");
    $stmtUserNotification->bind_param("i", $user['id']);
    $stmtUserNotification->execute();

    // Send email notification to admin
    // $backup = Mail::getSwiftMailer();
    $data['title'] = 1;
    $data['name'] = 'Admin';
    $data['details'] = 'FX Account ' . $id . ' deleting request <br />Email= ' . $user['email'] . ' - <br />user_id=' . $user['id'];
    $subject = 'FX Account ' . $id . ' deleting Request';
    // Mail::to('support@jmibrokers.com')->send(new Queued($data, $subject));
    // Mail::setSwiftMailer($backup);


    sendMailsToAdmin($data['details'], $subject);


    http_response_code(200);
    echo json_encode(array("status" => SUCCESS_STATUS, "message" => ACOOUNT_DELETED_SUCCESS_MESSAGE));
    exit();

}
http_response_code(405);



?>