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
            <h1>Office Bearers</h1>
        </div>
        <div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/jimulia.png" alt = "Generic placeholder thumbnail">
				
				<h3>Dr.Ramjibhai G. Jimulia</h3>
				<p>(Trustee & President)</p>
         
				<p class = "btn btn-default" role =" button">
				Email: rgjimulia@hotmail.com
				</p>
         
			</div>
		</div>
	
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/savani.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Maganlal N. Savani</h3>
				<p>(Trustee & Vice-President)</p>
         
				<p class = "btn btn-default" role =" button">
				Email: ashwinsavani3456@gmail.com
				</p>
         
			</div>
		</div>
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/hiralal.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Hiralal J. Thacker</h3>
				<p>(Managing Trustee )</p>
         
				<p class = "btn btn-default" role =" button">
				Email: hjthacker@gmail.com
				</p>
         
			</div>
		</div>
   </div>
   <div class="row">
        
        <div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/sejpal.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Jayantilal N. Sejpal</h3>
				<p>(Jr.Managing Trustee & Hon. Secretory)</p>
         
				<p class = "btn btn-default" role =" button">
				Email: jn_sejpal@yahoo.com
				</p>
         
			</div>
		</div>
	
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/rameshthakker.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Ramesh H. Thakker</h3>
				<p>(Trustee & Hon. Secretory)</p>
         
				<p class = "btn btn-default" role =" button">
				Email: thakkerrh@gmail.com
				</p>
         
			</div>
		</div>
		<div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/bharat.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Bharat Thacker</h3>
				<p>(Trustee & Jt.Hon. Secretory)</p>
         
				<p class = "btn btn-default" role =" button">
				Email: economichw@gmail.com
				</p>
         
			</div>
		</div>
   </div>
   <div class="row">
        
        <div class = "col-sm-4 col-md-4">
			<div class = "thumbnail well">
				<img src = "images2/hashmukh.png" alt = "Generic placeholder thumbnail">
				
				<h3>Shri Hasmukh V. Jobanputra</h3>
				<p>(Hon. Secretory& Committee Member)</p>
         
				<p class = "btn btn-default" role =" button">
				Email: hasmukhjoben@gmail.com
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
