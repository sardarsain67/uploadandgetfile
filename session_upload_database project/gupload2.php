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
    <th><a href=index.php>Home</a></th>
    <th><a href=gupload1.php>Guest upload</a></th>
    <th><a href=gDownload.php>Guest Download</a></th>
    <th><a href=member.php>Member Section</a></th>
    <th><a href=contact.php>Contact Us</a></th>
</tr>


<tr><td colspan=5 >
<p align=center>Guest File uploading</p><br>
<p align=left>Thanks you Guest,</p>

</p>
 <?php
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
    
   move_uploaded_file($tmp,"guest_upload/$name");
   $sql="select*from myupload where fname='$name'";
   $result=mysql_query($sql);
   $uname="guest";
   $path="guest_upload/$name";
  if($row=mysql_fetch_array($result)){
    echo" file  already in use";
 }
 else
 {
    $sql="insert into myupload values('$uname','$name','$type',$size,'$path')";

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