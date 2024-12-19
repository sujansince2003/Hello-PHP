<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetnempty.php" method="post">

<label for="username">Usernames</label>
<input type="text" name="username">
<br>
<label for="username">password</label>
<input type="text" name="password">
<br>
<input type="submit" name="login" value="login">
    </form>
</body>
</html>


<?php
if(isset($_POST["login"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(empty($username)){
        echo "username is empty <br>";
    }
    else{
        echo "username is {$username} <br>";
    }
    
    if(empty($password)){
        echo "password is empty <br>";
    }
    else{
        echo "password is {$password} <br>";
    }
}









// isset : returns true if the variable is declared and not null
//empty() : returns true if the variable is not declared,false or null


// $name = "sujan";
// if(isset($name)){
//     echo "name is set <br>";
// }else{
//     echo "name is not set <br>";
// }
// if(isset($age)){
//     echo "variable is set <br>";
// }else{
//     echo "variable is not set <br>";
// }
// if(empty($age)){
//     echo "variable is undecalred or null<br>";
// }else{
//     echo "variable is not set <br>";
// }
?>