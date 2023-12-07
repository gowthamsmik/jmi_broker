<?php include('functions.php');
error_reporting(0);
if ($_POST['type'] == 'page-save') {
    extract($_POST);
    foreach ($_POST as $key => $value) {
        if ($key == 'page_id') {
        } else {
            $keyz = $key;
            $keyz = explode('|', $keyz);

            $filed_name = $keyz[0];
            $group = $keyz[1];
            if (is_array($value)) {
                $value = json_encode($value);
            }
            update_field_meta($filed_name, $value, $group, $page_id);
        }

    }
}
if ($_POST['type'] == 'section-save') {
    extract($_POST);
    foreach ($_POST as $key => $value) {
        if ($key == 'section_id') {
        } else {
            $keyz = $key;
            $keyz = explode('|', $keyz);

            $filed_name = $keyz[0];
            $group = $keyz[1];
            if (is_array($value)) {
                $value = json_encode($value);
            }
            update_section_field_meta($filed_name, $value, $group, $section_id);
        }

    }
}
if ($_POST['type'] == 'add-faq') {
    extract($_POST);
    add_faq($question, $answer, $faqtype);
}
if ($_POST['type'] == 'add-account') {
    extract($_POST);
    add_account($account_id, $account_type, $account_group, $currency, $leverage, $account_radio_type, $password, $investor_password, $status, $website_accounts_id);
}
if ($_POST['type'] == 'update-faq') {
    extract($_POST);
    update_faq($id, $question, $answer, $faqtype);
}

if ($_POST['type'] == 'update-website-account') {
    extract($_POST);
    update_website_account($id, $account_id, $account_group, $currency, $leverage, $password, $investor_password, $status, $website_accounts_id);
}

if ($_POST['type'] == 'update-demo-account') {
    extract($_POST);
    update_demo_account($id, $account_id, $account_group, $currency, $leverage, $password, $investor_password, $status, $website_accounts_id);
}
if ($_POST['type'] == 'delete-demo-account') {
    $id = $_POST['id'];
    deletedemoAccount($id);
}
if ($_POST['type'] == 'add-news') {
    extract($_POST);
    add_news($heading, $description, $posted_by, $news_files);
}
if ($_POST['type'] == 'update-news') {
    extract($_POST);
    update_news($id, $heading, $description, $posted_by, $news_files);
}

if ($_POST['type'] == 'add-fanalysis') {
    extract($_POST);
    add_FAnalysis($heading, $description, $posted_by, $news_files);
}
if ($_POST['type'] == 'update-fanalysis') {
    extract($_POST);
    update_FAnalysis($id, $heading, $description, $posted_by, $news_files);
}
if ($_POST['type'] == 'upload_file') {
    //var_dump($_FILES);
    echo "this file";
    $target_dir = '../../uploads/';
    $target_file = $target_dir . time() . '_image.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    //echo $target_file;
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo str_replace('../../', '', $target_file);
    } else {
        //echo $_FILES["file"]["error"];
    }
}
if ($_POST['type'] == 'delete-callback-request') {
    echo "thererherer";
    $id = $_POST['id'];
    deleteCallBackRequest($id);
}

