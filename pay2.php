<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "osms";
	
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

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Fill in the Payment Details Here</h2>
				<h3 class="properties" style="text-align: center">To Complete Donation Process</h3>
			</section>
	</section><!--  end hero section  -->


	


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Make Payments Here</h3>
				<h5>Paybill Number: 00000</h5>
				<h6>Business Number: ID Number Registered with.</h6>
				<form method="post">
					<table>
						<tr>
							<td>AMOUNT:</td>
							<td><input type="text" name="pesa" required></td>
						</tr>
						<tr>
							<td>MPESA Transaction ID:</td>
							<td><input type="text" name="mpesa" required></td>
						</tr>
						<tr>
							<td>National ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
								<?php
						if(isset($_POST['pay'])){
							$amount =$_POST['pesa'];
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE donor,apply SET donor.mpesa = '$mpesa' ,donor.amount='$amount',apply.settled='$amount' WHERE donor.id_no = '$id_no' AND donor.Applicant_id=apply.id";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Donations Successfully Done. \");
											window.location = (\"Students.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"payment failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
			<div class="more_listing">
				
			</div>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by James Muriira.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>