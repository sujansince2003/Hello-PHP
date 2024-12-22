<?php
//connecting to database
$db_server="localhost";
$db_name="businessdb";
$db_user="root";
$db_pass="";
$conn="";

try{
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
   
}
catch(mysqli_sql_exception){
echo "Connection error";
}
if($conn)
{
    echo "connected";
}
else
{
    echo "not connected";
}
?>
