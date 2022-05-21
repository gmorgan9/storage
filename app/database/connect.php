<?php

$host = 'localhost';
$user = 'root';
$pass = 'Morgan22!';
$db_name = 'storage';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn) {
    echo "success";
} else {
    die('Database connection error: ' . $conn->connect_error);
}

?>