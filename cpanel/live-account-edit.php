<?php if (!isset($_SESSION['sessionuser']))
    session_start();
    error_reporting(0);
    include("includes/functions.php");
    // include("includes/config.php");
    //    if($_SESSION['sessionuserid']==null);
    //     header("Location: " . $webeurl);
    
    
    
    $account_id=$_GET['id'];
    $selected_fx_account=getAccountDetails(isset($account_id) ? $account_id : 0)
// Check if there's a success message
   


?>
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

        .bg {
            background-color: white;
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
                /* Set to a single column for smaller screens */
            }
        }

        /* Existing styles... (your existing styles remain unchanged) */

        .responsive-table {
            overflow-x: auto;
            /* Enable horizontal scrolling on small screens */
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            /* Adjust as needed */
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
            text-align: center;
            border-right: 1px solid #DEE2E6;
        }

        .bold-cell {
            font-weight: bold;
        }

        .bgs {
            background-color: #d4cbcb;
        }

        .bg-odd {
            background-color: #f7f2f1;
        }

        .responsive-table td .image-cell-container {
            display: flex;
            align-items: center;
        }

        .responsive-table td img.align-middle {
            margin-right: 5px;
            /* Adjust the margin as needed for spacing between image and text */
        }


        .form-control {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        .btn {
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-success {
            background-color: #5cb85c;
            color: #fff;
            border: 1px solid #4cae4c;
        }

        .btn-default {
            background-color: #ccc;
            color: #333;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <!-- <?php //include('includes/live-accounts.php') ?> -->
    <title>JMI | Control Panel</title>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div>
                    <div class="d-flex">
                        <h2 class="fs-4">
                            <?php echo $lang['forex_account'] ?>
                        </h2>
                        <div class="d-flex ms-auto"><img
                                src='<?php echo $siteurl . "assets/images/svg/account_circle.svg" ?>'
                                class="account_circle" alt="">
                            <p class="mt-1 ms-2">
                                <?php echo $lang['welcome'] ?>,
                                <?php echo $_SESSION['sessionusername']; ?>
                            </p>
                        </div>
                    </div>

                    <!-- start edit  Account -->

                    <div class="editPassword" id="edit-account" >

                    <div id="edit" class="edit-account-container">
    <div class="edit-account-header ">
        <h5 >Edit Account</h5>
    </div>
    <br>
    <div class="edit-account-body">
        <form action="includes/edit-fxaccounts.php" method="post" id="editAccount">
        <input type="hidden" name="account_login" value="<?php echo $account_id ;?>" />
            <div class="form-group row">
                <label for="account_type" class="col-sm-2 col-form-label">Account Type :></label>
                <div class="col-sm-4">
                    <select class="form-control" name="account_type" id="account_type" onchange="LiveType(this.value)">
                        <option value="1" <?php if($selected_fx_account['account_type']==1) echo 'selected' ?>>Individual</option>
                        <option value="2" <?php if($selected_fx_account['account_type']==2) echo 'selected' ?>>IB</option>
                    </select>
                </div>
            </div>
        <br>
            <div class="form-group row">
                <label for="account_group" class="col-sm-2 col-form-label">Account Group :</label>
                <div class="col-sm-4">
                    <select class="form-control" name="account_group" id="account_group" onchange="Group(this.value);" required>
                        <option value="3" class="forlive" <?php if($selected_fx_account['account_group']==3) echo 'selected' ?>>Variable Spread Account</option>
                        <option value="5" class="forlive" <?php if($selected_fx_account['account_group']==5) echo 'selected' ?>>Scalping Account</option>
                        <option value="1" class="forlive" <?php if($selected_fx_account['account_group']==1) echo 'selected' ?>>Fixed Spread Account</option>
                        <option value="4" class="forlive" <?php if($selected_fx_account['account_group']==4) echo 'selected' ?>>Bonus Account</option>
                    </select>
                </div>
            </div>
        <br>
            <div class="form-group row">
                <label for="leverage" class="col-sm-2 col-form-label">Account Leverage :</label>
                <div class="col-sm-4">
                    <select class="form-control" name="leverage" id="leverage" onchange="Leverage(this.value);" required>
                    <option value="1" <?php if($selected_fx_account['leverage']==1) echo 'selected' ?>>1:1</option>
                            <option value="5" <?php if($selected_fx_account['leverage']==5) echo 'selected' ?>>1:5</option>
                            <option value="10" <?php if($selected_fx_account['leverage']==10) echo 'selected' ?>>1:10</option>
                            <option value="25" <?php if($selected_fx_account['leverage']==25) echo 'selected' ?>>1:25</option>
                            <option value="50" <?php if($selected_fx_account['leverage']==50) echo 'selected' ?>>1:50</option>
                            <option value="100" <?php if($selected_fx_account['leverage']==100) echo 'selected' ?>>1:100</option>
                            <option value="200" <?php if($selected_fx_account['leverage']==200) echo 'selected' ?>>1:200</option>
                            <option value="300" <?php if($selected_fx_account['leverage']==300) echo 'selected' ?>>1:300</option>
                            <option value="400" <?php if($selected_fx_account['leverage']==400) echo 'selected' ?>>1:400</option>
                            <option value="500" <?php if($selected_fx_account['leverage']==500) echo 'selected' ?>>1:500</option>
                    </select>
                </div>
            </div>
        <br>
            <input type="hidden" name="account_login" id="account_login" value="<?php echo $account_id?>" />

            <div class="form-group row">
                <div class="col-sm-8 offset-sm-2">
                    <button type="submit" class="btn btn-success">Update Account</button>
                </div>
            </div>

        </form>
    </div>
</div>




                    </div>
                    <!-- end edit  Account -->
                </div>

            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php");

    // if (isset($_SESSION['account_deleted_message'])) {
    //     echo '<script>alert("' . $_SESSION['account_deleted_message'] . '");</script>';
    //     unset($_SESSION['account_deleted_message']);

    // }

    

    ?>
</body>
<script>

    function confirmDelete() {
        var confirmation = confirm("Are you sure you want to delete this account?");
        if (confirmation) {
            document.getElementById("deleteForm").submit();
        }
    }

    function closeForm() {
        $('div#change-password').hide();
        $('div#edit-account').hide();
        $('div#account-details').show();
    }

    function changePassword(id){
     
        $('div#change-password').show();
        $('div#edit-account').hide();
        $('div#account-details').hide();
        document.getElementById('account_id').value=id;
       
    }


    function validatechangePasswordForm() {
       
        var oldPassword = document.getElementById('old_password').value;
        var newPassword = document.getElementById('password').value;
        var investorPassword = document.getElementById('investor_password').value;
      
        if (oldPassword === '' || newPassword === '' || investorPassword === '') {
            alert('All fields are required');
            return false;
        }

       

        return true;
    }

    function editAccount(id,accountType,accountGroup,leverage)
    {
        $('div#change-password').hide();
        $('div#edit-account').show();
        $('div#account-details').hide();
        
        <?php getAccountDetails(id) ?>
        // document.getElementById('account_id').value=id;
    }

    var formHtml = `
        <div id="edit{{ $account->id }}" class="edit-account-container">
            <div class="edit-account-header">
                <h4>Edit Account</h4>
            </div>
            <div class="edit-account-body">
                <form action="" method="post" id="editAccount">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <br />
                            <input type="hidden" name="account_login" id="account_login" value="{{ $account->account_id }}" />
                            <div class="controls">
                                <label>Account Type <?php echo $selected_fx_account['id']?></label>
                                <select class="form-control" name="account_type" id="account_type" onchange="LiveType(this.value)">
                                    <option value="1" @if($account->account_type==1) selected >Individual</option>
                                    <option value="2" @if($account->account_type==2) selected @endif>IB</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="controls">
                                <label>Account Group</label>
                                <select class="form-control" name="account_group" id="account_group" onchange="Group(this.value);" required>
                                    <option value="3" class="forlive" @if($account->account_group==3) selected @endif>Variable Spread Account</option>
                                    <option value="5" class="forlive" @if($account->account_group==5) selected @endif>Scalping Account</option>
                                    <option value="1" class="forlive" @if($account->account_group==1) selected @endif>Fixed Spread Account</option>
                                    <option value="4" class="forlive" @if($account->account_group==4) selected @endif>Bonus Account</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="controls">
                                <label>Account Leverage</label>
                                <select class="form-control" name="leverage" id="leverage" onchange="Leverage(this.value);" required>
                                    <option value="1" @if($account->leverage==1) selected @endif>1:1</option>
                                    <option value="5" @if($account->leverage==5) selected @endif>1:5</option>
                                    <option value="10" @if($account->leverage==10) selected @endif>1:10</option>
                                    <option value="25" @if($account->leverage==25) selected @endif>1:25</option>
                                    <option value="50" @if($account->leverage==50) selected @endif>1:50</option>
                                    <option value="100" @if($account->leverage==100) selected @endif>1:100</option>
                                    <option value="200" @if($account->leverage==200) selected @endif>1:200</option>
                                    <option value="300" @if($account->leverage==300) selected @endif>1:300</option>
                                    <option value="400" @if($account->leverage==400) selected @endif>1:400</option>
                                    <option value="500" @if($account->leverage==500) selected @endif>1:500</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <button type="submit" class="btn btn-success submit">Update Account</button>
                    </div>
                </form>
            </div>
        </div>
    `;

    // Set the inner HTML of the container
    document.getElementById("editContainer").innerHTML = formHtml;

</script>

</html>