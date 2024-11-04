<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="HomePageStyle.css">
</head>
<body>
    <div class="header">
        <h1>Schedule Management System</h1>
        <div class="name-container">
            <p id="firstName">
                <?php
                    echo isset($_COOKIE['firstName']) ? htmlspecialchars($_COOKIE['firstName']) : 'FirstName';
                ?>
            </p>
            <p id="lastName">
                <?php
                    echo isset($_COOKIE['lastName']) ? htmlspecialchars($_COOKIE['lastName']) : 'LastName';
                ?>
            </p>
        </div> 
        <div class="logout-container">
            <button id="logoutButton" onclick="window.location.href='LogOut.php'">Logout</button>
        </div>
    </div>


    <br><br><br><br><br>

    <div class="sidebar">
        <ul>
            <li><a href="Home.php" class="nav-link">Dashboard</a></li>
            <li><a href="#" class="nav-link">Class</a></li>
            <li><a href="#" class="nav-link">Schedule</a></li>
            <li><a href="#" class="nav-link">Teacher</a></li>
            <li><a href="users.php" class="nav-link">User</a></li>
            <li><a href="#" class="nav-link">Maintenance</a></li>
        </ul>
    </div>
    <br>
    <div class="main">
        <div class="firstbox">

        </div>

        <div class="secondbox">
                
        </div>

        <div class="thirdbox">
                
        </div>
    </div>

    <div class="footer">
        
    </div>

    <script>
        // JavaScript to add 'active' class to clicked navigation link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove 'active' class from all links
                navLinks.forEach(nav => nav.classList.remove('active'));
                // Add 'active' class to the clicked link
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>







