<?php if(!isset($_SESSION['sessionuser']))session_start();
if(isset($_SESSION['msg']))
{
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
}
else
{
    $msg = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
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
        .btn_color{
            background-color: #0342ab !important;
        }
    </style>
</head>

<body>
<?php include("../includes/header.php"); ?>
<?php include("includes/add_account.php"); ?>
<div class="main-header" style="text-align:center"> <?php echo $msg; ?></div>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
    <div class="d-flex">
        <h2 class="fs-4">Add Existing Account</h2>
        <div class="d-flex ml-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>
    <div class="bg-white mt-4 p-5 rounded-3">
        <form method="post" action="includes/post_add_account.php">
            <div class="row border-0">
                <div class="col border-0">
                    <label for="">Account Type:</label>
                    <select class="form-select mt-2" id="sel1" name="account_type">
                    <?php $acctname = "";
                                                foreach($liveAccounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $acctname ?> </option>
                                                <?php } ?>
                    </select>
                </div>
                <div class="col border-0">
                    <label for="">Account Group::</label>
                    <select class="form-select mt-2" id="sel1" name="account_group">
                        <option>-Select-</option>
                        <option value=1>Fixed Spread Account</option>
                        <option value=2>Scalping Account</option>
                        <option value=3>Variable Spread Account</option>
                        <option value=4>Bonus Account</option>
                    </select>
                </div>
                <div class="col border-0">
                    <label for="">Currency base:</label>
                    <select class="form-select mt-2" id="sel1" name="currency">
                        <option value=1>USD</option>
                    </select>
                </div>
            </div>
            <div class="row border-0 mt-4">
                <div class="col border-0">
                    <label for="">MT4 Login User:</label>
                    <input type="text" class="form-control border rounded-3 mt-2" placeholder="Login Name" name="account_id">
                </div>
                <div class="col border-0">
                    <label for="">MT4 Login Password:</label>
                    <input type="password" class="form-control border rounded-3 mt-2" placeholder="***********"
                        name="password">
                </div>
            </div>
            <div class="row mt-4">
                <div class="form-check">
                    <input type="number" class="form-check-input" id="check1" name="account_radio_type" value="1"
                        style="display:none">
                    <label class="form-check-label mt-1" for="check1">I agree the terms and conditions</label>
                </div>
            </div>
            <input type="submit" class="btn btn_color w-25 mt-4 text-white" value ='Add Account' /> 
        </form>
        
    </div>
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>