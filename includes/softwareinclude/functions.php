<?php
include('config.php');
function getAlltransactions(){
    global $conn;
    $sql = "SELECT * FROM transactions order by created_at desc";
    $res = $conn->query($sql);
    $result = array(); // Initialize an array to store all rows

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $result[] = $row; // Add each row to the result array
        }

    } else {
        echo "Error: " . $conn->error;
    }
    return $result;
}

 
?>
