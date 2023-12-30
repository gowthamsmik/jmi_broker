<?php if (!isset($_SESSION['sessionuser']))
    session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


    <style>
        form .row {
            border: 0px solid;
        }

        .custom-button {
            background-color: #FFBF10 !important;
        }

        .form-control:hover {
            box-shadow: 1px 1px 3px 1px #FFBF10 !important;
        }

        .asterisk {
            height: 10px;
            width: 10px;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div class="d-flex">
                    <h2 class="fs-4"><?php echo $lang["passwordChange"]?></h2>
                    <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg"
                            class="account_circle" alt="">
                        <p class="mt-1 ms-2"><?php echo $lang['welcome1']?>,
                            <?php echo $_SESSION['sessionusername']; ?>
                        </p>
                    </div>
                </div>
                <div class="bg-white mt-4 p-5 rounded-3">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-8"><div class="row mt-3"><label for="" class="form-label mt-2"><?php echo $lang['currentPassword']?><img
                                            src="../assets/images/asterisk.png" alt="" class="asterisk"></label></div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-8 mb-3"><input type="password" name="" id="cpassword" class="form-control border w-100"
                                placeholder="<?php echo $lang['currentPassword']?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-8"><div class="row"><label for="" class="form-label mt-3"><?php echo $lang['newPassword']?> <img
                                            src="../assets/images/asterisk.png" alt="" class="asterisk"></label></div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-8 mb-3"><input type="password" name="" id="npassword" class="form-control border w-100"
                                placeholder="<?php echo $lang['newPassword']?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-8"><div class="row"><label for="" class="form-label mt-3"><?php echo $lang['confirmPassword']?><img
                                            src="../assets/images/asterisk.png" alt="" class="asterisk"></label></div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-8 mb-3"><input type="password" name="" id="cnpassword" class="form-control border w-100"
                                placeholder="<?php echo $lang['confirmNewPassword']?>"></div>
                            </div>
                            <div class="row">
                                <div class="col"><button type="button" class="btn custom-button text-light w-auto mt-4"
                                onclick="change_password()"><?php echo  $lang['updatePassword']?></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>
<script>
    function change_password() {
        var isValid = true;
        var currentPassword = $('input[id=cpassword]').val();
        var newPassword = $('input[id=npassword]').val();
        var confirmNewPassword = $('input[id=cnpassword]').val();
        
      

        if (!currentPassword || !newPassword || !confirmNewPassword) {
            isValid = false;
            alert("All fields are required for Epay deposit.");
        } else if (newPassword.length < 8 || newPassword.length > 40) {
            isValid = false;
            alert("New Password must contains 8 to 40 characters");
        } else if (confirmNewPassword.length < 8 || confirmNewPassword.length > 40) {
            isValid = false;
            alert("Confirm new password must contains 8 to 40 characters");
        } else if (newPassword != confirmNewPassword) {
            isValid = false;
            alert("New Password and Confirm Password does not match");
        }

        if (isValid) {
            $.ajax({
            type: 'POST',
            url: 'includes/changepassword.php',
            data: {
                currentPassword,
                newPassword,
                confirmNewPassword
            },            
            success: function (response) {
                console.log(response);
                alert("Passsword: " + response);
                window.location.href = "personal-details.php";

            },
            error: function (error) {
                console.error(error);
                alert("Failed to Upload Document.");
            }
        });
        }
    }
</script>

</html>