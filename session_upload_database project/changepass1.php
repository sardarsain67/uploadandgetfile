<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change passward</title>
    
</head>
<body>
<center>
<form action=changepass2.php  method=POST>
<table border=2 bgcolor=yellow>
  <tr bgcolor=pink>
    <th><a href=home.php>Home</a></th>
    <th><a href=myupload.php>Uploads</a></th>
    <th><a href=download.php>Download</a></th>
    <th><a href=changepass2.php>Change Passward</a></th>
    <th><a href=member.php>LogOut</a></th>
</tr><tr><td colspan=5>

    <fieldset>
    <legend>Change Passward</legend>
    Old Passward <input type=text name=opass><br>
    New Passward <input type=text name=npass><br>
    Retype Passward <input type=text name=rnpass><br>
   <p align=right> <input type=reset value="Clear All">
    <input type=submit value="Change" >
</p>
</fieldset>


</td>
</tr> 

</table>
</form>
</center>
</body>
</html>