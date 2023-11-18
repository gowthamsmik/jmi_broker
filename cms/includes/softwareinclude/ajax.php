<?php include('functions.php');
error_reporting(0);
if($_POST['type'] == 'page-save'){
    extract($_POST);
    foreach($_POST as $key => $value){
        if($key == 'page_id'){}else{
            $keyz = $key;
            $keyz = explode('|',$keyz);

            $filed_name = $keyz[0];
            $group = $keyz[1];
            if (is_array($value)) {
                $value = json_encode($value);
            }
            update_field_meta($filed_name,$value,$group,$page_id);
        }
        
    }
}
if($_POST['type'] == 'section-save'){
    extract($_POST);
    foreach($_POST as $key => $value){
        if($key == 'section_id'){}else{
            $keyz = $key;
            $keyz = explode('|',$keyz);

            $filed_name = $keyz[0];
            $group = $keyz[1];
            if (is_array($value)) {
                $value = json_encode($value);
            }
            update_section_field_meta($filed_name,$value,$group,$section_id);
        }
        
    }
}
if($_POST['type'] == 'add-faq'){
    extract($_POST);
    add_faq($question,$answer,$faqtype);
}
if($_POST['type'] == 'update-faq'){
    extract($_POST);
    update_faq($id,$question,$answer,$faqtype);
}
if($_POST['type'] == 'add-news'){
    extract($_POST);
    add_news($heading,$description,$posted_by,$news_files);
}
if($_POST['type'] == 'update-news'){
    extract($_POST);
    update_news($id,$heading,$description,$posted_by,$news_files);
}

if($_POST['type'] == 'add-fanalysis'){
    extract($_POST);
    add_FAnalysis($heading,$description,$posted_by,$news_files);
}
if($_POST['type'] == 'update-fanalysis'){
    extract($_POST);
    update_FAnalysis($id,$heading,$description,$posted_by,$news_files);
}
if($_POST['type'] == 'upload_file'){
    //var_dump($_FILES);

    $target_dir = '../../uploads/';
    $target_file = $target_dir . time().'_image.'.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    //echo $target_file;
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo str_replace('../../','',$target_file);
    }else{
        //echo $_FILES["file"]["error"];
    }

}