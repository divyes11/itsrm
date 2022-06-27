<?php

include ('header.php');
include ('connection.php');
$deparment_name=$_SESSION["depId"];
$email=$_SESSION['uid'];
$name=$_SESSION["name"];
$user_type=$_SESSION["type"];

?>


 <div class="app-wrapper">
	
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <!-- <h1 class="app-page-title">Create Email</h1> -->
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Create Email</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
								
        <title>Create email form</title>

    <body>
        <div id="maindiv">
        <div id="formdiv">
            <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" enctype="multipart/form-data" >
            <div id="leble" style="background-color:white;padding:15px;" class="form-control"><h4></h4></div>   
            <div>
                    <table>
                        <!-- <div>
                            <tr>
                                <td><label for="userid" class="label">UserId:</label></td>
                                <td><input type="hiding" class="form-control" name="userid"><id/>
                            </tr>
                        </div> -->
                        
                    
			    <div>
                    <tr>
                        <td><label for="name">Full Name :</label></td>
                        <td><input class="iptemt" type="text"  name="name"  value="<?php echo $name; ?>" placeholder="Enter full Name" required></td>
                    </tr>
                </div>

				<div>
                    <tr>
                        <!-- <td><label for="department_name">deparment name</label></td> -->
                        <td><input  class="iptemt" type="hidden"  name="deparment_name"  value="<?php echo $deparment_name; ?>" placeholder="Enter department Name" required></td>
                    </tr>
                </div>

					
				<div>
                    <tr>
                        <!-- <td><label for="user_type">user type :</label></td> -->
                        <td><input class="iptemt" type="hidden" name="user_type" placeholder="Enter user type" required></td>
                    </tr>
                </div>
					   
					   
                <div>
                    <tr>
                        <td><label for="pemailid">Preferred Email Address:</label></td>
                        <td><input class="iptemt" type="email" name="pemailid" placeholder="Enter Email Id" value="<?php  echo '@gmail.com';?>" required></td>
                    </tr>
                </div>   

                        
						
						
				
                <div>
                    <tr>
                        <td><label for="emailid">given Email Id :</label></td>
                        <td><input class="iptemt" type="email" name="emailid" placeholder="Enter Email Id" value="<?php  echo $email;?>" required></td>
                    </tr>
                </div>

	   
                <div>
                    <tr>
                        <td><label for="pemailid">AlterNet Email Address:</label></td>
                        <td><input class="iptemt" type="email" name="Aemailid" placeholder="Enter Email Id" value="<?php  echo '@gmail.com';?>" ></td>
                    </tr>
                </div> 
						
						<div>
                            <tr>
                                <td><input type="submit" id="rsubmit"  name="submit" value="SUBMIT"></td>
                            </tr>
                         </div>
                    </table>
                </div>
            </form>
            
        </div>
    </div>
        
    </body>
</html>

<?php
    

    if(isset($_POST['submit']))
	{

        $dep_name = $_POST['deparment_name'];
        $name = $_POST['name'];
        // $designation = $_POST['designation'];
       
        $emailid = $_POST['emailid'];
        $preffed_email = $_POST['pemailid'];
        $alternet_email = $_POST['Aemailid'];

        
        // $date = $_POST['date'];
        // $mac_address = $_POST['mac_address'];
		

        
		//this is starting part
		
									   
									
										
								
								
										 #echo "<pre>";
										#print_r($_FILES['image']);
										#echo "</pre>";
										
										
										 
										 
									
										 
										 
													
														 
														 $date=date('Y/m/d');
														
														
            $sq ="INSERT INTO `tbl_connection`(`full_name`, `email_id`, `connection_type`, `date`, `approve`,`dep_name`,`user_type`,`preffred_email`,`alternet_email`) VALUES('$name','$emailid','email','$date','0','$dep_name','$user_type','$preffed_email','$alternet_email')";
														
														
														 //echo $sql;
														
														
														
														if(mysqli_query($conn,$sq) or die("insert query fail"))
														{
															echo "<script>alert('data save succesfully');</script>";
														}
														else
														{
															echo "<h1>data not insted becouse of some reason</h1>";
														}
    }

										 

	
		
		//this is ending part
		
		
		
		
		
		
		
		
		
		

   
        
        

     
    

?>

									
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
	<?php
	
	
	
	
	
	
	?>