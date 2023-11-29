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
    </style>
</head>

<body>

    <div class="container row mx-auto justify-content-center">
        <div class="col-md-6">
            <form action="">
                <div class="row">
                    <div class="col-3">
                        <select class="form-select rounded-3">
                            <option></option>
                            <option>Mr</option>
                            <option>Mrs</option>
                            <option>Miss</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="password" class="form-control border rounded-3" placeholder="Full Name *"
                            name="pswd">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <input type="text" class="form-control border rounded-3" placeholder="Company *" name="email">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control border rounded-3" placeholder="Email *" name="pswd">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <select class="form-control border rounded-3" id="dynamicDropdown">
                            <option value="" disabled selected>Location of Head office *</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="password" class="form-control border rounded-3" placeholder="City *" name="pswd">
                    </div>
                </div>

                <div class="">
                    <input type="password" class="form-control border rounded-3" placeholder="Phone *" name="pswd">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn Button_color my-3 px-5">Become Our Partner</button>
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
            var options = ["Option 1", "Option 2", "Option 3", "Option 4", "Option 5"];

            // Loop through the options and create an option element for each
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.text = options[i];
                option.value = i + 1; // You can set the value to whatever you need
                dropdown.add(option);
            }
        }

        // Call the function to populate the dropdown
        populateDropdown();
    </script>
</body>

</html>