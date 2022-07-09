<?php
ob_start();
include("header.php");
include("connection.php");
$name=$_SESSION["name"];
$department=$_SESSION["depId"];
$department_id=$_SESSION["dip"];
$branch=$_SESSION["branch"];

?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Dashboard</h1>
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Welcome <?php echo $name;?></h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        Head of the <?php echo $department; ?> Department (<?php echo $branch; ?>)
							        <div>
									</div>
							    </div><!--//col-->
							    <div class="col-12 col-lg-3">
						
							    </div><!--//col-->
						    </div><!--//row-->
						    
					    </div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->


				<div class="row g-4 mb-4">
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">

							<?php
							$query="SELECT  * FROM tbl_connection JOIN registration  WHERE tbl_connection.email_id=registration.email   and registration.depId=$department_id and  branch='$branch' and approve=0";
							$con=mysqli_query($conn,$query);

							?>
							    <h4 class="stats-type mb-1">Panding request</h4>
							    <div class="stats-figure"><?php  echo mysqli_affected_rows($conn);?></div>
							    <div class="stats-meta text-success">
								    
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg> </div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="hod_requests.php"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">

							<?php
							$query="SELECT * FROM tbl_connection JOIN registration  WHERE tbl_connection.email_id=registration.email  and registration.depId=$department_id and  branch='$branch' and  approve=1";
							$con=mysqli_query($conn,$query);

							?>


							    <h4 class="stats-type mb-1">Approved requests</h4>
							    <div class="stats-figure"><?php  echo mysqli_affected_rows($conn);?></div>
							    <div class="stats-meta text-success">
								    
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg>  </div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="hod_approved_request.php"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">


							<?php
							$query="SELECT * FROM tbl_connection JOIN registration  WHERE tbl_connection.email_id=registration.email and  branch='$branch' and registration.depId=$department_id and  approve=2";
							$con=mysqli_query($conn,$query);

							?>

							    <h4 class="stats-type mb-1">Rejected Requests</h4>
							    <div class="stats-figure"><?php  echo mysqli_affected_rows($conn);?></div>
							    <div class="stats-meta"></div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="hod_rejected_request.php"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    <!--- <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Invoices</h4>
							    <div class="stats-figure">6</div>
							    <div class="stats-meta">New</div>
						    </div>//app-card-body-->
						    <!--<a class="app-card-link-mask" href="#"></a> --->
					   <!-- </div>//app-card-->
				   <!-- </div>//col-->
			    <!--</div>//row-->
				    
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	