<?php 

$post = $_POST;

$nom_name = $post['p_org_name'];
$em_web = $post['p-email'];
$tel = $post['p-phone-no'];
$how_long = htmlentities( $post['howlong'] );
$eligibility = htmlentities( $post['eligibility'] );
$voter_id = $vid;
$table_name = 'torch_bearer';

$data = [

	'nom_name'	=>	$nom_name,
	'em_web'	=>	$em_web,
	'tel'		=>	$tel,
	'how_long'	=>	$how_long,
	'eligibility'	=>	$eligibility,
	'voter_id'	=>	$voter_id

];