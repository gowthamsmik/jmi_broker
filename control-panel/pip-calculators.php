<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
    <div class="d-flex">
        <h2 class="fs-4">JMI Brokers | Pip Calculator</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
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
            foreach ($dummyData as $rowIndex => $row) {
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
</body>

</html>
