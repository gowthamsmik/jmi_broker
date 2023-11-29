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

    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
  
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="d-flex">
                <h2 class="fs-4">Control panel | EBooks</h2>
                <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle"
                        alt="">
                    <p class="mt-1 ms-2">Welcome,
                        <?php echo $_SESSION['sessionusername']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>