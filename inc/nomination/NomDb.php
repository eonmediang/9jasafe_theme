<?php 

class NomDb {

	public $msg;
	protected $conn;
	public $table = null;
	public $err_code;

	public function __construct() 
	{
		$db_config = json_decode( file_get_contents( __DIR__.'/db.json' ) );
		$this->openConnection( $db_config );
	}

	public function openConnection( $config )
	{

		$opt = [

		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,

		];

		$this->conn = new PDO('mysql:host='.$config->server.';dbname='.$config->db, $config->username, $config->password, $opt);

	}

	public function add( $data )
	{
		if ( is_null( $this->table ) )
			throw new Exception("Table name has not been set.", 1);
		
		$columns = implode(',', array_keys($data));
	    $stmt = "INSERT INTO $this->table ($columns) VALUES (";
	    $vals = "";

	    if (count($data) > 0) {
	          foreach ($data as $key=>$value) {       
		          $vals .= ':'.$key.', ';
		      }

	    }

	    $stmt.= substr(rtrim($vals), 0, strlen( $vals ) - 2).')';
	    
	    try {

	    	$query = $this->conn->prepare( $stmt );
			$query->execute( $data );
			return $this->conn->lastInsertId();
	    	
	    } catch (PDOException $e) {

	    	$this->err_code = $e->getCode();
	    	$this->msg = $e->getMessage();

	    	return false;	    	
	    	
	    }
			
	}

	public function runQuery( $sql, $values = [], $update = false )
    {
    	$stmt = $this->conn->prepare( $sql );
		( ! empty( $values )) ? $stmt->execute( $values) : $stmt->execute();
		if ( $update ) return $stmt->rowCount();
		return $stmt->fetchAll( PDO::FETCH_OBJ );
    }
}