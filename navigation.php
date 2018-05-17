<?php
session_start();
include_once('../config.php');

$job_id=$_GET['job_id'];
$fb_id=$_GET['fb_id'];
$_SESSION['job_id']=$job_id;
$_SESSION['fb_id']=$fb_id;
echo $_SESSION['job_id'];
echo $_SESSION['fb_id'];

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Keyhire</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style type="text/css">
   /* Banner */

	#banner {
		background-image: url(1.png), url(images/main.jpg);
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
	
	</style>
	</head>
	<body>
		
		
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				<a href="#" class="navbar-brand">Keyhire</a>
			
				
				<button class = "navbar-toggle" data-toggle= "collapse" data-target= ".navHeaderCollpase">
				<span class="icon-bar"></span><!--for three lines called as bar-->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				</div>
				<div class="collapse navbar-collapse navHeaderCollpase">
				
				
				
					<?php
					if (!(isset($_SESSION['user_name']))){

echo "<ul class='nav navbar-nav navbar-right'>
					
							
							<li><a href='#signup' data-toggle='modal'>Join Us</a></li><!--change  for modal-->
							<li><a href='#login' data-toggle='modal'>Sign In</a></li><!--change  for modal-->
					
					</ul>
";

}
					?>
				</div>
				
			
				
			</div>
		
		</div>
		
		
		
		<div class="container">
			<section id="banner">
			</section>
		
		</div>
		

		<!--modal signup -->
		<div class="modal fade" id="signup" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<!--form changes-->
				<form class="form-horizontal" method="post" action="../file1.php" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						<h4>Sign Up</h4>
					</div>
					<div class="modal-body">
						<!--<p>Body of modal</p>-->
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">UserNsme</label>
							<div class="col-lg-10">
								<input type="text" class="form-control"  name="name" placeholder="username">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div>
                        <div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Email:</label>
							<div class="col-lg-10">
								<input type="email" class="form-control"  name="name" placeholder="you@example.com">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-10">
								<input type="password" class="form-control"  name="name" placeholder="*****">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Phone number:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control"  name="name" placeholder="545874123265">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div> 

						
						
					</div>
					<div class="modal-footer">
						<!--<p>Footer of modal</p>-->
						
						<button type="reset" class="btn btn-info">Reset</button>

						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
				
				</div>
			
			
			</div>
		</div>
		<!--login-->
		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<!--form changes-->
				<form class="form-horizontal" method="post" action="../login/loginverify.php">
					<div class="modal-header">
						<h1>Login </h1>
					</div>
					<div class="modal-body">
						<!--<p>Body of modal</p>-->
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Email:</label>
							<div class="col-lg-10">
								<input type="email" class="form-control"  name="name" placeholder="you@example.com">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Password:</label>
							<div class="col-lg-10">
								<input type="password" class="form-control" name="password" >
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context here "contact-email "-->
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<!--<p>Footer of modal</p>-->
						<a class="btn btn-default" data-dismiss="modal">Close</a>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
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
		</script>
	</body>

</html>