if ($_POST['same'] == 'add-fund-requests') {
    extract($_POST);
    add_fund_requests($account, $amount, $currency, $type, $via, $website_accounts_id, $status, $details_admin, $details_user);
}
if ($_POST['same'] == 'update-fund-requests') {
    extract($_POST);
    update_fund_requests($id, $account, $amount, $currency, $type, $via, $website_account_id, $status, $details_admin, $details_user);
}
if ($_POST['type'] == 'delete-fund-requests') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deletefundrequests($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deletefundrequest($id);
    }
}
if ($_POST['type'] == 'delete-website-accounts') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        echo "delete1";
        deleteWebsiteAccounts($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        echo "delete2";
        deleteWebsiteAccount($id);
    }
}
if ($_POST['type'] == 'add-mailer') {
    echo ("1111122222");
    extract($_POST);
    add_mailer($email, $title, $name);
}
if ($_POST['type'] == 'all-search-urls') {
    extract($_POST);
    echo ("jdjhdcjhe");
    all_search_urls($url, $ar_title, $en_title);
}
if ($_POST['type'] == 'delete-mailer') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deleteallmailer($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deletemailer($id);
    }
}
if ($_POST['type'] == 'delete-all-search-urls') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deleteallsearchurl($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deletesearchurl($id);
    }
}
if ($_POST['type'] == 'delete-landing-users') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deletealllandingusers($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deletelandingusers($id);
    }
}
if ($_POST['type'] == 'add-technical') {
    extract($_POST);
    addTechnicalAnalysis($technicaltype, $title, $details, $technicalstatus, $arabic_title, $arabic_details, $russian_title, $russian_details);
}
if ($_POST['type'] == 'add-fundamental-analysis') {
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $targetDir = "../../assets/images/post_images/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo str_replace('../../', '', $target_file);
            addFundamentalAnalysis($heading, $description, $targetFile);
            echo "File uploaded and analysis added successfully.";
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Error: " . $_FILES["fileToUpload"]["error"];
    }
}


if ($_POST['type'] == 'update-technical') {
    extract($_POST);
    echo "jjjjjjj";
    updateTechnicalAnalysis($id, $technicaltype, $title, $details, $technicalstatus, $arabic_title, $arabic_details, $russian_title, $russian_details);
}
if ($_POST['type'] == 'delete-send-mails') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deleteallsendmail($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deletesendmail($id);
    }
}

if ($_POST['type'] == 'delete-technical-analysis') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deletealltechnicalanalysis($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deletetechnicalanalysis($id);
    }
}
if ($_POST['type'] == 'update-technical-status') {
    extract($_POST);
    updatetechnicalstatus($technicalStatus, $technicalId);
}
if ($_POST['type'] == 'get-technical-analysis-details') {
    echo ("dbfvjhdfbvjdfb");
    extract($_POST);
    gettechnicalanalysis($id);
}
if ($_POST['type'] == 'get-fundamental-analysis-details') {
    echo ("dbfvjhdfbvjdfb");
    extract($_POST);
    getfundamentalanalysis($id);
}
if ($_POST['type'] == 'delete-fundamental-analysis') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deleteallfundamentalanalysis($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deletefundamentalanalysis($id);
    }
}

if ($_POST['type'] == 'update-fundamental-analysis') {
    extract($_POST);
    echo "jjjjjjj";
    updateFundamentalAnalysis($id, $heading, $description);
}

