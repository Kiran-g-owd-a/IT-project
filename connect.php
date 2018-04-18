<?php
$servername = "localhost";
$username = "root";
$password = "tiger";
$database = "2015cse065";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
