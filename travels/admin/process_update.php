<?php
// process_update.php

$connection = new mysqli("localhost", "root", "", "registration_db");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Perform the update operation
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    $result = $connection->query($sql);

    if ($result) {
        // Redirect to the main page after successful update
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $connection->error;
    }
} else {
    echo "Invalid request.";
}

$connection->close();
?>
