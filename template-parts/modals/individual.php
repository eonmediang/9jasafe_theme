<form action="" id="individual-form" method="post" class="modal-content" method="post" data-form="yello">
	<h3 class="text-center">Individual nomination form</h3><hr>
	<div class="container-fluid">
		<div class="row">
			<div class="form-group col-sm-6">
		 		<label for="pfname" class="sr-only">First name</label>
		 		<input class="form-control required" type="text" id="pfname" name="pfname" placeholder="Person's first name" maxlength="30" required>
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="lname" class="sr-only">Last name</label>
		 		<input class="form-control required" type="text" id="plname" name="plname" placeholder="Person's last name" maxlength="30" required>
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="ptitle" class="sr-only">Person's title</label>
		 		<select name="p-title" id="p-title" class="dropdown form-control">
		 			<option value="Mr.">Mr.</option>
		 			<option value="Mrs.">Mrs.</option>
		 			<option value="Ms.">Miss.</option>
		 			<option value="Dr.">Dr.</option>
		 		</select>
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="p_org_name" class="sr-only">Company or organisation's name</label>
		 		<input class="form-control required" type="text" id="p_org_name" name="p_org_name" placeholder="Company / organisation" required>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
		 		<label for="p-email" class="sr-only">Email or website if available</label>
		 		<input class="form-control" type="text" id="p-email" name="p-email" placeholder="Email or website (if available)" maxlength="30" required>
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="p-phone-no" class="sr-only">Phone number</label>
		 		<input class="form-control" type="text" id="p-phone-no" name="p-phone-no" placeholder="Phone number" maxlength="30" required>
		 	</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
		 		<label for="relationship" class="sr-only">How do you know the nominee?</label>
		 		<p>How do you know the nominee?</p>
		 		<select name="relationship" id="relationship" class="dropdown form-control">
		 			<option value="personal">Personal</option>
		 			<option value="professional">Professional</option>
		 			<option value="academic">Academic</option>
		 			<option value="network">Network</option>
		 			<option value="other">Other</option>
		 		</select>
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="howlong" class="sr-only">How long have you known the nominee?</label>
		 		<p>How long have you known the nominee?</p>
		 		<select name="howlong" id="howlong" class="dropdown form-control">
		 			<option value="0-5">0 - 5 years</option>
		 			<option value="6-10">6 - 10 years</option>
		 			<option value="11-20">11 - 20 years</option>
		 			<option value=">20">More than 20 years</option>
		 		</select>
		 	</div>
		</div><!-- <hr> -->
		<!-- Your information -->
		<?php include 'your-information.php'; ?>
		<div class="row">
			<div class="form-group col-sm-6">
		 		<div class="row">
		 			<div class="form-group col-sm-12">
		 				<label for="award" class="sr-only">How did you hear about the award?</label>
				 		<p>How did you hear about the award?</p>
				 		<select name="award" id="award" class="dropdown form-control">
				 			<option value="Facebook">Facebook</option>
				 			<option value="Twitter">Twitter</option>
				 			<option value="LinkedIn">LinkedIn</option>
				 			<option value="Newspaper ad">Newspaper ad</option>
				 			<option value="Others">Others</option>
				 		</select>
		 			</div>
		 			<div class="form-group col-sm-12">
		 				<h4>Summary of Eligibility</h4>
		 				<p>Please explain (as per your above selection) with a specific example, why this nominee should win the award</p>
		 				<textarea class="form-control" name="eligibility" id="eligibility" cols="30" rows="5" required></textarea>
		 			</div>
		 		</div>
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<p>Why nominate this nominee for this award?</p>
				<p><small>I nominate this person for: </small></p>
		 		<label for="initiatives" class="sr-only">Why nominate this nominee for this award?</label>
		 		<input type="checkbox" name="why_nominate[]" value="Initiatives"><span>   Initiatives</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="Author/Publisher"><span>  Author/Publisher</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="Training"><span>   Training</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="Mentor"><span>   Mentor</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="Humanitarian"><span>   Humanitarian</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="Rescue/operations"><span>   Rescue operations</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="Advocacy"><span>   Advocacy</span><br /><br /><p></p>
		 		<p><input type="submit" id="submit" class="btn btn-primary" value="Submit nomination"></p>
		 	</div>
		</div>
	</div>
</form>

<script>
	// var requiredInputs = $('input[required]');
	// requiredInputs.addClass('required');
	// $('#submit').click(function(){
	// 	$('#submitting').html('<strong>Submitting form...</strong>');
	// 	fbq('track', 'CompleteRegistration');
	// });
</script>