
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Example</title>
    <style>
        /* Add some basic styling for the tabs */
        .tab {
            display: none;
        }
    </style>
</head>

<?php include('includes/header.php'); ?>
<div class="app-wrapper">
    <!-- Create the tabs -->
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <button onclick="openTab('en-packages')">En Packages</button>
        <button onclick="openTab('ru-packages')">RU Packages</button>
        <button onclick="openTab('ar-packages')">AR Packages</button>
    </div>

    <!-- Content for each tab -->
    <div id="en-packagesTab" class="tab container-xxl">
        <?php include('all-packages.php'); ?>
    </div>

    <div id="ru-packagesTab" class="tab container-xxl ">
        <?php include('ru-packages.php'); ?>
    </div>

    <div id="ar-packagesTab" class="tab container-xxl">
        <?php include('ar-packages.php'); ?>
    </div>
</div>
<script>
    // JavaScript function to switch tabs
    function openTab(tabName) {
        var i, tabs;
        tabs = document.getElementsByClassName("tab");
        for (i = 0; i < tabs.length; i++) {
            tabs[i].style.display = "none";
        }
        document.getElementById(tabName + "Tab").style.display = "block";
    }

    // Open the "website" tab by default
    openTab('en-packages');
</script>
</body>

</html>