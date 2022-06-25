
<html>
<body>
<form  action="" name="myform" method="post" enctype="multipart/form-data">

<input type="file" name="image" placeholder="Upload Photo" reiqured>

<input type="submit"  name="submit" value="SUBMIT">
</form>
</body>

</html>

<?php	
$date=date('d/m/Y');
if(isset($_POST['submit']))
		{
			if(isset($_FILES['image']))
			{
				echo "image uploaded";
				echo"<pre>";
				print_r($_FILES);
				echo"</pre>";
			}
			else
			{
				echo "some thimg is error";
			}
		}
?>