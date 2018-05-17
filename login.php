<?php
 echo "
<form class='form-horizontal' method='post' action='php/login.php'>
					<div class='modal-header'>
						<h1>Login </h1>
					</div>
					<div class='modal-body'>
						<!--<p>Body of modal</p>-->
						<div class='form-group'>
							<label for='contact-name' class='col-lg-2 control-label'>Email:</label>
							<div class='col-lg-10'>
								<input type='email' class='form-control'  name='name' placeholder='you@example.com'>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div>
						<div class='form-group'>
							<label for='contact-email' class='col-lg-2 control-label'>Password:</label>
							<div class='col-lg-10'>
								<input type='password' class='form-control' name='password' >
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context here 'contact-email '-->
							</div>
						</div>
					</div>
					<div class='modal-footer'>
						<!--<p>Footer of modal</p>-->
						<a class='btn btn-default' data-dismiss='modal'>Close</a>
						<button type='submit' class='btn btn-primary'>Submit</button>
					</div>
				</form>
				";
?>