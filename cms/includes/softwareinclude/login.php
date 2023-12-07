<?php
include('config.php');
$email = $_POST['email'];
$thepassword = $_POST['password'];
$thepassword = md5($thepassword);





$sql = "SELECT * FROM website_admins WHERE email LIKE '$email' AND  password like '$thepassword'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    session_start();
    while ($row = $result->fetch_assoc()) {

        $loginuserid = $row['id'];
        $logintime = time();
        $usersession = $row['id'];
        $key = rand(111111111, 999999999);
        $_SESSION['sessionkey'] = $key;
        $_SESSION['sessionadmin'] = $usersession;
        $usertype = $row['user_role'];
        echo "success";

    }
} else {
    echo "error";
}
$conn->close();