<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = @mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("osms_db", $con);

$Mysql="INSERT INTO reg_form ( F_Name, L_Name, U_Name, P_Word, C_Pword,)
VALUES
('$_POST[F_Name]','$_POST[L_Name]','$_POST[U_Name]','$_POST[P_Word]','$_POST[C_Pword]',')";

if (!mysql_query($Mysql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "YOU HAVE BEEN SUCCEFULY REGISTERED THANK YOU";

mysql_close($con);
?>
</body>
</html>