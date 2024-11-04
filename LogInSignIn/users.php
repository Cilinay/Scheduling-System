<?php
session_start();
require_once('config.php');
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="usersStyle.css">
</head>
<body>
    <div class="header">
        <h1>Dashboard Overview</h1>
        <div class="name-container">
            <p id="firstName">
                <?php echo isset($_COOKIE['firstName']) ? htmlspecialchars($_COOKIE['firstName']) : 'FirstName'; ?>
            </p>
            <p id="lastName">
                <?php echo isset($_COOKIE['lastName']) ? htmlspecialchars($_COOKIE['lastName']) : 'LastName'; ?>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-5">
                    <div class="d-flex justify-content-between align-items-center card-header">
                        <h2 class="display-6 text-center mb-0">Users</h2>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                            Add User
                        </button>
                    </div>
                        <div class="card-body">
                            <!-- Add ID "userTable" to the table -->
                            <table id="userTable" class="table table-bordered w-50">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <td>User ID</td>
                                        <td>Username</td>
                                        <td>Email</td>
                                        <td>Password</td>
                                        <td>Last Name</td>
                                        <td>First Name</td>
                                        <td>Middle Name</td>
                                        <td>Birthday</td>
                                        <td>Address</td>
                                        <td>Mobile</td>
                                        <td>Last Log In</td>
                                        <td>Date Created</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['username'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><?php echo $row['lastName'] ?></td>
                                        <td><?php echo $row['firstName'] ?></td>
                                        <td><?php echo $row['middleName'] ?></td>
                                        <td><?php echo $row['birthday'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['mobile'] ?></td>
                                        <td><?php echo $row['lastLogIn'] ?></td>
                                        <td><?php echo $row['dateCreated'] ?></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Inside Modal -->
                <form>
                    <div class="form-group">
                        <label for="name">username</label>
                        <input type="text" class="form-control" name=""username required>
                    </div>
                    <div class="form-group">
                        <label for="email">password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Last Name</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">First Name</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Middle Name</label>
                        <input type="text" class="form-control" name="middleName">
                    </div>
                    <div class="form-group">
                        <label for="email">Birthday</label>
                        <input type="date" class="form-control" name="birthday" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Mobile Number</label>
                        <input type="text" class="form-control" name="mobile" required>
                    </div>
                    <!-- Add more form fields as needed -->
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <div class="footer"></div>

    
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

        // Initialize DataTables
        $(document).ready(function() {
            $('#userTable').DataTable({
                "paging": true,
                "ordering": true,
                "searching": true,
                "order": [[0, "asc"]]
            });
        });
    </script>

    
</body>
</html>

