
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
        <button onclick="openTab('en-faq')">En FAQ</button>
        <button onclick="openTab('ru-faq')">RU FAQ</button>
        <button onclick="openTab('ar-faq')">AR FAQ</button>
    </div>

    <!-- Content for each tab -->
    <div id="en-faqTab" class="tab container-xxl">
        <?php include('all-faqs.php'); ?>
    </div>

    <div id="ru-faqTab" class="tab container-xxl ">
        <?php include('ru-faqs.php'); ?>
    </div>

    <div id="ar-faqTab" class="tab container-xxl">
        <?php include('ar-faqs.php'); ?>
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
    openTab('en-faq');
</script>
</body>

</html>