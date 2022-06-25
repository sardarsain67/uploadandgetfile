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
<p align=left>Welcome</p><br>
<?php echo"<p align=center>Hello ,".$_SESSION['uname']."</p><br>"; ?>

</td>
</tr> 

</table>

</center>
</body>
</html>