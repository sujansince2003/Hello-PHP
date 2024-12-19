

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Variables in php</h1>
</body>
</html>
<?php
$name ="sujan";
$age=21;
$drink="Tea";
$cost=2.99;
$servings =3;
$totalcost=$cost * $servings;
$lovecoding=true;
$job= $lovecoding ? "coder":"others";

echo "My name is {$name}";
echo "My age is {$age} <br>";
echo "I love {$drink} and its total costs me \${$totalcost} <br> and my job is {$job} <br>";


?>