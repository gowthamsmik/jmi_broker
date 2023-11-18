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
        .col{
            border:1px solid black;
        }
        .table-bordered {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px; /* Add margin for better spacing */
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #DEE2E6; /* Border color */
            padding: 8px; /* Adjust padding as needed */
            text-align: left; /* Adjust text alignment as needed */
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
                    <div class="input-group col">
                        <input type="text" class="form-control " placeholder="Search" aria-label="Search" aria-describedby="search-icon">
                        <button class="btn btn-outline-secondary" type="button" id="search-icon">
                        <i class="fa fa-filter" style="font-size:24px"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div>
        <table class="table table-bordered card bg-white">
            <thead>
                <tr>
                    <th>Account</th>
                    <th>Server</th>
                    <th>Type</th>
                    <th>Currency</th>
                    <th >Group</th>
                    <th>Passwords</th>
                    <th >Investor</th>
                    <th>Name</th>
                    <th>Leverage</th>
                    <th>Balance</th>
                    <th>Equity</th>
                    <th >Action</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
    <!-- Dummy data from PHP loop -->
    <!-- Additional rows -->
    <tr>
        <td>Account 3</td>
        <td>Server 3</td>
        <td>Type 3</td>
        <td>GBP</td>
        <td>Group C</td>
        <td>******</td>
        <td>Investor 3</td>
        <td>Sam Smith</td>
        <td>1:200</td>
        <td>$15,000</td>
        <td>$18,000</td>
        <td><!-- Action button or link --></td>
        <!-- Add more columns as needed -->
    </tr>
    <tr>
        <td>Account 4</td>
        <td>Server 4</td>
        <td>Type 4</td>
        <td>JPY</td>
        <td>Group D</td>
        <td>******</td>
        <td>Investor 4</td>
        <td>Mike Johnson</td>
        <td>1:50</td>
        <td>$8,000</td>
        <td>$9,500</td>
        <td><!-- Action button or link --></td>
        <!-- Add more columns as needed -->
    </tr>
</tbody>
        </table>
    </div>
    </div>
</body>
</html>