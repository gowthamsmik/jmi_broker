<?php
include('config.php');
error_reporting(3);
session_start();



$session_user = $_SESSION['sessionuser'];
$websiteAccountId = $_SESSION["sessionuserid"];
$input = $_REQUEST;
global $conn;
$transfer_to = $input['transfer_to'];
if($input['transfer_to']=='other'){
    $transfer_to=$input['other_account'];
}


//check of password
$query="|MODE=7|LOGIN=".$input['transfer_from']."|[CPASS=".$input['password'];
     //--- prepare query


// internal transfer
 $query1 = "|MODE=4|LOGIN=".$input['transfer_from']."|CPASS=".$input['password']."|TOACC=".$transfer_to."|AMOUNT=".$_POST['amount'];
 //internal transfer

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

if($ret == Null or $ret =='error')
{
//--- send request
$ret='error';
//---- open socket
$q = "WMQWEBAPI MASTER=jmi2020".$query."\nQUIT\n";
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
//pasword is working

//try{
if(is_object($result) && isset($result->result) && $result->result==0){

    $ret='error';
    
     //chech balance before transfer
    //
    //                       $ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
    //                      //---- check connection
    //                      if($ptr)
    //                        {
    //                         //---- send request
    //                         if(fputs($ptr,"WUSERINFO-login=".$transfer_to."|password=".$input['reciver_password']."\nQUIT\n"))
    //                           {
    //                            //---- clear default answer
    //                            $ret='';
    //                            //---- receive answer
    //                            while(!feof($ptr))
    //                             {
    //                              $line=fgets($ptr,128);
    //                              if($line=="end\r\n") break;
    //                              $ret.= $line;
    //                             }
    //                           }
    //
    //                       }
    //
    // if($ret == Null or $ret =='error')
    // {
    //
    //             //chech balance before transfer
    //
    //                         $ptr=fsockopen('92.204.139.189','443',$errno,$errstr,5);
    //                        //---- check connection
    //                        if($ptr)
    //                          {
    //                           //---- send request
    //                           if(fputs($ptr,"WUSERINFO-login=".$transfer_to."|password=".$input['reciver_password']."\nQUIT\n"))
    //                             {
    //                              //---- clear default answer
    //                              $ret='';
    //                              //---- receive answer
    //                              while(!feof($ptr))
    //                               {
    //                                $line=fgets($ptr,128);
    //                                if($line=="end\r\n") break;
    //                                $ret.= $line;
    //                               }
    //                             }
    //
    //                         }
    // }
    
    //  $fx_balance = $this->get_string_between($ret, 'Balance:', 'Equity');
    //  if($fx_balance > 9999999999999 ){
    //    $fx_balance_new=$fx_balance*-1;
    //    $query11 = "|MODE=3|LOGIN=".$input['transfer_to']."|AMOUNT=".$fx_balance_new."|COMMENT=fix_negative";
    //
    //    $ret1='error';
    //    $q = "WMQWEBAPI MASTER=jmi2020".$query11."\nQUIT\n";
    //    $ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
    // //---- check connection
    //    if($ptr)
    //      {
    //       //---- send request
    //         if(fputs($ptr,$q)!=FALSE)
    //         {
    //          //---- clear default answer
    //          $ret1='';
    //          //---- receive answer
    //          while(!feof($ptr))
    //           {
    //            $line=fgets($ptr,128);
    //            if($line=="end\r\n") break;
    //            $ret1.= $line;
    //           }
    //         }
    //       fclose($ptr);
    //      }
    //
    //      if($ret1 == Null or $ret1 == 'error')
    //      {
    //
    //                   $q = "WMQWEBAPI MASTER=jmi2020".$query11."\nQUIT\n";
    //                   $ptr=fsockopen('92.204.139.189','443',$errno,$errstr,5);
    //                //---- check connection
    //                   if($ptr)
    //                     {
    //                      //---- send request
    //                        if(fputs($ptr,$q)!=FALSE)
    //                        {
    //                         //---- clear default answer
    //                         $ret1='';
    //                         //---- receive answer
    //                         while(!feof($ptr))
    //                          {
    //                           $line=fgets($ptr,128);
    //                           if($line=="end\r\n") break;
    //                           $ret1.= $line;
    //                          }
    //                        }
    //                      fclose($ptr);
    //                     }
    //      }
    //
    //
    //      $ret1 = substr($ret1,0,strlen($ret1)-1);
    //       $result1 = json_decode($ret1);
    //
    //     if($result1->result==0){
    //
    //     }else{
    //
    //
    //
    //                   if( Request::segment(1) =='ar'){
    //                       return redirect('ar/cpanel/transaction-history')->with('status-error', 'فشل التحويل');
    //                   }elseif( Request::segment(1) =='ru'){
    //                       return redirect('ru/cpanel/transaction-history')->with('status-error', 'Failed');
    //                   }else{
    //                       return redirect('en/cpanel/transaction-history')->with('status-error', 'Failed');
    //                   }
    //
    //
    //     }
    //
    //
    //  }
    //end check balance before transfer
    
    
       $ret1='error';
    
      $q = "WMQWEBAPI MASTER=jmi2020".$query1."\nQUIT\n";
     
     /* $ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
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
    
    if($ret1 == Null or $ret1 =='error')
    {
    
        $q = "WMQWEBAPI MASTER=jmi2020".$query1."\nQUIT\n";
        $ptr=fsockopen('92.204.139.189','443',$errno,$errstr,5);
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
         $result1 = json_decode($ret1);
   
         if($result1->result==0){
        try{
       
        $transquery = "insert into transactions (account,amount,currency,type,via,website_accounts_id,status) values (?,?,?,?,?,?,?)";
        $trasactions = $conn->prepare($transquery);
        $amount = (float)$input['amount'];
        $currency = (int)$input['currency'];
        $via = $input['transfer_from'];
        $type = 2;
        $status = 1;
        $trasactions->bind_param("idsisii", $transfer_to,$amount,$currency,$type,$via,$websiteAccountId,$status);
        $trasactions->execute();
        $_SESSION['intltrnsfersuccess'] = true;

        $_SESSION['internal_transfer_meesage']="Successfully Transfered";
        header("Location:../internal-transfers.php?tab=1");
        }
        catch(Exception $e)
        {
            echo "error".$e->getMessage();
        }
      
    }
}
else{
 $_SESSION['internal_transfer_meesage']="Failed";
 header("Location:" . $siteurl . "cpanel/internal-transfers.php");
    
}

?>
