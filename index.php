<?php

include 'connect.php';


$sql = "SELECT * FROM goals";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

print ("<h2>Goal List</h2>");
//New Goals
while($row = mysqli_fetch_array($result)){
  if($row['goal_progress' == 0]) {
    if($row['goal_category'] == 0) {
      $cat = "Personal";
    } elseif ($row['goal_category'] == 1) {
      $cat = "Professional";
    } else {
      $cat = "Other";
    }
    echo "<div class='goal'>";
    echo "<a href='insert_goal.php?id=" . $row['goal_id'] . "'><button class ='btnComplete'>Complete</button></a><stronmg>";
    echo $cat . "</strong><p>" . $row['goal_text'] . "</p>Goal Date: " . $row['goal_date'];
    echo "</div>";
  }
}

print ("<h2>In Progress Goals</h2>");
//In Progress Goals
while($row = mysqli_fetch_array($result)){
  if($row['goal_progress' == 1]) {
    if($row['goal_category'] == 0) {
      $cat = "Personal";
    } elseif ($row['goal_category'] == 1) {
      $cat = "Professional";
    } else {
      $cat = "Other";
    }
    echo "<div class='goal'>";
    echo "<a href='inprogress.php?id=" . $row['goal_id'] . "'><button class ='btnComplete'>Complete</button></a><stronmg>";
    echo $cat . "</strong><p>" . $row['goal_text'] . "</p>Goal Date: " . $row['goal_date'];
    echo "</div>";
  }
}

//Complete Goals
print ("<h2>Complete Goals</h2>");
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while($row = mysqli_fetch_array($result)){
  if($row['goal_progress' == 2]) {
    if($row['goal_category'] == 0) {
      $cat = "Personal";
    } elseif ($row['goal_category'] == 1) {
      $cat = "Professional";
    } else {
      $cat = "Other";
    }
    echo "<div class='goal'>";
    echo "<a href='delete_goal.php?id=" . $row['goal_id'] . "'><button class ='btnComplete'>Complete</button></a><stronmg>";
    echo $cat . "</strong><p>" . $row['goal_text'] . "</p>Goal Date: " . $row['goal_date'];
    echo "</div>";
  }
}
?>

<html>
    <title>Goal Tracker</title> 

   <link rel="stylesheet" href="styles.css"> 
<style> 
body {background-image: url('pexels-johannes-plenio-1103970.jpg');}
</style>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mainNav").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mainNav").style.marginLeft= "0";
}
</script>

<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">New Goals</a>
  <a href="#">In Progress Goals</a>
  <a href="#">Completed Goals</a>
  <a href="#">Contact</a>
</div>

<div id="mainNav">
    <h2 id="name">David Benta</h2>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>

<div id ="projectDescription">
<p>Hello, my project is a personal goal database.  I will use a form to update the database 
    and have the updated database populate areas that are New, In Progress, or Complete.</p>

<p>When the information populates those areas, there will be additional information such as 
    the date and time the goal was completed, problems that I had with the goal and the solutions that I came up with.</p>
</div>

<div onclick="location.href='#completed';" style="cursor: pointer;" class="container">
<p>View my Goals</p>
</div>

<div id="form">
<form action= "insert_goal.php" method= "post">
  <label for= "cat" id= "cat"></label>
  <select name= "cat" id= "cat">
    <option value="0">Personal</option>
    <option value="1">Professional</option>
    <option value="2">Other</option>
  </select>
<br><label for="text">Goal</label>
<br><textarea name="text" id="text"></textarea>
<br><label for="goaldate">Date</label>
<br><input type="date" id="goaldate" name="goaldate"/>
<br><label for="complete">Complete Goal</label>
<input type="checkbox" id="complete" name="complete" value="1" /><br/>
<button type="submit">Upload Goal</button>
</form>
</div>

        
    </body>
</html>