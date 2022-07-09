<?php

session_start();
session_unset();
session_destroy();




ob_start();
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Gujarat Vidyapith</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
  
    <!-- <link rel="shortcut icon" href="images/gvp.jpg" /> -->
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app app-login p-0">   
 <?php
  
  
    //   extract($_POST);
      if(isset($_POST['login']))
      {   
		
		 $userID=$_POST['loginid'];
		 $pass=$_POST['pass'];
		
		  //echo $loginid;
	       $rs=mysqli_query($conn,"select * from registration JOIN tbl_department where email='$userID' and password='$pass' and registration.depId=tbl_department.dep_id");
		   //echo "select * from registration where email='$userID' and password='$pass'";
		   $arr=mysqli_fetch_array($rs);
		   //$arr["email"];
	       if(mysqli_num_rows($rs)<1)
		   {
		        //$found="N";
				echo "<font face=\"Verdana\" color=\"#EA2323\">Invalid Username or Password / Inactive users.</font>";
		   }
	       else
	       {
                  $_SESSION["login"]=$arr['email'];	
				   $_SESSION["branch"]=$arr['branch'];						  
                   $_SESSION["type"]= $arr['usertype'];
                  $_SESSION["name"]= $arr['name'];
                   $_SESSION["uid"]= $userID;
                   $_SESSION["depId"]= $arr['dep_name'];
                  $_SESSION["dip"]=$arr['depId'];
				  $_SESSION["pass"]=$arr['password'];
				  echo"<h1>";
		  echo $userID=$_POST['loginid'];
		  echo $pass=$_POST['pass'];
		  echo"</h1>";

		  if( $_SESSION["type"]=='student')
		  {
		  header('Location:wifi_form.php');
		  }
		  elseif($_SESSION["type"]=='hod')
		  {
			  
			header('Location:dashboard.php'); 
			  
		  }
		  else if($_SESSION["type"]=='admin')
		  {
			header('Location:com_deprment_requests.php'); 

		  }
		  else if($_SESSION["type"]=='sevak')
		  {
			header('Location:wifi_form.php'); 

		  }
          		  				  
	       }      
      }
    ?> 	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html">
					<img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in to Portal</h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" action="" name="loginform" method="post">         
							<div class="email mb-3">
							<?php
		  if(isset($found))
		  {
		  	echo "<font face=\"Verdana\" color=\"#EA2323\">Invalid Username or Password / Inactive users.</font>";
		  }
		  ?>

								<label class="sr-only" for="signin-email">Email</label>
								 <input type="text" style='color:black;' class="form-control signin-email" id="loginid" name="loginid" placeholder="Username" maxlength="80" autofocus="true" required>
											</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								
								<input type="password" style='color:black;' class="form-control signin-password" id="pass" name="pass" placeholder="Password" required>
								<!-- <input type="submit"class="btn app-btn-primary w-100 theme-btn mx-auto" name="login"> -->

								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="forgotpassword.php">Forgot password?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
									<button type="submit" name="login" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div> 
						</form>
						
						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="createuser.php" >here</a>.</div>
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			    
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    Welcome to this portal!!
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

