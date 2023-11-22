<html>

<head>
    <?php include("includes/style.php"); ?>
    <style>
        .body {
            background-color: #F0F0;
        }

        .border-bottom-80 {
            border-bottom: 1px solid #DEE2E6;
            /* or your preferred border color */
            height: 80%;
        }

        .btn {
            background-color: #FFBF10;
        }

        .custom-input {
            border: 2px solid black;
            margin: 5px;
            width: 300px;
            border-radius: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 5%;
            font-size: 12px;
        }

        th,
        td {
            border-bottom: 1px solid #DFDFDF;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #FFFFFF;
        }

        .serial {
            background-color: #DFDFDF;
            color: #053C9E;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            margin: 15px 15px 15px 15px;
            font-weight: bolder;
        }

        .status {
            background-color: #053C9E;
            color: #FFFFFF;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            margin: 15px 15px 15px 15px;
            font-weight: bolder;
        }

        .description {
            background-color: #E9ECFF;
            padding: 2%;
        }
    </style>
</head>

<body>

    <div class="d-flex">
        <h2>Transactiona History</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,
                <?php echo $_SESSION['sessionusername']; ?>
            </p>
        </div>
    </div>
    <div class=" d-flex my-2">
        <button class="btn mx-1">All</button>
        <button class="btn mx-1">Deposit</button>
        <button class="btn mx-1">Withdraw</button>
        <button class="btn mx-1">Internal Transfers</button>
        <div class="custom-input p-1 ms-5">
            <input type="text" placeholder="Search" />
        </div>
    </div>
    <div>
        <table class='gap-3'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Via </th>
                    <th>Account</th>
                    <th>Status </th>
                    <th>Details </th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $jsonData = '[
                                    {
                                        "serial": "01",
                                        "type": "Inter Transfer",
                                        "via": "9190",
                                        "account": "7890",
                                        "status": "Success",
                                        "details": "Learn new skills, feed your creativity, and boost your career in sessions and labs across these tracks:",
                                        "date": "2023-01-01"
                                    },
                                    {
                                        "serial": "02",
                                        "type": "Withdrawal",
                                        "via": "PayPal",
                                        "account": "9876",
                                        "status": "Pending",
                                        "details": "Withdrawal request",
                                        "date": "2023-01-02"
                                    },
                                    {
                                        "serial": "03",
                                        "type": "Deposit",
                                        "via": "Bank Transfer",
                                        "account": "1234",
                                        "status": "Error",
                                        "details": "Deposit of $500 failed",
                                        "date": "2023-01-03"
                                    }
                                ]';
                $dataArray = json_decode($jsonData, true);
                if (is_array($dataArray)) {
                    foreach ($dataArray as $data) {
                        echo "<tr>";
                        echo "<td class=''><div  class=' m-2 serial py-1 px-2'>" . htmlspecialchars($data['serial']) . "</div></td>";
                        echo "<td>" . htmlspecialchars($data['type']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['via']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['account']) . "</td>";
                        echo "<td class=''><div class='status m-2 py-2 px-2'>" . htmlspecialchars($data['status']) . "</td>";
                        echo "<td class=''><div class='description m-1 p-4'>" . htmlspecialchars($data['details']) . "</div></td>";
                        echo "<td>" . htmlspecialchars($data['date']) . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</body>

</html>