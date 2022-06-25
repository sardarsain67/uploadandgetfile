<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dounload from table</title>
</head>
<body>
<center>
<form action=download1.php method=GET>
    <table border=2 bgcolor=yellow>
    <tr bgcolor=pink>
    <th><a href=home.php>Home</a></th>
    <th><a href=myupload.php>Uploads</a></th>
    <th><a href=download.php>Download</a></th>
    <th><a href=changepass1.php>Change Passward</a></th>
    <th><a href=member.php>LogOut</a></th>
</tr>
<tr><td colspan=5 >
<p align=center>File Download Page</p>
<p align=center><input type=radio name ='optchoice' value=1>By Name<input type =text name=fname><br>
<input type=radio name ='optchoice' value=2>By Type <select name=ftype><option>jpeg</option><option>png</option><option>pdf</option><option>doc</option><option>bmp</option></select><br>
<input type=radio name ='optchoice' value=3>By Size <input type =text name=fsize1>to <input type =text name=fsize2>bytes<br>
</p>
<br>
<p align=center><input type=submit value=Search> <input type=reset value=Search> </p>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>