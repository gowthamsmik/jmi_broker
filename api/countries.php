<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

   
           

    $countriesJson = file_get_contents('../assets/json/countries.json');
    $validCountries = json_decode($countriesJson, true);
    http_response_code(200);
    echo json_encode(array("status" => "success", "message" => GET_COUNTRIES_SUCCESS_MESSAGE, "data" => $validCountries));
    exit();


}
http_response_code(405);






?>