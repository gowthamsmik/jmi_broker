<?php
    //  include("includes/softwareinclude/config.php");
    include('includes/softwareinclude/functions.php');

function emailQueue() {
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
                // require_once 'vendor/autoload.php';
                // $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
                // /* $transport->setUsername('marketing@jmibrokers.com');
                // $transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#'); */
                // $transport->setUsername('support.s@jmibrokers.com');
                // $transport->setPassword('dkkkiiuudddshh2024@');

                // $mailer = new Swift_Mailer($transport);
                $emailBatches = array_chunk($emailAddress, $sendCount);

                foreach ($emailBatches as $batch) {
                    // Iterate through each email address in the batch
                    foreach ($batch as $index => $to) {
                        // Use the corresponding index for name and title
                        $nameToSend = $name[$index] ?? '';

                        $titleToSend = $titleString[$index] ?? '';
                //         $sendBody='<!DOCTYPE html>
                // <html lang="en">
                
                // <head>
                //     <meta charset="UTF-8">
                //     <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    
                // </head>
                // <body>
                //     <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
                //         <div>
                //             <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
                //         </div>
                //         <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
                //         <div style="padding: 0 5% 0 5% ;">
                //             <h2 style="color:#07348f;">Hello <span>' .$titleToSend.'.'.$nameToSend.'</span></h2>

                //             <p>' . $body . '</p>
                
                //             <h3 style="color:#07348f;">FOR ANY HELP</h3>
                //             <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                //                 or call us on: +971 44096705</p>
                
                //             <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
                
                //             <div class="display:flex;">
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                //             </div>
                
                //             <h3 style="color:#07348f;">PAYMENT METHODS</h3>
                
                //             <div class="display:flex;">
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                //                 <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                //             </div>
                
                //             <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                //                 <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                //             </a>
                
                //             <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
                //         </div>
                //         <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                //             <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                //             <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
                //         </div>
                //     </div>
                // </body>
                // </html>';
                        // $message = (new Swift_Message(''))
                        //     ->setFrom(['marketing@jmibrokers.com' => 'Jmi brokers'])
                        //     ->setTo($to)
                        //     ->setBody($sendBody, 'text/html')
                        //     ->setSubject($subject);
                        // // Send the email and check for success
                        // $mailSent = $mailer->send($message);
                        // Output success or error message for each email

                        $mailbody=bulkEmailTemplate($body,$titleToSend,$nameToSend);
                        $mailSent = generalSupportEmail($mailbody, $subject, $to,'');
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
emailQueue()
?>