<?php

$servername = "localhost";
$user = "root";
$dbname = "projectphp";

$conn = new mysqli($servername,$user,"",$dbname);
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO loginusers (firstname, lastname, username, password) 
VALUES ('$fullname','$username', '$password')";
$result = $conn->query($sql);

echo "SignUp Successful !"

?>