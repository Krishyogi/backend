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
    
  $TeacherID= $_POST['TeacherID'];
 
 
/*
Step 3  executes the Insert query on the database
*/
    $sql = "DELETE from teachers WHERE TeacherID = '$TeacherID'";
    if (mysqli_query($link, $sql)) {
      echo "Record Deleted Successfully";
    } else {
      echo "Error in deleting record ";
    }
   
 
//}
 
?>