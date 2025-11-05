<?php
// update.php

$connection = new mysqli("localhost", "root", "", "registration_db");

if ($connection->connect_error) {
    die("connection failed:" . $connection->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the user details for the specified ID
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $connection->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <title>Update User</title>
        </head>

        <body style="margin:50px">
            <h1>Update User</h1>
            <br>
            <form action="process_update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
                <br>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>
                <br>
                <input type="submit" class="btn btn-primary" value="Update">
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Error fetching record: " . $connection->error;
    }
} else {
    echo "Invalid ID parameter.";
}

$connection->close();
?>
