<?php

require_once 'C:\xampp\htdocs\Portfolio\connect.php';

$category = $_REQUEST['cat'];
$text = $_REQUEST['text'];
$date = $_REQUEST['goaldate'];
$progress = $_REQUEST['progress'];

if ($progress == '' || $cprogress == null) {
    $progress = 0;
}

$sql = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_progress) VALUES ('category', 'text', 'date', 'progress')";
$sql .= "('" . $category . "',";
$sql .= "'" . $text . "',";
$sql .= "'" .$date . "',";
$sql .= "'" .$progress . "')";

if(mysqli_query($link, $sql)){
    print ("Stored");
} else {
    print ("Failed");
}

echo "<script>location.href='index.php'</script>";
?>