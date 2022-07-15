<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
include("connection.php");
 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "12108111.gvp@gujaratvidyapith.org";
$mail->Password   = "Vidyapith@11";

$mail->IsHTML(true);

$email_get=$_GET['email'];		
$sql_user = "SELECT  *  FROM `tbl_connection` WHERE email_id='$email_get' ";
	 	
$result_user=mysqli_query($conn,$sql_user); 		 
$resultArray_user = array();
while($obResult_user = mysqli_fetch_array($result_user))
{
	$name= $obResult_user['full_name'];
    $email= $obResult_user['username'];				  
	$pass=$obResult_user['password'];
}
$mail->AddAddress($email_get, "");
$mail->SetFrom("12108111.gvp@gujaratvidyapith.org", "IT Services");
$message = "<html>";
$message .= "<head><title>Congratulation......... </title><head><body>";
$message .="<p>You can use  wifi :<p/>";
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border=2>';
$message .= "<tr><td colspan='2' align='center' style='background-color:navy;color:white'><strong>Registration Detail</strong> </td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td colspan='2' align='center' style='background-color:navy;color:white'><strong>:  Login Info:</strong> </td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>ID:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Password:</strong> </td><td>" . strip_tags($pass) . "</td></tr>";
$message .= "</table></body></html>";
$message .="<p><br/>Thank You<br/></p>";
$mail->Subject = "IT Services - Internet Connection Done";
$content = $message;

$mail->MsgHTML($content); 
if(!$mail->Send())
{
   echo "Error while sending Email.";
  //var_dump($mail);
} 
else
	{
		// header('Location:thank.php');
    echo "<script>
    alert('Email sent successfully');
    </script>";
}
?>