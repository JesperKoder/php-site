<?php 

$conn = new mysqli('localhost', 'newuser', 'newpassword', 'myapp');

if(!$conn){
    die(mysqli_error($con));
}