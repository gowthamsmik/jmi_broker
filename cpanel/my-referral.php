<?php if(!isset($_SESSION['sessionuser']))session_start(); ?>
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
    <title>Jmi Broker </title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .white-box {
            background-color: #FFFFFF;
            padding: 20px;
            /* Adjust padding as needed */
            border-radius: 8px;
            /* Optional: Add border radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Optional: Add box shadow for depth */
            height: 250px;
            /* Adjust the height as needed */
        }
        .account_circle {
            height: 30px;
            width: 30px;
        }
        .custom-button{
            background-color: #0342AB;
        }
    </style>
</head>

<body>
<?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
    <?php include("includes/my-refferrals.php"); ?>
    <?php if (count($allReferrals)<1) {?>
    <div class="d-flex">
        <h2 class="fs-4">Control Panel|My Referrals</h2>
        <div class="d-flex ml-auto"><img src='<?php echo $siteurl."assets/images/svg/account_circle.svg" ?>' class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>
    <div class="white-box mt-3">
        <h3 style="font-weight: 600; font-size: 25px; line-height: 40px; color: #342E59;">You Don't Have Any Referrals
            Yet</h3>

        <div class="input-group mb-3 mt-5">
            <input type="text" class="form-control border" id="MyRef" placeholder="https://www.jmibrokers.net?myref=<?php echo (int) $_SESSION['sessionuser']+10000?>">
            <button class="btn btn-success custom-button"   onclick = "copyText()" type="submit">Copy Link</button>
            <script type="text/javascript">
                function copyText()
                {
                $('input#MyRef').val('https://www.jmibrokers.net?myref=<?php echo (int)$_SESSION['sessionuser']+10000 ?>');
                var copyText = document.getElementById("MyRef");
                copyText.select();
                document.execCommand("Copy");
                }
            </script>
        </div>
    </div>
    <?php } ?>
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>