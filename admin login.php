<?php

include('dbconn.php');
?>
<body>
<div class="wrapper">

<div id="element" class="hero-body-index">
	<p align="center"><font color=""><h1>Login</h1></font></p>
	<form method="POST" action="#" id="login" align="center" >
	<fieldset >
<legend>Login</legend>
	<font color="black">UserName:</font><input type="text"  name="UserName" ></br></br>
    <font color="black">Password:</font><input type="Password" name="Password"></br></br>
		
	<button class="btn btn-inverse" name="Login"><i class="icon-ok-sign icon-large"></i>&nbsp;Login&nbsp;</button>
   </p>
   </fieldset>
	</form>
	</br>
	<div class="error">
	<?php

if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$login_query=mysql_query("select * from admin where username='$UserName' and password='$Password'");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);


if ($count > 0){
session_start();
$_SESSION['id']=$row['user_id'];
$_SESSION['U_Name']=$UserName;
header('location:admin.php');
}else{
	header('location:Adminlogin.php');
}
}
?>
   


</div>
</body>
</html>