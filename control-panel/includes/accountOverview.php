<?php 
    include('includes/softwareinclude/config.php');
       if(!isset($_SESSION))session_start();
        $username = isset($_SESSION['sessionuser'])?$_SESSION['sessionuser']:$_SESSION['useremail'];
		//$user= "select * from website_accounts where username = $username or email = $username limit 1"; 
    $userId = $_SESSION['userId'];
		$notifications_all = "select * from Notifications where website_accounts_id = $userId order by id desc";
    $notifications_unseen = "select * from Notifications where website_accounts_id = $userId and notification_status = 0";
		$accountsqry = "select * from website_accounts where id = $userId and account_radio_type=1";


        $balances=array();
        $equities=array();
        $names=array();

        $accountcon =  $conn->query($accountsqry);
        if($accountcon->num_rows > 0){
        while($accounts = $accountcon->fetch_assoc()){

               $ret='error';
            //---- open socket
            echo "inside the sockert";
            $ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
            //$ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
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
        if($ret == Null or $ret =='error')
        {
        //---- open socket
        //$ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
        $ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
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
        }



             $fx_balance = $this->get_string_between($ret, 'Balance:', 'Equity');
             $fx_equity = $this->get_string_between($ret, 'Equity:', 'Margin');
             $fx_name = $this->get_string_between($ret, "$account->account_id", '202');


            array_push($balances, $fx_balance);
            array_push($equities, $fx_equity);
            array_push($names, $fx_name);

        }
      }
		function get_string_between($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
	
	?>