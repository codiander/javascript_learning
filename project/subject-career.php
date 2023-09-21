<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "career_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo "Connection filed: " .$e->getMessage()
}

?>
