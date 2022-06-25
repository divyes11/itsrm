	<?php

include ('header.php');
	?>
 <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Dashboard</h1>
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Wifi application form</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
									
<html>
    <head>
        <title>Wifi and internet form</title>
      
   
    </head>
	

	
    <body>
        <div id="header"></div>
        <div id="maindiv">
        <div id="formdiv">
            <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" >
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
                        <td><input class="iptemt" type="text" name="name" placeholder="Enter full Name"></td>
                    </tr>
                </div>



					<div>
                    <tr>
                        <td><label for="designation">Designation :</label></td>
                        <td><input class="iptemt" type="text" name="designation" placeholder="Enter Designation"></td>
                    </tr>
                </div>
					   
					   
					   
					   
                <div>
                    <tr>
                        <td><label for="departmentname">Department Name :</label></td>
                        <td><input class="iptemt" type="text" name="departmentname" placeholder="Enter Department Name"></td>
                    </tr>
                </div>
                       
					   
					   
					   
				<div>
                    <tr>
                        <td><label for="residentaddress">Resident Address :</label></td>
                        <td><input class="iptemt" type="text" name="residentaddress" placeholder="Resident Address"></td>
                    </tr>
                </div>
                        
						
						
						<div>
                    <tr>
                        <td><label for="mobileno">Mobile NO :</label></td>
                        <td><input class="iptemt" type="text" name="mobileno" placeholder="Mobile NO"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td><label for="emailid">Email Id :</label></td>
                        <td><input class="iptemt" type="email" name="emailid" placeholder="Enter Email Id"></td>
                    </tr>
                </div>
				
				
				<div>
                    <tr>
                        <td><label for="officelocation">Office Location :</label></td>
                        <td><input class="iptemt" type="text" name="officelocation" placeholder="Office Location"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td><label for="photo">Photo:</label></td>
                        <td><input type="file" name="photo" placeholder="Upload Photo"></td>
                    </tr>
                </div>
                
                <div>
                    <tr>
                        <td><label for="reason">Reason for internet need:</label></td>
                        <td><input class="iptemt" type="text" name="reason" placeholder="Reason"></td>
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
            <script>
            
	function validation()
		{
			let nmptr =/^[a-zA-Z]+$/;
			let pass =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

			let name = document.forms['registrationform']['name'].value;
			let email= document.forms['registrationform']['username'].value;
			let pa = document.forms['registrationform']['password'].value;
			let rb= document.forms['registrationform']['usertype'].value;
						
			if(name=="")
			{
				alert('name is empty');
				return false;
			}
			
			if(nmptr.test(name)==false){
				alert("Name must be characters");
				return(false);
			}
			
			if(email=="")
			{
				alert('email  is empty');
				return false;
			}
			
			if(pa=="")
			{
				alert('password is empty');
				return false;
			}
			
			if(pass.test(pa)==false){
				alert("password must be lowercase,uppercase,number,Minimum 8 characters");
                return false;
			}
			
			if(rb==false)
			{
				alert('plese select student or sevak ');
				return false;
			}
		}
			
	   </script>
        </div>
    </div>
    <div id="footerdiv"><div>
        
    </body>
</html>

<?php
    

    if(isset($_POST['submit'])){

        $depId = $_POST['deparmentId'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        $sq ="select email from registration where email= '{$username}'";

        $check_email = mysqli_query($conn,$sq);
        
        if(mysqli_num_rows($check_email) > 0){
            while($row = mysqli_fetch_assoc($check_email)){		
               if(($username == $row['email'])){
                   echo $username == $row['email'];
                echo "<script>alert('Email id is already exist')</script>";
                die();
               }
           }
       }
        
    $query = "insert into registration(depId,name,email,password,usertype) 
    values('$depId','$name','$username','$password','$usertype')";

     if(mysqli_query($conn,$query)){
         include('mail.php');
        //  header('location:index.php');
        //  echo "<script>
        //  window.location:"thank.php";
        //  </script>";
         //echo "<script>alert('Registration done.')</script>";
     }else{
        echo "<script>alert('Record Failed')</script>";
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
	