<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    depositValidation($_POST);


    if (!isset($_FILES['ttcopy']) || !isset($_FILES['invoice'])) {
        echo json_encode(array("status" => ERROR_STATUS, "message" => TTCOPY_INVOICE_REQUIRED_ERROR_MESSAGE));
        exit();
    }


    if (
        ($_FILES['ttcopy']['type'] !== 'application/pdf' && $_FILES['ttcopy']['type'] !== 'image/jpeg' && $_FILES['ttcopy']['type'] !== 'image/png') ||
        ($_FILES['invoice']['type'] !== 'application/pdf' && $_FILES['invoice']['type'] !== 'image/jpeg' && $_FILES['invoice']['type'] !== 'image/png') ||
        $_FILES['ttcopy']['size'] > 2048000 || $_FILES['invoice']['size'] > 2048000
    ) {
        echo json_encode(array("status" => ERROR_STATUS, "message" => INVALID_FILE_ERROR_MESSAGE));
    }

    $checkAccount = accountDetails($_POST['accountNo'], $websiteAccountId);

    
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


    $amount = $_POST['amount'];
    $account_number = $_POST['accountNo'];
    $currency = $_POST['currency'];

    $time = time();

    $destinationPath = __DIR__ . '/../assets/ttcopy/';


    $filename1 = rand(1, 1000000) . $time . '.' . pathinfo($_FILES['ttcopy']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['ttcopy']['tmp_name'], $destinationPath . $filename1);

    $filename2 = rand(1, 1000000) . $time . '.' . pathinfo($_FILES['invoice']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['invoice']['tmp_name'], $destinationPath . $filename2);

    $details_admin = $destinationPath . $filename1;
    $stmt = $conn->prepare("INSERT INTO transactions (website_accounts_id, account, amount, currency, type, via, status, details_admin, details_user) VALUES (?, ?, ?, ?, '0', 'Bank Wire', '0', ?, '')");
    $stmt->bind_param('iidss', $userId, $account_number, $amount, $currency, $details_admin);

    $stmt->execute();

    $currency = 'USD';
    $notification = $amount . ' ' . $currency . ' New Bank Wire Deposited ';
    $notification_link = '/cms/deposite-f-requests?&bymail=' . $user['email'] . '&';
    $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, notification_link) VALUES ('999999999', '0', ?, ?)");

    $stmtNotification->bind_param('ss', $notification, $notification_link);
    $stmtNotification->execute();



    $data['title'] = 1;
    $data['name'] = 'Admin';
    $data['details'] = $amount . ' ' . $currency . ' New Bank Wire Deposited By ' . $user['email'] . '<br />TT File :<a href="' . $destinationPath . $filename1 . '">Here</a><br />Invoice File :<a href="' . $destinationPath . $filename2 . '">Here</a>';
    $subject = $amount . ' ' . $currency . ' New Bank Deposited By ' . $user['email'];

    sendMailsToAdmin($data['details'], $subject);


    $stmtNotification1 = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link) VALUES (?, '0', 'Your deposit has been delivered successfully, our backoffice department will handle it soon.',
 'Your deposit has been delivered successfully, our backoffice department will handle it soon.', 'تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة', 
 'تم استلام الايداع بنجاح وستتم معالجتة قريبا من جهة الشركة', 'Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.', 
 'Ваш депозит был успешно доставлен, наш бэк-офис скоро его обработает.', '/cpanel/transactional-history')");
    $stmtNotification1->bind_param('i', $userId);
    $stmtNotification1->execute();


    http_response_code(200);
    echo json_encode(array("status"=>SUCCESS_STATUS,"message" => DEPOSIT_BANKWIRE_SUCCESS_MESSAGE));
    exit();
}



http_response_code(405);



?>