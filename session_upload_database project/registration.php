
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database connection</title>
</head>
<body>
    <?php
     $connect=mysql_connect("localhost","root","");
     $name=$_POST['uname'];
     $pass=$_POST['upass'];
     $rpass=$_POST['rpass'];
     mysql_selectdb("upload_project",$connect);
     if($pass==$rpass){
     $sql="select* from member where uname='$name'";
     $result=mysql_query($sql);
    
     

     if($row=mysql_fetch_array($result)){
         echo"member already exits";
     }
     else{
        $sql="insert into member values ('$name','$pass')";
        mysql_query($sql);
       echo"registration successfully<br>";
       echo"have account <a href=member.php>login</a>";
         
     
    } 
}
else{
    echo"please confirm password";
}
    
      
    ?>
</body>
</html>