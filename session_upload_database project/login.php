<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
</head>
<body>
    <center>
<form action=home.php  enctype="multipart/form-data" >


<?php
    
     $name=$_POST['uname'];
    $pass=$_POST['upass'];
    session_start();
    $_SESSION['uname']="$name";
    $_SESSION['upass']="$pass";
     //create the connection object
     $conn=mysql_connect("localhost","root","");
     //select database
     mysql_selectdb("upload_project",$conn);
     //define the sql query
     $sql="select*from member where uname='$name' and upass='$pass'";
     //execute the query
     $result=mysql_query($sql);
     if($row=mysql_fetch_array($result)){
        echo"<table border=2 bgcolor=yellow>
        <tr bgcolor=pink>
          <th><a href=home.php>Home</a></th>
          <th><a href=myupload.php>Uploads</a></th>
          <th><a href=download.php>Download</a></th>
          <th><a href=changepass1.php>Change Passward</a></th>
          <th><a href=member.php>LogOut</a></th>
      </tr>";
        echo"<tr><td colspan=5>
        <p align=left>Welcome <br></p><br>";
        echo"<p align=center>Hello&#160".$_SESSION['uname']."</p></td></tr>";
       
       
        if (!file_exists($name)) {     
            mkdir($name, 0777, true); }
               
     }
     else
     echo"<tr><th colspan=5>invalid details <br><a href=member.php>try again</a></th></tr>";

    ?>
    
    
   

</table>
</form>
</center>
</body>
</html>