if ($_POST['type'] == 'add-offers') {
    $offertype = $_POST['offertype'];
    $title = $_POST['offertitle'];
    $details = $_POST['offerdetails'];
    $offerstatus = $_POST['offerstatus'];
    $arabic_title = $_POST['offerarabic_title'];
    $arabic_details = $_POST['offerarabic_details'];
    $russian_title = $_POST['russiantitle'];
    $russian_details = $_POST['russiandetails'];
    echo "jjjjjjjjjjjjjjjjjj", $offertype;
    $targetDir = "../../assets/images/post_images/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_FILES["offerfileToUpload"]) && $_FILES["offerfileToUpload"]["error"] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($_FILES["offerfileToUpload"]["name"], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        if (move_uploaded_file($_FILES["offerfileToUpload"]["tmp_name"], $targetFile)) {
            addoffers($offertype, $title, $details, $offerstatus, $arabic_title, $arabic_details, $targetFile, $russian_title, $russian_details);
            echo "File uploaded and analysis added successfully.";
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Errorrrrrrrrrrrr: " . $_FILES["offerfileToUpload"]["error"];
    }
}
if ($_POST['type'] == 'delete-offers') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deletealloffers($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deleteoffers($id);
    }
}
if ($_POST['type'] == 'get-offers-analysis-details') {
    extract($_POST);
    getoffersanalysis($id);
}
if ($_POST['type'] == 'update-offers') {
    extract($_POST);
    echo "jjjjjjj";
    updateoffers($id, $offertype, $title, $details, $offerstatus, $arabic_title, $arabic_details, $russian_title, $russian_details);
}
if ($_POST['type'] == 'update-offer-status') {
    extract($_POST);
    updateofferstatus($offerStatus, $offerId);
}
if ($_POST['type'] == 'session-store-technical') {
    session_start();
    if (isset($_POST['viewType'])) {
        $_SESSION['viewType'] = $_POST['viewType'];
        echo 'Session variable set successfully.';
    } else {
        echo 'Error: viewType not provided.';
    }
}
if ($_POST['type'] == 'session-store-fundamental') {
    session_start();
    if (isset($_POST['fundamentalType'])) {
        $_SESSION['fundamentalType'] = $_POST['fundamentalType'];
        echo 'Session variable set successfully.';
    } else {
        echo 'Error: viewType not provided.';
    }
}
if ($_POST['type'] == 'session-store-offers') {
    session_start();
    if (isset($_POST['offerType'])) {
        $_SESSION['offerType'] = $_POST['offerType'];
        echo 'Session variable set successfully.';
    } else {
        echo 'Error: viewType not provided.';
    }
}
if (isset($_POST['type']) && $_POST['type'] == 'add-website-admins') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roll = $_POST['roll'];
    $hashedPassword = md5($password);
    echo "ajax", $name, $email, $password, $roll, $hashedPassword;
    add_admins($name, $email, $hashedPassword, $roll);
}

if ($_POST['type'] == 'delete-admin') {
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        deletealladmin($ids, $page);
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deleteadmin($id);
    }
}
if ($_POST['type'] == 'editadmin') {
    //echo("dbfvjhdfbvjdfb..........................................");
    extract($_POST);
    getadmindetails($id);
}
if ($_POST['type'] == 'update-admin') {
    extract($_POST);
    echo "jjjjjjj";
    $password = md5($_POST['password']);
    updateadmin($id, $name, $email, $password, $roll);
}
if ($_POST['type'] == 'change-password') {
    extract($_POST);

    $currentpassword = md5($_POST['currentpassword']);
    $newpassword = $_POST['newpassword'];
    $confirmnewpassword = $_POST['confirmnewpassword'];
    $id = $_SESSION['sessionadmin'];
    $logindetails = getlogindetails($id);

    $hashpass = $logindetails["password"];

    if (empty($currentpassword) || empty($newpassword) || empty($confirmnewpassword)) {
        $response = array('status' => 'error', 'message' => 'All fields are required.');
    } elseif ($currentpassword != $hashpass) {
        $response = array('status' => 'error', 'message' => 'Password update failed. Current password is incorrect.');
    } elseif (strlen($newpassword) < 8) {
        $response = array('status' => 'error', 'message' => 'Password should be at least 8 characters long.');
    } elseif ($newpassword != $confirmnewpassword) {
        $response = array('status' => 'error', 'message' => 'Password update failed. New passwords do not match.');
    } else {
        $changepassword = md5($newpassword);
        adminpasswordupdate($id, $changepassword);
        $response = array('status' => 'success', 'message' => 'Password updated successfully');
    }

    echo json_encode($response);
    return;
}
if ($_POST['type'] == 'change-user-password') {
    extract($_POST);

    $currentpassword = md5($_POST['currentpass']);
    $newpassword = $_POST['newpass'];
    $confirmnewpassword = $_POST['confirmnewpass'];
    $sessionuser = $_SESSION['sessionadmin'];
    $userdetails = getuserdetails($sessionuser);
    $hashpass = $userdetails["password"];
    if (empty($currentpassword) || empty($newpassword) || empty($confirmnewpassword)) {
        $response = array('status' => 'error', 'message' => 'All fields are required.');
    } elseif ($currentpassword != $hashpass) {
        $response = array('status' => 'error', 'message' => 'Password update failed. Current password is incorrect.');
    } elseif (strlen($newpassword) < 8) {
        $response = array('status' => 'error', 'message' => 'Password should be at least 8 characters long.');
    } elseif ($newpassword != $confirmnewpassword) {
        $response = array('status' => 'error', 'message' => 'Password update failed. New passwords do not match.');
    } else {
        $changepassword = md5($newpassword);
        userpasswordupdate($sessionuser, $changepassword);
        $response = array('status' => 'success', 'message' => 'Password updated successfully');
    }

    echo json_encode($response);
    return;
}
if ($_POST['type'] == 'en-slideshow') {
    extract($_POST);
    $targetDir = "../../assets/images/post_images/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {

            //echo str_replace('../../', '', $targetFile);

            updateslideshow($id, $targetFile, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left);
            $result = "Slider Update Successfully";
            echo json_encode($result);
        } else {
            echo json_encode(['error' => 'File upload failed.']);
        }
    } else {
        echo json_encode(['error' => 'File upload failed.']);
    }

}
if ($_POST['type'] == 'add-en-slideshow') {
    extract($_POST);
    $targetDir = "../../assets/images/post_images/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {

            //echo str_replace('../../', '', $targetFile);

            add_en_slideshow($slide, $slide_display, $targetFile, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left);
            $result = "Slider Added Successfully";
            echo json_encode($result);
        } else {
            echo json_encode(['error' => 'File upload failed.']);
        }
    } else {
        echo json_encode(['error' => 'File upload failed.']);
    }

}
if ($_POST['type'] == 'add-ru-slideshow') {
    extract($_POST);
    $targetDir = "../../assets/images/post_images/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {

            //echo str_replace('../../', '', $targetFile);

            add_ru_slideshow($slide, $slide_display, $targetFile, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left);
            $result = "Slider Added Successfully";
            echo json_encode($result);
        } else {
            echo json_encode(['error' => 'File upload failed.']);
        }
    } else {
        echo json_encode(['error' => 'File upload failed.']);
    }

}

