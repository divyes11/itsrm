<html>
    <head>
        <title>Registration for internet service</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
	
					body{
					
						border:2px solid black;
					}
					#lrsubmit
					{
						border:3px solid black;
						margin-left:90%;
						margin-bottom:3%;	
						height:50px;
						width:80px;
						
					}
					#lrsubmit:hover
					{
						background-color:black;
						color:yellow;
					}
					option
					{
						color:yellow;
						background-color:black;
					}
						#formdiv {
						
						background-color:white;
						
						margin-left:30%;
						margin-right:30%;
						
						box-sizing: border-box;
					}
					
					input{
						border:2px solid green;
						background-color: #4CAF50;
						#width:80%;
						
					}
					.form-control 
					{
						border:3px solid black;
						padding-bottom:15px;
						
					}
					
					#lrsubmit
					{
					
						#font-size:21px;
					}
					
					
					
					
					#deparmentId
					{
						height:40px;
						width:110px;
						border:3px solid black;
					}
					
					#leble {
						text-align:center;
						background-color:grey;
					}
				   
					 
					#rform {
						background-color:#87CEEB;
						margin-bottom:0%;
						border:4px solid black;
						#font-size:20px;
					}
					#rsubmit {
						margin-left:30%;
						margin-top:10%;
						margin-bottom:20%;
						height:50px;
						width:90px;
						#font-size:20px;
						border:3px solid black;
						
					}
					
					#rsubmit:hover
					{
						background-color:black;
						color:yellow;
					}
					
					#footerdiv {
						background-color:black;
					}
					#header {
						margin:10%;
					}
					.label {
						margin-left:2%;
					}
    </style>
    </head>
    <body>
        <div id="header"></div>
        <div id="maindiv">
        <div id="formdiv">
            <form action="" id="rform" name="registrationform" onsubmit="return validation()" method="post" >
            <div id="leble" style="background-color:white;padding:15px;" class="form-control"><h3>Registration Form</h3></div>   
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
                                <td><label for="name" class="label">Name:</label></td>
                                <td><input type="text" class="form-control"  name="name" required></td>
                            </tr>
                        </div>
						
                        <div>
                            <tr>
                                <td><label for="username" class="label">Email:</label></td>
                                <td><input type="email" class="form-control"  name="username" required></td>
                            </tr>
                       </div>
                        <div>
                            <tr>
                                <td><label for="password" class="label">Password:</label></td>
                                <td><input type="password" class="form-control"  name="password" required></td>
                            </tr>
                       </div>
                       <div>
                            <tr>
                                <td><label for="deparmentId" class="selects">Department:</label></td>
                                <td>
                                    <select name="deparmentId" id="deparmentId" required>
                                        <option value="1">Computer</option>
                                        <option value="2">MA</option>
                                        <option value="3">journalism</option>
                                        <option value="4">MSW</option>
                                    </select>
                                <id/>
                            </tr>
                       </div>
                        <div>
                            <tr>
                                <td><label for="usertype" class="label">Usertype:</label></td>
                                <td><input type="radio" class="form-check-input"   name="usertype" value="sevak" required>Sevak  
                                <input type="radio" class="form-check-input"  name="usertype" value="student" required>Student</td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td><input type="submit" id="rsubmit"  name="submit" value="SUBMIT"></td>
								<td></td>
								<div class="login"> <td><a href="index.php"><input type="button" id="lrsubmit"  name="login" value="sigin" /></a></td></div>
								
						</div>
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
    
        
    </body>
</html>

<?php
    include 'connection.php';

    if(isset($_POST['submit']))
	{

        $depId = $_POST['deparmentId'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        $sq ="select email from registration where email= '{$username}'";

        $check_email = mysqli_query($conn,$sq);
        
        if(mysqli_num_rows($check_email) > 0)
		{
            $row = mysqli_fetch_assoc($check_email);
					
               if(($username == $row['email']))
			   {
                   echo $username == $row['email'];
                echo "<script>alert('Email id is already exist')</script>";
                die();
               }
           
       }
        
    $query = "insert into registration(depId,name,email,password,usertype) 
    values('$depId','$name','$username','$password','$usertype')";

     if(mysqli_query($conn,$query)){
         include('mail.php');
       
     }
	 else
	 {
        echo "<script>alert('Record Failed')</script>";
     }
     
    }

?>