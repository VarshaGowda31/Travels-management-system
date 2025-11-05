<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'registration_db';

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $password =$_POST['password'];
    if(!empty($email)&&!empty($password)&& !is_numeric($email))


    // Insert data into the database
    $sql = "INSERT INTO users (name, email, phone, gender, password) VALUES ('$name', '$email', '$phone', '$gender', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>