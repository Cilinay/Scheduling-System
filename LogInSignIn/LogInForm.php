<?php
    // Start the session
    session_start();
    include("config.php");

    // Get the email and password from the form
    $email = $_POST['email'];
    $password = base64_encode($_POST['password']);

    // SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch user data
        $user = mysqli_fetch_assoc($result);

        // Get first name and last name from the database result
        $firstName = $user['firstName']; 
        $lastName = $user['lastName'];   

        // Set session variables
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;

        // Set cookies for first name and last name, with an expiration time (7 days)
        setcookie("firstName", $firstName, time() + (7 * 24 * 60 * 60), "/"); // 7 days
        setcookie("lastName", $lastName, time() + (7 * 24 * 60 * 60), "/"); // 7 days

        // Redirect to the homepage
        header('Location: Home.php');
        exit();
    } else {
        header('Location: LogIn.php');
        echo 'Wrong password';
    }
?>

