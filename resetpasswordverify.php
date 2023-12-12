<?php 
include('includes/softwareinclude/config.php');
global $conn;

$userid = isset($_GET['userid']) ? $_GET['userid'] : null;
$token = isset($_GET['token']) ? $_GET['token'] : null;
$email = isset($_GET['email']) ? $_GET['email'] : null;

    //$email = $_POST['email'];

    $usercheck = "SELECT * FROM website_accounts WHERE email = '$email'";
    $userResult = $conn->query($usercheck);
    $user = $userResult->fetch_assoc();
    $username = $user['username'];
    $resetTokenTime = $user['resettoken_time'];
    $currentTimestamp = time();
    if ($user['resettoken'] == $token && $userid == md5($user['id']) && $currentTimestamp - $resetTokenTime <= 300) {
        //header("Location: forgot-password.php?result=true");
        //$user['resettoken_time'] + 3600 > time()
        //exit();
       // echo "youare correct";
        $success = true;
    } else {
        //echo "hai your are not in wrongpage";exit(0);
        $success = false;
        //header("Location: forgot-password.php?result=false");
        //exit();
    }
// if ($userResult && $userResult->num_rows > 0) {
//     $user = $userResult->fetch_assoc();

//     if ($user['resettoken'] == $token && $userid == md5($user['id']) && $user['resettoken_time'] + 3600 > time()) {
//         return true;
//     } else {
//         return false
//     }
// } else {
//     return false
// }






//echo $email."teeeeeeeeeeeeeeeeeeexxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxv"; 

?>