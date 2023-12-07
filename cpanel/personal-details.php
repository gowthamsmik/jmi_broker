<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION['sessionuser'])) {
    session_start();
}

include("../includes/softwareinclude/functions.php");
$userdetails = getUser();
$userdetailsCount = count($userdetails);
$profileDetails = $userdetailsCount > 0 ? $userdetails[0] : null;
?>

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <style>
        .box-shadow {
            height: 50px;
        }

        .box-shadow:hover {
            box-shadow: 1px 1px 4px 2px #FFBF10 !important;
        }

        .button_color {
            background-color: #FFBF10 !important;
        }

        .button_color:hover {
            background-color: #0342AB !important;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <p class="fs-3"><?php echo $lang["controlPanel"] ?> | <?php echo $lang["profile"] ?>
                
            </p>

            <p class="fs-4 mt-4"><?php echo $lang["personal_details"] ?></p>
            <hr>
            <div class="px-5 mx-5 mt-4">
                <form action="#">
                    <div class="d-flex align-items-center gap-5 row">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["title"] ?></label></div>
                        <div class="col-7">
                            <select id="titleDropdown" class="form-select rounded-3 box-shadow py-2 px-3">
                                <option value="1" <?php echo ($profileDetails['title'] == 1) ? 'selected' : ''; ?>>Mr
                                </option>
                                <option value="2" <?php echo ($profileDetails['title'] == 2) ? 'selected' : ''; ?>>Mrs
                                </option>
                                <option value="3" <?php echo ($profileDetails['title'] == 3) ? 'selected' : ''; ?>>Miss
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["full_name"] ?></label></div>
                        <div class="col-7"><input type="text" class="form-control rounded-3 box-shadow border bg-white"
                                name="fullName" id="fullName" placeholder="Enter Name"
                                value="<?php echo isset($profileDetails['fullname']) ? $profileDetails['fullname'] : ''; ?>">
                            <small id="fullNameError" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["email"] ?></label></div>
                        <div class="col-7">
                            <input type="email" class="form-control rounded-3 box-shadow border bg-white" name="email"
                                id="emailInput" placeholder="Enter mail"
                                value="<?php echo isset($profileDetails['email']) ? $profileDetails['email'] : ''; ?>">
                            <div id="emailValidationMessage" style="color: red;"></div>
                            <!-- <button class="btn button_color" id="changeEmailBtn">Change Email</button> -->
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["username"] ?></label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control rounded-3 box-shadow border bg-white"
                                placeholder="Enter user name" name="username" id="username" oninput="validateUsername()"
                                value="<?php echo isset($profileDetails['username']) ? $profileDetails['username'] : ''; ?>">
                            <div id="usernameError" style="color: red;"></div>
                            <!-- <button class="btn button_color" id="changeUsernameBtn"
                                onclick="enableUsernameInput()">Change
                                Username</button> -->
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["password"] ?></label></div>
                        <div class="col-7"><button onclick="showRoute('link15')"
                                class="btn button_color"><?php echo $lang["change_password"] ?></button></div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["gender"] ?></label></div>
                        <div class="col-7">
                            <select class="form-select rounded-3 box-shadow py-2 px-3" id="genderDropdown">
                                <option value="-1" disabled>-Select-</option>
                                <option value="1" <?php echo (isset($profileDetails['gender']) && $profileDetails['gender'] == 1) ? 'selected' : ''; ?>>Male</option>
                                <option value="2" <?php echo (isset($profileDetails['gender']) && $profileDetails['gender'] == 2) ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["date_of_birth"] ?></label></div>
                        <div class="d-flex col-7 gap-3">
                            <select id="dateDropdown" class="form-select rounded-3 box-shadow py-2 px-3">
                                <option value="">-select-</option>
                                <!-- Use a loop to generate options from 1 to 31 -->
                                <!-- Use a loop to generate options from 1 to 31 -->
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo '<option value="' . $i . '" ' . (($profileDetails['birthday'] == $i) ? 'selected' : '') . '>' . $i . '</option>';
                                }
                                ?>
                            </select>
                            <select id="monthDropdown" class="form-select rounded-3 box-shadow py-2 px-3">
                                <?php
                                $months = [
                                    1 => 'Jan',
                                    2 => 'Feb',
                                    3 => 'Mar',
                                    4 => 'Apr',
                                    5 => 'May',
                                    6 => 'Jun',
                                    7 => 'Jul',
                                    8 => 'Aug',
                                    9 => 'Sep',
                                    10 => 'Oct',
                                    11 => 'Nov',
                                    12 => 'Dec'
                                ];

                                foreach ($months as $value => $label) {
                                    echo "<option value=\"$value\" " . (($profileDetails['birthmonth'] == $value) ? 'selected' : '') . ">$label</option>";
                                }
                                ?>
                            </select>
                            <select id="yearDropdown" class="form-select rounded-3 box-shadow py-2 px-3">
                                <?php
                                $currentYear = date("Y");
                                $startYear = 1930;

                                for ($year = $currentYear; $year >= $startYear; $year--) {
                                    echo "<option value=\"$year\" " . (($profileDetails['birthyear'] == $year) ? 'selected' : '') . ">$year</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>


            <p class="fs-4 mt-4"><?php echo $lang["home_address"] ?></p>
            <hr>
            <div class="px-5 mx-5 mt-4">
                <form action="\">
                    <div class="d-flex align-items-center gap-5 row">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["address_1"] ?></label></div>
                        <div class="col-7">
                            <input type="text" class="form-control rounded-3 box-shadow border bg-white" name=""
                                id="address1"
                                value="<?php echo isset($profileDetails['address1']) ? $profileDetails['address1'] : ''; ?>"
                                placeholder="Address">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["address_2"] ?></label></div>
                        <div class="col-7"><input type="text" class="form-control rounded-3 box-shadow border bg-white"
                                value="<?php echo isset($profileDetails['address2']) ? $profileDetails['address2'] : ''; ?>"
                                name="" id="address2" placeholder="Address 2"></div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["town_city"] ?></label></div>
                        <div class="col-7">
                            <input type="text" class="form-control rounded-3 box-shadow border bg-white" name=""
                                id="town_city"
                                value="<?php echo isset($profileDetails['town_city']) ? $profileDetails['town_city'] : ''; ?>"
                                placeholder="Enter mail">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["post_code"] ?></label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control rounded-3 box-shadow border bg-white" id="post_code"
                                value="<?php echo isset($profileDetails['post_code']) ? $profileDetails['post_code'] : ''; ?>"
                                placeholder="Enter user name" name="" id="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["country"] ?></label></div>
                        <div class="col-7">
                            <select class="form-select rounded-3 box-shadow py-2 px-3" id="country">
                                <option>-Select-</option>
                                <?php

                                $countriesJson = file_get_contents('../assets/json/countries.json');
                                if ($countriesJson === false) {
                                    echo "<option value=\"\">Error loading countries</option>";
                                } else {
                                    $countries = json_decode($countriesJson, true);
                                    if ($countries === null) {
                                        echo "<option value=\"\">Error decoding countries</option>";
                                    } else {
                                        foreach ($countries as $country) {
                                            // $selected = ($profileDetails['country'] == $country['country']) ? 'selected' : '';
                                            // echo "<option value=\"{$country['country']}\">{$country['country']}</option>";
                                            $selected = ((string)$profileDetails['country'] == (string)$country['country']) ? 'selected' : '';
                                            echo "<option value=\"{$country['country']}\" $selected>{$country['country']}</option>";

                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["home"] ?></label></div>
                        <div class="col-7 d-flex gap-3">
                            <div class="col-3 p-0">
                                <select class="form-select rounded-3 box-shadow py-2 px-3" id="home_code">
                                    <option>-Select-</option>
                                    <?php

                                    $countriesJson = file_get_contents('../assets/json/countries.json');
                                    if ($countriesJson === false) {
                                        echo "<option value=\"\">Error loading countries</option>";
                                    } else {
                                        $countries = json_decode($countriesJson, true);
                                        if ($countries === null) {
                                            echo "<option value=\"\">Error decoding countries</option>";
                                        } else {
                                            foreach ($countries as $country) {
                                                $selected = ($profileDetails['country_code'] == $country['code']) ? 'selected' : '';
                                                echo "<option value=\"{$country['code']}\" $selected>+{$country['code']}</option>";
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col p-0">
                                <input type="number" id="home" class="form-control rounded-3 box-shadow border bg-white"
                                    value="<?php echo isset($profileDetails['home']) ? $profileDetails['home'] : ''; ?>"
                                    placeholder="Enter Home mobile number" name="">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-5 row mt-4">
                        <div class="col-3"><label for="" class="form-label fs-5"><?php echo $lang["mobile"] ?></label></div>
                        <div class="col-7 d-flex gap-3">
                            <div class="col-3 p-0">
                                <select class="form-select rounded-3 box-shadow py-2 px-3" id="mobile_code">
                                    <option>-Select-</option>
                                    <?php

                                    $countriesJson = file_get_contents('../assets/json/countries.json');
                                    if ($countriesJson === false) {
                                        echo "<option value=\"\">Error loading countries</option>";
                                    } else {
                                        $countries = json_decode($countriesJson, true);
                                        if ($countries === null) {
                                            echo "<option value=\"\">Error decoding countries</option>";
                                        } else {
                                            foreach ($countries as $country) {
                                                $selected = ($profileDetails['country_code'] == $country['code']) ? 'selected' : '';
                                                echo "<option value=\"{$country['code']}\" $selected>+{$country['code']}</option>";
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col p-0">
                                <input type="number" class="form-control rounded-3 box-shadow border bg-white"
                                    value="<?php echo isset($profileDetails['mobile']) ? $profileDetails['mobile'] : ''; ?>"
                                    placeholder="Enter Home mobile number" name="" id="mobile">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <p class="fs-4 mt-4"><?php echo $lang["additional_details"] ?></p>
            <hr>
            <div class="px-5 mx-5 mt-4">
                <form action="">
                    <div class="d-flex align-items-center gap-4 row mt-4">
                        <div class="col-4"><label for="" class="form-label fs-5"><?php echo $lang["employment_status"] ?></label></div>
                        <div class="col-6">
                            <select class="form-select rounded-3 box-shadow py-2 px-3" id="employment_status">
                                <option value="-1" disabled>-Select-</option>
                                <option value="1" <?php echo (isset($profileDetails['employment_status']) && $profileDetails['employment_status'] == 1) ? 'selected' : ''; ?>>Employed</option>
                                <option value="2" <?php echo (isset($profileDetails['employment_status']) && $profileDetails['employment_status'] == 2) ? 'selected' : ''; ?>>Unemployed</option>
                                <option value="3" <?php echo (isset($profileDetails['employment_status']) && $profileDetails['employment_status'] == 3) ? 'selected' : ''; ?>>Self Employed
                                </option>
                                <option value="4" <?php echo (isset($profileDetails['employment_status']) && $profileDetails['employment_status'] == 4) ? 'selected' : ''; ?>>Retired</option>
                                <option value="5" <?php echo (isset($profileDetails['employment_status']) && $profileDetails['employment_status'] == 5) ? 'selected' : ''; ?>>Student</option>

                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4 row mt-4">
                        <div class="col-4"><label for="" class="form-label fs-5"><?php echo $lang["nature_of_business"] ?></label></div>
                        <div class="col-6">
                            <select class="form-select rounded-3 box-shadow py-2 px-3" id="nature_of_business">
                                <option value="-1" disabled>-Select-</option>
                                <option value="1" <?php echo (isset($profileDetails['nature_of_business']) && $profileDetails['nature_of_business'] == 1) ? 'selected' : ''; ?>>Accountancy</option>
                                <option value="2" <?php echo (isset($profileDetails['nature_of_business']) && $profileDetails['nature_of_business'] == 2) ? 'selected' : ''; ?>>Admin/Secretarial
                                </option>
                                <option value="3" <?php echo (isset($profileDetails['nature_of_business']) && $profileDetails['nature_of_business'] == 3) ? 'selected' : ''; ?>>Agriculture</option>
                                <option value="4" <?php echo (isset($profileDetails['nature_of_business']) && $profileDetails['nature_of_business'] == 4) ? 'selected' : ''; ?>>Financial
                                    Services-Banking</option>
                                <option value="5" <?php echo (isset($profileDetails['nature_of_business']) && $profileDetails['nature_of_business'] == 5) ? 'selected' : ''; ?>>Catering/Hospitality
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4 row mt-4">
                        <div class="col-4"><label for="" class="form-label fs-5"><?php echo $lang["estimated_annual_income"] ?></label></div>
                        <div class="col-6">
                            <select class="form-select rounded-3 box-shadow py-2 px-3" id="annual_income">
                                <option value="-1" disabled>-Select-</option>
                                <option value="1" <?php echo ($profileDetails['annual_income'] == 1) ? 'selected' : ''; ?>>Lessthan $15,000</option>
                                <option value="2" <?php echo ($profileDetails['annual_income'] == 2) ? 'selected' : ''; ?>>$15,000 - $24,999</option>
                                <option value="3" <?php echo ($profileDetails['annual_income'] == 3) ? 'selected' : ''; ?>>$25,000 - $49,000</option>
                                <option value="4" <?php echo ($profileDetails['annual_income'] == 4) ? 'selected' : ''; ?>>$50,000 - $99,999</option>
                                <option value="5" <?php echo ($profileDetails['annual_income'] == 5) ? 'selected' : ''; ?>>$100,000 - $249,999</option>
                                <option value="6" <?php echo ($profileDetails['annual_income'] == 6) ? 'selected' : ''; ?>>$250,000 or more</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4 row mt-4">
                        <div class="col-4"><label for="" class="form-label fs-5"><?php echo $lang["estimated_net_worth"] ?></label></div>
                        <div class="col-6">
                            <select class="form-select rounded-3 box-shadow py-2 px-3" id="net_worth">
                                <option value=" -1" disabled>-Select-</option>
                                <option value="1" <?php echo ($profileDetails['net_worth'] == 1) ? 'selected' : ''; ?>>
                                    Lessthan $15,000</option>
                                <option value="2" <?php echo ($profileDetails['net_worth'] == 2) ? 'selected' : ''; ?>>
                                    $15,000 - $24,999</option>
                                <option value="3" <?php echo ($profileDetails['net_worth'] == 3) ? 'selected' : ''; ?>>
                                    $25,000 - $49,000</option>
                                <option value="4" <?php echo ($profileDetails['net_worth'] == 4) ? 'selected' : ''; ?>>
                                    $50,000 - $99,999</option>
                                <option value="5" <?php echo ($profileDetails['net_worth'] == 5) ? 'selected' : ''; ?>>
                                    $100,000 - $249,999</option>
                                <option value="6" <?php echo ($profileDetails['net_worth'] == 6) ? 'selected' : ''; ?>>
                                    $250,000 or more</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4 row mt-4">
                        <div class="col-4"></div>
                        <div class="col-6">
                            <button class="btn button_color w-100 text-white" onclick="patchprofile()"><?php echo $lang["update_profile"] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>

    <!-- script -->


    <script>
        // Add an event listener to the dropdown
        document.getElementById('titleDropdown').addEventListener('change', function () {
            // Retrieve the selected value
            var selectedValue = this.value;

            // You can use the selectedValue as needed, for example, log it to the console
            console.log('Selected Title:', selectedValue);
        });

        document.getElementById('fullName').addEventListener('input', function () {
            // Retrieve the input value
            var fullName = this.value;

            // Validate the length
            if (fullName.length >= 3) {
                // Clear any previous error message
                document.getElementById('fullNameError').textContent = '';
            } else {
                // Display an error message
                document.getElementById('fullNameError').textContent = 'Full name must be at least 3 characters long.';
            }
        });


        document.getElementById('emailInput').addEventListener('blur', function () {
            validateEmail();
        });

        function validateEmail() {
            var emailInput = document.getElementById('emailInput');
            var email = emailInput.value.trim();

            // Regular expression for a basic email format validation
            var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Check if the email format is valid
            if (!emailFormat.test(email)) {
                document.getElementById('emailValidationMessage').innerHTML = 'Invalid email format';
                return;
            }

            // Check if the length of the email is within a specific range (for example, between 5 and 50 characters)
            if (email.length < 5 || email.length > 50) {
                document.getElementById('emailValidationMessage').innerHTML = 'Email must be between 5 and 50 characters';
                return;
            }

            // If all validations pass, clear the validation message
            document.getElementById('emailValidationMessage').innerHTML = '';
        }


        document.getElementById('changeEmailBtn').addEventListener('click', function () {
            toggleEmailInput();
        });

        function toggleEmailInput() {
            var emailInput = document.getElementById('emailInput');
            var emailValidationMessage = document.getElementById('emailValidationMessage');

            // Toggle the 'disabled' attribute of the input
            emailInput.disabled = !emailInput.disabled;

            // Clear the validation message when enabling the input
            if (!emailInput.disabled) {
                emailValidationMessage.innerHTML = '';
            }
        }

        function validateUsername() {
            var usernameInput = document.getElementById('username');
            var username = usernameInput.value;
            var usernameError = document.getElementById('usernameError');

            // Regular expression to check if there is at least one number in the username
            var hasNumber = /\d/.test(username);

            // Check if the username has at least one number
            if (!hasNumber) {
                usernameError.textContent = 'Username must contain at least 1 number.';
            } else {
                usernameError.textContent = ''; // Clear the error message
            }
        }

        function enableUsernameInput() {
            var usernameInput = document.getElementById('username');
            usernameInput.disabled = false; // Enable the input field
        }

        document.getElementById('personaldetailsroute').addEventListener('click', function () {
            window.parent.showRoute('link15');

        })


        document.getElementById('genderDropdown').addEventListener('change', function () {
            // Retrieve the selected value
            var genderValue = this.value;

            // You can use the selectedValue as needed, for example, log it to the console
            console.log('Selected Gender:', genderValue);
        });

        document.getElementById('dateDropdown').addEventListener('change', function () {
            // Retrieve the selected value
            var dateValue = this.value;

            // You can use the selectedValue as needed, for example, log it to the console
            console.log('Selected Gender:', genderValue);
        });

        document.getElementById('dateDropdown').addEventListener('change', function () {
            // Retrieve the selected value for the date dropdown
            var dateValue = this.value;

            // You can use the selectedValue as needed, for example, log it to the console
            console.log('Selected Date:', dateValue);
        });

        document.getElementById('monthDropdown').addEventListener('change', function () {
            // Retrieve the selected value for the month dropdown
            var monthValue = this.value;

            // You can use the selectedValue as needed, for example, log it to the console
            console.log('Selected Month:', monthValue);
        });

        document.getElementById('yearDropdown').addEventListener('change', function () {
            // Retrieve the selected value for the year dropdown
            var yearValue = this.value;

            // You can use the selectedValue as needed, for example, log it to the console
            console.log('Selected Year:', yearValue);
        });
        function patchprofile() {
            // Prevent the default form submission behavior
            event.preventDefault();

            if (validateForm()) {
                check_existence(function (existence) {
                    if (existence) {
                var $title = $('select[id="titleDropdown"]').val();
                var $fullName = $('input[id="fullName"]').val();
                var $email = $('input[id="emailInput"]').val();
                var $userName = $('input[id="username"]').val();
                var $gender = $('select[id="genderDropdown"]').val();
                var $birthDate = $('select[id="dateDropdown"]').val();
                var $birthMonth = $('select[id="monthDropdown"]').val();
                var $birthYear = $('select[id="yearDropdown"]').val();
                var $address1 = $('input[id="address1"]').val();
                var $address2 = $('input[id="address2"]').val();
                var $townCity = $('input[id="town_city"]').val();
                var $postCode = $('input[id="post_code"]').val();
                var $homeCode = $('select[id="home_code"]').val();
                var $home = $('input[id="home"]').val();
                var $mobileCode = $('select[id="mobile_code"]').val();
                var $mobile = $('input[id="mobile"]').val();
                var $country = $('select[id="country"]').val();
                var $employmentStatus = $('select[id="employment_status"]').val();
                var $natureOfBusiness = $('select[id="nature_of_business"]').val();
                var $annualIncome = $('select[id="annual_income"]').val();
                var $netWorth = $('select[id="net_worth"]').val();

                $.ajax({
                    type: 'POST',
                    url: 'includes/profile.php',
                    data: {
                        title: $title,
                        fullName: $fullName,
                        email: $email,
                        userName: $userName,
                        gender: $gender,
                        birthDate: $birthDate,
                        birthMonth: $birthMonth,
                        birthYear: $birthYear,
                        address1: $address1,
                        address2: $address2,
                        townCity: $townCity,
                        postCode: $postCode,
                        homeCode: $homeCode,
                        home: $home,
                        mobileCode: $mobileCode,
                        mobile: $mobile,
                        country: $country,
                        employmentStatus: $employmentStatus,
                        natureOfBusiness: $natureOfBusiness,
                        annualIncome: $annualIncome,
                        netWorth: $netWorth
                    },
                    success: function (response) {
                        // Handle the response from the server if needed
                        console.log(response);
                        alert("Updated Successfuly!");
                        window.location.reload();
                    },
                    error: function (error) {
                        // Handle errors if the server request fails
                        console.error(error);
                        alert("Failed to update profile.");
                    }
                });
            }});
        }
        }
        function validateForm() {

            var errors = [];

            function addError(message) {
                errors.push(message);
            }

            var $title = $('select[id="titleDropdown"]').val();
            if ($title.trim() === '') {
                addError('Title is required.');

            }

            var $fullName = $('input[id="fullName"]').val();
            if ($fullName.trim() === '') {
                addError('Full Name is required.');

            }

            // Validate Gender
            var $gender = $('select[id="genderDropdown"]').val();
            if ($gender.trim() === '') {
                addError('Gender is required.');

            }

            // Validate Date of Birth
            var $birthDate = $('select[id="dateDropdown"]').val();
            var $birthMonth = $('select[id="monthDropdown"]').val();
            var $birthYear = $('select[id="yearDropdown"]').val();
            if ($birthDate.trim() === '' || $birthMonth.trim() === '' || $birthYear.trim() === '') {
                addError('Date of Birth is required.');

            }

            // Validate Address
            var $address1 = $('input[id="address1"]').val();
            if ($address1.trim() === '') {
                addError('Address 1 is required.');

            }

            var $address2 = $('input[id="address2"]').val();
            if ($address2.trim() === '') {
                addError('Address 2 is required.');

            }

            // Validate Town/City
            var $townCity = $('input[id="town_city"]').val();
            if ($townCity.trim() === '') {
                addError('Town/City is required.');

            }

            // Validate Post Code
            var $postCode = $('input[id="post_code"]').val();
            if ($postCode.trim() === '') {
                addError('Post Code is required.');

            }

            // Validate Home Code
            var $homeCode = $('select[id="home_code"]').val();
            if ($homeCode.trim() === '') {
                addError('Home Code is required.');

            }

            // Validate Mobile Code
            var $mobileCode = $('select[id="mobile_code"]').val();
            if ($mobileCode.trim() === '') {
                addError('Mobile Code is required.');

            }

            // Validate Country
            var $country = $('select[id="country"]').val();
            if ($country.trim() === '') {
                addError('Country is required.');

            }

            // Validate Employment Status
            var $employmentStatus = $('select[id="employment_status"]').val();
            if ($employmentStatus.trim() === '') {
                addError('Employment Status is required.');

            }

            // Validate Nature of Business
            var $natureOfBusiness = $('select[id="nature_of_business"]').val();
            if ($natureOfBusiness.trim() === '') {
                addError('Nature of Business is required.');

            }

            // Validate Annual Income
            var $annualIncome = $('select[id="annual_income"]').val();
            if ($annualIncome.trim() === '') {
                addError('Annual Income is required.');

            }

            // Validate Net Worth
            var $netWorth = $('select[id="net_worth"]').val();
            if ($netWorth.trim() === '') {
                addError('Net Worth is required.');

            }

            var $email = $('input[id="emailInput"]').val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test($email)) {
                addError('Please enter a valid email address.');

            }

            // Validate Phone using regex
            var $mobile = $('input[id="mobile"]').val();
            var phoneRegex = /^\d{7,18}$/;
            if (!phoneRegex.test($mobile)) {
                addError('Please enter a valid phone number.');

            }
            var $username = $('input[id="username"]').val();
            if ($username.trim() === '') {
                addError('Username is required.');

            }
            // if ($username.trim() !== '' && emailRegex.test($email) && phoneRegex.test($mobile)) {
               
            // }

            if (errors.length > 0) {
                alert(errors.join('\n'));
                return false;
            }

            return true;
        }

        function check_existence(callback){

            $.ajax({
                    type: 'POST',
                    url: 'includes/check-existence.php', // Replace with the actual server-side endpoint
                    data: {
                        email: $('input[id="emailInput"]').val(),
                        mobile: $('input[id="mobile"]').val(),
                        username: $('input[id="username"]').val()
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'exists') {
                            // Handle errors from the server
                            alert('One or more fields already exist. Please check the form.');


                            // Handle specific errors if needed
                            if (response.errors.email) {
                                alert(response.errors.email);
                            }
                            if (response.errors.mobile) {
                                alert(response.errors.mobile);
                            }
                            if (response.errors.username) {
                                alert(response.errors.username);
                            }
                            callback(false);
                        }else {
                            callback(true);
                        }
                    },
                    error: function (error) {
                        console.error(error);
                        alert("Failed to validate form.");
                        callback(false);
                    }
                });
        }

    </script>
</body>

</html>