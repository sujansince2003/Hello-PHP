<?php
include("database.php");

$sql = "INSERT INTO users (username, password, age) VALUES ('sujan', 'sujan', 21)";

mysqli_query($conn,$sql);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello
</body>
</html>