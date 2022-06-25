<?php

 include 'connection.php';
 
 $sql="SELECT * FROM tbl_connection";
 
 $result=mysqli_query($conn,$sql) or die("query failed");
 
 
  
 
 
 
 
 

?>

<html>
	<head>
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<?php
	include 'test1.php';
	?>
		<body>
		<h2>requests</h2>
		
		<?php
		
		if(mysqli_num_rows($result)>0);
		{
		
		?>
			<table cellpadding="7px">
				<thead>
				
				<th>Name</th>
				<th>Email</th>
				<th>Designation</th>
				<th>Connection type</th>
				<th>Choice</th>
				<th>Choice</th>
				
				
				</thead>
				<?php
				
				while($row=mysqli_fetch_assoc($result))
				{
				
				?>
				<tr>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['email_id']; ?></td>
					<td><?php echo $row['designation']; ?></td>
					<td><?php echo $row['connection_type']; ?></td>
					<td><a href="#" >Accept</a>	</td>
					<td><a href="#" >Reject</a> </td>
				</tr>
				
				<?php
				}
		}
			?>
			</table>
			
			
		</body>

</html>