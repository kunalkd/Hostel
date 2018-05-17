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
									<li><a href="saraswati_sanman_samaroh.php">Saraswati Sanman Samaroh</a></li>
									<li><a href="past_present_meet.php">Past & Present Student Meet</a></li>
									<li><a href="elocution_competition.php">Elocution Competition</a></li>
									<li><a href="aavishkar.php">Aavishkar</a></li>
									
									
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

									<h3><span class="glyphicon glyphicon-glass"></span> Past & Present Student Meet</h3>
								</div>
								<img class="featureImg" src="img/img.jpg" width="100%" >
								
								<p>Pit bull is the common name for a type of dog. Formal breeds often considered in North America to be of the pit bull type include the American Pit Bull Terrier, American Staffordshire Terrier, and Staffordshire Bull Terrier.[1] The American Bulldog is also sometimes included. Many of these breeds were originally developed as fighting dogs from cross breeding bull-baiting dogs (used to hold the faces and heads of larger animals such as bulls) and terriers.[2] After the use of dogs in blood sports was banned, such dogs were used as catch dogs in the United States for semi-wild cattle and hogs, to hunt and drive livestock, and as family companions,[3] although some owners still bred and used them for illegal d</p>
								
								<h4>A heading</h4>
								<p>Pit bull is the common name for a type of dog. Formal breeds often considered in North America to be of the pit bull type include the American Pit Bull Terrier, American Staffordshire Terrier, and Staffordshire Bull Terrier.[1] The American Bulldog is also sometimes included. Many of these breeds were originally developed as fighting dogs from cross breeding bull-baiting dogs (used to hold the faces and heads of larger animals such as bulls) and terriers.[2] After the use of dogs in blood sports was banned, such dogs were used as catch dogs in the United States for semi-wild cattle and hogs, to hunt and drive livestock, and as family companions,[3] although some owners still bred and used them for illegal d</p>
							</div>
							
						
						
						</div>
					</div>
					
					<!--side bar code-->
					<div class="col-lg-3">
						<div class="list-group">
							<a href="#" class="list-group-item active">
								<h4>About</h4>
								
							</a>
							
								
							</a>
							<a href="photogallery/photocollection.php#ppp" class="list-group-item ">
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
		<!--admission-->
<div class="modal fade" id="admission" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<!--form changes-->
				<!--modulation-->
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
