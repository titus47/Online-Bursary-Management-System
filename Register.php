<?php include('regist.php') ?>
<html>
<head>
<title>Bursary Applicant Form</title>
<link rel="stylesheet" type="text/css" href="login.css">
<style type="text/css">
h3{
	font-family: Calibri;
	font-size: 22px;
	font-style: normal;
	font-weight: bold;
	color:;
	text-align: center;
	text-decoration: underline
}
body {
	background-color:;
}
</style>
</head>
<body>
	<div class="header">
		<h2>Sign Up</h2>
	</div>
	
	<form method="post" action="Register.php">


		<div class="input-group">
			<label><strong>First Name</strong></label>
			<input type="text" name="F_Name" placeholder="First name" maxlength="35"required/>		
		</div>
		<div class="input-group">
			<label><strong>Last Name</strong></label>
			<input type="text" name="L_Name" placeholder="Last name" maxlength="35"required/>
		</div>
		<div class="input-group">
			<label><strong>Username</strong></label>
			<input type="text" name="U_Name" placeholder="Your username" maxlength="35" required/>
			
		</div>
		<div class="input-group">
			<label><strong>Password</strong></label>
			<input type="password" name="P_Word1" placeholder="Example:john23" maxlength="35" required/>
		</div>
		<div class="input-group">
			<label><strong>Confirm password</strong></label>
			<input type="password" name="P_Word2" placeholder="Match Password " maxlength="35" required/>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register">Register</button>
			<button type="reset" name="button2" class="btn">Reset</button>
			<a href="Login.php"><button type="submit" class="btn" name="back">Back</button></a>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	</body>          
</html>