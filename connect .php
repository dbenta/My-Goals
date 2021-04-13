<?php

$mysqli = new mysqli('localhost','root', 'password', 'goals' );

if (mysqli_connect_errno()) {
    printf('Connection failed: %s\n', mysqli_errno());
    exit();
}

$mysqli->select_db("Goals");


?>