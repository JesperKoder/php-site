<?php
require('dbconnect.php');

$id = $_GET['edit_id'];
if(isset($_POST['edit_id'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $sql = "UPDATE 'users' SET id='$id', firstname='$firstname', lastname='$lastname', email='$email', password='$password'";

    $result = mysqli_query($conn, $sql);
    // Check if data was inserted successfully
    if ($stmt->affected_rows > 0) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit</title>
</head>

<div class="bg-white">
  <div class="mx-auto max-w-2xl text-center px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Edit user</h2>

    <div class="h-30 px-4 mt-6">
    <form class="flex flex-wrap" action="" method="POST">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="firstname">First Name:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="text" name="firstname">
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="lastname">Last Name:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="text" name="lastname">
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="email">Email:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="email" name="email">
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <label class="block" for="password">Password:</label>
            <input class="w-full my-2 p-2 border border-gray-300 rounded-md" type="password" name="password">
        </div>
        <div class="w-full">
            <button class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600" type="submit" name="submit">Edit</button>
        </div>
    </form>
</div>