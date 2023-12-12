<?php if(!isset($_SESSION['sessionuser']))session_start(); ?>
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
        <form method="post" action="includes/post-internal-transfer.php">
            <div class="row border-0">
                <div class="col border-0">
                    <label for=""><?php echo $lang['transferFrom'] ?>:</label>
                    <select class="form-select mt-2" id="sel1" name="transfer_from">
                    <?php $acctname = "";
                                                /*foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $acctname ?> </option>
                                                <option value="other">Other Account</option>
                                                
                                                <?php */
                                                  ?>
                             <option value="" selected disabled>--select--</option>
                            <option value="1" >Individual Account</option>
                            <option value="2" >IB Account </option>
                    </select>
                </div>
                <div class="col border-0">
                    <label for=""><?php echo $lang['transferTo'] ?>: </label>
                    <select class="form-select mt-2" id="sel1" name="transfer_to">
                    <?php $acctname = "";
                                                     /*foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $acctname ?> </option>
                                                <option value="other">Other Account</option>
                                                
                                                <?php */
                                                ?>
                                                <option value="" selected disabled>--select--</option>
                                               <option value="1" >Individual Account</option>
                                               <option value="2" >IB Account </option>
                    </select>
                </div>
                <div class="col border-0">
                    <label for=""><?php echo $lang['currencyBase'] ?>:</label>
                    <select class="form-select mt-2" id="sel1" name="currency">
                        <option value="1">USD</option>
                    </select>
                </div>
            </div>
            <div class="row border-0 mt-4">
                <div class="col border-0">
                    <label for=""><?php echo $lang['transferAmount'] ?></label>
                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="amount">
                </div>
                <div class="col border-0">
                    <label for=""><?php echo $lang['accountPassword'] ?>:</label>
                    <input type="password" class="form-control border rounded-3 mt-2" placeholder="***********"
                        name="password">
                </div>
            </div>
            <div class="row mt-4">
                <div class="form-check col border-0">
                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"
                        checked required>
                    <label class="form-check-label mt-1" for="check1"><?php echo $lang['iAgreeTerms'] ?></label>
                </div>
                <div class="col border-0">
                    <p class='fs-3 my-2'><?php echo $lang['internalTransferDetails'] ?></h1>
                    <h6><?php echo $lang['expressTransfer'] ?></h6>
                </div>
            </div>
       
        <input type="submit" class="btn custom-button text-light w-25 mt-4 rounded" value="<?php echo $lang['transferNow'] ?>" />
        </form>
    </div>
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>