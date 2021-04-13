<?php

include 'connect.php';

$query = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_progress) VALUES ('category', 'text', 'date', 'progress')";

if($mysqli->query($query) === true){
    print ("Stored");
} else {
    print ("Failed");
}

echo "<script>location.href='index.php'</script>";
?>