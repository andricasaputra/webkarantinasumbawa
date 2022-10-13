<?php  

require_once('templates/head.php');

?>

	<style type="text/css">
		#tentang h2{
			color: black;
			font-size: 24pt
		}

		#tentang h2.sub{
			color: black;
			font-size: 28pt
			padding-bottom: 30px; 
			font-size: 20pt; 
			font-weight: normal;
			padding-bottom: 30px;
		}

		#tentang p.tentang{
			text-align: left; 
			text-justify: inter-word; 
			text-indent: 4em; 
			color: black; 
			position: absolute; 
			margin-top: -1000px; 
			margin-left: 100px; 
			overflow: hidden;
		}

		#tentang p.sub{
			text-align: left; 
			color: black;
		}

		p.content {
			text-align: left;
			font-size: 20px;
			line-height: 28px;
		}

		#tentang img.gbr-tentang{
			padding-bottom: 30px; 
			border-top: 1px solid black;
			overflow: hidden;
		}

		
		div.misi{
				text-align: left; 
				letter-spacing: 1px; 
				color: #424242; 
				font-size: 13pt; 
				line-height: 1.6
		}

		p.visi{
			text-align: center; 
			text-justify: inter-word; 
			letter-spacing: 1px; 
			color: black; 
			font-weight: 600;
			font-size: 20px;
		}

		.grbwilker{
			text-align: center; 
			text-justify: inter-word; 
			letter-spacing: 1px; 
			color: black; 
			overflow: hidden;
		}


		/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 600px) {
		    #tentang p.tentang{
				letter-spacing: 2px; 
				font-size: 12pt ;
				font-weight: 300;
				line-height: 1.2;
			}

			.grbwilker img{
				text-align: center; 
				text-justify: inter-word; 
				letter-spacing: 1px; 
				color: black; 
				overflow: hidden;
				width: 100%;
			}

			#profilepict{
				width: 40%
			}
		}

		/* Small devices (portrait tablets and large phones, 600px and up) */
		@media only screen and (min-width: 600px) {
		    #tentang p.tentang{
				letter-spacing: 2px; 
				font-size: 12pt ;
				font-weight: 300;
				line-height: 1.2;
			}

			div.misi{
				margin-left: 50px; 

			}

			.grbwilker img{
				text-align: center; 
				text-justify: inter-word; 
				letter-spacing: 1px; 
				color: black; 
				overflow: hidden;
				width: 100%;
			}
		}

		/* Medium devices (landscape tablets, 768px and up) */
		@media only screen and (min-width: 768px) {
		    #tentang p.tentang{
				letter-spacing: 2px; 
				font-size: 13pt ;
				font-weight: 400;
				line-height: 1.4;
			}

			div.misi{
				margin-left: 50px; 

			}

		} 

		/* Large devices (laptops/desktops, 992px and up) */
		@media only screen and (min-width: 992px) {
		    #tentang p.tentang{
				letter-spacing: 2px; 
				font-size: 14pt ;
				font-weight: 400;
				line-height: 1.5;
			}

			div.misi{
				margin-left: 150px; 
			}

		} 

		/* Extra large devices (large laptops and desktops, 1200px and up) */
		@media only screen and (min-width: 1300px) {
		    #tentang p.tentang{
				letter-spacing: 1.5px; 
				font-size: 15pt ;
				font-weight: 500;
				line-height: 1.5;
			}

			div.misi{
				margin-left: 150px; 
			}
			
		}


		
	</style>

