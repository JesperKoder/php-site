<?php 
require('dbconnect.php');

if(isset($_GET['delete_id'])){
    $id = intval($_GET['delete_id']); // Ensure integer for security

    // Prepared statement approach
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if data was deleted successfully
    if($stmt->affected_rows > 0){
        echo "Data deleted successfully!";
    } else {
        echo "Fail";
    }

    $stmt->close();
}


?>