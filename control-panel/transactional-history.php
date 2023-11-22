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
            border: 1.5px solid black;
            border-radius: 8px;
        }

        table {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 12px;
        }

<<<<<<< HEAD
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

=======
>>>>>>> f239a09fb02f978e65709fbbf17ac98d000e5583
        .serial {
            background-color: #DFDFDF;
            color: #053C9E;
            border-radius: 5px;
            justify-content: center;
            align-items: center;
            font-weight: bolder;
        }

<<<<<<< HEAD
        .status {
=======
        .status1 {
>>>>>>> f239a09fb02f978e65709fbbf17ac98d000e5583
            background-color: #053C9E;
            color: #FFFFFF;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            font-weight: bolder;
        }

<<<<<<< HEAD
=======
        .status2 {
            background: linear-gradient(to right, #FEDC18, #FFF7C5); 
            font-weight: bold;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            font-weight: bolder;
        }

>>>>>>> f239a09fb02f978e65709fbbf17ac98d000e5583
        .description {
            background-color: #F8F8F8;
            border: .5px solid #E9ECFF;
            padding: 2%;
            border-radius: 5px;
        }

        .active_but {
            background-color: #FFBF10 !important;
        }

        .active_button {
            background-color: #0342AB !important;
            color: white !important;
        }
    </style>
</head>

<body>
<<<<<<< HEAD

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
=======
    <div class="d-flex">
        <h2 class="fs-4">Transactiona History</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome, Ameer Ameer</p>
        </div>
    </div>
    <div class=" d-flex my-2">
        <button class="btn mx-1  px-3 active_but" onclick="makeActive(this)">All</button>
        <button class="btn mx-1 active_but" onclick="makeActive(this)">Deposit</button>
        <button class="btn mx-1 active_but" onclick="makeActive(this)">Withdraw</button>
        <button class="btn mx-1 active_but" onclick="makeActive(this)">Internal Transfers</button>
        <div class="custom-input p-1 ms-auto">
            <input type="text" placeholder="Search" />
            <img src="assets/images/svg/Shape.svg" alt="404">
        </div>
    </div>
    <script>
        function makeActive(button) {
            // Remove 'active_but' class from all buttons
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(function (btn) {
                btn.classList.remove('active_button');
            });

            // Add 'active_but' class to the clicked button
            button.classList.add('active_button');
        }
    </script>
    <div>
        <table class='gap-3 bg-white table mt-3'>
>>>>>>> f239a09fb02f978e65709fbbf17ac98d000e5583
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
                                        "status": "Pending",
                                        "details": "Deposit of $500 failed",
                                        "date": "2023-01-03"
                                    },
                                    {
                                        "serial": "04",
                                        "type": "Deposit",
                                        "via": "Inter Transfer",
                                        "account": "0914",
                                        "status": "Success",
                                        "details": "Deposit of $500 failed",
                                        "date": "2023-01-03"
                                    }
                                ]';
                $dataArray = json_decode($jsonData, true);
                if (is_array($dataArray)) {
                    foreach ($dataArray as $data) {
                        echo "<tr>";
<<<<<<< HEAD
                        echo "<td class=''><div  class=' m-2 serial py-1 px-2'>" . htmlspecialchars($data['serial']) . "</div></td>";
                        echo "<td>" . htmlspecialchars($data['type']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['via']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['account']) . "</td>";
                        echo "<td class=''><div class='status m-2 py-2 px-2'>" . htmlspecialchars($data['status']) . "</td>";
                        echo "<td class=''><div class='description m-1 p-4'>" . htmlspecialchars($data['details']) . "</div></td>";
                        echo "<td>" . htmlspecialchars($data['date']) . "</td>";
                        echo "</tr>";
=======
                        echo "<td class='align-middle'><div  class='serial py-1 px-2'>" . htmlspecialchars($data['serial']) . "</div></td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['type']) . "</td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['via']) . "</td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['account']) . "</td>";
                        
                        if($data['status'] === "Success")
                        {
                            echo "<td class='align-middle'><div class='status1 m-2 py-2 px-2'>" . htmlspecialchars($data['status']) . "</td>";
                        } else {
                            echo "<td class='align-middle'><div class='status2 m-2 py-2 px-2'>" . htmlspecialchars($data['status']) . "</td>";
                        }
                        
                        
                        echo "<td class='align-middle'><div class='description m-1 p-4'>" . htmlspecialchars($data['details']) . "</div></td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['date']) . "</td>";
                        echo "</tr>";
                        
                        
>>>>>>> f239a09fb02f978e65709fbbf17ac98d000e5583
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</body>

</html>