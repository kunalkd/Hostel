<?php
	echo "
		<form class='form-horizontal' method='post' action='php/student_inhouse.php' enctype='multipart/form-data'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>X</button>
						<h4>Alumni?Register Here</h4>
					</div>
					<div class='modal-body'>
						<!--<p>Body of modal</p>-->
						<div class='form-group'>
							<label for='contact-name' class='col-lg-2 control-label'>Name:</label>
							<div class='col-lg-10'>
								<input type='text' class='form-control'  name='name' placeholder='Full Name' required>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context-->
							</div>
						</div>
						<div class='form-group'>
							<label for='contact-email' class='col-lg-2 control-label'>Father's Name:</label>
							<div class='col-lg-10'>
								<input type='text' class='form-control' name='fname' placeholder='eg:Full Name' required>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context here 'contact-email '-->
							</div>
						</div>
						<div class='form-group'>
							<label for='contact-email' class='col-lg-2 control-label'>Mother's Name:</label>
							<div class='col-lg-10'>
								<input type='text' class='form-control'  name='mname' placeholder='eg:Full Name' required>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context here 'contact-email '-->
							</div>
							</div>
							<div class='form-group'>
							<label for='contact-email' class='col-lg-2 control-label'>Spouse Name:</label>
							<div class='col-lg-10'>
								<input type='text' class='form-control'  name='sname' placeholder='eg:Full Name'>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context here 'contact-email '-->
							</div>
						</div>
						<div class='form-group'>
							<label for='contact-email' class='col-lg-2 control-label'>Date of Birth:</label>
							<div class='col-lg-10'>
								<input type='date' class='form-control' name='dob' placeholder='dd-mm-yyyy' required>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context here 'contact-email '-->
							</div>
						</div>
						<div class='form-group'>
							<label for='contact-email' class='col-lg-2 control-label'>Marriage Anniversary:</label>
							<div class='col-lg-10'>
								<input type='date' class='form-control' name='MarriageAnniversary' placeholder='dd-mm-yyyy'>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context here 'contact-email '-->
							</div>
						</div>
						<div class='form-group'>
							<label for='contact-email' class='col-lg-2 control-label'>Profession:</label>
							<div class='col-lg-10'>
								<input type='text' class='form-control' name='profession' placeholder='eg: CA' required>
								<!--inlabel whatever for='value' is should be same as id in input field  repeat div class form group for various 
									form context here 'contact-email '-->
							</div>
						</div>
						<div class='form-group'>
                            <label for='recipient-name' class='col-lg-2 control-label'>Study Peroid:</label>
							<label for='recipient-name' class='col-lg-2 control-label'>From:</label>
                            <div class='col-lg-8'>
							<input type='Number' class='form-control' name='start' min='1912' max='2032'required>
							</div>
							
							<label for='recipient-name' class='col-lg-2 control-label'>To:</label>
							<div class='col-lg-8'>
							<input type='number' class='form-control' name='end' min='1912' max='2032'>
							</div>
                        </div>
						<div class='form-group'>
									<label for='message-text' class='col-lg-2 control-label'>Contact Number:</label>
									<div class='col-lg-8'>
									<input type='text' class='form-control' name='contact'>
									</div>
						</div>
						<div class='form-group'>
									<label for='message-text' class='col-lg-2 control-label'>Email id:</label>
									<div class='col-lg-8'>
									<input type='text' class='form-control' name='email'>
									</div>
						</div>
						<div class='form-group'>
									<label for='recipient-name' class='col-lg-2 control-label'>Upload Photo:</label>
									<div class='col-lg-8'>
									<input type='file' class='form-control' name='file'>
									</div>
						</div>			
                        <div class='form-group'>
                            <label for='message-text' class='col-lg-2 control-label'>Password:</label>
							<div class='col-lg-8'>
                            <input type='password' class='form-control' name='password'>
							</div>
						</div>
						
						<div class='form-group'>
                            <label for='message-text' class='col-lg-2 control-label'>Enter Code:</label>
							
							<div class='col-lg-8'>
                            <input type='password' class='form-control' name='captcha'>
							<img  src='php/captcha.php'>
							</div>
						</div>
						
						
					</div>
					<div class='modal-footer'>
						<!--<p>Footer of modal</p>-->
						
						<button type='reset' class='btn btn-info'>Reset</button>

						<button type='submit'  class='btn btn-primary'>Submit</button>
					</div>
				</form>
		
			";
?>