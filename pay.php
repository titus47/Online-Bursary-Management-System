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
	<title>Disbursement details </title>
<meta charset="UTF-8">
<meta name="viewport" content ="width=device-width,initial-scale=1.0">
<link rel ="stylesheet" href="../styles/css/admin.css" type="text/css" >	
<link href="../styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<meta name="author" content="pixelhint.com">
<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<style type="text/css">
	td{
		border: 1px solid black;
		padding: 5px;
		text-align: left;

	}
	input{
		width: 175px;
		height:20px;
	}
	tr:nth-child(odd){
		background-color: #f2f2f2;

	}
	table{
		width:45%;
	}
</style>
</head>

<body>
	<section class="">
		<?php
			include 'header.php';
		?>
	</section><!--  end hero section  -->
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<div class="info">
						<P  style="font-size: 18px;padding-bottom: 18px;" ><b>APPLICANT DETAILS</b><br>
						<label><strong>Name of student:</strong></label><?php
						$first=$_COOKIE['stname'];
						if(isset($_COOKIE['stname'])){
							$first=$_COOKIE['stname'];
							echo $first;
							}else
							{ echo 'Unknown';	}

						 ?>
						<br>
						<label><strong>Registration Number:</strong></label><?php
						$Regno=$_COOKIE['sreg'];
						if(isset($_COOKIE['sreg'])){
							$Regno=$_COOKIE['sreg'];
							echo $Regno;
							}else
							{ echo 'Unknown';	}

						 ?><br>
						<label><strong>School Name:</strong></label><?PHP
						$sname=$_COOKIE['skul'];
						if(isset($_COOKIE['skul'])){
							$sname=$_COOKIE['skul'];
							echo $sname;
							}else
							{ echo 'Unknown';	}
		
						?><br>
						<label>School Account:</label>
						<?php
						$query="SELECT * FROM accounts";
						$result=mysqli_query($conn,$query);
						if(mysqli_num_rows($result)){
							while($row=mysqli_fetch_assoc($result)){
								echo $row['bank_account'];
								}
								}else{
									echo "No account number Found".mysql_error($conn);
									}?><br>
									<label>Amount Allocated</label>
									<?php
									$query="SELECT * FROM allocation_rates";
									$result=mysqli_query($conn,$query);
									if(mysqli_num_rows($result)){
										while($row=mysqli_fetch_assoc($result)){
											echo $row['amount'];
											}
											}
											else{
												echo "No allocation rates Found".mysql_error($conn);
												}
									?>
			
					</P>
				</div>
					<div class="disburse">
					<form method="POST">
						<p><b> PAYMENT DETAILS</b></p>
						<table border="1" cellspacing="1">
								<tr>
									<td><strong>Re-Enter Amount:</strong></td><td><input type="number" name="pesa"  required=""></td>
									</tr>
									<tr>
										<td><strong>Transaction code:</strong></td><td><input type="text" name="mpesa" required=""></td>
										</tr>
										<td><strong>Student Admission no:</strong></td><td><input type="text" name="adm" required=""></td>
										</tr>
										<tr>
											<td><strong>National Id:</strong></td><td><input type="number" name="id_no" required=""></td>
											</tr>
											<td class="nav" colspan="2"><input type="submit" class="navbutton" style="background-color: #339213;color: white; " name="pay" value="PAY AMOUNT">
												<input type="reset" class="navbutton"style="background-color:#339213;color: white;" name="clearpayment" value="CLEAR"></td>
												</tr>
							</table>
						</form>
						<?php
						if(isset($_POST['pay'])){
							$Regno=$_POST['adm'];
							$amount =$_POST['pesa'];
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE staff  SET mpesa = '$mpesa' ,amount='$amount', WHERE id_no = '$id_no'";
							$result = $conn->query($qry);

							$qry1="UPDATE apply SET settled='$amount' WHERE Regno='$Regno'";
							$result1=$conn->query($qry1);

							if($result == TRUE && $result1==TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Disbursed Successfully.Continue \");
											window.location = (\"Students.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Disbursed Successfully. continue\");
											window.location = (\"Students.php\")
											</script>";
							}
							$qry3 = "INSERT INTO Beneficiaries (Regno,Amount,Mpesa)VALUES('$Regno','$amount','$mpesa')";
							$result = $conn->query($qry3);
							if($result == TRUE){
								echo "inserted successful";
							} else{
								echo "Failed";
							}
						}
						

														
							?>
					</div>
							</ul>
							<div class="more_listing">
							</div>
</section>	<!--  end listing section  -->
<footer>
		<div class="wrapper footer" align="center">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by William Wafula.
			
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>

				
			
	
			
			
			
		
			
		
		
		

























