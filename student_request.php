<?php

include 'header.php';
include 'connection.php';
 $email=$_SESSION['uid'];
 $sql="SELECT * FROM tbl_connection  where email_id='$email'";
 
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

		<form id="rform" name="registrationform" onsubmit="return validation()" method="post" enctype="multipart/form-data">


	
		
		<?php
	
		$result=mysqli_query($conn,$sql) or die("query failed");
		if(mysqli_num_rows($result)>0)

		{

		?>
				<center>
			<h2>Request</h2>
	</center>
        <div class='tab'>

		<center>
			<table cellpadding="7px">
			
				<thead>
				<div class="hed">
				<th><center>Sr.no</center></th>
				<th><center>Name</center></th>
				<th><center>Email</center></th>
				
				<th><center>Connection type</center></th>
				<th><center>Status</center></th>
				<th><center>Details</center></th>
				
                </div>
				
				</thead>
		
				<?php


$num=0;

				while($row=mysqli_fetch_assoc($result))
				{
				
				
$num=$num+1;
if($row['approve']==0)
{
   $status="panding";
}
else if($row['approve']==1)
{
   $status="approved";
}
else if($row['approve']==2)
{
   $status="rejected";
}
else if($row['approve']==3)
{
   $status="use wifi";
}

?>

				<tr>
				<td><?php echo $num; ?></td>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['email_id']; ?></td>
					
					<td><center><?php echo $row['connection_type']; ?></center></td>
					<td><?php  echo $status;  ?>	   </td>       
				   
					<td>
						<?PHP
						if( $row['connection_type']=='wifi')
						{
							echo '<b> <a href="wifi_p.php">Click Here</a></b>';
						}
						// else if( $row['connection_type']=='internet')
						// {
						// 	echo '<b> <a href="wifi_p.php">Click Here</a></b>';
						// }

						?>

				  
					</td>
</tr>
					
		
				
				<?php
				}
		}

		else
		{
			echo "	<center><h2>No Request</h2></center>";
		
		}
			?>
			</table>
	</center>
    </div>
	
	
	</center>
	</form>


					
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