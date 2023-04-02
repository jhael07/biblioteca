<?php

$hostname = "localhost"; 
$database = "libreria";
$username = "root"; 
$password = ""; 

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);

    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>