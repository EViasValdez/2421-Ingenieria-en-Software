<?php

$servername = "localhost";
$database = "2421IS";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";

// mysqli_close($conn);

?>