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

    <table border=2 bgcolor=yellow>
  <tr bgcolor=pink>
    <th><a href=index.php>Home</a></th>
    <th><a href=gupload1.php>Guest upload</a></th>
    <th><a href=gDownload.php>Guest Download</a></th>
    <th><a href=member.php>Member Section</a></th>
    <th><a href=contact.php>Contact Us</a></th>
</tr>
<tr><td colspan=3 >
<fieldset align=left>
<legend>new users</legend>
<form action=registration.php method=POST>
UserName<br>
<input type= text name=uname><br>
Password<br>
<input  type="password" name=upass><br>
Retype Passward<br>
<input  type="password" name=rpass><br>
<input type=submit value=Register>
<input type=reset value="Clear All">
</form>
</fieldset>
</td>
<td colspan=2 >
<fieldset >
<legend>Login Form</legend>
<form action=login.php method=POST>
UserName
<input type= text name=uname><br>
Password
<input  type="password"name=upass><br>
<input type= submit value=Login>
<input type= reset value=Clear All><br>
if already have account...
</form>
</fieldset>
</td>
</tr>

</table>

</center>

</body>
</html>