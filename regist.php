<?php
$host="localhost";
		$uname="root";
		$pas="";
		$db_name="william";
		$tbl_name="apply";
		
		@mysql_connect("$host","$uname","$pas") or die ("cannot connect");
		mysql_select_db("$db_name") or die ("cannot select db");
		?>
<?php
if (isset($_POST['register'])){
$F_Name = $_POST['F_Name'];
$L_Name =$_POST['L_Name'];
$U_Name = $_POST['U_Name'];
$P_Word1 = $_POST['P_Word1'];
$P_Word2=$_POST['P_Word2'];

//validate if the passwords match

if ($P_Word1!= $P_Word2) {
			echo "<script>
			alert('The two passwords do not match');
			window.location='Register.php';
			</script>";
}
			

$query = @mysql_query("select * from apply where U_Name = '$U_Name' AND P_Word='$P_Word1' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into apply (first,last,U_Name,P_Word) values('$F_Name','$L_Name','$U_Name','$P_Word1')")or die(mysql_error());
?>
<script>
window.location = "Login.php";
</script>
<?php
}
}
?>