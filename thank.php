<?PHP
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<title>
Thank you..
</title>
</head>
<BODY >
<center>
<form id='frm1'  method='post'>
<?php
if(isset($_POST["GO"]))
{
header('Location:index.php');
ob_end_flush();				
}
?>
<Table>
<TR>
<TD>
<img src="images/thank.jpg" height="400px" >
</TD>
</TR>
<TR>
<TD style="color:green;font-size:24px;">
Thank you for registration ....<br/>We have sent login details on your register email-id.Please keep this ID in future communcation.
<br/>
<br/>
<input type='submit' name='GO' value='Go To Back' class="btn btn-default submit" style="color:black;width:300px;height:50px;"/>
</TD>
</TR>
</Table>
</form>
</center>
</BODY>
<HTML>