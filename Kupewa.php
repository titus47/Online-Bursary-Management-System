<?php
$host="localhost";
		$uname="root";
		$pas="";
		$db_name="osms";
		$tbl_name="donate";
		
		@mysql_connect("$host","$uname","$pas") or die ("cannot connect");
		mysql_select_db("$db_name") or die ("cannot select db");
		?>
<?php
if (isset($_POST['register'])){
$First_Name = $_POST['first'];
$Last_Name =$_POST['Last'];
$Email_ID = $_POST['login'];
$Phone_number = $_POST['Phone'];
$Amount = $_POST['Amount'];
$studentF = $_POST['student_Fname'];
$studentL = $_POST['student_Lname'];
$school = $_POST['school'];
$level = $_POST['level'];
$bank = $_POST['bank'];
$code = $_POST['code'];


$query = @mysql_query("select * from apply where email = '$Email_ID'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into donate (First_Name,Last_Name,Email_ID,Phone_number,Amount,student_Fname,student_Lname,school,level,bank,code,settled)
 values('$First_Name','$Last_Name','$Email_ID','$Phone_number','$Amount','$studentF','$studentL','$school','$level','$bank','$code','0')")or die(mysql_error());
?>
<script>
window.location = "index.php";
$.jGrowl("Staff Successfully added", { header: 'Staff add' });
</script>
<?php
}
}
?>