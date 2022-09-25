<?php

	require_once('templates/header_web.php');
	require_once('admin/config/database.php');
	require_once('admin/classes/class_berita.php');
	$db = Database::getInstance();
	$conn = new berita($db);
	$tampil  = $conn->tampilWebHeader();
	$tampil2 = $conn->tampilWebBerita();


?>


<style type="text/css">
	section {
		padding-top : 160px;
	}

	.accordion {
	    background-color: #fcbe03;
	    color: #424242;
	    cursor: pointer;
	    padding: 18px;
	    width: 100%;
	    text-align: left;
	    outline: none;
	    font-size: 12px !important; 
	    margin-top: 10px;

	}


	.active {
	    background-color:  #ff9933;
	    color: #424242;
	}

	 .accordion:hover {
	    background-color:  #ff9933;
	    color: #424242;
	}

	.accordion:after {
	    content: '\002B';
	    color: #424242;
	    font-weight: bold;
	    float: right;	    
	}

	.active:after {
	    content: "\2212";
	    color: #424242
	}

	.panel {
		
	    padding: 0 18px;
	    background-color: #fff !important;
	    max-height: 0;
	    overflow: hidden;
	    transition: all 0.5s ease-out;
	}

	.panel p{
		text-align: left;
		color: #4e4d4b;
		font-weight: bold;
		margin-top: 20px;
		font-size: 11pt !important;
	}

	 .panel li{
		text-align: left;
		padding-bottom: 7px;
		padding-top: 15px;
		background-color: #fff !important;
		color: #4e4d4b !important;
		font-size: 11pt;
	}

	.section-title h2{
		color: #000;
	}

	h2{
		padding-bottom: 30px;
	}


	.fa-plane{
	color: #00aaff;
		font-size: 3.5em !important;
	}

</style>

