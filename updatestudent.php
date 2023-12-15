<?php
$link = mysqli_connect("localhost", "root", "", "alphonous");
 
// Check connection
if ($link === false) {
die("Connection failed: ");
}
//if(isset($_POST['Update'])){
$StudentID = $_POST['StudentID'];
$StudentName = $_POST['StudentName'];
$ClassID = $_POST['ClassID'];
$ParentID = $_POST['ParentID']
 
$sql = "UPDATE students SET StudentName= '$StudentName', ClassID= '$ClassID', ParentID= '$ParentID'";
WHERE StudentID= '$StudentID'";
if($link->query($sql)=== TRUE){
echo"Record Updated Successfully";
} else{
echo"Error in Updating Records:" . $link->error;
}
$link->close();
//}
?>