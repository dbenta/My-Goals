<?php

$mysqli = new mysqli('localhost', 'root', 'password', 'goals');

if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_errno());
    exit();
}

$msqli->select_db('goals');

?>