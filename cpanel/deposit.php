<?php if (!isset($_SESSION['sessionuser']))
    session_start(); 
    include("includes/functions.php");
  $paytype = isset($_GET['type'])?$_GET['type']:"";
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
        }
        .btn_color:hover{
            background-color: #0342ab !important;
        }
    </style>
</head>
<body>
<?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
         <div class="d-flex">
            <h2 class="fs-4">Control Panel | <?php echo $lang['deposit']?> </h2>
            <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2"><?php echo $lang['welcome1'] ?>,  <?php echo $_SESSION['sessionusername']; ?></p>
            </div>
        </div>
        <div class="bg-white p-3">
        <div class="text-primary fs-6 my-2"> Control Panel | <?php echo ($paytype == "") ? $lang['deposit'] : (($paytype == "Epay") ? 'Epay' : 'Coin Base'); ?> </div>
        <div class="my-3 fs-4" style="display:<?php echo ($paytype == '' && $liveAccountsCount  <1 ) ? '' : 'none' ?>">You Have no live account, You can add your account from  <a class="fs-4 text-primary" href="add-existing-account.php">Here</a>  or open a new account from  <a class="fs-4 text-primary" href="open-live-account.php">Here</a> </div>
        <div class="grid-container mt-5 bg-white" id="list" style="display:<?php echo ($paytype == '' && $liveAccountsCount >0) ?'':'none'?>">
      
                    <?php
                    // Sample data (replace this with data fetched from your source)
                    $data = [
                        //['image' => '../assets/images/pay-methods/8.png', 'text' => 'Bank Wire', 'button_text' => 'deposit'],
                        ['image' => '../assets/images/pay-methods/2.png', 'text' => 'Epay', 'button_text' => 'deposit'],
                        //['image' => '../assets/images/pay-methods/3.png', 'text' => 'Advcash', 'button_text' => 'deposit'],
                        //['image' => '../assets/images/pay-methods/5.png', 'text' => 'Perfect Money', 'button_text' => 'deposit'],
                        ['image' => '../assets/images/pay-methods/1.png', 'text' => 'Coin Base', 'button_text' => 'deposit'],
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
                                <?php echo $item['text']; ?>
                            </p>
                            <button class='btn button mt-3 '  onclick="handleMethod('<?php echo $item['text']; ?>')">
                                <?php echo $lang[$item['button_text']]; ?>
                            </button>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="row bg-white mt-4 p-5 rounded-3 part2" id="epayform" style="display:<?php echo $paytype == 'Epay'?'flex':'none'?>">
                    <div class="col">
                        <form method="post"  action="includes/deposit_transactions.php?paymentType=epay">
                            <div class=" border-0">
                                <div class=" border-0 mb-1">
                                    <label for="">Account Number:</label>
                                    <select class="form-select mt-2" id="sel1" name="epayAccountId" required>
                                        <option value="" selected disabled>-Select-</option>
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
                                    <label for=""><?php $lang['currency_base']?>:</label>
                                    <select class="form-select mt-2" id="sel1" name="epayCurrency" required>
                                        <option>USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row border-0 mt-4">
                                <div class="col border-0">
                                    <label for="">Deposit Amount </label>
                                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0"
                                        name="epayAmount" required>
                                </div>
                            </div>
                            <input type="submit" class="btn btn_color w-50 mt-4 text-white"  value="Deposit Now"> 
                        </form>
                    </div>
                    <div class="col mx-2 mt-5 r text-center align-items-center justify-content-center">
                        <img src="../assets/images/pay-methods/2.png" alt="img" class="w-50" />
                        <div class="mt-5">
                            <p class="fs-3 my-2">Epay Deposit Details</h2>
                            <p class="fs-6">Express Deposit (12 hours)</p>
                        </div>
                    </div>
                </div>
                <div class="row bg-white mt-4 p-5 rounded-3 part3" id="coinbaseform" style="display:<?php echo $paytype == 'Coin Base'?'flex':'none'?>">
                    <div class="col">
                        <form method="post"  action="includes/deposit_transactions.php?paymentType=coinbase">
                            <div class=" border-0">
                                <div class=" border-0 mb-1">
                                    <label for="">Account No:</label>
                                    <select class="form-select mt-2" id="sel1" name="cbAccountId" required>
                                        <option value="" selected disabled>-Select-</option>
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
                                    <label for="">Currency base:</label>
                                    <select class="form-select mt-2" id="sel1" name="cbCurrency" required>
                                        <option>USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row border-0 mt-4">
                                <div class="col border-0">
                                    <label for="">Amount To Deposit</label>
                                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0"
                                        name="cbAmount" required>
                                </div>
                            </div>
                            <input type="submit" class="btn btn_color w-50 mt-4 text-white"  value="Deposit Now"> 
               
                        </form>
                    </div>
                    <div class="col mx-2 mt-5 r text-center align-items-center justify-content-center">
                        <img src="../assets/images/pay-methods/1.png" alt="img" class="w-50" />
                        <div class="mt-5">
                            <p class="fs-3 my-2">CoinBase Deposit Details</h2>
                            <p class="fs-6">Express Deposit (12 hours)</p>
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
        window.location.href='<?php echo $siteurl."cpanel/deposit.php?type=" ?>'+type;
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

</script>
</html>