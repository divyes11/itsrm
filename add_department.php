<?php

include ('header.php');
include ('connection.php');



$sql="SELECT * FROM `tbl_department`";
$result=mysqli_query($conn,$sql) or die("query failed")

?>

<head>
 <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <!-- <h1 class="app-page-title">wifi application</h1> -->
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Add Department</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
									

        <title>add department</title>
        <style>

.tab
{
    /* border:3px solid black;
    margin-left:470px;
    margin-right: 470px;
	 */
	/* padding-right:1%; */
	/* margin-left:1%;  */

}

.hed th
{
	
   margin-left:30px; 
   padding-left:50px;
    
}

td
{
	border:3px solid black;
	padding-left:25px;
	padding-right:25px;
}

th
{
	border:3px solid black;
}

        </style>
   
 
</head>

	
    <body>
        <!-- <div id="maindiv"> -->
        <!-- <div id="formdiv"> -->
            <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" enctype="multipart/form-data" >
            <!-- <div id="leble" style="background-color:white;padding:15px;" class="form-control"><h4></h4></div>    -->
            <!-- <div> -->
                    <table>
                        <!-- <div>
                            <tr>
                                <td><label for="userid" class="label">UserId:</label></td>
                                <td><input type="hiding" class="form-control" name="userid"><id/>
                            </tr>
                        </div> -->
                        
                    
			   
                
               

			
                    <tr>
                        <td><B><label for="department_name">  Deparment name :</label></B></td>
                        <td><input  class="iptemt" type="TEXT"  name="deparment_name"   placeholder="Enter department Name"></td>
                    
                
                            
                                <td><center><input class="btn" type="submit" id="rsubmit"  name="submit" value="SUBMIT"></center></td>
                            </tr>
			

				
							<?php 
                            
                            if($row=mysqli_num_rows($result)>0)
                            {
                            
                            ?>
<h2> All Departments</h2>
        <div class='tab'>
			<table cellpadding="7px">
				<thead>
				<div class="hed">
				<th><center>Department ID</center></th>	
				<th><center>Department Name</center></th>
				
				
                </div>
				
				</thead>
				<?php
				
				while($row=mysqli_fetch_assoc($result))
				{
									
				?>

				<tr>
					<td><?php echo $row['dep_id']; ?></td>
					<td><?php echo $row['dep_name']; ?></td>
			
					

								 
					
				</tr>
				



                            <?php
 }
}
else
{
    echo ' <h3 class="mb-3">Delete Department</h3>';
}

                            ?>

                   
                
				
                   
                
                        
						
				
                           
                         
                    </table>
                <!-- </div> -->
            </form>
            
        <!-- </div> -->
    <!-- </div> -->
    <!-- <div id="footerdiv"><div> -->
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






	
// $row=mysqli_fetch_assoc($result);

	
    

    if(isset($_POST['submit']))
	{
        $department_name =$_POST['deparment_name'];

        $qurey="INSERT INTO `tbl_department`( `dep_name`) VALUES ('$department_name')";
        

        if($res=mysqli_query($conn,$qurey))
        {
            echo "<script>alert('department  save succesfully');</script>";
        }



		

       

       
	}
	
?>

