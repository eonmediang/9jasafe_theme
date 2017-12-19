<?php

if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ){
    http_response_code(406);
	die( json_encode(['resCode' => 0, 'resText' => 'Method not acceptable.']) );
}

// Default success response
$response = ['resCode' => 0, 'resText' => "Thank you. We will get in touch with you shortly."];

require_once __DIR__.'/../inc/nomination/NomDb.php';
require_once __DIR__.'/../inc/classes/EmailMgr.php';
require_once __DIR__.'/../inc/classes/Validator.php';
require_once __DIR__.'/functions.php';

$config = json_decode( file_get_contents( __DIR__.'/../inc/nomination/db.json' ), true );

$validator = new Validator();
$data = [
    'fullname' => ['fullname', 'fullname', true],
    'comp_org' => ['comp_org', ''],
    'phone' => ['phone', 'phone', true],
    'email' => ['email', 'email'],
    'website' => ['website', 'url'],
    'ticket_type' => ['ticket_type', '', true],
];

$data = $validator->validate($data);

if ( ! $data ){
    die( json_encode(['resCode' => 0, 'resText' => $validator->errorMsg()]) );
}

$db = new NomDb;
$db->table = 'tickets';
$save = $db->add($data);

if ( $save ){
    $html_template = __DIR__.'/ticket.html';
		$plain_template = __DIR__.'/ticket.txt';
		$placeholders = [
			
			'fullname'	=>	$data['fullname'],
			'email' 	=>	$data['email'],
			'phone'	    =>	$data['phone'],
			'comp_org'	=>	$data['comp_org'],
			'website'	=>	$data['website'],
			'ticket_type'	=>	$data['ticket_type'],

			];

		$email = [

		'subject'	=> 'New ticket order',
		'html'	=>	render_template( $placeholders, $html_template ),
		'plain'	=>	render_template( $placeholders, $plain_template )

		];

		$recipient = [
			// 'name'	=> 'Abeeb OLa',
			'name'	=> '9jaSAFE 2017',
			// 'email'	=> 'abeebola@yahoo.com'
			'email'	=> 'awards@safetyrecordng.com'
			];

		$mail = new EmailMgr([

			'host'	=> $config['email']['host'],
			'port'	=> $config['email']['port'],
			'username'	=> $config['email']['username'],
			'password'	=> $config['email']['password'],
			'from'	=> $config['email']['username']

			]);

		$mail->addBCC('abeebola@yahoo.com', 'Abeeb Ola');
		$status = $mail->sendMail( '9jaSAFE 2017', $recipient, $email );
        if ( ! $status )
            error_log($mail->errorMsg, 0);
} else {
    $response = ['resCode' => 0, 'resText' => "An error occured. Please try again."];
    error_log( $db->msg, 0 );
}

echo json_encode($response);