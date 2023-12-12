<?php if(!isset($_SESSION['sessionuser']))session_start(); ?>
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
        .input-container input {
            flex: 1;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #342E59; /* Border color for the input */
        }

        .input-container button {
            margin-left: 10px;
            background-color: #FFFFFF33; /* Background color for the button */
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 150px; /* Set the width of the button as needed */
        }

        .body {
            background-color: #F0F0;
        }

        .border-bottom-80 {
            border-bottom: 1px solid #dee2e6;
            /* or your preferred border color */
            height: 80%;
        }

        .round-bullets ul {
            list-style-type: none;
            padding: 0;
        }

        .round-bullets li:before {
            content: "\2022"; /* Unicode character for a bullet point */
            color: #342E59; /* Color of the bullet point */
            font-size: 16px; /* Size of the bullet point */
            margin-right: 8px; /* Spacing between the bullet point and the text */
        }

        .round-bullets {
            margin-top: 10px; /* Adjust the top margin as needed */
            margin-bottom: 10px; /* Adjust the bottom margin as needed */
        }

        .round-bullets li {
            margin-bottom: 8px; /* Adjust the margin between list items as needed */
            color:black;
        }

        .input-container {
            display: flex;
            margin-top: 20px; /* Add space between the bullets and the input field */
        }

        .input-container input {
            flex: 1;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #342E59;
        }

        .input-container button {
            margin-left: 10px;
            background-color: #FFFFFF33;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 150px; /* Set the width of the button as needed */
        }
        .custom-button{
            background-color: #0342AB;
        }

        p{
            text-align:justify;
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
        <h2 class="fs-4"><?php echo  $lang['controlPanelReferralSystemOverview']?></h2>
        <div class="d-flex ms-auto"><img src='<?php echo $siteurl."assets/images/svg/account_circle.svg" ?>' class="account_circle" alt="">
            <p class="mt-1 ms-2"><?php echo $lang['welcome1'] ?>,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>

        <div class="card p-3 bg-white my-3 py-5 w-auto">
            <h3 style="font-weight: 600; font-size: 25px; font-family: 'Poppins', sans-serif; line-height: 45px; color: #342E59;"><?php echo $lang['whats_my_referral']?></h3>
            <p >
                <?php echo $lang['myReferralLinkExplanation'] ?>
                <ul class="round-bullets">
                    <li><?php echo $lang['copyAndSendLink']?></li>
                    <li><?php echo $lang['includeInEmailSignature']?></li>
                    <li><?php echo $lang['placeOnWebsite']?></li>
                </ul>

               <?php echo $lang['shareInstructions']?>
            </p>

            <div class="input-group mb-3 mt-4">
                <input type="text" class="form-control border" placeholder="https://www.jmibroker.net/en?myref=10441">
                <button class="btn btn-success custom-button" type="submit">Copy Link</button>
            </div>

        </div>
        </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
 
</body>

</html>