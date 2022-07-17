<?php

include ('header.php');
include ('connection.php');

$email=$_GET['email'];
$e_mail=$_GET['email'];









	?>
 <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title"></h1>
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">for internet </h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
									

        <title>internet Form</title>
      
   
 
	

<html>	
    <body>
           <div id="mdiv">
                <form action="" method="post">
                    <table>
                    <div>
                            <tr>
                                <td><label for="uplink" class="label">Uplink :</label></td>
                                <td><input type="text"   name="uplink" required><input type="hidden"   name="helpmac" value="Help" required></td>
                            </tr>
                    </div>
                    <div>
                            <tr>
                                <td><label for="ip" class="label">IP Address:</label></td>
                                <td><input type="text"  name="ip" required><input type="hidden"   name="helpIp" value="Help" required></td>
                            </tr>
                       </div>

                       <div>
                            <tr>
                                <td><label for="username" class="label">Username:</label></td>
                                <td><input type="text"  name="username"  required></td> 
                                
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td><label for="password" class="label">Password:</label></td>
                                <td><input type="password"   name="password" required></td>
                            </tr>
                       </div>
                       
        
                            <tr>
                                <td><input type="submit" id="rsubmit"  name="submit" value="SUBMIT"></td>
                            </tr>
                         </div>
                    </table>
                </form>
           </div>
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



        <?php


if(isset($_POST['submit']))
{   


    

    $uplink=$_POST['uplink'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $password=$_POST['password'];


   $sq ="UPDATE `tbl_connection` SET `ip_address`='$ip',`username`='$username',`password`='$password',`uplink`='$uplink',`approve`=4 WHERE `email_id`='$email' and connection_type='internet' ";

   if(mysqli_query($conn,$sq) or die("insert query fail"))
   {
       

      
        // include ('mail2.php');
    //    echo "<script type=\"text/javascript\">
    //             alert('mail send succesfully');
	// 				window.location = \"connection_provided_request.php\";
	// 				</script>";

                    


   }
   else
   {
       echo "<h1>data not insted becouse of some reason</h1>";
   }

}

	?>