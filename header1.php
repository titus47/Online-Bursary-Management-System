<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo"> Kiminini Bursary Management</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['id']){
					?>
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="Apply.php">Apply</a></li>
							</ul>
					<a href="logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>