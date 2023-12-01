<?php
include('config.php');
function getAlltransactions($type){
    $newtype ='';
    global $conn;
    switch($type)
    {
        case 'all': $newtype='';break;
        case 'deposit': $newtype=0;break;
        case 'withdraw': $newtype=1;break;
        case 'internal': $newtype=2;break;
    }
    if($type!='all')
        $sql = "SELECT * FROM transactions where type=$newtype order by created_at desc";
    else
        $sql = "SELECT * FROM transactions  order by created_at desc";
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
