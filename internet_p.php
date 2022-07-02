<?php 
    include 'header.php';
?>
<html>
    <head>
        <title>Aplication Details</title>  
        <style>
            #appdetails{
                border:2px solid black;
                width: 600px;
            }
            
            #mdiv{
                border:2px solid black;
                width: 600px;
            }
            .table,td,tr{
                border:2px solid black;
                /* width:110%; */
                
               

            }

            /* .demo
            {
                width:80%;
                margin-left:20%;
            } */

              td
             {
                width:20%;
             } 

             /* input[type=text]
             {
                 width:110%; 
             } */
            #gdiv{
                float:left;
                /* border:1px solid red; */
            }
            #imgdiv{
                /* border:1px solid black; */
            }
        </style>  
    </head>
    <body>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <!-- <h1 class="app-page-title">wifi application</h1> -->
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3"></h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
        <form action="" id="appdetails" name="appdetails" method="post">
           <div id="mdiv">
           <div id="gdiv">
            <pre>
     Department of Computer Science
     Gujarat Vidyapith, Ahmedabad – 380 014
     Phone no : 40016414
             <b>Wifi Connection Application Form  </b>
			<pre>
            </div>
            <?php 
                 include 'connection.php';
                 $email=$_SESSION["login"];
                 $sdfd="select * from tbl_connection where email_id='$email' ";
                
                 if($result=mysqli_query($conn,$sdfd)){
                    $r=mysqli_fetch_array($result);
                }
            
                ?>
            <div id="imgdiv"><img src="<?php echo $r['profile_photo']; ?>" alt="Girl in a jacket" width="110" height="110"></div>
           </div>
            <table>
                
            
                <tr>
                    <td><label for="name">Full Name :</label></td>
                    <td><lable></lable><?php echo $r['full_name']; ?></td>
                </tr>
                <tr>
                    <td><label for="name">Designation :</label></td>
                    <td><lable></lable><?php echo $r['designation']; ?></td>
                </tr>
                <tr>
                    <td><label for="name">Deparment Name :</label></td>
                    <td><lable></lable><?php echo $r['dep_name']; ?></td>
                </tr>
                <tr>
                    <td><label for="extentionNo">Extention No :</label></td>
                    <td><lable></lable><?php echo $r['extension_no']; ?></td>
                </tr>
                <tr>
                    <td><label for="Mobile">Mobile No :</label></td>
                    <td><lable></lable><?php echo $r['mobile_no']; ?></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><lable></lable><?php echo $r['email_id']; ?></td>
                </tr>

                <tr>
                    <td><label for="email">Reason for internet requirements:</label></td>
                    <td><lable></lable><?php echo $r['location']; ?></td>
                </tr>

               
            </table>
        </form>
    </body>
</html>

