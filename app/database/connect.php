<?php

$host = 'localhost';
$user = 'root';
$pass = 'Morgan22!';
$db_name = 'storage';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn) {
    echo "Congrats! Connection Successful!";
} else {
    die('Database connection error: ' . $conn->connect_error);
}

?>