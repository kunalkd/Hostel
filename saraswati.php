<?php 
session_start();
//include "redirect.php";
if(isset($_SESSION['user_name'])){

        $cde = $_SESSION['user_name'];
if($cde=='alumni'){

header('location: alumni\alumni.php');
}
else if($cde=='in_house'){

header('location: inhouse/inhouse.php');
}
else if($cde=='admin'){

header('location: admin/admin.php');
}
else{
header('location: trustee/trustee.php');
		
}
}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Lohana Vidhyarthi Bhavan</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style type="text/css">
   
	</style>
	</head>
	<body>
		
		
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Lohana Vidhyarthi Bhavan</a>
				
				<button class = "navbar-toggle" data-toggle= "collapse" data-target= ".navHeaderCollpase">
				<span class="icon-bar"></span><!--for three lines called as bar-->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				</div>
				<div class="collapse navbar-collapse navHeaderCollpase">
				
				
				
					<ul class="nav navbar-nav navbar-right">
					
							<li class="active"><a href="index.php">Home</a></li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About US <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="history.php">History</a></li>
									<li><a href="facilities.php">Facilities</a></li>
									
									
								</ul>
							
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Commities <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="office.php">Office Bearers</a></li>
									<li><a href="trustee.php">Trustees</a></li>
									<li><a href="pastassoc.php">Past & Present Student Association</a></li>
									<!--<li><a href="#">Past & Present Student Association</a></li>-->
								
								</ul>
							
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Events<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="sss.php">Saraswati Sanman Samaroh</a></li>
									<li><a href="ppp.php">Past & Present Student Meet</a></li>
									<li><a href="ec.php">Elocution Competition</a></li>
									<li><a href="avish.php">Aavishkar</a></li>
									
									
								</ul>
							
							</li>
							<li><a href="#admission" data-toggle="modal">Admission Form</a></li><!--change  for modal-->
							<li><a href="#signup" data-toggle="modal">Sign Up</a></li><!--change  for modal-->
							<li><a href="#login" data-toggle="modal">Login</a></li><!--change  for modal-->
					
					</ul>
				</div>
				
			
				
			</div>
		
		</div>
		
		
		
		<div class="container">
				<div class="row">
					<div class="col-lg-9">
					
						<div class="panel panel-default">
							
							<div class="panel-body">
								<div class="page-header">
									<h3><span class="glyphicon glyphicon-education"></span> Saraswati Sanman Samaroh </h3>
								</div>
								<img class="featureImg" src="img/img.jpg" width="100%" >
								<div id="about">
								<p>Pit bull is the common name for a type of dog. Formal breeds often considered in North America to be of the pit bull type include the American Pit Bull Terrier, American Staffordshire Terrier, and Staffordshire Bull Terrier.[1] The American Bulldog is also sometimes included. Many of these breeds were originally developed as fighting dogs from cross breeding bull-baiting dogs (used to hold the faces and heads of larger animals such as bulls) and terriers.[2] After the use of dogs in blood sports was banned, such dogs were used as catch dogs in the United States for semi-wild cattle and hogs, to hunt and drive livestock, and as family companions,[3] although some owners still bred and used them for illegal d</p>
								</div>
								<div id="history">
								<h4>History</h4>
								<p>here goes the histroy of SSS
								Pit bull is the common name for a type of dog. Formal breeds often considered in North America to be of the pit bull type include the American Pit Bull Terrier, American Staffordshire Terrier, and Staffordshire Bull Terrier.[1] The American Bulldog is also sometimes included. Many of these breeds were originally developed as fighting dogs from cross breeding bull-baiting dogs (used to hold the faces and heads of larger animals such as bulls) and terriers.[2] After the use of dogs in blood sports was banned, such dogs were used as catch dogs in the United States for semi-wild cattle and hogs, to hunt and drive livestock, and as family companions,[3] although some owners still bred and used them for illegal d</p>
							</div>
							</div>
							
						
						
						</div>
					</div>	



					<!--side bar code-->
					<div class="col-lg-3">
						<div class="list-group">
							<a href="#" class="list-group-item active">
								<h4>About</h4>
								
							</a>
							<a href="#history" class="list-group-item ">
								<h4>History</h4>
								
							</a>
							<!--=<a href="index.php#achievement" class="list-group-item ">
								<h4>Awards</h4>
								
							</a>-->
							<a href="#sssform" data-toggle="modal" class="list-group-item ">
								<h4>Application Form</h4>
								
							</a>
							<a href="photogallery/photocollection.php#sss" class="list-group-item ">
								<h4>Photo Gallery</h4>
								
							</a>

						</div>
					
					</div>
					
					
				</div>
		</div>
		
		
		<!--footer-->
		<!--<div class="navbar  navbar-fixed-bottom navbar-default">
			<div class="container">
			<p class="navbar-text pull-left">Made by SK</p>
			<a href="#" class="navbar-btn btn-danger btn pull-right">Subscribe to Youtube</a>
			</div>
		</div>-->
		<div class="navbar  navbar-fixed-bottom navbar-default">
			<div class="container">
				
						<!--<p class="navbar-text pull-right glyphicon glyphicon-phone-alt"> 022-</p>-->
						<!--modulation-->
						<?php
							include_once('footer.php');
						?>		
			</div>
		</div>
		<div class="modal fade" id="alert" role="dialog">
			<div class="modal-dialog">
				<?php
					include_once('alert_modal.php');
				?>
			</div>
		</div>
		
		<!--modal signup -->
		<div class="modal fade" id="signup" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<!--form changes-->
				<!--modulation-->
				<?php
					include_once('signup.php');
				?>
				
				</div>
			
			
			</div>
		</div>
		<!--login-->
		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<!--form changes-->
				<!--modulation-->
				<?php
					include_once('login.php');
				?>
				</div>
			
			
			</div>
		</div>
