<?php
$server = "localhost";
$user = "root";
$password = "";
$dbName = "jpsunrise_db";

try {
    $connection = new PDO("mysql:host=$server;dbname=$dbName", $user, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>