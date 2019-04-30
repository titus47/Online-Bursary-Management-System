<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "william";
	
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
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<style type="text/css">
		.caption{
			background-color: #339213;
			height: 50px;
		}
	</style>

</head>

<body>

	<section class="">
		<?php
			include 'header.php';
		?>
			<section class="caption">
				<h2 class="properties" style="text-align: center;color:white;"><strong>View all Applicants</strong></h2>
				<h3 class="properties" style="text-align: center;color: white;"><strong>Step 1:Select the Applicant</strong></h3>
			</section>
			<p align="center"; style="color:red;">(N/B If the Applicant does not present legal document,gladly disqualify the application)</p>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php

					//SELECT student.*,fees.* FROM fees INNER JOIN student ON  student_id='$session_id'
						$sel = "SELECT apply.* FROM apply  Where apply.farr >= 5000 AND settled =0 ORDER BY sname"  ;
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
							$sname=$rws['sname'];
							$Regno=$rws['Regno'];
							$first=$rws['first']." ".$rws['last'];
							setcookie("skul",$sname,time()+3600);
							setcookie("stname",$first,time()+3600);
							setcookie("sreg",$Regno,time()+3600);

			?>
				<li style="width: 190px;">
					<a href="don.php?id=<?php echo $rws['id'] ?>">
						<img class="thumb" src="Images/<?php echo $rws['file'];?>" width="100" height="100">
					</a>
					<div class="property_details">
						<span class="price"><?php echo 'Kshs.'.$rws['farr'];?></span>
						<h2>
							<a href="don.php?id=<?php echo $rws['id'] ?>"><?php echo 'sname:'.$rws['sname'];?></a>
						</h2>
						<h2>Name: <span class="property_size"><?php 
						echo $rws['first']." ". $rws['last']?></span></h2>


					</div>
				</li>
			<?php
				}
			?>
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