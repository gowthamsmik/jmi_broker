<?php

include('includes/softwareinclude/functions.php');
error_reporting(0);

if ($_POST['type'] == 'become-partner') {
  extract($_POST);
  add_become_partner($title, $name, $email, $company, $headOfficeLocation, $city, $country_code, $phoneno);
}
?>