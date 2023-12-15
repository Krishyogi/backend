<?php
 
//Step 1 check the connection ....
 
$link = mysqli_connect("localhost", "root", "", "alphonous");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
 
 
/*
Step 2 create the PHP variables for the html form  ....
*/
//if (isset($_POST['submit'])) {
 
  $StudentID = $_POST["StudentID"];
  $StudentName = $_POST["StudentName"];
  $ClassID = $_POST["ClassID"];
  $ParentID = $_POST["ParentID"];
 
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO students (StudentID,StudentName,ClassID,ParentID) VALUES ('$StudentID','$StudentName','$ClassID','$ParentID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
 
//}
 
?>
