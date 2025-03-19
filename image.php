<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="photo">
<input type="submit" value="upload">

</form>

<?php 

if($_SERVER['REQUEST_METHOD']=='POST')
{
    echo "File name: ".$_FILES['photo']['name']."<br>";
    echo "File type: ".$_FILES['photo']['type']."<br>";
    echo "File Temporary storage: ".$_FILES['photo']['tmp_name']."<br>";
    echo "File Size: ".$_FILES['photo']['size']."<br>";
    echo "File Error: ".$_FILES['photo']['error']."<br>";
}


?>
</body>
</html>