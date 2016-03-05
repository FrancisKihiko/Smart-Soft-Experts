<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$host="localhost";
$user="company";
$pass="9n9BGexZAEm2bd9Z";
$conn=mysql_connect($host,$user,$pass);
 $db=mysql_select_db("thegreat");
if($db)
{echo "connected";} else{ echo "not connected";}


?>
</body>
</html>
