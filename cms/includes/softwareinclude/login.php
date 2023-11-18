<?php
include('config.php');
$email = $_POST['email'];
$thepassword = $_POST['password'];
$thepassword = md5($thepassword);




    
    $sql = "SELECT * FROM users WHERE email LIKE '$email' AND  password like '$thepassword'";  
    $result = $conn->query($sql);




if ($result->num_rows > 0) {
    session_start();
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $loginuserid = $row['id'];
        $logintime = time();


  
        
        




        $usersession = $row['id'];
        $key = rand(111111111, 999999999);
        $_SESSION['sessionkey'] = $key;
        $_SESSION['sessionuser'] = $usersession;
        $usertype = $row['user_role'];

        echo "success";

    }
} else {
    echo "error";
}
$conn->close();