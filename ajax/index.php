<?php

if ( $_SERVER['REQUEST_METHOD'] !== 'POST' )
	die( json_encode(['resCode' => 0, 'resText' => 'Method not acceptable.']) );

require_once __DIR__.'/../inc/nomination/vote.php';
$V = new Vote();

if ( ! isset( $_COOKIE['vti'] ) ){

	$user_id = $V->addVoter();
	if ( ! $user_id ) die( json_encode([ 'resCode' => 0, 'resText' => $V->response ]) );
	setcookie('vti', $user_id, time() + ( 60*60*24*30*5 ), '/', $_SERVER['HTTP_HOST'], false, true);
	
} else $user_id = trim( $_COOKIE['vti'] );

$op = $V->newVote( $user_id );
$success = [ 'resCode' => 1, 'resText' => 'Thank you. Your vote has been registered.' ];
$err = [ 'resCode' => 555, 'resText' => $V->response ];

$response = ( $op ) ? $success : $err;

die( json_encode( $response ) );