<!DOCTYPE html>
<html lang="en">

<head>
<?php include("../cpanel/includes/config.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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

    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
    <div class="d-flex">
        <h2 class="fs-4">JMI brokers | Forex Calendar</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,
                <?php echo $_SESSION['sessionusername']; ?>
            </p>
        </div>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Time </th>
                <th>Currency</th>
                <th>Event</th>
                <th>Actual</th>
                <th>Forecast</th>
                <th>Previous</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dummyData = array(
                array('10:30', 'EUR', 'PPI m/m', '-0.1%', '-0.5%','-0.2%'),
                array('10:30', 'EUR', 'PPI m/m', '-0.1%', '-0.5%','-0.2%'),
                array('10:30', 'EUR', 'PPI m/m', '-0.1%', '-0.5%','-0.2%'),
            );
            foreach ($dummyData as $rowIndex => $row) {
                echo '<tr class="my-auto">';
                foreach ($row as $index => $cell) {
                    if ($index === 0) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 1) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 2) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 3) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 4) {
                        echo '<td>' . $cell . '</td>';
                    } else if ($index === 5) {
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
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>