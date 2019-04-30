<html>
<head>
<title>Sponsorship Donnors List</title>
</head>
<body bgcolor="WHITE">
<?php

$host="localhost";
		$uname="root";
		$pas="";
		$db_name="osms";
		$tbl_name="donor";
		
		@mysql_connect("$host","$uname","$pas") or die ("cannot connect");
		mysql_select_db("$db_name") or die ("cannot select db");
?>
<?php
	include "dbconn.php";
	$qrysel="select * from donor ";
	$rs=mysql_query($qrysel);
	if(!$rs)
	{
		echo "<font color=purple size=4>In correct mysql select Query.</font>";
		die($qrysel);
	}
	echo "<center>";
	echo "<table border=1>";
		echo "<caption><font color='' size=4><b><i>Donors</i></b></font></caption>";
	echo "<tr><th>First Name</th><th>Last Name</th><th>Email_Id</th><th>Phone Number</th>
	<th>Amount</th><th>Students First Name</th><th>Students Last Name</th><th>School Name</th>
	<th>School Level</th><th>Bank Name</th><th>Transaction Code/Receipt Number</th></tr>";
	
	while($v=mysql_fetch_array($rs))
	{
		echo "<tr>";
		echo "<td>".$v['First_Name']."</td>";
		echo "<td>".$v[1]."</td>";
		echo "<td>".$v[2]."</td>";
		echo "<td>".$v[3]."</td>";
		echo "<td>".$v[4]."</td>";
		echo "<td>".$v[5]."</td>";
		echo "<td>".$v[6]."</td>";
		echo "<td>".$v[7]."</td>";
		echo "<td>".$v[8]."</td>";
		echo "<td>".$v[9]."</td>";
		echo "<td>".$v[10]."</td>";
		
		echo "</tr>";
	}
	echo "</table>";
?><form>
<input type="button" value="Print this page" onclick="window.print()">
</form>
</body>
</html>
	