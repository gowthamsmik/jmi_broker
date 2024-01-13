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
        <button onclick="openTab('website')">Website</button>
        <button onclick="openTab('ru-website')">RU Website</button>
        <button onclick="openTab('ar-website')">AR Website</button>
    </div>

    <!-- Content for each tab -->
    <div id="websiteTab" class="tab container-xxl">
        <?php include('website-account.php'); ?>
    </div>

    <div id="ru-websiteTab" class="tab container-xxl ">
        <?php include('ru-website-account.php'); ?>
    </div>

    <div id="ar-websiteTab" class="tab container-xxl">
        <?php include('ar-website-account.php'); ?>
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
    openTab('website');
</script>
</body>

</html>