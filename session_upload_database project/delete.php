<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
</head>
<body>
<?php
   session_start();
   $name=$_SESSION['filename'];
   $uname=$_SESSION['uname'];
   ?>
    <center>

<table border=2 bgcolor=yellow>
  <tr bgcolor=pink>
    <th><a href=home.php>Home</a></th>
    <th><a href=myupload.php>Uploads</a></th>
    <th><a href=download.php>Download</a></th>
    <th><a href=changepass1.php>Change Passward</a></th>
    <th><a href=member.php>LogOut</a></th>
</tr><tr><td colspan=5>
<?php 

 $n=mysql_connect("localhost","root","");
 mysql_selectdb("upload_project",$n);
mysql_query("delete from myupload where fname='$name'");
$result=mysql_query("select * from myupload where uname='$uname'");
echo "<tr><th>No.<th> FIle Name</th><th>type</th><th>Size</th><th>View file</th><th>Delete file</th></tr>";
       $x=0;
       $_SESSION['n']=$x;
   while($row=mysql_fetch_array($result))
    { 
      $x++;
       
           echo "<tr>";
          echo"<td>$x</td>";
           echo "<td> $row[1]</td>";
           echo "<td> $row[2]</td>";
           echo "<td> $row[3]</td>";
           
           echo"<td><a href='$row[4]'>View file</a></td>";
           $_SESSION['filename']=$row[1];
          echo"<td><a href=delete.php>delete</a></td>";
          
          

         
           echo "</tr>";
           
    } 
    unlink("$uname/$name"); 


?>
</table>

</center>
</body>
</html>