<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "william";
	$errors = array();
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KCDF</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<div class="header"><h2>Student Login</h2></div>
			<form method="post" action="Login.php">

				<?php include('errors.php'); ?>

				<div class="input-group">
					<label>Username</label>
					<input type="text" name="UserName" >
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="Password">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="log">Login</button>
					<a href="index.php"><button type="submit" class="btn" name="back">Back</button></a>
				</div>
				<p>
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
		   </form>


		   <?php
				if(isset($_POST['log'])){
					$UserName=$_POST['UserName'];
					$Password=$_POST['Password'];
					$qy = "SELECT * FROM apply WHERE U_Name='$UserName' and P_Word='$Password'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['id'] = $row['id'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"status.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"Register.php\")
									</script>";
						
					
					}
				}
			?>
</div>
	</section><!--  end search section  -->

	<footer>
		<div class="wrapper footer" align="center">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by William Wafula.		
		</div>	
	</footer><!--  end footer  -->	

</body>
</html>