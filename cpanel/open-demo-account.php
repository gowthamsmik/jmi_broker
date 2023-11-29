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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .wel {
            font-style: Poppins;
            font-size: 20px;
            font-weight: 400;
            text-align: right;
        }

        .fsa {
            border: 1px solid blue;

            width: 23%;
            background-color: #053B9E;
            border-radius: 8px;
            margin-top: 5%
        }

        .log {
            padding-left: 5%;
            padding-top: 5%;
        }

        .pl {
            padding-left: 5%;
        }

        .min {
            color: #FFFFFF;
            font-family: Inter;
        }

        .usd {
            font-size: 29px;
            font-family: Inter;
            margin-top: 2%;
            margin-bottom: 2%;
            color: #FFBF10;
        }

        .fs {
            font-size: 12px;
            font-family: Inter;
            margin-top: 2%;
            margin-bottom: 2%;
            color: #FFBF10;

        }

        .be {
            color: #D2D2D2;
            margin-top: 2%;
            margin-bottom: 2%;
            font-size: 8px;
        }

        .li {
            margin-top: 2%;
            margin-bottom: 2%;
            border: 1px solid #FFFFFF;
        }

        li {
            margin-top: 2%;
            margin-bottom: 2%;
            color: #FFFFFF;
            font-size: 12px;
        }

        ul {
            padding-left: 5%;
        }

        .button1 {
            padding: 7%;
            border: 1px solid #FFBF10;
            margin-top: 6%;
            margin-bottom: 6%;
            border-radius: 8px;
            background-image: linear-gradient(to right, #FEDC18, #FFF7C5);
        }

        label {
            color: #000000;
            float: left;
            margin-left: 80px;
            margin-bottom: 40px;
        }

        .caa {
            border: 1px solid #07348F;
            background-color: #07348F;
            border-radius: 8px;
        }

        .p11 {
            font-family: Poppins;

            font-weight: bold;
            font-size: 24px;
            color: #FFFFFF;
            padding: 10px;
        }

        .foo {
            width: 98%;
            background-color: #FFFFFF;
        }

        .buttonprimary {
            background-color: #07348F;
            color: white;
        }

        .pl .usd {
            background: linear-gradient(to right, #FEDC18,
                    #FEDC18, #FFF7C5, #FFF7C5);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-weight: bold;
        }

        .pl .fs {
            color: #FEDC18;
            font-weight: bold;
            opacity: 70%;
        }

        .box_list {
            list-style-type: disc;
            font-size: 12px;
            line-height: 18px;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
     
        <div class="d-flex mb-3">
            <h2 class="fs-4">Open Demo Account</h2>
            <div class="d-flex ml-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome,
                    <?php echo $_SESSION['sessionusername']; ?>
                </p>
            </div>
        </div>
         

         

        



          
     
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>