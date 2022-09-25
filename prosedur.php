<?php  

	require_once('templates/head.php');

	if (isset($_GET['layanan']) != "") { ?>

		<style type="text/css">
				body{
					overflow-x: hidden;

				}
				.parallax {
				  background-attachment: fixed;
				  background-position: center;
				  background-repeat: no-repeat;
				  background-size: cover;
				  height: 100vh;
				  width: 100vw;  
				}

				.parallax2 {
				  background-attachment: fixed;
				  background-position: center;
				  background-repeat: no-repeat;
				  background-size: cover;
				  height: 100vh;
				  width: 100vw;  
				}

				.parallax:nth-of-type(1) {  
				  background-image: url('assets/img/tmp/kh2.jpg');
				  
				} 
				.parallax:nth-of-type(2) {  
				  background-image: url('assets/img/tmp/kh1.jpg');
				  
				} 
				.parallax:nth-of-type(3) {  
				  background-image: url('assets/img/tmp/bagankh.jpg');
				  
				} 

				.parallax2:nth-of-type(1) {  
				  background-image: url('assets/img/tmp/kt1.jpg');
				  
				} 
				.parallax2:nth-of-type(2) {  
				  background-image: url('assets/img/tmp/kt2.jpg');
				  
				} 
				.parallax2:nth-of-type(3) {  
				  background-image: url('assets/img/tmp/bagankh.jpg');
				  
				} 

				.kanan-atas p.p1{

				 	float: right;
					 width: 100%;
					font-size: 35px;
					color: #000;
					padding-bottom: 3%;
					line-height: 30px;
					padding-top: 6%;
					padding-left:  60%;
			
				}

				.kanan p{

					 float: right;
					 width: 100%;;
					 font-size: 15px;
					 color: #000;
					 font-weight: 600;
					 line-height: 30px;
					 margin-left: 5%;
			
				}

				.kiri-atas p.p1{
					float: left;
					width: 100%;
					font-size: 35px;
					color: #000;
					padding-bottom: 3%;
					line-height: 30px;
					padding-top: 6%;
					margin-left: 7%;
			
				}

				.kiri p{
					 float: left;
					 width: 100%;;
					 font-size: 15px;
					 color: #000;
					 font-weight: 600;
					 line-height: 30px;
					 margin-left: 5%;
			
				}

				.row{
					margin-top: 5%
				}

				@media screen and (max-width: 800px) {
				  .kanan-atas p.p1 {
					width: 100%;
					font-size: 20px;
					color: #000;
					margin-top: -15%;
					padding-bottom: 3%;
					line-height: 30px;
					padding-right: 50%;
				  }

					 .kanan p{

					 float: right;
					 width: 90% !important;
					 font-size: 12px !important;
					 color: #000;
					 font-weight: bold;
					 line-height: 20px;
				
					}

					.kiri-atas p.p1{
						float: left;
						width: 100%;
						font-size: 35px;
						color: #000;
						padding-bottom: 3%;
						line-height: 30px;
						padding-top: 6%;
						margin-left: 0%;
				
					}

					.kiri p{
						 float: left;
						 width: 90% !important;
						 font-size: 12px;
						 color: #000;
						 font-weight: 600;
						 line-height: 30px;
						 margin-left: 0%;
				
					}
				}

				@media screen and (max-width: 1299px) {
				  .kanan-atas p.p1 {
				    float: left;
					width: 100%;
					font-size: 35px;
					color: #000;
					margin-top: -15%;
					padding-bottom: 3%;
					line-height: 30px;
					margin-left: -60% /* The width is 100%, when the viewport is 800px or smaller */
				  }

					 .kanan p{

					 float: right;
					 width: 100%;
					 font-size: 12px;
					 color: #000;
					 font-weight: bold;
					 line-height: 20px;
				
					}

					.kiri-atas p.p1{
						float: left;
						width: 100%;
						font-size: 35px;
						color: #000;
						padding-bottom: 3%;
						line-height: 30px;
						padding-top: 6%;
						margin-left: 0%;
				
					}

					.kiri p{
						 float: left;
						 width: 100%;;
						 font-size: 12px;
						 color: #000;
						 font-weight: 600;
						 line-height: 30px;
						 margin-left: 0%;
				
					}
				}


				@media screen and (max-width: 1300px) {
				  .kanan-atas p.p1 {
				    float: right;
					width: 70%;
					font-size: 35px;
					color: #000;
					padding-top: 25%;
					padding-bottom: 3%;
					line-height: 30px ;
					margin-right: 50%

					/* The width is 100%, when the viewport is 800px or smaller */
				  }

					 .kanan p{
					 float: left;
					 width: 100%;
					 font-size: 14px;
					 color: #000;
					 font-weight: bold;
					 line-height: 20px;
					 margin-left: 0%
				
					}
				}


				.clear{
					clear: both;
				}
				</style>

	<?php 	$layanan = $_GET['layanan'];

		if ($layanan == 'karantina_hewan') { ?>

				
					  <section class="parallax">
					 		<div class="row">
					 			<div class="col-md-5 col-md-offset-4 kanan-atas"><p class="p1">Persyaratan Umum</p></div>
					  			<div class="col-md-6 col-md-offset-6 kanan">
							  		<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Dilengkapi dengan Surat Keterangan Kesehatan / Sanitasi oleh pejabat yang berwenang <br>dari 
										negara asal/daerah asal dan daerah tujuan (bila dipersyaratkan)
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Melalui tempat pemasukan dan pengeluaran yang telah di tetapkan
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Dilaporkan dan diserahkan kepada petugas karantina di tempat pemasukan atau <br> pengeluaran untuk keperluan tindakan karantina
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Mendapat persetujuan impor/ekspor dari pejabat yang ditunjuk atas nama Menteri <br> dengan 
										mempersyaratkan ketentuan teknis yang harus dilakukan terhadap media pembawa <br> ekspor sebelum di kapalkan / diangkut menuju negara tujuan.
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Persyaratan teknis lainya yang diwajibkan berdasarkan peraturan <br> (Peraturan Menteri, Surat Keputusan, Surat Edaran, dll).
									</p>
									<p>
									<b>Note :</b> Pengguna jasa melaporkan kepada petugas karantina dengan membawa dokumen berupa <br> <i>Surat Keterangan Kesehatan Hewan ( SKKH ) </i> dari daerah asal hewan  dan <i>Surat Ijin Pengeluaran Hewan </i> <br> dari Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Provinsi Nusa Tenggara Barat.
									</p>
									<a href="kh" class="button-cta btn-berita" style="border: none">Informasi Selengkapnya</a>
								</div>
							</div>
					  </section>
					  <div class="clear"></div>
					  <section class="parallax">
						  	<div class="row">
						 		<div class="col-md-6 kiri-atas"><p class="p1">Prosedur Layanan Karantina</p></div>
						  		<div class="col-md-8 kiri">
						  		<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Mengisi Formulir Permohonan Karantina KH 1 Untuk Pengguna Permohonan Pemeriksaan Karantina Online <br> (PPK Online) dapat langsung 
									mengambil nomor antrian.
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Mengambil nomor antrian sesuai dengan pelayanan karantina hewan. <br>
									Masing - masing pengajuan mungkin berbeda waktu pelayanan tergantung tindakan karantina yang dilakukan, <br>
									kelengkapan dokumen, dan persyaratan khusus lainnya.
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Petugas akan memeriksa berkas administrasi persyaratan dan melakukan pengambilan sampel  <br>
									untuk dilakukan pemeriksaan lanjutan di laboratorium. Permohonan pemeriksaan dapat dialokasi <br>
									pemilik dengan syarat menunggu penjadwalan petugas karantina. 
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Terhadap media pembawa yang sakit atau terjangkit HPHK berdasarkan hasil uji laboratorium, <br>maka hewan tersebut diberi perlakuan pengobatan dan masa karantinanya diperpanjang.
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Menerima HC (Health Certificate) untuk pemeriksaan administrasi dan teknis yang lengkap dan sehat. <br> Selanjutnya membayar biaya penerbitan 
									sertifikat sesuai dengan tarif yang berlaku.
								</p>
								<p><a href="kh" class="button-cta btn-berita" style="border: none">Informasi Selengkapnya</a></p>
							</div>
						  </div>
					  </section>
				<!-- /.container -->
		<?php	}elseif (isset($_GET['layanan']) == "karantina_tumbuhan"){ ?>

						 <section class="parallax2">
					 		<div class="row">
					 			<div class="col-md-5 col-md-offset-4 kanan-atas"><p class="p1">Persyaratan Umum</p></div>
					  			<div class="col-md-6 col-md-offset-6 kanan">
							  		<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Dilengkapi dengan Surat Keterangan Kesehatan / Sanitasi oleh pejabat yang berwenang <br>dari 
										negara asal/daerah asal dan daerah tujuan (bila dipersyaratkan).
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Melalui tempat pemasukan dan pengeluaran yang telah di tetapkan.
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Dilaporkan dan diserahkan kepada petugas karantina di tempat pemasukan atau <br> pengeluaran untuk keperluan tindakan karantina.
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Mendapat persetujuan impor/ekspor dari pejabat yang ditunjuk atas nama Menteri <br> dengan 
										mempersyaratkan ketentuan teknis yang harus dilakukan terhadap komoditi <br> ekspor sebelum di kapalkan / diangkut menuju negara tujuan.
									</p>
									<p>
							  			<i class="fa fa-check fa-fw"></i>
							  			Persyaratan teknis lainya yang diwajibkan berdasarkan peraturan <br> (Peraturan Menteri, Surat Keputusan, Surat Edaran, dll).
									</p>
									<p>
									<b>Note :</b>Untuk ekspor jagung, kelengkapan dokumen persyaratan lainnya yaitu berupa <br> <i>Rekomendasi Pengeluaran Bahan Pakan Asal Tumbuhan (RP II) </i>  yang dikeluarkan oleh <br> Dirjen Peternakan Dan Kesehatan Hewan, Kementerian Pertanian.
									</p>
									<a href="kt" class="button-cta btn-berita" style="border: none">Informasi Selengkapnya</a>
								</div>
							</div>
					  </section>
					  <div class="clear"></div>
					  <section class="parallax2">
						  	<div class="row">
						 		<div class="col-md-6 kiri-atas"><p class="p1">Prosedur Layanan Karantina</p></div>
						  		<div class="col-md-8 kiri">
						  		<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Mengisi Formulir Permohonan Karantina Tumbuhan SP1 Untuk Pengguna Permohonan Pemeriksaan <br> Karantina Online  (PPK Online) dapat langsung 
									mengambil nomor antrian.
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Mengambil nomor antrian sesuai dengan pelayanan karantina tumbuhan. <br>
									Masing - masing pengajuan mungkin berbeda waktu pelayanan tergantung tindakan karantina yang dilakukan, <br>
									kelengkapan dokumen, dan persyaratan khusus lainnya.
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Petugas akan memeriksa berkas administrasi persyaratan dan melakukan pengambilan sampel contoh <br>
									untuk dilakukan pemeriksaan lanjutan di laboratorium. Permohonan pemeriksaan dapat dialokasi <br>
									pemilik dengan syarat menunggu penjadwalan petugas karantina. 
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Terhadap media pembawa yang tidak sehat atau ditemukan adanya OPTK berdasarkan hasil uji laboratorium, <br>maka media pembawa tersebut diberikan perlakuan.
								</p>
								<p>
						  			<i class="fa fa-check fa-fw"></i>
						  			Menerima PC (Phytosanitary Certificate) KT 10 untuk permohonan ekspor atau KT 12 untuk permohonan domestik <br> apabila pemeriksaan administrasi dan teknis yang lengkap dan sehat. <br>  Selanjutnya membayar biaya penerbitan 
									sertifikat sesuai dengan tarif yang berlaku.
								</p>
								<p><a href="kt" class="button-cta btn-berita" style="border: none">Informasi Selengkapnya</a></p>
							</div>
						  </div>
					  </section>

		<?php } 

	}else{

	}	?>

<?php 

require_once('templates/footer_web.php');

?>