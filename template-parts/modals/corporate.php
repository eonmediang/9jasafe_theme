<form action="" id="corporate-form" class="modal-content" method="post" data-form="guardian">
	<h3 class="text-center">Company/Organisation nomination form</h3><hr>
	<div class="container-fluid">
		<div class="row">
			<div class="form-group col-sm-12">
		 		<label for="org_name" class="sr-only">Company or organisation's name</label>
		 		<input class="form-control required" type="text" id="org_name" name="org_name" placeholder="Company / organisation" required>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
		 		<label for="email" class="sr-only">Email or website if available</label>
		 		<input class="form-control" type="text" id="email" name="email" placeholder="Email or website (if available)" maxlength="30">
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="phone-no" class="sr-only">Phone number</label>
		 		<input class="form-control" type="text" id="phone-no" name="phone-no" placeholder="Phone number" maxlength="11">
		 	</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
		 		<label for="relationship" class="sr-only">How do you know the Company / organization?</label>
		 		<p>How do you know the Company / organization?</p>
		 		<select name="relationship" id="relationship" class="dropdown form-control">
		 			<option value="personal">Personal</option>
		 			<option value="professional">Professional</option>
		 			<option value="academic">Academic</option>
		 			<option value="network">Network</option>
		 			<option value="other">Other</option>
		 		</select>
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="howlong" class="sr-only">How long have you known the Company / organization?</label>
		 		<p>How long have you known the Company / organization?</p>
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
		 		<p>Why nominate this company / organization for this award?</p>
				<p><small>I nominate this company / organization for: </small></p>
		 		<label for="initiatives" class="sr-only">Why nominate this company / organization for this award?</label>
		 		<input type="checkbox" name="why_nominate[]" value="initiatives"><span>   Initiatives</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="publications"><span>   Publications</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="training"><span>   Training</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="social-responsibility"><span>   Social Responsibility</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="sponsorship"><span>   Sponsorship</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="impact-on-the-environment"><span>   Impact on the environment</span><br /> 
		 		<input type="checkbox" name="why_nominate[]" value="safety-policy-/-procedures"><span>   Safety policy / Procedures</span><br /><br /><p></p>
		 		<p><input type="submit" id="submit" class="btn" value="Submit nomination"></p>
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