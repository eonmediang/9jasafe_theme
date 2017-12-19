<h3 class="text-center">Institution nomination form</h3><hr>
<form action="" id="institution-form" method="post">
	<div class="row">
		<div class="form-group col-sm-12">
	 		<label for="inst_name" class="sr-only">Name of institution</label>
	 		<input class="form-control" type="text" id="inst_name" name="inst_name" placeholder="Name of Institution" required>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
	 		<label for="relationship" class="sr-only">How do you know the institution?</label>
	 		<p>How do you know the institution?</p>
	 		<select name="relationship" id="relationship" class="dropdown form-control">
	 			<option value="personal">Personal</option>
	 			<option value="professional">Professional</option>
	 			<option value="academic">Academic</option>
	 			<option value="network">Network</option>
	 			<option value="other">Other</option>
	 		</select>
	 	</div>
	 	<div class="form-group col-sm-6">
	 		<label for="howlong" class="sr-only">How long have you known the institution?</label>
	 		<p>How long have you known the institution?</p>
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
	 				<p>Please explain (as per your above selection) with a specific example, why this institution should win the award</p>
	 				<textarea class="form-control" name="eligibility" id="eligibility" cols="30" rows="5" required></textarea>
	 			</div>
	 		</div>
	 	</div>
	 	<div class="form-group col-sm-6">
	 		<p>Why nominate this institution for this award?</p>
			<p><small>I nominate this institution for: </small></p>
	 		<label for="initiatives" class="sr-only">Why nominate this institution for this award?</label>
	 		<input type="checkbox" name="why_nominate[]" value="Initiatives"><span>   Initiatives</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="Course-content"><span>   Course content</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="Faculty"><span>   Faculty</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="Academic/programmes"><span>   Academic programmes</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="Collaboration"><span>   Collaboration</span><br /><br /><p></p>
	 		<p><input type="submit" id="submit" class="btn btn-primary" value="Submit nomination"></p>
	 	</div>
	</div>
</form>

<script>
	var requiredInputs = $('input[required]');
	requiredInputs.addClass('required');
	$('#submit').click(function(){
		$('#submitting').html('<strong>Submitting form...</strong>');
		fbq('track', 'CompleteRegistration');
	});
</script>