<?php
$server= "localhost";
$user = "root";
$password="";
$dbName= "jpsunrise_db";
//creating connection
try
{
    $conn = mysqli_connect($server,$user,$password,$dbName);
    //checking connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
}
catch(Exception $e)
{
echo $e;
}

?>
