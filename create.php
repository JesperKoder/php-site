<?php

// Include database connection script
require('dbconnect.php');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    // Construct SQL query with prepared statement
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ($first_name, $last_name, $email, $password)";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data inserted successfully!";
    } else {
        die(mysqli_error($con));
    }
   
}