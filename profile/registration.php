<html>
    <head>
        <title>Registration for internet service</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        
        #formdiv {
            
            background-color:white;
            
            margin-left:27%;
            margin-right:40%;
            
            box-sizing: border-box;
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
            margin-bottom:10%;
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
                                <td><input type="hiding" class="form-control" name="userid" required><id/>
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
                                <td><label for="deparmentId" class="label">Department:</label></td>
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
                               <!-- <td><input type="submit" id="rsubmit"  name="submit" value="SUBMIT"></td> -->
							   
							  <td> <input type="submit"  id="rsubmit" name="submit" value="register"></td>
                                <td><a href="index.php"><input type="button" id="rsubmit"  name="login" value="login"></a></td>
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
    include 'connection.php';

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
                   // $username == $row['email'];
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
		// header("Location: http://localhost/itsrm/index.php");
		 
     }else{
        echo "<script>alert('Record Failed')</script>";
     }
     
    }

?>