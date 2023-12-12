<?php
include("config.php");
include("functions.php");
error_reporting(3);

require_once '../../vendor/autoload.php';
use Dompdf\Dompdf;
// Flash messages
$_SESSION['pageType'] = 'menu';
$_SESSION['currentPage'] = 'add-account';
global $conn;
// Get session user


$sessionUser = isset($_SESSION['sessionuser']) ? $_SESSION['sessionuser'] : '';

// Get user details
$stmtUser = $conn->prepare("SELECT * FROM website_accounts WHERE username = ? OR email = ?");
$stmtUser->bind_param('ss', $sessionUser, $sessionUser);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
$user = $resultUser->fetch_assoc();
//var_dump($user);exit(0);
$userId = $user['id'];

// Inserting data into the "invoices" table
$stmtInvoice = $conn->prepare("INSERT INTO invoices (user_id, fullname, amount, account_number, type, filename,city,country,address,currency) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$newfilename='invoice_'.time();
$user_id = $user['id'];
$fullname = $_POST['fullname'];
$amount = $_POST['amount'];
$account_number = $_POST['account_number'];
$type = 1;
$filename = $newfilename;

$currency = $_POST['currency'] ?? '';
$address = $_POST['address'] ?? '';
$country = $_POST['country'] ?? '';
$city = $_POST['city'] ?? '';

// Additional form fields (if needed)
$type = $_POST['type'] ?? '';

$stmtInvoice->bind_param('isiiisssss', $user_id, $fullname, $amount, $account_number, $type, $filename,$city,$country,$address,$currency);
$stmtInvoiceResult = $stmtInvoice->execute();

// Check if the invoice insertion was successful
if ($stmtInvoiceResult) {
    $insertedId = $conn->insert_id;
    
    // Inserting data into the "notifications" table
    $stmtNotification = $conn->prepare("INSERT INTO notifications (website_accounts_id, notification_status, notification, details, notification_ar, details_ar, notification_ru, details_ru, notification_link, created_at) VALUES (?, 0, 'Requested invoice and bank details have been sent successfully to your mail,  Please provide your bank with invoice to facilitate your payment.',
     'Requested invoice and bank details have been sent successfully to your mail,  Please provide your bank with invoice to facilitate your payment.', 
     'تم إرسال الفاتورة المطلوبة والتفاصيل المصرفية بنجاح إلى بريدك ، يرجى تزويد البنك الذي تتعامل معه بالفاتورة لتسهيل عملية الدفع.' ,
     'تم إرسال الفاتورة المطلوبة والتفاصيل المصرفية بنجاح إلى بريدك ، يرجى تزويد البنك الذي تتعامل معه بالفاتورة لتسهيل عملية الدفع.',
     'Запрошенный счет-фактура и банковские реквизиты были успешно отправлены на вашу почту. Пожалуйста, предоставьте своему банку счет-фактуру, чтобы облегчить вашу оплату.',
      'Запрошенный счет-фактура и банковские реквизиты были успешно отправлены на вашу почту. Пожалуйста, предоставьте своему банку счет-фактуру, чтобы облегчить вашу оплату.', 
      '/cpanel/deposit', NOW())");

    // Create variables and pass references to bind_param
    $website_accounts_id_notification = $user_id;

    $stmtNotification->bind_param('i', $website_accounts_id_notification);
    $stmtNotificationResult = $stmtNotification->execute();



$html = '<!DOCTYPE html>
<html>
    <head>
        <title>PROFORMA INVOICE</title>
                         <style>
            @media only screen and (max-width: 1100px) {
                body
                {
                    padding: 30px 130px !important;
                }
            }
            @media only screen and (max-width: 992px) {
                body
                {
                    padding: 30px 80px !important;
                }
            }
            @media only screen and (max-width: 768px) {
                body
                {
                    padding: 30px 40px !important;
                }
                .table1 td, .table1 th
                {
                    font-size:18px !important;
                }
                .header .fr h1
                {
                    font-size: 28px !important;
                }
                .header .emptyDiv
                {
                width: 47% !important;
                margin-left: 20px !important;
                }
                .footer h3
                {
                    font-size: 15px !important;
                }
                .footer li img
                {
                width: 28px !important;
                }
                .footer .web img
                {
                width: 50px !important;
                margin-left: 8px !important;
                }
            }
            @media only screen and (max-width: 600px) {
                body
                {
                    padding: 30px 10px !important;
                }
                h3 ,.table4H
                {
                    font-size: 16px !important;
                }
                #JMI ,.orangeText
                {
                    font-size: 19px !important;
                }
                .grayText ,.sortedText
                {
                    font-size: 15px;
                }
                .table2 td
                {
                    font-size: 13px;
                }
                .table4P
                {
                    font-size: 13px;
                }
                .header .fr h1
                {
                    font-size: 20px !important;
                }
                .header .emptyDiv
                {
                    height: 25px !important;
                    margin-left: 10px !important;
                }
                .footer h3
                {
                    font-size: 10px !important;
                }
                .footer li img
                {
                width:20px !important;
                    margin: 0px 2px !important;
                }
                .footer .web img
                {
                width: 40px !important;

                }
            }
            body
            {
                padding: 30px 170px;
                color: #636366;
                overflow-x:hidden;
            }
            h3
            {
                font-size:20px;
            }
            hr
            {
                border-top: 3px solid #636366 !important;

            }
            .table2
            {
                margin-bottom: 50px !important;

            }
            .table2 td
            {
                font-size: 16px;
                color: black;
                border:none !important;
            }
            .table2 td:nth-child(2)
            {
                font-weight: bold;
            }
            .table2 tr:last-child td:nth-child(2)
            {
                color: #0358b5;
            }
            .table-striped>tbody>tr:nth-of-type(odd) {
                background-color: #e2e3e2 !important;
            }
            .sortedText
            {
                color: black;
                font-size: 20px;
                font-weight: bold;
       margin-bottom:0px;
       margin-top:50px;
            }
            .orangeText
            {
                background-color: #ffca26;
                color: #365f91;
                font-weight: bold;
                padding: 4px;
                margin-top:10px ;
            }
            .topTextH4,.topTextH3,#JMI
            {
                font-weight: bold;
                text-align: center;
            }
            #JMI
            {
                font-size: 24px;
            }
            #Effective
            {
                font-weight: bold;
                font-size: 19px;
            }
            .topTextH4
            {
                color: #636366;
            }
            .topTextH3
            {
                color:#0358b5 ;
            }
            .grayText
            {
                color: #737373;
                font-size: 18px;

            }
            .table4H
            {
                color:#0358b5 ;
            }
            .table4P
            {
                color: #737373;
                font-size: 15px;
                padding-left: 15px;
                margin-bottom:70px ;
            }
            .block h2
            {
                font-weight:normal ;
                margin:5px !important;
                font-size:15px !important;
            }
            .block
            {
                margin:10px 0px;
            }
            .block .bold
            {
                font-weight:bold ;
            }
            .table1
            {
                width:100%;
                margin-bottom:70px;
                border-collapse: separate;
                border-spacing: 2px;
            }
            .table1 th, .table1 td:first-child
            {
                border: 2px solid #636366 !important;
                width:60%;
                font-size:15px;
                color: #636366;
            }
            .table1 td:nth-child(2)
            {
                font-weight: bold;
                text-align: center;
            vertical-align: middle;
            }
            .table1 th, .table1 td
            {
                border: 2px solid #636366 !important;
                width:40%;
                font-size:15px;
                color: #636366;
            }
            #empty
            {
                border: 0px solid #e9e9e9 !important;
            }


           @page
           {

               margin: 0px;
           }
           .content
            {
               background-image:url("'.$siteurl.'assets/m/img/new-4.jpg");
               background-repeat: no-repeat;
               background-attachment: fixed;
               background-position: center;
               position: fixed;
               top: 0px;
               left: 0px;
               right: 0px;
               bottom:0px;
               height:100vh;
               z-index:-1;
            }


            .header
            {
               position: absolute;

               left: 50px;
               right: 0px;
               top:0px;
               margin-bottom:50px;
            }
            .footer
            {
               position: absolute;

               left: 0px;
               right: 0px;
               bottom:0px;

            }
            .footer img
            {
                margin-right: 50px;
            }
        </style>
    </head>
    <body>

   <div class="content">

   </div>
   <div class="header">
       <img src="'.$siteurl.'assets/m/img/new-1.png">
   </div>
  <div style="width:100%;height:320px;margin-top: 80px;">

      <div style="width:50%;float:left;">
          <div class="block">
            <h2>JMI BROKERS LTD</h2>
            <h2>1276, Govant Building, Kumul Highway</h2>
            <h2>Port Vila, Republic of Vanuatu</h2>
            <h2>15010</h2>
          </div>
          <div class="block">
            <h2>Phone: +678-24404</h2>
            <h2>Email: finance@jmibroker.net</h2>
            </div>
            <div class="block">
              <hr style="height:1px;color:#eee;background:#eee;" />
            </div>
            <div class="block">
            <h2 class="bold">Tax number: 608848</h2>
            <h2 class="bold">Invoice details</h2>
            <h2 class="bold">Date: '.date("d-m-Y").'</h2>
            <h2 class="bold">Reference PROFORMA INVOICE 000-2021</h2>
          </div>
      </div>
      <div style="width:40%;float:left; margin-left:10%;">
          <div class="block">
            <h3 class="bold" style="margin:5px 0px;"> '.$fullname.'</h3>
            <p class="no-bottom-margin"> '.$address.'</p>
            <p class="no-bottom-margin"> '.$city.'</p>
            <p class="no-bottom-margin"> '.$country.'</p>
            <p class="no-bottom-margin" style="font-weight:bold;">Funding Account Number: '.$account_number.'</p>

          </div>
      </div>

  </div>


        <table class="table1 table">
            <thead>
              <tr>
                <th>Description</th>
                <th>Unit Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trading Securities <br />
                    Securities" means (as from the 2012 amendment) - (a)
                    shares in the share capital of a corporation; or (b)
                    an instrument that creates and acknowledges the indebt
                    - securities that is issued by a corporation or a public
                    office including: (i) debentures; or (ii) debenture stock;
                    or (iii) loan stock; or (iv) bonds; or (v) certifications
                    of deposit; or (c) a right, despite whether or not conferred
                    by warrant, to subscribe for shares or debt securities; or (d)
                    a right under a depositary receipt; or (e) an option to acquire
                    or dispose of any security falling within any other provision of
                    this Act; or (f) a right under a contract for the acquisition or
                    disposal of the relevant securities under which the delivery is
                    to be made at a future date and at a price agreed when the contract
                    is made in accordance with the
                    terms of that contract; or (g) the proceeds of Foreign Exchange; (h)
                    the proceeds of precious metals; or (i) the proceeds of commodities.
                </td>
                <td>USD '.$amount.'</td>
              </tr>
              <tr>
                <td id="empty"></td>
                <td>
                    <div>Subtotal USD '.$amount.'</div>
                    <div>Total USD '.$amount.'</div>
                </td>
              </tr>
            </tbody>
        </table>

        <h4 style="margin-top:210px;" class="topTextH4">Standard Settlement Instructions (SSIs) for Sending Wire Transfers to your trading accounts</h4>
        <h3 class="topTextH3">Valid from 30<sup>th</sup> of June, 2021</h3>
        <hr>
        <h2 id="JMI">JMI Brokers ltd STANDART SETTLEMENT INSTRUCTIONS</h2>
        <h3 id="Effective">Effective30<sup>th</sup> of June 2021, use these instructions to wire funds into your account</h3>
        <p class="grayText">If these instructions are not used, the payment may be delayed, fail to reach your account, or be charged with
            additional fees.</p>
        <p class="grayText">In the first two pages you will find SEPA details. In the third and fourth pages you will find SWIFT details for EUR
            and USD transfers.</p>

     <h3 class="sortedText">USD : United States Dollar </h3>
     <h3 class="orangeText">USD : BSL GROUP </h3>
     <table class="table table-striped">
         <tbody>
         <tr>
             <td>Beneficiary / Reciever :</td>
             <td> Prime Trust, LLC</td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Address : </td>
             <td>330 S Rampart Ave, Suite 260, Las Vegas, NV 89145,
             UNITED STATES  </td>
         </tr>
         <tr>
             <td>Account Number </td>
             <td>2030136050 </td>
         </tr>
         <tr>
             <td>Beneficiary Bank :</td>
             <td>Royal Business Bank </td>
         </tr>
         <tr>
             <td>Beneficiary / Receiver Bank Address :</td>
             <td>1055 Wilshire Blvd. Suite 1200, Los Angeles CA 90017
             UNITED STATES  </td>
         </tr>
         <tr>
             <td>Beneficiary FI Routing Number :</td>
             <td>RBBCUS6L </td>
         </tr>
         <tr>
             <td>Reference Message / Details :</td>
             <td> QCCUST4NX Pacific Private Bank Limited JMI Brokers ltd-( ) </td>
         </tr>
         </tbody>
     </table>

     <h3 style="margin-top:100px;"  class="sortedText"> GBP : Great Britain Pound</h3>
     <h3 class="orangeText"> GBP : Financial House Ltd</h3>
     <table class="table table-striped">
         <tbody>
         <tr>
             <td>Beneficiary / Reciever :</td>
             <td>Financial House Limited </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Address : </td>
             <td>6 Bevis Marks Building, 1st floor, Bury Court London, England, EC3A  </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank :      </td>
             <td>CLEARANK </td>
         </tr>
         <tr>
             <td>Beneficiary / Receiver Bank Address :</td>
             <td> Prologue works Floor 4 , 25 marsh st , Bristol , United Kingdom      </td>
         </tr>
         <tr>
             <td>SWIFT BIC :</td>
             <td>CLRBGB22XXX </td>
         </tr>
         <tr>
             <td>IBAN :    </td>
             <td> GB78 CLRB 04055 1000 00303</td>
         </tr>
         <tr>
             <td>Reference Message / Details :</td>
             <td>JMI Brokers ltd-( )  </td>
         </tr>
         </tbody>
     </table>
     <h3  class="sortedText">EUR : Euro </h3>
     <h3 class="orangeText">EUR : SEPA ONLY – UAB Pervesk </h3>
     <table class="table table-striped">
         <tbody>
         <tr>
             <td>Beneficiary / Reciever :</td>
             <td>Pacific Private Bank Limited </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Address :    </td>
             <td>6 Bevis Marks Building, 1st floor, Bury Court London, England, EC3A </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank : </td>
             <td>UAB Pervesk </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank Address :   </td>
             <td> Rinktines st. 5, LT-09234 Vilnius, Lithuania</td>
         </tr>
         <tr>
             <td>SWIFT BIC :</td>
             <td> UAPELT22XXX</td>
         </tr>
         <tr>
             <td>IBAN :    </td>
             <td> LT73 3550 0200 0000 1699</td>
         </tr>
         <tr>
             <td>Reference Message / Details :</td>
             <td>JMI Brokers ltd-( ) </td>
         </tr>
         </tbody>
     </table>

     <h3 style="margin-top:50px;" class="orangeText">EUR : SEPA ONLY – UAB Verified Payments </h3>
     <table class="table table-striped">
         <tbody>
         <tr>
             <td>Beneficiary / Reciever :</td>
             <td>Pacific Private Bank Limited </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Address :     </td>
             <td>6 Bevis Marks Building, 1st floor, Bury Court London, England, EC3A </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank :    </td>
             <td> UAB Verified Payments</td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank Address :   </td>
             <td> GEDIMINO AV . 20 . Vilnius - Lithuania</td>
         </tr>
         <tr>
             <td>SWIFT BIC :</td>
             <td> VEPALT21XXX</td>
         </tr>
         <tr>
             <td>IBAN :   </td>
             <td> LT91 3750 0200 0000 0008</td>
         </tr>
         <tr>
             <td>Reference Message / Details :</td>
             <td> JMI Brokers ltd-( )     </td>
         </tr>
         </tbody>
     </table>


     <h3 style="margin-top:50px;" class="orangeText"> GBP - Financial House Ltd - UK Domestic Transfer </h3>
     <table class="table table-striped">
         <tbody>
         <tr>
             <td>Beneficiary / Reciever :</td>
             <td>Financial House Limited </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Address :     </td>
             <td>6 Bevis Marks Building, Is floor, Bury Court London, England, EC3A </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank :    </td>
             <td> CLEARBANK</td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank Address :   </td>
             <td> PROLOGUE WORKS, FLOOR 4, 25 MARSH ST, BRISTOL United Kingdom </td>
         </tr>
         <tr>
             <td>SWIFT BIC :</td>
             <td> CLRBGB22XXX </td>
         </tr>
         <tr>
             <td>Sort Code :   </td>
             <td> 040551</td>
         </tr>
         <tr>
         <td>Account Number: :   </td>
            <td> 00000303</td>
         </tr>
         <tr>
             <td>Reference Message  :</td>
             <td>JMI Brokers ltd-( )   </td>
         </tr>
         </tbody>
     </table>



     <h3 style="margin-top:50px;" class="orangeText"> EUR : SEPA ONLY – Financial House Ltd</h3>
     <table class="table table-striped">
         <tbody>
         <tr>
             <td>Beneficiary / Reciever :</td>
             <td>Pacific Private Bank Limited </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Address : </td>
             <td>6 Bevis Marks Building, 1st floor, Bury Court London, England, EC3A </td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank :    </td>
             <td> Financial House Limited</td>
         </tr>
         <tr>
             <td>Beneficiary / Reciever’s Bank Address :</td>
             <td>
               6 Bevis Marks Building, 1st Floor , Bury Court London , England . EC3A 7HL

             </td>
         </tr>
         <tr>
             <td>SWIFT BIC :</td>
             <td> FNHOGB21XXX</td>
         </tr>
         <tr>
             <td>IBAN :   </td>
             <td>GB95 FNHO 0099 3693 2230 40 </td>
         </tr>
         <tr>
             <td>Reference Message / Details :</td>
             <td>JMI Brokers ltd-( )      </td>
         </tr>
         </tbody>
     </table>



     <div style="display:none;">
       <h3 class="orangeText">United States of America (EUR)</h3>
       <h3 style="display:none;" class="sortedText">1. USD* - PPB Need to be informed before receiveing the funds</h3>
       <table class="table table-striped">
           <tbody>
           <tr>
               <td>59: Beneficiary/ Receiver:</td>
               <td>Pacific Private Bank Limited</td>
           </tr>
           <tr>
               <td>59: Beneficiary/ Receiver’s Address:</td>
               <td>Kumul Highway Govant Building-1st Floor, Port Vila, Vanuatu</td>
           </tr>
           <tr>
               <td>59: IBAN/ Account Number:</td>
               <td>4500 4500064812 02</td>
           </tr>
           <tr>
               <td>57A: Beneficiary/ Receiver Bank:</td>
               <td>The Reserve Trust Company</td>
           </tr>
           <tr>
               <td>57A: Beneficiary/ Receiver Bank Address:</td>
               <td>5600 S. Quebec St Suite 205D, Greenwood Village, CO 80111, USA</td>
           </tr>
           <tr>
               <td>57D: Beneficiary FI Routing Number:</td>
               <td>102007558</td>
           </tr>
           <tr>
               <td>70: Reference Message/ Details:</td>
               <td> VU24PPBL021000002148 </td>
           </tr>
           </tbody>
       </table>
       <h3 style="margin-top:150px;" class="orangeText">United Kingdom (EUR)</h3>
       <h3 style="display:none;" class="sortedText">2.GBP* - PPB Need to be informed before receiving the funds</h3>
       <table class="table table-striped">
           <tbody>
           <tr>
               <td>59: Beneficiary/ Receiver:</td>
               <td>Pacific Private Bank Limited</td>
           </tr>
           <tr>
               <td>59: Beneficiary/ Receiver’s Address:</td>
               <td>Govant Building, Port Vila, Vanuatu</td>
           </tr>
           <tr>
               <td>59: IBAN/ Account Number:</td>
               <td>GB90FNHO00993631027021</td>
           </tr>
           <tr>
               <td>57A: Beneficiary/ Receiver Bank:</td>
               <td>Financial House Limited</td>
           </tr>
           <tr>
               <td>57A: Beneficiary/ Receiver Bank Address:</td>
               <td>BURY COURT FLOOR 1 6 BEVIS MARKS,  EC3A 7HL, London</td>
           </tr>
           <tr>
               <td>57A: SWIFT BIC:</td>
               <td>FNHOGB21</td>
           </tr>
           <tr>
           <td>70: Reference Message/ Details:</td>
           <td> VU24PPBL021000002148 </td>
           </tr>
           </tbody>
       </table>

       <h3 class="orangeText">United Kingdom</h3>
       <h3 style="display:none;" class="sortedText">3. EUR within Europe (SEPA) – Financial House-Additional correspondent fees apply</h3>
       <h3 class="sortedText">EUR within Europe (SEPA) – Financial House-Additional </h3>
       <table class="table table-striped">
           <tbody>
           <tr>
               <td>Beneficiary/ Receiver:</td>
               <td>Pacific Private Bank Limited</td>
           </tr>
           <tr>
               <td>Beneficiary/ Receiver’s Address:</td>
               <td>Govant Building, Port Vila, Vanuatu</td>
           </tr>
           <tr>
               <td>Beneficiary/ Receiver Bank:</td>
               <td>Financial House Limited</td>
           </tr>
           <tr>
               <td>Beneficiary/ Receiver Bank Address:</td>
               <td>6 Bevis Marks Building, 1st Floor, Bury Court London,England, EC3A 7HL</td>
           </tr>
           <tr>
               <td>SWIFT BIC:</td>
               <td>FNHOGB21XXX</td>
           </tr>
           <tr>
               <td>IBAN:</td>
               <td>GB95FNHO0099 36932230 40</td>
           </tr>
           <tr>
             <td>70: Reference Message/ Details:</td>
             <td> VU24PPBL021000002148 </td>
           </tr>
           </tbody>
       </table>
        <h3 style="margin-top:220px;" class="orangeText">Lithuania</h3>
   <h3 class="sortedText">EUR within Europe (SEPA) </h3>
   <h3 style="display:none;" class="sortedText">EUR within Europe (SEPA) – UAB Pervesk -Additional correspondent fees apply</h3>
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Beneficiary/ Receiver:</td>
                <td>Pacific Private Bank Limited</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver’s Address:</td>
                <td>Govant Building, Port Vila, Vanuatu</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver Bank:</td>
                <td>UAB Pervesk</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver Bank Address:</td>
                <td>Rinktines st. 5, LT-09234 Vilnius, Lithuania</td>
              </tr>
              <tr>
                <td>SWIFT BIC:</td>
                <td>UAPELT22XXX</td>
              </tr>
              <tr>
                <td>IBAN:</td>
                <td>LT73 3550 0200 0000 1699</td>
              </tr>
              <tr>
       <td>70: Reference Message/ Details:</td>
       <td> VU24PPBL021000002148 </td>
                </td>
              </tr>
            </tbody>
          </table>
          <h3  class="orangeText">Lithuania</h3>
     <h3 class="sortedText">EUR within Europe (SEPA) </h3>
     <h3 style="display:none;" class="sortedText">EUR within Europe (SEPA) – UAB VerifiedPayments -Additional correspondent fees apply</h3>
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Beneficiary/ Receiver:</td>
                <td>Pacific Private Bank Limited</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver’s Address:</td>
                <td>Govant Building, Port Vila, Vanuatu</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver Bank:</td>
                <td>UAB Verified Payments</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver Bank Address:</td>
                <td>GEDIMINO AV. 20, Vilnius, Lithuania</td>
              </tr>
              <tr>
                <td>SWIFT BIC:</td>
                <td>VEPALT21XXX</td>
              </tr>
              <tr>
                <td>IBAN:</td>
                <td>LT91 3750 0200 0000 0008</td>
              </tr>
              <tr>
       <td>70: Reference Message/ Details:</td>
       <td> VU24PPBL021000002148 </td>
              </tr>
            </tbody>
          </table>
          <hr>
          <h4 class="table4H"><sup>1</sup>* - What is SEPA?</h4>
          <p class="table4P">SEPA – Single Euro Payments Area – is a payments system only for EUR currency in European Union. SEPA has 36 member-states: Austria, Belgium, Britain, Bulgaria, Cyprus, Croatia, Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary, Republic of Ireland, Italy, Latvia, Lithuania, Luxembourg, Malta, Netherlands, Poland, Portugal, Romania, Slovenia, Slovakia, Spain and Sweden, the 3 EEA countries of Norway, Liechtenstein, Iceland, as well as Switzerland and Monaco.</p>
          <hr>

          <h3 class="orangeText">Turkey – SWIFT - Nurol Bank</h3>
          <h3 class="sortedText">EUR outside Europe (SWIFT) –Additional correspondent fees might apply</h3>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>59: Beneficiary/ Receiver:</td>
                <td>JMI Brokers Ltd</td>
              </tr>
              <tr>
                <td>59: Beneficiary/ Receiver’s Address:</td>
                <td>1276, Govant Building, Kumul Highway,Port Vila Republic of Vanuatu</td>
              </tr>
              <tr>
                <td>59: IBAN/ Account Number:</td>
                <td>VU24PPBL021000002148</td>
              </tr>
              <tr>
                <td>57A: Beneficiary/ Receiver Bank:</td>
                <td>Pacific Private Bank Limited</td>
              </tr>
              <tr>
                <td>57A: Beneficiary/ Receiver Bank Address:</td>
                <td>Govant Building, Port Vila, Vanuatu</td>
              </tr>
              <tr>
                <td>57A: SWIFT BIC:</td>
                <td>PPBLVUVUXXX</td>
              </tr>
              <tr>
                <td>56A: Intermediary/ Correspondent Bank:</td>
                <td>Nurol Investment Bank Inc.</td>
              </tr>
              <tr>
                <td>56A: Intermediary/ Correspondent Bank Address:</td>
                <td>Maslak Nurol Plaza, Buyukdere Caddesi 71 Masla,Istanbul, Turkey</td>
              </tr>
              <tr>
                <td>56A: Intermediary/ Correspondent Bank BIC:</td>
                <td>NUROTRISXXX</td>
              </tr>
              <tr>
                <td>56A: Intermediary Account with Correspondent Bank:</td>
                <td>TR88 0014 1000 0004 4109 9000 04</td>
              </tr>
              <tr>
       <td>70: Reference Message/ Details:</td>
       <td> VU24PPBL021000002148 </td>
              </tr>
            </tbody>
          </table>
          <h4 class="table4H"><sup>1</sup>JMI Brokers ltd Client Number provided with account opening confirmation.</h4>
          <p class="table4P">JMI Brokers ltd reserves the right to change these instructions without prior notification. Customers should contact us prior to issuing
            instructions to new remitters</p>
          <hr>

          <h3 class="orangeText" style="display:none;">USD International transfer - USA</h3>
          <h3 class="sortedText" style="display:none;">USD–Additional correspondent fees might apply – need to advise PPB about transfer</h3>
          <table class="table table-striped" style="display:none;">
            <tbody>
              <tr>
                <td>Beneficiary/ Receiver:</td>
                <td>Pacific Private Bank Limited</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver’s Address:</td>
                <td>Kumul Highway Govant Building-1st Floor, Port Vila,Vanuatu</td>
              </tr>
              <tr>
                <td>Beneficiary Account Number:</td>
                <td>4500 4500064812 02</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver Bank:</td>
                <td>The Reserve Trust Company</td>
              </tr>
              <tr>
                <td>Beneficiary/ Receiver Bank Address:</td>
                <td>5600 S. Quebec St Suite 205D, Greenwood Village, CO 80111, USA</td>
              </tr>
              <tr>
                <td>Beneficiary FI Routing Number:</td>
                <td>102007558</td>
              </tr>
              <tr>
       <td>70: Reference Message/ Details:</td>
       <td> VU24PPBL021000002148 </td>
              </tr>
            </tbody>
          </table>
     </div>
     <hr>
          <h4 class="table4H" ><sup>1</sup>
          * - What is SEPA?.</h4>
          <p class="table4P" >SEPA – Single Euro Payments Area – is a payments system only for EUR currency in European Union. SEPA has 36 member-states: Austria, Belgium, Britain, Bulgaria, Cyprus, Croatia, Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary, Republic of Ireland, Italy, Latvia, Lithuania, Luxembourg,
          Malta, Netherlands, Poland, Portugal, Romania, Slovenia, Slovakia, Spain and Sweden, the 3 EEA countries of Norway, Liechtenstein, Iceland, as well as Switzerland and Monaco..</p>
     <hr>
            <div class="footer">

              <img src="'.$siteurl.'assets/m/img/new-3.jpg">


          </div>
    </body>
</html>';

// Create a new instance of Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// Set paper size and orientation (optional)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (first pass to get total pages)
$dompdf->render();

// Save the generated PDF to a file
// $outputFilePath = 'E:\\yasss\\SOFTWARE\\xamp8.1.25\\htdocs\\jmi-olive\\assets\\invoices\\' . $newfilename . '.pdf';
$directoryPath = __DIR__ . '/../../assets/invoices/';
$outputFilePath =$directoryPath . $newfilename . '.pdf';

file_put_contents($outputFilePath, $dompdf->output());

// Output a message or redirect to another page if needed
sendDocumentToMail($outputFilePath, $insertedId ,  "Bank Payment Details","New Request Invoice",$user['email']);
}

?>
 <script>
    window.location.href = '<?php echo $siteurl."cpanel/deposit.php?type=" ?>' + "Bank Wire";
</script>