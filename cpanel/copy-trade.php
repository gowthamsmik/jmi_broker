<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include("../includes/softwareinclude/config.php") ?>
<?php include("../includes/compatibility.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div class="d-flex">
                    <h2 class="fs-4">Copy Trade</h2>
                    <div class="d-flex ml-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                        <p class="mt-1 ms-2">Welcome, <?php echo isset($_SESSION['sessionusername']) ? $_SESSION['sessionusername'] :"" ?></p>
                    </div>
            </div>
            <div class="bg-white mt-4 p-5 rounded-3">
            <form>
                <div class="row border-0">
                    <div class="col border-0">
                        <label for="">Copy From:</label>
                        <select class="form-select mt-2" id="sel1" name="sellist1">
                            <option>-Select-</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col border-0">
                        <label for="">Copy To:</label>
                        <select class="form-select mt-2" id="sel1" name="sellist1">
                            <option>-Select-</option>
                        </select>
                    </div>
                </div>
                <div class="row border-0 mt-4">
                    <div class="col border-0">
                        <label for="">Copy Percentage:</label>
                        <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="">
                    </div>
                    <div class="col border-0">
                        <label for="">Account Password:</label>
                        <input type="password" class="form-control border rounded-3 mt-2" placeholder="***********"
                            name="pswd">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"
                            checked>
                        <label class="form-check-label mt-1" for="check1">I agree the terms and conditions</label>
                    </div>
                </div>
            </form>
            <button type="button" class="btn custom-button text-light w-25 mt-4">Submit</button>
            </div>
        </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>
</html>