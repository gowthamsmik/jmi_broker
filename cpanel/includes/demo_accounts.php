<?php

include("config.php");
session_start();

        $sessionUser = isset($_SESSION['user']) ? $_SESSION['user'] : '';

        $location = GeoIP::getLocation();

        $stmt = $conn->prepare("SELECT * FROM website_accounts WHERE username = :user OR email = :user");
        $stmt->bindParam(':user', $sessionUser);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmtNotificationsAll = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId ORDER BY id DESC LIMIT 8");
        $stmtNotificationsAll->bindParam(':userId', $user['id']);
        $stmtNotificationsAll->execute();
        $notificationsAll = $stmtNotificationsAll->fetchAll(PDO::FETCH_ASSOC);

        $stmtNotificationsUnseen = $conn->prepare("SELECT * FROM notifications WHERE website_accounts_id = :userId AND notification_status = 0");
        $stmtNotificationsUnseen->bindParam(':userId', $user['id']);
        $stmtNotificationsUnseen->execute();
        $notificationsUnseen = $stmtNotificationsUnseen->fetchAll(PDO::FETCH_ASSOC);



        $accounts=website_accounts::find($user->id)->fx_accounts_demo;



        $balances=array();
        $equities=array();
        $names=array();
        $account_history=array();


        foreach($accounts as $account){

            $ret='error';
            $ret2='error';
            //---- open socket
            $ptr=@fsockopen('85.234.143.239','443',$errno,$errstr,5);
            //---- check connection
            if($ptr)
            {
                //---- send request
                if(fputs($ptr,"WUSERINFO-login=$account->account_id|password=$account->password\nQUIT\n"))
                {
                    //---- clear default answer
                    $ret='';
                    //---- receive answer
                    while(!feof($ptr))
                    {
                        $line=fgets($ptr,128);
                        if($line=="end\r\n") break;
                        $ret.= $line;
                    }
                }



            }

            //account history
            $startTime = mktime(0, 0, 0, 1, 1, date('Y')-4);    //last 3 years
            $endTime = time();  // current time

            $ptr2=@fsockopen('85.234.143.239','443',$errno,$errstr,5);
            //---- check connection
            if($ptr2)
            {
                //---- send request
                if(fputs($ptr2,"WUSERHISTORY-login=$account->account_id|password=$account->password|from=$startTime|to=$endTime\nQUIT\n"))
                {
                    //---- clear default answer
                    $ret3='';
                    //---- receive answer
                    while(!feof($ptr2))
                    {
                        $line2=fgets($ptr2,128);
                        if($line2=="end\r\n") break;
                        $ret3.= $line2;
                    }
                }


            }


            $fx_balance = $this->get_string_between($ret, 'Balance:', 'Equity');
            $fx_equity = $this->get_string_between($ret, 'Equity:', 'Margin');
            $fx_name = $this->get_string_between($ret, "$account->account_id", '202');

            $ret2 = $ret3;

            array_push($balances, $fx_balance);
            array_push($equities, $fx_equity);
            array_push($names, $fx_name);
            array_push($account_history, $ret2);

        }

        if( Request::segment(1) =='ar'){
            $title = "لوحة التحكم | الحسابات الديمو ";
            return view('ar.cpanel.demo-accounts',compact('title','user','notifications_all','notifications_unseen','location','accounts','balances','equities','names','account_history'));
        }elseif( Request::segment(1) =='ru'){
            $title = "Панель управления | Демо-счета ";
            return view('ru.cpanel.demo-accounts',compact('title','user','notifications_all','notifications_unseen','location','accounts','balances','equities','names','account_history'));
        }else{
            $title = "Control Panel | Demo Accounts";
            return view('cpanel.demo-accounts',compact('title','user','notifications_all','notifications_unseen','location','accounts','balances','equities','names','account_history'));
        }

    

?>