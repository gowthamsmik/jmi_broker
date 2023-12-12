<?php 

$userid = isset($_GET['userid']) ? $_GET['userid'] : null;
$token = isset($_GET['token']) ? $_GET['token'] : null;
$email = isset($_GET['email']) ? $_GET['email'] : null;
$success = "";
$username = "";
// $result = isset($_GET['result']) ? $_GET['result'] : null;

// // Use the result parameter as needed
// if ($result === 'true') {
//     // Verification successful, display appropriate message or content
//     echo "Verification successful!";
// } elseif ($result === 'false') {
//     // Verification failed, display appropriate message or content
//     echo "Verification failed!";
// } 
?>
<!-- if (!isset($_SESSION['sessionuser']))
    session_start() -->
    <!DOCTYPE html>
    <html>

    <head>
    <?php include("includes/softwareinclude/config.php") ?>
    <?php include("includes/compatibility.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/host-style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <title>JMI | Reset Password</title>
    <style> 
        .popupfeild {
            margin-bottom: 20px;

        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="password"] {
            width: 800px;
            padding: 8px;
            height: 40px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        input[type="password"]::placeholder {
            color: black;
            /* Adjust the color to your preference */
        }

        .popupbutton {
            display: flex;
            width: 25%;
            height: 60px;
            padding: 14px 37px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
            border-radius: 5px;
            background: #FED801;
            box-shadow: 0px 13px 26px 0px rgba(0, 0, 0, 0.2);
            color: #000;
            text-align: center;
            font-size: 30px;
            font-weight: 700;
            line-height: 1;
            transition: all 0.4s ease-in-out;
         
            justify-content:center;
        }

        .popupbutton:hover {
                background: #090F22;
                color:white;
                cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include("includes/header.php"); ?>
    <?php include("resetpasswordverify.php"); ?>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <center>
        <?php if ($success) { ?>
            <h3 class="py-5 px-3 text-blue"> Hi <?php echo $username ?>, please enter your new password here!</h3>
            <form class="saveforgotpassword.php" style="width: 50%;">
                <div class="popupfeild row px-5 py-3">
                    <label class="fs-4" for="forgotpasswordEmail">
                        New Password
                    </label>
                    <input type="password" name='newpassword' placeholder="Enter the New password" class="fs-4 border" />
                </div>
                <div class="popupfeild row px-5 py-3">
                    <label class="fs-4" for="forgotpasswordEmail">
                        Confirm Password
                    </label>
                    <input type="password" name='confirmPassword' placeholder="Confirm the New Password" class="fs-4" />
                </div>

                <div class="popupbutton mx-5 my-2" id='forgotCodeButton'>
                    <button class="button_color w-auto text-white fs-4" onclick="savePassword(event)">Submit</button>
                </div>
            </form>
        <?php } else { ?>
            <div class="container">
                <h1>Verification Link Expired</h1>
                <p>The verification link you used has expired. Please request a new verification link.</p>
                <!-- You can add additional content or links here -->
            </div>
        <?php } ?>
    </center>
</div>






    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>
<script>
    function savePassword() {
        event.preventDefault();
        var newPassword = $('input[name="newpassword"]').val();
        var confirmPassword = $('input[name="confirmPassword"]').val();
        var email = '<?php echo $email; ?>';
        // Validation checks
        if (!newPassword || !confirmPassword) {
            alert('Please enter both the new password and confirm password.');
            return;
        }
        if (newPassword !== confirmPassword) {
            alert('Passwords do not match.');
            return;
        }

        if (newPassword.length < 8 || newPassword.length > 40) {
            alert('Password must be between 8 and 40 characters.');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'savepassword.php', 
            data: {
                newPassword: newPassword,
                confirmPassword: confirmPassword,
                useremail:email
            },
            success: function (response) {
                if(response=='success'){
                    alert("Password Updated Successfully");
                    window.location.href="index.php"
                }else{
                    console.log(response);
                    alert("error saving password!",response);
                    window.location.href="index.php"
                }
                
            },
            error: function (error) {
                console.error(error);
                alert('Failed to save password.');
            }
        });
    }
    </script>
</html>