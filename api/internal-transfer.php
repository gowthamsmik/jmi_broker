<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    internalTransferValidation($data);


    $checkTransferFromAccount=accountDetails($data['transferFrom'],$websiteAccountId);

    http_response_code(400);    
    if ($checkTransferFromAccount->num_rows <= 0) {
        
            echo json_encode(array("status"=>ERROR_STATUS,"message" => TRANSFER_FROM_INVALID_ACCOUNT_ERROR_MESSAGE));
            exit();
       
    }

    $transfer_to=$data['transferTo'];



//check of password
$query="|MODE=7|LOGIN=".$data['transferFrom']."|[CPASS=".$data['MT4Password'];
     //--- prepare query


// internal transfer
 $query1 = "|MODE=4|LOGIN=".$data['transferFrom']."|CPASS=".$data['MT4Password']."|TOACC=".$transfer_to."|AMOUNT=".$_POST['transferAmount'];
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
    //                         if(fputs($ptr,"WUSERINFO-login=".$transfer_to."|password=".$data['reciver_password']."\nQUIT\n"))
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
    //                           if(fputs($ptr,"WUSERINFO-login=".$transfer_to."|password=".$data['reciver_password']."\nQUIT\n"))
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
    //    $query11 = "|MODE=3|LOGIN=".$data['transfer_to']."|AMOUNT=".$fx_balance_new."|COMMENT=fix_negative";
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
        $amount = (float)$data['transferAmount'];
        $currency = 1;
        $via = $data['transferFrom'];
        $type = 2;
        $status = 1;
        $trasactions->bind_param("idsisii", $transfer_to,$amount,$currency,$type,$via,$websiteAccountId,$status);
        $trasactions->execute();
       
        http_response_code(201);
        echo json_encode(array("status" => SUCCESS_STATUS, "message" => INTERNAL_TRANSFER_SUCCESS_MESSAGE));
        }
        catch(Exception $e)
        {
            //echo "error".$e->getMessage();
            echo json_encode(array("status"=>ERROR_STATUS,"message" => SOMTHING_WRONG_ERROR_MESSAGE));
            exit();
        }
      
    }
}





    else {
        http_response_code(400);
        echo json_encode(array("status" => ERROR_STATUS, "message" => INTERNAL_TRANSFER_ERROR_MESSAGE));
    }
    $conn->close();
    exit();
}



http_response_code(405);



?>