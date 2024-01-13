<?php
include("config.php");
include("functions.php");
error_reporting(3);
session_start();




$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'documents';
$id = isset($_POST['account_id']) ? $_POST['account_id'] : 0;

$SessionUserId = $_SESSION['sessionuserid'];



$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE id = ?");
$stmtUser->bind_param("i", $SessionUserId);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();


$stmtfxAccount = $conn->prepare("SELECT * FROM fx_accounts WHERE id = ? and website_accounts_id = ?");
$stmtfxAccount->bind_param("ii", $id,$SessionUserId);
$stmtfxAccount->execute();
$stmtfxAccountResult = $stmtfxAccount->get_result();
$fxAccount = $stmtfxAccountResult->fetch_assoc();

/*if (md5($_POST['old_password']) == $fxAccount['password']) {

  

$hashedOldPassword = md5($_POST['old_password']);
$hashedNewinvestorPassword = md5($_POST['password']);

$stmtfxAccount = $conn->prepare("UPDATE fx_accounts SET investor_password = ?, password = ?, updated_at = NOW() WHERE id = ? AND website_accounts_id = ?");
$stmtfxAccount->bind_param("ssii", $hashedNewinvestorPassword, $hashedOldPassword, $id, $user['id']);
$stmtfxAccount->execute();

$_SESSION['live_account_meesage'] = "Password Changed Successfully.";
echo '<script>window.location.href = document.referrer;</script>';
}
else
{
    $_SESSION['live_account_meesage'] = "Invalid Account Password.";
    echo '<script>window.location.href = document.referrer;</script>';
}*/




$input = $_POST;

$accountId=$fxAccount['account_id'];
$accountPassword=$fxAccount['password'];
//check of password
$query="|MODE=7|LOGIN=".$accountId."|[CPASS=".$input['old_password'];
      //--- prepare query
//change real master password
  $query1 ="|MODE=2|LOGIN=".$accountId."|CPASS=".$input['old_password']."|NPASS=".$input['password']."|TYPE=0";
  //change investor password
  $query2 ="|MODE=2|LOGIN=".$accountId."|CPASS=".$input['old_password']."|NPASS=".$input['investor_password']."|TYPE=1";

      //--- send request
   $ret='error';
//---- open socket
   $q = "WMQWEBAPI MASTER=jmi2020".$query."\nQUIT\n";

  /* $ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
   
//---- check connection
   if($ptr)
     {
      //---- send request
        if(fputs($ptr,$q)!=FALSE)
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
      fclose($ptr);
     }*/

if($ret == Null or $ret == 'error')
{
  $ptr=fsockopen('92.204.139.189','443',$errno,$errstr,5);
//---- check connection
  if($ptr)
    {
     //---- send request
       if(fputs($ptr,$q)!=FALSE)
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
     fclose($ptr);
    }
}

     $ret = substr($ret,0,strlen($ret)-1);
     $result = json_decode($ret);

     //result 0  means success
     if($result->result==1 || $result->result==5)
     {
        $_SESSION['live_account_meesage']="Invalid Data";
        header("Location:" . $siteurl  . "cpanel/live-account.php");
        exit;
     } 
     if($result->result==6){
        $_SESSION['live_account_meesage']="No Enough Money";
        header("Location:" . $siteurl  . "cpanel/live-account.php");
        exit;
          
        }
   
   if($result->result==0){
     $ret1='error';
      $q = "WMQWEBAPI MASTER=jmi2020".$query2."\nQUIT\n";
      /*$ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
   //---- check connection
      if($ptr)
        {
         //---- send request
           if(fputs($ptr,$q)!=FALSE)
           {
            //---- clear default answer
            $ret1='';
            //---- receive answer
            while(!feof($ptr))
             {
              $line=fgets($ptr,128);
              if($line=="end\r\n") break;
              $ret1.= $line;
             }
           }
         fclose($ptr);
        }*/
   
        if($ret1 == Null or $ret1 == 'error')
   {
     $q = "WMQWEBAPI MASTER=jmi2020".$query2."\nQUIT\n";
     $ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
   //---- check connection
     if($ptr)
       {
        //---- send request
          if(fputs($ptr,$q)!=FALSE)
          {
           //---- clear default answer
           $ret1='';
           //---- receive answer
           while(!feof($ptr))
            {
             $line=fgets($ptr,128);
             if($line=="end\r\n") break;
             $ret1.= $line;
            }
          }
        fclose($ptr);
       }
   }
   
        $ret1 = substr($ret1,0,strlen($ret1)-1);
        $result1 = json_decode($ret);
   
     $ret2='error';
      $q = "WMQWEBAPI MASTER=jmi2020".$query1."\nQUIT\n";
      /*$ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
   //---- check connection
      if($ptr)
        {
         //---- send request
           if(fputs($ptr,$q)!=FALSE)
           {
            //---- clear default answer
            $ret2='';
            //---- receive answer
            while(!feof($ptr))
             {
              $line=fgets($ptr,128);
              if($line=="end\r\n") break;
              $ret2.= $line;
             }
           }
         fclose($ptr);
        }*/
   
   if($ret2 == Null or $ret2 == 'error')
   {
     $q = "WMQWEBAPI MASTER=jmi2020".$query1."\nQUIT\n";
     $ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
   //---- check connection
     if($ptr)
       {
        //---- send request
          if(fputs($ptr,$q)!=FALSE)
          {
           //---- clear default answer
           $ret2='';
           //---- receive answer
           while(!feof($ptr))
            {
             $line=fgets($ptr,128);
             if($line=="end\r\n") break;
             $ret2.= $line;
            }
          }
        fclose($ptr);
       }
   }
   
        $ret2 = substr($ret2,0,strlen($ret2)-1);
        $result2 = json_decode($ret2);
   
       if($result1->result ==0 && $result2->result==0){
   
   
           

           $stmtfxAccount = $conn->prepare("UPDATE fx_accounts SET investor_password = ?, password = ?, updated_at = NOW() WHERE id = ? AND website_accounts_id = ?");
            $stmtfxAccount->bind_param("ssii",$input['investor_password'], $input['password'], $id, $user['id']);
            $stmtfxAccount->execute();
   
            $_SESSION['live_account_meesage']="Password Changed Successfully.";
            header("Location:" . $siteurl  . "cpanel/live-account.php");
            exit;       
   
       }else{

        $_SESSION['live_account_meesage']="Password Change Failed.";
        header("Location:" . $siteurl  . "cpanel/live-account.php");
        exit;     
            
   
       }
   
   }



  