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
<?php
    $ch=$_GET['optchoice'];
    $name=$_GET['fname'];
     $type=$_GET['ftype'];
     $min=$_GET['fsize1']; 
     $max=$_GET['fsize2'];
     $n=mysql_connect("localhost","root","");
     mysql_selectdb("upload_project",$n);
     if($ch==1){
     $result=mysql_query("select * from myupload  where fname like '%$name%'");
     echo "<table border=2>";
        echo "<tr><th>file name</th><th>Type</th><th>Size</th><th></th></tr>";
   
    while($row=mysql_fetch_array($result))
     { 
        
        
            echo "<tr>";
            echo "<td> $row[1]</td>";
            echo "<td> $row[2]</td>";
            echo "<td> $row[3]</td>";
            echo"<td><a href='$row[4]'>View file</a></td>";
            echo"<td><a href=".'$row[4]'.">
            <button type=button>Download</button></a></td>";
                    echo "</tr>";
            echo "</tr>";
     }
    
    
     }
    else
    {
                if($ch==2){
            $result=mysql_query("select * from myupload where ftype LIKE'%$type%'");
            echo "<table border=2>";
            echo "<tr><th>file name</th><th>Type</th><th>Size</th><th></th></tr>";
            
            while($row=mysql_fetch_array($result))
             { 
                
                
                echo "<tr>";
                echo "<td> $row[1]</td>";
                echo "<td> $row[2]</td>";
                echo "<td> $row[3]</td>";
                echo"<td><a href='$row[4]'>View file</a></td>";
                echo"<td><a href=".$row[4].">
                <button type=button>Download</button></a></td>";
                    echo "</tr>";
                echo "</tr>";
             }
             
        }
        else{
            if($ch==3){
                $result=mysql_query("select * from myupload where fsize>=$min and fsize<=$max ");
                echo "<table border=2>";
                    echo "<tr><th>file name</th><th>Type</th><th>Size</th><th>View</th><th>Download file</th></tr>";
                
                while($row=mysql_fetch_array($result))
                 { 
                   
                    
                    echo "<tr>";
                    echo "<td> $row[1]</td>";
                    echo "<td> $row[2]</td>";
                    echo "<td> $row[3]</td>";
                    echo"<td><a href='$row[4]'>View file</a></td>";
                    echo"<td><a href=".$row[4].">
                    <button type=button>Download</button></a></td>";
                    echo "</tr>";
                 }
                 
        }
        else{
            echo"select option";
        }
    }
    }
    ?>

</tr>
</table>
</form>
</center>
</body>
</html>