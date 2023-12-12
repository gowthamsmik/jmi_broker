<?php 
    include("config.php");
    $query = @unserialize (file_get_contents('http://ip-api.com/php/'));
    if ($query && $query['status'] == 'success') {
        echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
    }
    foreach ($query as $data) {
        echo $data . "<br>";
    }
    $username = $_SESSION['username'];
    $userqry="select * from website_accounts where username = $username";
    $resultset = $conn->query($userqry);
    $user = $resultset->fetch_assoc();
    $time=time();
    $input = $_REQUEST;
    $destinationPath=public_path().'/assets/cpanel/profilePictures';
    $filename = rand(1,1000000).time().'.'.$input['profilePicture'];
    $input['profilePicture']->move($destinationPath, $filename);
    $updateqry = "update website_accounts set profilePicture='$filename' where id=".$user->Id;
    $update = $conn->query($updateqry);
?>