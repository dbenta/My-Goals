<?php

require_once 'connect.php';

$query = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_progress) VALUES ('$_POST[category]', '$_POST[text]', 'd$_POST[date]', '$_POST[progress]')";

if($mysqli->query($query) === true){
    print ("Stored");
} else {
    print ("Failed");
}

?>