<?php if(!isset($_SESSION['sessionuser']))session_start(); 
include("includes/functions.php");
$pipData=pipCalculator();
$pipDataCount=count($pipData);
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
       th{
        font-weight: bold;
       }
       td a {
        color: #0342ab;
       }
       table {
        padding: 10px;
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
        <h2 class="fs-4">JMI Brokers | Pip Calculator </h2>
        <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,
                <?php echo $_SESSION['sessionusername']; ?>
            </p>
        </div>
    </div>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Currency</th>
                <th>Price</th>
                <th>Standard_Lot<br>(Units 100,000)</th>
                <th>Mini_Lot<br>(Units 10,000)</th>
                <th>Micro_Lot<br>(Units 1,000)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dummyData = array(
                array('AUD/CHF', '0.5801', '11.31', '1.13', '0.11'),
                array('AUD/CHF', '0.5801', '11.31', '1.13', '0.11'),
                array('AUD/CHF', '0.5801', '11.31', '1.13', '0.11'),
            );
            foreach ($pipData as $rowIndex => $row) {
                echo '<tr class="my-auto">';
                foreach ($row as $index => $cell) {
                    if ($index === 0) {
                        echo '<td><a href="#">' . $cell . '</a></td>';
                    } else if ($index === 1) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 2) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 3) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 4) {
                        echo '<td>' . $cell . '</td>';
                    }   
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
      
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>


</html>
