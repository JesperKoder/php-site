<?php

require('dbconnect.php');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Construct SQL query
    $sql = "INSERT INTO `mydb`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    // Execute SQL query
    $result = $conn->query($sql);

    // Check if query execution was successful
    if ($result == TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error:". $sql . "<br>". $conn->error;
    }

    // Close the database connection
    $conn->close();
}