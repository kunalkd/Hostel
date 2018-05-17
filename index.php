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
   /* Banner */

	#banner {
		background-image: url(images/dark_tint.png), url(images/main.jpg);
		background-position: center center;
		background-size: cover;
		color: #ffffff;
		padding: 14em 0em 14em;
		text-align: center;
	}

		#banner :last-child {
			margin-bottom: 0;
		}

		#banner h2 {
			color: #ffffff;
			font-size: 4em;
			line-height: 1.25em;
			margin: 0 0 0.5em 0;
			padding: 0;
		}

		#banner p {
			font-size: 1.5em;
			margin-bottom: 1.75em;
		}
		header.major {
		text-align: center;
		margin-bottom: 4em;
		color:#fff;
	}

		header.major h2 {
			font-size: 3em;
			margin-bottom: 0.5em;
		}

		header.major p {
			font-size: 1.5em;
		}
	.icon-bar {
   background-color:#000000 !important;
}
	</style>
	</head>
	<body>
		
		
		<div class="navbar navbar-inverse navbar-static-top" style="background-color: #4484CE,color:black">
			<div class="container">
				<div class="navbar-header">
				<a href="#" class="navbar-brand">Lohana Vidyarthi Bhavan</a>
				
				<button class = "navbar-toggle" data-toggle= "collapse" data-target= ".navHeaderCollpase">
				<span class="icon-bar" ></span><!--for three lines called as bar-->
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
							<li><a href="pass.html">pass</a></li>
					</ul>
				</div>
				
			
				
			</div>
		
		</div>
		
		
		
		<div class="container">
			<div class="col-lg-12">

				<section id="banner">
					<h4>Shri Naranji Ebji,Bhulchand Meghji ,Arjun Khimji, Nandlal Chhaganlal</h4>
					<br><br><h2>Lohana Vidyarthi Bhavan,Wadala</h2>
				</section>
			</div>
		</div>
		
<!--About Us-->		
<div style="background-color:#4484CE" >
			<div class="container">
					<header class="major" style="color:white" id="about">
						<div class="page-header">
							<h2 style="font-family:  ALgerian, Sans-Serif">About Us</h2>
						</div>
						<p class="big text-light" ><i>Find us! </i></p>

                		<p style="color:;font-family:  Calibri, Sans-Serif">If you would like to find more about our hostel, or book a room at it, feel free to contact us using
                   			 this form. You can also get in touch with us using our telephone numbers or e-mail. We are always
                    		ready to help you!
                    	</p>
					</header>
			</div>
				<div class="container " style="color:black">
						<form role="form">
						<div class="row">	
                            <!--<div class="form-group col-lg-5">
                                
									<input  style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;" class="form-control" placeholder="Name" >								
								
									<br>

									<input class="form-control" placeholder="Email" style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;">							
									<br>
									<input class="form-control" placeholder="Phone" style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;">
									<br>
                                
                            </div>
							<div class="form-group col-lg-7">
                               
								<div class="">
									<textarea class="form-control" rows="6" placeholder="Message" style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;"></textarea>							
								</div>
                               
                            </div>
						</div>	-->
							<div class="form-group ">
                               
                               <div class="col-md-10">
														
								</div>
								<div class="col-md-2">

									<a href="history.php"><button type="submit" class="btn btn-primary " style="border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;">Read More 
									<span class="glyphicon glyphicon-share-alt"></span></button></a>				
								</div>
								<div class="col-md-0">
														
								</div>
                               
                            </div>
							
						</form>
					
				</div>
			
		</div>
		
<!--Facilities-->		
<div style="background-color:#D9D9D9" >
			<div class="container" >
					<header class="major">
						<div class="page-header" style="color:white">
							<h2 style="font-family:  ALgerian, Sans-Serif">Facilities</h2>
						</div>
						<p class="big text-light" ><i>Find us! </i></p>

                		<p style="font-family:  Calibri, Sans-Serif">If you would like to find more about our hostel, or book a room at it, feel free to contact us using
                   			 this form. You can also get in touch with us using our telephone numbers or e-mail. We are always
                    		ready to help you!
                    	</p>
					</header>
			</div>
				<div class="container " style="color:black">
						<form role="form">
						<div class="row">	
                            
							<div class="form-group col-lg-12">
                               
								<div class="row">
									<div class="col-lg-3">
									<img src="facilities/1.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">
									</div>
									<div class="col-lg-3">
									<img src="facilities/2.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
									<div class="col-lg-3">
									<img src="facilities/3.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
									<div class="col-lg-3">
									<img src="facilities/4.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
								</div>

                               
                            </div>
						</div>	
							<div class="form-group ">
                               
                               <div class="col-md-10">
														
								</div>
								<div class="col-md-2">

									<a href="facilities.php"><button type="submit" class="btn btn-primary " style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;color:black">Read More 
									<span class="glyphicon glyphicon-share-alt"></span></button></a>				
								</div>
								<div class="col-md-0">
														
								</div>
                               
                            </div>
							
						</form>
					
				</div>
			
		</div>
