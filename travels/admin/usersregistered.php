<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body style="margin:50px">
    <h1>Registred users </h1>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gamil</th>
            <th>phone</th>
            <th>Action </th>
            <tr> 
</thead>
<tr>
    <tbody>
    <?php
        $connection = new mysqli("localhost", "root", "", "registration_db");

        if($connection->connect_error){
            die("connection failed:".$connection->connect_error);
             
        }
$sql="SELECT * FROM users";
$result=$connection->query($sql);

if(!$result){
    die("invalid query: ".$connection->error);

}
while($row=$result->fetch_assoc()){
    echo"<tr>
            <td>".$row["id"]."</td> 
            <td>".$row["name"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["phone"]."</td>
            <td>
            <a class='btn btn-primary btn-sm' href='update.php?id=".$row["id"]."'>Update</a>
            <a class='btn btn-danger btn-sm' href='delete.php?id=".$row["id"]."'>Delete</a>
        </td>
        </tr>";
}
?>
        
</tbody>
</table>
</body>
</html>