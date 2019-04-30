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
				<div class="busform">
					<form ACTION="<?php $_PHP_SELF ?>" METHOD="POST" id="payment-form">
						<div align="center"  style="background-color: #339213;text-align: center;width: 250px;height: 25px;padding-top:  2px;" ><h3 style="color: white;"><b>APPLICANT DETAILS</b></h3></div>
						<div>
							<p style="font-size: 15px;padding-bottom: 20px;">
						<label>Name of student:</label><?php
						$first=$_COOKIE['stname'];
						if(isset($_COOKIE['stname'])){
							$first=$_COOKIE['stname'];
							echo $first;
							}else
							{ echo 'Unknown';	}

						 ?>
						<br>
						<label>Registration Number:</label><?php
						$Regno=$_COOKIE['sreg'];
						if(isset($_COOKIE['sreg'])){
							$Regno=$_COOKIE['sreg'];
							echo $Regno;
							}else
							{ echo 'Unknown';	}

						 ?><br>
						<label>School Name:</label><?PHP
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
			}
			else{
				echo "No account number Found".mysql_error($conn);
			}?>

			<label>Amount Allocated:</label>
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
		</p>
		<table border="1">
			<tr><td>Re-Enter Amount:</td><td><input type="number" name="pesa" required></td></tr>
			<tr><td>Transaction ID:</td><td><input type="text" name="mpesa" required=""></td></tr>
			<tr><td>National ID:</td><td><input type="number" name="id_no" required=""></td></tr>
			<tr><td><input type="submit" name="pay"  value="PAY AMOUNT" style="background-color:#67aa12;"></td>
				<td><input type="submit" name="fail" value="CANCEL" style="background-color:#67aa12;"></td></tr>
		</table>
	</div>
	</form>
    <?php
	if(isset($_POST['pay'])){
		if($_POST['mpesa'] !=""){
			$query="select * from allocations where transaction_code='$mpesa' && amount='$pesa'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0){
				$amount =$_POST['pesa'];
				$mpesa = $_POST['mpesa'];
				$id_no = $_POST['id_no'];
				$qry = "UPDATE staff,apply SET staff.mpesa = '$mpesa' ,staff.amount='$amount',apply.settled='$amount' WHERE staff.id_no = '$id_no' AND staff.Applicant_id=apply.id";
				$result = $conn->query($qry);
				if($result == TRUE){
					echo "<script type = \"text/javascript\">
										alert(\"Disbursement Successfully. \");
										window.location = (\"Students.php\")
										</script>";
									} else{
										echo "<script type = \"text/javascript\">
										alert(\"Disbursement failed. Try Again\");
										</script>";
									}		
								}else{
									echo "<script type = \"text/javascript\">
										alert(\"Wrong transaction code. Try Again\");
										</script>";
									
								}
								
							}else{
								echo "<script type = \"text/javascript\">
										alert(\"Enter transaction code.\");
										</script>";
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

				
			
	
			
			
			
		
			
		
		
		

























