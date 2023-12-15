<html>
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
 
<h3>See all Students</h3>
   
        <table>
       
            <tr>
                <th width="150px"><br>ParentID<hr></th>
                <th width="250px"><br>ParentName<hr></th>
                <th width="250px"><br>Address<hr></th>
                <th width="250px"><br>Age<hr></th>
                <th width="250px"><br>Phone<hr></th>
            </tr>
               
            <?php
             $sql = mysqli_query($link, "SELECT ParentID,ParentName,Address,Age,Phone  FROM parents");
   
 
            while ($row = $sql->fetch_assoc()){
            echo "
            <tr>
     
                <th>{$row['ParentID']}</th>
                <th>{$row['ParentName']}</th>
        <th>{$row['Address']}</th>
        <th>{$row['Age']}</th>
        <th>{$row['Phone']}</th>

 
 
 
 
 
            </tr>";
            }
            ?>
            </table>
        </body>
        </html>