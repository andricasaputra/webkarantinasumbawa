<?php
class calendar{

	private $conn;
	private $db;

	public function __construct(Database $db){

			$this->conn = $db;
			$this->db = $this->conn->getConnection();
	}

	/*Tampilkan Calendar Events*/

	public function TampilCalendar($id=null){
		$sql = "SELECT * FROM events ";
		if ($id !=null) {
			$sql .= " WHERE id = $id ";
		}
		$sql .= "ORDER BY start DESC";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Insert Events*/

	public function InsertEvents($title , $color , $start, $end){
		$sql = "INSERT INTO events(title, color, start, end) VALUES ('$title', '$color', '$start', '$end')";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	/*Update Events*/

	public function EditEvents($sql){
		$this->db->query($sql) or die ($this->db->error);
	}

	/*Update Events Title*/

	public function EditTitle($sql){
		$this->db->query($sql) or die ($this->db->error);
	}

	/*Delete Events*/


	public function DeleteEvents($id){
		$sql = "DELETE FROM events WHERE id = $id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}
}
?>