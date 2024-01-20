<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");

include('../includes/softwareinclude/config.php');
include('../cpanel/includes/functions.php');
//include('../vendor/autoload.php');
function sendMailsToAdmin1($mailBody,$mailSubject){
    //require_once '../vendor/autoload.php';
    include('../vendor/autoload.php');
    try{
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
    $mailer = new Swift_Mailer($transport);
       
    // $mailTo="support@jmibrokers.com";
    $mailTo="marketing@jmibrokers.com";
    $mailsBody='<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://localhost/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">
               
                <p>'.$mailBody.'</p>
            
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://localhost/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
    $message = (new Swift_Message(''))
            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
            ->setTo('marketing@jmibrokers.com')
            ->setBody($mailsBody,'text/html')
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);
        return '';
    }
    catch(Exception){
        return '';
    }
}

function sendMailsToUserAp($mailBody,$mailSubject,$mailTo){
    include('../vendor/autoload.php');
    try{
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
    $mailer = new Swift_Mailer($transport);
       
   
    $mailsbody='<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  </head>
  <body>
      <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
          <div>
              <img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
          </div>
          <img src="https://localhost/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
          <div style="padding: 0 5% 0 5% ;">
             

              <p>'.$mailBody.'</p>
             

  
              <h3 style="color:#07348f;">FOR ANY HELP</h3>
              <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                  or call us on: +971 44096705</p>
  
              <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
  
              <div class="display:flex;">
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
              </div>
  
              <h3 style="color:#07348f;">PAYMENT METHODS</h3>
  
              <div class="display:flex;">
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
              </div>
  
              <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                  <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
              </a>
  
              <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
          </div>
          <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
              <div><img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
              <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
          </div>
      </div>
  </body>
  </html>';
    $message = (new Swift_Message(''))
            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($mailTo)
            ->setBody($mailsbody,'text/html')
            ->setSubject($mailSubject);

        // Send the email and check for success
        $mailSent = $mailer->send($message);
        return '';
    }
    catch(Exception){
        return '';
    }
}

function sendMailsToUserueje($mailTo,$token){
    include('../vendor/autoload.php');
    try{
    $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
    $transport->setUsername('marketing@jmibrokers.com');
    //$transport->setPassword('JMI159BROKERS');
    $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
    $mailer = new Swift_Mailer($transport);
       
   
    $mailsbody='<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  </head>
  <body>
      <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
          <div>
              <img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
          </div>
          <img src="https://localhost/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
          <div style="padding: 0 5% 0 5% ;">
             

              <p>Here is the verification code for email verification:</p>
              <p style="font-family: Arial, sans-serif; font-size: 16px; color: #333; background-color: #f0f0f0; padding: 10px; text-align: center;font-size:50px">
                  '.$token.'
              </p>
             

  
              <h3 style="color:#07348f;">FOR ANY HELP</h3>
              <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                  or call us on: +971 44096705</p>
  
              <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
  
              <div class="display:flex;">
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
              </div>
  
              <h3 style="color:#07348f;">PAYMENT METHODS</h3>
  
              <div class="display:flex;">
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="https://localhost/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
              </div>
  
              <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                  <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
              </a>
  
              <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
          </div>
          <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
              <div><img src="https://localhost/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
              <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
          </div>
      </div>
  </body>
  </html>';
    $message = (new Swift_Message(''))
            ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
            ->setTo($mailTo)
            ->setBody($mailsbody,'text/html')
            ->setSubject('Verification From JMI');

        // Send the email and check for success
        $mailSent = $mailer->send($message);
        return '';
    }
    catch(Exception){
        return '';
    }
}
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data === null) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid JSON data';
        http_response_code(400);
    } else {
        if (!isset($data['email']) || !isset($data['password']) || !isset($data['userName']) || !isset($data['fullName']) || !isset($data['phone']) || !isset($data['dialCode'])) {
            $response['status'] = 'error';
            $response['message'] = 'All fields (email, password, userName, fullName, phone, dialCode) are required';
            http_response_code(400);
        } else {
            $email = $data['email'];
            $password = md5($data['password']); // Use password_hash for secure password hashing
            $userName = $data['userName'];
            $fullName = $data['fullName'];
            $phone = $data['phone'];
            $dialCode = $data['dialCode'];
            $currentTimestamp = date('Y-m-d H:i:s');
            $account_status = 0;
            $email_status = 0;
            $mobile_status = 0;

            $checkExistingSql = "SELECT * FROM website_accounts WHERE email = '$email' OR mobile = '$phone' OR username = '$userName'";
            $checkExistingResult = $conn->query($checkExistingSql);

            if ($checkExistingResult->num_rows > 0) {
                while ($row = $checkExistingResult->fetch_assoc()) {
                    if ($row['email'] == $email) {
                        $response['status'] = 'error';
                        $response['message'] = 'Email already exists';
                        http_response_code(400);
                    } elseif ($row['mobile'] == $phone) {
                        $response['status'] = 'error';
                        $response['message'] = 'Phone Number already exists.';
                        http_response_code(400);
                    } elseif ($row['username'] == $userName) {
                        $response['status'] = 'error';
                        $response['message'] = 'Username already exists';
                        http_response_code(400);
                    }
                }
            } else {
                $insertUserSql = "INSERT INTO website_accounts (email, password, fullname, mobile, username, country_code, account_status, mobile_status, email_status, updated_at, created_at) 
                VALUES ('$email', '$password', '$fullName', '$phone', '$userName', '$dialCode', '$account_status', '$mobile_status', '$email_status', '$currentTimestamp', '$currentTimestamp')";

                $res = $conn->query($insertUserSql);

                if ($res === TRUE) {

                    $lastInsertedId = 0;
                    if ($res) {
                        // Retrieve the last inserted ID
                        $lastInsertedId = $conn->insert_id;
                    }
                    $otp = random_int(100000, 999999);
                    $datas['name']='Admin';
                    $datas['details']='Name : '.$fullName.'<br>'.'UserName : '.$userName.'<br>'.'Email : '.$email.'<br>';
                    $subject='New Website Account';
                    sendMailsToAdmin1($datas['details'],$subject);       
                    sendMailsToUserAp($datas['details'],'Welcome to JMI Brokers',$email);
                    
                    sendMailsToUserueje($email,$otp);

                    $checkExistingMailSql = "SELECT * FROM maillist WHERE mail = '$email'";
                    $checkExistingResult = $conn->query($checkExistingMailSql);
                    if ($checkExistingResult->num_rows <= 0) {
                        $insertmailistSql = "INSERT INTO maillist (mail,title, name) 
                        VALUES ('$email', 0,'$userName')";
                         $resMailList = $conn->query($insertmailistSql);
                    }

                    $checkExistingEmailVerifySql = "SELECT * FROM email_verification WHERE email = '$email'";
                    $checkExistingEmailResult = $conn->query($checkExistingEmailVerifySql);
                    if($checkExistingEmailResult->num_rows > 0){
                      $UPDATEDATA="UPDATE email_verification SET token = '$otp' WHERE email = '$email'";
                      $UPDATERESULT=$conn->query($UPDATEDATA);
                      
                    }else{
                      $INSERTDATA="INSERT INTO email_verification (email, token) VALUES ('$email', '$otp')" ;
                      $INSERTRESULT= $conn->query($INSERTDATA);
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
                    
                    $response['status'] = 'success';
                    $response['message'] = 'User successfully registered!';
                    http_response_code(201);

                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Something went wrong. Please try again later.';
                    http_response_code(500);
                }
            }
        }
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
    http_response_code(405);
}

// Close database connection
$conn->close();

// Send the JSON response
echo json_encode($response);
?>