<?php
/*
* Mysql database class - only one connection alowed
*/
class Database {

	private static $connection;
	private static $instance; 
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "websumbawa";

	public static function getInstance() {

		if(!self::$instance) { // If no instance then make one

			self::$instance = new self();
		}

		return self::$instance;
	}
	
	// Constructor

	private function __construct() {

		self::$connection = new mysqli($this->host, $this->username, $this->password, $this->database);
	
		// Error handling

		if(self::$connection->connect_error) {

			trigger_error("Failed to connect to MySQL: " . self::$connection->connect_error, E_USER_ERROR);

		}

	}

	// Magic method clone is empty to prevent duplication of connection

	private function __clone() { 

		/*set null*/

	}

	// Magic method clone is empty to prevent serialize connection

	public function __wakeup() {

		/*set null*/

    }

	// Get mysqli connection

	public function getConnection() {

		return self::$connection;
	}

	// Close all connections

	public static function destroy() {

    	$a = self::$connection->close();

		if($a === true){

			return 'Succesfully Not Connected';

		}else{

			return 'Still Connected';

		}

	}

}

?>