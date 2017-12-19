<script>
	// var stateRadio = $('input[state-radio]');
	// var fedRadio = $('input[fed-radio]');
	// // if (stateRadio.checked === true){
	// // 	alert('checked!');
	// // }
	// stateRadio.click(function(){
	// 	$('#state').removeAttr('disabled');
	// });

	// fedRadio.click(function(){
	// 	$('#state').attr('disabled', 'disabled');
	// });

</script>
<h3 class="text-center">Government parastatal nomination form</h3><hr>
<form action="" id="government-form" method="post">
	<div class="row">
		<div class="form-group col-sm-12">
	 		<label for="pfname" class="sr-only">Parastatal</label>
	 		<input class="form-control required" type="text" id="parastatal" name="parastatal" placeholder="Government parastatal" required>
	 	</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-6">
	 		<label for="p-email" class="sr-only">Email or website if available</label>
	 		<input class="form-control" type="text" id="p-email" name="p-email" placeholder="Email or website (if available)" maxlength="30">
	 	</div>
	 	<div class="form-group col-sm-6">
	 		<label for="p-phone-no" class="sr-only">Phone number</label>
	 		<input class="form-control" type="text" id="p-phone-no" name="p-phone-no" placeholder="Phone number" maxlength="30">
	 	</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-5">
	 		<input type="radio" id="state-fed" name="state-fed" value="Federal" checked="checked" fed-radio><span style="padding: 0 50px 0 5px; font-size: 1.2em;">   Federal</span>
	 		<input type="radio" id="state-fed" name="state-fed" value="State" state-radio><span style="padding: 0 30px 0 5px; font-size: 1.2em;">   State</span><br /> 
	 	</div>
	 	<div class="form-group col-sm-5">
	 		<select name="state" id="state" class="dropdown form-control" disabled="disabled">
	 			<option value="Abia">Abia</option>
	 			<option value="Adamawa">Adamawa</option>
	 			<option value="Akwa Ibom">Akwa Ibom</option>
	 			<option value="Anambra">Anambra</option>
	 			<option value="Bauchi">Bauchi</option>
	 			<option value="Bayelsa">Bayelsa</option>
	 			<option value="Benue">Benue</option>
	 			<option value="Borno">Borno</option>
	 			<option value="Cross River">Cross river</option>
	 			<option value="Delta">Delta</option>
	 			<option value="Ebonyi">Ebonyi</option>
	 			<option value="Edo">Edo</option>
	 			<option value="Ekiti">Ekiti</option>
	 			<option value="Enugu">Enugu</option>
	 			<option value="Gombe">Gombe</option>
	 			<option value="Imo">Imo</option>
	 			<option value="Jigawa">Jigawa</option>
	 			<option value="Kaduna">Kaduna</option>
	 			<option value="Kano">Kano</option>
	 			<option value="Katsina">Katsina</option>
	 			<option value="Kebbi">Kebbi</option>
	 			<option value="Kogi">Kogi</option>
	 			<option value="Kwara">Kwara</option>
	 			<option value="Lagos">Lagos</option>
	 			<option value="Nassarawa">Nassarawa</option>
	 			<option value="Niger">Niger</option>
	 			<option value="Ogun">Ogun</option>
	 			<option value="Ondo">Ondo</option>
	 			<option value="Osun">Osun</option>
	 			<option value="Oyo">Oyo</option>
	 			<option value="Plateau">Plateau</option>
	 			<option value="Rivers">Rivers</option>
	 			<option value="Sokoto">Sokoto</option>
	 			<option value="Taraba">Taraba</option>
	 			<option value="Yobe">Yobe</option>
	 			<option value="Zamfara">Zamfara</option>
	 			<option value="fct">F.C.T Abuja</option>
	 		</select>
	 	</div>
	</div>
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
	 		<p>Why nominate this parastatal for this award?</p>
			<p><small>I nominate this parastatal for: </small></p>
	 		<label for="initiatives" class="sr-only">Why nominate this parastatal for this award?</label>
	 		<input type="checkbox" name="why_nominate[]" value="Initiatives"><span>   Initiatives</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="media-campaign"><span>  Media campaign</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="training"><span>   Training</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="sponsorship"><span>   Sponsorship</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="enforcement"><span>   Enforcement</span><br /> 
	 		<input type="checkbox" name="why_nominate[]" value="collaboration"><span>   Collaboration</span><br /> <br />
	 		<p><input type="submit" id="submit" class="btn btn-primary" value="Submit nomination"></p>
	 		<span id="submitting" style="padding-left: 10px; padding-top: 10px; font-style: italic; display: inline-block;"></span>'
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