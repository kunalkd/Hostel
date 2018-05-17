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
									<h3>About PPP<small>Posted on 4th July</small></h3>
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
							<a href="#" class="list-group-item ">
								<h4>Photo Galary</h4>
								
							</a>

						</div>
					
					</div>
					
					
				</div>
		</div>
		
		
		<!--footer-->
		<div class="navbar  navbar-fixed-bottom navbar-default">
			<div class="container">
			<p class="navbar-text pull-left">Made by SK</p>
			<a href="#" class="navbar-btn btn-danger btn pull-right">Subscribe to Youtube</a>
			</div>
		</div>
		
		<!--modal signup -->
		<div class="modal fade" id="signup" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<!--form changes-->
				<form class="form-horizontal" method="post" action="php/student_inhouse.php" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						<h4>Alumni?Register Here</h4>
					</div>
					<div class="modal-body">
						<!--<p>Body of modal</p>-->
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control"  name="name" placeholder="Full Name">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Father's Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="fname" placeholder="eg:Full Name">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context here "contact-email "-->
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Mother's Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control"  name="mname" placeholder="eg:Full Name">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context here "contact-email "-->
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Date of Birth:</label>
							<div class="col-lg-10">
								<input type="date" class="form-control" name="dob" placeholder="dd-mm-yyyy">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context here "contact-email "-->
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Profession:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="profession" placeholder="eg: CA">
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context here "contact-email "-->
							</div>
						</div>
						<div class="form-group">
                            <label for="recipient-name" class="col-lg-2 control-label">Study Peroid:</label>
							<label for="recipient-name" class="col-lg-2 control-label">From:</label>
                            <div class="col-lg-8">
							<input type="date" class="form-control" name="start" data-toggle="tooltip" title=" eg:From July 01/07/2014" >
							</div>
							
							<label for="recipient-name" class="col-lg-2 control-label">To:</label>
							<div class="col-lg-8">
							<input type="date" class="form-control" name="end" data-toggle="tooltip" title=" eg :Upto May 01/05/2017" >
							</div>
                        </div>
						<div class="form-group">
									<label for="message-text" class="col-lg-2 control-label">Contact Number:</label>
									<div class="col-lg-8">
									<input type="text" class="form-control" name="contact">
									</div>
						</div>
						<div class="form-group">
									<label for="message-text" class="col-lg-2 control-label">Email id:</label>
									<div class="col-lg-8">
									<input type="text" class="form-control" name="email">
									</div>
						</div>
						<div class="form-group">
									<label for="recipient-name" class="col-lg-2 control-label">Upload Photo:</label>
									<div class="col-lg-8">
									<input type="file" class="form-control" name="file">
									</div>
						</div>			
                        <div class="form-group">
                            <label for="message-text" class="col-lg-2 control-label">Password:</label>
							<div class="col-lg-8">
                            <input type="password" class="form-control" name="password">
							</div>
						</div>
						
						<div class="form-group">
                            <label for="message-text" class="col-lg-2 control-label">Enter Code:</label>
							
							<div class="col-lg-8">
                            <input type="password" class="form-control" name="captcha">
							<img  src='php/captcha.php'>
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
				<form class="form-horizontal" method="post" action="php/login.php">
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
		<!--admission-->
