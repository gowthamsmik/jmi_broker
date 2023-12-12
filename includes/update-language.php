<?php
session_start();

if (isset($_POST['language'])) {
    // Sanitize the language value to prevent injection
    $selectedLanguage = htmlspecialchars($_POST['language']);

    // Set the user's preferred language in the session
    $_SESSION['user_language'] = $selectedLanguage;

    // Optionally, you can update a database or perform other actions based on the selected language
    // ...

    echo "Language updated successfully";
} else {
    echo "Invalid request";
}
?>