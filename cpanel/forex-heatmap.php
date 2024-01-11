<?php if (!isset($_SESSION['sessionuser']))
    session_start();
include("includes/functions.php");
// $heatmapData = scrapeLeftColumn();
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
        table,
        tr,
        th,
        td {
            border: 1px solid #dddddd;
            border-collapse: collapse;
        }

        .heat_one {
            background-color: #d10000 !important;
        }

        .heat_two {
            background-color: #fa8585 !important;
        }

        .heat_three {
            background-color: #ffffff !important;
        }

        .heat_four {
            background-color: #60ce63 !important;
        }

        .heat_five {
            background-color: #009e05 !important;
        }

        .box_one {
            height: 20px;
            width: 18px;
            border: .5px solid gray;
            background-color: #d10000 !important;
        }

        .box_two {
            height: 20px;
            width: 18px;
            border: .5px solid gray;
            background-color: #fa8585 !important;
        }

        .box_three {
            height: 20px;
            width: 18px;
            border: .5px solid gray;
            background-color: #ffffff !important;
        }

        .box_four {
            height: 20px;
            width: 18px;
            border: .5px solid gray;
            background-color: #60ce63 !important;
        }

        .box_five {
            height: 20px;
            width: 18px;
            border: .5px solid gray;
            background-color: #009e05 !important;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class='layout cpanal_banar'>
        <?php include("sidebar.php"); ?>
        <div class="content">

<div class="d-flex">
        <h2 class="fs-4"><?php echo $lang['fx_heatmap'] ?></h2>
    <div class="d-flex <?php echo ($userPreferredLanguage === 'ar') ? 'me-auto' : 'ms-auto'; ?>"><img src="../assets/images/svg/account_circle.svg" class="account_circle"
            alt="">
            <p class="mt-1 ms-2"><?php echo $lang['welcome'] ?>,
            <?php echo $_SESSION['sessionusername']; ?>
        </p>
    </div>
</div>
<div>
    <div class="row w-100">
        <script
            src="https://www.jmibrokers.com/assets/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <link href="../assets/css/heatmap.css" rel="stylesheet" />
        <?php echo $heatmap = heatmap() ?>

        <script
            type="text/javascript">$('div.newSocialButtons').remove(); $('div.float_lang_base_2').remove(); $('div.OUTBRAIN').remove();</script>
    </div>
</div>
<div class="row">
   <?php echo $lang['currencies_heat_map_description'] ?>
</div>



</div>
</div>

    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>