<div class="modal fade" id="sssform" role="dialog" style="text-align: left;">
	<div class="modal-dialog">
		<div class="modal-content">
				<!--form changes-->
				<form class="form-horizontal" method="post">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						<h4 class="modal-title">Application Form</h4>
					</div>
					<div class="modal-body">
						<!--<p>Body of modal</p>-->
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">First Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="fname" placeholder="First Name" >
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Middle Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="mname" placeholder="Middle Name">
								
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Last Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="lname" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-address" class="col-lg-2 control-label">Address:</label>
							<div class="col-lg-10">
								<textarea type="text" class="form-control" name="address" placeholder="Address"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Date of Birth:</label>
							<div class="col-lg-10">
								<input type="date" class="form-control" name="DOB"  placeholder="Date Of Birth">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Email id:</label>
							<div class="col-lg-10">
								<input type="email" class="form-control" name="email" placeholder="E-Mail Id">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-number" class="col-lg-2 control-label">Mobile Number:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="contact" placeholder="10 Digit Mobile Number">
							</div>
						</div>
							<label for="contact-name" class="col-lg-2 control-label">Last Exam Given :</label>
								<div class="col-lg-10">
								<select name="last_exam" class="form-control">
															<option value="HSC">HSC</option>
															<option value="FY">FY B.Com/B.A/B.Sc/B.E</option>
															<option value="SY">SY B.Com/B.A/B.Sc/B.E</option>
															<option value="TY">TY B.Com/B.A/B.Sc/B.E</option>
															<option value="TY">Other</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12"><br></div><div class="col-lg-12"><br></div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 ccontrol-label">Passing Year:</label>
						  	  <div class="col-lg-10">
								<input type="date" class="form-control" name="yearofpassing" placeholder="Year Of Passing">
						      </div>
						</div>
						<!--<div class="col-lg-12"><br></div>-->
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Exam Centre:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="examcentre" placeholder="Centre">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Marks Scored :</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="marks" placeholder="Marks Scored">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Percentage:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="percentage" placeholder="Percentage">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Name Of College :</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="college" placeholder="College Name">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Your Special Qualities :</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="qualities" placeholder="Qualities">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Current Education Details :</label>
							<div class="col-lg-10">
								<select name="run_class" class="form-control">
															<option value="HSC">HSC</option>
															<option value="FY">FY B.Com/B.A/B.Sc/B.E</option>
															<option value="SY">SY B.Com/B.A/B.Sc/B.E</option>
															<option value="TY">TY B.Com/B.A/B.Sc/B.E</option>
															<option value="TY">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">College Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="colegename" placeholder="College Name">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Address</label>
							<div class="col-lg-10">
								<textarea type="text" class="form-control" name="c_address" placeholder="Address"></textarea>
							</div>
						</div>
					<div class="modal-footer">
						<!--<p>Footer of modal</p>-->
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-primary">Reset</button>
					</div>
				</form>
				
		</div>
	</div>
</div>
</div>
		<!--admission-->
<div class="modal fade" id="admission" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<!--form changes-->
				
				<?php 
					include_once('admission_form.php');
				?>
		</div>
	</div>
</div>		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>

</html>
