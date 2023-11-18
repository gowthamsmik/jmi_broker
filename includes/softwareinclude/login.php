<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the AJAX request
    $userNameorPhone = $_POST['userNameorPhone'];
    $password = $_POST['password'];
    $userRole=2;

   // Check if the input is a valid phone number
   if (preg_match('/^[0-9]+$/', $userNameorPhone)) {
     $columnToCheck = 'phone';
    } else {
     $columnToCheck = 'user_name';
    }

    // Check if the username or phone exists in the database
    $checkExistingSql = "SELECT * FROM users WHERE $columnToCheck = '$userNameorPhone'";
    $checkExistingResult = $conn->query($checkExistingSql);

    if ($checkExistingResult->num_rows > 0) {
        $user = $checkExistingResult->fetch_assoc();

        // Verify the password
        if (md5($password) == $user['password']) {
            // Password is correct, you can fetch user details here
            $userId = $user['id'];
            $userEmail = $user['email'];
            $gender = $user['gender'];
            $status = $user['is_active'];
            $userName = $user['user_name'];
            $name=$user['name'];
            $userRole=$user['user_role'];
            $userPhone=$user['phone'];

            $usersession = $userId;
            $key = rand(111111111, 999999999);
            $_SESSION['sessionkey'] = $key;
            $_SESSION['sessionuser'] = $userName;
            $usertype =$userRole;
           
            echo "Login Successful" . $_SESSION['sessionkey'].$_SESSION['sessionuser'];
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
