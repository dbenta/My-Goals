<?php

include 'connect.php';

$category = $_POST['category'];
$text = $_POST['text'];
$date = $_POST['date'];
$progress = $_POST['progress'];

$query = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_progress) VALUES ('$category', '$text', '$date', '$progress')";

if($mysqli->query($query) === true){
    print ("Stored");
} else {
    print ("Failed");
}

?>