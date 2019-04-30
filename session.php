<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['Applicant']) ||(trim ($_SESSION['Applicant']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['Applicant'];

$student_query = mysql_query("SELECT * FROM apply WHERE  Applicant_id='$session_id'")or die(mysql_error());
$student_row = mysql_fetch_array($student_query);
$student_fullname =$student_row['first'];
?>
