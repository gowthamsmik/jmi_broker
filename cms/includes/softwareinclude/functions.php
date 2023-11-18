<?php include('config.php');

function getuserinfo(){
    global $conn,$currentuserid;
    $sql = "SELECT * FROM users where id = $currentuserid";
    $res =$conn->query($sql);
    while($row = $res->fetch_assoc()){
        return $row;
    }
}
function getAllPages(){
    global $conn;
    $sql = "SELECT * FROM pages";
    $res =$conn->query($sql);
    return $res;
}
function getAllPackages(){
    global $conn;
    $sql = "SELECT * FROM package";
    $res =$conn->query($sql);
    return $res;
}
function getAllfaqs(){
    global $conn;
    $sql = "SELECT * FROM faqs";
    $res =$conn->query($sql);
    return $res;
}
function add_faq($question,$answer,$faqtype){
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "INSERT INTO `faqs`( `question`, `answer`, `type`) VALUES ('$question','$answer','$faqtype')";
    $res =$conn->query($sql);
    return $res;
}
function update_faq($id,$question,$answer,$faqtype){
    global $conn;
    $question = $conn->real_escape_string($question);
    $answer = $conn->real_escape_string($answer);
    $sql = "UPDATE faqs SET question = '$question' , answer = '$answer' , type = '$faqtype' WHERE id = '$id'";
    $res =$conn->query($sql);
    return $res;
}
function getFaqById($faqid){
    global $conn;
    $sql = "SELECT * FROM faqs WHERE id = '$faqid'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row;
        }
    } 
}
function getAllSections(){
    global $conn;
    $sql = "SELECT * FROM sections";
    $res =$conn->query($sql);
    return $res;
}

function getPageDetail($pid){
    global $conn;
    $sql = "SELECT * FROM pages WHERE page_id = '$pid'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row;
        }
    } 
}
function getSectonDetail($pid){
    global $conn;
    $sql = "SELECT * FROM sections WHERE section_id = '$pid'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row;
        }
    } 
}
function get_data_from_table($table){
    global $conn;
    $table = strtolower($table);
    $sql = "SELECT * FROM $table";
    $res = $conn->query($sql);
    return $res;
}
function getPageGroups($pid){
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' GROUP BY group_name ORDER BY `page_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}
function getSectionGroups($pid){
    global $conn;
    $sql = "SELECT * FROM section_meta WHERE section_id = '$pid' GROUP BY group_name ORDER BY `section_meta`.`id` ASC";
    $res = $conn->query($sql);
    return $res;
}

function getPageFieldsByGroup($pid,$group){
    global $conn;
    $sql = "SELECT * FROM page_meta WHERE page_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getSectionFieldsByGroup($pid,$group){
    global $conn;
    $sql = "SELECT * FROM section_meta WHERE section_id = '$pid' AND group_name = '$group'";
    $res = $conn->query($sql);
    return $res;
}
function getAllLeads(){
    global $conn;
    $sql = "SELECT * FROM leads";
    $res = $conn->query($sql);
    return $res;
}
function update_field_meta($filed_name,$value,$group,$page_id){
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_',' ',$filed_name);
    $group = str_replace('_',' ',$group);
    echo $sql = "UPDATE `page_meta` SET `field_value`='$value' WHERE `field_name`='$filed_name' AND `page_id`='$page_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function update_section_field_meta($filed_name,$value,$group,$section_id){
    global $conn;
    $value = $conn->real_escape_string($value);
    $filed_name = str_replace('_',' ',$filed_name);
    $group = str_replace('_',' ',$group);
    $sql = "UPDATE `section_meta` SET `field_value`='$value' WHERE `field_name`='$filed_name' AND `section_id`='$section_id' AND `group_name`='$group'";
    $res = $conn->query($sql);
}
function getAllNews(){
    global $conn;
    $sql = "SELECT * FROM news";
    $res = $conn->query($sql);
    return $res;
}
function getNewsById($id){
    global $conn;
    $sql = "SELECT * FROM news WHERE id = '$id'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row;
        }
    } 
}
function add_news($heading,$description,$posted_by,$image){
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $time = time();
    $sql = "INSERT INTO `news`( `heading`, `description`, `posted_by`, `posted_on`, `image`) VALUES ('$heading','$description','$posted_by', '$time', '$image')";
    $res =$conn->query($sql);
    return $res;
}
function update_news($id,$heading,$description,$posted_by,$news_files){
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $sql = "UPDATE news SET heading = '$heading' , description = '$description' , posted_by = '$posted_by', image = '$news_files' WHERE id = '$id'";
    $res =$conn->query($sql);
    return $res;
}



function getAllFAnalysis(){
    global $conn;
    $sql = "SELECT * FROM fundamental_analysis";
    $res = $conn->query($sql);
    return $res;
}
function getFAnalysisById($id){
    global $conn;
    $sql = "SELECT * FROM fundamental_analysis WHERE id = '$id'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row;
        }
    } 
}
function add_FAnalysis($heading,$description,$posted_by,$image){
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $time = time();
    $sql = "INSERT INTO `fundamental_analysis`( `heading`, `description`, `posted_by`, `posted_on`, `image`) VALUES ('$heading','$description','$posted_by', '$time', '$image')";
    $res =$conn->query($sql);
    return $res;
}
function update_FAnalysis($id,$heading,$description,$posted_by,$news_files){
    global $conn;
    $heading = $conn->real_escape_string($heading);
    $description = $conn->real_escape_string($description);
    $posted_by = $conn->real_escape_string($posted_by);
    $sql = "UPDATE fundamental_analysis SET heading = '$heading' , description = '$description' , posted_by = '$posted_by', image = '$news_files' WHERE id = '$id'";
    $res =$conn->query($sql);
    return $res;
}
