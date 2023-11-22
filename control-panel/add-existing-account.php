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
    </style>
</head>

<body>
    <div class="d-flex">
        <h2 class="fs-4">Add Existing Account</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>
    <div class="bg-white mt-4 p-5 rounded-3">
        <form>
            <div class="row border-0">
                <div class="col border-0">
                    <label for="">Account Type:</label>
                    <select class="form-select mt-2" id="sel1" name="sellist1">
                        <option>Select</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col border-0">
                    <label for="">Account Group::</label>
                    <select class="form-select mt-2" id="sel1" name="sellist1">
                        <option>Select</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col border-0">
                    <label for="">Currency base:</label>
                    <select class="form-select mt-2" id="sel1" name="sellist1">
                        <option>Select</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="row border-0 mt-4">
                <div class="col border-0">
                    <label for="">MT4 Login User:</label>
                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="">
                </div>
                <div class="col border-0">
                    <label for="">MT4 Login Password:</label>
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
        <button type="button" class="btn btn-primary w-25 mt-4">Add Account </button>
    </div>
</body>

</html>