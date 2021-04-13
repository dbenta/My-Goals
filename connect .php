<?php

$servername = 'localhost';
$username = 'root';
$password = 'password';
$db = 'goals';

$conn = new mysqli($servername, $password, $username, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>