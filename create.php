<?php

// Include database connection script
require('dbconnect.php');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Retrieve form data (sanitize if needed)
  $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);  // Sanitize input
  $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash password

  // Construct SQL query with prepared statement
  $sql = "INSERT INTO `users` (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";

  // prepare the SQL statement
  $stmt = $conn->prepare($sql);

  // Bind parameters
  $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

  // Execute prepared statement
  $stmt->execute();

  // Check if data was inserted successfully
  if ($stmt->affected_rows > 0) {
    echo "Data inserted successfully!";
  } else {
    echo "Registration failed. Please try again.";
  }

  $stmt->close(); // Close the prepared statement
}


