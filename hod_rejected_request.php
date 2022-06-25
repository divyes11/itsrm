<?php


include 'header.php';
 include 'connection.php';
 $department_id=$_SESSION["dip"];
 
 $sql="SELECT  * FROM tbl_connection JOIN registration  WHERE tbl_connection.email_id=registration.email   and registration.depId=$department_id and   approve=2";
 $result=mysqli_query($conn,$sql) or die("query failed");
 
?>

<html>
	<head>
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		 <style>

.tab
{
    border:3px solid black;
    margin-left:300px;
    margin-right: 358px;
	
}

.hed th
{
	
   margin-left:30px; 
   /* padding-left:50px; */
    
}

td
{
	border:3px solid black;
	padding-left:17px;
	padding-right:17px;
}

th
{
	border:3px solid black;
}

        </style>
    
    
        </head>
	
		<body>
		<h2>Requests</h2>
		
		<?php
		
		if($no=mysqli_num_rows($result)>0)
		{
			
		
		?>
        <div class='tab'>
			<table cellpadding="7px">
				<thead>
				<div class="hed">
				<th>Roll no</th>
				<th>Name</th>
				<th>Department</th>
				<th>Course</th>
				<th>Email</th>
				<th>Designation</th>
				<th>Connection type</th>
				<th>Choice</th>
				
                </div>
				
				</thead>
				<?php
				
				while($row=mysqli_fetch_assoc($result))
				{
					
				
				?>

				<tr>
					<td><?php echo $row['roll_no']; ?></td>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['dep_name']; ?></td>
					<td><?php echo $row['course']; ?></td>
					<td><?php echo $row['email_id']; ?></td>
					<td><?php echo $row['designation']; ?></td>
					<td><?php echo $row['connection_type']; ?></td>
					
					<form action="" method="post">
						 
								
					<td><input type="submit" name="APROVE" value="APROVE"></td>
					<td><input type="submit" name="REJECT" value="REJECT"></td>
					<td><input type="hidden" name="userid" value = "<?php echo $row['user_id']; ?>"></td>
									 
					</form>
				</tr>
				
				<?php
				
				}
				
		}
		else
		{

			?>

				
				<center><h1>No rejected requests</h1></center>
<?php
}
?>

			</table>
    </div>
			
		</body>

</html>

<?php 

    if(isset($_POST['APROVE'])){
		$userid = $_POST['userid'];
		$query = "UPDATE tbl_connection  SET approve =1  WHERE user_id ='$userid' ";
		if(mysqli_query($conn,$query)){
			echo'<script>
			 alert("Request Aproved");
			</script>';
		}

	}

	if(isset($_POST['REJECT'])){
		$userid = $_POST['userid'];
		$query = "UPDATE tbl_connection  SET approve ='2'  WHERE user_id ='$userid' ";
		if(mysqli_query($conn,$query)){
			echo'<script>
			 alert("Request Reject");
			</script>';
		}

	}
   
?>