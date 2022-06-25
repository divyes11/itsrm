
<html>
    <head>
        <title>Wifi and internet form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        
		
		body{
				border:3px solid black;
			
			}
        #formdiv {
            
            background-color:white;
            
            margin-left:20%;
           margin-right:20%;
			margin-bottom:10%;
            
            box-sizing: border-box;
			
			
        }
		
		div input
		{
			border:3px solid gray;
			margin-left:10%;
			cols
		}
		.iptemt{
			width:150%;
			
		}
        #leble {
            text-align:center;
            background-color:grey;
			
        }
       
         
        #rform {
            background-color:#87CEEB;
            margin-bottom:0%;
        }
        #rsubmit {
            margin-left:95%;
            margin-top:10%;
            margin-bottom:20%;
        }
        #footerdiv {
            background-color:grey;
        }
        #header {
            margin:10%;
        }
        .label {
            margin-left:2%;
        }
		
		h3{
				#border:3px solid black;
		}
    </style>
    </head>
	
	<?php

include ('test1.php');
	?>
	
    <body>
        <div id="header"></div>
        <div id="maindiv">
        <div id="formdiv">
            <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" >
            <div id="leble" style="background-color:white;padding:15px;" class="form-control"><h3>Wifi  form</h3></div>   
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
            <form>
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