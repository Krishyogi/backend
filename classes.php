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
 
<h3>See all Classes</h3>
   
        <table>
       
            <tr>
                <th width="150px"><br>ClassID<hr></th>
                <th width="250px"><br>ClassName<hr></th>
                <th width="250px"><br>Capacity<hr></th>
                
            </tr>
               
            <?php
             $sql = mysqli_query($link, "SELECT Capacity,ClassID,ClassName FROM classes");
   
 
            while ($row = $sql->fetch_assoc()){
            echo "
            <tr>
     
                <th>{$row['Capacity']}</th>
                <th>{$row['ClassID']}</th>
        <th>{$row['ClassName']}</th>
 
 
 
 
 
            </tr>";
            }
            ?>
            </table>
        </body>
        </html>