<?php
include('config.php');

// Function to get the title based on language segment
function getTitle($languageSegment)
{
    switch ($languageSegment) {
        case 'ar':
            return "فقدت كلمة السر";
        case 'ru':
            return "Забыл пароль";
        default:
            return "Forgot Password";
    }
}

// Get the language segment from the request URI
$languageSegment = isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'ar') !== false
    ? 'ar'
    : (strpos($_SERVER['REQUEST_URI'], 'ru') !== false
        ? 'ru'
        : 'en');

// Get the title based on language segment
$title = getTitle($languageSegment);

// Include the corresponding view file
$viewFileName = ($languageSegment == 'ar') ? 'ar.cpanel.forgot-password' : (($languageSegment == 'ru') ? 'ru.cpanel.forgot-password' : 'cpanel.forgot-password');
include("$viewFileName.php");
?>
    