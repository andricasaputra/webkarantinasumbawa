<?php

	require_once('templates/head.php');
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
							<i class="fa fa-paw"></i>
							<h2>Pengeluaran/ Ekspor</h2>
								  <!-- Persyaratan Ekspor -->
								  <div id="tabs-1">
								   	 <button class="accordion button-cta">Persyaratan Pengeluaran / Ekspor Media Pembawa</button>
										<div class="panel">
										  <ol>
										  	<li>
										  		Dilengkapi Sertifikat Kesehatan yang diterbitkan oleh Dokter Hewan Karantina ditempat pengeluaran.
										  	</li>
										  	<li>
										  		Surat Rekomendasi Pengeluaran (SRP) bagi Media Pembawa yang tergolong Hewan Ternak yang diterbitkan oleh Direktorat Jenderal Peternakan dan Kesehatan Hewan, Kementerian Pertanian.
										  	</li>
										  	<li>
										  		Surat Angkut Tumbuhan dan Satwa Luar Negeri (SATSLN/CITES) bagi media pembawa yang tergolong Hewan Liar yang diterbitkan oleh Direktorat Jenderal Perlindungan Hutan dan Konservasi Alam, Kementerian Kehutanan.
										  	</li>
										  	<li>
										  		Memenuhi persyaratan lainnya (Import Permit) yang ditetapkan/diminta oleh negara tujuan/pengimpor.
										  	</li>
										  	<li>
										  		Dilaporkan dan diserahkan kepada petugas karantina dipelabuhan/tempat pengeluaran untuk keperluan tindak karantina.
										  	</li>
										  </ol>
										</div>

										<button class="accordion button-cta">Prosedur dan Tata Cara Pengeluaran / Ekspor</button>
										<div class="panel">
											<p>Setelah menerima pelaporan dan penyerahan media pembawa, petugas karantina hewan akan melakukan pemeriksaan administratif</p>
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
											  		Selanjutnya Media Pembawa akan dikenakan tindakan perlakuan
											  	</li>
									  			<li>
											  		Jika Media Pembawa tergolong yang harus dikenakan tindakan pengasingan dan pengamatan, maka akan dilakukan tindakan pengasingan dan pengamatan
											  	</li>
											  	<li>
											  		Apabila selama masa pengasingan/ pengamatan media pembawa ternyata sakit atau setelah diberikan perlakuan ternyata media pembawa tidak dapat disembuhkan dari HPHK maka petugas karantina akan melakukan tindakan penolakan
											  	</li>
											  	<li>
											  		Apabila media pembawa dinyatakan <b> sehat dan bebas dari HPHK </b> maka petugas karantina hewan akan menerbitkan Sertifikat Kesehatan Hewan/ Health Certificate (KH 11)
											  	</li>
											  </ol>
										</div>

										<button class="accordion button-cta">Standar Waktu Pelayanan dan Tarif Jasa Karantina</button>
										<div class="panel">
											 <p>Standar Waktu Pelayanan Untuk Pengeluaran/ Ekspor</p>
									  			<li>1 jam - Maksimal 21 Hari</li>

									  			<p>Standar Waktu Untuk Pengajuan Instalasi Karatina Hewan</p>	
									  			<li>3 Hari Kerja</li>

											  <p>Tarif Jasa Karantina Untuk Pengeluaran/ Ekspor</p>
											  <ol>
											  	<li>
											  		<p>Biaya Pemeriksaa Fisik</p>
											  		<b>Hewan Hidup</b>
											  		<ul>
											  			<li>Hewan Besar : Rp 5.000,- per ekor</li>
											  			<li>Hewan Kecil : Rp 2.500,- per ekor</li>
											  			<li>Unggas Kecil : Rp 50,- per ekor
											  				<ol>
											  					<li>Unggas Umur Sehari : Rp 5,- per ekor/li>
											  				</ol>
											  			</li>
											  			<li>Hewan Kesayangan
											  				<ol>
											  					<li>Kuda : Rp 50.000,- per ekor</li>
											  					<li>Anjing : Rp 10.000,- per ekor</li>
											  					<li>Kucing : Rp 10.000,- per ekor</li>
											  				</ol>
											  			</li>
											  		</ul>
											  		<b>Bahan Asal hewan (BAH)</b>
											  		<ul>
											  			<li>BAH Pangan
											  				<ol>
											  					<li>Daging Hewan: Rp 75,- per kilogram</li>
											  					<li>Daging Unggas: Rp 75,- per kilogram</li>
											  					<li>Susu: Rp 25,- per kilogram</li>
											  					<li>Telur Konsumsi: Rp 15,- per kilogram</li>
											  					<li>Madu: Rp 25,- per kilogram</li>
											  				</ol>
											  			</li>
											  		</ul>
											  		<b>Hasil Bahan Asal Hewan (HBAH)</b>
											  		<ul>
									  					<li>Hasil Bahan Asal Daging Hewan : Rp 50,- per kilogram</li>
									  					<li>Hasil Bahan Asal Daging unggas : Rp 50,- per kilogram</li>
									  				</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Pengasingan Dan Pengamatan</p>
											  		<ul>
											  			<li>Hewan : Rp 100,- per hari per ekor</li>
											  			<li>Unggas Umur Sehari : Rp 1,- per hari per ekor</li>
											  			<li>Lebah dan Serangga Lainnya : Rp 5.000,- per koloni per ekor</li>
											  		</ul>
											  	</li>
									  			<li>
											  		<p>Biaya Perlakuan Desinfeksi / Desinsektasi / Fumigasi</p>

										  				<ul><p>Hewan Hidup</p>
										  					<li>Hewan besar : Rp 500,- per ekor</li>
										  					<li>Hewan kecil : Rp 200,- per ekor</li>
										  					<li>Hewan kesayangan : Rp 10.000,- per ekor</li>
										  					<li>Unggas besar: Rp 200,- per ekor</li>
										  					<li>Unggas kecil: Rp 200,- per ekor</li>
										  					<li>Unggas umur sehari: Rp 50,- per ekor</li>
										  				</ul>

											  	</li>
											  	<li>
											  		<p>Biaya Perlakuan Vaksinasi</p>
											  		<ul>
									  					<li>Hewan besar : Rp 500,- per ekor</li>
									  					<li>Hewan kecil : Rp 200,- per ekor</li>
									  					<li>Hewan kesayangan (Kuda) : Rp 25.000,- per ekor</li>
									  					<li>Hewan kesayangan (Anjing/ Kucing/ Primata) : Rp 20.000,- per ekor</li>
									  					<li>Unggas besar: Rp 100,- per ekor</li>
									  					<li>Unggas kecil: Rp 25,- per ekor</li>
									  					<li>Unggas umur sehari: Rp 10,- per ekor</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Uji Dianostik/ Laboratorium</p>
											  		<ul>
									  					<li>Uji Dianostik Lapangan
									  						<ol>
									  							<li>Uji Rose Bengal : Rp 5.000,- per sampel</li>
									  						</ol>
									  					</li>
									  					<li>Pengujian Laboratorium
									  						<ol>
									  							<li>Parasitologi (Ulas Darah) : Rp 2.000,- per sampel</li>
									  						</ol>
									  					</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Jasa Sarana Dalam Rangka Tindakan Karantina</p>
											  		<ul>
									  					<li>Kandang
									  						<ol>
									  							<li>Hewan Besar : Rp 1000,- per ekor per hari</li>
									  							<li>Hewan Kecil : Rp 500,- per ekor per hari</li>
									  							<li>Hewan Kesayangan : Rp 7500,- per ekor per hari</li>
									  						</ol>
									  					</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Dokumen Tindakan Karantina</p>
											  		<ul>
											  			<li>Health Certificate : Rp 5.000,- per sertifikat</li>
											  		</ul>
											  	</li>
											  </ol>
										</div>
										<br/>
										<a href="kh" class="button-cta btn-berita">Kembali</a>
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
							<i class="fa fa-paw"></i>
							<h2>Pemasukan/ Impor</h2>
								  <!-- Persyaratan Impor -->
								  <div id="tabs-2">
										<button class="accordion button-cta">Persyaratan Pemasukan / Impor Media Pembawa</button>
										<div class="panel">
										  <ol>
										  	<li>
										  		Dilengkapi Sertifikat Kesehatan (Health Certificate) yang diterbitkan oleh pejabat yang berwenang di negara asal dan negara transit.
										  	</li>
										  	<li>
										  		Surat Keterangan Asal (Certificate of Origin) bagi media yang tergolong benda lain, yang diterbitkan oleh perusahaan produsen/tempat pengolahan di negara asal.
										  	</li>
										  	<li>
										  		Surat Angkut Satwa (CITES) bagi media tergolong hewan liar, yang diterbitkan oleh pejabat berwenang (CITES Authority) di negara asal
										  	</li>
										  	<li>
										  		Surat Rekomendasi Pemasukan (SRP) dari Direktorat Jenderal Peternakan dan Kesehatan Hewan, Kementerian Pertanian RI.
										  	</li>
										  	<li>
										  		Sertifikat Halal dari Otoritas Lembaga Muslim dari negara Asal yang diakui oleh MUI.
										  	</li>
										  	<li>
										  		Memiliki Instalasi Karantina jika pelaksanaan tidak dapat dilakukan di Instalasi Karantina Pemerintah, yang ditetapkan oleh Kepala Badan Karantina a/n Menteri Pertanian.
										  	</li>
										  	<li>
										  		Dilaporkan dan diserahkan kepada petugas karantina untuk keperluan tindakan karantina.
										  	</li>
										  </ol>
										</div>

										<button class="accordion button-cta">Prosedur dan Tata Cara Pengeluaran / Ekspor</button>
										<div class="panel">
											<p>Setelah menerima pelaporan dan penyerahan media pembawa, petugas karantina hewan akan melakukan pemeriksaan administratif</p>
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
											  		Selanjutnya Media Pembawa akan dikenakan tindakan perlakuan
											  	</li>
									  			<li>
											  		Jika Media Pembawa tergolong yang harus dikenakan tindakan pengasingan dan pengamatan, maka akan dilakukan tindakan pengasingan dan pengamatan
											  	</li>
											  	<li>
											  		Apabila selama masa pengasingan/ pengamatan media pembawa ternyata sakit atau setelah diberikan perlakuan ternyata media pembawa tidak dapat disembuhkan dari HPHK maka petugas karantina akan melakukan tindakan penolakan
											  	</li>
											  	<li>
											  		Apabila media pembawa dinyatakan <b> sehat dan bebas dari HPHK </b> maka petugas karantina hewan akan menerbitkan Sertifikat Pelepasan/ Certificate of Animal Quarantine Release (KH 14)
											  	</li>
											  </ol>
										</div>

										<button class="accordion button-cta">Standar Waktu Pelayanan dan Tarif Jasa Karantina</button>
										<div class="panel">
											 <p>Standar Waktu Pelayanan Untuk Pemasukan/ Impor</p>
									  			<li>1 jam - Maksimal 21 Hari</li>

									  			<p>Standar Waktu Untuk Pengajuan Instalasi Karatina Hewan</p>	
									  			<li>3 Hari Kerja</li>

											  <p>Tarif Jasa Karantina Untuk Pemasukan/ Impor</p>
											  <ol>
											  	<li>
											  		<p>Biaya Pemeriksaa Fisik</p>
											  		<b>Hewan Hidup</b>
											  		<ul>
											  			<li>Hewan Besar : Rp 10.000,- per ekor</li>
											  			<li>Hewan Kecil : Rp 5.000,- per ekor</li>
											  			<li>Unggas Kecil : Rp 100,- per ekor
											  				<ol>
											  					<li>Unggas Umur Sehari : Rp 10,- per ekor/li>
											  				</ol>
											  			</li>
											  			<li>Hewan Kesayangan
											  				<ol>
											  					<li>Kuda : Rp 100.000,- per ekor</li>
											  					<li>Anjing : Rp 20.000,- per ekor</li>
											  					<li>Kucing : Rp 15.000,- per ekor</li>
											  				</ol>
											  			</li>
											  		</ul>
											  		<b>Bahan Asal hewan (BAH)</b>
											  		<ul>
											  			<li>BAH Pangan
											  				<ol>
											  					<li>Daging Hewan: Rp 125,- per kilogram</li>
											  					<li>Daging Unggas: Rp 125,- per kilogram</li>
											  					<li>Susu: Rp 50,- per kilogram</li>
											  					<li>Telur Konsumsi: Rp 25,- per kilogram</li>
											  					<li>Madu: Rp 50,- per kilogram</li>
											  				</ol>
											  			</li>
											  		</ul>
											  		<b>Hasil Bahan Asal Hewan (HBAH)</b>
											  		<ul>
									  					<li>Hasil Bahan Asal Daging Hewan : Rp 100,- per kilogram</li>
									  					<li>Hasil Bahan Asal Daging unggas : Rp 100,- per kilogram</li>
									  				</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Pengasingan Dan Pengamatan</p>
											  		<ul>
											  			<li>Hewan : Rp 100,- per hari per ekor</li>
											  			<li>Unggas Umur Sehari : Rp 1,- per hari per ekor</li>
											  			<li>Lebah dan Serangga Lainnya : Rp 5.000,- per koloni per ekor</li>
											  		</ul>
											  	</li>
									  			<li>
											  		<p>Biaya Perlakuan Desinfeksi / Desinsektasi / Fumigasi</p>

										  				<ul><p>Hewan Hidup</p>
										  					<li>Hewan besar : Rp 500,- per ekor</li>
										  					<li>Hewan kecil : Rp 200,- per ekor</li>
										  					<li>Hewan kesayangan : Rp 10.000,- per ekor</li>
										  					<li>Unggas besar: Rp 200,- per ekor</li>
										  					<li>Unggas kecil: Rp 200,- per ekor</li>
										  					<li>Unggas umur sehari: Rp 50,- per ekor</li>
										  				</ul>

											  	</li>
											  	<li>
											  		<p>Biaya Perlakuan Vaksinasi</p>
											  		<ul>
									  					<li>Hewan besar : Rp 500,- per ekor</li>
									  					<li>Hewan kecil : Rp 200,- per ekor</li>
									  					<li>Hewan kesayangan (Kuda) : Rp 25.000,- per ekor</li>
									  					<li>Hewan kesayangan (Anjing/ Kucing/ Primata) : Rp 20.000,- per ekor</li>
									  					<li>Unggas besar: Rp 100,- per ekor</li>
									  					<li>Unggas kecil: Rp 25,- per ekor</li>
									  					<li>Unggas umur sehari: Rp 10,- per ekor</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Uji Dianostik/ Laboratorium</p>
											  		<ul>
									  					<li>Uji Dianostik Lapangan
									  						<ol>
									  							<li>Uji Rose Bengal : Rp 5.000,- per sampel</li>
									  						</ol>
									  					</li>
									  					<li>Pengujian Laboratorium
									  						<ol>
									  							<li>Parasitologi (Ulas Darah) : Rp 2.000,- per sampel</li>
									  						</ol>
									  					</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Jasa Sarana Dalam Rangka Tindakan Karantina</p>
											  		<ul>
									  					<li>Kandang
									  						<ol>
									  							<li>Hewan Besar : Rp 1.000,- per ekor per hari</li>
									  							<li>Hewan Kecil : Rp 500,- per ekor per hari</li>
									  							<li>Hewan Kesayangan : Rp 10.000,- per ekor per hari</li>
									  						</ol>
									  					</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Dokumen Tindakan Karantina</p>
											  		<ul>
											  			<li>Certificate of Animal Quarantine Release : Rp 5.000,- per sertifikat</li>
											  		</ul>
											  	</li>
											  </ol>
										</div>
										<br/>
										<a href="kh" class="button-cta btn-berita">Kembali</a>
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
							<i class="fa fa-paw"></i>
							<h2>Domestik Masuk dan Keluar</h2>
								  <!-- Persyaratan Domestik -->
								  <div id="tabs-3">

								  	<button class="accordion button-cta">Persyaratan Dan Prosedur Domestik Masuk</button>
										<div class="panel">
										  <ol>
									  			<li>Dilengkapi Serifikat Kesehatan (Health Certificate) yang diterbitkan oleh Dokter Hewan Karantina dari tempat pengeluaran.</li>
									  			<li>
											  		Surat Rekomendasi Teknis Pemasukan bagi Media Pembawa yang tergolong hewan ternak dan produk hewan, yang diterbitkan oleh Dinas Peternakan dan Kesehatan Hewan.
											  	</li>
											  	<li>
											  		Surat Izin Pemasukan Hewan/Produk Hewan yang diterbitkan oleh Badan Penanaman Modal dan Pelayanan Perizinan Terpadu
											  	</li>
											  	<li>
											  		Surat Angkut Tumbuhan dan Satwa Dalam Negeri (SATSDN) bagi media pembawa yang tergolong hewan liar yang diterbitkan oleh Balai Konservasi Sumberdaya Alam (BKSDA).
											  	</li>
											  	<li>
											  		Dilaporkan dan diserahkan kepada petugas karantina ditempat pemasukan untuk keperluan tindakan karantina.
											  	</li>
									  		</ol>
											<p>Setelah menerima pelaporan dan penyerahan media pembawa, petugas karantina hewan akan melakukan pemeriksaan administratif</p>
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
											  		Selanjutnya Media Pembawa akan dikenakan tindakan perlakuan
											  	</li>
									  			<li>
											  		Jika Media Pembawa tergolong yang harus dikenakan tindakan pengasingan dan pengamatan, maka akan dilakukan tindakan pengasingan dan pengamatan
											  	</li>
											  	<li>
											  		Apabila selama masa pengasingan/ pengamatan media pembawa ternyata sakit atau setelah diberikan perlakuan ternyata media pembawa tidak dapat disembuhkan dari HPHK maka petugas karantina akan melakukan tindakan penolakan
											  	</li>
											  	<li>
											  		Apabila media pembawa dinyatakan <b> sehat dan bebas dari HPHK </b> maka petugas karantina hewan akan menerbitkan Sertifikat Pelepasan/ Certificate of Animal Quarantine Release (KH 14)
											  	</li>
											  </ol>
										</div>

										<button class="accordion button-cta">Persyaratan Dan Prosedur Domestik Keluar</button>
										<div class="panel">
											<ol>
									  			<li>Dilengkapi Serifikat Kesehatan (Health Certificate) yang diterbitkan oleh Dokter Hewan Karantina ditempat pengeluaran.</li>
									  			<li>
											  		Surat Rekomendasi Teknis Pengeluaran bagi Media Pembawa yang tergolong hewan ternak dan produk hewan, yang diterbitkan oleh Dinas Peternakan dan Kesehatan Hewan.
											  	</li>
											  	<li>
											  		Surat Keterangan Kesehatan Asal Hewan (SKKH)/ Surat Keterangan Sanitasi Produk Hewan yang diterbitkan oleh Dinas Peternakan dan Kesehatan Hewan atau Dinas yang menangani Kesehatan Hewan Kabupaten/Kota.
											  	</li>
											  	<li>
											  		Surat Izin Pengeluaran Hewan/Produk Hewan yang diterbitkan oleh Badan Penanaman Modal dan Pelayanan Perizinan Terpadu.
											  	</li>
											  	<li>
											  		Surat Angkut Tumbuhan dan Satwa Dalam Negeri (SATSDN) bagi media pembawa yang tergolong hewan liar yang diterbitkan oleh Balai Konservasi Sumberdaya Alam (BKSDA).
											  	</li>
											  	<li>
											  		Dilaporkan dan diserahkan kepada petugas karantina ditempat pengeluaran untuk keperluan tindakan karantina.
											  	</li>

									  		</ol>
											<p>Setelah menerima pelaporan dan penyerahan media pembawa, petugas karantina hewan akan melakukan pemeriksaan administratif</p>
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
											  		Selanjutnya Media Pembawa akan dikenakan tindakan perlakuan
											  	</li>
									  			<li>
											  		Jika Media Pembawa tergolong yang harus dikenakan tindakan pengasingan dan pengamatan, maka akan dilakukan tindakan pengasingan dan pengamatan
											  	</li>
											  	<li>
											  		Apabila selama masa pengasingan/ pengamatan media pembawa ternyata sakit atau setelah diberikan perlakuan ternyata media pembawa tidak dapat disembuhkan dari HPHK maka petugas karantina akan melakukan tindakan penolakan
											  	</li>
											  	<li>
											  		Apabila media pembawa dinyatakan <b> sehat dan bebas dari HPHK </b> maka petugas karantina hewan akan menerbitkan Health Certificate (KH 11)
											  	</li>
											  </ol>
										</div>

										<button class="accordion button-cta">Standar Waktu Pelayanan dan Tarif Jasa Karantina</button>
										<div class="panel">
											 <p>Standar Waktu Pelayanan Untuk Domestik Masuk</p>
									  			<li>1 jam - Maksimal 21 Hari</li>

									  			<p>Standar Waktu Pelayanan Untuk Domestik Keluar</p>
									  			<li>1 jam - Maksimal 21 Hari</li>

									  			<p>Standar Waktu Untuk Pengajuan Instalasi Karatina Hewan</p>	
									  			<li>3 Hari Kerja</li>

											  <p>Tarif Jasa Karantina Untuk Domestik/ Antar Area</p>
											  <ol>
											  	<li>
											  		<p>Biaya Pemeriksaa Fisik</p>
											  		<b>Hewan Hidup</b>
											  		<ul>
											  			<li>Hewan Besar : Rp 5.000,- per ekor</li>
											  			<li>Hewan Kecil : Rp 2.500,- per ekor</li>
											  			<li>Unggas Kecil : Rp 50,- per ekor
											  				<ol>
											  					<li>Unggas Umur Sehari : Rp 5,- per ekor</li>
											  				</ol>
											  			</li>
											  			<li>Hewan Kesayangan
											  				<ol>
											  					<li>Kuda : Rp 50.000,- per ekor</li>
											  					<li>Anjing : Rp 10.000,- per ekor</li>
											  					<li>Kucing : Rp 10.000,- per ekor</li>
											  				</ol>
											  			</li>
											  		</ul>
											  		<b>Bahan Asal hewan (BAH)</b>
											  		<ul>
											  			<li>BAH Pangan
											  				<ol>
											  					<li>Daging Hewan: Rp 75,- per kilogram</li>
											  					<li>Daging Unggas: Rp 75,- per kilogram</li>
											  					<li>Susu: Rp 25,- per kilogram</li>
											  					<li>Telur Konsumsi: Rp 15,- per kilogram</li>
											  					<li>Madu: Rp 25,- per kilogram</li>
											  				</ol>
											  			</li>
											  		</ul>
											  		<b>Hasil Bahan Asal Hewan (HBAH)</b>
											  		<ul>
									  					<li>Hasil Bahan Asal Daging Hewan : Rp 50,- per kilogram</li>
									  					<li>Hasil Bahan Asal Daging unggas : Rp 50,- per kilogram</li>
									  				</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Pengasingan Dan Pengamatan</p>
											  		<ul>
											  			<li>Hewan : Rp 100,- per hari per ekor</li>
											  			<li>Unggas Umur Sehari : Rp 1,- per hari per ekor</li>
											  			<li>Lebah dan Serangga Lainnya : Rp 5.000,- per koloni per ekor</li>
											  		</ul>
											  	</li>
									  			<li>
											  		<p>Biaya Perlakuan Desinfeksi / Desinsektasi / Fumigasi</p>

										  				<ul><p>Hewan Hidup</p>
										  					<li>Hewan besar : Rp 500,- per ekor</li>
										  					<li>Hewan kecil : Rp 200,- per ekor</li>
										  					<li>Hewan kesayangan : Rp 10.000,- per ekor</li>
										  					<li>Unggas besar: Rp 200,- per ekor</li>
										  					<li>Unggas kecil: Rp 200,- per ekor</li>
										  					<li>Unggas umur sehari: Rp 50,- per ekor</li>
										  				</ul>

											  	</li>
											  	<li>
											  		<p>Biaya Perlakuan Vaksinasi</p>
											  		<ul>
									  					<li>Hewan besar : Rp 500,- per ekor</li>
									  					<li>Hewan kecil : Rp 200,- per ekor</li>
									  					<li>Hewan kesayangan (Kuda) : Rp 25.000,- per ekor</li>
									  					<li>Hewan kesayangan (Anjing/ Kucing/ Primata) : Rp 20.000,- per ekor</li>
									  					<li>Unggas besar: Rp 100,- per ekor</li>
									  					<li>Unggas kecil: Rp 25,- per ekor</li>
									  					<li>Unggas umur sehari: Rp 10,- per ekor</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Uji Diagnostik/ Laboratorium</p>
											  		<ul>
									  					<li>Uji Dianostik Lapangan
									  						<ol>
									  							<li>Uji Rose Bengal : Rp 5.000,- per sampel</li>
									  						</ol>
									  					</li>
									  					<li>Pengujian Laboratorium
									  						<ol>
									  							<li>Parasitologi (Ulas Darah) : Rp 2.000,- per sampel</li>
									  						</ol>
									  					</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Biaya Jasa Sarana Dalam Rangka Tindakan Karantina</p>
											  		<ul>
									  					<li>Kandang
									  						<ol>
									  							<li>Hewan Besar : Rp 500,- per ekor per hari</li>
									  							<li>Hewan Kecil : Rp 250,- per ekor per hari</li>
									  							<li>Hewan Kesayangan : Rp 2.000,- per ekor per hari</li>
									  						</ol>
									  					</li>
											  		</ul>
											  	</li>
											  	<li>
											  		<p>Dokumen Tindakan Karantina</p>
											  		<ul>
											  			<li>Health Certificate : Rp 5.000,- per sertifikat</li>
											  			<li>Certificate of Animal Quarantine Release : Rp 5.000,- per sertifikat</li>
											  		</ul>
											  	</li>
											  </ol>
										</div>
										<br/>
										<a href="kh" class="button-cta btn-berita">Kembali</a>
								  </div><!-- End Domestik -->
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
						<h2>Prosedur & Persyaratan <br> Karantina Hewan</h2>
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
						<a href="kh?pengeluaran" class="button-cta btn-berita">Selengkapnya</a>
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
						<a href="kh?pemasukan" class="button-cta btn-berita">Selengkapnya</a>
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
						<a href="kh?antararea" class="button-cta btn-berita">Selengkapnya</a>
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