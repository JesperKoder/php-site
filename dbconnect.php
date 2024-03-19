<?php 

$con = new mysqli('localhost', 'newuser', 'newpassword', 'myapp');

if(!$con){
    die(mysqli_error($con));
}