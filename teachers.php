<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    </head>
 
 
<body>
 
 
<?php
 
$link = mysqli_connect("localhost", "root", "", "alphonous");
 
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>
 
<h3>See all Teachers</h3>
   
        <table>
       
            <tr>
                <th width="150px"><br>TeacherID<hr></th>
                <th width="250px"><br>TeacherName<hr></th>
                <th width="250px"><br>Phone<hr></th>
                <th width="250px"><br>Age<hr></th>
                <th width="250px"><br>AnnualSalary<hr></th>
                <th width="250px"><br>StudentID<hr></th>
                <th width="250px"><br>ClassID<hr></th>
            </tr>
               
            <?php
             $sql = mysqli_query($link, "SELECT Age,AnnualSalary,Phone,TeacherID,TeacherName,Phone,Age,AnnualSalary,StudentID,ClassID FROM teachers");
   
 
            while ($row = $sql->fetch_assoc()){
            echo "
            <tr>
     
                <th>{$row['TeacherID']}</th>
                <th>{$row['TeacherName']}</th>
        <th>{$row['Phone']}</th>
        <th>{$row['Age']}</th>
        <th>{$row['AnnualSalary']}</th>
        <th>{$row['StudentID']}</th>
        <th>{$row['ClassID']}</th>


            </tr>";
            }
            ?>
            </table>
        </body>
        </html>