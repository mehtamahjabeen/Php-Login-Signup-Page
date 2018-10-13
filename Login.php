<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$user = "root";
$dbname = "projectphp";

//Create Connection
$conn = new mysqli($servername,$user,"",$dbname);

//Check Connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

//Declare Variable
    $username=$_POST['username'];
    $password=$_POST['password'];



    $sql="SELECT * FROM `loginusers` where Username='".$username."' AND  Password='".$password."'";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);

    if (mysqli_query($conn, $sql)==1){
    echo " You have successfully Logged In";
}
else{
echo " Invalid Username/Password";
}

 /*
    if (mysqli_query($conn, $sql)){
        echo " You have successfully Logged In";
    }
    else{
    echo " Invalid Username/Password";
    }
*/



?>

