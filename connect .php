<?php>

$user = 'root';
$password = 'root';
$db = 'goals';
$host = 'localhost';
$port = 8889;

$link = mysql_init();
$success = mysql_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

?>