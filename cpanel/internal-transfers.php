<?php if(!isset($_SESSION['sessionuser']))session_start(); 
$success = false;
if(isset($_SESSION['intltrnsfersuccess'])){
    $success = $_SESSION['intltrnsfersuccess'];
    unset($_SESSION['intltrnsfersuccess']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

 

    <style>
        form .row {
            border: 0px solid;
        }
        .custom-button{
            background-color: #0342AB !important;
        }
    </style>
</head>

<body>
<?php include("../includes/header.php"); ?>
<?php include('includes/internal-transfer.php'); ?>
<div class="main-header" id="myintDiv">
    <?php
    if ($success) {
        echo "<center>Internal transfer sent for approval</center>";
        echo '<script>
                setTimeout(function() {
                    var myintDiv = document.getElementById("myintDiv");
                    myintDiv.style.display = "none";
                }, 2000); 
              </script>';
    }
    ?>
</div>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
    <div class="d-flex">
        <h2 class="fs-4"><?php echo $lang['internalTransfer'] ?></h2>
        <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2"><?php echo $lang['welcome'] ?>,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>
    <div class="bg-white mt-4 p-5 rounded-3">
    <form id="transferForm" method="post" action="includes/post-internal-transfer.php">
            <div class="row border-0">
                <div class="col-lg-4 col-md-6 col-sm-12 border-0 mt-4">
                    <label for=""><?php echo $lang['transferFrom'] ?>:</label>
                    <select class="form-select mt-2" id="sel1" name="transfer_from" onchange="TransferFrom(this.value)" required>
                            <option value="" disabled selected ><?php echo $lang['select'] ?></option>
                            <?php 
                                                $acctname = "";
                                                foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $account['account_id'].' | '.$acctname ?> </option>
                                                <?php } ?>
                            </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 border-0 mt-4">
                    <label for=""><?php echo $lang['transferTo'] ?>: </label>
                    <select class="form-select mt-2" id="sel1" name="transfer_to" onchange="TransferTo(this.value)" required>
                            <option value="" disabled selected ><?php echo $lang['select'] ?></option>
                            <?php 
                                                $acctname = "";
                                                foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $account['account_id'].' | '.$acctname ?> </option>
                                                <?php } ?>
                                                <option id="otheraccount" value="other">Other</option>
                            </select>
                            <div id="other_account" class="form-control hidden" style="display:none">
                                <input type="number"  name="other_account"  placeholder="Account Number" />
                            </div>    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 border-0 mt-4">
                    <label for=""><?php echo $lang['currencyBase'] ?>:</label>
                    <select class="form-select mt-2" id="sel1" name="currency" required>
                        <option value="1">USD</option>
                    </select>
                </div>
            <!-- </div>
            <div class="row border-0 mt-4"> -->
                <div class="col-lg-4 col-md-6 col-sm-12 border-0 mt-4">
                    <label for=""><?php echo $lang['transferAmount'] ?></label>
                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="amount" required>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 border-0 mt-4">
                    <label for=""><?php echo $lang['accountPassword'] ?>:</label>
                    <input type="password" class="form-control border rounded-3 mt-2" placeholder="MT4 Password"
                        name="password" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="form-check col border-0">
                    <input type="checkbox" class="form-check-input" id="check1" name="checkBox" value="something"
                        checked required>
                    <label class="form-check-label mt-1" for="check1"><?php echo $lang['iAgreeTerms'] ?></label>
                </div>
                <div class="col border-0">
                    <p class='fs-3 my-2'><?php echo $lang['internalTransferDetails'] ?></h1>
                    <h6><?php echo $lang['expressTransfer'] ?></h6>
                </div>
            </div>
       
            <input type="button" class="btn custom-button text-light w-50 mt-4 rounded" value="<?php echo $lang['transferNow'] ?>" onclick="validateAndSubmit()" />
        </form>
    </div>
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); 
     if (isset($_SESSION['internal_transfer_meesage'])) {
        echo '<script>alert("' . $_SESSION['internal_transfer_meesage'] . '");</script>';
        unset($_SESSION['internal_transfer_meesage']);

    }

    ?>
</body>
<script>
function validateAndSubmit() {

    var amount = $('input[name="amount"]').val();
    var transferFrom = $('select[name="transfer_from"]').val();
    var transferTo = $('select[name="transfer_to"]').val();
    var agreeTerms = $('input[name="checkBox"]').prop("checked"); 
  
    // Validate transfer_from and transfer_to
    if (transferFrom === transferTo) {
        alert("Transfer From and Transfer To cannot be the same.");
        return;
    }

    // Validate other fields
    if (!amount || isNaN(amount) || amount <= 0) {
        alert("Please enter a valid transfer amount.");
        return;
    }

    if (!agreeTerms) {
        alert("Please agree to the terms before submitting.");
        return;
    }

    // If all validations pass, submit the form
    document.getElementById('transferForm').submit();
}

function TransferFrom(value)
{
   
$('select#transfer_to').val('');
$('select#transfer_to option').show();
$('select#transfer_to option[value='+value+']').hide();

}

function TransferTo(value)
{
    
if(value=='other')
{

// $('input#other_account').removeClass('hidden')
$('div#other_account').show();

}else{
// $('input#other_account').addClass('hidden')
$('div#other_account').hide();


}
}
</script>
</html>