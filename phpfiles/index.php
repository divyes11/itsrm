<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
  margin-left:40%;
  margin-right:40%;
  border:3px solid black;
  margin-top:7%;
}  



h1
{
	background-color:lightblue;
	#padding-bottom:3%;
	border:3px solid black;
	
}
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
		
         } 

#rubmitbtn
{
	height:40px;
	background-color: #4CAF50;
	
}

.for_pass a
{
	color:red;
	margin-left:20px;
	margin-top:50px;	
}
		 
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 20px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  /* .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }    */
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
		border:3px solid black;
    }
 #submitbtn {
     margin-right:60px;
     margin-left:40px;
     padding-left: 20px;
     padding-right: 20px;
     padding-top: 5px;
     padding-bottom: 5px;
     background-color: #4CAF50;
	 height:40px;
 }   
 
 <!---INSERT INTO `tbl_connection`(`full_name`, `email_id`, `designation`, `location`, `extension_no`, `mobile_no`, `reason`, `profile_photo`, `user_id`, `site`, `connection_type`, `created_date`, `approve`, `uplink`, `ip_address`, `username`, `password`) 
 VALUES ('rohan raut','rohanraut5151@gmail.com','student','boys hostel','256','9956684656','for study is reason','path/of/photo.png','rohanraut5151@gmail.com','office site','wifi','2001/5/6','1','uplink demo','123.268.655','rohan','123');
 INSERT INTO `registration`(`userID`, `depId`, `name`, `email`, `password`, `usertype`)
 VALUES ('8','5','kartik bhai','hod@gmail.com','hod','hod');--->



</style>   
</head>    
<body>    
       
    <form action="" method="post">  
    <center> <h1>  Login </h1> </center>
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <input type="submit" id="submitbtn" name="login" value="Login"> 
			
			<a href="registration.php" ><input type="button" id="rubmitbtn" name="registration" value="Registration"> </a>
			
               <br><br>
            <div class="for_pass"><a href="forgotpass.php" > Forgot password? </a>   </div>
        </div>   
    </form>     
</body>     
</html>
<?php
    include 'connection.php';

    if(isset($_POST['login'])){
    
        $username = $_POST['username'];
        $password = $_POST['password'];

   $query = "SELECT email,password FROM registration WHERE email = '{$username}' AND password = '{$password}'";
   $result=mysqli_query($conn,$query) or die('query faild');

   if(mysqli_num_rows($result) > 0 ){
   
    header('location:all_forms.php');
   }else{
       echo "<script>alert('username and password not match');</script>";
   }

    }

?>