<form action="" method="post" class="modal-content" method="post" data-form="personality">
	<h3 class="text-center">Personality of the Year</h3><hr>
	<div class="container-fluid">
		<div class="row">
		 	<div class="form-group col-sm-6">
		 		<label for="p_org_name" class="sr-only">Individual, Company or organisation's name</label>
		 		<p>Individual, Company or organisation's name</p>
		 		<input class="form-control required" type="text" id="p_org_name" name="p_org_name" placeholder="Individual/Company/organisation" required>
			</div>
			<div class="form-group col-sm-6">
		 		<label for="nom_type" class="sr-only">Individual or company/Organisation?</label>
		 		<p>Individual or company/Organisation?</p>
		 		<select name="nom_type" class="dropdown form-control">
		 			<option value="individual">Individual</option>
		 			<option value="comp_org">Company/Organisation</option>
		 		</select>
		 	</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
		 		<label for="p-email" class="sr-only">Email or website if available</label>
		 		<p>Email or website (if available)</p>
		 		<input class="form-control" type="text" id="p-email" name="p-email" placeholder="Email or website (if available)" maxlength="30">
		 	</div>
		 	<div class="form-group col-sm-6">
		 		<label for="p-phone-no" class="sr-only">Phone number</label>
		 		<p>Phone number</p>
		 		<input class="form-control" type="text" id="p-phone-no" name="p-phone-no" placeholder="Phone number" maxlength="30">
		 	</div>
		</div>
		<div class="row">
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
	</div>
	<input type="hidden" name="form-name" value="personality">
</form>