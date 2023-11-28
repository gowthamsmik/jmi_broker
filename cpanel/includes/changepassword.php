<?php
 
         include("config.php");
         session_start();
        $session_user= $_SESSION['username'];   
        $accountsqry = "select * from website_accounts where id = $userId and account_radio_type=1";
        //$notifications_all=Notifications::where('website_accounts_id',$user->id)->orderBy('id','desc')->take(8)->get()->all();
        //$notifications_unseen=Notifications::where('website_accounts_id',$user->id)->where('notification_status',0)->get()->all();

             
?>