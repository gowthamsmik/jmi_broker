<?php include('config.php');
mysqli_set_charset($conn, "utf8mb4");
function getuserinfo()
{
    global $conn, $currentuserid;
    $sql = "SELECT * FROM website_accounts where id = $currentuserid";
    $res = $conn->query($sql);
    while ($row = $res->fetch_assoc()) {
        return $row;
    }
}
function getAllPages()
{
    global $conn;
    $sql = "SELECT * FROM pages";
    $res = $conn->query($sql);
    return $res;
}


function getAllfaqs($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM faqs  ORDER BY id DESC LIMIT $offset, $perPage";

    $res = $conn->query($sql);
    return $res;
}
function getAllRufaqs($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM ru_faqs  ORDER BY id DESC LIMIT $offset, $perPage";

    $res = $conn->query($sql);
    return $res;
}
function getAllArfaqs($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM ar_faqs  ORDER BY id DESC LIMIT $offset, $perPage";

    $res = $conn->query($sql);
    return $res;
}
function add_faq($question, $answer, $faqtype)
{
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "INSERT INTO `faqs`( `question`, `answer`, `type`) VALUES ('$question','$answer','$faqtype')";
    $res = $conn->query($sql);
    return $res;
}
function add_ru_faq($question, $answer, $faqtype)
{
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "INSERT INTO `faqs`( `ru_question`, `ru_answer`, `type`) VALUES ('$question','$answer','$faqtype')";
    $res = $conn->query($sql);
    return $res;
}
function add_ar_faq($question, $answer, $faqtype)
{
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "INSERT INTO `faqs`( `ar_question`, `ar_answer`, `type`) VALUES ('$question','$answer','$faqtype')";
    $res = $conn->query($sql);
    return $res;
}
function update_faq($id, $question, $answer, $faqtype)
{
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "UPDATE faqs SET question = '$question' , answer = '$answer' , type = '$faqtype' WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}
function update_ru_faq($id, $question, $answer, $faqtype)
{
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "UPDATE faqs SET ru_question = '$question' , ru_answer = '$answer' , type = '$faqtype' WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}
function update_ar_faq($id, $question, $answer, $faqtype)
{
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "UPDATE faqs SET ar_question = '$question' , ar_answer = '$answer' , type = '$faqtype' WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}
function getFaqById($faqid)
{
    global $conn;
    $sql = "SELECT * FROM faqs WHERE id = '$faqid'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getRuFaqById($faqid)
{
    global $conn;
    $sql = "SELECT * FROM ru_faqs WHERE id = '$faqid'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getArFaqById($faqid)
{
    global $conn;
    $sql = "SELECT * FROM faqs WHERE id = '$faqid'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getAllSections()
{
    global $conn;
    $sql = "SELECT * FROM sections";
    $res = $conn->query($sql);
    return $res;
}
function getAllRuSections()
{
    global $conn;
    $sql = "SELECT * FROM ru_sections";
    $res = $conn->query($sql);
    return $res;
}
function getAllArSections()
{
    global $conn;
    $sql = "SELECT * FROM ar_sections";
    $res = $conn->query($sql);
    return $res;
}

function getPageDetail($pid)
{
    global $conn;
    $sql = "SELECT * FROM pages WHERE page_id = '$pid'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getRuPageDetail($pid)
{
    global $conn;
    $sql = "SELECT * FROM pages WHERE page_id = '$pid'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getArPageDetail($pid)
{
    global $conn;
    $sql = "SELECT * FROM pages WHERE page_id = '$pid'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getSectonDetail($pid)
{
    global $conn;
    $sql = "SELECT * FROM sections WHERE section_id = '$pid'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}

function get_data_from_table($table)
{
    global $conn;
    $table = strtolower($table);
    $sql = "SELECT * FROM $table";
    $res = $conn->query($sql);
    return $res;
}
function getPageGroups($pid)
{
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' GROUP BY group_name ORDER BY `page_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}
function getRuPageGroups($pid)
{
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' GROUP BY group_name ORDER BY `page_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}
function getArPageGroups($pid)
{
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' GROUP BY group_name ORDER BY `page_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}
function getSectionGroups($pid)
{
    global $conn;
    $sql = "SELECT * FROM section_meta WHERE section_id = '$pid' GROUP BY group_name ORDER BY `section_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}
function getRuSectionGroups($pid)
{
    global $conn;
    $sql = "SELECT * FROM ru_section_meta WHERE section_id = '$pid' GROUP BY group_name ORDER BY `ru_section_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}
function getArSectionGroups($pid)
{
    global $conn;
    $sql = "SELECT * FROM ar_section_meta WHERE section_id = '$pid' GROUP BY group_name ORDER BY `ar_section_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}
function getPageFieldsByGroup($pid, $group)
{
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getRuPageFieldsByGroup($pid, $group)
{
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getArPageFieldsByGroup($pid, $group)
{
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getSectionFieldsByGroup($pid, $group)
{
    global $conn;
    $sql = "SELECT * FROM section_meta WHERE section_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getRuSectionFieldsByGroup($pid, $group)
{
    global $conn;
    $sql = "SELECT * FROM ru_section_meta WHERE section_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getArSectionFieldsByGroup($pid, $group)
{
    global $conn;
    $sql = "SELECT * FROM ar_section_meta WHERE section_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getAllLeads()
{
    global $conn;
    $sql = "SELECT * FROM leads";
    $res = $conn->query($sql);
    return $res;
}
function getAllwebsiteaccount($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM website_accounts ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getfxaccount($id)
{
    global $conn;
    $sql = "SELECT * FROM fx_accounts WHERE website_accounts_id='$id'  limit 1";

    $res = $conn->query($sql);

    if ($res && $res->num_rows > 0) {
        // Fetch the data from the result set
        $fxaccount = $res->fetch_assoc();
        return $fxaccount;
    } else {
        return null; // or handle the error as needed
    }
}
// function getAlldepositerequest($page, $perPage)
// {
//     global $conn;
//     $offset = ($page - 1) * $perPage;
//     $sql = "SELECT * FROM transactions WHERE type = '0' ORDER BY id DESC LIMIT $offset, $perPage";

//     $res = $conn->query($sql);
//     return $res;
// }

function getAlldepositerequest($page, $perPage, $sort)
{
    global $conn;
    $offset = ($page - 1) * $perPage;

    $sql = "SELECT * FROM transactions";

    // Add ORDER BY clause
    $sql .= " ORDER BY id " . ($sort == "desc" ? "DESC" : "ASC");

    // Add LIMIT clause
    $sql .= " LIMIT $offset, $perPage";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}

// function getAllwithdrawrequest($page, $perPage)
// {
//     global $conn;
//     $offset = ($page - 1) * $perPage;
//     $sql = "SELECT * FROM transactions WHERE type = '1' ORDER BY id DESC LIMIT $offset, $perPage";
//     $res = $conn->query($sql);
//     return $res;
// }

function getAllwithdrawrequest($page, $perPage, $sort)
{
    global $conn;
    $offset = ($page - 1) * $perPage;

    $sql = "SELECT * FROM transactions";

    // Add ORDER BY clause
    $sql .= " ORDER BY id " . ($sort == "desc" ? "DESC" : "ASC");

    // Add LIMIT clause
    $sql .= " LIMIT $offset, $perPage";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}


// function getAllinternalrequest($page, $perPage)
// {
//     global $conn;
//     $offset = ($page - 1) * $perPage;
//     $sql = "SELECT * FROM transactions WHERE type = '2' ORDER BY id DESC LIMIT $offset, $perPage";
//     $res = $conn->query($sql);
//     return $res;
// }

function getAllinternalrequest($page, $perPage, $sort)
{
    global $conn;
    $offset = ($page - 1) * $perPage;

    $sql = "SELECT * FROM transactions";

    // Add ORDER BY clause
    $sql .= " ORDER BY id " . ($sort == "desc" ? "DESC" : "ASC");

    // Add LIMIT clause
    $sql .= " LIMIT $offset, $perPage";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}
function getTotalWebsiteAccounts()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM website_accounts ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalpagedepositerequest()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM transactions WHERE type = '0'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalfaqs()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM faqs ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getRuTotalfaqs()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM ru_faqs ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getArTotalfaqs()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM faqs where ar_question is not null";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalpagewithdrawrequest()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM transactions WHERE type = '1'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalpageinternalrequest()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM transactions WHERE type = '2'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotaldemoAccounts()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM fx_accounts WHERE account_radio_type = 0";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalliveAccounts()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM fx_accounts WHERE account_radio_type = 1";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalreferalAccounts()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM fx_accounts WHERE account_type = 4";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getWebsiteById($id)
{
    global $conn;
    echo "id----" . $id;
    $sql = "SELECT * FROM fx_accounts WHERE account_id = '$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
    if (!$res) {
        echo "Error: " . $conn->error;
    }
}
function update_website_account($notification_id, $user_id, $account_id, $account_group, $leverage, $account_type)
{
    global $conn;

    $sql = "UPDATE fx_accounts SET  account_group='$account_group' , leverage = ' $leverage '  , website_accounts_id = '$user_id',updated_at = NOW()  WHERE account_id = ' $account_id' ";
    print_r($sql);
    $res = $conn->query($sql);
    $sqlupdate = "UPDATE `notifications` SET `notification_status`='1' where `id`='$notification_id'";
    echo "--sqlupdate--" . $sqlupdate;
    $res = $conn->query($sqlupdate);
    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        $sql = "INSERT INTO `notifications`(`website_accounts_id`,`notification_status`,`notification`,`details`,`notification_ar`,`details_ar`,`notification_ru`,`details_ru`,`notification_link`) VALUES('$user_id','0','Account $user_id has been edited as your request.','Account $user_id  has been edited as your request.','تم تغيير حساب رقم  $user_id بنجاح بناءا على طلبك',' تم تعديلة بنجاح $user_id حساب رقم ' ,'Account $user_id has been edited as your request.','Аккаунт $user_id отредактирован по вашему запросу.','/cpanel/live-account')";
        echo "sql--" . $sql;
        $res = $conn->query($sql);
        if (!$res) {
            echo "" . $conn->error;
        }
        return $res;
    }
}
function add_account($notification_id, $user_id, $mt4login, $mt4password, $mt4investor, $account_type, $account_group, $leverage)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `fx_accounts`(`account_id`, `account_type`, `account_group`,`currency`,`leverage`,`account_radio_type`,`password`,`investor_password`,`status`,`website_accounts_id`,`created_at`) VALUES ('$mt4login','$account_type','$account_group','USD','$leverage','1','$mt4password','$mt4investor','1','$user_id','$now')";
    echo "sss" . $sql;
    $res = $conn->query($sql);
    $sqlupdate = "UPDATE `notifications` SET `notification_status`='1' where `id`='$notification_id'";
    echo "--sqlupdate--" . $sqlupdate;
    $res = $conn->query($sqlupdate);
    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        $sql = "INSERT INTO `notifications`(`website_accounts_id`,`notification_status`,`notification`,`details`,`notification_ar`,`details_ar`,`notification_ru`,`details_ru`,`notification_link`) VALUES('$user_id','0','Live Account $mt4login Has Been Opened Successfully','Live Account $mt4login  Has Been Opened Successfully','حساب حقيقى $mt4login تم انشائه بنجاح','حساب حقيقى $mt4login تم انشائه بنجاح','Реальный счет $mt4login успешно открыт','Реальный счет $mt4login успешно открыт','/cpanel/live-account')";
        echo "sql--" . $sql;
        $res = $conn->query($sql);
        if (!$res) {
            echo "" . $conn->error;
        }
        return $res;
    }
}
function deleteWebsiteAccount($id, $page)
{
    // Implement the code to delete the record with the given $id on the specified $page
    // Use appropriate SQL statements and error handling
    global $conn;

    // Update the table name and column names based on your database structure
    $table = 'fx_accounts';
    $id_column = 'account_id';
    $page_column = 'page';

    // Construct the SQL query with the condition to delete the record on the specified page
    $sql = "DELETE FROM `fx_accounts` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    echo "sql---", $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deletedemoAccount($id, $page)
{
    // Implement the code to delete the record with the given $id on the specified $page
    // Use appropriate SQL statements and error handling
    global $conn;

    // Update the table name and column names based on your database structure
    $table = 'fx_accounts';
    $id_column = 'account_id';
    $page_column = 'page';

    // Construct the SQL query with the condition to delete the record on the specified page
    $sql = "DELETE FROM `fx_accounts` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    echo "sqllll" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function getAlldemoaccount($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM fx_accounts WHERE account_radio_type = 0 ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllliveaccount($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM fx_accounts WHERE account_radio_type = 1 ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllrefferalaccount($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM website_accounts WHERE invited_by is not null LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function update_field_meta($filed_name, $value, $group, $page_id)
{
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_', ' ', $filed_name);
    $group = str_replace('_', ' ', $group);
    echo $sql = "UPDATE `page_meta` SET `field_value`='$value' WHERE `field_name`='$filed_name' AND `page_id`='$page_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function update_ru_field_meta($filed_name, $value, $group, $page_id)
{
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_', ' ', $filed_name);
    $group = str_replace('_', ' ', $group);
    echo $sql = "UPDATE `page_meta` SET `ru_field_value`='$value' WHERE `field_name`='$filed_name' AND `page_id`='$page_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function update_ar_field_meta($filed_name, $value, $group, $page_id)
{
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_', ' ', $filed_name);
    $group = str_replace('_', ' ', $group);
    echo $sql = "UPDATE `page_meta` SET `ar_field_value`='$value' WHERE `field_name`='$filed_name' AND `page_id`='$page_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function update_section_field_meta($filed_name, $value, $group, $section_id)
{
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_', ' ', $filed_name);
    $group = str_replace('_', ' ', $group);
    $sql = "UPDATE `section_meta` SET `field_value`='$value' WHERE `field_name`='$filed_name' AND `section_id`='$section_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function update_ru_section_field_meta($filed_name, $value, $group, $section_id)
{
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_', ' ', $filed_name);
    $group = str_replace('_', ' ', $group);
    $sql = "UPDATE `ru_section_meta` SET `field_value`='$value' WHERE `field_name`='$filed_name' AND `section_id`='$section_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function update_ar_section_field_meta($filed_name, $value, $group, $section_id)
{
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_', ' ', $filed_name);
    $group = str_replace('_', ' ', $group);
    $sql = "UPDATE `ar_section_meta` SET `field_value`='$value' WHERE `field_name`='$filed_name' AND `section_id`='$section_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}

function getAllNews($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM news LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getNewsById($id)
{
    global $conn;
    $sql = "SELECT * FROM news WHERE id = '$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function add_news($heading, $description, $ar_title, $ar_details, $ru_title, $ru_details, $posted_by, $news_files)
{
    global $conn;
    // $heading = $conn->real_escape_string($heading);
    // $description = $conn->real_escape_string($description);
    // $posted_by = $conn->real_escape_string($posted_by);
    $time = time();
    $sql = "INSERT INTO `news`( `heading`, `description`,`ar_heading`,`ar_description`,`ru_heading`,`ru_description`, `posted_by`, `created_at`, `image`) VALUES ('$heading','$description','$ar_title','$ar_details','$ru_title','$ru_details','$posted_by', '$time', '$news_files')";
   
    $res = $conn->query($sql);
    return $res;
}
function update_news($id, $heading, $description,$ar_title,$ar_details,$ru_heading,$ru_details, $posted_by, $news_files)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    // $heading = $conn->real_escape_string($heading);
    // $description = $conn->real_escape_string($description);
    // $posted_by = $conn->real_escape_string($posted_by);
    $sql = "UPDATE news SET heading = '$heading' , description = '$description' , ar_heading='$ar_title',ar_description='$ar_details',ru_heading='$ru_heading',ru_description='$ru_details', posted_by = '$posted_by', image = '$news_files',updated_at='$now' WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}



function getAllFAnalysis()
{
    global $conn;
    $sql = "SELECT * FROM fundamental_analysis";
    $res = $conn->query($sql);
    return $res;
}
function getFAnalysisById($id)
{
    global $conn;
    $sql = "SELECT * FROM fundamental_analysis WHERE id = '$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function add_FAnalysis($heading, $description, $posted_by, $image)
{
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $time = time();
    $sql = "INSERT INTO `fundamental_analysis`( `heading`, `description`, `posted_by`, `posted_on`, `image`) VALUES ('$heading','$description','$posted_by', '$time', '$image')";
    $res = $conn->query($sql);
    return $res;
}
function update_FAnalysis($id, $heading, $description, $posted_by, $news_files)
{
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $sql = "UPDATE fundamental_analysis SET heading = '$heading' , description = '$description' , posted_by = '$posted_by', image = '$news_files' WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}
function deleteWebsiteAccounts($ids)
{
    global $conn;
    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);
    $sql = "DELETE FROM `fx_accounts` WHERE `account_id` IN ($idList)";
    echo "sql" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function add_fund_requests($account, $amount, $currency, $type, $via, $website_accounts_id, $status, $details_admin, $details_user)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `transactions`
            (`account`, `amount`, `currency`, `type`, `via`, `website_account_id`, `status`, `details_admin`, `details_user`, `created_at`, `updated_at`)
            VALUES ('$account', '$amount', '$currency', '$type', '$via', '$website_accounts_id', '$status', '$details_admin', '$details_user', '$now', '$now')";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}

function getAllfundrequests($id)
{
    global $conn;
    $sql = "SELECT * FROM transactions WHERE id = '$id'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
        return null; // Return null in case of an error
    }

    $row = $res->fetch_assoc();

    return $row;
}
function update_fund_requests($id, $account, $amount, $currency, $type, $via, $website_account_id, $status, $details_admin, $details_user)
{
    global $conn;
    $sql = "UPDATE transactions SET account = '$account', amount = '$amount', currency = '$currency', type = '$type', via = '$via', website_accounts_id = '$website_account_id', details_admin = '$details_admin', details_user = '$details_user', status = '$status', updated_at = NOW() WHERE id = '$id'";

    print_r($sql);
    $res = $conn->query($sql);
    echo "Error: " . $id . " " . $account . " " . $amount . " " . $currency . " " . $type . " " . $via . " " . $website_account_id . " " . $details_admin . " " . $details_user;
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function deletefundrequests($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `transactions` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deletefundrequest($id, $page)
{
    global $conn;
    $table = 'transactions';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `transactions` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deleteCallBackRequest($id)
{
    global $conn;
    $sql = "DELETE FROM `callbackrequest` WHERE id = '$id'";
    $res = $conn->query($sql);
    global $conn;
    if ($res === TRUE) {
        echo "Callback request deleted successfully", $res;
    } else {
        echo "Error: " . $conn->error;
    }
}
function getAllCallBackRequests($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM callbackrequest ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllMailListAccounts($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM maillist ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllSearchUrls($page, $perPage)
{
    global $conn;
    mysqli_set_charset($conn, "utf8mb4");
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM search ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getTotalAllSearchUrls()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM search ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalMailListAccounts()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM maillist ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}
function add_mailer($email, $title, $name)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `maillist`( `mail`, `title`, `name`,`created_at`,`updated_at`) VALUES ('$email','$title','$name','$now','$now')";
    echo ($sql . "dde");
    $res = $conn->query($sql);
    echo ("jfjvhbefvjhe" . $sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function all_search_urls($url, $ar_title, $en_title)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `search`( `url`, `ar_title`, `en_title`,`created_at`,`updated_at`) VALUES ('$url','$ar_title','$en_title','$now','$now')";
    echo ("sql=======" . $sql);
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}

function deleteallsearchurl($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `search` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function deletesearchurl($id, $page)
{
    global $conn;
    $table = 'search';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `search` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}



function deletealllandingusers($ids)
{
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `landingusers` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deletelandingusers($id, $page)
{
    global $conn;
    $table = 'landingusers';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `landingusers` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function getTotallandingusers($searchType, $searchValue)
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM landingusers WHERE 1=1";
    if (!empty($searchValue)) {
        $sql .= " AND $searchType LIKE '%" . $conn->real_escape_string($searchValue) . "%'";
    }
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return 0;
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}
function getAllLandingUsers($searchType, $searchValue, $perPage, $page)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM landingusers";
    $sql .= !empty($searchValue) ? " WHERE $searchType LIKE '%$searchValue%'" : "";
    $sql .= " ORDER BY id DESC";
    $sql .= " LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}



function getAllTechnicalAnalysis($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM technicalanalysis ";
    $end = ($offset + $perPage);
    $sql .= " LIMIT $offset,$end ";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function getAllFundamentalAnalysis($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM fundamental_analysis ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}

function getTotalfundamentalAnalysis()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM fundamental_analysis WHERE 1=1";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return 0;
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalTechnicalAnalysis()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM technicalanalysis WHERE 1=1";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return 0;
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}

function addTechnicalAnalysis($technicaltype, $title, $details, $technicalstatus, $arabic_title, $arabic_details, $russian_title, $russian_details)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `technicalanalysis`
            (`title`, `details`, `arabic_title`, `arabic_details`, `technicaltype`, `technicalstatus`,`russian_title`,`russian_details`,`created_at`, `updated_at`)
            VALUES ('$title', '$details', '$arabic_title', '$arabic_details', '$technicaltype', '$technicalstatus','$russian_title','$russian_details','$now', '$now')";
    echo "sql--" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}
function addFundamentalAnalysis($heading, $description, $fileToUpload)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `fundamental_analysis` (`heading`, `description`, `image`, `created_at`)
            VALUES ('$heading', '$description', '$fileToUpload', '$now')";
    echo "sql---" . $sql;


    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}


function updateTechnicalAnalysis($id, $technicaltype, $title, $details, $technicalstatus, $arabic_title, $arabic_details, $russian_title, $russian_details)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    echo "----------id-------";
    $sql = "UPDATE `technicalanalysis`
            SET
                title = '$title',
                details = '$details',
                arabic_title = '$arabic_title',
                arabic_details = '$arabic_details',
                technicaltype = '$technicaltype',
                technicalstatus = '$technicalstatus',
                russian_title = '$russian_title',
                russian_details = '$russian_details',
                updated_at = '$now'
            WHERE id = '$id'";

    echo "SQL Query: " . $sql; // Print the SQL query for debugging

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Technical analysis updated successfully";
    }

    return $res;
}

function deleteallmailer($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `maillist` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function deletemailer($id, $page)
{
    global $conn;
    $table = 'maillist';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `maillist` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deleteallsendmail($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `maillist` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function deletesendmail($id, $page)
{
    global $conn;
    $table = 'maillist';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `maillist` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deletealltechnicalanalysis($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `technicalanalysis` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function deletetechnicalanalysis($id, $page)
{
    global $conn;
    $table = 'technicalanalysis';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `technicalanalysis` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function updatetechnicalstatus($technicalStatus, $technicalId)
{
    global $conn;
    $newtechnicalStatus = $technicalStatus == '0' ? '1' : '0';
    $sql = "UPDATE technicalanalysis SET technicalstatus = '$newtechnicalStatus' WHERE id = '$technicalId'";
    print_r($sql);
    $res = $conn->query($sql);
    if ($res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function gettechnicalanalysis($id)
{
    global $conn;
    $sql = "SELECT * FROM technicalanalysis WHERE id = '$id'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
        return null;  // Return null in case of an error
    }

    $details = $res->fetch_assoc();
    echo json_encode($details);
}
function gettechnicalview($id)
{
    global $conn;
    $sql = "SELECT * FROM technicalanalysis WHERE id = '$id'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
        return null;  // Return null in case of an error
    }

    $details = $res->fetch_assoc();
    return $details;
}
function deleteallfundamentalanalysis($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `fundamental_analysis` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function deletefundamentalanalysis($id, $page)
{
    global $conn;
    $table = 'fundamental_analysis';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `fundamental_analysis` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function getfundamentalanalysis($id)
{
    global $conn;
    $sql = "SELECT * FROM fundamental_analysis WHERE id = '$id'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    // Fetch the details from the result set
    $details = $res->fetch_assoc();

    // Return the details as a JSON string
    echo json_encode($details);
}
function getfundamentalview($id)
{
    global $conn;
    $sql = "SELECT * FROM fundamental_analysis WHERE id = '$id'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }
    $details = $res->fetch_assoc();
    return $details;
}
function updateFundamentalAnalysis($id, $heading, $description, $targetFile)
{   
    if($targetFile=='null'){
        global $conn;
        $now = date('Y-m-d H:i:s');
        $sql = "UPDATE fundamental_analysis SET heading= '$heading',description = '$description' WHERE id='$id'";
        $res = $conn->query($sql);
        echo "sql===============", $sql;
        if (!$res) {
            echo "Error: " . $conn->error;
        }
        return $res;
    }else{
        global $conn;
        $now = date('Y-m-d H:i:s');
        $sql = "UPDATE fundamental_analysis SET heading= '$heading',description = '$description' ,image='$targetFile' WHERE id='$id'";
        $res = $conn->query($sql);
        echo "sql===============", $sql;
        if (!$res) {
            echo "Error: " . $conn->error;
        }
        return $res;
    }
    
}

function addoffers($offertype, $title, $details, $offerstatus, $arabic_title, $arabic_details, $targetFile, $russian_title, $russian_details)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `offers_events` (`offertype`, `title`, `details`,`offerstatus`,`arabic_title`,`arabic_details`,`image`,`russian_title`,`russian_details`,`created_at`,`updated_at`)
            VALUES ( '$offertype', '$title', '$details', '$offerstatus','$arabic_title','$arabic_details','$targetFile','$russian_title','$russian_details','$now','$now')";
    $res = $conn->query($sql);
    echo "sql===============", $sql;
    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;

}
function getAlloffers($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM offers_events ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}

function getnews($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM fundamental_analysis ";
    $end = ($offset + $perPage);
    $sql .= " LIMIT $offset,$end ";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function deletealloffers($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `offers_events` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function deleteoffers($id, $page)
{
    global $conn;
    $table = 'offers_events';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `offers_events` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function getoffersanalysis($id)
{
    global $conn;
    $sql = "SELECT * FROM offers_events WHERE id = '$id'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    // Fetch the details from the result set
    $details = $res->fetch_assoc();

    // Return the details as a JSON string
    echo json_encode($details);
}
function getoffersview($id)
{
    global $conn;
    $sql = "SELECT * FROM offers_events WHERE id = '$id'";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    $details = $res->fetch_assoc();
    return $details;
}
function updateoffers($id, $offertype, $title, $details, $offerstatus, $arabic_title, $arabic_details, $russian_title, $russian_details)
{
    global $conn;
    echo "arabicdetails======", $arabic_details;
    $now = date('Y-m-d H:i:s');

    $sql = "UPDATE `offers_events`
            SET `title` = '$title',
                `details` = '$details',
                `offertype` = '$offertype',
                `offerstatus` = '$offerstatus',
                `arabic_title` = '$arabic_title',
                `arabic_details` = '$arabic_details',
                `russian_title` = '$russian_title',
                `russian_details` = '$russian_details',
                `updated_at` = '$now'
            WHERE `id` = $id";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}
function updateofferstatus($offerStatus, $offerId)
{
    global $conn;
    $newofferStatus = $offerStatus == '0' ? '1' : '0';
    echo "newofferStatus==", $newofferStatus;
    $sql = "UPDATE offers_events SET offerstatus = '$newofferStatus' WHERE id = '$offerId'";
    echo "sql===", $sql;
    $res = $conn->query($sql);
    if ($res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function getTotalofferAnalysis()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM offers_events WHERE 1=1";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return 0;
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalcallbackreq()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM callbackrequest WHERE 1=1";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return 0;
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}
function getAllwebsiteAdmins($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM website_admins ";
    $end = ($offset + $perPage);
    $sql .= " LIMIT $offset,$end ";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}


function getTotaladmins()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM website_admins WHERE 1=1";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return 0;
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalcopytrade()
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM copy_trade";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error;
        return 0;
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}
function add_admins($name, $email, $hashedPassword, $roll)
{
    global $conn;
    $sql = "INSERT INTO website_admins(`name`, `email`, `password`, `roll`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $roll);
    $res = $stmt->execute();
    echo "sql--", $sql;
    if (!$res) {
        echo "Error: " . $stmt->error;
    }
    return $res;
}

function deletealladmin($ids)
{
    // Implement the code to delete the records with the given IDs
    // Use appropriate SQL statements and error handling
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id); // Sanitize the input
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `website_admins` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function deleteadmin($id, $page)
{
    global $conn;
    $table = 'offers_events';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `website_admins` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function getadmindetails($id)
{
    global $conn;
    $sql = "SELECT * FROM website_admins WHERE id = '$id'";
    $res = $conn->query($sql);

    if (!$res) {
        echo json_encode(['error' => 'Database error: ' . $conn->error]);
        return;
    }

    // Fetch the details from the result set
    $details = $res->fetch_assoc();

    // Return the details as a JSON string
    header('Content-Type: application/json');
    echo json_encode($details);
}
function updateadmin($id, $name, $email, $password, $roll)
{
    global $conn;
    $now = date('Y-m-d H:i:s');

    $sql = "UPDATE `website_admins`
            SET `name` = '$name',
                `email` = '$email',
                `password` = '$password',
                `roll` = '$roll'
            WHERE `id` = $id";

    $res = $conn->query($sql);
    echo "sql--", $sql;
    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}
function getlogindetails($id)
{
    global $conn;
    $sql = "SELECT * FROM website_admins WHERE id = '$id'";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        // Assuming you want to fetch the result as an associative array
        return $res->fetch_assoc();
    }
}
function adminpasswordupdate($id, $changepassword)
{
    global $conn;
    $sql = "UPDATE `website_admins`
       SET  `password` = '$changepassword'
    WHERE `id` = $id";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}
function getuserdetails($email)
{
    global $conn;
    $sql = "SELECT * FROM website_accounts WHERE email = '$email'";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        // Assuming you want to fetch the result as an associative array
        return $res->fetch_assoc();
    }
}


function userpasswordupdate($email, $changepassword)
{
    global $conn;
    $sql = "UPDATE `website_accounts`
       SET  `password` = '$changepassword'
    WHERE `email` = '$email'";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}
function enslidshow()
{
    global $conn;
    $sql = "SELECT * FROM en_slideshow";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error----: " . $conn->error;
    }

    return $res;
}
function updateslideshow($id, $img, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left)
{
    global $conn;
    $sql = "UPDATE en_slideshow SET

            `a1` = '$a1',
            `img`='$img',
            `a1_display` = '$a1_display',
            `a1_link` = '$a1_link',
            `a1_color` = '$a1_color',
            `a1_background` = '$a1_background',
            `a1_fontsize` = '$a1_fontsize',
            `a1_width` = '$a1_width',
            `a1_height` = '$a1_height',
            `a1_top` = '$a1_top',
            `a1_left` = '$a1_left',
            `t` = '$t',
            `t_display` = '$t_display',
            `t_link` = '$t_link',
            `t_color` = '$t_color',
            `t_background` = '$t_background',
            `t_fontsize` = '$t_fontsize',
            `t_width` = '$t_width',
            `t_height` = '$t_height',
            `t_top` = '$t_top',
            `t_left` = '$t_left',
            `d1` = '$d1',
            `d1_display` = '$d1_display',
            `d1_link` = '$d1_link',
            `d1_color` = '$d1_color',
            `d1_background` = '$d1_background',
            `d1_fontsize` = '$d1_fontsize',
            `d1_width` = '$d1_width',
            `d1_height` = '$d1_height',
            `d1_top` = '$d1_top',
            `d1_left` = '$d1_left',
            `d2` = '$d2',
            `d2_display` = '$d2_display',
            `d2_link` = '$d2_link',
            `d2_color` = '$d2_color',
            `d2_background` = '$d2_background',
            `d2_fontsize` = '$d2_fontsize',
            `d2_width` = '$d2_width',
            `d2_height` = '$d2_height',
            `d2_top` = '$d2_top',
            `d2_left` = '$d2_left',
            `d3` = '$d3',
            `d3_display` = '$d3_display',
            `d3_link` = '$d3_link',
            `d3_color` = '$d3_color',
            `d3_background` = '$d3_background',
            `d3_fontsize` = '$d3_fontsize',
            `d3_width` = '$d3_width',
            `d3_height` = '$d3_height',
            `d3_top` = '$d3_top',
            `d3_left` = '$d3_left',
            `d4` = '$d4',
            `d4_display` = '$d4_display',
            `d4_link` = '$d4_link',
            `d4_color` = '$d4_color',
            `d4_background` = '$d4_background',
            `d4_fontsize` = '$d4_fontsize',
            `d4_width` = '$d4_width',
            `d4_height` = '$d4_height',
            `d4_top` = '$d4_top',
            `d4_left` = '$d4_left',
            `d5` = '$d5',
            `d5_display` = '$d5_display',
            `d5_link` = '$d5_link',
            `d5_color` = '$d5_color',
            `d5_background` = '$d5_background',
            `d5_fontsize` = '$d5_fontsize',
            `d5_width` = '$d5_width',
            `d5_height` = '$d5_height',
            `d5_top` = '$d5_top',
            `d5_left` = '$d5_left',
            `btn` = '$btn',
            `btn_display` = '$btn_display',
            `btn_link` = '$btn_link',
            `btn_color` = '$btn_color',
            `btn_background` = '$btn_background',
            `btn_fontsize` = '$btn_fontsize',
            `btn_width` = '$btn_width',
            `btn_height` = '$btn_height',
            `btn_top` = '$btn_top',
            `btn_left` = '$btn_left'
            WHERE `id` = '$id' ";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error----: " . $conn->error;
    }

    return $res;
}
function add_en_slideshow($slide, $slide_display, $targetFile, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left)
{
    global $conn;

    $sql = "INSERT INTO en_slideshow (
         slide,slide_display,img, a1, a1_display, a1_link, a1_color, a1_background, a1_fontsize, a1_width, a1_height, a1_top, a1_left,
        t, t_display, t_link, t_color, t_background, t_fontsize, t_width, t_height, t_top, t_left,
        d1, d1_display, d1_link, d1_color, d1_background, d1_fontsize, d1_width, d1_height, d1_top, d1_left,
        d2, d2_display, d2_link, d2_color, d2_background, d2_fontsize, d2_width, d2_height, d2_top, d2_left,
        d3, d3_display, d3_link, d3_color, d3_background, d3_fontsize, d3_width, d3_height, d3_top, d3_left,
        d4, d4_display, d4_link, d4_color, d4_background, d4_fontsize, d4_width, d4_height, d4_top, d4_left,
        d5, d5_display, d5_link, d5_color, d5_background, d5_fontsize, d5_width, d5_height, d5_top, d5_left,
        btn, btn_display, btn_link, btn_color, btn_background, btn_fontsize, btn_width, btn_height, btn_top, btn_left
    ) VALUES (
         '$slide','$slide_display','$targetFile', '$a1', '$a1_display', '$a1_link', '$a1_color', '$a1_background', '$a1_fontsize', '$a1_width', '$a1_height', '$a1_top', '$a1_left',
        '$t', '$t_display', '$t_link', '$t_color', '$t_background', '$t_fontsize', '$t_width', '$t_height', '$t_top', '$t_left',
        '$d1', '$d1_display', '$d1_link', '$d1_color', '$d1_background', '$d1_fontsize', '$d1_width', '$d1_height', '$d1_top', '$d1_left',
        '$d2', '$d2_display', '$d2_link', '$d2_color', '$d2_background', '$d2_fontsize', '$d2_width', '$d2_height', '$d2_top', '$d2_left',
        '$d3', '$d3_display', '$d3_link', '$d3_color', '$d3_background', '$d3_fontsize', '$d3_width', '$d3_height', '$d3_top', '$d3_left',
        '$d4', '$d4_display', '$d4_link', '$d4_color', '$d4_background', '$d4_fontsize', '$d4_width', '$d4_height', '$d4_top', '$d4_left',
        '$d5', '$d5_display', '$d5_link', '$d5_color', '$d5_background', '$d5_fontsize', '$d5_width', '$d5_height', '$d5_top', '$d5_left',
        '$btn', '$btn_display', '$btn_link', '$btn_color', '$btn_background', '$btn_fontsize', '$btn_width', '$btn_height', '$btn_top', '$btn_left'
    )";
    $res = $conn->query($sql);
    if (!$res) {
        echo "--Error----: " . $conn->error;
    }
    return $res;
}
function add_ru_slideshow($slide, $slide_display, $targetFile, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left)
{
    global $conn;

    $sql = "INSERT INTO ru_slideshow (
         slide,slide_display,img, a1, a1_display, a1_link, a1_color, a1_background, a1_fontsize, a1_width, a1_height, a1_top, a1_left,
        t, t_display, t_link, t_color, t_background, t_fontsize, t_width, t_height, t_top, t_left,
        d1, d1_display, d1_link, d1_color, d1_background, d1_fontsize, d1_width, d1_height, d1_top, d1_left,
        d2, d2_display, d2_link, d2_color, d2_background, d2_fontsize, d2_width, d2_height, d2_top, d2_left,
        d3, d3_display, d3_link, d3_color, d3_background, d3_fontsize, d3_width, d3_height, d3_top, d3_left,
        d4, d4_display, d4_link, d4_color, d4_background, d4_fontsize, d4_width, d4_height, d4_top, d4_left,
        d5, d5_display, d5_link, d5_color, d5_background, d5_fontsize, d5_width, d5_height, d5_top, d5_left,
        btn, btn_display, btn_link, btn_color, btn_background, btn_fontsize, btn_width, btn_height, btn_top, btn_left
    ) VALUES (
         '$slide','$slide_display','$targetFile', '$a1', '$a1_display', '$a1_link', '$a1_color', '$a1_background', '$a1_fontsize', '$a1_width', '$a1_height', '$a1_top', '$a1_left',
        '$t', '$t_display', '$t_link', '$t_color', '$t_background', '$t_fontsize', '$t_width', '$t_height', '$t_top', '$t_left',
        '$d1', '$d1_display', '$d1_link', '$d1_color', '$d1_background', '$d1_fontsize', '$d1_width', '$d1_height', '$d1_top', '$d1_left',
        '$d2', '$d2_display', '$d2_link', '$d2_color', '$d2_background', '$d2_fontsize', '$d2_width', '$d2_height', '$d2_top', '$d2_left',
        '$d3', '$d3_display', '$d3_link', '$d3_color', '$d3_background', '$d3_fontsize', '$d3_width', '$d3_height', '$d3_top', '$d3_left',
        '$d4', '$d4_display', '$d4_link', '$d4_color', '$d4_background', '$d4_fontsize', '$d4_width', '$d4_height', '$d4_top', '$d4_left',
        '$d5', '$d5_display', '$d5_link', '$d5_color', '$d5_background', '$d5_fontsize', '$d5_width', '$d5_height', '$d5_top', '$d5_left',
        '$btn', '$btn_display', '$btn_link', '$btn_color', '$btn_background', '$btn_fontsize', '$btn_width', '$btn_height', '$btn_top', '$btn_left'
    )";
    $res = $conn->query($sql);
    if (!$res) {
        echo "--Error----: " . $conn->error;
    }
    return $res;
}
function ruslidshow()
{
    global $conn;
    $sql = "SELECT * FROM ru_slideshow";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error----: " . $conn->error;
    }

    return $res;
}
function arslidshow()
{
    global $conn;
    $sql = "SELECT * FROM ar_slideshow";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error----: " . $conn->error;
    }

    return $res;
}
function updateruslideshow($id, $img, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left)
{
    global $conn;
    $sql = "UPDATE ru_slideshow SET

            `a1` = '$a1',
            `img`='$img',
            `a1_display` = '$a1_display',
            `a1_link` = '$a1_link',
            `a1_color` = '$a1_color',
            `a1_background` = '$a1_background',
            `a1_fontsize` = '$a1_fontsize',
            `a1_width` = '$a1_width',
            `a1_height` = '$a1_height',
            `a1_top` = '$a1_top',
            `a1_left` = '$a1_left',
            `t` = '$t',
            `t_display` = '$t_display',
            `t_link` = '$t_link',
            `t_color` = '$t_color',
            `t_background` = '$t_background',
            `t_fontsize` = '$t_fontsize',
            `t_width` = '$t_width',
            `t_height` = '$t_height',
            `t_top` = '$t_top',
            `t_left` = '$t_left',
            `d1` = '$d1',
            `d1_display` = '$d1_display',
            `d1_link` = '$d1_link',
            `d1_color` = '$d1_color',
            `d1_background` = '$d1_background',
            `d1_fontsize` = '$d1_fontsize',
            `d1_width` = '$d1_width',
            `d1_height` = '$d1_height',
            `d1_top` = '$d1_top',
            `d1_left` = '$d1_left',
            `d2` = '$d2',
            `d2_display` = '$d2_display',
            `d2_link` = '$d2_link',
            `d2_color` = '$d2_color',
            `d2_background` = '$d2_background',
            `d2_fontsize` = '$d2_fontsize',
            `d2_width` = '$d2_width',
            `d2_height` = '$d2_height',
            `d2_top` = '$d2_top',
            `d2_left` = '$d2_left',
            `d3` = '$d3',
            `d3_display` = '$d3_display',
            `d3_link` = '$d3_link',
            `d3_color` = '$d3_color',
            `d3_background` = '$d3_background',
            `d3_fontsize` = '$d3_fontsize',
            `d3_width` = '$d3_width',
            `d3_height` = '$d3_height',
            `d3_top` = '$d3_top',
            `d3_left` = '$d3_left',
            `d4` = '$d4',
            `d4_display` = '$d4_display',
            `d4_link` = '$d4_link',
            `d4_color` = '$d4_color',
            `d4_background` = '$d4_background',
            `d4_fontsize` = '$d4_fontsize',
            `d4_width` = '$d4_width',
            `d4_height` = '$d4_height',
            `d4_top` = '$d4_top',
            `d4_left` = '$d4_left',
            `d5` = '$d5',
            `d5_display` = '$d5_display',
            `d5_link` = '$d5_link',
            `d5_color` = '$d5_color',
            `d5_background` = '$d5_background',
            `d5_fontsize` = '$d5_fontsize',
            `d5_width` = '$d5_width',
            `d5_height` = '$d5_height',
            `d5_top` = '$d5_top',
            `d5_left` = '$d5_left',
            `btn` = '$btn',
            `btn_display` = '$btn_display',
            `btn_link` = '$btn_link',
            `btn_color` = '$btn_color',
            `btn_background` = '$btn_background',
            `btn_fontsize` = '$btn_fontsize',
            `btn_width` = '$btn_width',
            `btn_height` = '$btn_height',
            `btn_top` = '$btn_top',
            `btn_left` = '$btn_left'
            WHERE `id` = '$id' ";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error----: " . $conn->error;
    }

    return $res;
}
function add_ar_slideshow($slide, $slide_display, $targetFile, $a1, $a1_display, $a1_link, $a1_color, $a1_background, $a1_fontsize, $a1_width, $a1_height, $a1_top, $a1_left, $t, $t_display, $t_link, $t_color, $t_background, $t_fontsize, $t_width, $t_height, $t_top, $t_left, $d1, $d1_display, $d1_link, $d1_color, $d1_background, $d1_fontsize, $d1_width, $d1_height, $d1_top, $d1_left, $d2, $d2_display, $d2_link, $d2_color, $d2_background, $d2_fontsize, $d2_width, $d2_height, $d2_top, $d2_left, $d3, $d3_display, $d3_link, $d3_color, $d3_background, $d3_fontsize, $d3_width, $d3_height, $d3_top, $d3_left, $d4, $d4_display, $d4_link, $d4_color, $d4_background, $d4_fontsize, $d4_width, $d4_height, $d4_top, $d4_left, $d5, $d5_display, $d5_link, $d5_color, $d5_background, $d5_fontsize, $d5_width, $d5_height, $d5_top, $d5_left, $btn, $btn_display, $btn_link, $btn_color, $btn_background, $btn_fontsize, $btn_width, $btn_height, $btn_top, $btn_left)
{
    global $conn;

    $sql = "INSERT INTO ar_slideshow (
         slide,slide_display,img, a1, a1_display, a1_link, a1_color, a1_background, a1_fontsize, a1_width, a1_height, a1_top, a1_left,
        t, t_display, t_link, t_color, t_background, t_fontsize, t_width, t_height, t_top, t_left,
        d1, d1_display, d1_link, d1_color, d1_background, d1_fontsize, d1_width, d1_height, d1_top, d1_left,
        d2, d2_display, d2_link, d2_color, d2_background, d2_fontsize, d2_width, d2_height, d2_top, d2_left,
        d3, d3_display, d3_link, d3_color, d3_background, d3_fontsize, d3_width, d3_height, d3_top, d3_left,
        d4, d4_display, d4_link, d4_color, d4_background, d4_fontsize, d4_width, d4_height, d4_top, d4_left,
        d5, d5_display, d5_link, d5_color, d5_background, d5_fontsize, d5_width, d5_height, d5_top, d5_left,
        btn, btn_display, btn_link, btn_color, btn_background, btn_fontsize, btn_width, btn_height, btn_top, btn_left
    ) VALUES (
         '$slide','$slide_display','$targetFile', '$a1', '$a1_display', '$a1_link', '$a1_color', '$a1_background', '$a1_fontsize', '$a1_width', '$a1_height', '$a1_top', '$a1_left',
        '$t', '$t_display', '$t_link', '$t_color', '$t_background', '$t_fontsize', '$t_width', '$t_height', '$t_top', '$t_left',
        '$d1', '$d1_display', '$d1_link', '$d1_color', '$d1_background', '$d1_fontsize', '$d1_width', '$d1_height', '$d1_top', '$d1_left',
        '$d2', '$d2_display', '$d2_link', '$d2_color', '$d2_background', '$d2_fontsize', '$d2_width', '$d2_height', '$d2_top', '$d2_left',
        '$d3', '$d3_display', '$d3_link', '$d3_color', '$d3_background', '$d3_fontsize', '$d3_width', '$d3_height', '$d3_top', '$d3_left',
        '$d4', '$d4_display', '$d4_link', '$d4_color', '$d4_background', '$d4_fontsize', '$d4_width', '$d4_height', '$d4_top', '$d4_left',
        '$d5', '$d5_display', '$d5_link', '$d5_color', '$d5_background', '$d5_fontsize', '$d5_width', '$d5_height', '$d5_top', '$d5_left',
        '$btn', '$btn_display', '$btn_link', '$btn_color', '$btn_background', '$btn_fontsize', '$btn_width', '$btn_height', '$btn_top', '$btn_left'
    )";
    $res = $conn->query($sql);
    if (!$res) {
        echo "--Error----: " . $conn->error;
    }
    return $res;
}
function update_status($id, $status, $details_user)
{
    global $conn;
    // Using prepared statements to prevent SQL injection
    $sql = "UPDATE transactions SET status=?, details_user=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("isi", $status, $details_user, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $sql="SELECT * FROM transactions WHERE id = $id";
            $response = $conn->query($sql);
            if (!$response) {
                $now = date('Y-m-d H:i:s');
                $sql = "INSERT INTO `notifications`
                (`website_accounts_id`, `notification_status`, `notification`, `details`, `notification_ar`, `details_ar`,`notification_ru`,`details_ru`,`notification_link`, `created_at`)
                VALUES ('$response[website_accounts_id], '0', 'Your Deposit $response[amount] USD Has Been Done Successfully', 'Your Deposit $response[amount] USD Has Been Done Successfully','تم ايداع مبلغ $response[amount] بنجاح تم حذف المستند بجاح','Ваш депозит $response[amount] долларов США был успешно внесен','Ваш депозит $response[amount] долларов США был успешно внесен','/cpanel/transactional-history', '$now')";
                echo "sqll" . $sql;
                $res = $conn->query($sql);
            echo "Update successful.";
            }
        } else {
            echo "Update failed.";
        }

        $stmt->close();
    } else {
        echo "Error in prepared statement: " . $conn->error;
    }
}
function update_rej_status($id, $status, $details_user)
{
    global $conn;
    // Using prepared statements to prevent SQL injection
    $sql = "UPDATE transactions SET status=?, details_user=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("isi", $status, $details_user, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $sql="SELECT * FROM transactions WHERE id = $id";
            $response = $conn->query($sql);
            if (!$response) {
                $now = date('Y-m-d H:i:s');
                $sql = "INSERT INTO `notifications`
                (`website_accounts_id`, `notification_status`, `notification`, `details`, `notification_ar`, `details_ar`,`notification_ru`,`details_ru`,`notification_link`, `created_at`)
                VALUES ('$response[website_accounts_id], '0', 'Your Deposit $response[amount] USD Has Been Done Successfully', 'Your Deposit $response[amount] USD Has Been Done Successfully','تم ايداع مبلغ $response[amount] بنجاح تم حذف المستند بجاح','Ваш депозит $response[amount] долларов США был успешно внесен','Ваш депозит $response[amount] долларов США был успешно внесен','/cpanel/transactional-history', '$now')";
                echo "sqll" . $sql;
                $res = $conn->query($sql);
            echo "Update successful.";
            }
        } else {
            echo "Update failed.";
        }

        $stmt->close();
    } else {
        echo "Error in prepared statement: " . $conn->error;
    }
}
function getAllMailListCount()
{
    global $conn;
    $sql = "SELECT COUNT(*) as count FROM maillist";
    $res = $conn->query($sql);

    if ($res) {
        $row = $res->fetch_assoc();
        return $row['count'];
    } else {
        return 0; // or handle the error in a way that makes sense for your application
    }
}

function getAllMail()
{
    global $conn;
    $query = "SELECT mail, name, title FROM maillist";
    $result = $conn->query($query);

    $emails = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $emails[] = $row;
    }
    return $emails;
}

function deletedocument($ids, $webid)
{
    global $conn;
    // $sanitizedIds = array_map([$conn, 'real_escape_string'], $ids);
    // $idString = implode(',', $sanitizedIds);
    $now = date('Y-m-d H:i:s');
    $sql = "DELETE FROM documents WHERE id IN ($ids)";
    echo "sql---" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "--Error----: " . $conn->error;
    } else {
        $sql = "INSERT INTO `notifications`
        (`website_accounts_id`, `notification_status`, `notification`, `notification_ar`, `details`, `details_ar`,`notification_ru`,`details_ru`,`notification_link`, `created_at`)
        VALUES ('$webid', '0', 'Your Document Has Been Deleted Successfully', 'تم حذف المستند بجاح', 'Your Document Has Been Deleted', 'تم حذف المستند بجاح','Ваш документ успешно удален','Ваш документ успешно удален','/cpanel/upload-documents', '$now')";
        echo "sqll" . $sql;
        $res = $conn->query($sql);
        return $res;
    }
}
function getDocumentContent($id)
{
    global $conn; // Assuming $conn is your database connection

    // Sanitize and validate the ID to prevent SQL injection
    $sanitizedId = $conn->real_escape_string($id);

    // Prepare and execute the SQL query to fetch the document content
    $sql = "SELECT document FROM documents WHERE id = '$sanitizedId'";
    $result = $conn->query($sql);

    if ($result) {
        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Fetch the document content
            $row = $result->fetch_assoc();
            $documentContent = $row['documents'];

            // Free the result set
            $result->free_result();

            return $documentContent;
        } else {
            // No document found with the given ID
            return false;
        }
    } else {
        // Handle the case where the query fails
        echo "Error: " . $conn->error;
        return false;
    }
}
function getAlldocuments($page = 1, $limit = 10)
{
    global $conn;
    $offset = ($page - 1) * $limit;
    $sql = "SELECT * FROM documents ORDER BY id DESC LIMIT $offset, $limit";
    $res = $conn->query($sql);
    return $res;
}
function getTotalDocumentCount()
{
    global $conn;
    $sql = "SELECT COUNT(*) AS count FROM documents";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    return $row['count'];
}
function updatedocument($id, $status, $webid)
{
    global $conn;
    $sql = "UPDATE documents SET status = '$status' WHERE id = '$id'";
    $res = $conn->query($sql);

    // Check if the query was successful
    if ($res) {
        $now = date('Y-m-d H:i:s');
        // Return a success message
        $sqlnot = "INSERT INTO `notifications`(`website_accounts_id`, `notification_status`, `notification`,`details`,`notification_ar`,`details_ar`,`notification_ru`,`details_ru`,`notification_link`,`created_at`) VALUES ('$webid','0','Your Pending Document Has Been Approved Successfully','Your Pending Document Has Been Approved','تم قبول المستند بجاح','تم قبول المستند بجاح','Ваш ожидающий рассмотрения документ был успешно одобрен','Ваш ожидающий рассмотрения документ был успешно одобрен','/cpanel/upload-documents','$now')";
        $res = $conn->query($sqlnot);
        if ($res) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('error' => $conn->error));
        }
    } else {
        // Return an error message
        echo json_encode(array('error' => $conn->error));
    }
}

function emailQueueOld()
{
    global $conn;
    $processingInterval = 5;

    while (true) {
        try {
            // Fetch send_mail records
            $fetchEmailsSql = "SELECT * FROM send_mail WHERE status = 'queued' LIMIT 1";
            $fetchEmailsStmt = $conn->prepare($fetchEmailsSql);
            $fetchEmailsStmt->execute();
            $sendMailResult = $fetchEmailsStmt->get_result();

            if ($sendMailRow = $sendMailResult->fetch_assoc()) {
                // Process the email queue as before
                $sendMailId = $sendMailRow['id'];
                $everySecond = $sendMailRow['every_second'];
                $sendCount = $sendMailRow['send_count'];
                $subject = $sendMailRow['subject'];
                $body = $sendMailRow['body'];

                // Fetch emails from emails_queue based on send_mail_id
                $fetchEmailsSql = "SELECT email_address FROM emails_queue WHERE queue_id = ?";
                $fetchEmailsStmt = $conn->prepare($fetchEmailsSql);
                $fetchEmailsStmt->bind_param("i", $sendMailId);
                $fetchEmailsStmt->execute();
                $emailsResult = $fetchEmailsStmt->get_result();

                while ($emailRow = $emailsResult->fetch_assoc()) {
                    $emailAddress[] = $emailRow['email_address'];
                }

                require_once '../vendor/autoload.php';
                $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
                $transport->setUsername('marketing@jmibrokers.com');
                $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');

                $mailer = new Swift_Mailer($transport);
                $emailBatches = array_chunk($emailAddress, $sendCount);

                foreach ($emailBatches as $batch) {
                    // Iterate through each email address in the batch
                    foreach ($batch as $to) {
                        // Create a message for each recipient
                        $message = (new Swift_Message(''))
                            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
                            ->setTo($to)
                            ->setBody($body, 'text/html')
                            ->setSubject($subject);
                        // Send the email and check for success
                        $mailSent = $mailer->send($message);
                        // Output success or error message for each email
                        echo $mailSent ? "Email sent successfully to $to.<br>" : "Error sending email to $to.<br>";
                    }

                    // Sleep for the specified interval between batches
                    sleep($everySecond);
                }

                // Update status to 'sent' in send_mail table
                $updateStatusSql = "UPDATE send_mail SET status = 'sent' WHERE id = ?";
                $updateStatusStmt = $conn->prepare($updateStatusSql);
                $updateStatusStmt->bind_param("i", $sendMailId);
                $updateStatusStmt->execute();
            } else {
                echo "No queued emails found.\n";
                // Sleep before the next iteration
                sleep($processingInterval);
                break;
            }
        } catch (Exception $e) {
            echo "Error processing email queue: {$e->getMessage()}\n";
        }
    }
}

function emailQueue()
{
    global $conn;
    $processingInterval = 5;

    while (true) {
        try {
            // Fetch send_mail records
            $fetchEmailsSql = "SELECT * FROM send_mail WHERE status = 'queued' LIMIT 1";
            $fetchEmailsStmt = $conn->prepare($fetchEmailsSql);
            $fetchEmailsStmt->execute();
            $sendMailResult = $fetchEmailsStmt->get_result();

            if ($sendMailRow = $sendMailResult->fetch_assoc()) {
                // Process the email queue as before
                $sendMailId = $sendMailRow['id'];
                $everySecond = $sendMailRow['every_second'];
                $sendCount = $sendMailRow['send_count'];
                $subject = $sendMailRow['subject'];
                $body = $sendMailRow['body'];

                // Fetch emails from emails_queue based on send_mail_id
                $fetchEmailsSql = "SELECT email_address,name,title FROM emails_queue WHERE queue_id = ?";
                $fetchEmailsStmt = $conn->prepare($fetchEmailsSql);
                $fetchEmailsStmt->bind_param("i", $sendMailId);
                $fetchEmailsStmt->execute();
                $emailsResult = $fetchEmailsStmt->get_result();

                while ($emailRow = $emailsResult->fetch_assoc()) {
                    $emailAddress[] = $emailRow['email_address'];
                    $name[] = $emailRow['name'];
                    $titleIndex = $emailRow['title'];
                    $titles = ['Mr', 'Mrs', 'Miss'];

                    // Use the indexed title or default to an empty string if not found
                    $titleString[]= $titles[$titleIndex] ?? '';
                    
                
                
                }
                require_once '../vendor/autoload.php';
                $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
                $transport->setUsername('marketing@jmibrokers.com');
                $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');

                $mailer = new Swift_Mailer($transport);
                $emailBatches = array_chunk($emailAddress, $sendCount);

                foreach ($emailBatches as $batch) {
                    // Iterate through each email address in the batch
                    foreach ($batch as $index => $to) {
                        // Use the corresponding index for name and title
                        $nameToSend = $name[$index] ?? '';

                        $titleToSend = $titleString[$index] ?? '';
                        $sendBody='<!DOCTYPE html>
                <html lang="en">
                
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    
                </head>
                <body>
                    <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
                        <div>
                            <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
                        </div>
                        <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
                        <div style="padding: 0 5% 0 5% ;">
                            <h2 style="color:#07348f;">Hello <span>' .$titleToSend.'.'.$nameToSend.'</span></h2>

                            <p>' . $body . '</p>
                
                            <h3 style="color:#07348f;">FOR ANY HELP</h3>
                            <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                                or call us on: +971 44096705</p>
                
                            <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
                
                            <div class="display:flex;">
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                            </div>
                
                            <h3 style="color:#07348f;">PAYMENT METHODS</h3>
                
                            <div class="display:flex;">
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                                <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                            </div>
                
                            <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                                <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                            </a>
                
                            <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
                        </div>
                        <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                            <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                            <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
                        </div>
                    </div>
                </body>
                </html>';
                        $message = (new Swift_Message(''))
                            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
                            ->setTo($to)
                            ->setBody($sendBody, 'text/html')
                            ->setSubject($subject);
                        // Send the email and check for success
                        $mailSent = $mailer->send($message);
                        // Output success or error message for each email
                        echo $mailSent ? "Email sent successfully to $to.<br>" : "Error sending email to $to.<br>";
                    }

                    // Sleep for the specified interval between batches
                    sleep($everySecond);
                }

                // Update status to 'sent' in send_mail table
                $updateStatusSql = "UPDATE send_mail SET status = 'sent' WHERE id = ?";
                $updateStatusStmt = $conn->prepare($updateStatusSql);
                $updateStatusStmt->bind_param("i", $sendMailId);
                $updateStatusStmt->execute();
            } else {
                echo "No queued emails found.\n";
                // Sleep before the next iteration
                sleep($processingInterval);
                break;
            }
        } catch (Exception $e) {
            echo "Error processing email queue: {$e->getMessage()}\n";
        }
    }
}
function getAllPackages($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM package LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllRuPackages($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM ru_package LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllArPackages($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM ar_package LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getpackageDetail($id)
{
    global $conn;
    $sql = "SELECT * FROM package WHERE id = '$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getRupackageDetail($id)
{
    global $conn;
    $sql = "SELECT * FROM ru_package WHERE id = '$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function getArpackageDetail($id)
{
    global $conn;
    $sql = "SELECT * FROM ar_package WHERE id = '$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
function add_package($name, $price, $discount_line, $tag_line, $description)
{
    global $conn;

    $sql = "INSERT INTO `package`( `name`, `price`, `discount_line`,`tag_line`,`description`) VALUES ('$name','$price','$discount_line','$tag_line','$description')";
    echo "sql" . $sql;
    $res = $conn->query($sql);
    return $res;
}
function add_ru_package($name, $price, $discount_line, $tag_line, $description)
{
    global $conn;

    $sql = "INSERT INTO `ru_package`( `name`, `price`, `discount_line`,`tag_line`,`description`) VALUES ('$name','$price','$discount_line','$tag_line','$description')";
    echo "sql" . $sql;
    $res = $conn->query($sql);
    return $res;
}
function add_ar_package($name, $price, $discount_line, $tag_line, $description)
{
    global $conn;

    $sql = "INSERT INTO `ar_package`( `name`, `price`, `discount_line`,`tag_line`,`description`) VALUES ('$name','$price','$discount_line','$tag_line','$description')";
    echo "sql" . $sql;
    $res = $conn->query($sql);
    return $res;
}
function update_package($id, $name, $price, $discount_line, $tag_line, $description)
{
    global $conn;
    $sql = "UPDATE package SET name = '$name' , price = '$price' , discount_line='$discount_line',tag_line='$tag_line',description='$description'   WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}
function update_ru_package($id, $name, $price, $discount_line, $tag_line, $description)
{
    global $conn;
    $sql = "UPDATE ru_package SET name = '$name' , price = '$price' , discount_line='$discount_line',tag_line='$tag_line',description='$description'   WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}
function update_ar_package($id, $name, $price, $discount_line, $tag_line, $description)
{
    global $conn;
    $sql = "UPDATE ar_package SET name = '$name' , price = '$price' , discount_line='$discount_line',tag_line='$tag_line',description='$description'   WHERE id = '$id'";
    $res = $conn->query($sql);
    return $res;
}
function getTotalNews()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM news ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalpackage()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM package ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getRuTotalpackage()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM ru_package ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getArTotalpackage()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM ar_package ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function deletepackages($ids, $page)
{
    global $conn;
    $table = 'package';
    $id_column = 'id';
    $page_column = 'page';

    // Sanitize the input
    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    // Convert the array of IDs to a comma-separated string
    $idList = implode(',', $ids);

    // Use the IN clause to match multiple IDs
    $sql = "DELETE FROM `$table` WHERE `$id_column` IN ($idList)";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function getAllbecomeourpartner($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM becomepartner ORDER BY id DESC LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getTotalbecomepartner()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM becomepartner ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
// function getTotalfundamentalAnalysis()
// {
//     global $conn;

//     $sql = "SELECT COUNT(*) as total FROM becomepartner ";
//     $result = $conn->query($sql);

//     $row = $result->fetch_assoc();
//     return $row['total'];
// }
function deletebecomepartner($ids, $page)
{
    global $conn;
    $table = 'becomepartner';
    $id_column = 'id';
    $page_column = 'page';

    // Sanitize the input
    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    // Convert the array of IDs to a comma-separated string
    $idList = implode(',', $ids);

    // Use the IN clause to match multiple IDs
    $sql = "DELETE FROM `$table` WHERE `$id_column` IN ($idList)";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
    }
}
function getAllUserinfo()
{
    global $conn, $currentuserid;

    $sql = "SELECT * FROM website_accounts";
    $res = $conn->query($sql);
    while ($row = $res->fetch_assoc()) {
        return $row;
    }
}

function approvetrade($id, $status)
{
    global $conn;
    $sql = "UPDATE copy_trade SET status = '$status' WHERE id = '$id'";
    $res = $conn->query($sql);

    // Check if the query was successful
    if ($res) {
        // Return a success message
        echo json_encode(array('success' => true));
    } else {
        // Return an error message
        echo json_encode(array('error' => $conn->error));
    }
}
// function getAllcopytrade($page, $perPage,$sort)
// {
//     global $conn;
//     $offset = ($page - 1) * $perPage;
    
//     $sql = "SELECT * FROM copy_trade ORDER BY id DESC";
//     if($sort!="desc")
//         $sql = "SELECT * FROM copy_trade ORDER BY id ASC";
//     $end = ($offset + $perPage);
//     $sql .= " LIMIT $offset,$end ";
//     $res = $conn->query($sql);
//     if (!$res) {
//         echo "Error: " . $conn->error;
//     }
//     return $res;
// }

function getAllcopytrade($page, $perPage, $sort)
{
    global $conn;
    $offset = ($page - 1) * $perPage;

    $sql = "SELECT * FROM copy_trade";

    // Add ORDER BY clause
    $sql .= " ORDER BY id " . ($sort == "desc" ? "DESC" : "ASC");

    // Add LIMIT clause
    $sql .= " LIMIT $offset, $perPage";

    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
}


function deletetrade($id)
{
    global $conn;

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM copy_trade WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
        // Record not found
        echo json_encode(array('error' => 'Record not found'));
        return;
    }

    $status = $row['status'];

    if ($status == 9) {
        // Record already has status 9, proceed with deletion
        $stmt = $conn->prepare("DELETE FROM copy_trade WHERE id = ?");
    } else if ($status == 1) {
        // Soft delete by updating status to 8
        $stmt = $conn->prepare("UPDATE copy_trade SET status = 8 WHERE id = ?");
    } else {
        // Soft delete by updating status to 9
        $stmt = $conn->prepare("UPDATE copy_trade SET status = 9 WHERE id = ?");
    }

    $stmt->bind_param("i", $id);
    $res = $stmt->execute();

    if ($res) {
        // Return a success message
        echo json_encode(array('success' => true));
    } else {
        // Return an error message
        echo json_encode(array('error' => $stmt->error));
    }

    $stmt->close();
}
function deletesingleliveaccount($ids)
{
    global $conn;
    try {
        // Sanitize and validate the input

        $sql = "DELETE FROM fx_accounts WHERE id IN ($ids)";
        echo $sql . "sql---";
        $res = $conn->query($sql);

        if (!$res) {
            throw new Exception($conn->error);
        }

        $response = 'success';
    } catch (Exception $e) {
        $response = 'error: ' . $e->getMessage();
    }

    // Return the response as plain text
    echo $response;
}
function deletesingledemoaccount($ids)
{
    global $conn;
    try {
        // Sanitize and validate the input

        $sql = "DELETE FROM fx_accounts WHERE id IN ($ids)";
        echo $sql . "sql---";
        $res = $conn->query($sql);

        if (!$res) {
            throw new Exception($conn->error);
        }

        $response = 'success';
    } catch (Exception $e) {
        $response = 'error: ' . $e->getMessage();
    }

    // Return the response as plain text
    echo $response;
}
function deletesinglewebsiteaccount($ids)
{
    global $conn;
    try {
        // Sanitize and validate the input

        $sql = "DELETE FROM website_accounts WHERE id IN ($ids)";
        $res = $conn->query($sql);

        if (!$res) {
            throw new Exception($conn->error);
        }

        $response = 'success';
    } catch (Exception $e) {
        $response = 'error: ' . $e->getMessage();
    }

    // Return the response as plain text
    echo $response;
}
function getWebsiteAccountsForReferral()
{
    global $conn;
    $sql = "SELECT *
    FROM website_accounts
    WHERE invited_by = id + 10000
    ORDER BY id DESC;
    ";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function ref_accounts($ref)
{
    global $conn;
    $sql = "SELECT * FROM website_accounts WHERE invited_by = $ref";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}

function live_accounts()
{
    global $conn;
    $sql = "SELECT * FROM Fx_accounts WHERE account_radio_type = 1";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function demo_accounts()
{
    global $conn;
    $sql = "SELECT * FROM Fx_accounts WHERE account_radio_type = 0";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}

function getAllNotifications()
{
    global $conn;
    $sql = "SELECT * FROM notifications WHERE website_accounts_id = '999999999' and notification_status='0' ORDER BY id DESC LIMIT 50";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return array();
    }
}

function getcountnotification()
{
    global $conn;
    $sql = "SELECT count(*) as count FROM notifications WHERE website_accounts_id = '999999999' ORDER BY id DESC LIMIT 50";
    $res = $conn->query($sql);
    if ($res) {
        $row = $res->fetch_assoc();
        return $row['count']; // Return the count value
    } else {
        echo "Error: " . $conn->error;
        return 0; // Return 0 in case of an error
    }
}
function markNotificationRead()
{

    global $conn;
    $sql = "UPDATE notifications SET notification_status = '0' ";
    echo "sql" . $sql;
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function open_live_acc($user_id, $mt4login, $mt4password, $mt4investor, $account_type, $account_group, $leverage)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    // $sql = "INSERT INTO `fx_accounts`(`account_id`, `account_type`, `account_group`,`currency`,`leverage`,`account_radio_type`,`password`,`investor_password`,`status`,`website_accounts_id`,`created_at`) VALUES ('$account_id','$account_type','$account_group','$currency','$leverage','$account_radio_type','$password','$investor_password','$status','$website_accounts_id','$now')";
    // echo "sss" . $sql;
    // $res = $conn->query($sql);
    // if (!$res) {
    //     echo "Error: " . $conn->error;
    // }
    // return $res;
}
function modaledit($accountId)
{
    global $conn;
    $sql = "SELECT * FROM fx_accounts WHERE account_id='$accountId'";
    $res = $conn->query($sql);

    if (!$res) {
        echo json_encode(array("error" => "Error: " . $conn->error));
    } else {
        // Fetch the result as an associative array
        $data = $res->fetch_assoc();

        // Encode the array as JSON and send it as the response
        echo json_encode($data);
    }
}
function deleteallfaqs($ids)
{
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `faqs` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deletefaqs($id, $page)
{
    global $conn;
    $table = 'faqs';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `faqs` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deleteallarfaqs($ids)
{
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `ar_faqs` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deletearfaqs($id, $page)
{
    global $conn;
    $table = 'ar_faqs';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `ar_faqs` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deleteallnews($ids)
{
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `news` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deletenews($id, $page)
{
    global $conn;
    $table = 'news';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `news` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deleteallrupack($ids)
{
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `ru_package` WHERE `id` IN ($idList)";
    echo "sql-" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deleterupack($id, $page)
{
    global $conn;
    $table = 'ru_packages';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `ru_package` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deleteallarpack($ids)
{
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `ar_package` WHERE `id` IN ($idList)";
    echo "sql-" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deletearpack($id, $page)
{
    global $conn;
    $table = 'ar_packages';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `ar_package` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function deleteallrufaqs($ids)
{
    global $conn;

    $ids = array_map(function ($id) use ($conn) {
        return $conn->real_escape_string($id);
    }, $ids);

    $idList = implode(',', $ids);

    $sql = "DELETE FROM `ru_faqs` WHERE `id` IN ($idList)";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Records deleted successfully";
        // Optionally, you can redirect back to the page or do any other necessary actions
    }
}
function deleterufaqs($id, $page)
{
    global $conn;
    $table = 'ru_faqs';
    $id_column = 'id';
    $page_column = 'page';

    $sql = "DELETE FROM `ru_faqs` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        echo "Record deleted successfully";
    }
}
function notificationId($notificationId)
{
    global $conn;
    $sql = "UPDATE `notifications` set `notification_status`='1' WHERE `id`='$notificationId'";
    echo "sql" . $sql;
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function getAllunion($page = 1, $limit = 10)
{
    global $conn;
    $offset = ($page - 1) * $limit;
    $sql = "SELECT * FROM unionpay_cards ORDER BY id DESC LIMIT $offset, $limit";
    $res = $conn->query($sql);
    return $res;
}
function getaccountwebid($user_id){
    global $conn;
    $sql = "SELECT * FROM website_accounts WHERE id= $user_id";
    $res = $conn->query($sql);
    return $res;
}
function deleteunionpay($ids, $webid)
{
    global $conn;
    // $sanitizedIds = array_map([$conn, 'real_escape_string'], $ids);
    // $idString = implode(',', $sanitizedIds);
    $now = date('Y-m-d H:i:s');
    $sql = "DELETE FROM unionpay_cards WHERE id IN ($ids)";
    echo "sql---" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "--Error----: " . $conn->error;
    } else {
        $sql = "INSERT INTO `notifications`
        (`website_accounts_id`, `notification_status`, `notification`, `notification_ar`, `details`, `details_ar`,`notification_ru`,`details_ru`,`notification_link`, `created_at`)
        VALUES ('$webid', '0', 'Your UnionPay Card Has Been Deleted Successfully', 'تم حذف بطاقة يونيون باى الخاصة بك بنجاح', 'Your UnionPay Card Has Been Deleted Successfully', 'تم حذف بطاقة يونيون باى الخاصة بك بنجاح','Ваша сделка по копированию успешно удалена','Ваша сделка по копированию успешно удалена','/cpanel/union-pay-card', '$now')";
        echo "sqll" . $sql;
        $res = $conn->query($sql);
        return $res;
    }
}
function updateunionpay($id, $status, $webid)
{
    global $conn;
    $sql = "UPDATE unionpay_cards SET status = '$status' WHERE id = '$id'";
    $res = $conn->query($sql);

    // Check if the query was successful
    if ($res) {
        $now = date('Y-m-d H:i:s');
        // Return a success message
        $sqlnot = "INSERT INTO `notifications`(`website_accounts_id`, `notification_status`, `notification`,`details`,`notification_ar`,`details_ar`,`notification_ru`,`details_ru`,`notification_link`,`created_at`) VALUES 
        ('$webid','0','Your UnionPay Card Has Been Approved Successfully','Your Pending UnionPay Card Has Been Approved','تمت الموافقة على اصدار كارت يونيو باى الخاص بك','تمت الموافقة على اصدار كارت يونيو باى الخاص بك','Ваша незавершенная сделка по копированию успешно одобрена','Ваша незавершенная сделка по копированию успешно одобрена','/cpanel/union-pay-card','$now')";
        $res = $conn->query($sqlnot);
        if ($res) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('error' => $conn->error));
        }
    } else {
        // Return an error message
        echo json_encode(array('error' => $conn->error));
    }
}
function seennotification()
{
    global $conn;
    $sql = "UPDATE notifications SET notification_status=1 WHERE website_accounts_id'='999999999'";
    $res = $conn->query($sql);
    return $res;

}
function extractcopytrade()
{
    global $conn;
    $query = "SELECT copy_trade.id, website_accounts.email, copy_trade.copy_from, copy_trade.copy_to, copy_trade.percentage, copy_trade.status, copy_trade.created_at, copy_trade.updated_at
              FROM copy_trade
              LEFT JOIN website_accounts ON copy_trade.website_accounts_id = website_accounts.id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Error fetching data from the database']);
        exit;
    }
    $csvFileName = "all_copy_trade_datas.csv";
    $csvFile = fopen($csvFileName, 'w');
    $headerRow = ['id', 'email', 'copy_from', 'copy_to', 'percentage', 'status', 'created_at', 'updated_at'];
    fputcsv($csvFile, $headerRow);
    while ($row = mysqli_fetch_assoc($result)) {
        $row['status'] = getStatusLabel($row['status']);
        $row['created_at'] = (new DateTime($row['created_at']))->format('c');
        $row['updated_at'] = (new DateTime($row['updated_at']))->format('c');
        fputcsv($csvFile, $row);
    }
    fclose($csvFile);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');
    readfile($csvFileName);
    unlink($csvFileName);
    echo json_encode(['success' => true, 'message' => 'CSV extraction successful']);
    exit;
}
function getStatusLabel($statusValue)
{
    switch ($statusValue) {
        case '0':
            return 'pending';
        case '1':
            return 'copying';
        case '8':
            return 'cancelling';
        case '9':
            return 'cancelled';
        default:
            return '';
    }
}
function extractdeposite()
{
    global $conn;
    $query = "SELECT transactions.id, transactions.type, transactions.via,transactions.account, transactions.amount,transactions.status,transactions.details_admin,transactions.created_at
              FROM transactions where type = '0'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Error fetching data from the database']);
        exit;
    }
    $csvFileName = "all_copy_trade_datas.csv";
    $csvFile = fopen($csvFileName, 'w');
    $headerRow = ['id', 'type', 'via', 'account', 'amount', 'status', 'details_admin', 'created_at'];
    fputcsv($csvFile, $headerRow);
    while ($row = mysqli_fetch_assoc($result)) {
        $row['type'] = gettransactionname($row['type']);
        $row['status'] = getStatustransaction($row['status']);
        $row['created_at'] = (new DateTime($row['created_at']))->format('c');
        fputcsv($csvFile, $row);
    }
    fclose($csvFile);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');
    readfile($csvFileName);
    unlink($csvFileName);
    echo json_encode(['success' => true, 'message' => 'CSV extraction successful']);
    exit;
}
function extractwithdraw()
{
    global $conn;
    $query = "SELECT transactions.id, transactions.type, transactions.via,transactions.account, transactions.amount,transactions.status,transactions.details_admin,transactions.created_at
              FROM transactions where type = '1'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Error fetching data from the database']);
        exit;
    }
    $csvFileName = "all_copy_trade_datas.csv";
    $csvFile = fopen($csvFileName, 'w');
    $headerRow = ['id', 'type', 'via', 'account', 'amount', 'status', 'details_admin', 'created_at'];
    fputcsv($csvFile, $headerRow);
    while ($row = mysqli_fetch_assoc($result)) {
        $row['type'] = gettransactionname($row['type']);
        $row['status'] = getStatustransaction($row['status']);
        $row['created_at'] = (new DateTime($row['created_at']))->format('c');
        fputcsv($csvFile, $row);
    }
    fclose($csvFile);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');
    readfile($csvFileName);
    unlink($csvFileName);
    echo json_encode(['success' => true, 'message' => 'CSV extraction successful']);
    exit;
}
function extractinternal()
{
    global $conn;
    $query = "SELECT transactions.id, transactions.type, transactions.via,transactions.account, transactions.amount,transactions.status,transactions.details_admin,transactions.created_at
              FROM transactions where type = '2'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Error fetching data from the database']);
        exit;
    }
    $csvFileName = "all_copy_trade_datas.csv";
    $csvFile = fopen($csvFileName, 'w');
    $headerRow = ['id', 'type', 'via', 'account', 'amount', 'status', 'details_admin', 'created_at'];
    fputcsv($csvFile, $headerRow);
    while ($row = mysqli_fetch_assoc($result)) {
        $row['type'] = gettransactionname($row['type']);
        $row['status'] = getStatustransaction($row['status']);
        $row['created_at'] = (new DateTime($row['created_at']))->format('c');
        fputcsv($csvFile, $row);
    }
    fclose($csvFile);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');
    readfile($csvFileName);
    unlink($csvFileName);
    echo json_encode(['success' => true, 'message' => 'CSV extraction successful']);
    exit;
}
function getStatustransaction($statusValue)
{
    switch ($statusValue) {
        case '1':
            return'Done';
        case '0':
            return 'Pending';
        case '9':
            return 'Rejected';
        default:
        return 'Unknown';
    }
}
function gettransactionname($transactionType){
    switch ($transactionType) {
        case '0':
            return 'Deposit';
        case '1':
            return 'Withdraw';
        case '2':
            return 'Internal Transfer';
        default:
        return 'Internal Transfer';
    }
}
function extractallsearchurl()
{
    global $conn;
    $query = "SELECT search.id, search.url, search.en_title, search.ar_title, search.created_at
              FROM search ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Error fetching data from the database']);
        exit;
    }

    $csvFileName = "all_copy_trade_datas.csv";
    $csvFile = fopen($csvFileName, 'w');

    // Add BOM (Byte Order Mark) to support UTF-8 in Excel
    fputs($csvFile, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));

    $headerRow = ['id', 'url', 'en_title', 'ar_title', 'created_at'];
    fputcsv($csvFile, $headerRow);

    while ($row = mysqli_fetch_assoc($result)) {
        // Convert date to ISO 8601 format
        $row['created_at'] = (new DateTime($row['created_at']))->format('c');

        fputcsv($csvFile, $row);
    }

    fclose($csvFile);

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

    readfile($csvFileName);
    unlink($csvFileName);

    echo json_encode(['success' => true, 'message' => 'CSV extraction successful']);
    exit;
}


// Function to manually encode Arabic characters to UTF-8
function utf8_encode_arabic($string)
{
    $utf8String = '';
    for ($i = 0; $i < mb_strlen($string, 'UTF-8'); $i++) {
        $char = mb_substr($string, $i, 1, 'UTF-8');
        if (ord($char) > 127) {
            $utf8String .= utf8_encode($char);
        } else {
            $utf8String .= $char;
        }
    }
    return $utf8String;
}
function extractalllandingusers()
{
    global $conn;
    $query = "SELECT landingusers.id, landingusers.name, landingusers.email,landingusers.country, landingusers.phone,landingusers.created_at,landingusers.landing_name,landingusers.cookie
              FROM landingusers";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Error fetching data from the database']);
        exit;
    }
    $csvFileName = "all_copy_trade_datas.csv";
    $csvFile = fopen($csvFileName, 'w');
    $headerRow = ['id', 'name', 'email', 'country', 'phone', 'Date', 'landing', 'cookie'];
    fputcsv($csvFile, $headerRow);
    while ($row = mysqli_fetch_assoc($result)) {
        $row['type'] = gettransactionname($row['type']);
        $row['status'] = getStatustransaction($row['status']);
        $row['created_at'] = (new DateTime($row['created_at']))->format('c');
        fputcsv($csvFile, $row);
    }
    fclose($csvFile);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');
    readfile($csvFileName);
    unlink($csvFileName);
    echo json_encode(['success' => true, 'message' => 'CSV extraction successful']);
    exit;
}
function extractallmailer()
{
    global $conn;
    $query = "SELECT maillist.id, maillist.mail, maillist.name,maillist.created_at
              FROM maillist";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo json_encode(['success' => false, 'message' => 'Error fetching data from the database']);
        exit;
    }
    $csvFileName = "all_copy_trade_datas.csv";
    $csvFile = fopen($csvFileName, 'w');
    $headerRow = ['id', 'mail', 'name', 'date'];
    fputcsv($csvFile, $headerRow);
    while ($row = mysqli_fetch_assoc($result)) {
        // $row['type'] = gettransactionname($row['type']);
        // $row['status'] = getStatustransaction($row['status']);
        $row['created_at'] = (new DateTime($row['created_at']))->format('c');
        fputcsv($csvFile, $row);
    }
    fclose($csvFile);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');
    readfile($csvFileName);
    unlink($csvFileName);
    echo json_encode(['success' => true, 'message' => 'CSV extraction successful']);
    exit;
}
function getMyReferralscms() {
    global $conn;
    // $referralId = $userId + 10000;
    $sql = "SELECT * FROM website_accounts WHERE invited_by > 10000";
    $res = $conn->query($sql);

    if (!$res) {
        echo "Error: " . $conn->error;
    }

    // Fetch all rows as an associative array
    $referralsArray = array();
    while ($row = $res->fetch_assoc()) {
        $referralsArray[] = $row;
    }

    return $referralsArray;
}