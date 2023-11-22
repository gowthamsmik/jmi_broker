<?php
include('config.php');
function getAlltransactions(){
    global $conn;
    $sql = "SELECT * FROM transactions";
    $res = $conn->query($sql);
    $result = array(); // Initialize an array to store all rows

    if ($res) {
        while ($row = $res->fetch_assoc()) {
            $result[] = $row; // Add each row to the result array
        }
    } else {
        echo "Error: " . $conn->error;
    }
    return $result;
}

 
?>
