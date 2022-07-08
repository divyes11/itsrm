	<?php

include ('header.php');
$deparment_name=$_SESSION["depId"];
$email=$_SESSION['uid'];
$name=$_SESSION["name"];
$user_type=$_SESSION["type"];
	?>

    <head>
 <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <!-- <h1 class="app-page-title">Dashboard</h1> -->
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Internet application form</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
									

        <title>Internet form</title>
      
   
             <style>
            .tr,td,table
			{
               /* padding : 8px; */
			   border:1px solid black;
			   color:black;
			   font-weight:bold;
			   width:100%;

			}

          .td{
			width:100%;
		  }
			.iptemt
			{
				height:45px;
				/* border:3px solid green ; */
				width:100%;
				background-color:withe;
			}

			.iptemt:hover
			{
				
				border:3px solid rgb(68,114,148) ;
				/* width:380px; */
				
			}

			.image:hover
			{
				background-color:black;
			}

		

			.btn
			{
				border:2px solid green ;

				background-color:#5A7670;
			}
			.btn:hover
			{
				border:3px solid black ;

				
			}

			.rdb
			{
				/* height:15px; */
				border:2px solid green ;
				/* width:50px; */
				
			}

			





            </style>
 
</head>

	
    <body>
       
             <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" enctype="multipart/form-data" >
            <!-- <div id="leble" style="background-color:white;padding:15px;" class="form-control"><h4></h4></div>    -->
            
                    <table>
                        <!-- <div>
                            <tr>
                                <td><label for="userid" class="label">UserId:</label></td>
                                <td><input type="hiding" class="form-control" name="userid"><id/>
                            </tr>
                        </div> -->
                          
			    
                    <tr>
                        <td><label for="name">Full Name :</label></td>
                        <td><input class="iptemt" type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter full Name"></td>
                    </tr>
                



					
                    <tr>
                        <td><label for="designation">Designation :</label></td>
                        <td><input class="iptemt" type="text" name="designation" placeholder="Enter Designation"></td>
                    </tr>
                
					   
					   
					   
					   
                
                    <tr>
                        <td><label for="departmentname">Department Name :</label></td>
                        <td><input class="iptemt" type="text" name="departmentname" value="<?php echo $deparment_name; ?>" placeholder="Enter Department Name"></td>
                    </tr>
                
                       
				
                    <tr>
                        <td><label for="loc1">Office Location:</label></td>
                        <td><input class="rdb" type="radio" name="location" value="Ahmedabad" checked>Ahmedabad
						<input class="rdb" type="radio" name="location" value="Randheja" >Randheja
						<input class="rdb" type="radio" name="location" value="Sadara" >Sadara</td>
						
                    </tr>
                 
					 
                
                    <tr>
                        <td><label for="extentionno">Extention NO :</label></td>
                        <td><input class="iptemt" type="text" name="extentionno" placeholder="Extention NO"></td>
                    </tr>
                	
					 
                
                    <tr>
                        <td><label for="mobileno">Mobile NO :</label></td>
                        <td><input class="iptemt" type="text" name="mobileno" placeholder="Mobile NO"></td>
                    </tr>
                				
				
				
                    <tr>
                        <!-- <td><label for="emailid">Email Id :</label></td> -->
                        <td><input class="iptemt" type="hidden" name="emailid" value="<?php  echo $email;?>" placeholder="Enter Email Id"></td>
                    </tr>
                
				
				
                    <tr>
                        <td><label for="reason">Reason for internet need:</label></td>
                        <td><input class="iptemt" type="text" name="reason" placeholder="Reason"></td>
                    </tr>
                
				
                
                            <tr>
                                <td><label for="image">Photo:</label></td>
                                <td><input  class="image" type="file" class="form-control" name="image" placeholder="Upload Photo" reiqured></td>
                            </tr>
                
                       		
						
                            <!-- <tr> -->
                                <td><center><input class="btn" type="submit" id="rsubmit"  name="submit" value="SUBMIT"></center></td>
                            <!-- </tr> -->
                         
                    </table>
               
            </form>
          
   
        
    </body>
</html>



<?php

include 'connection.php';
// echo "before submit <br>";

				if (isset($_POST['submit']))
				{	
			
			
		$name =strtoupper($_POST['name']);
        $emailid =$_POST['emailid'];
        $designation =strtoupper($_POST['designation']);
        $officelocation =strtoupper($_POST['location']);
        $departmentname =strtoupper($_POST['departmentname']);
        $extentionno = $_POST['extentionno'];
        $mobileno = $_POST['mobileno'];
        $reason =strtoupper($_POST['reason']);
        $user_type=strtoupper($_SESSION["type"]);
        $deparment_name=$_SESSION["depId"];
				
				
									
									
									if(isset($_FILES['image']))
									{   
									
										
										 $file_name = $_FILES['image']['name'];
									 
										 $file_size = $_FILES['image']['size'];
								
										 $file_tmp = $_FILES['image']['tmp_name'];
										 $file_type = $_FILES['image']['type'];
										 
										 
										 
										 $file_ext=explode('.',$file_name);
										 $file_ext=end($file_ext);
										 #echo $file_ext;
										 #echo $file_size;
										 $extention=array("pdf","PDF","jpg");
										 
										 #if(in_array($file_ext,$extention)==true && $file_size < 18000)
										 if(in_array($file_ext,$extention)==true)
										 {
										
											  //echo "if run";
												   //$file_tmp;
										
													if(move_uploaded_file($file_tmp,"images/".$file_name))
													{
														echo "<script>alert(' Save image succesfully');</script>";
														 $file_tmp1 = "C:/xampp1/htdocs/itsrm/images/".$file_name;
														 
														 
														 $date=date('Y/m/d');
														 $sql="INSERT INTO tbl_connection(full_name, email_id, designation, location, extension_no, mobile_no, reason, profile_photo, connection_type, date, approve,user_type,dep_name)VALUES ('$name','$emailid','$designation','$officelocation','$extentionno','$mobileno','$reason',' $file_tmp1','internet','$date',0,'$user_type','$deparment_name');";
														 //echo $sql;
														
														
														
														if(mysqli_query($conn,$sql) or die("insert query fail"))
														{
															echo "<script>alert('Data save succesfully');</script>";
														}
														else
														{
															echo "<h1>Data not insted becouse of some reason</h1>";
														}
													}
										}
										else
										{
											 echo "<h1>Data not inseted</h1>";
										}
										 
											
									}
									else
									{
										echo "Coud not upload file";
									}
	

				}


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
	

         