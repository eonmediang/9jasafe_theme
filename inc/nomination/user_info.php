<?php 

function naijasafe_add_voter()
{
	$fname = $_POST['fname'] ?? null;
	$lname = $_POST['lname'] ?? null;
	$comp_org = $_POST['your-org'] ?? null;
	$email = $_POST['y-email'] ?? '';
	$tel = $_POST['y-phone-no'] ?? null;
	$award = $_POST['award'] ?? '';

	$required_info = [

		$fname,
		$lname,
		$comp_org,
		$tel,
		$award

	];

	if ( $required_info !== array_filter( $required_info ) )
		return false;

	require_once __DIR__.'/NomDb.php';

	$db = new NomDb;
	$db->table = 'voters';
	$action = $db->add(

		[
			'fname'		=> $fname,
			'lname' 	=> $lname,
			'comp_org' 	=> $comp_org,
			'email' 	=> $email,
			'tel' 		=> $tel,
			'award' 	=> $award,

			]

		);

	return $action ?? $db->msg;
}