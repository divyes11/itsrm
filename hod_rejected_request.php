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
		/* border:3px solid black;
		margin-left:470px;
		margin-right: 470px;
		*/
		/* padding-right:1%; */
		margin-right:30%; 

	}




	.hed th
	{
		
	margin-left:30px; 
	padding-left:50px;
		
	}

	td
	{
		border:3px solid black;
		/* padding-left:5%; */
		/* padding-right:50%; */
	}

	th
	{
		border:3px solid black;
	} 

        </style>
    
    
        </head>
	
		<body>

		<div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <!-- <h1 class="app-page-title">wifi application</h1> -->
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3"></h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
		
		
		<?php
		
		if($no=mysqli_num_rows($result)>0)
		{
			
		
		?>
		<h2><center style="padding-left:30%;">Rejected Requests</center></h2>
        <div class='tab'>
			<table id="table" cellpadding="2px">
				<thead>
				<div class="hed">
				<th><center>User type</center></th>	
				<th><center>Roll no</center></th>
				<th><center>Name</center></th>
				<th><center>Department</center></th>
				<th><center>Course</center></th>
				<!-- <th><center>Email</center></th> -->
				<th><center>Designation</center></th>
				<th><center>Connection type</center></th>
				<th><center>Detail</center></th>
				<th><center>Choice</center></th>
				
                </div>
				
				</thead>
				<?php
				
				while($row=mysqli_fetch_assoc($result))
				{
					
				
				?>

<tr>
					<td><?php echo $row['user_type']; ?></td>
					<!-- for roll no start -->

					<?php 
					if( $row['roll_no']==0)
					{
							echo '<td>' ;
							echo '---';
							echo '</td>';
					}
					else
					{
					echo "<td>";
					echo  $row['roll_no'];
					echo "</td>";
					}
					?>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['dep_name']; ?></td>
					<!-- for course start -->

					<?php 
					if($row['course']==null)
					{
							echo '<td>' ;
							echo '---';
							echo '</td>';
					}
					else
					{
					echo "<td>";
					echo $row['course'];
					echo "</td>";
					}
					?>

					<!-- for course end -->
					<!-- <td><?php// echo $row['email_id']; ?></td> -->
					<!-- for designation start -->

					<?php 
					if($row['designation']==null)
					{
							echo '<td>' ;
							echo '---';
							echo '</td>';
					}
					else
					{
					echo "<td>";
					echo $row['designation'];
					echo "</td>";
					}
					?>

					<!-- for designation end -->

					<td><?php echo $row['connection_type']; ?></td>
					
					
					
					<?php
					if($row['connection_type']=='wifi'){
						?>

						<td><a href="details.php?email=<?php echo $row['email_id'];?>"><b><input type="button" name="detail" value="detail"></a></td>
						
						<?php
					}				
				?>

<?php
					if($row['connection_type']=='internet'){
						?>

						<td><a href="internet_p.php?email=<?php echo $row['email_id'];?>"><b><input type="button" name="detail" value="detail"></a></td>
						
						<?php
					}				
				?>

<?php
					if($row['connection_type']=='email'){
						?>

						<td><a href="exp2.php?email=<?php echo $row['email_id'];?>"><b><input type="button" name="detail" value="detail"></a></td>
						
						<?php
					}				
				?>
					<form action="" method="post">
						 
								
					<td>
					<!-- <input type="submit" name="APROVE" value="APROVE"> -->
					<!-- <input type="submit" name="REJECT" value="REJECT"> -->
				    <input type="submit" name="UNDO" value="UNDO"></td>
					<input type="hidden" name="userid" value = "<?php echo $row['user_id']; ?>">
									 
					</form>
				</tr>
				
				<?php
				
				}
				
		}
		else
		{

			?>

				
<center style="padding-left:30%;"><h1>No Rejected Request</h1></center>
<?php
}
?>

			</table>
    </div>

	</div>
	
	<div>
									</div>
							    </div><!--//col-->
							    <div class="col-12 col-lg-3">
						
							    </div><!--//col-->
						    </div><!--//row-->
						    
					    </div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->
				    
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
			
		</body>

</html>

<?php 

    // if(isset($_POST['APROVE'])){
	// 	$userid = $_POST['userid'];
	// 	$query = "UPDATE tbl_connection  SET approve =1  WHERE user_id ='$userid' ";
	// 	if(mysqli_query($conn,$query)){
	// 		echo'<script>
	// 		 alert("Request Aproved");
	// 		</script>';
	// 	}

	// }

	// if(isset($_POST['REJECT'])){
	// 	$userid = $_POST['userid'];
	// 	$query = "UPDATE tbl_connection  SET approve ='2'  WHERE user_id ='$userid' ";
	// 	if(mysqli_query($conn,$query)){
	// 		echo'<script>
	// 		 alert("Request Reject");
	// 		</script>';
	// 	}
	// }
		if(isset($_POST['UNDO'])){
			$userid = $_POST['userid'];
			$query = "UPDATE tbl_connection  SET approve ='0'  WHERE user_id ='$userid' ";
			if(mysqli_query($conn,$query)){
				echo'<script>
				 alert("Request UNDO");
				</script>';
			}
	

	}
   
?>