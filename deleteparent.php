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
//if(isset($_POST['submit'])) {
    
  $ParentID = $_POST['ParentID'];
 
 
/*
Step 3  executes the Insert query on the database
*/
    $sql = "DELETE from parents WHERE ParentID = '$ParentID'";
    if (mysqli_query($link, $sql)) {
      echo "Record Deleted Successfully";
    } else {
      echo "Error in deleting record ";
    }
   
 
//}
 
?>

