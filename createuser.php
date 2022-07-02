
<?php
session_start();
include("connection.php");



?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>GVP</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app app-signup p-0">    	
 <?php
  
      extract($_POST);
      if(isset($submit))
      {
	       $rs=mysqli_query($conn,"select * from registration where email ='$loginid' and pass='$pass'");
		   $arr=mysqli_fetch_array($rs);
	       if(mysqli_num_rows($rs)<1)
		   {
		        $found="N";
		   }
	       else
	       {
		      $_SESSION["user_id"]=$arr['user_id'];						  
				//   $_SESSION["clientid"]= $arr['ID'];
				  $_SESSION["name"]= $arr['name'];
				//   $_SESSION["course"]= $arr['course'];
				//   $_SESSION["cname"]= $arr['cname'];
				  $_SESSION["is_admin"]= $arr['is_admin'];
				  
				 // header('Location:admin/dashboard.php');
				  
	       }      
      }
    ?>            
	  <script type='text/javascript' src='js/jquery-3.1.1.js'></script>
      <script type='text/javascript' src='js/jquery-1.10.2.js'></script>


    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>					
	<?php
                          $err='';
if(isset($_POST['Register']))
{
	date_default_timezone_set('Asia/Calcutta');
	$create_date=date('d/m/Y H:i:s');
	$fname=strtoupper($_POST['txtname']);	
	$txtemail=$_POST['txtemail'];
	$pass=$_POST['txtpassword'];
	
  $ltype=$_POST['ltype'];
  $dept=$_POST['deparment'];



 
if($ltype=='hod')
{
    $sql1 = mysqli_query($conn,"select * from registration where usertype='hod' and depId='$dept'");

	if (mysqli_num_rows($sql1)>0){
		echo "<script>
		
			alert('this deparment HOD already existed');
			
		</script>";
		// die('this deparment "HOD" already existed');

	}
}

	

	


	
	
	
			$str=mysqli_query($conn,"Select * from registration where email='$txtemail'");
			if (mysqli_num_rows($str)>0)
			{
			echo "<h4><font color=red>Error: - This email is Already exit. - ".$txtemail." <br/>Try another emailid.</font></h4>";	
			}
			else
			{       
				$query="insert into registration(`depId`, `name`, `email`, `password`, `usertype`) values('$dept','$fname','$txtemail','$pass','$ltype')";
				mysqli_query($conn,$query) or die("Could Not Perform the Query");
			
				include ('mail.php');
				echo "<script type=\"text/javascript\">
					alert(\"Registration done successfully.\");
					window.location = \"home.php\";
					</script>";
			}
		
	}

	
	
    
	

?>
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" action="#" name="validationform" onsubmit="return validation()" method="post">     
						 <div class="email mb-3">
								User Type
								 <select name="ltype" id="ltype" style='color:black;'class="form-control signup-name"  onchange="change_s()" required>
          <option value="">Select</option>		
		      <option value="student">Student</option>
		      <option value="sevak">Sevak</option>
			  <option value="hod">HOD</option>
		      			 
   </select> 
							</div>
							<div class="email mb-3">
								Deparment :
	<select  name="deparment" id="deparment" style='color:black;' class="form-control signup-name" required>
     <option  value="select">Select</option>
		   <?php
			 	$mquery="SELECT distinct dep_name,dep_id FROM tbl_department order by dep_name   ASC";
				//echo $mquery;
				$getm=mysqli_query($conn,$mquery);
				//$r=mysqli_fetch_array($getm);
				//echo $r['department_name'];
				while($r=mysqli_fetch_array($getm))
				{
		   			
					echo "<option value=".$r['dep_id'].">".$r["dep_name"]."</option>";    
			} 
				?>
		   </select> 
							
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Name</label>
								<input type="text"  id="txtname" name="txtname" class="form-control signup-name" placeholder="Fullname" required> 
								
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Email</label>
								<input type="text" class="form-control signup-email" name="txtemail" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="Email ID" required="required">		
								
							</div>

							
						
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								
								<input type="password"  id="txtpassword" name="txtpassword" class="form-control signup-password" placeholder="Password" required>
							</div>
							
							
							<div class="text-center">
							<input type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" value="Register" name="Register"/>
								
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="home.php" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			  	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->

    
	
	<script>

			function validation()
				{
					let nmptr =/^[a-zA-Z]+$/;
					let pass =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
		
					let name = document.forms['validationform']['txtname'].value;
					let email= document.forms['validationform']['txtemail'].value;
					let pa = document.forms['validationform']['txtpassword'].value;
					// let rb= document.forms['validationform']['usertype'].value;
								
						
					if(nmptr.test(name)==false){
						alert("Name must be characters");
						return(false);
					}
					
						
					if(pass.test(pa)==false){
						alert("password must be lowercase,uppercase,number,Minimum 8 characters");
						return false;
					}
					
					// if(rb==false)
					// {
					// 	alert('plese select student or sevak ');
					// 	return false;
					// }
				}
					
			   </script>


</body>
</html> 

