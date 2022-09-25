<?php 


class ppid{

	private $trimed;
	private $conn;
	private $db;

	public function __construct(Database $db){

			$this->conn = $db;
			$this->db = $this->conn->getConnection();
	}

	/*Tampil Berita Halaman Admin*/
	public function tampil_info_berkala($id=null){
		$sql = "SELECT * FROM ppid_info_berkala";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die($this->db->error);
		return $query;
	}

	/*Tampil Berita Halaman Admin*/
	public function tampil_info_berkala_perkategori($kategori){
		$sql = "SELECT * FROM ppid_info_berkala WHERE kategori='$kategori'";
		$query = $this->db->query($sql) or die($this->db->error);
		return $query;
	}

	/*Tampil Berita Halaman Admin*/
	public function tampil_info_SertaMerta($id=null){
		$sql = "SELECT * FROM ppid_info_sertamerta";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die($this->db->error);
		return $query;
	}


	/*Tampil Berita Halaman Admin*/
	public function tampil_info_setiapsaat($id=null){
		$sql = "SELECT * FROM ppid_info_setiapsaat";
		if ($id !=null) {
			$sql .= " WHERE id='$id'";
		}
		
		$query = $this->db->query($sql) or die($this->db->error);
		return $query;
	}


	/*Tampil Berita Halaman Admin*/
	public function tampil_regulasi($id=null){
		$sql = "SELECT * FROM ppid_regulasi";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die($this->db->error);
		return $query;
	}

	/*Tampil Laporan PPID*/
	public function tampil_laporan_ppid($id=null){
		$sql = "SELECT * FROM laporan";
		if ($id !=null) {
			$sql .= " WHERE jenis_laporan = 'laporan_ppid' AND id='$id' ORDER BY id DESC";
		}else{
			$sql .= " WHERE jenis_laporan = 'laporan_ppid' ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die($this->db->error);
		return $query;
	}

	/*INSERT STEATMENT*/

	public function insertInfoBerkala($nama_info, $link, $kategori){
		$sql = "INSERT INTO ppid_info_berkala (nama_info, kategori , link, waktu_input, jenis) VALUES ('$nama_info', '$kategori' ,'$link', now(), 'berkala')";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function insertInfoSertaMerta($nama_info, $link){
		$sql = "INSERT INTO ppid_info_sertamerta (nama_info, link, waktu_input, jenis) VALUES ('$nama_info','$link', now(), 'serta_merta')";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function insertInfoSetiapSaat($bagian_info, $nama_info, $keterangan ,$link){
		$sql = "INSERT INTO ppid_info_setiapsaat (bagian_info, nama_info, keterangan ,link, waktu_input, jenis) VALUES ('$bagian_info','$nama_info', '$keterangan', '$link', now(), 'setiap_saat')";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function insertRegulasi($nama_regulasi, $link){
		$sql = "INSERT INTO ppid_regulasi (nama_regulasi, link, waktu_input) VALUES ('$nama_regulasi','$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	/*Mencegah Duplikasi Class ppid*/
	private function __clone() { 

	}

	/*=====EDIT STEATMENT=====*/

	public function edit($sql){
		$query = $this->db->query($sql) or die ($this->db->error);
	}

	/*=====DELETE STEATMENT=====*/

	public function DeleteInfoBerkala($id){
		$sql = "DELETE FROM ppid_info_berkala WHERE id = $id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteInfoSertaMerta($id){
		$sql = "DELETE FROM ppid_info_sertamerta WHERE id = $id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteInfoSetiapSaat($id){
		$sql = "DELETE FROM ppid_info_setiapsaat WHERE id = $id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteInfoRegulasi($id){
		$sql = "DELETE FROM ppid_regulasi WHERE id = $id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteLaporanPpid($id){
		$sql = "DELETE FROM laporan WHERE id = $id AND jenis_laporan = 'laporan_ppid'";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

}

?>