if ($_POST['type'] == 'ru-slideshow') {
    extract($_POST);
    $targetDir = "../../assets/images/post_images/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {

            //echo str_replace('../../', '', $targetFile);

            updateruslideshow($id, $img, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left);
            $result = "Slider Update Successfully";
            echo json_encode($result);
        } else {
            echo json_encode(['error' => 'File upload failed.']);
        }
    } else {
        echo json_encode(['error' => 'File upload failed.']);
    }

}
if ($_POST['type'] == 'add-ar-slideshow') {
    extract($_POST);
    $targetDir = "../../assets/images/post_images/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = rand(1, 1000000) . time();
        $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $targetFile = $targetDir . $filename . "." . $fileExtension;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {

            //echo str_replace('../../', '', $targetFile);

            add_ar_slideshow($slide, $slide_display, $targetFile, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left);
            $result = "Slider Added Successfully";
            echo json_encode($result);
        } else {
            echo json_encode(['error' => 'File upload failed.']);
        }
    } else {
        echo json_encode(['error' => 'File upload failed.']);
    }

}
if ($_POST['type'] == 'update-status') {
    extract($_POST);
    update_status($donestatusId, $statusValue, $details_user);
}
if ($_POST['type'] == 'update-rej-status') {
    extract($_POST);
    update_rej_status($rejectstatusId, $statusValueReject, $details_user);
}
if ($_POST['type'] == 'updatedocument') {
    extract($_POST);
    $status = 1;
    updatedocument($id, $status);
}

if ($_POST['type'] == 'deleteupdateRecords') {
    $ids = $_POST['ids'];
    deletedocument($ids);
}
if ($_POST['type'] == 'viewDocument') {
    $id = $_POST['id'];
    // Fetch the document content based on the ID
    $documentContent = getDocumentContent($id);

    // Return the document content to the client
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'content' => $documentContent]);
    exit;
}
