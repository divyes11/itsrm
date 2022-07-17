<?php

include ('header.php');
include ('connection.php');


$email=$_GET['email'];

$query="SELECT * FROM `tbl_connection` WHERE email_id='$email'  and  connection_type='wifi'";

$query2="UPDATE `tbl_connection` SET `ip_address`='',`username`='',`password`='',`mac_address`='' WHERE `email_id`=''   ";

$result=mysqli_query($conn,$query) or die("query failed");

$row=mysqli_fetch_assoc($result);







	?>
 <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Dashboard </h1>
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Wifi application form</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
									

        <title>Wifi Form </title>
      
   
 
	

<html>	
    <body>
           <div id="mdiv">
                <form action="" method="post">
                    <table>
                    <div>
                            <tr>
                                <td><label for="mac" class="label">Mac Address :</label></td>
                                <td><input type="text"   name="mac" value="<?php echo $row['mac_address']; ?>"; required><a href="find_mac_help.php"><input type="hidden"   name="helpmac" value="Find Mac add" required></a></td>
                            </tr>
                    </div>
                    <div>
                            <tr>
                                <td><label for="ip" class="label">IP Address:</label></td>
                                <td><input type="text"  name="ip" required><a href="find_ip_addres_help.php"><input type="hidden"   name="helpIp" value="Find IP add" required></a></td>
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

    $mac_address=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $password=$_POST['password'];


   $sq ="UPDATE `tbl_connection` SET `ip_address`='$ip',`username`='$username',`password`='$password',`mac_address`='$mac_address' ,`approve` =3 WHERE `email_id`='$email' ";
   
   if(mysqli_query($conn,$sq) or die("insert query fail"))
   {
        
       echo "<script>alert('data save succesfully');</script>";

    //    include ('mail2.php');
      echo "<script>
      window.location = \"com_deprment_requests.php\";
      </script>";
       
   }
   else
   {
       echo "<h1>data not insted becouse of some reason</h1>";
   }


 
		
		if(mysqli_query($conn,$query3))
        {
			echo'<script>
			 alert("Request accept");
			</script>';
		}
    

   


}



	
	?>