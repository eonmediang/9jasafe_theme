<form action="" method="post" class="modal-content" method="post" data-form="achievements">
	<h3 class="text-center">Achievements Awards</h3><hr>
	<div class="container-fluid">
		<div class="row">
		 	<div class="form-group col-sm-6">
		 		<label for="p_org_name" class="sr-only">Company/Organisation's name</label>
		 		<p>Company/Organisation's name</p>
		 		<input class="form-control required" type="text" id="p_org_name" name="p_org_name" placeholder="Company/Organisation's name" required>
			</div>
			<div class="form-group col-sm-6">
		 		<label for="p-email" class="sr-only">Email or website if available</label>
		 		<p>Email or website (if available)</p>
		 		<input class="form-control" type="text" id="p-email" name="p-email" placeholder="Email or website (if available)" maxlength="30">
		 	</div>
		</div>
		<div class="row">
		 	<div class="form-group col-sm-6">
		 		<label for="p-phone-no" class="sr-only">Phone number</label>
		 		<p>Phone number</p>
		 		<input class="form-control" type="text" id="p-phone-no" name="p-phone-no" placeholder="Phone number" maxlength="30">
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
		 	<div class="form-group col-sm-6">
				<label for="address" class="sr-only">Company/Organisation's address (if available)</label>
				<p>Company/Organisation's address (if available)</p>
				<textarea class="form-control" name="address" id="address" rows="2"></textarea>
			</div>
		</div>
		<!-- Your information -->
		<?php include 'your-information.php'; ?>
	</div>
	<input type="hidden" name="form-name" value="achievements">
</form>