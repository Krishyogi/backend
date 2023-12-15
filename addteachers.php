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
 
  $TeacherID = $_POST["TeacherID"];
  $TeacherName = $_POST["TeacherName"];
  $Phone = $_POST["Phone"];
  $Age = $_POST["Age"];
  $AnnualSalary = $_POST["AnnualSalary"];
  $StudentID = $_POST["StudentID"];
  $ClassID = $_POST["ClassID"];
 
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO teachers (TeacherID,TeacherName,Phone,Age,AnnualSalary,StudentID,ClassID) VALUES ('$TeacherID','$TeacherName','$Phone','$Age','$AnnualSalary','$StudentID','$ClassID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
 
//}
 
?>
