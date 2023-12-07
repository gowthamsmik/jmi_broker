<?php include('config.php');

function getuserinfo()
{
    global $conn, $currentuserid;
    $sql = "SELECT * FROM users where id = $currentuserid";
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
function getAllPackages()
{
    global $conn;
    $sql = "SELECT * FROM package";
    $res = $conn->query($sql);
    return $res;
}
function getAllfaqs()
{
    global $conn;
    $sql = "SELECT * FROM faqs";
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
function update_faq($id, $question, $answer, $faqtype)
{
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "UPDATE faqs SET question = '$question' , answer = '$answer' , type = '$faqtype' WHERE id = '$id'";
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
function getAllSections()
{
    global $conn;
    $sql = "SELECT * FROM sections";
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
function getSectionGroups($pid)
{
    global $conn;
    $sql = "SELECT * FROM section_meta WHERE section_id = '$pid' GROUP BY group_name ORDER BY `section_meta`.`id` ASC";
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
function getSectionFieldsByGroup($pid, $group)
{
    global $conn;
    $sql = "SELECT * FROM section_meta WHERE section_id = '$pid' AND group_name = '$group'";
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
    $sql = "SELECT * FROM fx_accounts WHERE account_type = 1 LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAlldepositerequest($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM transactions WHERE type = '1' LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}

function getAllwithdrawrequest($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM transactions WHERE type = '2'  LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllinternalrequest($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM transactions WHERE type = '3' LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getTotalWebsiteAccounts()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM fx_accounts WHERE account_type = 1";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalpagedepositerequest()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM transactions WHERE type = 'deposite'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalpagewithdrawrequest()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM transactions WHERE type = 'withdraw'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalpageinternalrequest()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM transactions WHERE type = 'internal_transfer'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotaldemoAccounts()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM fx_accounts WHERE account_type = 2";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row['total'];
}
function getTotalliveAccounts()
{
    global $conn;

    $sql = "SELECT COUNT(*) as total FROM fx_accounts WHERE account_type = 3";
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
function update_website_account($id, $account_id, $account_group, $currency, $leverage, $password, $investor_password, $status, $website_accounts_id)
{
    global $conn;

    $sql = "UPDATE fx_accounts SET  account_group='$account_group', currency = ' $currency ' , leverage = ' $leverage ' , password = ' $password ' , investor_password = ' $investor_password ' , status = '$status' , website_accounts_id = '$website_accounts_id',updated_at = NOW()  WHERE account_id = ' $account_id' ";
    print_r($sql);
    $res = $conn->query($sql);
    echo "Error: " . $id . " " . $account_id . " " . $account_group . " " . $currency . " " . $leverage . " " . $password . " " . $investor_password . " " . $status . " " . $website_accounts_id;
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
}
function add_account($account_id, $account_type, $account_group, $currency, $leverage, $account_radio_type, $password, $investor_password, $status, $website_accounts_id)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `fx_accounts`(`account_id`, `account_type`, `account_group`,`currency`,`leverage`,`account_radio_type`,`password`,`investor_password`,`status`,`website_accounts_id`,`created_at`,`updated_at`) VALUES ('$account_id','$account_type','$account_group','$currency','$leverage','$account_radio_type','$password','$investor_password','$status','$website_accounts_id','$now','$now')";
    echo "sss" . $sql;
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    }
    return $res;
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
    $sql = "SELECT * FROM fx_accounts WHERE account_type = 2 LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllliveaccount($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM fx_accounts WHERE account_type = 3 LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllrefferalaccount($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM fx_accounts WHERE account_type = 4 LIMIT $offset, $perPage";
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
function update_section_field_meta($filed_name, $value, $group, $section_id)
{
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_', ' ', $filed_name);
    $group = str_replace('_', ' ', $group);
    $sql = "UPDATE `section_meta` SET `field_value`='$value' WHERE `field_name`='$filed_name' AND `section_id`='$section_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function getAllNews()
{
    global $conn;
    $sql = "SELECT * FROM news";
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
function add_news($heading, $description, $posted_by, $image)
{
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $time = time();
    $sql = "INSERT INTO `news`( `heading`, `description`, `posted_by`, `posted_on`, `image`) VALUES ('$heading','$description','$posted_by', '$time', '$image')";
    $res = $conn->query($sql);
    return $res;
}
function update_news($id, $heading, $description, $posted_by, $news_files)
{
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $sql = "UPDATE news SET heading = '$heading' , description = '$description' , posted_by = '$posted_by', image = '$news_files' WHERE id = '$id'";
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
    $sql = "SELECT * FROM callbackrequest LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllMailListAccounts($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM maillist LIMIT $offset, $perPage";
    $res = $conn->query($sql);
    return $res;
}
function getAllSearchUrls($page, $perPage)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM search LIMIT $offset, $perPage";
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
function getAlllandingusers($searchType, $searchValue, $perPage, $page)
{
    global $conn;
    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM landingusers ";
    $end = ($offset + $perPage);
    if (!empty($searchValue)) {
        $sql .= " WHERE $searchType LIKE '%$searchValue%'";
    }
    $sql .= " LIMIT $offset,$end ";
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
    $sql = "SELECT * FROM fundamental_analysis ";
    $end = ($offset + $perPage);
    $sql .= " LIMIT $offset,$end ";
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
    $sql = "INSERT INTO `fundamental_analysis` (`heading`, `description`, `image`, `posted_on`)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $heading, $description, $fileToUpload, $now);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
        return false;
    }
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
function updateFundamentalAnalysis($id, $heading, $description)
{
    global $conn;
    $now = date('Y-m-d H:i:s');
    echo $id . "============jhbjhvh";
    $sql = "UPDATE `fundamental_analysis`
            SET `heading` = '$heading',
                `description` = '$description',
                `posted_on` = '$now'
            WHERE `id` = $id";

    $res = $conn->query($sql);
    echo "sql===============", $sql;
    if (!$res) {
        echo "Error: " . $conn->error;
    }

    return $res;
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
    $sql = "SELECT * FROM offers_events ";
    $end = ($offset + $perPage);
    $sql .= " LIMIT $offset,$end ";
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

    $sql = "DELETE FROM `users` WHERE `$id_column` = '$id' AND `$page_column` = '$page'";
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
function getuserdetails($sessionuser)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE id = '$sessionuser'";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
    } else {
        // Assuming you want to fetch the result as an associative array
        return $res->fetch_assoc();
    }
}
function userpasswordupdate($sessionuser, $changepassword)
{
    global $conn;
    $sql = "UPDATE `users`
       SET  `password` = '$changepassword'
    WHERE `id` = $sessionuser";
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error----: " . $conn->error;
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
            echo "Update successful.";
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
            echo "Update successful.";
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

function getAllMail() {
    global $conn;
    $query = "SELECT mail FROM maillist";
    $result = $conn->query($query);

    $emails = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $emails[] = $row['mail'];
    }

    return $emails;
}
function deletedocument($ids)
{
    global $conn;
    // $sanitizedIds = array_map([$conn, 'real_escape_string'], $ids);
    // $idString = implode(',', $sanitizedIds);

    $sql = "DELETE FROM documents WHERE id IN ($ids)";
    echo "sql---" . $sql;
    $res = $conn->query($sql);

    if (!$res) {
        echo "--Error----: " . $conn->error;
    }

    return $res;
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
function getAlldocuments()
{
    global $conn;
    $sql = "SELECT * FROM documents";
    $res = $conn->query($sql);
    return $res;
}
function updatedocument($id, $status)
{
    global $conn;
    $sql = "UPDATE documents SET status = '$status' WHERE id = '$id'";
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