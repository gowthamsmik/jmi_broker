<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include("includes/style.php"); ?>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            padding: 10px;
        }

        th,
        td {
            border-bottom: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            border-bottom: 3px solid #dddddd;
            background-color: #f2f2f2;
            font-weight: bold;
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

    <table class="responsive-table">
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
                                    echo '<td class="">' . $cell . '</td>';
                                }  else if ($index === 2) {
                                    echo '<td class="">' . $cell . '</td>';
                                }
                                
                            else if ($index === 4) {
                                echo '<td class="text-primary">' . $cell . '</td>';
                            }
                            else if ($index === 5) {
                                echo '<td><span class="bgs p-2 rounded"><i class="fa fa-eye" style="font-size:15px"></i>' . $cell . '</span></td>';
                            }
                            else if ($index === 6) {
                                echo '<td><span class="bgs p-2 rounded">' . $cell . '</span></td>';
                            }
                            else if ($index === 7) {
                                echo '<td class="bold-cell">' . $cell . '</td>';
                            }
                            else if ($index === 8) {
                                echo '<td class="bold-cell">' . $cell . '</td>';
                            }
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>













    <!-- <div id="table-container"></div>

    <script>
    // Sample data for the table
    var data = [
        { ,
        { 'Currency': "AUD/CHF", 'Price': '0.5801', 'Standard_Lot(Units 100,000)': "11.31", 'Mini_Lot(Units 10,000)': "1.13", 'Micro_Lot(Units 1,000)':"0.11" },
        { 'Currency': "AUD/JPY", 'Price': '97.69', 'Standard_Lot(Units 100,000)': "672.00", 'Mini_Lot(Units 10,000)': "67.20", 'Micro_Lot(Units 1,000)':"6.72" },
    ];

    // Function to dynamically generate the table
    function generateTable(data) {
        var tableContainer = document.getElementById("table-container");
        var table = document.createElement("table");

        // Create table header
        var thead = document.createElement("thead");
        var headerRow = document.createElement("tr");
        Object.keys(data[0]).forEach(function (key) {
            var th = document.createElement("th");
            th.appendChild(document.createTextNode(key));
            headerRow.appendChild(th);
        });
        thead.appendChild(headerRow);
        table.appendChild(thead);

        // Create table body
        var tbody = document.createElement("tbody");
        data.forEach(function (item) {
            var row = document.createElement("tr");
            Object.values(item).forEach(function (value) {
                var td = document.createElement("td");
                td.classList.add("text-center");
                td.appendChild(document.createTextNode(value));
                row.appendChild(td);
            });
            tbody.appendChild(row);
        });
        table.appendChild(tbody);

        // Append the table to the container
        tableContainer.appendChild(table);
    }

    // Call the function with the sample data
    generateTable(data);
</script> -->
</body>

</html>