<div class="modal fade" id="admission" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<!--form changes-->
				<form class="form-horizontal" method="post" action="php/out_house.php" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						<h4 class="modal-title">Admission Form</h4>
					</div>
					<div class="modal-body">
						<!--<p>Body of modal</p>-->
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="name" placeholder="Full Name" >
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Father Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="fname">
								
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Mother Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="mname">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-2 control-label">Date of Birth:</label>
							<div class="col-lg-10">
								<input type="date" class="form-control" name="dob"  >
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Address:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="add">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Gaurdian's Address:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="gadd">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Contact Number:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="contact">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Gaurdian's Contact Number:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="gcontact">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Email id:</label>
							<div class="col-lg-10">
								<input type="email" class="form-control" name="email">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Upload Photo:</label>
							<div class="col-lg-10">
								<input type="file" class="form-control" name="file">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-lg-2 control-label">Stream:</label>
							<div class="col-lg-10">
								<select name="stream" class="form-control">
															<option value="Engineering">Engineering</option>
															<option value="Commerce">Commerce</option>
															<option value="Arts">Arts</option>
															<option value="Medical">Medical </option>
															<option value="Law">Law</option>
															<option value="Management">Management</option>
															<option value="Other">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10">
								<label for="contact-email" class="col-lg-2 control-label ">Academic Details:</label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2">
								<label for="contact-email" class="col-sm-2 control-label ">Examination&</label>
							</div>
							<div class="col-sm-3">
								<label for="contact-email" class="col-sm-2 control-label ">Year</label>
							</div>
							<div class="col-sm-2">
								<label for="contact-email" class="col-sm-2 control-label ">Attempts Taken</label>
							</div>
							<div class="col-sm-2">
								<label for="contact-email" class="col-sm-2 control-label ">University</label>
							</div>
							<div class="col-sm-2">
								<label for="contact-email" class="col-sm-2 control-label ">Percentage</label>
							</div>
						</div>
						<div class="form-group"><!--ssc -->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">SSC</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="ssc_year">
							</div>
							<div class="col-sm-2">
								
									<select name="ssc_attempt" class="form-control ">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>
									</select>
								
								
							</div>
							<div class="col-sm-3">
									<select name="ssc_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="ssc_per">
							</div>
						</div>
						<div class="form-group"><!--xi -->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">FYJC(XI)</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="xi_year">
							</div>
							<div class="col-sm-2">
								
									<select name="xi_attempt" class="form-control col-sm-2">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>									
									</select>
								
							</div>
							<div class="col-sm-3">
									<select name="xi_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="xi_per">
							</div>
						</div>
						<div class="form-group"><!--hsc -->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">HSC</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="hsc_year">
							</div>
							<div class="col-sm-2">
								
									<select name="hsc_attempt" class="form-control col-sm-2">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>	
									</select>
								
								
							</div>
							<div class="col-sm-3">
									<select name="hsc_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="hsc_per">
							</div>
						</div>
						<div class="form-group"><!--fy -->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">FY</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="fy_year">
							</div>
							<div class="col-sm-2">
								
									<select name="fy_attempt" class="form-control col-sm-2">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>	
									</select>
								
								
							</div>
							<div class="col-sm-3">
									<select name="fy_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="fy_per">
							</div>
						</div>
						<div class="form-group"><!--sy -->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">SY</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="sy_year">
							</div>
							<div class="col-sm-2">
								
									<select name="sy_attempt" class="form-control col-sm-2">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>	
									</select>
								
								
							</div>
							<div class="col-sm-3">
									<select name="sy_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="sy_per">
							</div>
						</div>
						<div class="form-group"><!--ty-->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">TY</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="ty_year">
							</div>
							<div class="col-sm-2">
								
									<select name="ty_attempt" class="form-control col-sm-2">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>	
									</select>
								
								
							</div>
							<div class="col-sm-3">
									<select name="ty_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="ty_per">
							</div>
						</div>
						<div class="form-group"><!--cpt -->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">CPT</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="cpt_year">
							</div>
							<div class="col-sm-2">
								
									<select name="cpt_attempt" class="form-control col-sm-2">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>	
									</select>
								
								
							</div>
							<div class="col-sm-3">
									<select name="cpt_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="cpt_per">
							</div>
						</div>
						<div class="form-group"><!--ipcc -->
							<div class="col-sm-1">
								<label for="contact-email" class="col-sm-2 control-label ">IPCC</label>
							</div>
							<div class="col-sm-4">
								<input type="date" class="form-control col-sm-2"  name="ipcc_year">
							</div>
							<div class="col-sm-2">
								
									<select name="ipcc_attempt" class="form-control col-sm-2">
															<option value="none">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">More</option>	
									</select>
								
								
							</div>
							<div class="col-sm-3">
									<select name="ipcc_uni" class="form-control col-sm-3">
															<option value="Mumbai University">Mumbai University</option>
															<option value="Amravati University">Amravati University</option>
															<option value="Pune University">Pune University</option>
															<option value="Saurashtra University">Saurashtra University </option>
															<option value="Maharashtra State Board">Maharashtra State Board</option>
															<option value="Gujarat State Board">Gujarat State Board</option>
															<option value="CBSE">CBSE</option>
															<option value="ISCE">ICSCE</option>
															<option value="ICAI">ICAI</option>
															<option value="Other">Other</option>
									</select>
								
							</div>
							<div class="col-sm-2">
									<input class="form-control col-sm-2" type="text" name="ipcc_per">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-4 control-label">Last given examination</label>
							<div class="col-lg-8">
								<select name="last_exam" class="form-control">
															<option value="HSC">HSC</option>
															<option value="FY">FY B.Com/B.A/B.Sc/B.E</option>
															<option value="SY">SY B.Com/B.A/B.Sc/B.E</option>
															<option value="TY">TY B.Com/B.A/B.Sc/B.E</option>
															<option value="TY">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-4 control-label">Centre:</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="centre">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-4 control-label">Last school attended</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="last_school">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-name" class="col-lg-4 control-label">In ruuning year for which class are you applying?</label>
							<div class="col-lg-8">
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
							<label for="contact-name" class="col-lg-4 control-label">Have you ever attended any hostel before joining this institution?If yes do write.</label>
							<div class="col-lg-8">
								<input type="text" class="form-control"  name="any_hostel">
							</div>
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>

</html>
