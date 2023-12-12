<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the AJAX request
    $userNameorPhone = $_POST['userNameorPhone'];
    $password = $_POST['password'];
    $userRole=2;

    if (preg_match('/^[0-9]+$/', $userNameorPhone)) {
        $columnToCheck = 'mobile';
       }else if (filter_var($userNameorPhone, FILTER_VALIDATE_EMAIL)) {
           $columnToCheck = 'email';
       } else {
        $columnToCheck = 'username';
       }

    // Check if the username or phone exists in the database
    $checkExistingSql = "SELECT * FROM website_accounts WHERE $columnToCheck = '$userNameorPhone'";
    $checkExistingResult = $conn->query($checkExistingSql);

    if ($checkExistingResult->num_rows > 0) {
        $user = $checkExistingResult->fetch_assoc();
        // Verify the password
        if (md5($password) == $user['password']) {
            // Password is correct, you can fetch user details here
            $userId = $user['id'];
            $userEmail = $user['email'];
            $gender = $user['gender'];
            $status = $user['account_status'];
            $userName = $user['username'];
            $name=$user['fullname'];
            $id= $user['id'];
            //$userRole=$user['user_role'];
            $userPhone=$user['mobile'];

            $usersession = $userId;
            $key = rand(111111111, 999999999);
            $_SESSION['sessionkey'] = $key;
            $_SESSION['sessionuser'] = $userName;
            $_SESSION['sessionusername'] = $name;
            $_SESSION['sessionuserid'] = $userId;

            $usertype =$userRole;
           
            echo "Login Successful" ;
        } else {
            // Password is incorrect
            echo "Incorrect Password";
        }
    } else {
        // Username or phone doesn't exist
        echo "User not found!, Please Register to login.";
    
    }
   } else {
    // Handle non-POST requests
    echo "Invalid request method";
    }

$conn->close();
 
?>
