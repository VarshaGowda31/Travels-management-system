<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Add this line

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['username_or_email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    
    if ($stmt) {
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            $_SESSION['name'] = $user['name'];
            $_SESSION['login_time'] = time(); // Capture the login time
            header('Location: home.php');
            exit();
        }else {
            header('Location: login.php?error=1');
            exit();
        }

        $stmt->close();
    } else {
        die("Prepare statement failed: " . $conn->error);
    }
} else {
    header('Location: login.php');
    exit();
}

$conn->close();
?>
