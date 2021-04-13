<?php

$servername = 'localhost';
$username = 'root';
$password = 'password';
$db = 'goals';
$port = 8889;

$conn = new mysqli($servername, $password,  $username, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>