<?php include('config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if (isset($_POST['notificationId'])) {
            echo json_encode(notificationId($_POST['notificationId']));
        }
    }}



function getuserNotifications(){
    global $conn;
     // Assuming $_SESSION["username"] contains the website_accountid
     $websiteAccountId = $_SESSION["sessionuserid"];
     $sql = "SELECT * FROM notifications WHERE notification_status = 0 AND website_accounts_id = $websiteAccountId";
     $result = array(); 
     $res = $conn->query($sql);
 
     if ($res) {
         while ($row = $res->fetch_assoc()) {
             $result[] = $row; // Add each row to the result array
         }
     } else {
         echo "Error: " . $conn->error;
     }
     return $result;
}

function notificationId($notificationId)
{
    global $conn;
    $sql = "UPDATE `notifications` set `notification_status`='1' WHERE `id`='$notificationId'";
    echo "sql" . $sql;
    $res = $conn->query($sql);
    if (!$res) {
        echo "Error: " . $conn->error;
        return false;
    }
    return $res;
}
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />