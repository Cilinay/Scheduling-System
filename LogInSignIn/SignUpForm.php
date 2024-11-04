<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "managementsystem";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

$userName = $_POST['username'];
$email = $_POST['username'];
$password = base64_encode($_POST['password']);
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$time = time();

$sql = "INSERT INTO `users` (`username`, `email`, `password`, `lastName`, `firstName`, `middleName`, `birthday`, `address`, `mobile`, `lastLogIn`, `dateCreated`)
VALUES('$userName', '$email', '$password', '$lastName', '$firstName', '$middleName', '$birthday', '$address', '$mobile', $time, $time)";
echo $sql;
if(mysqli_query($conn, $sql)){
    header('Location: LogIn.php');
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}
?>