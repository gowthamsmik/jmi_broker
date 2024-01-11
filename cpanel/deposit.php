<?php if (!isset($_SESSION['sessionuser']))
    session_start();
include("includes/functions.php");

$paytype = isset($_GET['type']) ? $_GET['type'] : "";
$liveaccounts = getAllLiveAccounts();
$liveAccountsCount = count($liveaccounts);

$invoices = getAllInvoices();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src= <?php echo $siteurl."assets/js/slick.min.js" ?>> </script>
    <?php include("includes/style.php"); ?>
    <style>
        .body {
            background-color: #F0F0F0;
        }
        .border-bottom-80 {
            border-bottom: 1px solid #DEE2E6;
            /* or your preferred border color */
            height: 80%;
        }
        .card {
            border-radius: 10px;
        }
        .account_circle {
            height: 30px;
            width: 30px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .grid-item {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .row-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .row-item {
            margin: 10px;
        }
        .button {
            background-color: #007BFF !important; /* Primary color */
            color: #fff !important;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #FFC107 !important; /* Yellow hover color */
            color: #000000 !important;
        }
        .btn_color{
            background-color: #FFC926 !important;
            height: auto;
        }
        .btn_color:hover{
            background-color: #0342ab !important;
            
        }


        .form-control input:focus
  {
    border: none;
    box-shadow: none;
    outline: none;
  }
  .controls select:focus
  {
    border: 1px solid #ccc;
    box-shadow: none;
    outline: none;
  }
  .fa-times-circle
  {
    color: #ff5350;
    font-size: 20px;
    display: none;
  }
  .fa-check-circle
  {
    color: #27e492;
    font-size: 20px;
    display: none;
  }

input
{
  width: calc(90% - 25px);
    border: none;
    height: 32px;
}
div.form-control
  {
    padding: 0px 12px !important;
  }


  .request-invoice{
    margin-top: 15px;
  }

  #submit-bank-print,#tt-copy{
    background: #0342ab !important;
    padding: 10px;
  }
  .text-danger {
    color: #a94442;
}

#view-button{
    background-color : #0342ab;
    color:white;
}
#request_invoice_button{
    background-color : #024f20; 
}
#recent_invoice_button,#swift_tt_copy_button
{
    background-color : #198754;
}
.bankwirebut {
        background: #ffbf10 !important;
    }

    .bankwirebut:hover {
        background: #0342ab !important;
        color: white !important;
    }

    #invbut .active {
        background: #0342ab !important;
        color: white !important;
    }
    </style>
