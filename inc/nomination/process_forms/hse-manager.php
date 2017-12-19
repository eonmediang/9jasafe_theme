<?php 

$post = $_POST;

$nom_name = $post['n_name'];
$comp_org = $post['p_org_name'];
// $nom_type = $post['nom-type'];
$address = htmlentities( $post['address'] );
// $social_acct = $post['social-acct'];
$em_web = $post['p-email'];
$tel = $post['p-phone-no'];
$how_long = htmlentities( $post['howlong'] );
$eligibility = htmlentities( $post['eligibility'] );
$voter_id = $vid;
$table_name = 'hse_manager';

$data = [

	'nom_name'	=>	$nom_name,
	'comp_org'	=>	$comp_org,
	'address'	=>	$address,
	// 'nom_type'	=>	$nom_type,
	// 'social_acct'	=>	$social_acct,
	'em_web'	=>	$em_web,
	'tel'		=>	$tel,
	'how_long'	=>	$how_long,
	'eligibility'	=>	$eligibility,
	'voter_id'	=>	$voter_id

];