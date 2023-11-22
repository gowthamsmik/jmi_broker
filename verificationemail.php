<?php 
        //include('config.php');
        $email = $_REQUEST['email'];
        $token=random_int(100000, 999999);

/*         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        } else {
          return redirect()->back()->with('Error', 'An error has been occured');
        }

        $email_verfications = email_verfication::where('email' ,  $email)->get();
        if(count($email_verfications)>0){
          $email_verfication = email_verfication::where('email' ,  $email)->get()->first();

        }else {
          $email_verfication=new email_verfication();
          $email_verfication->email=$email;

        }
      //  $email_verfication = email_verfication::firstOrNew(['email' =>  $email]);

        $email_verfication->token=$token;
        if($email_verfication->save()){ */
          $activationcode=$token;

          /* Mail::send('mails.activationmailcode',['email' => $email,'activationcode' => $activationcode], function($message)use ($activationcode , $email){
                  $message->to($email);
                  $message->from('info@jmibrokers.com','JMI Brokers');
                  $message->subject('Confirm Your Mail');
                  //info@jmibrokers.com
          });
 */
          

          /* use PHPMailer\PHPMailer\PHPMailer;
          use PHPMailer\PHPMailer\Exception;
          
          // Include PHPMailer classes manually
          require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
          require '../vendor/phpmailer/phpmailer/src/Exception.php';
          require '../vendor/phpmailer/phpmailer/src/SMTP.php';
          session_start();
          
          // Validate email address
          $to = 'rlm.muthukumar@gmail.com';
          
          // Create a PHPMailer object
          $mail = new PHPMailer(true);
          
          try {
              // Server settings
              $mail->isSMTP();
              $mail->Host = 'smtp.gmail.com';
              $mail->SMTPAuth = true;
              $mail->Username = 'gopi.smiksystems@gmail.com';
              $mail->Password = 'iiil jolc qcsh mtvs';
              $mail->SMTPSecure = 'true'; // Use 'ssl' if needed
              $mail->Port = 587;
          
              // Recipients
              $mail->setFrom('your-email@example.com', 'Your Name');
              $mail->addAddress($to);
              $subject="welcome to";
              $maildetails="The manor";
              // Content
              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body = $maildetails;
              $mail->SMTPDebug = 2; // Enable verbose debug output
              // $mail->Debugoutput = function ($str, $level) {
              //     echo "DEBUG: $str";
              // };
          
              // Send the email and check for success
              $mailSent = $mail->send();
              $_SESSION['mailmsg'] = "Email Sent Successfully";
              //echo($mailSent . "mailsend");
              //echo $mailSent ? "Email sent successfully." : "Error sending email.";
              header("Location: send-mails.php");
          } catch (Exception $e) {
              echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          } */

          require_once 'vendor/autoload.php';
          $transport = new \Swift_SmtpTransport('smtpout.secureserver.net', 80);
          $transport->setUsername('support@jmibrokers.com');
          $transport->setPassword('JMI159BROKERS');

          // Create the Mailer using your created Transport
          $mailer = new Swift_Mailer($transport);
          $data['title']=1;
          $data['name']='Admin';
          //$data['details']=(Session::get('amount')/100).'USD New Neteller Deposited From Cpanel By '.$user->email;
          $subject='verification email ';
          // Create a message
          $message = (new Swift_Message('Wonderful Subject'))
            ->setFrom(['support@jmibroker.net' => 'Jmi brokers'])
            ->setTo(['rlm.muthukumar@gmail.com'])
            ->setBody('Here is the verification code for email verification is')
            ;

          // Send the message
          $result = $mailer->send($message);
          ?>

         



        
        ?>
