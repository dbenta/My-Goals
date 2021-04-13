<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'goals';

$conn = new mysqli('localhost', 'root', 'password', 'goals');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

mysqli_select_db($conn, $goals);

?>