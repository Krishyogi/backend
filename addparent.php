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
 
  $ParentID = $_POST["ParentID"];
  $ParentName = $_POST["ParentName"];
  $Address = $_POST["Address"];
  $Age = $_POST["Age"];
  $Phone = $_POST["Phone"];
 
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO parents (ParentID,ParentName,Address,Age,Phone) VALUES ('$ParentID','$ParentName','$Address','$Age','$Phone')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
 
//}
 
?>
