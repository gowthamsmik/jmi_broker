<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include("includes/style.php"); ?>

    <style>
        form .row {
            border: 0px solid;
        }
        .custom-button{
            background-color: #FFBF10;
        }
        .custom-button:hover{
            background-color: #0342AB;
        }
        .form-control:hover{
            box-shadow: 2px 3px 3px 3px #FFBF10 ;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <h2 class="fs-4">Copy Trade</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome, Ameer Ameer</p>
        </div>
    </div>
    <div class="bg-white mt-4 p-5 rounded-3">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="row mt-3"><label for="" class="form-label">Current Password</label></div>
                    <div class="row my-4"><label for="" class="form-label">New Password</label></div>
                    <div class="row"><label for="" class="form-label">Confirm Password</label></div>
                </div>
            </div>
            <div class="col">
                <input type="password" name="" id="" class="form-control border w-100" placeholder="Current Password">
                <input type="password" name="" id="" class="form-control border my-3 w-100" placeholder="New Password">
                <input type="password" name="" id="" class="form-control border w-100" placeholder="Confirm New Password">
            </div>
    </div>
        <button type="button" class="btn custom-button text-light w-25 mt-4">Update password</button>
    </div>
</body>

</html>