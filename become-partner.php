<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <title>Title Here</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/style.php"); ?>
    <style>
        .Button_color {
            background-color: #0342ab;
            color: #ffbf10;
        }

        .Button_color:hover {
            background-color: #ffbf10;
            color: #0342ab;
        }

        .select {
            height: 38px !important;
            padding: 6px 12px !important;
        }
    </style>
</head>

<body>

    <div class="container-fluid row mx-auto justify-content-center p-0">
        <div class="col-md-6">
            <form class="become-partner">
                <div class="row">
                    <div class="col-3">
                        <select class="form-select rounded-3 select" id="title" name="title">
                            <option disabled selected><?php echo $lang['title'] ?></option>
                            <option><?php echo $lang['mr'] ?></option>
                            <option><?php echo $lang['mrs'] ?></option>
                            <option><?php echo $lang['miss'] ?></option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control border rounded-3" placeholder="<?php echo $lang['full_name'] ?> *" name="name">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <input type="text" class="form-control border rounded-3" placeholder="<?php echo $lang['company'] ?> *" name="company">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control border rounded-3" placeholder="<?php echo $lang['email'] ?> *" name="email">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <select class="form-control border rounded-3 select" id="dynamicDropdown"
                            name="headOfficeLocation">
                            <option value="" disabled selected><?php echo $lang['location'] ?> *</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control border rounded-3" placeholder="<?php echo $lang['city'] ?> *" name="city">
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col d-flex gap-3">
                        <div class="col-3 p-0">
                            <select class="form-select rounded-3 box-shadow py-2 px-3 select" id="country_code"
                                name="country_code">
                                <option disabled selected><?php echo $lang['country_code'] ?></option>
                                <?php

                                $countriesJson = file_get_contents('./assets/json/countries.json');
                                if ($countriesJson === false) {
                                    echo "<option value=\"\">Error loading countries</option>";
                                } else {
                                    $countries = json_decode($countriesJson, true);
                                    if ($countries === null) {
                                        echo "<option value=\"\">Error decoding countries</option>";
                                    } else {
                                        foreach ($countries as $country) {
                                            $selected = ($profileDetails['country_code'] == $country['code']) ? 'selected' : '';
                                            echo "<option value=\"{$country['code']}\" $selected>+{$country['code']} - {$country['country']}</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control border rounded-3" placeholder="<?php echo $lang['phone_number'] ?> *"
                                name="phoneno">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn Button_color my-3 px-5"><?php echo $lang['partner'] ?></button>
                    </div>

            </form>
        </div>
    </div>

    <script>
        // Function to dynamically generate options for the dropdown
        function populateDropdown() {
            // Get the select element
            var dropdown = document.getElementById("dynamicDropdown");

            // Array of options
            var options = ["Chennai", "Coimbatore", "Bangalore", "Delhi"];

            // Loop through the options and create an option element for each
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.text = options[i];
                option.value = option.text;
                dropdown.add(option);
            }
        }

        // Call the function to populate the dropdown
        populateDropdown();

        function validateForm() {
            // Get form elements
            var title = document.getElementById("title").value;
            var name = document.getElementsByName("name")[0].value;
            var company = document.getElementsByName("company")[0].value;
            var email = document.getElementsByName("email")[0].value;
            var headOfficeLocation = document.getElementById("dynamicDropdown").value;
            var city = document.getElementsByName("city")[0].value;
            var countryCode = document.getElementsByName("country_code")[0].value;
            var phoneno = document.getElementsByName("phoneno")[0].value;

            // Validation for individual fields
            if (title === "") {
                alert("Please select a title.");
                return false;
            }

            if (name === "") {
                alert("Please enter your full name.");
                return false;
            }

            if (company === "") {
                alert("Please enter your company name.");
                return false;
            }

            // You can add more individual validations for other fields

            if (email === "") {
                alert("Please enter your email address.");
                return false;
            }

            // Validate email format (you can use a regular expression for a more thorough check)
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (headOfficeLocation === "") {
                alert("Please select the location of the head office.");
                return false;
            }

            if (city === "") {
                alert("Please enter the city.");
                return false;
            }

            if (countryCode === "") {
                alert("Please select the country code.");
                return false;
            }

            // You can add more individual validations for other fields

            if (phoneno === "") {
                alert("Please enter your phone number.");
                return false;
            }

            // Validate phone number format (you can use a regular expression for a more thorough check)
            var phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(phoneno)) {
                alert("Please enter a valid 10-digit phone number.");
                return false;
            }

            // All validations passed
            return true;
        }

        $(document).on('submit', '.become-partner', function (e) {
            e.preventDefault();

            // Validate the form before submitting
            if (validateForm()) {
                var forms = $(this).serialize();
                $.ajax({
                    url: './becomeajax.php',
                    type: 'post',
                    data: forms + '&type=become-partner',
                    success: function (res) {
                        console.log(res);
                        alert("Your account added successfully");
                        //window.location.reload();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert("Error: " + xhr.responseText);
                    }
                });
            }
        });

    </script>
</body>

</html>