<?php 


$servername = "localhost";
$username = "newuser";
$password = "newpassword";
$dbname = "myapp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}