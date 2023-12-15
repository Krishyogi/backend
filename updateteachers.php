<?php
$link = mysqli_connect("localhost", "root", "", "alphonous");
 
// Check connection
if ($link === false) {
die("Connection failed: ");
}
//if(isset($_POST['Update'])){
$TeacherID = $_POST['TeacherID'];
$TeacherName= $_POST['TeacherName'];
$Phone= $_POST['Phone'];
$Age= $_POST['Age'];
$AnnualSalary= $_POST['AnnualSalary'];
$StudentID = $_POST['StudentID']
$ClassID = $_POST['ClassID'];
 
$sql = "UPDATE teachers SET TeacherName= '$TeacherName', Phone= '$Phone', Age= '$Age', AnnualSalary= '$AnnualSalary, StudentID= '$StudentID',ClassID= '$ClassID'"
WHERE TeacherID= '$TeacherID'";
if($link->query($sql)=== TRUE){
echo"Record Updated Successfully";
} else{
echo"Error in Updating Records:" . $link->error;
}
$link->close();
//}
?>