<?php 


class berita{

	private $trimed;
	private $conn;
	private $db;

	public function __construct(Database $db){

			$this->conn = $db;
			$this->db = $this->conn->getConnection();
	}

	/*Tampil Berita Halaman Admin*/
	public function tampil($id=null){
		$sql = "SELECT * FROM berita";
		if ($id !=null) {
			$sql .= " WHERE id='$id'  ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function tampilPenghargaan($id=null){
		$sql = "SELECT * FROM penghargaan";
		if ($id !=null) {
			$sql .= " WHERE id='$id'  ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Pengaduan Halaman Admin*/
	public function pengaduan($id=null){
		$sql = "SELECT * FROM pengaduan";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Data Operasional Website*/
	public function data_operasionalWeb($id=null){
		$sql = "SELECT * FROM data_operasional";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC LIMIT 0,1";
		}else{
			$sql .= " ORDER BY id DESC LIMIT 0,1";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function semua_data_operasional($id = null){
		$sql = "SELECT kh_operasional.tahun AS kh_tahun, kh_operasional.domas AS kh_domas, kh_operasional.dokel AS kh_dokel, kh_operasional.ekspor AS kh_ekspor,  kh_operasional.impor AS kh_impor, kh_operasional.waktu_input AS kh_waktu_input, kt_operasional.tahun AS kt_tahun, kt_operasional.domas AS kt_domas, kt_operasional.dokel AS kt_dokel, kt_operasional.ekspor AS kt_ekspor, kt_operasional.impor AS kt_impor, kt_operasional.waktu_input AS kt_waktu_input, pnbp.tahun, pnbp.total, pnbp.waktu_input FROM kh_operasional INNER JOIN kt_operasional ON kh_operasional.tahun = kt_operasional.tahun INNER JOIN pnbp ON kh_operasional.tahun = pnbp.tahun ";
		if ($id != null) {
			$sql .= " WHERE kh_operasional.id = kt_operasional.id";
		}

		$sql .= " ORDER BY kh_operasional.id DESC";

		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}


	/*Tampil Data Operasional Halaman Admin*/
	public function data_operasional($id=null){
		$sql = "SELECT * FROM data_operasional";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Data Operasional KH Halaman Admin*/
	public function data_operasional_kh($id=null, $tahun=null){
		$sql = "SELECT * FROM kh_operasional";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}elseif ($tahun !=null) {
			$sql .= " WHERE tahun='$tahun' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC LIMIT 0,3";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Data Operasional KT Halaman Admin*/
	public function data_operasional_kt($id=null, $tahun=null){
		$sql = "SELECT * FROM kt_operasional";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}elseif ($tahun !=null) {
			$sql .= " WHERE tahun='$tahun' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC LIMIT 0,3";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Total Data Operasional Halaman Admin*/
	public function total_data_operasional($id=null){
		$sql = "SELECT kt_operasional.tahun, kt_operasional.domas, kt_operasional.dokel, kt_operasional.ekspor, kt_operasional.impor, kh_operasional.tahun, kh_operasional.domas, kh_operasional.dokel, kh_operasional.ekspor, kh_operasional.impor FROM kt_operasional INNER JOIN kh_operasional ON kt_operasional.tahun = kh_operasional.tahun";
		if ($id !=null) {
			$sql .= " WHERE id.kt_operasional='$id' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id.kt_operasional DESC LIMIT 0,3";
		}
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

	/*Tampil Data Dokumen-dokumen yang diupload Halaman Admin*/
	public function data_dokumen($id=null, $kategori=null){
		$sql = "SELECT * FROM publik";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}elseif ($kategori != null){
			$sql .= " WHERE kategori= '$kategori' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Laporan - Laporan Tahunan*/
	public function laporan($id=null){
		$sql = "SELECT * FROM laporan";
		if ($id !=null) {
			$sql .= " WHERE id='$id' AND jenis_laporan='laporan_tahunan' ORDER BY id DESC";
		}else{
			$sql .= " WHERE jenis_laporan='laporan_tahunan' ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}


	/*Tampil Laporan Kinerja*/
	public function laporanKinerja($id=null){
		$sql = "SELECT * FROM laporan";
		if ($id !=null) {
			$sql .= " WHERE id='$id' AND jenis_laporan='laporan_kinerja' ORDER BY id DESC";
		}else{
			$sql .= " WHERE jenis_laporan='laporan_kinerja' ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function laporanAksesIp($id=null){
		$sql = "SELECT * FROM laporan";
		if ($id !=null) {
			$sql .= " WHERE id='$id' AND jenis_laporan='laporan_akses_ip' ORDER BY id DESC";
		}else{
			$sql .= " WHERE jenis_laporan='laporan_akses_ip' ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function TampilRencanaKerja($id=null){
		$sql = "SELECT * FROM rencana_kerja";
		if ($id != null) {
			$sql .=" WHERE id =$id";
		}
		$sql .= ' ORDER BY id DESC';
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}


	/*Tampil IKM/Chart Halaman Admin*/
	public function ikm($id=null, $tahun=null, $periode=null){
		$sql = "SELECT * FROM ikm";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC LIMIT 0,6";
		}elseif ($tahun !=null && $periode != null) {
			$sql .= " WHERE tahun='$tahun' AND periode='$periode' ORDER BY id DESC LIMIT 0,6";
		}elseif ($tahun !=null && $periode == null) {
			$sql .= " WHERE tahun='$tahun' ORDER BY id DESC LIMIT 0,6 ";
		}elseif ($tahun == null && $periode != null) {
			$sql .= " WHERE periode='$periode' ORDER BY id DESC LIMIT 0,6";
		}else{
			$sql .= " ORDER BY id DESC LIMIT 0,6";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil PNBP /Chart Halaman Admin*/
	public function pnbp($id=null, $tahun=null){
		$sql = "SELECT * FROM pnbp";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY tahun";
		}elseif ($tahun !=null) {
			$sql .= " WHERE tahun='$tahun' ORDER BY tahun";
		}else{
			$sql .= " ORDER BY tahun";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Web Header Website*/
	public function tampilWebHeader($id=null){
		$sql = "SELECT * FROM berita";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC  LIMIT 0,4";
		}else{
			$sql .= " ORDER BY id DESC LIMIT 0,4";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Halaman Utama Website Bagian Headline/Landing Page*/
	public function tampilHeadline($id=null){
		$sql = "SELECT * FROM headline";
		if ($id !=null) {
			$sql .= " WHERE id='$id' AND tampil='Ya' ORDER BY id DESC LIMIT 0,4";
		}else{
			$sql .= " WHERE tampil = 'Ya' ORDER BY id DESC LIMIT 0,4";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Halaman Utama Website Bagian Admin*/
	public function tampilHeadlineAdmin($id=null){
		$sql = "SELECT * FROM headline";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC";
		}else{
			$sql .= " ORDER BY id DESC";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Tulisan Bergerak Website*/
	public function tampilWebMarquee($id=null){
		$sql = "SELECT id, judul FROM berita";
		if ($id !=null) {
			$sql .= " WHERE id='$id' ORDER BY id DESC LIMIT 0,5";
		}else{
			$sql .= " ORDER BY id DESC LIMIT 0,5";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Halaman Kumpulan Berita Website*/
	public function tampilWebBerita($id=null){
		$sql = "SELECT * FROM berita";
		if ($id !=null) {
			$sql .= " WHERE id='$id' AND tampil = 'Ya' ORDER BY id DESC LIMIT 0,6";
		}else{
			$sql .= " WHERE tampil = 'Ya' ORDER BY id DESC LIMIT 0,6";
		}
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil Berita Website*/
	public function tampilBerita($id){
		$sql = "SELECT id, penulis, judul, isi, date(waktu_upload_berita) AS tanggal, gambar FROM berita WHERE id=$id AND tampil = 'Ya'";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Tampil FAQ Website*/
	public function tampilFaq($id){
		$sql = "SELECT * FROM faq WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*Data Untuk Pagination Berita*/
	public function paging(){
		$sql = "SELECT * FROM berita";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	public function search($search){
		$sql = "(SELECT id as id, judul as kunci, tampil as acuan FROM berita WHERE judul LIKE '%" . 
           $search . "%') 
           UNION
           (SELECT link as id, nama_laporan as kunci, jenis as acuan FROM laporan WHERE nama_laporan LIKE '%" . 
           $search . "%') 
           UNION
           (SELECT link as id, nama_info as kunci, jenis as acuan FROM ppid_info_berkala WHERE nama_info LIKE '%" . 
           $search . "%') 
           UNION
           (SELECT link as id, nama_info as kunci, jenis as acuan FROM ppid_info_sertamerta WHERE nama_info LIKE '%" . 
           $search . "%') 
           UNION
           (SELECT link as id, nama_info as kunci, jenis as acuan FROM ppid_info_setiapsaat WHERE nama_info LIKE '%" . 
           $search . "%')
           ";
		$query = $this->db->query($sql) or die ($this->db->error);
		return $query;
	}

	/*INSERT STEATMENT*/
	/*INSERT STEATMENT*/
	/*Insert Berita Ke Database*/
	public function insert($penulis, $judul, $isi, $gambar){
		$sql = "INSERT INTO berita (penulis, judul, isi, waktu_upload_berita, gambar) VALUES ('$penulis', '$judul', '$isi', now(), '$gambar')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function insertFromFacebook($id_facebook, $penulis, $judul, $isi, $gambar){
		$sql = "INSERT IGNORE INTO berita (id_facebook, penulis, judul, isi, waktu_upload_berita, gambar) VALUES ('$id_facebook', '$penulis', '$judul', '$isi', now(), '$gambar')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	public function updateFacebookImage($id_facebook, $gambar)
	{
		$sql = "UPDATE berita SET gambar = '$gambar' WHERE id_facebook = '$id_facebook'";

		$this->db->query($sql) or die ($this->db->error);
	}

	/*Insert Berita Ke Database*/
	public function upload($penulis, $judul, $isi){
		$sql = "INSERT INTO berita (penulis, judul, isi, waktu_upload_berita) VALUES ('$penulis', '$judul', '$isi', now())";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	public function insertPenghargaan($nama, $gambar){
		$sql = "INSERT INTO penghargaan (nama, waktu_upload_penghargaan, gambar) VALUES ('$nama', now(), '$gambar')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	/*Insert Pengaduan Masyarakat Ke Database*/
	public function insertKeluhan($nama, $email, $notelp ,$pesan, $captcha){
		
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf3BK0UAAAAAEoSIPKgYcIgYOV6IPJCtswCY4cl&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
		
		$response = json_decode($response, true);

        if($response['success'] == false){

            return false;
        }

		$sql = "INSERT INTO pengaduan (nama, email, telepon ,isi, tanggal) VALUES ('$nama', '$email', '$notelp' ,'$pesan', now())";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	/*Insert Ringkasan Data Oerasional Ke Database*/
	public function insertDataOperasional($tanggal, $ekspor, $impor, $domas, $dokel, $pnbp){
		$sql = "INSERT INTO data_operasional (ekspor, impor, domas, dokel, pnbp, waktu) VALUES ('$ekspor', '$impor', '$domas', '$dokel', '$pnbp' ,'$tanggal')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	/*Insert Data Operasional KH Ke Database-Untuk Chart*/
	public function insertDataOperasionalKh($tahun, $ekspor, $impor, $domas, $dokel, $waktu_input){
		$sql = "INSERT INTO kh_operasional (tahun, domas, dokel, ekspor, impor, waktu_input) VALUES ('$tahun', '$domas', '$dokel', '$ekspor', '$impor', '$waktu_input')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	/*Insert Data Operasional KT Ke Database-Untuk Chart*/
	public function insertDataOperasionalKt($tahun, $ekspor, $impor, $domas, $dokel, $waktu_input){
		$sql = "INSERT INTO kt_operasional (tahun, domas, dokel, ekspor, impor, waktu_input) VALUES ('$tahun', '$domas', '$dokel', '$ekspor', '$impor', '$waktu_input')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	/*Insert Data Keuangan Ke Database-Untuk Chart*/
	public function insertDataKeuangan($tahun, $realisasi_anggaran, $waktu_input){
		$sql = "INSERT INTO keuangan (tahun, realisasi_anggaran, waktu_input) VALUES ('$tahun', '$realisasi_anggaran', '$waktu_input')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	/*Insert Data Keuangan Ke Database-Untuk Chart*/
	public function insertIkm($tahun, $periode, $rata_rata){
		$sql = "INSERT INTO ikm (tahun, periode, rata_rata) VALUES ('$tahun', '$periode', '$rata_rata')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	/*Insert Data Keuangan Ke Database-Untuk Chart*/
	public function insertPnbp($tahun, $total){
		$sql = "INSERT INTO pnbp (tahun, total, waktu_input) VALUES ('$tahun', '$total', now())";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	/*Insert Data Headline/ Landing Page Website Ke Database*/
	public function insertHeadline($tanggal, $judul1, $judul2, $gambar){
		$sql = "INSERT INTO headline (judul1, judul2, gambar, tanggal) VALUES ('$judul1', '$judul2', '$gambar', '$tanggal')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	/*Insert Dokumen-dokumen Database*/
	public function insertDokumen($waktu_upload, $nama_dokumen, $kategori, $filenya){
		$sql = "INSERT INTO publik (waktu_upload, nama_dokumen, kategori, filenya) VALUES ('$waktu_upload', '$nama_dokumen', '$kategori', '$filenya')";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	/*Insert Dokumen-dokumen Database*/
	public function insertLaporan($jenis_laporan, $nama_laporan, $tahun, $link){
		$sql = "INSERT INTO laporan (jenis_laporan, nama_laporan, tahun, link, waktu_input) VALUES ('$jenis_laporan', '$nama_laporan', '$tahun', '$link', now())";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}

	/*Insert Rencana Kerja*/
	public function InsertRencanaKerja($tahun, $link){
		$sql = "INSERT INTO rencana_kerja (tahun, link, waktu_input) VALUES ('$tahun', '$link', now())";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'masuk';
		}
	}
	

	/*EDIT STEATMENT*/
	/*EDIT STEATMENT*/
	/*Edit Database Multi Fungsi*/
	public function edit($sql){
		$this->db->query($sql) or die ($this->db->error);
	}

	/*Trim Kalimat Untuk Text Berita*/
	public function trim_kalimat($text, $count){ 

		$text = str_replace("  ", " ", $text); 
		$string = explode(" ", $text); 
		for ( $wordCounter = 0; $wordCounter <= $count; $wordCounter++ ){ 
		$this->trimed .= $string[$wordCounter]; 
		if ( $wordCounter < $count ){ $this->trimed .= " "; } 
		else { $this->trimed .= "..."; } 
		} 
		$trimed = trim($this->trimed); 
		return $trimed; 
	} 

	public function UpdateRencanaKerja($tahun, $link, $id){
		$sql = "UPDATE rencana_kerja SET tahun='$tahun', link='$link' WHERE id=$id";
		$query = $this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terupdate';
		}
	}

	/*DELETE STEATMENT*/
	/*DELETE STEATMENT*/
	/*DELETE STEATMENT*/

	public function deleteHeadline($id){

		$sql = "DELETE FROM headline WHERE id=$id";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}

	}

	public function deleteBerita($id){

		$sql = "DELETE FROM berita WHERE id=$id";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}

	}

	public function deletePenghargaan($id){

		$sql = "DELETE FROM penghargaan WHERE id=$id";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}

	}

	public function deleteDokumen($id){

		$sql = "DELETE FROM publik WHERE id=$id";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}

	}

	public function DeleteLaporan($id){

		$sql = "DELETE FROM laporan WHERE id=$id";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}

	}

	public function DeleteLaporanKinerja($id){

		$sql = "DELETE FROM laporan WHERE id=$id AND jenis_laporan = 'laporan_kinerja'";
		$this->db->query($sql) or die ($this->db->error);

		if ($this->db->affected_rows) {
			return 'terhapus';
		}

	}

	/*Mencegah Duplikasi Class Berita*/
	private function __clone() { 

	}
}

?>