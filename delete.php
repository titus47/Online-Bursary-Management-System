<?php 
include('dbconn.php');

$id = $_REQUEST['id'];
mysql_query("DELETE from apply where Applicant_id= '$id'");

header("location:remove_handled.php");
?>