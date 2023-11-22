<!DOCTYPE html>
<html>

<head>
    <?php include("includes/style.php"); ?>
    <style>
        .white-box {
            background-color: #FFFFFF;
            padding: 20px;
            /* Adjust padding as needed */
            border-radius: 8px;
            /* Optional: Add border radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Optional: Add box shadow for depth */
            height: 250px;
            /* Adjust the height as needed */
        }
        .account_circle {
            height: 30px;
            width: 30px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <h2 class="fs-4">Control Panel|My Referrals</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>
    <div class="white-box">
        <h3 style="font-weight: 600; font-size: 25px; line-height: 40px; color: #342E59;">You Don't Have Any Referrals
            Yet</h3>

        <div class="input-group mb-3 mt-5">
            <input type="text" class="form-control border" placeholder="https://www.jmibrokers.com/en?myref=10441">
            <button class="btn btn-success custom-button bg-primary" type="submit">Copy Link</button>
        </div>
    </div>
</body>

</html>