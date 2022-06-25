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

		<center>
		<h2>Request</h2>
</center>
		
		<?php
		$result=mysqli_query($conn,$sql) or die("query failed");
		if(mysqli_num_rows($result)>0);

		{

		?>
		
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
				
                </div>
				
				</thead>
		
				<?php


$num=0;

				while($row=mysqli_fetch_assoc($result))
				{
				
				
$num=$num+1;
if($row['approve']==0)
{
   $status="pandining";
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
					<td><?php  echo $status;  ?>	             </td>
					
				</tr>
				
				<?php
				}
		}
			?>
			</table>
	</center>
    </div>
	
	
	</center>
			
		</body>

</html>