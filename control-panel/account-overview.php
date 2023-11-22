<html>
<head>
    <?php include("includes/style.php"); ?>
    <style>
        .body {
            background-color: #F0F0F0;
        }

        .border-bottom-80 {
            border-bottom: 1px solid #dee2e6;
            /* or your preferred border color */
            height: 80%;
        }

        .round {
            border-radius: 15px !important;
        }

        .account_circle {
            height: 30px;
            width: 30px;
        }

        .forex-font {
            font-size: 10px;
            opacity: 50%;
            color: black;
        }

        .text-color{
            color: #0342ab;
        }
    </style>
</head>

<body>
    <?php include ("accountOverviewclass.php"); ?>
    <div>
        <div class="d-flex">
            <h2 class="fs-4">Control Panel|Account OverView</h2>
            <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome,
                    <?php echo $_SESSION['sessionusername']; ?>
                </p>
            </div>
        </div>
        <div class="card round p-3 bg-white my-3 py-5">
            <div class="border-bottom-80 p-1 d-flex justify-content-between">
                <h3>FOREX ACCOUNTS</h3>
                <h3 class="ml-auto"> 0 USD</h3>
            </div>
            <div class="mt-3 p-1 d-flex justify-content-between">
                <h3>TOTAL VALUE</h3>
                <h3 class="ml-auto font-weight-bold fs-1 text-color"><span class="forex-font">0 USD</span></h3>
            </div>
        </div>
        <!-- <div class="card round p-3 bg-white my-3 py-3">
            <div class="mt-2 p-1 d-flex ">
                <img src="assets/images/logo.svg" alt="Link 1 Icon" height="40px" width="40px">
                <div class="mx-5 w-50">
                    <p class="font-weight-bold">Ameer</p>
                    <p class="forex-font">FOREX 0</p>
                </div>
                <h3 class="text-end ml-auto">0<span class="forex-font">.03 USD</span><img src="assets/images/svg/ic_moreVertical.svg" alt="404"></h3>
            </div>
        </div>
        <div class="card round p-3 bg-white my-3 py-3">
            <div class="mt-2 p-1 d-flex ">
                <img src="assets/images/logo.svg" alt="Link 1 Icon" height="40px" width="40px">
                <div class="mx-5 w-50">
                    <p class="font-weight-bold">Ibrahim</p>
                    <p class="forex-font">FOREX 9190</p>
                </div>
                <h3 class="text-end ml-auto">28452<span class="forex-font">.03 USD</span><img src="assets/images/svg/ic_moreVertical.svg" alt="404"></h3>
            </div>
        </div>
        <div class="card round p-3 bg-white my-3 py-3">
            <div class="mt-2 p-1 d-flex ">
                <img src="assets/images/logo.svg" alt="Link 1 Icon" height="40px" width="40px">
                <div class="mx-5 w-50">
                    <p class="font-weight-bold">Forex Account</p>
                    <p class="forex-font">Your account opening request is currently under review</p>
                </div>
                <h3 class="text-end ml-auto">28452<span class="forex-font">.03 USD</span><img src="assets/images/svg/ic_moreVertical.svg" alt="404"></h3>
            </div>
        </div> -->
    </div>
</body>

</html>