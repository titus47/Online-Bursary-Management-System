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
<style type="text/css">
	.caption{
			background-color: #339213;
			height: 50px;
		}
</style>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 style="text-align: center;color: white;"><strong>To Complete Your Bursary Allocation</strong></h2>
				<h4  style="text-align: center;color: white;"><strong>Step 2:Please verify staff details here</strong></h4>
			</section>
	</section><!--  end hero section  -->
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						
						$sel = "SELECT * FROM apply WHERE id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li style="width: 190px;">
					<a href="don.php?id=<?php echo $rws['id'] ?>">
						<img class="thumb" src="Images/<?php echo $rws['file'];?>" width="200" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['farr'];?></span>
					<div class="property_details">
						<h2>
							<a href="don.php?id=<?php echo $rws['id'] ?>"><?php echo 'From:'.$rws['ward'];?></a>
						</h2>
						<h2>Name: <span class="property_size"><?php echo $rws['first']." ". $rws['last']?></span></h2>
					</div>
				</li>
				
				
				<form method="post" action="">
					<table border="1">
					
						<tr>
							<td><label><strong>ID Number:</strong></label></td>
							<td><input type="number" name="id_no" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><button type="submit" name="save">Confirm</button></td>
						</tr>
					</table>
				</form>
				<?php
				if(isset($_POST['id_no']))
					 {
					 	$id_no=$_POST['id_no'];
					 	$query=("SELECT * From staff where id_no='$id_no'");
					 	$result=mysqli_query($conn,$query);
					 	while($row=mysqli_fetch_assoc($result))
					 		{
					 			$db_id_no=$row['id_no'];
					 			if($id_no==$db_id_no)
					 				$confirmOK=TRUE;
					 			else
					 				$confirmOK=FALSE;

					 			if($confirmOK==TRUE)
					 			{
					 				echo "<script type = \"text/javascript\">
										alert(\"Confirmation Successful.Proceed to Pay \");
										window.location = (\"pay.php\")
										</script>";
					 				
					 			}else {
					 				echo "<script type = \"text/javascript\">
										alert(\"Confirmation Failed.Enter correct ID number \");
										window.location = (\"Students.php\")
										</script>";
					 				
					 				}
					 		}
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