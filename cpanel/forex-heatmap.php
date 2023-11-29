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
   
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
    <div class="d-flex">
        <h2 class="fs-4">JMI Brokers | FX heat map</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,
                <?php echo $_SESSION['sessionusername']; ?>
            </p>
        </div>
    </div>
    <div>
        <p class="h1">Currencies Heat Map</p>
        <hr>

        <p>30 Minutes Currencies Heat Map</p>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th></th>
                    <th>USD</th>
                    <th>EUR</th>
                    <th>JPY</th>
                    <th>GBP</th>
                    <th>CHF</th>
                    <th>CAD</th>
                    <th>AUD</th>
                    <th>NZD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dummyData = array(
                    array('USD', 'one', '', '', '', '', '', '', ''),
                    array('EUR', '', '', 'three', '', '', '', '', ''),
                    array('JPY', '', '', '', '', '', '', '', 'five'),
                    array('GBP', 'four', '', '', '', 'five', '', '', ''),
                    array('CHF', '', '', '', '', '', '', '', ''),
                    array('CAD', '', 'one', '', '', '', '', '', ''),
                    array('AUD', 'three', '', '', '', 'four', '', '', ''),
                    array('NZD', '', '', '', '', '', '', '', ''),
                );

                foreach ($dummyData as $row) {
                    echo '<tr class="my-auto">';
                    foreach ($row as $cell) {
                        $class = '';
                        switch ($cell) {
                            case 'one':
                                $class = 'heat_one';
                                break;
                            case 'two':
                                $class = 'heat_two';
                                break;
                            case 'three':
                                $class = 'heat_three';
                                break;
                            case 'four':
                                $class = 'heat_four';
                                break;
                            case 'five':
                                $class = 'heat_five';
                                break;
                            default:
                                $class = 'heatcolor';
                                break;
                        }
                        echo '<td class="' . $class . '">' . $cell . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <p>1 Hour Currencies Heat Map</p>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th></th>
                    <th>USD</th>
                    <th>EUR</th>
                    <th>JPY</th>
                    <th>GBP</th>
                    <th>CHF</th>
                    <th>CAD</th>
                    <th>AUD</th>
                    <th>NZD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dummyData = array(
                    array('USD', 'one', '', '', '', '', '', '', ''),
                    array('EUR', '', '', 'three', '', '', '', '', ''),
                    array('JPY', '', '', '', '', '', '', '', 'five'),
                    array('GBP', 'four', '', '', '', 'five', '', '', ''),
                    array('CHF', '', '', '', '', '', '', '', ''),
                    array('CAD', '', 'one', '', '', '', '', '', ''),
                    array('AUD', 'three', '', '', '', 'four', '', '', ''),
                    array('NZD', '', '', '', '', '', '', '', ''),
                );

                foreach ($dummyData as $row) {
                    echo '<tr class="my-auto">';
                    foreach ($row as $cell) {
                        $class = '';
                        switch ($cell) {
                            case 'one':
                                $class = 'heat_one';
                                break;
                            case 'two':
                                $class = 'heat_two';
                                break;
                            case 'three':
                                $class = 'heat_three';
                                break;
                            case 'four':
                                $class = 'heat_four';
                                break;
                            case 'five':
                                $class = 'heat_five';
                                break;
                            default:
                                $class = 'heatcolor';
                                break;
                        }
                        echo '<td class="' . $class . '">' . $cell . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <p>5 Hours Currencies Heat Map</p>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th></th>
                    <th>USD</th>
                    <th>EUR</th>
                    <th>JPY</th>
                    <th>GBP</th>
                    <th>CHF</th>
                    <th>CAD</th>
                    <th>AUD</th>
                    <th>NZD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dummyData = array(
                    array('USD', 'one', '', '', '', '', '', '', ''),
                    array('EUR', '', '', 'three', '', '', '', '', ''),
                    array('JPY', '', '', '', '', '', '', '', 'five'),
                    array('GBP', 'four', '', '', '', 'five', '', '', ''),
                    array('CHF', '', '', '', '', '', '', '', ''),
                    array('CAD', '', 'one', '', '', '', '', '', ''),
                    array('AUD', 'three', '', '', '', 'four', '', '', ''),
                    array('NZD', '', '', '', '', '', '', '', ''),
                );

                foreach ($dummyData as $row) {
                    echo '<tr class="my-auto">';
                    foreach ($row as $cell) {
                        $class = '';
                        switch ($cell) {
                            case 'one':
                                $class = 'heat_one';
                                break;
                            case 'two':
                                $class = 'heat_two';
                                break;
                            case 'three':
                                $class = 'heat_three';
                                break;
                            case 'four':
                                $class = 'heat_four';
                                break;
                            case 'five':
                                $class = 'heat_five';
                                break;
                            default:
                                $class = 'heatcolor';
                                break;
                        }
                        echo '<td class="' . $class . '">' . $cell . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <p>Daily Currencies Heat Map</p>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th></th>
                    <th>USD</th>
                    <th>EUR</th>
                    <th>JPY</th>
                    <th>GBP</th>
                    <th>CHF</th>
                    <th>CAD</th>
                    <th>AUD</th>
                    <th>NZD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dummyData = array(
                    array('USD', 'one', '', '', '', '', '', '', ''),
                    array('EUR', '', '', 'three', '', '', '', '', ''),
                    array('JPY', '', '', '', '', '', '', '', 'five'),
                    array('GBP', 'four', '', '', '', 'five', '', '', ''),
                    array('CHF', '', '', '', '', '', '', '', ''),
                    array('CAD', '', 'one', '', '', '', '', '', ''),
                    array('AUD', 'three', '', '', '', 'four', '', '', ''),
                    array('NZD', '', '', '', '', '', '', '', ''),
                );

                foreach ($dummyData as $row) {
                    echo '<tr class="my-auto">';
                    foreach ($row as $cell) {
                        $class = '';
                        switch ($cell) {
                            case 'one':
                                $class = 'heat_one';
                                break;
                            case 'two':
                                $class = 'heat_two';
                                break;
                            case 'three':
                                $class = 'heat_three';
                                break;
                            case 'four':
                                $class = 'heat_four';
                                break;
                            case 'five':
                                $class = 'heat_five';
                                break;
                            default:
                                $class = 'heatcolor';
                                break;
                        }
                        echo '<td class="' . $class . '">' . $cell . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="my-4">
        <p>Legend:</p>
        <div class="row">
            <div class="col my-2">
                <div class="row">
                    <div class="col-1 box_five "></div>
                    <p class="col">The pair is above prior bar's high</p>
                </div>
                <div class="row my-2">
                    <div class="col-1 box_four"></div>
                    <p class="col">The pair is above prior bar's close but below the high</p>
                </div>
                <div class="row">
                    <div class="col-1 box_three"></div>
                    <p class="col">The pair is flat</p>
                </div>
            </div>
            <div class="col my-2">
                <div class="row">
                    <div class="col-1 box_two"></div>
                    <p class="col">The pair is below prior bar's close but above the low</p>
                </div>
                <div class="row mt-1">
                    <div class="col-1 box_one"></div>
                    <p class="col">The pair is below prior bar's low</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p class="text-center mt-3">The Currencies Heat Map is a set of tables which display the relative strengths of major currency pairs in comparison with each other, designed to give an overview of the forex market across various time frames. Whether you're a scalper, day, swing, or position trader, it is a powerful tool if you're looking for new and innovative trading strategies to add to your repertoire. Scroll down to the bottom of this forex heat map to view the key containing explanations for the color codes.</p>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

</html>