<?php if(!isset($_SESSION['sessionuser']))session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
     <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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
    <?php include("../includes/header.php"); ?>
    <?php include('includes/live-accounts.php') ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
    <div>
        <div class="d-flex">
            <h2 class="fs-4">Forex Account</h2>
            <div class="d-flex ml-auto"><img src='<?php echo $siteurl ."assets/images/svg/account_circle.svg" ?>' class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome,  <?php echo $_SESSION['sessionusername']; ?></p>
            </div>
        </div>
        <h2 class="mt-5">Your account opening request is currently under review</h2>
        <div>
            <h2 class="mt-3">Live Accounts</h2>
            <form>
                <div class="row mt-3">
                    <div class="col-4">
                        <select class="form-select p-2" aria-label="Select account">
                        <?php $acctname = "";
                                                foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $acctname ?> </option>
                                                <?php } ?>
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
                     
                    $dummyData=$accounts;
                    foreach ($dummyData as $rowIndex => $row) {
                        echo '<tr class="my-auto">';
                        foreach ($row as $index => $cell) {
                           
                           if ($index == 'account_id') {
                                echo '<td class="bold-cell">' . $cell . '</td>';
                            }  
                            else if ($index == "account_type") {
                                echo '<td class="text-success">' . $cell . '</td>';
                            }
                            else if ($index == "currency") {
                                echo '<td class="bold-cell">
                                        <div class="image-cell-container">
                                            <img src="../assets/images/image 2.png"  alt="404" class="align-middle">
                                            ' . $cell . '
                                        </div>
                                      </td>';
                            }
                            else if ($index == 'group') {
                                echo '<td class="text-primary">' . $cell . '</td>';
                            }
                            else if ($index == 'password') {
                                echo '<td><span class="bgs p-2 rounded"><i class="fa fa-eye" style="font-size:15px"></i>' . $cell . '</span></td>';
                            }
                            else if ($index == 'investor_password') {
                                echo '<td><span class="bgs p-2 rounded">' . $cell . '</span></td>';
                            }
                            else if ($index == 'Name') {
                                echo '<td class="bold-cell">' . $cell . '</td>';
                            }
                            else if ($index === 'leverage') {
                                echo '<td class="bold-cell">' . $cell . '</td>';
                            }   
                           /*  else if ($index === 'balance') {
                                $bgClass = ($rowIndex % 2 == 0) ? 'bgs' : 'bg-odd';
                                echo '<td class="' . $bgClass . '">' . $cell . '</td>';
                            } else if ($index === 'equity') {
                                $bgClass = ($rowIndex % 2 == 0) ? 'bgs' : 'bg-odd';
                                echo '<td class="' . $bgClass . '">' . $cell . '</td>';
                            } */
                           
                            else{
                                echo  '<td  >' . $cell . '</td>';
                            }
                        }
                            
                            echo '<td></td><td></td><td>
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
                         
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>
</html>