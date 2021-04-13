<?php

include 'connect.php';

if (isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['text']) && !empty($_POST['date']) && !empty($_POST['progress'])) {
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


    }
    else {
        echo "All fields are required";
    }

}



?>