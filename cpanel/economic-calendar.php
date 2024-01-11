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
        .image_size{
            height: 35px;
            width: 35px;
        }
        #sel1{
            border: 0px;
            border-bottom: 2px dotted;
            background-color: transparent;
            border-radius: none;
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
        <h2 class="fs-4"><?php echo $lang['economic_calendar'] ?></h2>
        <div class="d-flex <?php echo ($userPreferredLanguage === 'ar') ? 'me-auto' : 'ms-auto'; ?>"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2"><?php echo $lang['welcome'] ?>,
                <?php echo $_SESSION['sessionusername']; ?>
            </p>
        </div>
    </div>
    <!-- <div class="d-flexs">
        <div class="d-flex">
            <img src="assets/images/calendar.png" alt="404" class="image_size">
            <select class="form-select w-auto" id="sel1" name="sellist1">
                <option>Current week</option>
                <option>Previous week</option>
                <option>Next week</option>
                <option>Current month</option>
                <option>Previous month</option>
                <option>Next month</option>
            </select>
        </div>
    </div> -->
    <!-- <table class="table mt-3">
        <thead>
            <tr>
                <th><?php echo $lang['time'] ?> </th>
                <th><?php echo $lang['currency1'] ?></th>
                <th><?php echo $lang['event'] ?></th>
                <th><?php echo $lang['actual'] ?></th>
                <th><?php echo $lang['forecast'] ?></th>
                <th><?php echo $lang['previous'] ?></th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table> -->
    <iframe scrolling="no" allowtransparency="true" frameborder="0" width="100%" height="500px" src="https://www.tradays.com/en/economic-calendar/widget?mode=2&amp;utm_source=www.jmibrokers.com"></iframe>

    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>