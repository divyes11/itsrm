	<?php

include ('header.php');
include ('connection.php');
$deparment_name=$_SESSION["depId"];
$email=$_SESSION['uid'];
$name=$_SESSION["name"];
$user_type=$_SESSION["type"];



	?>
	<head>
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
							        
									

        <title>Wifi Form</title>

		<style>
            .tr,td,table
			{
               /* padding : 8px; */
			   border:1px solid black;
			   color:black;
			   font-weight:bold;
			   width:100%;

			}
			.iptemt
			{
				/* height:100%; */
				/* border:3px solid green ; */
				width:100%;
				background-color:withe;
			}

			.iptemt:hover
			{
				
				border:3px solid  rgb(68,114,148) ;
				/* width:380p/x; */
				
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
				border:5px solid black ;

				
			}

			.rdb
			{
				/* height:15px; */
				border:5px solid green ;
				/* width:50px; */
				
			}

			.rdb:hover
			{
				/* height:25px; */
				border:30px solid green ;
				/* width:50px; */
				
			}
            #rform{
				border: 1px solid black;
				
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
                        <td><label for="name">Full Name :</label></td>
                        <td><input class="iptemt" type="text"  name="name"  value="<?php echo $name; ?>" placeholder="Enter full Name" required></td>
                    </tr>
			
                    <tr>
                        <!-- <td><label for="department_name">Deparment name</label></td> -->
                        <td><input  class="iptemt" type="hidden"  name="deparment_name"  value="<?php echo $deparment_name; ?>" placeholder="Enter department Name" required></td>
                    </tr>
            
				<?php
				
				if($user_type=='sevak' or  $user_type=='hod')
				{

				?>

				
                    <tr>
                        <td><label for="designation">Designation :</label></td>
                        <td><input class="iptemt" type="text" name="designation" placeholder="Enter Designation" required></td>
                    </tr>
                

					
				
                    <tr>
                        <!-- <td><label for="user_type">User type :</label></td> -->
                        <td><input class="iptemt" type="hidden" name="user_type" placeholder="Enter user type" required></td>
                    </tr>
                

					   
					   <?php
				}  
				else{
					   ?>

				
                    <tr>
                        <td><label for="course">Course :</label></td>
                       
					
				<td>
					<select  name="course" id="course" style='color:black;' class="form-control signup-name" required>
    				 <option  value="select">Select</option>
		   <?php
			 	$mquery="SELECT  `course`, `cname` FROM `tbl_course`";
				//echo $mquery;
				$getm=mysqli_query($conn,$mquery);
				//$r=mysqli_fetch_array($getm);
				//echo $r['department_name'];
				while($r=mysqli_fetch_array($getm))
				{
		   			
					echo "<option value=".$r['course'].">".$r["course"]."</option>";    
			} 
				?>
		   </select> 
		  
                    </tr>
					</td>

                    <tr>
                        <td><label for="designation">Roll no :</label></td>
                        <td><input class="iptemt" type="text" name="roll_no" placeholder="Enter roll_no" max="8" required></td>
                    </tr>
                

				<?php
				}
				?>
					
                    <tr>
                        <td><label for="residentaddress">Resident Address :</label></td>
                        <td><input class="iptemt" type="text" name="residentaddress" placeholder="Resident Address" required></td>
                    </tr>
                		
                    <tr>
                        <td><label for="mobileno">Mobile NO :</label></td>
                        <td><input class="iptemt" type="text" name="mobileno" placeholder="Mobile NO" required></td>
                    </tr>
                
                
                    <tr>
                        <!-- <td><label for="emailid">Email Id :</label></td> -->
                        <td><input class="iptemt" type="hidden" name="emailid" placeholder="Enter Email Id" value="<?php  echo $email;?>" required></td>
                    </tr>
                
                    <tr>
                        <td><label for="location">Office Location:</label></td>
                        <td>
						<label>	<input class="rdb" type="radio" name="location" value="Ahmedabad" required>Ahmedabad </label>
						<label> <input class="rdb" type="radio" name="location" value="Randheja" required>Randheja</label>
						<label> <input class="rdb" type="radio" name="location" value="Sadara" required>Sadara</td></label>
						
                    </tr>
                
                    <tr>
                        <td><label for="mac_address">Mac Address :</label></td>
                        <td><input class="iptemt" type="text" name="mac_address" placeholder="mac address" required></td>
						<td><a href="find_mac_help.php" target='_blank'><input class="btn" type="button" name="help_mac" value="Help"></td>

                    </tr>
                
                            <tr>
                                <td><label for="photo">Photo:</label></td>
                                <td><input class ="image" type="file" class="form-control" name="image" placeholder="Upload Photo" required></td>
                            </tr>
                	
						
						
						
                            <tr>
                                <td><center><input class="btn" type="submit" id="rsubmit"  name="submit" value="SUBMIT"></center></td>
                            </tr>
                         
                    </table>
                <!-- </div> -->
            </form>
            
			
            <script>
            
				function validation()
					{
						let nmptr =/^[a-zA-Z]+$/;
						let pass =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

						let name = document.forms['registrationform']['name'].value;
						let email= document.forms['registrationform']['username'].value;
						let roll_no = document.forms['registrationform']['roll_no'].value;
									
						if(nmptr.test(name)==false){
							alert("Name must be characters");
							return(false);
						}
						
						if(name.lenght<=40){
							alert("Name must be characters less than 41");
							return(false);
						}
					
						if(roll_no.lenght<=9)
						{
							alert('maximum lenght of rollno is 8');
							return false;
						}
					}
						
				</script>


    </body>
