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
            background-color: #0342AB;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <h2 class="fs-4">Internal Transfer</h2>
        <div class="d-flex ml-auto"><img src="assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2">Welcome,  <?php echo $_SESSION['sessionusername']; ?></p>
        </div>
    </div>
    <div class="bg-white mt-4 p-5 rounded-3">
        <form>
            <div class="row border-0">
                <div class="col border-0">
                    <label for="">Transfer From:</label>
                    <select class="form-select mt-2" id="sel1" name="sellist1">
                        <option>Select</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col border-0">
                    <label for="">Transfer To: </label>
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
                    <label for="">Transfer Amount</label>
                    <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="">
                </div>
                <div class="col border-0">
                    <label for="">Account Password:</label>
                    <input type="password" class="form-control border rounded-3 mt-2" placeholder="***********"
                        name="pswd">
                </div>
            </div>
            <div class="row mt-4">
                <div class="form-check col border-0">
                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"
                        checked>
                    <label class="form-check-label mt-1" for="check1">I agree the terms and conditions</label>
                </div>
                <div class="col border-0">
                    <p class='fs-3 my-2'>Internal Transfer Details</h1>
                    <h6>Express Transfer (Instant Transfer)</h6>
                </div>
            </div>
        </form>
        <button type="button" class="btn custom-button text-light w-25 mt-4">Transfer Now</button>
    </div>
</body>

</html>