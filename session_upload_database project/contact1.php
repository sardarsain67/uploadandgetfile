<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback form </title>
</head>
<body>
    
    <?php
     $name=$_POST['uname'];
     $phn=$_POST['uphn'];
     $feed=$_POST['ufeed'];
     
     $conn=mysql_connect("localhost","root","");
     //select database
     mysql_selectdb("upload_project",$conn);
     //define the sql query
     $sql="select*from feedback";
     //execute the query
     $result=mysql_query($sql);
        $sql="insert into feedback values('$name','$phn','$feed')";

        mysql_query($sql);

        echo "thanks you for your feedback<br>";
       
  
     
    ?>
    
</body>
</html>