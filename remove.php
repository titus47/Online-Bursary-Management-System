





<?php
error_reporting(0);
$apply = $_REQUEST['apply'];
require_once ("dbconn.php");
mysql_query("DELETE FROM apply WHERE Applicant_id = '$apply'") or die (mysql_error());
header ("apply.php");
?>