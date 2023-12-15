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
 
  $ClassID = $_POST["ClassID"];
  $ClassName = $_POST["ClassName"];
  $Capacity = $_POST["Capacity"];
 
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO classes (ClassID,ClassName,Capacity) VALUES ('$ClassID','$ClassName','$Capacity')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
 
//}
 
?>
