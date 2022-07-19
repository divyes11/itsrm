<?php 
    include 'header.php';
//    $user=$_SESSION['type'];
   $email=$_SESSION['login'];
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
                background-color:#F2F4F4; 
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
  <b>    Email Creation Application Form               </b>
			<pre>
            </div>
            <?php 
                 include 'connection.php';
               
                 $sdfd="select * from tbl_connection where email_id='$email' and connection_type='email' ";
                // echo $email;
                 if($result=mysqli_query($conn,$sdfd))
                 {
                    $r=mysqli_fetch_array($result);
                }
            
                ?>
            <!-- <div id="imgdiv"><img src="<?php //echo $r['profile_photo']; ?>"  width="110" height="110"></div> -->
           </div>
            <table>
                
            
                <tr>
                    <td><label for="name">Full Name :</label></td>
                    <td><lable></lable><?php echo $r['full_name']; ?></td>
                </tr>


                <tr>
                    <td><label for="name">Deparment Name :</label></td>
                    <td><lable></lable><?php echo $r['dep_name']; ?></td>
                </tr>

                <?php 
                if($r['approve']!=5)
                {
                ?>
                
                <tr>
                    <td><label for="Mobile">Preferred Email Address:</label></td>
                    <td><lable><?php echo $r['preffred_email']; ?></lable></td>
                </tr>
                <tr>
                    <td><label for="email">Given Email Id :</label></td>
                    <td><lable><?php echo $r['email_id']; ?></lable></td>
                </tr>

                <tr>
                    <td><label for="email">AlterNet Email Address :</label></td>
                    <td><lable><?php echo $r['alternet_email']; ?></lable></td>
                </tr>




                <?php
                }
                
                if($r['approve']==5 &&  $_SESSION["login"]==$r['email_id'])
                {?>

                <tr>
                    <td style=" background-color:blue;color:yellow;"><label for="email">Created Email Address :</label></td>
                    <td style=" background-color:blue;color:yellow;"><lable></lable><?php echo $r['preffred_email']; ?></td>
                </tr>   


                <?php


                }
                ?>






               
            </table>
        </form>
    </body>
</html>