<?php  
	if (isset($_GET['pengeluaran'])) {
		?>

	<section id="prosedur" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Prosedur & Persyaratan</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- about module -->
				<div class="col-md-12 text-center">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-leaf"></i>
							<h2>Karantina Tumbuhan</h2>
								  <!-- Persyaratan Ekspor -->
									  <div id="tabs-1">
									   	 <button class="accordion button-cta">Persyaratan Pengeluaran / Ekspor Media Pembawa</button>
											<div class="panel">
											  <ol>
											  	<li>
											  		Melalui Tempat Pengeluaran yang telah ditetapkan.*
											  	</li>
											  	<li>
											  		Dilaporkan dan diserahkan kepada petugas Karantina Tumbuhan untuk keperluan Tindakan Karantina.	Media Pembawa berupa barang muatan, pelaporan dilakukan <b>paling lambat 1 x 24 jam </b> sebelum Media Pembawa dimuat ke atas Alat Angkut.Media Pembawa berupa barang bawaan penumpang dan kiriman pos, pelaporan dilakukan paling lambat pada <b> saat tiba di Tempat Pengeluaran </b>.*
											  	</li>
											  	<li>
											  		Media Pembawa yang akan dikeluarkan dari dalam wilayah Negara Republik Indonesia harus memiliki Sertifikat Kesehatan Tumbuhan apablia <b>dipersyaratkan oleh negara tujuan </b>.
											  	</li>
											  	<li>
											  		Persyaratan negara tujuan dapat berupa:
											  		<ol>
											  			<li>surat izin pemasukan (import permit) negara tujuan</li>
											  			<li>sertifikat perlakuan</li>
											  			<li>sertifikat keamanan pangan untuk Pangan Segar Asal Tumbuhan (PSAT)</li>
											  			<li>perlakuan</li>
											  			<li>keterangan tertulis Media Pembawa berasal dari tempat produksi bebas OPT</li>
											  			<li>surat izin pemasukan (import permit) negara tujuan</li>
											  			<li>keterangan tertulis Media Pembawa berasal dari kebun yang telah diregistrasi</li>
											  			<li>keterangan tertulis tempat penyimpanan Media Pembawa</li>
											  		</ol>
											  	</li>
											  </ol>
											  <i><b>Keterangan : * Wajib</b></i>
											</div>

											<button class="accordion button-cta">Prosedur dan Tata Cara Pengeluaran / Ekspor</button>
											<div class="panel">
												<p>Setelah menerima pelaporan dan penyerahan media pembawa, petugas karantina tumbuhan akan melakukan pemeriksaan administratif</p>
										  		<ol>
										  			<li>Kelengkapan dokumen yang dipersyaratkan.</li>
										  			<li>
												  		Kebenaran isi dokumen meliputi jenis, jumlah, dan asal Media Pembawa.
												  	</li>
												  	<li>
												  		Keabsahan meliputi dokumen yang diterbitkan oleh institusi yang berwenang, masa berlaku, dalam keadaan utuh dan terbaca, asli, salinan atau copy yang telah dilegalisir oleh institusi yang berwenang dilengkapi dengan tanda tangan dan stempel institusi.
												  	</li>
												  	<li>
												  		Kesesuaian informasi antara permohonan dengan dokumen yang menyertai Media Pembawa.
												  	</li>
										  		</ol>
												  <p>Apabila Dokumen Persyaratan Lengkap, Sah, Dan Benar Maka Pemeriksaan Dilanjutkan Ke Pemeriksaan Kesehatan Media Pembawa</p>
												  <ol>
												  	<li>Pemeriksaan kesehatan dapat berupa pemeriksaan visual dan/atau secara laboratoris</li>
										  			<li>
												  		Jika Media Pembawa tergolong yang harus dikenakan tindakan pengasingan dan pengamatan, maka akan dilakukan tindakan pengasingan dan pengamatan
												  	</li>
												  	<li>
												  		Jika pada pemeriksaan ternyata media pembawa <b>tidak bebas dari OPT </b> atau <b>negara tujuan mempersyaratkan </b> untuk diberikan perlakuan, maka media pembawa tersebut wajib diberikan tindakan perlakuan
												  	</li>
												  	<li>
												  		Apabila selama masa pengasingan/ pengamatan media pembawa ternyata rusak atau busuk atau setelah diberikan perlakuan ternyata media pembawa tidak dapat dibebaskan dari OPT maka petugas karantina akan melakukan tindakan penolakan
												  	</li>
												  	<li>
												  		Apabila media pembawa dinyatakan <b> sehat dan bebas dari OPT </b> maka petugas karantina tumbuhan akan menerbitkan Sertifikat Kesehatan Tumbuhan/ Phytosanitary Certificate (KT 10)
												  	</li>
												  </ol>
											</div>

											<button class="accordion button-cta">Standar Waktu Pelayanan dan Tarif Jasa Karantina</button>
											<div class="panel">
												 <p>Standar Waktu Pelayanan Untuk Pengeluaran/ Ekspor</p>
										  			<li>1 jam - Maksimal 21 Hari</li>

										  			<p>Standar Waktu Untuk Pengajuan Instalasi Karatina Tumbuhan</p>	
										  			<li>3 Hari Kerja</li>

												  <p>Tarif Jasa Karantina Untuk Pengeluaran/ Ekspor</p>
												  <ol>
												  	<li>
												  		<p>Biaya Pemeriksaan</p>
												  		<b>Tanaman Hidup dan Benih</b>
												  		<ul>
												  			<li>Berupa Pohon (termasuk stumb) : Rp 100,- per batang</li>
												  			<li>Plantet. Ex-plant : Rp 10,- per batang</li>
												  			<li>Berupa Umbi, Akar Rimpang, Daun : Rp 25,- per kilogram</li>
												  			<li>Berupa Biji
												  				<ol>
												  					<li>Padi : Rp 50,- per kilogram</li>
												  					<li>Palawija : Rp 40,- per kilogram</li>
												  					<li>Sayur-sayuran : Rp 60,- per kilogram</li>
												  					<li>Tanaman Hias : Rp 80,- per kilogram</li>
												  				</ol>
												  			</li>
												  			<li>Berupa Serbuk Sari : Rp 150,- per gram</li>
												  			<li>Bentuk yang dikemas dalam botol-botol erlenmeyer, cawan petri dan sejenis : Rp 250,- per kemasan</li>
												  		</ul>
												  		<b>Tanaman Hidup Bukan Benih</b>
												  		<ul>
												  			<li>Berbentuk Batang : Rp 50,- per batang</li>
												  			<li>Berbentuk Buah : Rp 5,- per kilogram</li>
												  			<li>Berbentuk Biji : Rp 500,- per ton</li>
												  			<li>Berbentuk Daun Bunga : Rp 50,- per kilogram</li>
												  			<li>Berupa Umbi, Akar Rimpang, Daun : Rp 3,- per kilogram</li>
												  		</ul>
												  	</li>
												  	<li>
												  		<p>Biaya Pengawasan Tindakan Karantina</p>
												  		<ul>
												  			<li>pemeriksaan : Rp 10.000,- 1 kali per orang</li>
												  			<li>Pengujian Laboratorium : Rp 10.000,- 1 kali per orang</li>
												  			<li>Perlakuan : Rp 10.000,- 1 kali per orang</li>
												  		</ul>
												  	</li>
										  			<li>
												  		<p>Biaya Pengujian Laboratorium</p>
												  		<ul>
												  			<li>Entomology (Pemeriksaan Langsung) : Rp 10.000,- per sampel</li>
												  			<li>Micology (Pemeriksaan Langsung) : Rp 10.000,- per sampel</li>
												  			<li>Micology (Blotter Test) : Rp 30.000,- per sampel untuk benih kecil</li>
												  			<li>Micology (Blotter Test) : Rp 60.000,- per sampel untuk benih besar</li>
												  		</ul>
												  	</li>
												  	<li>
												  		<p>Dokumen Tindakan Karantina</p>
												  		<ul>
												  			<li>Phytosanitary Certificate : Rp 5.000,- per sertifikat</li>
												  		</ul>
												  	</li>
												  </ol>
											</div>
											<br/>
										<a href="kt" class="button-cta btn-berita">Kembali</a>
									  </div>
									  <!--End Persyaratan Ekspor -->
						</div>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->

	</section>



<?php }elseif(isset($_GET['pemasukan'])){ ?>

	<section id="prosedur" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Prosedur & Persyaratan</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- about module -->
				<div class="col-md-12 text-center">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-leaf"></i>
							<h2>Karantina Tumbuhan</h2>
								  <!-- Persyaratan Impor -->
									  <div id="tabs-2">
											<button class="accordion button-cta">Persyaratan Pemasukan / Impor Media Pembawa</button>
											<div class="panel">
												<p>Persyaratan pemasukan kemasan kayu ke dalam wilayah RI
												</p>
											  <ol>
											  	<li>
											  		Melalui Tempat Pengeluaran yang telah ditetapkan.
											  	</li>
											  	<li>
											  		Dilaporkan dan diserahkan kepada petugas Karantina Tumbuhan untuk keperluan Tindakan Karantina.	Media Pembawa berupa barang muatan, pelaporan dilakukan <b>paling lambat 1 x 24 jam </b> sebelum Media Pembawa dimuat ke atas Alat Angkut.Media Pembawa berupa barang bawaan penumpang dan kiriman pos, pelaporan dilakukan paling lambat pada <b> saat tiba di Tempat Pengeluaran </b>.
											  	</li>
											  	<li>
											  		Bebas dari kulit kayu.
											  	</li>
											  	<li>
											  		Dibubuhi marka.
											  	</li>
											  </ol>
											</div>

											<button class="accordion button-cta">Prosedur dan Tata Cara Pemasukan / Impor (untuk Kemasan Kayu)</button>
											<div class="panel">
										  		<ol>
										  			<li>Pelaporan dan penyerahan kemasan kayu kepada Petugas Karantina Tumbuhan di tempat pemasukan dilakukan paling lambat pada saat kemasan kayu tiba, sebelum dikeluarkan dari tempat pemasukan. </li>
										  			<li>
												  		Pelaporan dilakukan secara tertulis dengan Mengisi Form Permohonan Pemasukan Kemasan Kayu 
												  	</li>
												  	<li>
												  		Petugas Karantina Tumbuhan akan melakukan pemeriksaan berdasarkan Analisis Risiko Organisme Penggangu Tumbuhan, negara asal, jenis komoditas yang dikemas, dan/atau kinerja pemilik
												  	</li>
										  		</ol>
												  <ol>
												  	<li>Apabila kemasan kayu tidak dibubuhi marka makan akan dilakukan tindakan perlakuan</li>
										  			<li>
												  		Apabila marka tidak sesuai dengan ketentuan internasional yang berlaku maka akan dilakukan tindakan perlakuan
												  	</li>
												  	<li>
												  		Apabila kemasan kayu tidak bebas dari OPTK maka akan dilakukan tindakan perlakuan
												  	</li>
												  	<li>
												  		Apabila tindakan perlakuan tidak dapat dilakukan, dikenakan tindakan penolakan
												  	</li>
												  	<li>
												  		Apabila marka kemasan kayu sesuai dan/atau telah diberikan perlakuan maka akan dilakukan tindakan pembebasan
												  	</li> 
												  </ol>
											</div>

											<button class="accordion button-cta">Standar Waktu Pelayanan dan Tarif Jasa Karantina</button>
											<div class="panel">
												 <p>Standar Waktu Pelayanan Untuk Pengeluaran/ Ekspor</p>
										  			<li>1 jam - Maksimal 21 Hari</li>

										  			<p>Standar Waktu Untuk Pengajuan Instalasi Karatina Tumbuhan</p>	
										  			<li>3 Hari Kerja</li>

												  <p>Tarif Jasa Karantina Untuk Pengeluaran/ Ekspor</p>
												  <ol>
												  	<li>
												  		<p>Biaya Pemeriksaan</p>
												  		<b>Tanaman Hidup dan Benih</b>
												  		<ul>
												  			<li>Berupa Pohon (termasuk stumb) : Rp 200,- per batang</li>
												  			<li>Plantet. Ex-plant : Rp 25,- per batang</li>
												  			<li>Berupa Umbi, Akar Rimpang, Daun : Rp 50,- per kilogram</li>
												  			<li>Berupa Biji
												  				<ol>
												  					<li>Padi-padian : Rp 225,- per kilogram</li>
												  					<li>Palawija : Rp 180,- per kilogram</li>
												  					<li>Sayur-sayuran : Rp 270,- per kilogram</li>
												  					<li>Tanaman Hias : Rp 36,- per kilogram</li>
												  				</ol>
												  			</li>
												  			<li>Berupa Serbuk Sari : Rp 500,- per gram</li>
												  			<li>Bentuk yang dikemas dalam botol-botol erlenmeyer, cawan petri dan sejenis : Rp 500,- per kemasan</li>
												  		</ul>
												  		<b>Tanaman Hidup Bukan Benih</b>
												  		<ul>
												  			<li>Berbentuk Batang : Rp 100,- per batang</li>
												  			<li>Berbentuk Buah : Rp 100,- per kilogram</li>
												  			<li>Berbentuk Biji : Rp 1000,- per ton</li>
												  			<li>Berbentuk Daun, Bunga : Rp 10,- per kilogram</li>
												  			<li>Berupa Umbi, Akar Rimpang, Daun : Rp 5,- per kilogram</li>
												  		</ul>
												  	</li>
												  	<li>
												  		<p>Biaya Pengawasan Tindakan Karantina</p>
												  		<ul>
												  			<li>pemeriksaan : Rp 10.000,- 1 kali per orang</li>
												  			<li>Pengujian Laboratorium : Rp 10.000,- 1 kali per orang</li>
												  			<li>Perlakuan : Rp 10.000,- 1 kali per orang</li>
												  		</ul>
												  	</li>
										  			<li>
												  		<p>Biaya Pengujian Laboratorium</p>
												  		<ul>
												  			<li>Entomology (Pemeriksaan Langsung) : Rp 10.000,- per sampel</li>
												  			<li>Micology (Pemeriksaan Langsung) : Rp 10.000,- per sampel</li>
												  			<li>Micology (Blotter Test) : Rp 30.000,- per sampel untuk benih kecil</li>
												  			<li>Micology (Blotter Test) : Rp 60.000,- per sampel untuk benih besar</li>
												  		</ul>
												  	</li>
												  	<li>
												  		<p>Dokumen Tindakan Karantina</p>
												  		<ul>
												  			<li>Sertfikat Pelepasan : Rp 5.000,- per sertifikat</li>
												  		</ul>
												  	</li>
												  </ol>
											</div>
											<br/>
										<a href="kt" class="button-cta btn-berita">Kembali</a>
									  </div>
									  <!--End Persyaratan Impor -->
						</div>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->

	</section>

<?php }elseif(isset($_GET['antararea'])){ ?>

	<section id="prosedur" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Prosedur & Persyaratan</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- about module -->
				<div class="col-md-12 text-center">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-leaf"></i>
							<h2>Karantina Tumbuhan</h2>
								  <!-- Persyaratan Domestik -->
									  <div id="tabs-3">

									  	<button class="accordion button-cta">Persyaratan Domestik Masuk</button>
											<div class="panel">
											  <ol>
											  	<li>
											  		Melalui Tempat Pemasukan/pengeluaran yang telah ditetapkan.*
											  	</li>
											  	<li>
											  		Dilaporkan dan diserahkan kepada petugas Karantina Tumbuhan untuk keperluan Tindakan Karantina.*
											  	</li>
											  	<li>
											  		Dilengkapi sertifikat kesehatan tumbuhan (KT 12) dari area asal bagi tumbuhan dan bagian-bagiannya, kecuali media pembawa yang tergolong benda lain*
											  	</li>
											  </ol>
											  <i><b>Keterangan : * Wajib, apabila dilalulintaskan dari area yang tidak bebas ke area yang bebas OPTK</b></i>
											  <p>Prosedur Layanan</p>
											  <ul>
											  	<li>Setelah dilaporkan petugas karantina tumbuhan akan melakukan pemeriksaan secara administratif</li>
											  </ul>
											  	<ol>
											  		<li>
											  			Pemeriksaan administratif dilakukan untuk mengetahui kelengkapan, keabsahan dan kebenaran isi dokumen persyaratan
											  		</li>
											  		<li>
											  			Apabila pada pemeriksaan dokumen persyaratan tidak lengkap atau tidak absah atau kebenaran isi tidak sesuai maka akan dilakukan tindakan pemeriksaan kesehatan
											  		</li>
											  		<li>
											  			Apabila pada pemeriksaan kesehatan ditemukan adanya OPTK, dilakukan tindakan perlakuan.
											  		</li>
											  		<li>
											  			Apabila pada pemeriksaan kesehatan media pembawa dinyatakan sehat maka petugas karantina akan menerbitkan Sertifikat Pelepasan (KT 9).
											  		</li>
											  	</ol>

											</div>

											<button class="accordion button-cta">Persyaratan Domestik Keluar</button>
											<div class="panel">
												<ol>
												  	<li>
												  		Melalui Tempat Pemasukan/pengeluaran yang telah ditetapkan
												  	</li>
												  	<li>
												  		Dilaporkan dan diserahkan kepada petugas Karantina Tumbuhan untuk keperluan Tindakan Karantina, Pelaporan dilakukan secara tertulis dengan mengisi form permohonan SP1
												  	</li>
											  	</ol>
											  	<p>Prosedur Layanan</p>
												  	<ul>
												  		<li>
												  			Setelah dilaporkan petugas karantina tumbuhan akan melakukan pemeriksaan kesehatan terhadap media pembawa
												  		</li>
												  	</ul>
												  	<ol>
												  		<li>
												  			Apabila pada pemeriksaan kesehatan ditemukan adanya OPTK, dilakukan tindakan perlakuan.
												  		</li>
												  		<li>
												  			Apabila pada pemeriksaan kesehatan media pembawa dinyatakan sehat maka petugas karantina akan menerbitkan Sertifikat Kesehatan Tumbuhan Antar Area (KT 12).
												  		</li>
												  		<li>
												  			Apabila media pembawa dilalulintaskan dari daerah bebas ke daerah yang tidak bebas maka petugas karantina akan menerbitkan Surat Keterangan Tidak Diperlukan Tindakan Karantina (SP 5).
												  		</li>
												  	</ol>
											</div>

											<button class="accordion button-cta">Standar Waktu Pelayanan dan Tarif Jasa Karantina</button>
											<div class="panel">
												 <p>Standar Waktu Pelayanan Untuk Pengeluaran/ Ekspor</p>
										  			<li>1 jam - Maksimal 21 Hari</li>

										  			<p>Standar Waktu Untuk Pengajuan Instalasi Karatina Tumbuhan</p>	
										  			<li>3 Hari Kerja</li>

												  <p>Tarif Jasa Karantina Untuk Pengeluaran/ Ekspor</p>
												  <ol>
												  	<li>
												  		<p>Biaya Pemeriksaan</p>
												  		<b>Tanaman Hidup dan Benih</b>
												  		<ul>
												  			<li>Berupa Pohon (termasuk stumb) : Rp 100,- per batang</li>
												  			<li>Plantet. Ex-plant : Rp 10,- per batang</li>
												  			<li>Berupa Umbi, Akar Rimpang, Daun : Rp 25,- per kilogram</li>
												  			<li>Berupa Biji
												  				<ol>
												  					<li>Padi : Rp 50,- per kilogram</li>
												  					<li>Palawija : Rp 40,- per kilogram</li>
												  					<li>Sayur-sayuran : Rp 60,- per kilogram</li>
												  					<li>Tanaman Hias : Rp 80,- per kilogram</li>
												  				</ol>
												  			</li>
												  			<li>Berupa Serbuk Sari : Rp 150,- per gram</li>
												  			<li>Bentuk yang dikemas dalam botol-botol erlenmeyer, cawan petri dan sejenis : Rp 250,- per kemasan</li>
												  		</ul>
												  		<b>Tanaman Hidup Bukan Benih</b>
												  		<ul>
												  			<li>Berbentuk Batang : Rp 50,- per batang</li>
												  			<li>Berbentuk Buah : Rp 5,- per kilogram</li>
												  			<li>Berbentuk Biji : Rp 250,- per ton</li>
												  			<li>Berbentuk Daun Bunga : Rp 2,- per kilogram</li>
												  			<li>Berupa Umbi, Akar Rimpang, Daun : Rp 2,- per kilogram</li>
												  		</ul>
												  	</li>
												  	<li>
												  		<p>Biaya Pengawasan Tindakan Karantina</p>
												  		<ul>
												  			<li>pemeriksaan : Rp 10.000,- 1 kali per orang</li>
												  			<li>Pengujian Laboratorium : Rp 10.000,- 1 kali per orang</li>
												  			<li>Perlakuan : Rp 10.000,- 1 kali per orang</li>
												  		</ul>
												  	</li>
										  			<li>
												  		<p>Biaya Pengujian Laboratorium</p>
												  		<ul>
												  			<li>Entomology (Pemeriksaan Langsung) : Rp 10.000,- per sampel</li>
												  			<li>Micology (Pemeriksaan Langsung) : Rp 10.000,- per sampel</li>
												  			<li>Micology (Blotter Test) : Rp 30.000,- per sampel untuk benih kecil</li>
												  			<li>Micology (Blotter Test) : Rp 60.000,- per sampel untuk benih besar</li>
												  		</ul>
												  	</li>
												  	<li>
												  		<p>Dokumen Tindakan Karantina</p>
												  		<ul>
												  			<li>Sertiifikat Kesehatan Tumbuhan Antar Area : Rp 5.000,- per sertifikat</li>
												  		</ul>
												  	</li>
												  </ol>
											</div>
											<br/>
										<a href="kt" class="button-cta btn-berita">Kembali</a>
									  </div>
						</div>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->

	</section>

<?php }else{ ?>

	<section id="about" class="light-bg">
		<div class="container bg">
			<div class="row">	
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Prosedur & Persyaratan <br> Karantina Tumbuhan</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- about module -->
				<div class="col-md-4 text-center">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-ship"></i>
							<h3>Pengeluaran/ Ekspor</h3>
							<p>Prosedur & Persyaratan Pengeluaran Media Pembawa Dari Wilayah RI</p>
						</div>
						<a href="kt?pengeluaran" class="button-cta btn-berita">Selengkapnya</a>
					</div>
				</div>
				<!-- end about module -->
				<!-- about module -->
				<div class="col-md-4 text-center">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-plane"></i>
							<h3>Pemasukan/ Impor</h3>
							<p>Prosedur & Persyaratan Pemasukan Media Pembawa Ke Wilayah RI</p>
						</div>
						<a href="kt?pemasukan" class="button-cta btn-berita">Selengkapnya</a>
					</div>
				</div>
				<!-- end about module -->
				<!-- about module -->
				<div class="col-md-4 text-center">
					<div class="mz-module">
						<div class="mz-module-about">
							<i class="fa fa-truck"></i>
							<h3>Domestik</h3>
							<p>Prosedur & Persyaratan Pengeluaran dan Pemasukan Media Pembawa Antar Area Di Dalam Wilayah RI</p>
						</div>
						<a href="kt?antararea" class="button-cta btn-berita">Selengkapnya</a>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>

<?php } ?>
		


<?php  

	require_once('templates/footer_web.php');

?>