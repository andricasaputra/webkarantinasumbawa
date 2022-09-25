<?php  

class Login {

		private $destroy;
		private $conn;
		private $db;

		public function __construct(Database $db){

				$this->conn = $db;
				$this->db = $this->conn->getConnection();
		}

		public function username($username){
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$query = $this->db->query($sql) or die ($this->db->error);
			return $query;
		}


		public function password($username, $password){
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$query = $this->db->query($sql) or die ($this->db->error);
			return $query;
		}


		public function tampilNama($id){
			$sql = "SELECT * FROM users WHERE id = $id";
			$query = $this->db->query($sql) or die ($this->db->error);
			return $query;
		}

}

?>