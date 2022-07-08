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

	
      
   
 
</head>

	
    
<body>
    <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" enctype="multipart/form-data" >

    <table>
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
                else
                {
                ?>


                <?php
                }
                ?>


                    

    </table>
</body>

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
										 $extention=array("png","PNG","jpg","JPG");
										 
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
