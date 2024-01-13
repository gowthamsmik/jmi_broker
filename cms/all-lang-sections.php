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

<body>

    <?php include('includes/header.php'); ?>

    <div class="app-wrapper">
        <!-- Create the tabs -->
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <button onclick="openTab('en-sections')">En Sections</button>
            <button onclick="openTab('ru-sections')">RU Sections</button>
            <button onclick="openTab('ar-sections')">AR Sections</button>
        </div>

        <!-- Content for each tab -->
        <div id="en-sectionsTab" class="tab container-xxl">
            <?php error_reporting(E_ALL);
            ini_set('display_errors', '1');
            include('all-sections.php'); ?>
        </div>

        <div id="ru-sectionsTab" class="tab container-xxl">
            <?php include('ru-sections.php'); ?>
        </div>

        <div id="ar-sectionsTab" class="tab container-xxl">
            <?php include('ar-sections.php'); ?>
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
        openTab('en-sections');
    </script>
</body>

</html>