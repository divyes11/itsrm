<?php


$from = "divyesh3632@gmail.com";
$subject =":: Registration Done ::";
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= "Return-Path: saptak@online.com"; 
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= "From:" . $from;
$headers .='From: divyesh3632@gmail.com' . "\r\n" .
                'Reply-To: divyesh3632@gmail.com' . "\r\n" .
                'Return-Path: divyesh3632@gmail.com' . "\r\n"  .
                'X-Mailer: PHP/' . phpversion() . "\r\n" . 
                'X-Priority: 3' ."\r\n".              
                'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
                'MIME-Version: 1.0'."\r\n\r\n";
              
$email_get=$from;// $_POST['username'];


		 include("connection.php");
		
		 $sql_user = "select email,password from registration where email='$email_get'";	
		 	
		 $result_user=mysqli_query($conn,$sql_user); 		 
		 $resultArray_user = array();
		 while($obResult_user = mysqli_fetch_array($result_user))
		 {
                   $name=  $obResult_user['email'];
				  
				   $pass=$obResult_user['password'];
		 }

$message = "<html>";
$message .= "<head><title>Congratulation......... </title><head><body>";
$message .="<p>You have successfully register membership:<p/>";
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border=2>';
$message .= "<tr><td colspan='2' align='center' style='background-color:navy;color:white'><strong>Membership Detail</strong> </td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td colspan='2' align='center' style='background-color:navy;color:white'><strong>: Member Login Info:</strong> </td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>Password:</strong> </td><td>" . strip_tags($pass) . "</td></tr>";
$message .= "</table></body></html>";
$message .="<p><br/>Thank You<br/></p>";
mail($email,$subject,$message,$headers,'-f$from');
    // echo $message;    
		//header('Location:thank.php');
	ob_end_flush();

?>  