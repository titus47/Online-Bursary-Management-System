<html>
<head>
<title>Sponsorship Applicant Form</title>
</head>
<h2>Applicants</h2>
<body bgcolor="White">
<?php
	include "dbconn.php";
?>


<form action="" method="post">
  	<table cellpadding="5" cellspacing="2" border="1" align="center" class="table" id="example">
		<thead>		
		        <tr>			        
                	
                    
                    <th> First Name</th>
                    <th>Last Name</th>
					<th>Gender</th>
					<th>Age </th>
					<th>Contact </th>
					<th>email </th>
					<th>Address</th>
					<th>Town </th>
					<th>Subcounty </th>
					<th>ward</th>
					<th>Village</th>
					<th>School name </th>
					<th>Arrears</th>
					<th>School Level </th>
					<th>Image </th>
					<th>Delete </th>
					
                   		
                    				
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
include "dbconn.php";
	
$query = mysql_query("select * from apply ")or die(mysql_error());
		while($row = mysql_fetch_array($query)){
		
	
		?>
								
		<tr>
		     	
		    <td><?php echo $row['first']; ?></td>
			<td><?php echo $row['last']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['Age']; ?></td>
			<td><?php echo $row['Telephone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['Address']; ?></td>
			<td><?php echo $row['Town']; ?></td>
			<td><?php echo $row['subcounty']; ?></td>
			<td><?php echo $row['Ward']; ?></td>
			<td><?php echo $row['Village']; ?></td>
			<td><?php echo $row['S_Name']; ?></td>
			<td><?php echo $row['Arrears']; ?></td>
			<td><?php echo $row['School']; ?></td>
			<td><?php echo $row['Photograph']; ?></td>
           <td><a href="javascript:sureToDelete(<?php echo $row['Applicant_id'];?>)">Delete</a></td>
		  
			
            </tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
<input type="button" value="Print this page" onclick="window.print()">
</form>
</body>
</html>
	