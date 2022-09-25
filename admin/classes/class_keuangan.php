<?php  
class keuangan{

	private $conn;
	private $db;

	public function __construct(Database $db){
		$this->conn = $db;
		$this->db = $this->conn->getConnection();
	}


	/*Tampilkan Neraca Anggaran*/
	public function TampilNeracaKeuangan($id=null){
		$sql = "SELECT * FROM neraca_keuangan";
		if ($id != null) {
			$sql .=" WHERE id =$id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampilkan Rencana Anggaran*/
	public function TampilRencanaAnggaran(){
		$sql = "SELECT * FROM rencana_anggaran ORDER BY id DESC";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampilkan Realisasi Anggaran*/
	public function TampilLaporanRealisasiAnggaran($id=null){
		$sql = "SELECT * FROM realisasi_anggaran";
		if ($id != null) {
			$sql .=" WHERE id =$id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampilkan Daftar Aset*/
	public function TampilDaftarAset($id=null){
		$sql = "SELECT * FROM daftar_aset";
		if ($id != null) {
			$sql .=" WHERE id =$id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampilkan RKA-KL*/
	public function TampilRka_kl($id=null){
		$sql = "SELECT * FROM rka_kl";
		if ($id != null) {
			$sql .=" WHERE id =$id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampilkan RKA-KL*/
	public function TampilDipa($id=null){
		$sql = "SELECT * FROM dipa";
		if ($id !=null) {
			$sql .= " WHERE id = $id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampilkan Laporan Keuangan*/
	public function laporanKeuangan($id=null){
		$sql = "SELECT * FROM laporan WHERE jenis_laporan='laporan_keuangan'";
		if ($id !=null) {
			$sql .= " AND id = $id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampilkan Laporan Keuangan*/
	public function TampilLaporanKekayaan($id=null){
		$sql = "SELECT * FROM laporan WHERE jenis_laporan='laporan_kekayaan'";
		if ($id !=null) {
			$sql .= " AND id = $id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Data Keuangan Halaman Admin*/
	public function data_keuangan($id=null){
		$sql = "SELECT * FROM keuangan";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY tahun DESC";
		}else{
			$sql .= " ORDER BY tahun DESC LIMIT 0,3";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Data Pengadaan Halaman Admin*/
	public function TampilPengadaan($id=null){
		$sql = "SELECT * FROM pengadaan_brg";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY tahun DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}
	
	/*Tampil Data Renstra*/
	public function TampilRenstra($id=null){
		$sql = "SELECT * FROM renstra";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY tahun DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Data Renstra*/
	public function TampilArusKas($id=null){
		$sql = "SELECT * FROM arus_kas";
		if ($id !=null) {
			$sql .= " WHERE id='$id'";
		}
		$sql .= " ORDER BY tahun DESC";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*INSERT STEATMENT*/
	public function InsertNeracaKeuangan($tahun, $link){
		$sql = "INSERT INTO neraca_keuangan (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertRencanaAnggaran($tahun, $link){
		$sql = "INSERT INTO rencana_anggaran (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertLaporanRealisasiAnggaran($tahun, $link){
		$sql = "INSERT INTO realisasi_anggaran (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertDaftarAset($tahun, $link){
		$sql = "INSERT INTO daftar_aset (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertPengadaan($tahun, $link){
		$sql = "INSERT INTO pengadaan_brg (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertRka_kl($tahun, $revisi, $link){
		$sql = "INSERT INTO rka_kl (tahun, revisi, link, waktu_input) VALUES ('$tahun', '$revisi' ,'$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertDipa($tahun, $revisi, $link){
		$sql = "INSERT INTO dipa (tahun, revisi, link, waktu_input) VALUES ('$tahun', '$revisi' ,'$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertRenstra($tahun, $link){
		$sql = "INSERT INTO renstra (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function InsertArusKas($tahun, $link){
		$sql = "INSERT INTO arus_kas (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}


	/*==============UPDATE STEATMENT=================*/

	public function UpdateNeracaKeuangan($tahun, $link, $id){
		$sql = "UPDATE neraca_keuangan SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	public function UpdateLaporanRealisasiAnggaran($tahun, $link, $id){
		$sql = "UPDATE realisasi_anggaran SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	public function UpdateDaftarAset($tahun, $link, $id){
		$sql = "UPDATE daftar_aset SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	public function UpdateRencanaAnggaran($tahun, $link, $id){
		$sql = "UPDATE rencana_anggaran SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	public function UpdatePengadaan($tahun, $link, $id){
		$sql = "UPDATE pengadaan_brg SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	public function UpdateRka_kl($tahun, $link, $id){
		$sql = "UPDATE rka_kl SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	public function UpdateRenstra($tahun, $link, $id){
		$sql = "UPDATE renstra SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	public function UpdateArusKas($tahun, $link, $id){
		$sql = "UPDATE arus_kas SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	/*GLOBAL*/

	public function edit($sql){
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	/*DELETE STEATMENT*/

	public function DeleteNeracaKeuangan($id){
		$sql = "DELETE FROM neraca_keuangan WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteLaporanRealisasiAnggaran($id){
		$sql = "DELETE FROM realisasi_anggaran WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}


	public function DeleteRencanaAnggaran($id){
		$sql = "DELETE FROM rencana_anggaran WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteDaftarAset($id){
		$sql = "DELETE FROM daftar_aset WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeletePengadaan($id){
		$sql = "DELETE FROM pengadaan_brg WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteRka_kl($id){
		$sql = "DELETE FROM rka_kl WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteLaporanKeuangan($id){
		$sql = "DELETE FROM laporan WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteLaporanKekayaan($id){
		$sql = "DELETE FROM laporan WHERE id=$id AND jenis_laporan = 'laporan_kekayaan'";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteRenstra($id){
		$sql = "DELETE FROM renstra WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}

	public function DeleteArusKas($id){
		$sql = "DELETE FROM arus_kas WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}
	}
}


?>