<?php
$link = mysqli_connect("localhost", "root", "", "alphonous");
 
// Check connection
if ($link === false) {
die("Connection failed: ");
}
//if(isset($_POST['Update'])){
$ClassID = $_POST['ClassID'];
$ClassName = $_POST['ClassName'];
$Capacity = $_POST['Capacity'];

 
$sql = "UPDATE Classes SET ClassName= '$ClassName',  Capacity= '$Capacity'",
WHERE ClassID= '$ClassID'";
if($link->query($sql)=== TRUE){
echo"Record Updated Successfully";
} else{
echo"Error in Updating Records:" . $link->error;
}
$link->close();
//}
?>