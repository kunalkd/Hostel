<?php
echo "
<form class='form-horizontal' method='post' action='php/out_house.php' enctype='multipart/form-data'>
	<div class='modal-header'>
		<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>X</button>
		<h4 class='modal-title'>Admission Form</h4>
	</div>
	<div class='modal-body'>
		<!--<p>Body of modal</p>-->
		<div class='form-group'>
			<label for='contact-name' class='col-lg-2 control-label'>Name:</label>
			<div class='col-lg-10'>
				<input type='text' class='form-control' name='name' placeholder='Full Name' required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-2 control-label'>Father Name:</label>
			<div class='col-lg-10'>
				<input type='text' class='form-control' name='fname'required>
				
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-2 control-label'>Mother Name:</label>
			<div class='col-lg-10'>
				<input type='text' class='form-control' name='mname'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-2 control-label'>Date of Birth:</label>
			<div class='col-lg-10'>
				<input type='date' class='form-control' name='dob'  required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-email' class='col-lg-2 control-label'>Address:</label>
			<div class='col-lg-10'>
				<input type='text' class='form-control' name='add'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-email' class='col-lg-2 control-label'>Gaurdian's Address:</label>
			<div class='col-lg-10'>
				<input type='text' class='form-control' name='gadd'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-email' class='col-lg-2 control-label'>Contact Number:</label>
			<div class='col-lg-10'>
				<input type='text' class='form-control' name='contact'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-email' class='col-lg-2 control-label'>Gaurdian's Contact Number:</label>
			<div class='col-lg-10'>
				<input type='text' class='form-control' name='gcontact'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-email' class='col-lg-2 control-label'>Email id:</label>
			<div class='col-lg-10'>
				<input type='email' class='form-control' name='email'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-email' class='col-lg-2 control-label'>Upload Photo:</label>
			<div class='col-lg-10'>
				<input type='file' class='form-control' name='file'required>
			</div>
			<div class='col-lg-12'><font style='color:red;'>*(Image size should be less than 500kb and It should be a passport size photo)</font></div>
		</div>
		<div class='form-group'>
			<label for='contact-email' class='col-lg-2 control-label'>Stream:</label>
			<div class='col-lg-10'>
				<select name='stream' class='form-control'required>
					<option value='Engineering'>Engineering</option>
					<option value='Commerce'>Commerce</option>
					<option value='Arts'>Arts</option>
					<option value='Medical'>Medical </option>
					<option value='Law'>Law</option>
					<option value='Management'>Management</option>
					<option value='Other'>Other</option>
				</select>
			</div>
		</div>
		<div class='form-group'>
			<div class='col-lg-10'>
				<label for='contact-email' class='col-lg-2 control-label '>Academic Details:</label>
			</div>
		</div>
		<div class='form-group'>
			<div class='col-sm-2'>
				<label for='contact-email' class='col-sm-2 control-label '>Examination&</label>
			</div>
			<div class='col-sm-3'>
				<label for='contact-email' class='col-sm-2 control-label '>Year</label>
			</div>
			<div class='col-sm-2'>
				<label for='contact-email' class='col-sm-2 control-label '>Attempts Taken</label>
			</div>
			<div class='col-sm-2'>
				<label for='contact-email' class='col-sm-2 control-label '>University</label>
			</div>
			<div class='col-sm-2'>
				<label for='contact-email' class='col-sm-2 control-label '>Percentage</label>
			</div>
		</div>
		<div class='form-group'><!--ssc -->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>SSC</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='ssc_year'required>
			</div>
			<div class='col-sm-2'>
				
				<select name='ssc_attempt' class='form-control 'required>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>
				</select>
				
				
			</div>
			<div class='col-sm-3'>
				<select name='ssc_uni' class='form-control col-sm-3'required>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='ssc_per'required>
			</div>
		</div>
		<div class='form-group'><!--xi -->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>FYJC(XI)</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='xi_year'required>
			</div>
			<div class='col-sm-2'>
				
				<select name='xi_attempt' class='form-control col-sm-2'required>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>									
				</select>
				
			</div>
			<div class='col-sm-3'>
				<select name='xi_uni' class='form-control col-sm-3'required>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='xi_per'required>
			</div>
		</div>
		<div class='form-group'><!--hsc -->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>HSC</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='hsc_year'required>
			</div>
			<div class='col-sm-2'>
				
				<select name='hsc_attempt' class='form-control col-sm-2'required>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>	
				</select>
				
				
			</div>
			<div class='col-sm-3'>
				<select name='hsc_uni' class='form-control col-sm-3'required>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='hsc_per'required>
			</div>
		</div>
		<div class='form-group'><!--fy -->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>FY</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='fy_year'>
			</div>
			<div class='col-sm-2'>
				
				<select name='fy_attempt' class='form-control col-sm-2'>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>	
				</select>
				
				
			</div>
			<div class='col-sm-3'>
				<select name='fy_uni' class='form-control col-sm-3'>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='fy_per'>
			</div>
		</div>
		<div class='form-group'><!--sy -->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>SY</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='sy_year'>
			</div>
			<div class='col-sm-2'>
				
				<select name='sy_attempt' class='form-control col-sm-2'>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>	
				</select>
				
				
			</div>
			<div class='col-sm-3'>
				<select name='sy_uni' class='form-control col-sm-3'>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='sy_per'>
			</div>
		</div>
		<div class='form-group'><!--ty-->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>TY</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='ty_year'>
			</div>
			<div class='col-sm-2'>
				
				<select name='ty_attempt' class='form-control col-sm-2'>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>	
				</select>
				
				
			</div>
			<div class='col-sm-3'>
				<select name='ty_uni' class='form-control col-sm-3'>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='ty_per'>
			</div>
		</div>
		<div class='form-group'><!--cpt -->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>CPT</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='cpt_year'>
			</div>
			<div class='col-sm-2'>
				
				<select name='cpt_attempt' class='form-control col-sm-2'>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>	
				</select>
				
				
			</div>
			<div class='col-sm-3'>
				<select name='cpt_uni' class='form-control col-sm-3'>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='cpt_per'>
			</div>
		</div>
		<div class='form-group'><!--ipcc -->
			<div class='col-sm-1'>
				<label for='contact-email' class='col-sm-2 control-label '>IPCC</label>
			</div>
			<div class='col-sm-4'>
				<input type='date' class='form-control col-sm-2'  name='ipcc_year'>
			</div>
			<div class='col-sm-2'>
				
				<select name='ipcc_attempt' class='form-control col-sm-2'>
					<option value='none'>0</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>More</option>	
				</select>
				
				
			</div>
			<div class='col-sm-3'>
				<select name='ipcc_uni' class='form-control col-sm-3'>
					<option value='Mumbai University'>Mumbai University</option>
					<option value='Amravati University'>Amravati University</option>
					<option value='Pune University'>Pune University</option>
					<option value='Saurashtra University'>Saurashtra University </option>
					<option value='Maharashtra State Board'>Maharashtra State Board</option>
					<option value='Gujarat State Board'>Gujarat State Board</option>
					<option value='CBSE'>CBSE</option>
					<option value='ISCE'>ICSCE</option>
					<option value='ICAI'>ICAI</option>
					<option value='Other'>Other</option>
				</select>
				
			</div>
			<div class='col-sm-2'>
				<input class='form-control col-sm-2' type='text' name='ipcc_per'>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-4 control-label'>Last given examination</label>
			<div class='col-lg-8'>
				<select name='last_exam' class='form-control'required>
					<option value='HSC'>HSC</option>
					<option value='FY'>FY B.Com/B.A/B.Sc/B.E</option>
					<option value='SY'>SY B.Com/B.A/B.Sc/B.E</option>
					<option value='TY'>TY B.Com/B.A/B.Sc/B.E</option>
					<option value='TY'>Other</option>
				</select>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-4 control-label'>Centre:</label>
			<div class='col-lg-8'>
				<input type='text' class='form-control' name='centre'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-4 control-label'>Last school attended</label>
			<div class='col-lg-8'>
				<input type='text' class='form-control' name='last_school'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-4 control-label'>In ruuning year for which class are you applying?</label>
			<div class='col-lg-8'>
				<select name='run_class' class='form-control'required>
					<option value='HSC'>HSC</option>
					<option value='FY'>FY B.Com/B.A/B.Sc/B.E</option>
					<option value='SY'>SY B.Com/B.A/B.Sc/B.E</option>
					<option value='TY'>TY B.Com/B.A/B.Sc/B.E</option>
					<option value='TY'>Other</option>
				</select>
			</div>
		</div>
		<div class='form-group'>
			<label for='contact-name' class='col-lg-4 control-label'>Have you ever attended any hostel before joining this institution?If yes do write.</label>
			<div class='col-lg-8'>
				<input type='text' class='form-control'  name='any_hostel'required>
			</div>
		</div>
		<div class='form-group'>
			<label for='message-text' class='col-lg-4 control-label'>Enter Code:</label>
			
			<div class='col-lg-8'>
				<input type='password' class='form-control' name='captcha'required>
				<img  src='php/captcha.php'>
			</div>
		</div>
		
		
	</div>
	<div class='modal-footer'>
		<!--<p>Footer of modal</p>-->
		<button type='submit' class='btn btn-primary'>Submit</button>
		<button type='reset' class='btn btn-primary'>Reset</button>
	</div>
</form>
";
?>