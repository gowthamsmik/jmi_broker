<!DOCTYPE html>
<html>
<head>
    <?php include("includes/style.php"); ?>
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
        .button {
            background-color: #007BFF !important; /* Primary color */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #FFC107 !important; /* Yellow hover color */
        }
    </style>
</head>
<body>
    <div>
        <div class="d-flex">
            <h2>Deposit Account</h2>
            <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
                <p class="mt-1 ms-2">Welcome, Ameer Ameer</p>
            </div>
        </div>
        <div class="grid-container mt-5">
            <!-- Dynamically generate grid items here -->
            <?php
            // Sample data (replace this with data fetched from your source)
            $data = [
                ['image' => 'assets/images/pay-methods/8.png', 'text' => 'Bank Wire', 'button_text' => 'Withdraw'],
                ['image' => 'assets/images/pay-methods/2.png', 'text' => 'Epay', 'button_text' => 'Withdraw'],
                ['image' => 'assets/images/pay-methods/3.png', 'text' => 'Advcash', 'button_text' => 'Withdraw'],
                ['image' => 'assets/images/pay-methods/5.png', 'text' => 'Perfect Money', 'button_text' => 'Withdraw'],
                ['image' => 'assets/images/pay-methods/1.png', 'text' => 'Coin Base', 'button_text' => 'Withdraw'],
                ['image' => 'assets/images/pay-methods/7.png', 'text' => 'Western Union', 'button_text' => 'Withdraw'],
                ['image' => 'assets/images/pay-methods/6.png', 'text' => 'Money Gram', 'button_text' => 'Withdraw'],
                // Add more data as needed
            ];
            foreach ($data as $item) {
            ?>
                <div class="grid-item card bg-white  rounded box mx-auto">
                    <div class="w-100 h-100 p-5">
                        <img src="<?php echo $item['image']; ?>" class="mx-auto" alt="Image">
                    </div>
                    <p class="font-weight-bold  text-center mt-3"> <?php echo $item['text']; ?> </p>
                    <button class='btn button mt-3 '><?php echo $item['button_text']; ?></button>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>