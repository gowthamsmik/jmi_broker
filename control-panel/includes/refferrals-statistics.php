<?php
include('config.php');
error_reporting(0);
session_start();


// Function to get the ref_id based on the $_GET parameter
function getRefId()
{
    if (isset($_GET['myref']) && $_GET['myref'] !== null && $_GET['myref'] !== '' && is_numeric($_GET['myref']) && $_GET['myref'] > 1000) {
        return $_GET['myref'];
    } else {
        return 0;
    }
}

// Get the ref_id based on the $_GET parameter
$refId = getRefId();

// Create a new referrals_statics record
$newRef = new referrals_statics;
$newRef->ref_id = $refId;
$newRef->country = GeoIP::getLocation()->country;
$newRef->ip = GeoIP::getLocation()->ip;
$newRef->save();
?>
