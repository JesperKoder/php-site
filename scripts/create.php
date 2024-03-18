<?php 

require('scripts/dbconnect.php'); 

if(isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
}

$sql = "INSERT INTO mydb (first_name, last_name, email, password, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

$result = $connection->query($sql);

if($result == true) {
    echo "Success";
} else {
    echo "Error" . $sql . "<br>" . $connection->error;
}

$connection->close();