</html>

<?php

$qurey1="SELECT * FROM tbl_connection where email_id='$email' ";
$res=mysqli_query($conn,$qurey1);


    if(isset($_POST['submit']))
	{


		if($r=mysqli_num_rows($res)>0)
		{
		echo "<h1>your request is already submmited</h1>";
		}
		else
		{
		

        $dep_name =strtoupper($_POST['deparment_name']);
        $name = strtoupper($_POST['name']);


		if($user_type=='sevak' or  $user_type=='hod')
		{
			$designation =strtoupper($_POST['designation']);
		}
		else
		{
			
		$course=strtoupper($_POST['course']);
		$roll_no=$_POST['roll_no'];
		

		}

       

        $residentaddress =strtoupper($_POST['residentaddress']);
        $mobileno =$_POST['mobileno'];
        $emailid =$_POST['emailid'];
        $location =strtoupper($_POST['location']);
        // $date = $_POST['date'];
        $mac_address = $_POST['mac_address'];
		// $end_date1=
		

        
		//this is starting part
		
									if(isset($_FILES['image']))
									{   
									
										
								
								
										 #echo "<pre>";
										#print_r($_FILES['image']);
										#echo "</pre>";
										
										 $file_name = $_FILES['image']['name'];
									 
										 $file_size = $_FILES['image']['size'];
								
										 $file_tmp = $_FILES['image']['tmp_name'];
										 $file_type = $_FILES['image']['type'];
										 
										 
										 
										 $file_ext=explode('.',$file_name);
										 $file_ext=end($file_ext);
										 #echo $file_ext;
										 #echo $file_size;
										 $extention=array("png","PNG");
										 
										 #if(in_array($file_ext,$extention)==true && $file_size < 18000)
										 if(in_array($file_ext,$extention)==true)
										 {
										
											  //echo "if run";
												   //$file_tmp;
										
													if(move_uploaded_file($file_tmp,"images/".$file_name))
													{
														echo "<script>alert(' save image succesfully');</script>";
														 $file_tmp1 = "images/".$file_name;
														 
														 
														 
														 	 $year=date('Y/');
															 $day=date('d');
															 $manth=date('m');


															 $year2=date('Y')+2;
															

															 $end_date=$year2.'/'.$manth.'/'.$day;

														 

														 $date=date('Y/m/d');
														 if($user_type=='sevak'or $user_type=='hod')
														 {
															$sq ="INSERT INTO `tbl_connection`(`full_name`, `email_id`, `location`,`residentAddress`, `mobile_no`,`connection_type`, `date`, `approve`, `mac_address`,`profile_photo`,`designation`,`dep_name`,`user_type`) VALUES('$name','$emailid','$location','$residentaddress','$mobileno','wifi','$date','0','$mac_address','$file_tmp1','$designation','$dep_name','$user_type')";
														 }
														 else
														 {
															$sq ="INSERT INTO `tbl_connection`(`full_name`, `email_id`,`location`, `residentAddress`, `mobile_no`,`connection_type`, `date`, `approve`, `mac_address`,`profile_photo`,`course`,`roll_no`,`dep_name`,`user_type`,`end_date`) VALUES('$name','$emailid','$location','$residentaddress','$mobileno','wifi','$date','0','$mac_address','$file_tmp1','$course','$roll_no','$dep_name','$user_type','$end_date')";
														 }
														
														 //echo $sql;
														
														
														
														if(mysqli_query($conn,$sq) or die("insert query fail"))
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
											 echo "<h1>Image not inseted</h1>";
										}
										 
											
									}
									else
									{
										echo "Coud not upload file";
									}
									
		//this is ending part	
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
