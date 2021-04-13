<?php

$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$db = 'goals';
$port = 8889;

$conn = new mysqli($servername, $username, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>