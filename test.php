<?php


            // Send email to admin
            require_once 'vendor/autoload.php';

            $transport = new \Swift_SmtpTransport('smtp.office365.com', 587, 'tls');
            //$transport->setUsername('marketing@jmibrokers.com');
            //$transport->setPassword('Ngjht$#fgr%ru34gjjv%*%#');
            $transport->setUsername('support.s@jmibrokers.com');
            $transport->setPassword('dkkkiiuudddshh2024@');
            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
 
            $mailtBody='hellp';
            // Create a message
            $message = (new Swift_Message('New Career Cv From JMIBrokers.com'))
                ->setFrom(['support.s@jmibrokers.com' => 'Jmi brokers'])
                ->setTo('info@jmibrokers.com') // Replace with the actual admin email address
                ->setBody($mailtBody,'text/html')
            ;

            // Send the message
            $mailer->send($message);


echo "1";


?>