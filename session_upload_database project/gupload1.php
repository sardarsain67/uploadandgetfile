<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <center>
        <form action=gupload2.php method=POST enctype="multipart/form-data">
            <table border=2 bgcolor=yellow >
            <tr bgcolor=pink>
            <th><a href=index.php>Home</a></th>
            <th><a href=gupload1.php>Guest upload</a></th>
            <th><a href=gDownload.php>Guest Download</a></th>
            <th><a href=member.php>Member Section</a></th>
            <th><a href=contact.php>Contact Us</a></th>
        </tr>
        
        
        <tr><td colspan=5 >
        <p align=center>Guest File uploading</p>
        <p align=left>Welcome Guest,</p>
        <p align=center>File 1 <input type=file name=ftxt1 accept=" .png, .jpg, .jpeg,application/pdf, .doc"><br>
        File 2 <input type=file name=ftxt2 accept="application/pdf,image/png, image/jpg,.doc"><br>
        File 3 <input type=file name=ftxt3 accept="application/pdf,image/png, image/jpg,.doc"><br><br>
        </p>
            <tr ><td colspan="5" align="center"><input type="submit" value="upload">
            <input type="reset" value="Clear All"></td>
            </tr>
         
         </table> 
         
        </form>
    </center>
</body>
</html>