</head>
<body>
<?php include("../includes/header.php"); ?>
    <div class='layout cpanal_banar'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
         <div class="d-flex">
            <h2 class="fs-4">Control Panel | <?php echo $lang['deposit'] ?> </h2>
            <div class="d-flex <?php echo ($userPreferredLanguage === 'ar') ? 'me-auto' : 'ms-auto'; ?>"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2"><?php echo $lang['welcome1'] ?>,  <?php echo $_SESSION['sessionusername']; ?></p>
            </div>
        </div>
        <div class="bg-white p-3">
        <div class="text-primary fs-6 my-2"><?php echo $lang['controlPanel']?> | <?php echo ($paytype == "") ? $lang['deposit'] : (($paytype == "epay") ?   $lang['epay'] : (($paytype == "coin_base") ? $lang['coin_base']: $lang['bank_wire'])); ?> </div>
        <div class="my-3 fs-4" style="display:<?php echo ($paytype == '' && $liveAccountsCount < 1) ? '' : 'none' ?>">
        <?php echo $lang['live_account_null'] ?>
    </div>
        <div class="grid-container mt-5 bg-white" id="list" style="display:<?php echo ($paytype == '' && $liveAccountsCount > 0) ? '' : 'none' ?>">
      
                    <?php
                    // Sample data (replace this with data fetched from your source)
                    $data = [
                        ['image' => '../assets/images/pay-methods/8.png', 'text' => 'bank_wire', 'button_text' => 'deposit'],
                        ['image' => '../assets/images/pay-methods/2.png', 'text' => 'epay', 'button_text' => 'deposit'],
                        //['image' => '../assets/images/pay-methods/3.png', 'text' => 'Advcash', 'button_text' => 'deposit'],
                        //['image' => '../assets/images/pay-methods/5.png', 'text' => 'Perfect Money', 'button_text' => 'deposit'],
                        ['image' => '../assets/images/pay-methods/1.png', 'text' => 'coin_base', 'button_text' => 'deposit'],
                        //['image' => '../assets/images/pay-methods/7.png', 'text' => 'Western Union', 'button_text' => 'deposit'],
                        //['image' => '../assets/images/pay-methods/6.png', 'text' => 'Money Gram', 'button_text' => 'deposit'],
                        // Add more data as needed
                    ];
                    foreach ($data as $item) {
                        ?>
                            <div class="grid-item card bg-white rounded box mx-auto">
                                <div class="w-100 h-100 p-5">
                                    <img src="<?php echo $item['image']; ?>" class="mx-auto" alt="Image">
                                </div>
                                <p class="font-weight-bold  text-center mt-3">
                                    <?php echo $lang[$item['text']]; ?>
                                </p>
                                <button class='btn button mt-3 '  onclick="handleMethod('<?php echo $item['text']; ?>')">
                                    <?php echo $lang[$item['button_text']]; ?>
                                </button>
                            </div>
                            <?php
                    }
                    ?>
                </div>


    <!-- start bank wire -->
                <div class="row bg-white mt-4 p-5 rounded-3 part2" id="epayform" style="display:<?php echo $paytype == 'bank_wire' ? 'flex' : 'none' ?>">

                <?php if ($liveAccountsCount  <= 0) { ?>
                    <div>
<?php echo $lang['live_account_null'] ?>
</div> <?php } else {
                    ?>

                    <div>
                        <div class="col mb-3" id="invbut">
                            <a class="btn bankwirebut active mt-3" id="request_invoice_button" onclick="show_invoice_form('request_invoice')" ><?php echo $lang['request_new_invoice']?></a>

                            
                            <a class="btn bankwirebut mt-3" id="recent_invoice_button" onclick="show_invoice_form('recent_invoice')"><?php echo $lang['view_recent_invoices']?></a>

                           
                            <a class="btn bankwirebut mt-3" id="swift_tt_copy_button" onclick="show_invoice_form('swift_tt_copy')"><?php echo $lang['submit_swift']?></a>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $(".btn.bankwirebut").click(function() {
                                    $(".btn.bankwirebut").removeClass("active");

                                    $(this).addClass("active");

                                    var functionName = $(this).attr("onclick").match(/\('(.*?)'\)/)[1];
                                    console.log("Active Tab: " + functionName);
                                });
                            });
                            </script>

                       <!--  Start request invoice -->  
                           
                            <div  class="request-invoice" id="request-invoice-form" style="display:block">

                                <form method="post"  action="includes/bank_wire_request_invoice.php">
                                <h5 class=""><?php echo $lang['bank_wire_funding_details']?></h5>
                                <br>
                        <div class="row" >
                      <label class="col-sm-3 mt-3"><?php echo $lang['full_name'] ?></label>
                      <div class="col-lg-6 col-md-6 col-sm-8">
                          <div class="controls form-control" id="contentfullname">
                              <input onkeyup="validFullName()" type="text"  name="fullname" id="fullname" class="mt-2"   />
                              <i class="fa fa-check-circle" aria-hidden="true"></i>
                              <i class="fa fa-times-circle" aria-hidden="true"></i>
                              <p style="color:red;" id="validFullName" ></p>
                          </div>
                      </div>
                  </div>

                  <!-- <div class="row border-0 mt-4">
                                <div class="col border-0"  id="contentfullname">
                                    <label for="">Full Nam3e:</label>
                                    <input onkeyup="validFullName()" type="text"  name="fullname" id="fullname"   />
                          <i class="fa fa-check-circle" aria-hidden="true"></i>
                          <i class="fa fa-times-circle" aria-hidden="true"></i>
                          <p style="color:red;" id="validFullName" ></p>
                                </div>
                            </div> -->



                      <br />
                      <div class="row">

                          <label class="col-sm-3 mt-3"><?php echo $lang['account_number']?>:</label>
                          <div class="col-lg-6 col-md-6 col-sm-8">
                              <div class="controls">
                                  <select class="form-control" name="account_number" id="account_number"  required >
                                  <option value="" selected disabled>-<?php echo $lang['select']?>-</option>
                                            < <?php
                                            if ($liveAccountsCount > 0) {
                                                foreach ($liveaccounts as $account) {
                                                    echo '<option value="' . $account['account_id'] . '">' . $account['account_id'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="" disabled>No live accounts available</option>';
                                            }
                                            ?>
                                  </select>
                              </div>
                          </div>
                      </div>



                  <br />
                  <div class="row">
                      <label class="col-sm-3 mt-3"><?php echo $lang['deposit_now'] ?>:</label>
                      <div class="col-lg-6 col-md-6 col-sm-8">
                          <div class="controls form-control" id="contentamount">
                            <input  onkeyup="validAmount()" type="number" name="amount" id="amount" class="mt-2"  />
                            <input type="number" class="form-control" value="1" name="type" id="type" style="display:none;" />
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                            <p style="color:red;" id="validAmount" ></p>
                          </div>
                      </div>
                  </div>


                      <br />
                      <div class="row">
                          <label class="col-sm-3 mt-3"><?php echo $lang['currency_base'] ?>:</label>
                          <div class="col-lg-6 col-md-6 col-sm-8">
                              <div class="controls">
                                  <select class="form-control" name="currency" id="currency"   >
                                      <option value="1" selected>USD</option>
                                  </select>
                              </div>
                          </div>
                      </div>


                      <br />
                      <div class="row" >
                          <label class="col-sm-3 mt-3"><?php echo $lang['address'] ?>:</label>
                          <div class="col-lg-6 col-md-6 col-sm-8">
                              <div class="controls form-control" id="contentaddress" >
                                  <input onkeyup="validAddress()" id="address" type="text" name="address" class="mt-2"/>
                                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                                  <i class="fa fa-times-circle" aria-hidden="true"></i>
                                  <p style="color:red;" id="validAddress" ></p>
                              </div>
                          </div>
                      </div>


                        <br />
                        <div class="row" >
                            <label class="col-sm-3 mt-3"><?php echo $lang['country']?>:</label>
                            <div class="col-lg-6 col-md-6 col-sm-8">
                                <!-- <div class="controls form-control" id="contentcountry"> -->
                                    <!-- <input onkeyup="validCountry()" type="text" name="country" id="country"   /> -->
                                    <!-- <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                <p style="color:red;" id="validCountry" ></p> -->

                                    <select class="form-control rounded-3 box-shadow py-2 px-3" id="country" name="country" required>
                                    <option value="" selected disabled>-<?php echo $lang['select']?>-</option>
                                    <?php

                                    $countriesJson = file_get_contents('../assets/json/countries.json');
                                    if ($countriesJson === false) {
                                        echo "<option value=\"\">Error loading countries</option>";
                                    } else {
                                        $countries = json_decode($countriesJson, true);
                                        if ($countries === null) {
                                            echo "<option value=\"\">Error decoding countries</option>";
                                        } else {
                                            foreach ($countries as $country) {
                                                // $selected = ($profileDetails['country'] == $country['country']) ? 'selected' : '';
                                                // echo "<option value=\"{$country['country']}\">{$country['country']}</option>";
                                                $selected = ((string) $profileDetails['country'] == (string) $country['country']) ? 'selected' : '';
                                                echo "<option value=\"{$country['country']}\" $selected>{$country['country']}</option>";

                                            }
                                        }
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                        <!-- </div> -->

                     




                          <br>
                     
                          <div class="row" >
                              <label class="col-sm-3 mt-3"><?php echo $lang['city']?>:</label>
                              <div class="col-lg-6 col-md-6 col-sm-8">
                                  <div class="controls form-control" id="contentcity">
                                      <input onkeyup="validCity()" type="text" name="city" id="city" class="mt-2" />
                                      <i class="fa fa-check-circle" aria-hidden="true"></i>
                                      <i class="fa fa-times-circle" aria-hidden="true"></i>
                                      <p style="color:red;" id="validCity" ></p>
                                  </div>
                              </div>
                          </div>

                          <br />
                          <p><?php echo $lang['print_invoice_message'] ?></p>


                  <br />
                <div class="row">
                      <label class="col-sm-2"></label>
                      <div class="col-lg-6 col-md-6 col-sm-8 mt-4 ">
                          <div class="controls">
                               <input disabled class="btn form-control h-auto text-white rounded" type="submit" 
                               id="submit-bank-print" value="Print your invoice" />

                          </div>
                      </div>
                    </div>
                    </form>
                </div>
                <!--  End request invoice --> 

            
               <!--  start view-recent-invoices --> 

               <div id="view-recent-invoices" style="display:none">
          
             
               <h4 class="modal-title"><?php echo $lang['recent_invoices'] ?></h4>
                <br>
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th><?php echo $lang['account']?></th>
                          <th><?php echo $lang['Amount']?></th>
                          <th><?php echo $lang['date']?></th>
                          <th><?php echo $lang['invoice']?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?PHP foreach ($invoices as $invoice) { ?>
                            <tr>
                              <td><?php echo $invoice['account_number'] ?></td>
                              <td class="text-right"><?php echo $invoice['amount'] ?></td>
                              <td class="text-right"><?php echo date('M j, Y H:i:s', strtotime($invoice['created_at'])) ?></td>
                              <td><a class="btn" id="view-button" target="_blank" href="/assets/invoices/<?php echo $invoice['filename']; ?>.pdf">View invoice</a></td>

                            </tr>
                        <?PHP } ?>

                      </tbody>
                    </table>

              </div>
            </div>
             <!--  end view-recent-invoices --> 

                <!-- start tt copy -->
                <div  class="request-invoice" id="swift-tt-copy" style="display:none">
                <form method="post" >

                <div class="col-sm-8">

                    <br />
            <div class="row">


        <label class="col-sm-5"><?php echo $lang['account_number']?>:</label>
        <div class="col-sm-6">
            <div class="controls">
                <select class="form-control" name="tt_account_number" id="tt_account_number" required >
                <option value="" selected disabled>-<?php echo $lang['select'] ?>-</option>
                                            < <?php
                                            if ($liveAccountsCount > 0) {
                                                foreach ($liveaccounts as $account) {
                                                    echo '<option value="' . $account['account_id'] . '">' . $account['account_id'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="" disabled>' . $lang['no_live_accounts_available'] . '</option>';

                                            }
                                            ?>
                </select>
            </div>
        </div>
    </div>

    <br />
    <div class="row">
        <label class="col-sm-5"><?php echo $lang['currency_base'] ?>:</label>
        <div class="col-sm-6">
            <div class="controls">
                <select class="form-control" name="tt_currency" id="tt_currency" required >
                    <option value="1" selected>USD</option>
                </select>
            </div>
        </div>
    </div>


    <br />
    <div class="row" id="amount">
        <label class="col-sm-5"><?php echo $lang['deposit_amount'] ?>:</label>
        <div class="col-sm-6">
            <div class="controls">
                <input type="number" class="form-control border" name="tt_amount" id="tt_amount" required />

            </div>
        </div>
    </div>

    <br />
    <div class="row" id="amount">
        <label class="col-sm-5"><?php echo $lang['upload_tt_copy_file'] ?>:</label>
        <div class="col-sm-6">
            <div class="controls">
                <!-- <input type="file" class="form-control" name="ttcopy" id="ttcopy" required /> -->
                <input type="file" name="tt_copy" id="tt_copy"
                                class="form-control px-4 py-3 h-auto rounded-3 box-shadow border bg-white"
                                accept="image/*,application/pdf" required>
            </div>
        </div>
    </div>

    <br />
    <div class="row" id="amount">
        <label class="col-sm-5"><?php echo $lang['upload_invoice'] ?>:</label>
        <div class="col-sm-6">
            <div class="controls">
                <!-- <input type="file" class="form-control" name="invoice" id="invoice" required /> -->
                <input type="file" name="tt_invoice" id="tt_invoice"
                                class="form-control px-4 py-3 h-auto rounded-3 box-shadow border bg-white"
                                accept="image/*,application/pdf" required>
            </div>
        </div>
    </div>

    <br />
                        </br>
    <div class="row text-danger">
        <p><?php echo $lang['bank_account_currency_note'] ?></p>
    </div>

    <br />
    <div class="row">
        <label class="col-sm-4"></label>
        <div class="col-sm-8 w-auto">
            <div class="controls rounded" id="tt-copy">
                 <input class="btn form-control h-auto text-white p-0 w-auto" onclick="uploadDocument()" value="<?php echo $lang['deposit_now'] ?>"/>

            </div>
        </div>
    </div>

                </form>

                </div>
                <!-- end tt copy -->        
            </div>
        <?php } ?>   
        </div>                 
<!-- end bank wire -->


                <div class="row bg-white mt-4 p-5 rounded-3 part2" id="epayform" style="display:<?php echo $paytype == 'epay' ? 'flex' : 'none' ?>">
                    <div class="col-sm-8">
                        <form method="post"  action="includes/deposit_transactions.php?paymentType=epay">
                            <div class=" border-0">
                                <div class=" border-0 mb-1">
                                    <label for=""><?php echo $lang['account_number']?>:</label>
                                    <select class="form-select mt-2" id="sel1" name="epayAccountId" required>
                                        <option value="" selected disabled>-<?php echo $lang['select']?>-</option>
                                         <?php
                                        if ($liveAccountsCount > 0) {
                                            foreach ($liveaccounts as $account) {
                                                echo '<option value="' . $account['account_id'] . '">' . $account['account_id'] . '</option>';
                                            }
                                        } else {
                                            echo '<option value="" disabled>No live accounts available</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class=" border-0 my-2">
                                    <label for=""><?php echo $lang['currency_base'] ?></label>
                                    <select class="form-select mt-2" id="sel1" name="epayCurrency" required>
                                        <option>USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row border-0 mt-4">
                                <div class="col border-0">
                                    <label for=""><?php echo $lang['deposit_amount'] ?> </label>
                                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0"
                                        name="epayAmount" required>
                                </div>
                            </div>
                            <input type="submit" class="btn btn_color w-50 mt-4 text-white rounded"  value="<?php echo $lang["deposit_now"] ?>"> 
                        </form>
                    </div>
                    <div class="col-sm-3 mx-2 mt-5 r text-center align-items-center justify-content-center">
                        <img src="../assets/images/pay-methods/2.png" alt="img" class="w-100" />
                        <div class="mt-5">
                            <p class="fs-3 my-2"><?php echo $lang['epay_deposit_details']?></h2>
                            <p class="fs-6"><?php echo $lang['express_deposit_12_hours'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="row bg-white mt-4 p-5 rounded-3 part3" id="coinbaseform" style="display:<?php echo $paytype == 'coin_base' ? 'flex' : 'none' ?>">
                    <div class="col-sm-8">
                        <form method="post"  action="includes/deposit_transactions.php?paymentType=coinbase">
                            <div class=" border-0">
                                <div class=" border-0 mb-1">
                                    <label for=""><?php echo $lang['account_number']?> :</label>
                                    <select class="form-select mt-2" id="sel1" name="cbAccountId" required>
                                        <option value="" selected disabled>-<?php echo $lang['select']?>-</option>
                                        < <?php
                                        if ($liveAccountsCount > 0) {
                                            foreach ($liveaccounts as $account) {
                                                echo '<option value="' . $account['account_id'] . '">' . $account['account_id'] . '</option>';
                                            }
                                        } else {
                                            echo '<option value="" disabled>No live accounts available</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class=" border-0 my-2">
                                    <label for=""><?php echo $lang['currency_base']?>:</label>
                                    <select class="form-select mt-2" id="sel1" name="cbCurrency" required>
                                        <option>USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row border-0 mt-4">
                                <div class="col border-0">
                                    <label for=""><?php echo $lang['amount_to_deposit'] ?></label>
                                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0"
                                        name="cbAmount" required>
                                </div>
                            </div>
                            <input type="submit" class="btn btn_color w-50 mt-4 text-white rounded"  value="<?php echo $lang['deposit_now'] ?>"> 
               
                        </form>
                    </div>
                    <div class="col-sm-3 mx-2 mt-5 r text-center align-items-center justify-content-center">
                        <img src="../assets/images/pay-methods/1.png" alt="img" class="w-100" />
                        <div class="mt-5">
                            <p class="fs-3 my-2"><?php echo $lang['coinbase_deposit_details'] ?></h2>
                            <p class="fs-6"><?php echo $lang['express_deposit_12_hours'] ?></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>

</body>
<script>

 function handleMethod(type) {
        window.location.href='<?php echo $siteurl . "cpanel/deposit.php?type=" ?>'+type;
 }
//  function deposit(method){
//     if(method==="epay"){
//         var selectedAccountId = $('select[name="epayAccountId"]').val();
//         var selectedCurrency = $('select[name="epayCurrency"]').val();
//         var withdrawAmount = $('input[name="epayAmount"]').val();
//         console.log("data",selectedAccountId,selectedCurrency,withdrawAmount)
//     }else{
//         var selectedAccountId = $('select[name="cbAccountId"]').val();
//         var selectedCurrency = $('select[name="cbCurrency"]').val();
//         var withdrawAmount = $('input[name="cbAmount"]').val();
//         console.log("data",selectedAccountId,selectedCurrency,withdrawAmount)
//     }
 //   }
 function deposit(method) {
        alert(" for Epay deposit.");
    var isValid = true;

    if (method === "epay") {
        var selectedAccountId = $('select[name="epayAccountId"]').val();
        var selectedCurrency = $('select[name="epayCurrency"]').val();
        var depositAmount = $('input[name="epayAmount"]').val();

        if (!selectedAccountId || !selectedCurrency || !depositAmount) {
            isValid = false;
            alert("All fields are required for Epay deposit.");
        } else if (!depositAmount.match(/^[0-9]+$/)) {
            isValid = false;
            alert("Amount must be numeric for Epay deposit.");
        } else if (depositAmount.length < 1 || depositAmount.length > 5) {
            isValid = false;
            alert("Amount must be between 1 and 5 digits,for Epay deposit.");
        }
    } else {
        var selectedAccountId = $('select[name="cbAccountId"]').val();
        var selectedCurrency = $('select[name="cbCurrency"]').val();
        var depositAmount = $('input[name="cbAmount"]').val();

        if (!selectedAccountId || !selectedCurrency || !depositAmount) {
            isValid = false;
            alert("All fields are required for CoinBase deposit.");
        } else if (!depositAmount.match(/^[0-9]+$/)) {
            isValid = false;
            alert("Amount must be numeric for CoinBase deposit.");
        } else if (depositAmount.length < 1 || depositAmount.length > 5) {
            isValid = false;
            alert("Amount must be between 1 and 5 digits,for CoinBase deposit.");
        }
    }

    if (isValid) {
        console.log("Data is valid. Proceed with deposit.");
        alert("Done and Dusted")
    }
}



var fullNameDisable , amountDisable , cityDisable , addressDisable , countryDisable;
  $('.form-control input').blur(function()
  {
      if( !$(this).val() ) {
            $(this).siblings('.fa-times-circle').show();
            $(this).parents(".form-control").css('borderColor' , "#ff5350");
            $(this).siblings('p').text("*required");
      }
  });
    function validFullName() {
      let fullname = document.getElementById("fullname").value;
      let validFullName = document.getElementById("validFullName");
      let regex=/^[A-Za-z ]+$/;
      let text;
      $('.fa-times-circle','#contentfullname').hide();
      $('.fa-check-circle','#contentfullname').hide();
      if(fullname == '' || fullname == ' ')
      {
        text = "*required";
        fullNameDisable=false;
        document.getElementById("contentfullname").style.borderColor = "#ff5350";
        $('.fa-times-circle','#contentfullname').show();
      }
      else if (!regex.test(fullname))
      {
        text = "*English letters only allowed. ";
        fullNameDisable=false;
        document.getElementById("contentfullname").style.borderColor = "#ff5350";
        $('.fa-times-circle','#contentfullname').show();
      }
      else
      {
        text = "";
        fullNameDisable=true;
        document.getElementById("contentfullname").style.borderColor = "#27e492";
        $('.fa-check-circle','#contentfullname').show();
      }
      validFullName.innerHTML = text;
      validButton();
    }
    function validAmount() {
      let amount = document.getElementById("amount").value;
      let validAmount = document.getElementById("validAmount");
      let text;
      $('.fa-times-circle','#contentamount').hide();
      $('.fa-check-circle','#contentamount').hide();
      if(amount == '' || amount == ' ')
      {
        text = "*required";
        amountDisable=false;
        document.getElementById("contentamount").style.borderColor = "#ff5350";
        $('.fa-times-circle','#contentamount').show();
      }
      else
      {
        text = "";
        document.getElementById("contentamount").style.borderColor = "#27e492";
        $('.fa-check-circle','#contentamount').show();
        amountDisable=true;
      }
      validAmount.innerHTML = text;
      validButton();
    }
    function validAddress() {
      let address = document.getElementById("address").value;
      let validAddress = document.getElementById("validAddress");
      let text;
      $('.fa-times-circle','#contentaddress').hide();
      $('.fa-check-circle','#contentaddress').hide();
      if(address == '' || address == ' ')
      {
        text = "*required";
        addressDisable=false;
        document.getElementById("contentaddress").style.borderColor = "#ff5350";
        $('.fa-times-circle','#contentaddress').show();
      }

      else
      {
        text = "";
        document.getElementById("contentaddress").style.borderColor = "#27e492";
        $('.fa-check-circle','#contentaddress').show();
        addressDisable=true;
      }
      validAddress.innerHTML = text;
      validButton();
    }
    function validCity() {
      let city = document.getElementById("city").value;
      let validCity= document.getElementById("validCity");
      let regex=/^[A-Za-z ]+$/;
      let text;
      $('.fa-times-circle','#contentcity').hide();
      $('.fa-check-circle','#contentcity').hide();
      if(city == '' || city == ' ')
      {
        text = "*required";
        cityDisable=false;
        document.getElementById("contentcity").style.borderColor = "#ff5350";
        $('.fa-times-circle','#contentcity').show();
      }
      else if (!regex.test(city))
      {
        text = "*English letters only allowed. ";
        cityDisable=false;
        document.getElementById("contentcity").style.borderColor = "#ff5350";
        $('.fa-times-circle','#contentcity').show();
      }
      else
      {
        text = "";
        document.getElementById("contentcity").style.borderColor = "#27e492";
        $('.fa-check-circle','#contentcity').show();
        cityDisable=true;
      }
      validCity.innerHTML = text;
      validButton();
    }
    // function validCountry() {
    //   let country = document.getElementById("country").value;
    //   let validCountry= document.getElementById("validCountry");
    //   let regex=/^[A-Za-z ]+$/;
    //   let text;
    //   $('.fa-times-circle','#contentcountry').hide();
    //   $('.fa-check-circle','#contentcountry').hide();
    //   if(country == '' || country == ' ')
    //   {
    //     text = "*required";
    //     countryDisable=false;
    //     document.getElementById("contentcountry").style.borderColor = "#ff5350";
    //     $('.fa-times-circle','#contentcountry').show();
    //   }
    //   else if (!regex.test(country))
    //   {
    //     text = "*English letters only allowed. ";
    //     countryDisable=false;
    //     document.getElementById("contentcountry").style.borderColor = "#ff5350";
    //     $('.fa-times-circle','#contentcountry').show();
    //   }
    //   else
    //   {
    //     text = "";
    //     document.getElementById("contentcountry").style.borderColor = "#27e492";
    //     $('.fa-check-circle','#contentcountry').show();
    //     countryDisable=true;
    //   }
    //   validCountry.innerHTML = text;
    //   validButton();
    // }
    function validButton()
    {
    //   if((addressDisable == true && cityDisable == true) && (amountDisable == true && countryDisable == true) && (fullNameDisable == true))
    if((addressDisable == true && cityDisable == true) && amountDisable == true && (fullNameDisable == true))
      {
        document.getElementById("submit-bank-print").removeAttribute("disabled");
      }
      else
      {
        document.getElementById("submit-bank-print").setAttribute('disabled','disabled');
      }
    }


    function show_invoice_form(type) {
        
        var swiftCopy = document.getElementById("swift_tt_copy_button");
        var recentInvoice = document.getElementById("recent_invoice_button");
        var  requestInvoice = document.getElementById("request_invoice_button");
        // swiftCopy.style.backgroundColor = "#024f20";
        // swiftCopy.style.disabled = true;
      
       
    if (type == "request_invoice") {
        $('div#request-invoice-form').show();
        $('div#view-recent-invoices').hide();
        $('div#swift-tt-copy').hide();
       
        swiftCopy.style.backgroundColor = "#198754";
      
        recentInvoice.style.backgroundColor = "#198754";
       
        requestInvoice.style.backgroundColor = "#024f20";
      

    } else if (type == "recent_invoice") {
        $('div#request-invoice-form').hide();
        $('div#view-recent-invoices').show();
        $('div#swift-tt-copy').hide();
        swiftCopy.style.backgroundColor = "#198754";
      
        recentInvoice.style.backgroundColor = "#024f20";
        
        requestInvoice.style.backgroundColor = "#198754";

    }
    else{
        $('div#swift-tt-copy').show();
        $('div#request-invoice-form').hide();
        $('div#view-recent-invoices').hide();
        swiftCopy.style.backgroundColor ="#024f20";
      
        recentInvoice.style.backgroundColor = "#198754";
        requestInvoice.style.backgroundColor = "#198754";

    }
}

function uploadDocument() {
       
        
        invoice=$('input[id=tt_invoice]')[0].files[0];
        ttcopy=$('input[id=tt_copy]')[0].files[0];
        // amount=$('textarea[id=tt_amount]').val();
        var amount = $('#tt_amount').val();

        currency=$('select[id=tt_currency]').val();
        account_number= $('select[id=tt_account_number]').val();
        
        var formData = new FormData();
        formData.append('invoice', invoice);
        formData.append('ttcopy', ttcopy);
        formData.append('amount', amount);
        formData.append('currency', currency);
        formData.append('account_number', account_number);

        if (!account_number) {
            alert('Please select a Account Number.');
            return;
        }

        else if (!currency) {
            alert('Please enter a Currency.');
            return;
        }
        else if (!amount.trim()) {
            alert('Please enter a Deposit Amount.');
            return;
        }

        else if (!ttcopy) {
            alert('Please choose a TT Copy File.');
            return;
        }

        else if (!invoice) {
            alert('Please choose a Invoice File.');
            return;
        }
       
        $.ajax({
            type: 'POST',
            url: 'includes/deposit-fund-bankwire_tt_copy.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
               
                    alert("Deposit has been delivered successfully.");
                  
                    window.location.href = '<?php echo $siteurl . "cpanel/transactional-history.php?tap=1" ?>';
           
                //  window.location.href = "";

            },
            error: function (error) {
                console.error(error);
                alert("Failed to Upload Document.");
            }
        });
    }

    
</script>
</html>