<!--Co-ciricullar -->
<div style="background-color:#F9CF00" >
			<div class="container">
					<header class="major">
						<div class="page-header" style="color:white">
							<h2 style="font-family:  ALgerian, Sans-Serif">Co-Curicullar Activities</h2>
						</div>
						<p class="big text-light" ><i>Find us! </i></p>

                		<p style="font-family:  Calibri, Sans-Serif">If you would like to find more about our hostel, or book a room at it, feel free to contact us using
                   			 this form. You can also get in touch with us using our telephone numbers or e-mail. We are always
                    		ready to help you!
                    	</p>
					</header>
			</div>
				<div class="container " style="color:black">
						<form role="form">
						<div class="row">	
                            <div class="form-group col-lg-12">
                               
								<div class="row">
									<div class="col-lg-3">
									<img src="facilities/1.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">
									</div>
									<div class="col-lg-3">
									<img src="facilities/2.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
									<div class="col-lg-3">
									<img src="facilities/3.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
									<div class="col-lg-3">
									<img src="facilities/4.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
								</div>

                               
                            </div>
						</div>	
							<div class="form-group ">
                               
                               <div class="col-md-10">
														
								</div>
								<div class="col-md-2">

									<!--<a href="#"><button type="submit" class="btn btn-primary " style="background-color:#ffa500;border: 1px solid rgba(255, 99, 71, 0);border-radius: 0px;    padding: 17px 30px;color:">Read More 
									<span class="glyphicon glyphicon-share-alt"></span></button></a>-->			
								</div>
								<div class="col-md-0">
														
								</div>
                               
                            </div>
							
						</form>
					
				</div>
			
		</div>
<!--Achievement Area-->
		<div style="background-color:#F19F4D" >
			<div class="container" id="achievement">
					<header class="major">
						<div class="page-header" style="color:white">
							<h2 style="font-family:  ALgerian, Sans-Serif">Achievements</h2>
						</div>
						<p class="big text-light" ><i>Find us! </i></p>

                		<p style="font-family:  Calibri, Sans-Serif">If you would like to find more about our hostel, or book a room at it, feel free to contact us using
                   			 this form. You can also get in touch with us using our telephone numbers or e-mail. We are always
                    		ready to help you!
                    	</p>
					</header>
			</div>
				<div class="container " style="color:black">
						<form role="form">
						<div class="row">	
                            <div class="form-group col-lg-12">
                               
								<div class="row">
									<div class="col-lg-3 col-sm-3">
									<img src="facilities/1.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">
									</div>
									<div class="col-lg-3 col-sm-3">
									<img src="facilities/2.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
									<div class="col-lg-3 col-sm-3">
									<img src="facilities/3.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
									<div class="col-lg-3 col-sm-3">
									<img src="facilities/4.png" class="img-thumbnail" alt="Cinque Terre" width="100%" height="20%">							
									</div>
								</div>

                               
                            </div>
						</div>	
							<div class="form-group ">
                               
                               <div class="col-md-10">
														
								</div>
								<div class="col-md-2">

									<!--<a href="#"><button type="submit" class="btn btn-primary " style="background-color:#F4af60;border: 1px solid rgba(255, 99, 71, 0);border-radius: 0px;    padding: 17px 30px;color:">Read More 
									<span class="glyphicon glyphicon-share-alt"></span></button></a>	-->			
								</div>
								<div class="col-md-0">
														
								</div>
                               
                            </div>
							
						</form>
					
				</div>
			
		</div>
<!--contact area-->
		<div style="background-color:#00000" >
			<div class="container">
					<header class="major">
						<div class="page-header" >
							<h2 style="color:black;font-family:  ALgerian, Sans-Serif">Contact Information</h2>
						</div>
						<p class="big text-light" style="color:black"><i>Find us! </i></p>

                		<p style="color:black;font-family:  Calibri, Sans-Serif">If you would like to find more about our hostel, feel free to contact us using
                   			 this form. You can also get in touch with us using our telephone numbers . We are always
                    		ready to help you!
                    	</p>
					</header>	
			</div>
				<div class="container " style="color:">
						<form role="form">
						<div class="row">
							<div class="form-group col-lg-2"></div>	
                            <div class="form-group col-lg-3">
                                
									<input  style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;color: black;" class="form-control" placeholder="Name" >								
								
									<br>

									<input class="form-control" placeholder="Email" style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;">							
									<br>
									<input class="form-control" placeholder="Phone" style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px; color:black;   padding: 17px 30px;">
									<br>
                                
                            </div>
							<div class="form-group col-lg-5">
                               
								<div class="">
									<textarea class="form-control" rows="6" placeholder="Message" style="background-color:#e6e6e9;border: 1px solid rgba(255, 255, 255, 0);border-radius: 0px;    padding: 17px 30px;"></textarea>							
								</div>
                               
                            </div>
						</div>	
							<div class="form-group ">
                               
                                <div class="col-md-10">
														
								</div>
								<div class="col-md-2">

									<button type="submit" class="btn btn-primary " style="border: 1px solid rgba(255, 99, 71, 0);border-radius: 0px;    padding: 17px 30px;color:">Send 
									<span class="glyphicon glyphicon-share-alt"></span></button>				
								</div>
								<div class="col-md-0">
														
								</div>
                               
                            </div>
							
						</form>
					
				</div>
			
		</div>
		
		
		<!--footer-->
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
				</form>
				
		</div>
	</div>
</div>		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script>
			function myFunction() {
				window.print();
			}
			function alert(){
				alert("FORM SUCCESSFULLY SUBMITTED")
			}
		</script>
	</body>

</html>
