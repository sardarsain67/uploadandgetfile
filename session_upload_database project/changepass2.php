<?php
$opass=$_POST['opass'];
$npass=$_POST['npass'];
$rnpass=$_POST['rnpass'];
session_start();
$name=$_SESSION['uname'];
$pass=$_SESSION['upass'];
$conn=mysql_connect("localhost","root","");
    //select database
mysql_selectdb("upload_project",$conn);
if($pass==$opass){
     if($npass==$rnpass){
    
    //define the sql query
    $sql="update member set upass='$npass' where uname='$name'";
    //execute the query
    mysql_query($sql);
    echo "passward successfully updated"; 
    }
    else
    echo"enter same passward";

   }
else{
    echo"old password not same";
}
echo"<br><a href=home.php>go home page</a>";

?>