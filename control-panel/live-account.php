<!DOCTYPE html>
<html>
<head>
    <?php include("includes/style.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .body {
            background-color: #F0F0F0;
        }
        .border-bottom-80 {
            border-bottom: 1px solid #DEE2E6;
            /* or your preferred border color */
            height: 80%;
        }
        .card {
            border-radius: 10px;
        }
        .account_circle {
            height: 30px;
            width: 30px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .grid-item {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .row-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .row-item {
            margin: 10px;
        }
        .bg{
            background-color:white;
        }
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr; /* Set to a single column for smaller screens */
            }
        }

        /* Existing styles... (your existing styles remain unchanged) */

        .responsive-table {
            overflow-x: auto; /* Enable horizontal scrolling on small screens */
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Adjust as needed */
        margin: 20px auto;
        vertical-align: middle;
        border: 1px solid #DEE2E6;
        }

        .responsive-table th {
            text-align: center;
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #DEE2E6;
        }

        .responsive-table td {
            text-align: center;
        padding: 12px;
        text-align: left;
        border: 1px solid #DEE2E6;
        vertical-align: middle;
        }

        .responsive-table th {
            text-align:center;
        border-right: 1px solid #DEE2E6;
        }
        .bold-cell{
            font-weight: bold;
        }
        .bgs{
            background-color: #d4cbcb;
        }
        .bg-odd{
            background-color: #f7f2f1;
        }
        .responsive-table td .image-cell-container {
        display: flex;
        align-items: center;
    }

    .responsive-table td img.align-middle {
        margin-right: 5px; /* Adjust the margin as needed for spacing between image and text */
    }
    </style>
</head>
<body>
    <div>
        <div class="d-flex">
            <p class="font-weight-bold">Forex Account</p>
            <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome, Ameer Ameer</p>
            </div>
        </div>
        <h2 class="mt-5">Your account opening request is currently under review</h2>
        <div>
            <h2 class="mt-3">Live Accounts</h2>
            <form>
                <div class="row mt-3">
                    <div class="col-4">
                        <select class="form-select p-2" aria-label="Select account">
                            <option selected>Select </option>
                            <option value="1">Account 1</option>
                            <option value="2">Account 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="input-group col bg">
                        <input type="text" class="form-control " placeholder="Search" aria-label="Search" aria-describedby="search-icon">
                        <button class="btn " type="button" id="search-icon">
                        <i class="fa fa-search" style="font-size:24px"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div>
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Account</th>
                    <th>Server</th>
                    <th>Type</th>
                    <th>Currency</th>
                    <th>Group</th>
                    <th>Passwords</th>
                    <th>Investor</th>
                    <th>Name</th>
                    <th>Leverage</th>
                    <th>Balance</th>
                    <th>Equity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $dummyData = array(
                        array('001', 'Server 1', 'Demo', 'USD', 'Group A', 'xxxxx', 'Investor A', 'John Doe', '1:100', '$10,000', '$12,500', '<button>Action</button>'),
                        array('002', 'Server 2', 'Live', 'USD', 'Group B', 'xxxxx', 'Investor B', 'Jane Doe', '1:200', '$5,000', '$7,500', '<button>Action</button>'),
                        array('001', 'Server 1', 'Demo', 'USD', 'Group A', 'xxxxx', 'Investor A', 'John Doe', '1:100', '$10,000', '$12,500', '<button>Action</button>'),
                        array('002', 'Server 2', 'Live', 'USD', 'Group B', 'xxxxx', 'Investor B', 'Jane Doe', '1:200', '$5,000', '$7,500', '<button>Action</button>'),array('001', 'Server 1', 'Demo', 'USD', 'Group A', 'xxxxx', 'Investor A', 'John Doe', '1:100', '$10,000', '$12,500', '<button>Action</button>'),
                        array('002', 'Server 2', 'Live', 'USD', 'Group B', 'xxxxx', 'Investor B', 'Jane Doe', '1:200', '$5,000', '$7,500', '<button>Action</button>'),
                    );

                    foreach ($dummyData as $rowIndex => $row) {
                        echo '<tr class="my-auto">';
                        foreach ($row as $index => $cell) {
                            if ($index === 0) {
                                echo '<td class="bold-cell">' . $cell . '</td>';
                            }  else if ($index === 2) {
                                echo '<td class="text-success">' . $cell . '</td>';
                            }
                            else if ($index === 3) {
                                echo '<td class="bold-cell">
                                        <div class="image-cell-container">
                                            <img src="assets/images/image 2.png" alt="404" class="align-middle">
                                            ' . $cell . '
                                        </div>
                                      </td>';
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
                            else if ($index === 9) {
                                $bgClass = ($rowIndex % 2 == 0) ? 'bgs' : 'bg-odd';
                                echo '<td class="' . $bgClass . '">' . $cell . '</td>';
                            } else if ($index === 10) {
                                $bgClass = ($rowIndex % 2 == 0) ? 'bgs' : 'bg-odd';
                                echo '<td class="' . $bgClass . '">' . $cell . '</td>';
                            }
                            else if ($index === 11) {
                                echo '<td>
                                        <div class="action-buttons-container">
                                            <div class="action-button w-100 py-1">
                                                <button class="btn btn-warning btn-block">Delete Account</button>
                                            </div>
                                            <div class="action-button w-100 py-1">
                                                <button class="btn btn-warning btn-block">Change Password</button>
                                            </div>
                                            <div class="action-button w-100 py-1">
                                                <button class="btn btn-warning btn-block">Edit Account</button>
                                            </div>
                                        </div>
                                    </td>';
                            }
                            else{
                                echo '<td >' . $cell . '</td>';
                            }
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>