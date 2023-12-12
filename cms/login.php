<?php session_start();
if (isset($_SESSION['sessionkeyadmin'])) {
    global $siteurl;
    $siteurl = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    ?>
    <meta http-equiv="refresh" content="0;URL='index.php'" />
    Wait while we redirect you to the dashboard...
    <?php
    // header("location: ".$siteurl."dashboard"); /// your code here
} else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Login - CMS - JMI</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="Portal - CMS - JMI">
        <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
        <link rel="shortcut icon" href="favicon.ico">

        <!-- FontAwesome JS-->
        <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

        <!-- App CSS -->
        <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

    </head>

    <body class="app app-login p-0">
        <div class="row g-0 app-auth-wrapper">
            <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
                <div class="d-flex flex-column align-content-end">
                    <div class="app-auth-body mx-auto">
                        <div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2"
                                    src="assets/images/app-logo.svg" alt="logo"></a></div>
                        <h2 class="auth-heading text-center mb-5">Log in to Portal</h2>
                        <div class="auth-form-container text-start">
                            <form class="auth-form login-form">
                                <div class="email mb-3">
                                    <label class="sr-only" for="signin-email">Email</label>
                                    <input id="signin-email" name="signin-email" type="email"
                                        class="form-control signin-email" placeholder="Email address" required="required">
                                </div><!--//form-group-->
                                <div class="password mb-3">
                                    <label class="sr-only" for="signin-password">Password</label>
                                    <input id="signin-password" name="signin-password" type="password"
                                        class="form-control signin-password" placeholder="Password" required="required">
                                    <div class="extra mt-3 row justify-content-between">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="RememberPassword">
                                                <label class="form-check-label" for="RememberPassword">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div><!--//col-6-->
                                        <div class="col-6">
                                            <div class="forgot-password text-end">
                                                <a href="reset-password.html">Forgot password?</a>
                                            </div>
                                        </div><!--//col-6-->
                                    </div><!--//extra-->
                                </div><!--//form-group-->
                                <div class="text-center">
                                    <button type="submit" class="login_btn btn app-btn-primary w-100 theme-btn mx-auto">Log
                                        In</button>
                                </div>
                            </form>

                        </div><!--//auth-form-container-->

                    </div><!--//auth-body-->

                    <footer class="app-auth-footer">
                        <div class="container text-center py-3">
                            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


                        </div>
                    </footer><!--//app-auth-footer-->
                </div><!--//flex-column-->
            </div><!--//auth-main-col-->
            <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
                <div class="auth-background-holder">
                </div>
                <div class="auth-background-mask"></div>
                <div class="auth-background-overlay p-3 p-lg-5">
                    <div class="d-flex flex-column align-content-end h-100">
                        <div class="h-100"></div>

                    </div>
                </div><!--//auth-background-overlay-->
            </div><!--//auth-background-col-->

        </div><!--//row-->
        <script src="assets/js/jquery.js"></script>
        <script>
            $(document).keypress(function (e) {
                if (e.which == 13) {
                    e.preventDefault();
                    dologin();
                }
            });

            $(".login_btn").click(function (e) {
                e.preventDefault();
                dologin();
            });

            function dologin() {
                var theemail = $('input[name="signin-email"]').val();
                var thepassword = $('input[name="signin-password"]').val();

                if (theemail == "") {
                    alert('Please Enter Your Email');
                } else if (thepassword == "") {
                    alert('Please Enter Your Password');
                } else {
                    $.ajax({
                        type: "POST",
                        url: 'includes/softwareinclude/login.php',
                        data: { email: theemail, password: thepassword },
                        success: function (data) {
                            if (data == 'success') {
                                alert('Login successful!');
                                window.location.replace("index.php");
                            } else if (data == 'error') {
                                alert('Wrong Credentials! Please try again.');
                            }
                        }
                    });
                }
            }



        </script>

    </body>

    </html>
<?php } ?>