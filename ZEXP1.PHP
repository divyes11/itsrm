<?php

include ('header.php');
include ('connection.php');
 $email=$_SESSION['uid'];
 $sql="SELECT * FROM tbl_connection  where email_id='$email'";
 
 




	?>
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
    
 <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <!-- <h1 class="app-page-title">wifi application</h1> -->
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Wifi application form</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
									

        <title>studet requests</title>


      
   
 
</head>

	
    <body>
        <div id="maindiv">
        <div id="formdiv">
            <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" enctype="multipart/form-data" >
            <div id="leble" style="background-color:white;padding:15px;" class="form-control"><h4></h4></div>   
            <div>
                    <table>





		<center>
		<h2>request</h2>
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
				<th><center>name</center></th>
				<th><center>email</center></th>
				
				<th><center>connection type</center></th>
				<th><center>status</center></th>
				
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
			
	
                    




                        
                    
			   
                    
                    </table>
                </div>
            </form>
            
        </div>
    </div>
    <div id="footerdiv"><div>
        
    </body>
</html>






	


	
    

    
									
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