<?php

	if (isset($_GET['profil'])) { ?>

	

	<section id="tentang" class="light-bg top-margin">
		<div class="container">
			<div class="row">
				<div class="mz-module" >
					<div class="text-center" >
						<div class="section-title">
							<h2 class="judul text-center">Profil Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h2>
						</div>	
						<div class="sub-section-tilte col-sm-12">
							<h2 style="text-align: left;">Umum</h2>
						</div>	
						<div class="col-sm-12">
							<p class="content">
							Stasiun Karantina Pertanian Kelas I Sumbawa Besar merupakan Unit Pelaksana Tekhnis (UPT) dari Badan Karantina Pertanian yang melaksanakan kegiatan operasional di Pulau Sumbawa dengan kegiatan utama berupa pengiriman komoditi pertanian (hewan & tumbuhan) dengan tujuan antar pulau, ekspor maupun impor. 
							</p>
							<p class="content">
								Pulau Sumbawa merupakan pulau terbesar di Propinsi Nusa Tenggara Barat yang memiliki luas 14.386 km2. Pulau ini dibatasi oleh Selat Alas disebelah Barat yang memisahkan dengan Pulau Lombok, Selat Sape di sebelah timur yang memisahkan dengan Pulau Komodo, Samudera Hindia di sebelah selatan, dan Laut Flores di sebelah utara. Kota terbesarnya adalah Bima yang berada dibagian timur pulau ini. 
							</p>
							<p class="content">
								Dengan wilayah kerjanya meliputi seluruh Pulau Sumbawa yang terdiri dari 4 (empat) Kabupaten dan 1 (satu) Kota yaitu Kabupaten Sumbawa Barat, Kabupaten Sumbawa, Kabupaten Dompu dan Kabupaten Bima, serta Kota Bima, dengan membawahi 8 Wilayah Kerja Karantina Pertanian yang tersebar dari ujung barat Pulau Sumbawa hingga ke ujung timur, yaitu Wilker Pelabuhan Ferry Poto Tano, Wilker Pelabuhan Laut Benete, Wilker Pelabuhan Laut Badas, Wilker Bandara Sultan M Kaharuddin, Wilker Pelabuhan Laut Kempo, Wilker Bandara Sultan M Salahuddin, Wilker Pelabuhan Laut Bima. Dan Wilker pelabuhan Ferry Sape.
							</p>
						</div>

						<div class="sub-section-tilte col-sm-12">
							<h2 style="text-align: left;">Alamat</h2>
						</div>	
						<div class="col-sm-12">
							<p class="content">
								Jln. Pelabuhan Badas No. 01 Sumbawa - Nusa Tenggara Barat
							</p>
							<p class="content">
								Kode Pos : 84351
							</p>
						</div>

						<div class="sub-section-tilte col-sm-12">
							<h2 style="text-align: left;">Kontak</h2>
						</div>	
						<div class="col-sm-12">
							<p class="content">
								Telp/Fax : 0371 - 2629152
							</p>
							<p class="content">
								WA : 0813 3990 1664
							</p>
							<p class="content">
								Email : karantinasumbawa@pertanian.go.id
							</p>
						</div>

						<div class="sub-section-tilte col-sm-12">
							<h2 style="text-align: left;">Website & social media</h2>
						</div>	
						<div class="col-sm-12">
							<p class="content">
								Website : <a href="http://sumbawa.karantina.pertanian.go.id/" target="_blank" rel="noreferrer">sumbawa.karantina.pertanian.go.id</a>
							</p>
							<p class="content">
								 Facebook : <a href="https://www.facebook.com/karantinapertaniansumbawa/" target="_blank" rel="noreferrer">Karantina Pertanian Sumbawa</a>
							</p>
							<p class="content">
								 Twitter : <a href="https://twitter.com/SKP_Sumbawa?lang=id" target="_blank" rel="noreferrer">@SKP_Sumbawa</a>
							</p>
							<p class="content">
								 Instagram : <a href="https://www.instagram.com/karantinapertaniansumbawa/" target="_blank" rel="noreferrer">karantinapertaniansumbawa</a>
							</p>
							<p class="content">
								 Youtube : <a href="https://www.youtube.com/channel/UCavSN4-PUiPqA3GnejTpKFQ/videos" target="_blank" rel="noreferrer">Karantina Pertanian Sumbawa</a>
							</p>
						</div>

						<div class="col-sm-12">
							 <a href="home" class="button-cta btn-berita">Kembali</a>
						</div>						
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>

<?php	}elseif (isset($_GET['visi_misi'])) { ?>

		<section id="tentang" class="light-bg top-margin">
		<div class="container">
			<div class="row">
				<div class="mz-module" >
					<div class="mz-module-about text-center" >
						<div class="section-title">
							<h2 class="judul text-center">- Visi -</h2>
						</div>						
						 <p class="visi">“Karantina Pertanian Tangguh dan Terpercaya di wilayah Nusa Tenggara“</p>
						 <br>
						 <div class="section-title">
							<h2 class="judul text-center">Misi</h2>
						</div>						
						 <p>
							<div class="misi">
								1.	Menjaga dan mencegah masuk tersebarnya OPTK dan HPHK di wilayah Pulau Sumbawa <br>
								2.	Melindungi Sumber daya alam hayati hewani dan nabati. <br>
								3.	Mendukung keberhasilan program pengembangan agribisnis dan peningkatan ketahanan pangan. <br>
								4.	Memfasilitasi kelancaran perdagangan / pemasaran produk pertanian. <br>
								5.	Mewujudkan pelayanan prima pada masyarakat. <br>
								6.	Mendorong partisipasi masyarakat dalam mendukung penyelenggaraan perkarantinaan.
							</div>
						</p>
					</div>
				</div>
				<div class="mz-module" >
					<div class="mz-module-about text-center" >
						<div class="section-title">
							<h2 class="judul">Motto</h2>
						</div>						
						 <p class="visi">“Selalu memberi pelayanan Prima”</p>
					<br>
					<a href="home" class="button-cta btn-berita">Kembali</a>
					</div>					
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>

<?php	}elseif (isset($_GET['struktur'])) { ?>

		<section id="tentang" class="light-bg top-margin">
			<div class="container">
				<div class="row">
					<div class="mz-module" >
						<div class="mz-module-about text-center" >
							<div class="section-title">
								<h2 class="judul text-center">Stuktur Organisasi</h2>
							</div>						
							 <p>
							 	<img data-frz-src="assets/img/spp/new/struktur_organisasi-22.png" width="700" alt="struktur_organisasi" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />	 
							</p>
							<br>
							<a href="home" class="button-cta btn-berita">Kembali</a>
						</div>					
					</div>
					<!-- end about module -->
				</div>
			</div>
			<!-- /.container -->
		</section>

<?php	}elseif (isset($_GET['tupoksi'])) { ?>

		<section id="tentang" class="light-bg top-margin">
		<div class="container">
			<div class="row">
				<div class="mz-module" >
					<div class="mz-module-about text-center" >
						<div class="section-title">
							<h2 class="judul text-center">Tugas Pokok</h2>
						</div>						
						 <p class="visi">“Melaksanakan Kegiatan Operasional Perkarantinaan Hewan dan Tumbuhan, Serta Pengawasan Keamanan Hayati Hewani dan Nabati“</p>
						 <br>
						 <div class="section-title">
							<h2 class="judul">Fungsi</h2>
						</div>						
						 <p>
							<ol  style="text-align: left; line-height: 30px">
								<li>Melaksanakan pengawasan terhadap lalu-lintas media pembawa Hama Penyakit Hewan Karantina (HPHK) dan Organisme Pengganggu Tumbuhan Karantina (OPTK) dalam upaya melindungi dan melestarikan sumber daya alam hayati secara berkesinambungan</li>
								<li>Melindungi masyarakat dari ancaman penyakit Zoonosis dan menjamin keamanan pangan hayati dan nabati</li>
								<li>Mendukung daya saing komoditas hewan dan tumbuhan dalam perdagangan domestik dan internasional melalui sertifikasi</li>
								<li>Mendorong peran serta masyarakat dalam penyelenggaraan perkarantinaan pertanian</li>
								<li>Mengembangkan transparansi pelayanan melalui teknologi informasi</li>
								<li>Meningkatkan citra dan kualitas pelayanan</li>
							</ol>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>

<?php	}elseif (isset($_GET['wilker'])) { ?>

			<section id="tentang" class="light-bg top-margin">
				<div class="container">
					<div class="row">
						<div class="mz-module" >
							<div class="section-title">
								<h2 class="judul text-center">Wilayah Kerja Lingkup Karantina Sumbawa</h2>
							</div>						
						</div>
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub" style="">Kantor Induk</h2>
								</div>						
								 <p class="sub">
								 	<div>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</div>
								 	<div>Jln. Pelabuhan Badas No. 01 Sumbawa Besar</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> (0371) 2629152</div>
								</p>
							</div>					
						</div>
						<!-- end about module -->
						<div class="mz-module" >
							<div class="section-title">
								<h2 class="judul text-center">Pelabuhan Laut</h2>
							</div>						
						</div>
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Pelabuhan Laut Badas</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Pelabuhan Laut Badas</div>
								 	<div>Jln. Pelabuhan Badas No. 01 Sumbawa Besar</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> (0371) 2629152</div>
								</p>
							</div>					
						</div>
						<!-- end about module -->
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Pelabuhan Laut Bima</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Pelabuhan Laut Bima</div>
								 	<div>Jln. R.E Martadinata No. 01 Kota Bima</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> (0374) 43861</div>
								</p>
							</div>					
						</div>
						<!-- end about module -->
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Pelabuhan Laut Benete</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Pelabuhan Laut Benete</div>
								 	<div>Jln. Raya Maluk No. 01 Kota Benete</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> -</div>
								</p>
							</div>					
						</div>
						<!-- end about module -->
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Pelabuhan Laut Kempo</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Pelabuhan Laut Kempo</div>
								 	<div>Jln. Lintas Calabai Soro Kempo Dompu</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> -</div>
								</p>
							</div>					
						</div>
						<!-- end about module -->
						<!-- Bandara -->
						<div class="mz-module" >
							<div class="section-title">
								<h2 class="judul text-center">Bandar Udara</h2>
							</div>						
						</div>
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Bandara Sultan Muhammad Kaharuddin</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Bandara Sultan Muhammad Kaharuddin</div>
								 	<div>Jln. Garuda No. 41 Lempeh - Sumbawa Besar</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> -</div>
								</p>
							</div>					
						</div>
						<!-- end about module -->
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Bandara Sultan Muhammad Salahuddin</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Bandara Sultan Muhammad Salahuddin</div>
								 	<div>Jln. Sultan M Salahuddin No. 01 Palibelo - Bima</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> -</div>
								</p>
							</div>					
						</div>
						<!-- Pelabuhan Ferry -->
						<div class="mz-module" >
							<div class="section-title">
								<h2 class="judul text-center">Pelabuhan Penyeberangan</h2>
							</div>						
						</div>
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Pelabuhan Ferry Poto Tano</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Pelabuhan Ferry Poto Tano</div>
								 	<div>Jln. Raya Pelabuhan Poto Tano No. 1 Sumbawa Barat</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> -</div>
								</p>
							</div>					
						</div>
						<!-- end about module -->
						<div class="mz-module" >
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul text-center sub">Wilker Pelabuhan Ferry Sape</h2>
								</div>						
								 <p class="sub">
								 	<div>Wilker Pelabuhan Ferry Sape</div>
								 	<div>Jln. Lintas TPI Sape</div>
								 	<div><i class="fa fa-phone"  style="font-size:18px"></i> -</div>
								</p>
							</div>					
						</div>
						<!-- Gambar -->
						<div class="mz-module" >
						<div class="mz-module-about text-center" >
							<div class="section-title">
								<h2 class="judul text-center">Peta Wilker</h2>
							</div>						
							 <p class="grbwilker">

							 	<img data-frz-src="assets/img/org/petawilker.png" width="700" alt="petawilker" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />
							 
							</p>
						<br>
						<a href="home" class="button-cta btn-berita">Kembali</a>
						</div>					
					</div>
					<!-- end about module -->
					</div>
				</div>
				<!-- /.container -->
			</section>

<?php	}elseif (isset($_GET['struktural'])) { ?>

			<style type="text/css">
				table {
					border: none; 
					width: 60%; 
					text-align: left;
					position: absolute; 
					margin-left: 250px; 
					margin-top: -200px;
				}

				table td{
					padding-bottom: 10px
				}

				.profile{
					line-height: 30px;
					text-indent: 50px;
					padding-top: 30px
				}
			</style>

			<section id="tentang" class="light-bg top-margin">
				<div class="container">
					<div class="row">
						<div class="mz-module" >
							<div class="section-title">
								<h2 class="judul text-center">Profil Singkat Pejabat Struktural</h2>
							</div>						
						</div>
						<div class="mz-module" >
							<div class="mz-module-about">
								<div class="section-title">
									<h2 class="judul text-center sub" style="">Kepala SKP Kelas I Sumbawa Besar</h2>
								</div>		
								<img data-frz-src="assets/img/org/pakraka.jpg" width="150" style="position: relative; margin-left: 30px" alt="struktural" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />	
								
								<table>
							 		<tr>
							 			<td width="50">Nama</td>
							 			<td width="20">:</td>
							 			<td width="100">drh. Ida Bagus Putu Raka Ariana</td>
							 		</tr>
							 		<tr>
							 			<td>Unit Kerja</td>
							 			<td>:</td>
							 			<td>Stasiun Karantina Pertanian Kelas I Sumbawa Besar / Badan Karantina Pertanian</td>
							 		</tr>
							 		<tr>
							 			<td>Pendidikan</td>
							 			<td>:</td>
							 			<td>S2</td>
							 		</tr>
							 		<tr>
							 			<td>Jabatan</td>
							 			<td>:</td>
							 			<td>Kepala Stasiun Karantina Pertanian Kelas I Sumbawa Besar</td>
							 		</tr>
							 		<tr>
							 			<td>Email</td>
							 			<td>:</td>
							 			<td>rakaariana@pertanian.go.id </td>
							 		</tr>
							 		<tr>
							 			<td>No. Telp</td>
							 			<td>:</td>
							 			<td>0371-2629152</td>
							 		</tr>
							 		<tr>
							 			<td>Alamat Kantor</td>
							 			<td>:</td>
							 			<td>Jl. Pelabuhan Badas No.01 Sumbawa Besar</td>
							 		</tr>
								 </table>		
								 <p class="sub text-center">
								 	<div class="profile">
								 		drh. Ida Bagus Putu Raka Ariana, lahir di Gianyar, 25 Desember 1966. Kini menjabat sebagai Kepala Stasiun Karantina Pertanian Kelas I Sumbawa Besar sejak pertengahan 2017. Karirnya bermula sejak tahun 2002 dengan menjabat sebagai Kepala Sub Seksi Pelayanan Teknis Stasiun Karantina Hewan Lembar selama dua tahun. Sejak saat itu karirnya mulai menanjak. Pada akhir tahun 2004 dipercaya menjabat sebagai Kepala Stasiun Karantina Hewan Kelas II Timika. Dan pada akhir 2010 menjabat Kepala Seksi Karantina Hewan Balai Karantina Pertanian Kelas I Pekan Baru.
								 	</div>
								</p>
							</div>					
						</div>
						<!-- end about module Pak Raka -->
						<div class="mz-module" >
							<div class="mz-module-about">
								<div class="section-title">
									<h2 class="judul text-center sub" style="">Penanggungjawab Kesekretariatan</h2>
								</div>		
								<img data-frz-src="assets/img/org/pakandik.jpg" width="150" style="position: relative; margin-left: 30px" alt="struktural" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />	
								
								<table>
							 		<tr>
							 			<td width="50">Nama</td>
							 			<td width="20">:</td>
							 			<td width="100">Andik Akrimil Fata, SP</td>
							 		</tr>
							 		<tr>
							 			<td>Unit Kerja</td>
							 			<td>:</td>
							 			<td>Stasiun Karantina Pertanian Kelas I Sumbawa Besar / Badan Karantina Pertanian</td>
							 		</tr>
							 		<tr>
							 			<td>Pendidikan</td>
							 			<td>:</td>
							 			<td>S1</td>
							 		</tr>
							 		<tr>
							 			<td>Jabatan</td>
							 			<td>:</td>
							 			<td>Penanggungjawab Kesekretariatan SKP Kelas I Sumbawa Besar</td>
							 		</tr>
							 		<tr>
							 			<td>Email</td>
							 			<td>:</td>
							 			<td>andikfata@pertanian.go.id </td>
							 		</tr>
							 		<tr>
							 			<td>No. Telp</td>
							 			<td>:</td>
							 			<td>0371-2629152</td>
							 		</tr>
							 		<tr>
							 			<td>Alamat Kantor</td>
							 			<td>:</td>
							 			<td>Jl. Pelabuhan Badas No.01 Sumbawa Besar</td>
							 		</tr>
								 </table>		
								 <p class="sub text-center">
								 	<div class="profile">
								 		Andik Akrimil Fata, lahir di Ponorogo, 10 Juli 1982. Kini menjabat sebagai Kepala Urusan Tata Usaha SKP Kelas I Sumbawa Besar sejak awal Agustus 2018. Karirnya di Karantina Pertanian sejak tahun 2009 sebagai pejabat fungsional Stasiun Karantina Pertanian Kelas I Sumbawa Besar. Bapak dua putra ini menamatkan SD, SMP dan SMA di Ponorogo.
								 	</div>
								</p>
							</div>					
						</div>
						<!-- end about module Pak Ridwan -->
						<div class="mz-module" >
							<div class="mz-module-about">
								<div class="section-title">
									<h2 class="judul text-center sub" style="">Penanggungjawab Yan Ops</h2>
								</div>		
								<img data-frz-src="assets/img/org/paksalam.jpg" width="150" style="position: relative; margin-left: 30px" alt="struktural" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />	
								
								<table>
							 		<tr>
							 			<td width="50">Nama</td>
							 			<td width="20">:</td>
							 			<td width="100">Abdul Salam, SP</td>
							 		</tr>
							 		<tr>
							 			<td>Unit Kerja</td>
							 			<td>:</td>
							 			<td>Stasiun Karantina Pertanian Kelas I Sumbawa Besar / Badan Karantina Pertanian</td>
							 		</tr>
							 		<tr>
							 			<td>Pendidikan</td>
							 			<td>:</td>
							 			<td>S1</td>
							 		</tr>
							 		<tr>
							 			<td>Jabatan</td>
							 			<td>:</td>
							 			<td>Penanggungjawab Yan Ops SKP Kelas I Sumbawa Besar</td>
							 		</tr>
							 		<tr>
							 			<td>Email</td>
							 			<td>:</td>
							 			<td>abdul_salam@pertanian.go.id </td>
							 		</tr>
							 		<tr>
							 			<td>No. Telp</td>
							 			<td>:</td>
							 			<td>0371-2629152</td>
							 		</tr>
							 		<tr>
							 			<td>Alamat Kantor</td>
							 			<td>:</td>
							 			<td>Jl. Pelabuhan Badas No.01 Sumbawa Besar</td>
							 		</tr>
								 </table>		
								 <p class="sub text-center">
								 	<div class="profile">
								 		Abdul Salam, lahir di Bima, 05 September 1969. Kini menjabat sebagai Kepala Subseksi Pelayan dan Operasional Stasiun Karantina Pertanian Kelas I Sumbawa Besar sejak akhir 2010. Karirnya di Karantina Pertanian sejak tahun 2000 Stasiun Karantina Tumbuhan Kelas I Lembar. Bapak dua putri ini menamatkan  SD, SMP dan SMA di Bima.
								 	</div>
								</p>
							</div>					
						</div>
						<!-- end about module Pak Ridwan -->
					</div>
				</div>
				<!-- /.container -->
			</section>

<?php	}else{ 


 }

require_once('templates/footer_web.php');

?>