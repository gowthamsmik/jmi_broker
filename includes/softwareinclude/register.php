<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the AJAX request
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $userName=$_POST['userName'];;
    $userRole=2;
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];


    // Check if the email already exists
    $checkExistingSql = "SELECT * FROM users WHERE email = '$email' OR phone = '$phone' OR user_name = '$userName'";
    $checkExistingResult = $conn->query($checkExistingSql);
    $message = "";
    if ($checkExistingResult->num_rows > 0) {
        while ($row = $checkExistingResult->fetch_assoc()) {     
            
            if ($row['email'] == $email) {
                // Email already exists, output an error message
                echo "Email already exists";
                break;
            }
            if ($row['phone'] == $phone) {
                // Phone number already exists, output an error message
                echo "Phone Number already exists";
                break;
            }
            if ($row['user_name'] == $userName) {
                // User name already exists, output an error message
                echo "Username already exists";
                break;
            }
        }
    } else {
        // Perform your SQL query to insert the new user
        $insertUserSql = "INSERT INTO users (email, password,user_role,name,gender,is_active,phone,user_name) VALUES ('$email', '$password','$userRole','$name','$gender',1,'$phone','$userName')";
        $res = $conn->query($insertUserSql);
        if ($res === TRUE) {
            // Insert successful
            echo "User successfully registered!";
        } else {
            // Error inserting user, output error message and the MySQL error
            echo "Error: " . $insertUserSql . "<br>" . $conn->error;
        }
    }
    //exit(0); 
} else {
    // Handle non-POST requests
    echo "Invalid request method";
}

$conn->close();
 
?>
