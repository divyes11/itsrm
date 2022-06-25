<html>
	<head>
		<style>
		
		.pa{
				background-color:skyblue;
				border:3px solid;
				padding-top:79px;
				padding-bottom:79px;
				padding-left:34px;
				margin-left:650px;
				margin-right:34px;
				margin-top:50px;
				margin-bottom:60px;
				width:200px;
				}
		
		</style>
	</head>
	
	<body>
		<form action=" " method="post" >
			
			<div class="pa">
			
				
				Enter your email:<input type="text" name="email"><br><br><br>
				
				    <input type="submit" name="submit" value="send mail" >
				<a href="index.php"></a>
					
		</form>
					
	</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit']))
{
	echo $email=$_POST['email'];

	$sql="SELECT  `email` FROM `registration1` WHERE `email`='{$email}'";
	$result=mysqli_query($conn,$sql) or die("error in $result");
	$row=mysqli_fetch_assoc($result);
	
	if($row==null)
	{
		echo "email is not exist";
	}
	else
	{
		echo "email is exist";
	}
	

}


?>