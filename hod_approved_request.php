<?php


include 'header.php';
 include 'connection.php';
 $department_id=$_SESSION["dip"];
 
 $sql="SELECT  * FROM tbl_connection JOIN registration  WHERE tbl_connection.email_id=registration.email   and registration.depId=$department_id and   approve=1";
 $result=mysqli_query($conn,$sql) or die("query failed");

//  $sql2="SELECT * FROM tbl_department WHERE dep_id=$department_id";
//  $result2=mysqli_query($conn,$sql2) or die("query failed");
 
 

 
 
  
 
 
 
 
 
 
 
 

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
	padding-left:50px;
	padding-right:50px;
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
		<h2> Approved Requests</h2>
		
		<?php
		
		if($no=mysqli_num_rows($result)>0)
		{
			
		
		?>
        <div class='tab'>
			<table cellpadding="7px">
				<thead>
				<div class="hed">
				<th><center>User type</center></th>	
				<th><center>Roll no</center></th>
				<th><center>Name</center></th>
				<th><center>Department</center></th>
				<th><center>Course</center></th>
				<th><center>Email</center></th>
				<th><center>Cesignation</center></th>
				<th><center>Connection type</center></th>
				<th><center>Choice</center></th>
				
                </div>
				
				</thead>
				<?php
				
				while($row=mysqli_fetch_assoc($result))
				{
									
				?>

				<tr>
					<td><?php echo $row['user_type']; ?></td>
					<td><?php echo $row['roll_no']; ?></td>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['dep_name']; ?></td>
					<td><?php echo $row['course']; ?></td>
					<td><?php echo $row['email_id']; ?></td>
					<td><?php echo $row['designation']; ?></td>
					<td><?php echo $row['connection_type']; ?></td>
					
					<form action="" method="post">
						 
								
					<td><input type="submit" name="UNDO" value="UNDO"> </td>
				   
					
					<input type="hidden" name="userid" value = "<?php echo $row['user_id']; ?>">
								 
					</form>
				</tr>
				
				<?php
				
				}
				
		}
		else
		{


			?>

				
				<center><h1>No Approved requests</h1></center>

<?php
}
?>



			</table>
    </div>
			
		</body>

</html>

<?php 

    if(isset($_POST['UNDO'])){
		$userid = $_POST['userid'];
		$query = "UPDATE tbl_connection  SET approve ='0'  WHERE user_id ='$userid' ";
		if(mysqli_query($conn,$query)){
			echo'<script>
			 alert("Request is pannding");
			</script>';
		}

	}

	


?>