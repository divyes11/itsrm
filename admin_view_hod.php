<?php

 include 'connection.php';
 
 $sql="SELECT `userID`, `depId`, `name`, `email`, `password`, `usertype` FROM `registration` WHERE usertype='hod';";
 
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
		<h2>Requests</h2>
		
		<?php
		
		if(mysqli_num_rows($result)>0);
		{
		
		?>
			<table cellpadding="7px">
				<thead>
				
				<th>Department id</th>
				<th>Name</th>
				<th>Email</th>
				<th>User type</th>
				<th>Choice</th>
				<th>Choice</th>
				
				
				</thead>
				<?php
				
				while($row=mysqli_fetch_assoc($result))
				{
				
				?>
				<tr>
					<td><?php echo $row['depId']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['usertype']; ?></td>
					<td><a href="#" >Update</a>	</td>
					<td><a href="#" >Delete</a> </td>
				</tr>
				
				<?php
				}
		}
			?>
			</table>
			
			
		</body>

</html>