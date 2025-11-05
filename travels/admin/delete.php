<?php
// delete.php

$connection = new mysqli("localhost", "root", "", "registration_db");

if($connection->connect_error){
    die("connection failed:".$connection->connect_error);
}

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    
    // Perform the delete operation
    $sql = "DELETE FROM users WHERE id = $id";
    $result = $connection->query($sql);

    if($result){
        // Redirect to the main page after successful delete
        header("Location: usersregistered.php");
        exit();
    } else {
        echo "Error deleting record: " . $connection->error;
    }
} else {
    echo "Invalid ID parameter.";
}

$connection->close();
?>
