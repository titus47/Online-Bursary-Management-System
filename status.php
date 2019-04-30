<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "William";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>OSMS</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header1.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"><strong>Check Out Your Activities</strong></h2>
				
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline"><strong>Application Status</strong></h2>
			<ul class="properties_list">
			<?php
						
						$sel = "SELECT * FROM apply WHERE id = '$_SESSION[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">You Applied for:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['farr'];?></span></h2>
				</li>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">Amount Settled:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['settled'];?></span></h2>
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer" align="center">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by William Wafula.
			
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>