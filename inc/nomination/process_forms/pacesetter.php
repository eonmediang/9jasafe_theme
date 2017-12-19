<?php 

$post = $_POST;

$nom_name = $post['p_org_name'];
$address = htmlentities( $post['address'] );
$em_web = $post['p-email'];
$tel = $post['p-phone-no'];
$how_long = htmlentities( $post['howlong'] );
$eligibility = htmlentities( $post['eligibility'] );
$voter_id = $vid;
$table_name = 'pacesetter';

$data = [

	'nom_name'	=>	$nom_name,
	'address'	=>	$address,
	'em_web'	=>	$em_web,
	'tel'		=>	$tel,
	'how_long'	=>	$how_long,
	'eligibility'	=>	$eligibility,
	'voter_id'	=>	$voter_id

];