<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="username">Age</label>
        <input type="text" name="age">
        <label for="username">Email</label>
        <input type="text" name="email">
        <input type="submit" name="login">
    </form>
</body>
</html>
<?php
if(isset($_POST["login"]))
{
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    echo $username;
    $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    echo $age;
    $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    echo $email;
}
?>