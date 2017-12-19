<?php 

require_once __DIR__.'/../includes/config.php';
require_once CLASS_DIR.'/Nomination.php';
require_once CLASS_DIR.'/TicketReservation.php';
require_once INC_DIR.'/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

	$form = filter_var($_POST['form'], FILTER_SANITIZE_STRING);
	$response = array();
	$table = "";

	if ($form == 'corporate-form'){

		$table 			=	'corporate';

		$org_name		=	filter_var($_POST['org_name'], FILTER_SANITIZE_STRING);
		$email			=	$_POST['email'];
		$phone_no		=	$_POST['phone-no'];
		$relationship	=	$_POST['relationship'];
		$howlong		=	$_POST['howlong'];
		$fname			=	$_POST['fname'];
		$lname			=	$_POST['lname'];
		$your_org		=	$_POST['your-org'];
		$y_title		=	$_POST['y-title'];
		$y_email		=	$_POST['y-email'];
		$y_phone_no		=	$_POST['y-phone-no'];
		$award			=	$_POST['award'];
		$eligibility	=	$_POST['eligibility'];
		$why_nominate	=	(isset($_POST['why_nominate'])) ? $_POST['why_nominate'] : array();
		$nomValues		=	"";

		if(!empty($why_nominate)){

			if (count($why_nominate) > 0) {
			    	foreach ($why_nominate as $value) {
					$nomValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if (!empty($email)){

			if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !filter_var($email, FILTER_VALIDATE_URL)){
				$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
			}

		}

		if (!filter_var($y_email, FILTER_VALIDATE_EMAIL) && !filter_var($y_email, FILTER_VALIDATE_URL)){
			$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
		}

		$phone_no		=	(!empty($phone_no)) ? '0'.(floatval($phone_no)) : '';
		$relationship	=	filter_var($relationship, FILTER_SANITIZE_STRING);
		$howlong		=	filter_var($howlong, FILTER_SANITIZE_STRING);
		$fname			=	filter_var($fname, FILTER_SANITIZE_STRING);
		$lname			=	filter_var($lname, FILTER_SANITIZE_STRING);
		$your_org		=	filter_var($your_org, FILTER_SANITIZE_STRING);
		$y_title		=	filter_var($y_title, FILTER_SANITIZE_STRING);
		$y_phone_no		=	'0'.(floatval($y_phone_no));
		$award			=	filter_var($award, FILTER_SANITIZE_STRING);
		$eligibility	=	filter_var($eligibility, FILTER_SANITIZE_STRING);
		$nomValues		=	filter_var($nomValues, FILTER_SANITIZE_STRING);

		$nomValues		=	($nomValues != "") ? substr(trim($nomValues), 0, (strlen($nomValues) - 2)) : '';

		if(empty($response)){

			$nomData = array(
			
			'org_name'		=>		$org_name,
			'email'			=>		$email,
			'phone_no'		=>		$phone_no,
			'relationship'	=>		$relationship,
			'howlong'		=>		$howlong,
			'fname'			=>		$fname,
			'lname'			=>		$lname,
			'your_org'		=>		$your_org,
			'y_title'		=>		$y_title,
			'y_email'		=>		$y_email,
			'y_phone_no'	=>		$y_phone_no,
			'award'			=>		$award,
			'why_nominate'	=>		$nomValues,
			'eligibility'	=>		$eligibility,
			'time_submitted' =>		time()

			);

			$nom = new Nomination();

			if ($nom->addNomination($table, $nomData)){

				$response = array('responseCode'=>1, 'responseText'=>'Your nomination has been successfully submitted. You will receive a confirmation email. Thank you.');

				sendConfirmationMessage('corporate', $nomData);

			} else {
				$response = array('responseCode'=>0, 'responseText'=>$nom->queryError());
			}

		}
	}

	if ($form == 'ticket-form'){

		$table = 'reservations';

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone_no = $_POST['phone'];
		$org_name = $_POST['org_name'];
		$email = $_POST['email'];
		$no_of_tickets = $_POST['ticket_no'];

		$fname			=	filter_var($fname, FILTER_SANITIZE_STRING);
		$lname			=	filter_var($lname, FILTER_SANITIZE_STRING);
		$no_of_tickets	= (int) $no_of_tickets;

		if (!empty($email)){

			if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
				$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address.');
			}

		} else {
			$response = array('responseCode'=>0, 'responseText'=>'Please enter a valid email address');
		}

		if ( empty( $response ) ) {

			$data = array(
				
				'fullname'		=>	$fname.' '.$lname,
				'phone'			=>	$phone_no,
				'email'			=>	$email,
				'org_name'		=>	$org_name,
				'no_tickets'	=>	$no_of_tickets

				);

			$ticket = new TicketReservation;

			if ($ticket->addOrder($table, $data)){

				$response = array('responseCode'=>1, 'responseText'=>'Your ticket order has been successfully submitted. You will receive a confirmation email. Thank you.');

				header('Content-Type: application/json');

				echo json_encode($response);

				confirmTicket($data);

				die();

			} else {
				$response = array('responseCode'=>0, 'responseText'=>$nom->queryError());
				die();
			}
		}
	}

	if ($form == 'institution-form'){

		$table 			=	'institution';

		$inst_name		=	filter_var($_POST['inst_name'], FILTER_SANITIZE_STRING);
		$relationship	=	$_POST['relationship'];
		$howlong		=	$_POST['howlong'];
		$fname			=	$_POST['fname'];
		$lname			=	$_POST['lname'];
		$your_org		=	$_POST['your-org'];
		$y_title		=	$_POST['y-title'];
		$y_email		=	$_POST['y-email'];
		$y_phone_no		=	$_POST['y-phone-no'];
		$award			=	$_POST['award'];
		$eligibility	=	$_POST['eligibility'];
		$why_nominate	=	(isset($_POST['why_nominate'])) ? $_POST['why_nominate'] : array();
		$nomValues		=	"";

		if(!empty($why_nominate)){

			if (count($why_nominate) > 0) {
			    	foreach ($why_nominate as $value) {
					$nomValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if (!filter_var($y_email, FILTER_VALIDATE_EMAIL) && !filter_var($y_email, FILTER_VALIDATE_URL)){
			$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
		}

		$relationship	=	filter_var($relationship, FILTER_SANITIZE_STRING);
		$howlong		=	filter_var($howlong, FILTER_SANITIZE_STRING);
		$fname			=	filter_var($fname, FILTER_SANITIZE_STRING);
		$lname			=	filter_var($lname, FILTER_SANITIZE_STRING);
		$your_org		=	filter_var($your_org, FILTER_SANITIZE_STRING);
		$y_title		=	filter_var($y_title, FILTER_SANITIZE_STRING);
		$y_phone_no		=	'0'.(floatval($y_phone_no));
		$award			=	filter_var($award, FILTER_SANITIZE_STRING);
		$eligibility	=	filter_var($eligibility, FILTER_SANITIZE_STRING);
		$nomValues		=	filter_var($nomValues, FILTER_SANITIZE_STRING);

		$nomValues		=	($nomValues != "") ? substr(trim($nomValues), 0, (strlen($nomValues) - 2)) : '';

		if(empty($response)){

			$nomData = array(
			
			'inst_name'		=>		$inst_name,
			'relationship'	=>		$relationship,
			'howlong'		=>		$howlong,
			'fname'			=>		$fname,
			'lname'			=>		$lname,
			'your_org'		=>		$your_org,
			'y_title'		=>		$y_title,
			'y_email'		=>		$y_email,
			'y_phone_no'	=>		$y_phone_no,
			'award'			=>		$award,
			'why_nominate'	=>		$nomValues,
			'eligibility'	=>		$eligibility,
			'time_submitted' =>		time()

			);

			$nom = new Nomination();

			if ($nom->addNomination($table, $nomData)){

				$response = array('responseCode'=>1, 'responseText'=>'Your nomination has been successfully submitted. You will receive a confirmation email. Thank you.');

				sendConfirmationMessage('institution', $nomData);

			} else {
				$response = array('responseCode'=>0, 'responseText'=>$nom->queryError());
			}

		}
	}

	if ($form == 'government-form'){

		$table 			=	'government';

		$parastatal		=	filter_var($_POST['parastatal'], FILTER_SANITIZE_STRING);
		$p_email		=	$_POST['p-email'];
		$p_phone_no		=	$_POST['p-phone-no'];
		$state_fed		=	$_POST['state-fed'];
		$fname			=	$_POST['fname'];
		$lname			=	$_POST['lname'];
		$your_org		=	$_POST['your-org'];
		$y_title		=	$_POST['y-title'];
		$y_email		=	$_POST['y-email'];
		$y_phone_no		=	$_POST['y-phone-no'];
		$award			=	$_POST['award'];
		$eligibility	=	$_POST['eligibility'];
		$why_nominate	=	(isset($_POST['why_nominate'])) ? $_POST['why_nominate'] : array();
		$nomValues		=	"";

		if(!empty($why_nominate)){

			if (count($why_nominate) > 0) {
			    	foreach ($why_nominate as $value) {
					$nomValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if (!empty($email)){

			if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !filter_var($email, FILTER_VALIDATE_URL)){
				$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
			}

		}

		if (!filter_var($y_email, FILTER_VALIDATE_EMAIL) && !filter_var($y_email, FILTER_VALIDATE_URL)){
			$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
		}

		$p_phone_no		=	(!empty($p_phone_no)) ? '0'.(floatval($p_phone_no)) : '';
		$state_fed		=	($state_fed == "State") ? filter_var($_POST['state'], FILTER_SANITIZE_STRING) : "Federal";
		$state_fed		=	($state_fed == 'fct') ? $state_fed :	$state_fed.' State';
		$fname			=	filter_var($fname, FILTER_SANITIZE_STRING);
		$lname			=	filter_var($lname, FILTER_SANITIZE_STRING);
		$your_org		=	filter_var($your_org, FILTER_SANITIZE_STRING);
		$y_title		=	filter_var($y_title, FILTER_SANITIZE_STRING);
		$y_phone_no		=	'0'.(floatval($y_phone_no));
		$award			=	filter_var($award, FILTER_SANITIZE_STRING);
		$eligibility	=	filter_var($eligibility, FILTER_SANITIZE_STRING);
		$nomValues		=	filter_var($nomValues, FILTER_SANITIZE_STRING);

		$nomValues		=	($nomValues != "") ? substr(trim($nomValues), 0, (strlen($nomValues) - 2)) : '';

		if(empty($response)){

			$nomData = array(
			
			'parastatal'	=>		$parastatal,
			'p_email'		=>		$p_email,
			'p_phone_no'	=>		$p_phone_no,
			'state_fed'		=>		$state_fed,
			'fname'			=>		$fname,
			'lname'			=>		$lname,
			'your_org'		=>		$your_org,
			'y_title'		=>		$y_title,
			'y_email'		=>		$y_email,
			'y_phone_no'	=>		$y_phone_no,
			'award'			=>		$award,
			'why_nominate'	=>		$nomValues,
			'eligibility'	=>		$eligibility,
			'time_submitted' =>		time()

			);

			$nom = new Nomination();

			if ($nom->addNomination($table, $nomData)){

				$response = array('responseCode'=>1, 'responseText'=>'Your nomination has been successfully submitted. You will receive a confirmation email. Thank you.');

				sendConfirmationMessage('government', $nomData);

			} else {
				$response = array('responseCode'=>0, 'responseText'=>$nom->queryError());
			}

		}
	}

	if ($form == 'individual-form'){

		$table 			=	'individual';

		$pfname			=	filter_var($_POST['pfname'], FILTER_SANITIZE_STRING);
		$plname			=	filter_var($_POST['plname'], FILTER_SANITIZE_STRING);
		$p_title		=	filter_var($_POST['p-title'], FILTER_SANITIZE_STRING);
		$p_org_name		=	filter_var($_POST['p_org_name'], FILTER_SANITIZE_STRING);
		$p_email		=	$_POST['p-email'];
		$p_phone_no		=	$_POST['p-phone-no'];
		$relationship	=	$_POST['relationship'];
		$howlong		=	$_POST['howlong'];
		$fname			=	$_POST['fname'];
		$lname			=	$_POST['lname'];
		$your_org		=	$_POST['your-org'];
		$y_title		=	$_POST['y-title'];
		$y_email		=	$_POST['y-email'];
		$y_phone_no		=	$_POST['y-phone-no'];
		$award			=	$_POST['award'];
		$eligibility	=	$_POST['eligibility'];
		$why_nominate	=	(isset($_POST['why_nominate'])) ? $_POST['why_nominate'] : array();
		$nomValues		=	"";

		if(!empty($why_nominate)){

			if (count($why_nominate) > 0) {
			    	foreach ($why_nominate as $value) {
					$nomValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if (!empty($p_email)){

			if (!filter_var($p_email, FILTER_VALIDATE_EMAIL) && !filter_var($p_email, FILTER_VALIDATE_URL)){
				$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
			}

		}

		if (!filter_var($y_email, FILTER_VALIDATE_EMAIL) && !filter_var($y_email, FILTER_VALIDATE_URL)){
			$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
		}

		$p_title		=	filter_var($p_title, FILTER_SANITIZE_STRING);
		$p_phone_no		=	(!empty($p_phone_no)) ? '0'.(floatval($p_phone_no)) : '';
		$relationship	=	filter_var($relationship, FILTER_SANITIZE_STRING);
		$howlong		=	filter_var($howlong, FILTER_SANITIZE_STRING);
		$fname			=	filter_var($fname, FILTER_SANITIZE_STRING);
		$lname			=	filter_var($lname, FILTER_SANITIZE_STRING);
		$your_org		=	filter_var($your_org, FILTER_SANITIZE_STRING);
		$y_title		=	filter_var($y_title, FILTER_SANITIZE_STRING);
		$y_phone_no		=	'0'.(floatval($y_phone_no));
		$award			=	filter_var($award, FILTER_SANITIZE_STRING);
		$eligibility	=	filter_var($eligibility, FILTER_SANITIZE_STRING);
		$nomValues		=	filter_var($nomValues, FILTER_SANITIZE_STRING);

		$nomValues		=	($nomValues != "") ? substr(trim($nomValues), 0, (strlen($nomValues) - 2)) : '';

		if(empty($response)){

			$nomData = array(
			
			'pfname'		=>		$pfname,
			'plname'		=>		$plname,
			'p_title'		=>		$p_title,
			'p_org_name'	=>		$p_org_name,
			'p_email'		=>		$p_email,
			'p_phone_no'	=>		$p_phone_no,
			'relationship'	=>		$relationship,
			'howlong'		=>		$howlong,
			'fname'			=>		$fname,
			'lname'			=>		$lname,
			'your_org'		=>		$your_org,
			'y_title'		=>		$y_title,
			'y_email'		=>		$y_email,
			'y_phone_no'	=>		$y_phone_no,
			'award'			=>		$award,
			'why_nominate'	=>		$nomValues,
			'eligibility'	=>		$eligibility,
			'time_submitted' =>		time()

			);

			$nom = new Nomination();

			if ($nom->addNomination($table, $nomData)){

				$response = array('responseCode'=>1, 'responseText'=>'Your nomination has been successfully submitted. You will receive a confirmation email. Thank you.');

				sendConfirmationMessage('corporate', $nomData);

			} else {
				$response = array('responseCode'=>0, 'responseText'=>$nom->queryError());
			}

		}
	}

	if ($form == 'hse-manager-form'){

		$table 			=	'hse_manager';

		$pfname			=	filter_var($_POST['pfname'], FILTER_SANITIZE_STRING);
		$plname			=	filter_var($_POST['plname'], FILTER_SANITIZE_STRING);
		$p_title		=	filter_var($_POST['p-title'], FILTER_SANITIZE_STRING);
		$p_org_name		=	filter_var($_POST['p_org_name'], FILTER_SANITIZE_STRING);
		$p_email		=	$_POST['p-email'];
		$p_phone_no		=	$_POST['p-phone-no'];
		$relationship	=	$_POST['relationship'];
		$howlong		=	$_POST['howlong'];
		$fname			=	$_POST['fname'];
		$lname			=	$_POST['lname'];
		$your_org		=	$_POST['your-org'];
		$y_title		=	$_POST['y-title'];
		$y_email		=	$_POST['y-email'];
		$y_phone_no		=	$_POST['y-phone-no'];
		$award			=	$_POST['award'];
		$eligibility	=	$_POST['eligibility'];
		$why_nominate	=	(isset($_POST['why_nominate'])) ? $_POST['why_nominate'] : array();
		$pro_membership	=	(isset($_POST['pro_membership'])) ? $_POST['pro_membership'] : array();
		$nomValues		=	"";
		$memValues		=	"";

		if(!empty($why_nominate)){

			if (count($why_nominate) > 0) {
			    	foreach ($why_nominate as $value) {
					$nomValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if(!empty($pro_membership)){

			if (count($pro_membership) > 0) {
			    	foreach ($pro_membership as $value) {
					$memValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if (!empty($p_email)){

			if (!filter_var($p_email, FILTER_VALIDATE_EMAIL) && !filter_var($p_email, FILTER_VALIDATE_URL)){
				$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
			}

		}

		if (!filter_var($y_email, FILTER_VALIDATE_EMAIL) && !filter_var($y_email, FILTER_VALIDATE_URL)){
			$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
		}

		$p_title		=	filter_var($p_title, FILTER_SANITIZE_STRING);
		$p_phone_no		=	(!empty($p_phone_no)) ? '0'.(floatval($p_phone_no)) : '';
		$relationship	=	filter_var($relationship, FILTER_SANITIZE_STRING);
		$howlong		=	filter_var($howlong, FILTER_SANITIZE_STRING);
		$fname			=	filter_var($fname, FILTER_SANITIZE_STRING);
		$lname			=	filter_var($lname, FILTER_SANITIZE_STRING);
		$your_org		=	filter_var($your_org, FILTER_SANITIZE_STRING);
		$y_title		=	filter_var($y_title, FILTER_SANITIZE_STRING);
		$y_phone_no		=	'0'.(floatval($y_phone_no));
		$award			=	filter_var($award, FILTER_SANITIZE_STRING);
		$eligibility	=	filter_var($eligibility, FILTER_SANITIZE_STRING);
		$nomValues		=	filter_var($nomValues, FILTER_SANITIZE_STRING);
		$memValues		=	filter_var($memValues, FILTER_SANITIZE_STRING);

		$nomValues		=	($nomValues != "") ? substr(trim($nomValues), 0, (strlen($nomValues) - 2)) : '';
		$memValues		=	($memValues != "") ? substr(trim($memValues), 0, (strlen($memValues) - 2)) : '';

		if(empty($response)){

			$nomData = array(
			
			'pfname'		=>		$pfname,
			'plname'		=>		$plname,
			'p_title'		=>		$p_title,
			'p_org_name'	=>		$p_org_name,
			'p_email'		=>		$p_email,
			'p_phone_no'	=>		$p_phone_no,
			'relationship'	=>		$relationship,
			'howlong'		=>		$howlong,
			'fname'			=>		$fname,
			'lname'			=>		$lname,
			'your_org'		=>		$your_org,
			'y_title'		=>		$y_title,
			'y_email'		=>		$y_email,
			'y_phone_no'	=>		$y_phone_no,
			'award'			=>		$award,
			'why_nominate'	=>		$nomValues,
			'pro_membership'	=>	$memValues,
			'eligibility'	=>		$eligibility,
			'time_submitted' =>		time()

			);

			$nom = new Nomination();

			if ($nom->addNomination($table, $nomData)){

				$response = array('responseCode'=>1, 'responseText'=>'Your nomination has been successfully submitted. You will receive a confirmation email. Thank you.');

				sendConfirmationMessage('hse-manager', $nomData);

			} else {
				$response = array('responseCode'=>0, 'responseText'=>$nom->queryError());
			}

		}
	}

	if ($form == 'hse-dept-form'){

		$table 			=	'hse_dept';

		$pfname			=	filter_var($_POST['pfname'], FILTER_SANITIZE_STRING);
		$p_org_name		=	filter_var($_POST['p_org_name'], FILTER_SANITIZE_STRING);
		$p_email		=	$_POST['p-email'];
		$p_phone_no		=	$_POST['p-phone-no'];
		$relationship	=	$_POST['relationship'];
		$howlong		=	$_POST['howlong'];
		$fname			=	$_POST['fname'];
		$lname			=	$_POST['lname'];
		$your_org		=	$_POST['your-org'];
		$y_title		=	$_POST['y-title'];
		$y_email		=	$_POST['y-email'];
		$y_phone_no		=	$_POST['y-phone-no'];
		$award			=	$_POST['award'];
		$eligibility	=	$_POST['eligibility'];
		$why_nominate	=	(isset($_POST['why_nominate'])) ? $_POST['why_nominate'] : array();
		$pro_membership	=	(isset($_POST['pro_membership'])) ? $_POST['pro_membership'] : array();
		$nomValues		=	"";
		$memValues		=	"";

		if(!empty($why_nominate)){

			if (count($why_nominate) > 0) {
			    	foreach ($why_nominate as $value) {
					$nomValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if(!empty($pro_membership)){

			if (count($pro_membership) > 0) {
			    	foreach ($pro_membership as $value) {
					$memValues .= str_replace("-", " ", $value).', ';
				}
			
			}
		}

		if (!empty($p_email)){

			if (!filter_var($p_email, FILTER_VALIDATE_EMAIL) && !filter_var($p_email, FILTER_VALIDATE_URL)){
				$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
			}

		}

		if (!filter_var($y_email, FILTER_VALIDATE_EMAIL) && !filter_var($y_email, FILTER_VALIDATE_URL)){
			$response = array('responseCode'=>0, 'responseText'=>'You have entered an invalid email address or website address');
		}

		$p_phone_no		=	(!empty($p_phone_no)) ? '0'.(floatval($p_phone_no)) : '';
		$relationship	=	filter_var($relationship, FILTER_SANITIZE_STRING);
		$howlong		=	filter_var($howlong, FILTER_SANITIZE_STRING);
		$fname			=	filter_var($fname, FILTER_SANITIZE_STRING);
		$lname			=	filter_var($lname, FILTER_SANITIZE_STRING);
		$your_org		=	filter_var($your_org, FILTER_SANITIZE_STRING);
		$y_title		=	filter_var($y_title, FILTER_SANITIZE_STRING);
		$y_phone_no		=	'0'.(floatval($y_phone_no));
		$award			=	filter_var($award, FILTER_SANITIZE_STRING);
		$eligibility	=	filter_var($eligibility, FILTER_SANITIZE_STRING);
		$nomValues		=	filter_var($nomValues, FILTER_SANITIZE_STRING);
		$memValues		=	filter_var($memValues, FILTER_SANITIZE_STRING);

		$nomValues		=	($nomValues != "") ? substr(trim($nomValues), 0, (strlen($nomValues) - 2)) : '';
		$memValues		=	($memValues != "") ? substr(trim($memValues), 0, (strlen($memValues) - 2)) : '';

		if(empty($response)){

			$nomData = array(
			
			'pfname'		=>		$pfname,
			'p_org_name'	=>		$p_org_name,
			'p_email'		=>		$p_email,
			'p_phone_no'	=>		$p_phone_no,
			'relationship'	=>		$relationship,
			'howlong'		=>		$howlong,
			'fname'			=>		$fname,
			'lname'			=>		$lname,
			'your_org'		=>		$your_org,
			'y_title'		=>		$y_title,
			'y_email'		=>		$y_email,
			'y_phone_no'	=>		$y_phone_no,
			'award'			=>		$award,
			'why_nominate'	=>		$nomValues,
			'pro_membership'	=>	$memValues,
			'eligibility'	=>		$eligibility,
			'time_submitted' =>		time()

			);

			$nom = new Nomination();

			if ($nom->addNomination($table, $nomData)){

				$response = array('responseCode'=>1, 'responseText'=>'Your nomination has been successfully submitted. You will receive a confirmation email. Thank you.');

				sendConfirmationMessage('hse-dept', $nomData);

			} else {
				$response = array('responseCode'=>0, 'responseText'=>$nom->queryError());
			}

		}
	}
}



header('Content-Type: application/json');

echo json_encode($response); ?>