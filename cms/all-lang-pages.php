
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
        <button onclick="openTab('en-page')">En Page</button>
        <button onclick="openTab('ru-page')">RU Page</button>
        <button onclick="openTab('ar-page')">AR Page</button>
    </div>

    <!-- Content for each tab -->
    <div id="en-pageTab" class="tab container-xxl">
        <?php include('all-pages.php'); ?>
    </div>

    <div id="ru-pageTab" class="tab container-xxl ">
        <?php include('ru-pages.php'); ?>
    </div>

    <div id="ar-pageTab" class="tab container-xxl">
        <?php include('ar-pages.php'); ?>
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
    openTab('en-page');
</script>
</body>

</html>