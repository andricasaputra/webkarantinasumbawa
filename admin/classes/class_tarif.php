<?php  

class tarif{

	private $trimed;
	private $conn;
	private $db;

	public function __construct(Database $db){

			$this->conn = $db;
			$this->db = $this->conn->getConnection();
	}

	public function tampilKategori(){
		$sql = "SELECT * FROM tarif";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function selectKategori($kategori){
		$sql = "SELECT * FROM tarif";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function selectKomoditas($kategori, $kegiatan){
		$sql = "SELECT * FROM tarif WHERE kategori = '$kategori' AND kegiatan = '$kegiatan' ORDER BY komoditas ASC";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function hitungTarif($kategori, $kegiatan, $komoditas){
		$sql = "SELECT * FROM tarif WHERE kategori = '$kategori' AND kegiatan = '$kegiatan' AND komoditas = '$komoditas' ORDER BY komoditas ASC";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function rupiah($rupiah) {  
     $jadi = "Rp ".number_format($rupiah,2,",",".");  
     return $jadi;  
	}



}

?>