<?php
error_reporting(3);
include('config.php');
include ('../../cpanel/includes/functions.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the AJAX request
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $userName = $_POST['userName'];
    $userRole = 2;
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $dialCode = $_POST['dialCode'];
    $currentTimestamp = date('Y-m-d H:i:s');
    $account_status = 1;
    $email_status = 1;
    $mobile_status = 1;

    // $invited_by = isset($_POST['myref']) ? $_POST['myref'] : null;
    
    $invited_by = $_POST['myref'];


    // Check if the email already exists
    $checkExistingSql = "SELECT * FROM website_accounts WHERE email = '$email' OR mobile = '$phone' OR username = '$userName'";
    $checkExistingResult = $conn->query($checkExistingSql);
    $message = "";

    if ($checkExistingResult->num_rows > 0) {
        while ($row = $checkExistingResult->fetch_assoc()) {
            if ($row['email'] == $email) {
                // Email already exists, output an error message
                
                echo json_encode(['status' => 400, 'message' => "Email already exists."]);
                exit();
               
                
            }
            if ($row['mobile'] == $phone) {
                // Phone number already exists, output an error message
              
                echo json_encode(['status' => 400, 'message' => "Phone Number already exists."]);
                exit();
            }
            if ($row['username'] == $userName) {
                // User name already exists, output an error message
             
                echo json_encode(['status' => 400, 'message' => "Username already exists"]);
                exit();
            }
        }
    } else {
        $invited_by_ib_details='';
        if($invited_by!='0'){
            $insertUserSql = "INSERT INTO website_accounts (title,email, password,fullname,gender,mobile,username,country_code,account_status,mobile_status,email_status,updated_at,created_at,invited_by) 
            VALUES ('$gender','$email', '$password','$name','$gender','$phone','$userName','$dialCode','$account_status','$mobile_status','$email_status','$currentTimestamp','$currentTimestamp','$invited_by')";
           
           $invited_by_id = $invited_by - 10000;
           $invited_by_ibSql = "SELECT * FROM website_accounts WHERE id = ?";
           $invited_by_ibResult = $conn->prepare($invited_by_ibSql);
           $invited_by_ibResult->bind_param("i", $invited_by_id);
           $invited_by_ibResult->execute();
           $invited_by_ibArray = $invited_by_ibResult->get_result();
           $invited_by_ib = $invited_by_ibArray->fetch_assoc();
           
           if ($invited_by_ib) {
               $invited_by_ib_details = '<br>IB_Name: ' . $invited_by_ib['fullname'] . '<br>IB_Username: ' . $invited_by_ib['username'] . '<br>IB_Email: ' . $invited_by_ib['email'];
           }
           else{
            echo json_encode(['status' => 400, 'message' => "Invalid Referral Link."]);
                exit();
           }
           
        }
        else{
            $insertUserSql = "INSERT INTO website_accounts (title,email, password,fullname,gender,mobile,username,country_code,account_status,mobile_status,email_status,updated_at,created_at) 
            VALUES ('$gender','$email', '$password','$name','$gender','$phone','$userName','$dialCode','$account_status','$mobile_status','$email_status','$currentTimestamp','$currentTimestamp')";
            
        }
       
        
        $res = $conn->query($insertUserSql);
        $lastInsertedId=0;
        if ($res) {
            // Retrieve the last inserted ID
            $lastInsertedId = $conn->insert_id;
        }


        $data['title']=1;
        $data['name']='Admin';
        $data['details']='Name : '.$name.'<br>'.'UserName : '.$userName.'<br>'.'Email : '.$email.'<br>'.$invited_by_ib_details;
        $subject='New Website Account';
        sendMailsToAdmin($data['details'],$subject);       
        sendMailsToUser($data['details'],'Welcome to JMI Brokers',$email);


        $checkExistingSql = "SELECT * FROM maillist WHERE mail = '$email'";
        $checkExistingResult = $conn->query($checkExistingSql);
        if ($checkExistingResult->num_rows <= 0) {
            $insertmailistSql = "INSERT INTO maillist (mail,title, name) 
            VALUES ('$email', 0,'$userName')";
             $resMailList = $conn->query($insertmailistSql);
        }

       


       

      
         $website_accounts_id=999999999;
         $notification_status=0;
         $notification='New Account Has Been Created';
         $notification_link='/cms/website-account?&bymail='.$email.'&';
        
         $insertNotificationSql = "INSERT INTO notifications (website_accounts_id,notification_status, notification,notification_link) 
        VALUES ('$website_accounts_id', 0,'$notification','$notification_link')";
         $resNotificationAdmin = $conn->query($insertNotificationSql);


         
         $website_accounts_id=$lastInsertedId;
         $notification_status=0;
         $notification='Welcome to JMI Brokers, Please complete your profile to use all account features.';
         $details='Welcome to JMI Brokers, Please complete your profile to use all account features.';
         $notification_ar='مرحبًا بكم في JMI Brokers ، يرجى إكمال ملف التعريف الخاص بك لاستخدام جميع ميزات الحساب';
         $details_ar='مرحبًا بكم في JMI Brokers ، يرجى إكمال ملف التعريف الخاص بك لاستخدام جميع ميزات الحساب';

         $notification_ru='Добро пожаловать в JMI Brokers! Пожалуйста, заполните свой профиль, чтобы использовать все функции.';
         $details_ru='Добро пожаловать в JMI Brokers! Пожалуйста, заполните свой профиль, чтобы использовать все функции.';

         $notification_link='/cpanel/personal-details';

         $insertNotificationUserSql = "INSERT INTO notifications (website_accounts_id,notification_status, notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link) 
         VALUES ('$website_accounts_id', 0,'$notification','$details','$notification_ar','$details_ar','$notification_ru','$details_ru','$notification_link')";
         $resNotificationUserSql = $conn->query($insertNotificationUserSql);
 

        
         
         $notification='Welcome to JMI Brokers, Please upload your documents to use all account features.';
         $details='Welcome to JMI Brokers, Please upload your documents to use all account features.';
         $notification_ar='مرحبًا بكم في JMI Brokers ، يرجى تحميل المستندات الخاصة بك لاستخدام جميع ميزات الحساب';
         $details_ar='مرحبًا بكم في JMI Brokers ، يرجى تحميل المستندات الخاصة بك لاستخدام جميع ميزات الحساب';

         $notification_ru='Добро пожаловать в JMI Brokers! Загрузите свои документы, чтобы использовать все возможности учетной записи.';
         $details_ru='Добро пожаловать в JMI Brokers! Загрузите свои документы, чтобы использовать все возможности учетной записи.';

         $notification_link='/cpanel/upload-documents';
         $insertNotificationUserSql = "INSERT INTO notifications (website_accounts_id,notification_status, notification,details,notification_ar,details_ar,notification_ru,details_ru,notification_link) 
         VALUES ('$website_accounts_id', 0,'$notification','$details','$notification_ar','$details_ar','$notification_ru','$details_ru','$notification_link')";
         $resNotificationUserSql = $conn->query($insertNotificationUserSql);

        if ($res === TRUE) {
            // Insert successful
           
            echo json_encode(['status' => 201, 'message' => "User successfully registered!."]);
            exit();
        } else {
            // Error inserting user, output error message and the MySQL error
          
            echo json_encode(['status' => 400, 'message' => "Something went wrong please try again later."]);
            exit();
        }
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method";
    exit;
}

$conn->close();

?>
