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
    <form  method=post>
    <table border=2 bgcolor=yellow>
    <tr bgcolor=pink>
    <th><a href=home.php>Home</a></th>
    <th><a href=myupload.php>Uploads</a></th>
    <th><a href=download.php>Download</a></th>
    <th><a href=changepass1.php>Change Passward</a></th>
    <th><a href=member.php>LogOut</a></th>
</tr>



<tr><td colspan=5 >
<p align=center> File uploading</p><br>
<p align=left>Thanks you ,</p>

</p>
 <?php
   session_start();
   $uname=$_SESSION['uname'];
   $conn=mysql_connect("localhost","root","");
   mysql_selectdb("upload_project",$conn);
 for($i=1;$i<=3;$i++){
  if($_FILES['ftxt'.$i]['error']<=0)
  {
    echo "File $i Uploaded <br><br>";
    $name=$_FILES['ftxt'.$i]['name'];
    $type=$_FILES['ftxt'.$i]['type'];
    $size=$_FILES['ftxt'.$i]['size'];
    $tmp=$_FILES['ftxt'.$i]['tmp_name'];
    
   move_uploaded_file($tmp,"$uname/$name");
   $sql="select*from myupload where fname='$name'";
   $result=mysql_query($sql);
   
  if($row=mysql_fetch_array($result)){
    echo" file  already in use";
 }
 else
 {
    $sql="insert into myupload values('$uname','$name','$type',$size,'$uname/$name')";

    mysql_query($sql);

    echo "Record Inserted<br>";

  }
    
echo"<br>";
 }
}
 ?>
</p>
          


</table>
</form>
</center>
</body>
</html>