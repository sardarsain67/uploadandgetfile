<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <center>
        <form action=myupload1.php method=POST enctype="multipart/form-data">
            <table border=2 bgcolor=yellow >
            <tr bgcolor=pink>
            <th><a href=home.php>Home</a></th>
    <th><a href=myupload.php>Uploads</a></th>
    <th><a href=download.php>Download</a></th>
    <th><a href=changepass1.php>Change Passward</a></th>
    <th><a href=member.php>LogOut</a></th>
        </tr>
        
        
        <tr><td colspan=5 >
       <fieldset>
        <legend>Upload Files</legend>
        <p align=center>File 1 <input type=file name=ftxt1 accept=" .png, .jpg, .jpeg,application/pdf, .doc"><br>
        File 2 <input type=file name=ftxt2 accept="application/pdf,image/png, image/jpg,.doc"><br>
        File 3 <input type=file name=ftxt3 accept="application/pdf,image/png, image/jpg,.doc"><br><br>
         <input type="submit" value="upload">
            <input type="reset" value="Clear All">
        </p>
           </td> 
       </fieldset>
            </tr>
            <tr><td colspan=5 >
       <fieldset>
        <legend>My Uploads</legend>
        <?php

       session_start();
      $name=$_SESSION['uname'];
      $pass=$_SESSION['upass'];
      
      $conn=mysql_connect("localhost","root","");
    //select database
    mysql_selectdb("upload_project",$conn);
  
    
      //define the sql query
      $sql="select*from myupload where uname='$name'";
      //execute the query
       
       $result=mysql_query($sql);
		
       echo" <table border=2>";
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
     
       echo"</table>";
      
     
     ?>
        
            
       </fieldset>
            </tr>
         
         </table> 
         
        </form>
    </center>
</body>
</html>