<?php session_start() ?>
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
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("includes/copy-trade.php") ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div class="d-flex">
                    <h2 class="fs-4">Copy Trade</h2>
                    <div class="d-flex ml-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                        <p class="mt-1 ms-2">Welcome, <?php echo isset($_SESSION['sessionusername']) ? $_SESSION['sessionusername'] :"" ?></p>
                    </div>
                </div>
                <div class="bg-white mt-4 p-5 rounded-3">
                <form method="post" action='<?php echo $siteurl."cpanel/includes/post-copy-trade.php" ?>'>
                    <div class="row border-0">
                        <div class="col border-0">
                            <label for="">Copy From:</label>
                            <select class="form-select mt-2" id="sel1" name="copy_from">
                            <option value="" disabled selected >- Select -</option>
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
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $acctname ?> </option>
                                                <?php } ?>
                                                <option id="otheraccount" value="other">Other</option>
                                                
                            </select>
                            <input type="number" class="form-control hidden" name="other_account" id="other_account" placeholder="Account Number" style="display:none" />
                        </div>
                        <div class="col border-0">
                            <label for="">Copy To:</label>
                            <select class="form-select mt-2" id="sel1" name="copy_to">
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
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $acctname ?> </option>
                                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row border-0 mt-4">
                        <div class="col border-0">
                            <label for="">Copy Percentage:</label>
                            <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="percentage">
                        </div>
                        <div class="col border-0">
                            <label for="">Account Password:</label>
                            <input type="password" class="form-control border rounded-3 mt-2" placeholder="***********"
                                name="password">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"
                                checked>
                            <label class="form-check-label mt-1" for="check1">I agree the terms and conditions</label>
                        </div>
                    </div>
                
                <input type="submit" class="btn custom-button text-light w-25 mt-4" /> 
                </form>
                </div>
                <div >
                    <h4 class="fs-4"> Linked copy Trade </h4>
                    <table class="class='gap-3 bg-white table mt-3'">
                    <thead>
                        <tr>
                                <td>#</td>
                                <td>Copy From</td>
                                <td>Copy To</td>
                                <td>Copy Percentage</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody><?PHP $i=1;  ?>
                        <?php foreach ($copy_trades as $account => $accountvalue ) { ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $accountvalue['copy_from']?> </td>
                                <td> <?php echo $accountvalue['copy_to'] ?> </td>
                                <td> <?php echo $accountvalue['percentage'] ?> </td>
                                <td> <?php echo $accountvalue['status'] ?> </td>
                                <td> <button class="btn custom-button text-white"> delete </button> </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>
</html>