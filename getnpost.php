<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Using GET Request</h1>
    <form action="getnpost.php" method="get">

    <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit">
    </form>


    <h1>Using POST Request</h1>
    <form action="getnpost.php" method="post">

    <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit">
    </form>
    
</body>
</html>
<?php
echo $_GET["username"];
echo $_POST["username"];
?>