<?php

            include("config.php");
            session_start();



                // Flash messages
                $_SESSION['pageType'] = 'menu';
                $_SESSION['currentPage'] = 'landing';

                // Get session user
                $sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';

                // Get user details
                $stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
                $stmtUser->bindParam(':user', $sessionUser);
                $stmtUser->execute();
                $user = $stmtUser->fetch(PDO::FETCH_ASSOC);

                // Get all notifications
                $stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
                $stmtNotificationsAll->bindParam(':userId', $user['id']);
                $stmtNotificationsAll->execute();
                $notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

                // Get unseen notifications
                $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
                $stmtNotificationsUnseen->bindParam(':userId', $user['id']);
                $stmtNotificationsUnseen->execute();
                $notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);

                // Get technical analysis based on type
                if (isset($_GET['type'])) {
                    $technicalType = $_GET['type'];
                    $stmtTechnicalAnalysis = $conn->prepare("SELECT * FROM technicalanalysis WHERE technicalstatus = '1' AND technicaltype = :type ORDER BY id DESC LIMIT 7");
                    $stmtTechnicalAnalysis->bindParam(':type', $technicalType);
                    $stmtTechnicalAnalysis->execute();
                    $technicalAnalysis = $stmtTechnicalAnalysis->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $stmtTechnicalAnalysis = $conn->prepare("SELECT * FROM technicalanalysis WHERE technicalstatus = '1' ORDER BY id DESC LIMIT 7");
                    $stmtTechnicalAnalysis->execute();
                    $technicalAnalysis = $stmtTechnicalAnalysis->fetchAll(PDO::FETCH_ASSOC);
                }

                // if( Request::segment(1) =='ar'){
                //     $title = "لوحة التحكم | التحليل الفنى";
        
                //     return view('ar.cpanel.technical-analysis',compact('title','user','notifications_all','notifications_unseen','technicalanalysis'));
                // }elseif( Request::segment(1) =='ru'){
        
                //     $title = "Панель управления | Технический анализ ";
                //     return view('ru.cpanel.technical-analysis',compact('title','user','notifications_all','notifications_unseen','technicalanalysis'));
                // }else{
        
                //     $title = "Control Panel | Technical Analysis";
                //     return view('cpanel.technical-analysis',compact('title','user','notifications_all','notifications_unseen','technicalanalysis'));
                // }

?>


