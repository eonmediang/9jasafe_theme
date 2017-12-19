<?php 

require_once __DIR__.'/NomDb.php';
require_once __DIR__.'/../classes/EmailMgr.php';

class Vote {

	public $response;
	public $voter = null;
	private $config;
	protected $db;

	public function __construct()
	{
		$this->db = new NomDb;
		$this->config = json_decode( file_get_contents( __DIR__.'/db.json' ), true );
	}

	public function addVoter()
	{
		$fname = $_POST['fname'] ?? null;
		$lname = $_POST['lname'] ?? null;
		$comp_org = $_POST['your-org'] ?? null;
		$email = $_POST['y-email'] ?? '';
		$tel = $_POST['y-phone-no'] ?? null;
		$award = $_POST['award'] ?? '';

		if ( $email !== '' && $this->emailExists( $email ) ){
			$this->response = 'Your details have already been registered previously.';
			return false;
		}
			

		$required_info = [

			$fname,
			$lname,
			$comp_org,
			$tel,
			$award

		];

		if ( $required_info !== array_filter( $required_info ) ){
			$this->response = 'Please fill all compulsory fields.';
			return false;
		}

		
		$this->db->table = 'voters';
		$data = [

				'fname'		=> $fname,
				'lname' 	=> $lname,
				'comp_org' 	=> $comp_org,
				'email' 	=> $email,
				'tel' 		=> $tel,
				'award' 	=> $award,

				];

		$action = $this->db->add( $data );

		if ( ! $action ){

			if ( $this->db->err_code == '23000'){
				$this->response = 'Your details have already been registered previously.';
				// Fetch user info
				$info = $this->getVoterInfo( $data );
				if ( $info ){
					// Set cookie containing user ID
					setcookie('vti', $info->id, time() + ( 60*60*24*30*5 ), '/', $_SERVER['HTTP_HOST'], false, true);
				}

			} else {

				$this->response = 'An error occurred. Please try again.';
				error_log( $this->db->msg, 0 );
			}
		}

		return $action;
	}

	public function category( $category )
	{
		$categories = $this->config['nom_data']['categories'];
		if ( array_key_exists( $category, $categories ) )
			return $categories[ $category ];
		return '';
	}

	public function emailExists( $email )
	{
		$sql = "SELECT * FROM voters WHERE `voters`.`email` = :email LIMIT 1";
		return ( $this->db->runQuery( $sql, ['email' => $email] ) ) ? true : false;
	}

	public function getVoterInfo( $data )
	{
		$sql = "SELECT CONCAT(fname, ' ', lname) AS fullname, email, comp_org, tel FROM voters WHERE email = :email OR tel = :tel LIMIT 1";
		$result = $this->db->runQuery( $sql, ['email' => $data['email'], 'tel' => $data['tel']] );
		if ( $result ) $this->voter = $result[0];
		return $result;
	}

	public function newVote( $vid )
	{
		$form_name = $_POST['form-name'];
		$file = __DIR__.'/process_forms/'.$form_name.'.php';
		if ( ! file_exists( $file ) ){
			$this->response = 'An error occurred. Please try again.';
			error_log( 'The file \''.$form_name.'\' does not exist', 0 );
			return false;
		} else require_once $file;

		$this->db->table = $table_name;
		$action = $this->db->add( $data );

		if ( ! $action ){

			if ( $this->db->err_code == '23000')
				$this->response = 'You have already voted in this category.';

			else {

				$this->response = 'An error occurred. Please try again.';
				error_log( $this->db->msg, 0 );
			}

		} else $this->sendEmail( $data, $table_name, $vid );

		return $action;

	}

	public function render_template(array $tempArray, $file)
	{
		$tags = $tempArray;
		$file = file_get_contents($file);
		$file_to_render = '';
		$content = '';

		foreach ($tags as $key => $value) {

			if ( is_callable( $value ) ){
				$content = $value();
			} else $content = $value;
			
			$file = str_replace("{{{{$key}}}}", $content, $file);

		}

		return $file;

	}

	public function sendEmail($data, $table, $vid)
	{
		$nominee = $data['nom_name'];
		$category = $this->category( $table );
		$nom_email = $data['em_web'];
		$nom_phone = $data['tel'];
		$comp_org = $data['comp_org'];
		$eligibility = $data['eligibility'];
		$voter = $this->voter;
		if ( is_null( $voter ) )
			$voter = $this->db->runQuery('SELECT CONCAT(fname, " ", lname) AS fullname, email, comp_org, tel FROM voters WHERE id = :id LIMIT 1', ['id' => $vid] )[0];
		error_log( json_encode( $voter ), 0 );
		$voter_name = $voter->fullname;
		$voter_email = $voter->email;
		$voter_phone = $voter->tel;

		$html_template = __DIR__.'/nomination.html';
		$plain_template = __DIR__.'/nomination.txt';
		$placeholders = [
			
			'sender'	=>	$voter_name,
			'nominee'	=>	$nominee,
			'category'	=>	$category,
			'nom_email'	=>	$nom_email,
			'nom_phone'	=>	$nom_phone,
			'comp_org'	=>	$comp_org,
			'voter_phone'	=>	$voter_phone,
			'voter_email'	=>	$voter_email,
			'eligibility'	=>	$eligibility

			];

		$email = [

		'subject'	=> 'New nomination received',
		'html'	=>	$this->render_template( $placeholders, $html_template ),
		'plain'	=>	$this->render_template( $placeholders, $plain_template )

		];

		$recipient = [
			'name'	=> '9jaSAFE 2017',
			'email'	=> 'awards@safetyrecordng.com'
			];

		$mail = new EmailMgr([

			'host'	=> $this->config['email']['host'],
			'port'	=> $this->config['email']['port'],
			'username'	=> $this->config['email']['username'],
			'password'	=> $this->config['email']['password'],
			'from'	=> $this->config['email']['from']

			]);

		$mail->addBCC('abeebola@yahoo.com', 'Abeeb Ola');
		$mail->sendMail( '9jaSAFE nomination form', $recipient, $email );
		
	}
}