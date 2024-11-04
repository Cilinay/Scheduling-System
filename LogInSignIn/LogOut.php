<?php
    // Start the session
    session_start();

    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Expire the cookies by setting their expiration time to a past time
    setcookie("firstName", "", time() - 3600, "/"); // Expire 1 hour ago
    setcookie("lastName", "", time() - 3600, "/");  // Expire 1 hour ago

    // Redirect to the login page or another appropriate page
    header("Location: login.php");
    exit();
?>
