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
				<a href="#" class="navbar-brand">Lohana Vidhyarthi Bhavan</a>
				
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
        <div class="text-center">
            <h1>Trustees</h1>
        </div>
        <div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/jivraj.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Jivraj R. Thakkar</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: hemantdr@hotmail.com
				</p>
         
			</div>
		</div>
	
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/brijesh.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Brijesh Lohana</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: brijeshlohana@gmail.com
				</p>
         
			</div>
		</div>
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/jairam.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Jairam G. Thakkar</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: info@vijayenterprise.org
				</p>
         
			</div>
		</div>
   </div>
   <div class="row">
        
        <div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/arunkant.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Arunkant G. Dawda</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: a.g.dawada@ril.com
				</p>
         
			</div>
		</div>
	
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/nitin.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Nitin P. Seth</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: nitin.sheth@gmail.com
				</p>
         
			</div>
		</div>
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/ramesh.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Ramesh Vasani</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: vasant_thakkar@mtnl.net.in
				</p>
         
			</div>
		</div>
   </div>
   <div class="row">
        
        <div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/suryakant.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Suryakant M. Madlani</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: ca.madlani@gmail.com
				</p>
         
			</div>
		</div>
	
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/mohanbhai.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Mohanbhai T. Thacker</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: advmohan@hotmail.com
				</p>
         
			</div>
		</div>
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/dharmen.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Dharmen Rughani</h3>
				
				<p class = "btn btn-default" role =" button">
				Email: dharmenrughani@gmail.com
				</p>
         
			</div>
		</div>
   </div>
            
<!-- Gallery - END -->
		
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
