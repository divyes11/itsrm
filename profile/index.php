<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
  margin-left:30%;
  margin-right:40%;
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
    }
 #submitbtn {
     margin-right:60px;
     margin-left:40px;
     padding-left: 20px;
     padding-right: 20px;
     padding-top: 5px;
     padding-bottom: 5px;
     background-color: #4CAF50;
 }   
</style>   
</head>    
<body>    
       
    <form action="" method="post">  
    <center> <h1>  Login Form </h1> </center>
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <input type="submit" id="submitbtn" name="login" value="Login"> 
             <a href="registration.php" > <b>Registration</b> </a><br>
            <a href="forgotpass.php" style="margin-left:200px;"> Forgot password? </a>   
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