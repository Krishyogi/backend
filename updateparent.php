<?php
$link = mysqli_connect("localhost", "root", "", "alphonous");
 
// Check connection
if ($link === false) {
die("Connection failed: ");
}
//if(isset($_POST['Update'])){ $ParentID = $_POST['ParentID']
 $ParentID = $_POST['ParentID']   
$ParentName = $_POST['ParentName'];
$Address = $_POST['ClassID'];
$Age = $_POST['Age']
$Phone = $_POST['Phone']
 
$sql = "UPDATE parent SET ParentName= '$ParentName', ClassID= '$ClassID', Age= '$Age', Phone= '$Phone'"
WHERE ParentID= '$ParentID'";
if($link->query($sql)=== TRUE){
echo"Record Updated Successfully";
} else{
echo"Error in Updating Records:" . $link->error;
}
$link->close();
//}
?>