<?php if (!isset($_SESSION['sessionuser']))
    session_start();
include("../includes/softwareinclude/functions.php");
$paytype = isset($_GET['type']) ? $_GET['type'] : "";
$liveaccounts = getAllLiveAccounts();
$liveAccountsCount = count($liveaccounts);
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
            background-color: #007BFF !important;
            /* Primary color */
            color: #fff !important;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #FFC107 !important;
            /* Yellow hover color */
            color: #000000 !important;
        }

        form .row {
            border: 0px solid;
        }

        .btn_color {
            background-color: #FFC926 !important;
        }

        .btn_color:hover {
            background-color: #0342ab !important;
        }

        #banK_wire_submit{
            background: #0342ab !important;
        }

        p{
            text-align:justify;
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
                    <h2 class="fs-4">
                        <?php echo $lang['withdraw_account'] ?>
                    </h2>
                    <div class="d-flex <?php echo ($userPreferredLanguage === 'ar') ? 'me-auto' : 'ms-auto'; ?>"><img src="../assets/images/svg/account_circle.svg"
                            class="account_circle" alt="">
                        <p class="mt-1 ms-2">
                            <?php echo $lang['welcome1'] ?>,
                            <?php echo $_SESSION['sessionusername']; ?>
                        </p>
                    </div>
                </div>
                <div class="bg-white p-3">
                    <div class="text-primary fs-6 my-2">  <?php echo $lang['controlPanel'] ?> |
                        <?php echo ($paytype == "") ? $lang["Withdraw"] : (($paytype == "Epay") ? $lang["epay"] : (($paytype == "Bank Wire") ? $lang["bank_wire"] : $lang["coin_base"])); ?>
                    </div>
                    <div class="my-3 fs-4"
                        style="display:<?php echo ($paytype == '' && $liveAccountsCount < 1) ? '' : 'none' ?>">You Have
                        no live account, You can add your account from <a class="fs-4 text-primary"
                            href="add-existing-account.php">Here</a> or open a new account from <a
                            class="fs-4 text-primary" href="open-live-account.php">Here</a> </div>
                    <div class="grid-container mt-5 part1" id="list"
                        style="display:<?php echo ($paytype == '' && $liveAccountsCount > 0) ? '' : 'none' ?>">
                        <!-- Dynamically generate grid items here -->
                        <?php
                        // Sample data (replace this with data fetched from your source)
                        $data = [
                            ['image' => '../assets/images/pay-methods/8.png', 'text' => 'Bank Wire', 'button_text' => 'withdraw1'],
                            ['image' => '../assets/images/pay-methods/2.png', 'text' => 'Epay', 'button_text' => 'withdraw1'],
                            //['image' => '../assets/images/pay-methods/3.png', 'text' => 'Advcash', 'button_text' => 'Withdraw'],
                            //['image' => '../assets/images/pay-methods/5.png', 'text' => 'Perfect Money', 'button_text' => 'Withdraw'],
                            // ['image' => '../assets/images/pay-methods/1.png', 'text' => 'Coin Base', 'button_text' => 'withdraw1'],
                            //['image' => '../assets/images/pay-methods/7.png', 'text' => 'Western Union', 'button_text' => 'Withdraw'],
                            //['image' => '../assets/images/pay-methods/6.png', 'text' => 'Money Gram', 'button_text' => 'Withdraw'],
                            // Add more data as needed
                        ];
                        foreach ($data as $item) {
                            ?>
                            <div class="grid-item card bg-white rounded box mx-auto">
                                <div class="w-100 h-100 p-5">
                                    <img src="<?php echo $item['image']; ?>" class="mx-auto" alt="Image">
                                </div>
                                <p class="font-weight-bold  text-center mt-3">
                                    <?php echo $item['text']; ?>
                                </p>
                                <button class='btn button mt-3 ' onclick="handleMethod('<?php echo $item['text']; ?>')">
                                    <?php echo $lang[$item['button_text']]; ?>
                                </button>
                            </div>
                            <?php
                        }
                        ?>
                    </div>


                    <!-- start bank wire -->

                    <div class="row bg-white mt-4 p-5 rounded-3 part2" id="bank_wire"
                        style="display:<?php echo $paytype == 'Bank Wire' ? 'flex' : 'none' ?>">
                        <div class="col-lg-6 col-md-10 col-sm-12">
                        <form method="post" action="includes/add_transactions.php?paymentType=bank_wire">
                            


                                <br />
                                <div class="row mb-2">


                                    <label class="col-sm-4 mt-3"><?php echo $lang['account_number']?>:</label>
                                    <div class="col-sm-8">
                                        <div class="controls">
                                            <select class="form-control" name="account_number" id="account_number"
                                                required>
                                                <option value="" disabled selected>- <?php echo $lang['select']?> -</option>
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
                                    </div>
                                </div>

                                <br />
                                <div class="row mb-2">
                                    <label class="col-sm-4 mt-3"><?php echo $lang['currency_base']?>:</label>
                                    <div class="col-sm-8">
                                        <div class="controls">
                                            <select class="form-control" name="currency" id="currency" required>
                                                <option value="1" selected>USD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <br />
                                <div class="row mb-2" id="amount">
                                    <label class="col-sm-4 mt-3"><?php echo $lang['withdraw_amount']?>:</label>
                                    <div class="col-sm-8">
                                        <div class="controls">
                                            <input type="number" class="form-control border" name="amount" id="amount"
                                                required />

                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div class="row mb-2" id="amount">
                                    <label class="col-sm-4 mt-3"><?php echo $lang['bank_name']?>:</label>
                                    <div class="col-sm-8">
                                        <div class="controls">
                                            <input type="text" class="form-control border" name="bank_name" id="bank_name"
                                                required />

                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div class="row mb-2" id="amount">
                                    <label class="col-sm-4 mt-3"><?php echo $lang['bank_swift']?>:</label>
                                    <div class="col-sm-8">
                                        <div class="controls">
                                            <input type="text" class="form-control border" name="bank_swift" id="bank_swift"
                                                required />

                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div class="row mb-2" id="amount">
                                    <label class="col-sm-4 mt-3"><?php echo $lang['bank_iban']?>:</label>
                                    <div class="col-sm-8">
                                        <div class="controls">
                                            <input type="text" class="form-control border" name="bank_iban" id="bank_iban"
                                                required />

                                        </div>
                                    </div>
                                </div>



                                <br />
                                <div class="row mb-2">
                                    <label class="col-sm-4"></label>
                                    <div class="col-sm-8 " >
                                        <div class="controls">
                                            <input class="btn form-control rounded text-white" type="submit" id="banK_wire_submit"
                                                value="<?php echo $lang['withdraw_amount']?>" />

                                        </div>
                                    </div>
                                </div>
                          

                        </form>
                        </div>
                        <div class="col-lg-6 col-md-10 col-sm-11" >

<div id="demoaccount" class="">
<img loading="lazy" src="/assets/cpanel/img/bankwire.png" alt="Bank Wire"  class="max-width-100 d-flex mx-auto" />
    <h3><?php echo $lang['bank_wire_withdrawing_details'] ?></h3>
    <p><?php echo $lang['important_terms_and_conditions']?></p>
</div>

</div>
                    </div>
                    <!-- end bank wire -->

                    <div class="row bg-white mt-4 p-5 rounded-3 part2" id="epayform"
                        style="display:<?php echo $paytype == 'Epay' ? 'flex' : 'none' ?>">
                        <div class="col-lg-6 col-md-10 col-sm-12">
                            <form method="post" action="includes/add_transactions.php?paymentType=epay">
                                <div class=" border-0">
                                    <div class=" border-0 mb-1">
                                        <label for=""><?php echo $lang['account_number'] ?>:</label>
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
                                        <label for=""><?php echo $lang['currency_base']?>:</label>
                                        <select class="form-select mt-2" id="sel1" name="epayCurrency" required>
                                            <option value="1">USD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col border-0">
                                    <label for=""><?php echo $lang['epay_account']?></label>
                                    <input type="text" class="form-control border rounded-3 mt-2"
                                        placeholder="Your Epay Account No" name="epayAccount" pattern="[0-9]{4,9}"
                                        title="Please enter a number with 4 to 9 digits" required>
                                </div>
                                <div class="row border-0 mt-4">
                                    <div class="col border-0">
                                        <label for=""><?php echo $lang['amount_to_withdraw']?></label>
                                        <input type="number" class="form-control border rounded-3 mt-2" placeholder="0"
                                            name="epayAmount" required>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn_color w-50 mt-4 text-white" value="<?php echo $lang['withdraw_now']?>">

                            </form>
                        </div>
                        <div class="col mx-2 mt-5 r text-center align-items-center justify-content-center">
                            <img src="../assets/images/pay-methods/2.png" alt="img" class="w-50" />
                            <div class="mt-5">
                                <p class="fs-3 my-2"><?php echo $lang['epay_withdraw_details']?></h2>
                                <p class="fs-6"><?php echo $lang['express_withdrawal_12_hours']?></p>
                            </div>
                        </div>
                    </div>



                    <div class="row bg-white mt-4 p-5 rounded-3 part3" id="coinbaseform"
                        style="display:<?php echo $paytype == 'Coin Base' ? 'flex' : 'none' ?>">
                        <div class="col-lg-6 col-md-10 col-sm-12">
                            <form method="post" action="includes/add_transactions.php?paymentType=coinbase">
                                <div class=" border-0">
                                    <div class=" border-0">
                                        <label for=""><?php echo $lang["account_number"]?>:</label>
                                        <select class="form-select mt-2" id="sel1" name="cbAccountId" required>
                                            <option value="" selected disabled>-<?php echo $lang["select"]?>-</option>
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

                                    <div class=" border-0">
                                        <label for=""><?php echo $lang["currency_base"]?>:</label>
                                        <select class="form-select mt-2" id="sel1" name="cbCurrency" required>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row border-0 mt-4">
                                    <div class="col border-0">
                                        <label for=""><?php echo $lang["coinbase_account"]?></label>
                                        <input type="text" class="form-control border rounded-3 mt-2"
                                            placeholder="Your Coin Base Account No" name="cbAccount"
                                            pattern="[0-9]{4,9}" title="Please enter a number with 4 to 9 digits"
                                            required>
                                    </div>
                                </div>
                                <div class="row border-0 mt-4">
                                    <div class="col border-0">
                                        <label for=""><?php echo $lang["withdraw_amount"]?></label>
                                        <input type="number" class="form-control border rounded-3 mt-2" placeholder="0"
                                            name="cbAmount" required>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn_color w-50 mt-4 text-white" value="<?php echo $lang['withdraw_now']?>">

                            </form>
                        </div>
                        <div class="col mx-2 mt-5 r text-center align-items-center justify-content-center">
                            <img src="../assets/images/pay-methods/1.png" alt="img" class="w-50" />
                            <div class="mt-5">
                                <p class="fs-3 my-2"><?php echo $lang['coinbase_withdraw_details']?></h2>
                                <p class="fs-6"><?php echo $lang['express_withdrawal_12_hours']?></p>
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
        window.location.href = '<?php echo $siteurl . "cpanel/withdraw.php?type=" ?>' + type;
    }
    function withdraw(method) {
        alert(" for Epay withdrawal.");
        var isValid = true;

        if (method === "epay") {
            var selectedAccountId = $('select[name="epayAccountId"]').val();
            var selectedCurrency = $('select[name="epayCurrency"]').val();
            var epayAccount = $('input[name="epayAccount"]').val();
            var withdrawAmount = $('input[name="epayAmount"]').val();

            if (!selectedAccountId || !selectedCurrency || !epayAccount || !withdrawAmount) {
                isValid = false;
                alert("All fields are required for Epay withdrawal.");
            } else if (!withdrawAmount.match(/^[0-9]+$/) || !epayAccount.match(/^[0-9]+$/)) {
                isValid = false;
                alert("Amount and account number must be numeric for Epay withdrawal.");
            } else if (withdrawAmount.length < 1 || withdrawAmount.length > 5 || epayAccount.length < 4 || epayAccount.length > 9) {
                isValid = false;
                alert("Amount must be between 1 and 5 digits, and account number must be between 4 and 9 digits for Epay withdrawal.");
            }
        } else {
            var selectedAccountId = $('select[name="cbAccountId"]').val();
            var selectedCurrency = $('select[name="cbCurrency"]').val();
            var cbAccount = $('input[name="cbAccount"]').val();
            var withdrawAmount = $('input[name="cbAmount"]').val();

            if (!selectedAccountId || !selectedCurrency || !cbAccount || !withdrawAmount) {
                isValid = false;
                alert("All fields are required for Coin Base withdrawal.");
            } else if (!withdrawAmount.match(/^[0-9]+$/) || !cbAccount.match(/^[0-9]+$/)) {
                isValid = false;
                alert("Amount and account number must be numeric for Coin Base withdrawal.");
            } else if (withdrawAmount.length < 1 || withdrawAmount.length > 5 || cbAccount.length < 4 || cbAccount.length > 9) {
                isValid = false;
                alert("Amount must be between 1 and 5 digits, and account number must be between 4 and 9 digits for Coin Base withdrawal.");
            }
        }

        if (isValid) {
            console.log("Data is valid. Proceed with withdrawal.");
        }
    }
</script>

</html>