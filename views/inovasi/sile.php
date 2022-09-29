<link rel="manifest" href="manifest.json">
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" sizes="48x48" href="images/web-sumbawa1x.png">
	<link rel="apple-touch-icon" type="image/png" sizes="48x48" href="images/web-sumbawa1x.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/web-sumbawa2x.png">
	<link rel="apple-touch-icon" type="image/png" sizes="96x96" href="images/web-sumbawa2x.png">
	<link rel="icon" type="image/png" sizes="192x192" href="images/web-sumbawa3x.png">
	<link rel="apple-touch-icon" type="image/png" sizes="192x192" href="images/web-sumbawa3x.png">
	<link rel="icon" type="image/png" sizes="512x512" href="images/web-sumbawa4x.png">
	<link rel="apple-touch-icon" type="image/png" sizes="512x512" href="images/web-sumbawa4x.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/header.css" rel="stylesheet">

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


	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div id="cssmenu">
				<a class="navbar-brand page-scroll" href="home">
					<img src="images/logobarantan.png" class="minilogo">
				</a>
				<div id="fb-root"></div>
				<ul class="float">
					<li>	<a href="home">Home</a>
					</li>
					<li class="has-sub">	<a href="#">Tentang Kami</a>
						<ul class="no-sub">
							<li>	<a class="dropdown-item" href="tentang_kami?profil">Profil</a>
							</li>
							<li>	<a class="dropdown-item" href="tentang_kami?visi_misi">Visi & Misi</a>
							</li>
							<li>	<a class="dropdown-item" href="tentang_kami?struktur">Struktur Organisasi</a>
							</li>
							<li>	<a class="dropdown-item" href="tentang_kami?tupoksi">Tugas Pokok & Fungsi</a>
							</li>
							<li>	<a class="dropdown-item" href="tentang_kami?struktural">Profil Pimpinan</a>
							</li>
							<li>	<a class="dropdown-item" href="tentang_kami?wilker">Wilayah Layanan</a>
							</li>
							<li>	<a class="dropdown-item" href="events">Agenda Kegiatan</a>
							</li>
							<li>	<a class="dropdown-item" href="penghargaan">Penghargaan</a>
							</li>
							<li>	<a class="dropdown-item prev" href="#">Inovasi</a>
								<ul>
									<li>	<a href="inovasi?e-office">E-Office</a>
									</li>
									<li class="last">	<a href="inovasi?sile">SILE</a>
									</li>
									
								</ul>
							</li>
						</ul>
					</li>
					<li class="has-sub">	<a href="#">Informasi Publik</a>
						<ul class="no-sub">
							<li>	<a class="dropdown-item prev" href="#">PPID</a>
								<ul>
									<li>	<a href="http://skp1sumbawabesar-ppid.pertanian.go.id/" target="_blank">Portal PPID</a>
									</li>
									<li class="last">	<a href="ppid?hak_informasi">Hak Atas Informasi</a>
									</li>
									<li class="last">	<a href="ppid?prosedur">Prosedur Permohonan</a>
									</li>
									<li class="last">	<a href="ppid?tim_ppid">Tim PPID </a>
									</li>
									<li class="last">	<a href="ppid?info=berkala">Informasi Berkala</a>
									</li>
									<li class="last">	<a href="ppid?info=setiap_saat">Informasi Setiap Saat</a>
									</li>
									<li class="last">	<a href="ppid?info=serta_merta">Informasi Serta Merta</a>
									</li>
									<li class="last">	<a href="ppid?regulasi">Regulasi</a>
									</li>
									<li class="last">	<a href="evakuasi">Evakuasi & Peringatan Dini Bencana</a>
									</li>
									<li class="last">	<a href="ppid?formulir">Download Form Permohonan</a>
									</li>
								</ul>
							</li>
							<li>	<a class="dropdown-item prev" href="#">Standar Pelayanan Publik</a>
								<ul>
									<li class="last">	<a href="spp?dasar_hukum">Dasar Hukum</a>
									</li>
									<li class="last">	<a href="spp?maklumat">Maklumat Pelayanan</a>
									</li>
									<li class="last">	<a href="spp?standar_waktu">Standar Waktu </a>
									</li>
									<li class="last">	<a href="spp?jam_layanan">Jam Layanan</a>
									</li>
									<li class="last">	<a href="spp?produk_pelayanan">Produk Pelayanan</a>
									</li>
									<li class="last">	<a href="spp?alur_layanan">Alur Layanan</a>
									</li>
									<li class="last">	<a href="spp?info_pelayanan">Informasi Layanan & Pengaduan</a>
									</li>
								</ul>
							</li>
							<li>	<a class="dropdown-item prev" href="#">Kinerja</a>
								<ul>
									<li>	<a href="kinerja?renstra">RENSTRA</a>
									</li>
									<li class="last">	<a href="kinerja?rkt">Rencana Kerja Tahunan</a>
									</li>
									<li>	<a href="laporan?kinerja">Laporan Kinerja</a>
									</li>
								</ul>
							</li>
							<li>	<a class="dropdown-item prev" href="#">Keuangan</a>
								<ul>
									<li>	<a href="keuangan?dipa">DIPA</a>
									</li>
									<li class="last">	<a href="keuangan?rka_kl">RKA-KL</a>
									</li>
									<li>	<a href="keuangan?rencana_anggaran">Rencana Anggaran</a>
									</li>
									<li class="last">	<a href="keuangan?realisasi_anggaran">Realisasi Anggaran</a>
									</li>
									<li class="last">	<a href="keuangan?neraca_keuangan">Neraca Keuangan</a>
									</li>
									<li>	<a href="keuangan?arus_kas">Arus Kas</a>
									</li>
									<li class="last">	<a href="keuangan?daftar_aset">Daftar Aset - BMN</a>
									</li>
									<li class="last">	<a href="keuangan?pnbp">PNBP</a>
									</li>
									<li class="last">	<a href="keuangan?pengadaan">Pengadaan Barang 
																																																		<br>& Jasa
																																																		</a>
									</li>
								</ul>
							</li>
							<li>	<a class="dropdown-item prev" href="#">Data Operasional</a>
								<ul>
									<li>	<a href="data_operasional?rekapitulasi">Rekapitulasi</a>
									</li>
									<li>	<a href="data_operasional">Statistik</a>
									</li>
								</ul>
							</li>
							<li>	<a class="dropdown-item prev" href="#">Laporan</a>
								<ul>
									<li>	<a href="laporan?tahunan">Laporan Tahunan</a>
									</li>
									<li class="last">	<a href="keuangan?laporan_keuangan">Laporan Keuangan</a>
									</li>
									<li class="last">	<a href="laporan?kinerja">Laporan Kinerja</a>
									</li>
									<li class="last">	<a href="laporan?ppid">Laporan PPID</a>
									</li>
									<li class="last">	<a href="laporan?laip">Laporan Akses 
																																																			<br>Informasi Publik
																																																			</a>
									</li>
									<li class="last">	<a href="laporan?kekayaan">LHKPN</a>
									</li>
								</ul>
							</li>
							<!-- <li><a class="dropdown-item" href="webikm">IKM</a> -->
							<li>	<a class="dropdown-item" href="public?halaman=arsip_dokumen" class="button-cta btn-berita">Download Dokumen</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">	<a href="#">Layanan Karantina</a>
						<ul class="no-sub">
							<li>	<a class="dropdown-item" href="kh">Karantina Hewan</a>
							</li>
							<li>	<a class="dropdown-item" href="kt">Karantina Tumbuhan</a>
							</li>
							<li>	<a class="dropdown-item" href="spp?alur_pelayanan">Alur Pelayanan</a>
							</li>
							<li>	<a class="dropdown-item" href="http://karantina.pertanian.go.id/hukum/index.php " target="_blank">Regulasi Perkarantinaan</a>
							</li>
							<li>	<a class="dropdown-item" href="tarif" class="button-cta btn-berita">Tarif Jasa Karantina</a>
							</li>
							<li>	<a class="dropdown-item prev" href="#">Basis Data</a>
								<ul>
									<li class="last">	<a href="https://drive.google.com/file/d/1RtnqPXg2H5yeshRKPfCcXG6p-A-JNO4a/view" target="-_blank">Daftar Hama Penyakit Hewan</a>
									</li>
									<li class="last">	<a href="https://drive.google.com/file/d/1F1b1-feqZ0TESL-ldR7HambgyVV_xbf9/view" target="-_blank">Daftar Organisme Pengganggu Tumbuhan</a>
									</li>
								</ul>
							</li>
							<li>	<a class="dropdown-item" href="faq" class="button-cta btn-berita">Frequently Asked Question (FAQ)</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a id="dLabel" type="button" data-toggle="dropdown">
							<div class="lang-dropdown-sm">
								<img src="assets/img/org/ID.png" alt="ID" class="img-responsive">
							</div>
						</a>
						<div id="google_translate_element" style="display: none;"></div>
						<ul class="dropdown-menu dropdown-menu-lang" aria-labelledby="dLabel">
							<li class="dropdown-header">Select Language</li>
							<li>	<a href="javascript:changeLanguageByFlag('Indonesian');" data-lang="Indonesian">Indonesia</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('English');" data-lang="English">English</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('French');" data-lang="French">French</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('Spanish');" data-lang="Spanish">Spanish</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('Portuguese');" data-lang="Portuguese">Portuguese</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('Chinese (Simplified)');" data-lang="Chinese (Simplified)">Chinese (Simplified)</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('Japanese');" data-lang="Japanese">Japanese</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('Korean');" data-lang="Korean">Korean</a>
							</li>
							<li>	<a href="javascript:changeLanguageByFlag('Arabic');" data-lang="Arabic">Arabic</a>
							</li>
						</ul>
					</li>
					<input class="search" type="text" name="search" id="search" placeholder="Search...">
				</ul>
			</div>
		</div>
	</nav>

<section id="tentang" class="light-bg top-margin">
	<div class="container">
		<div class="row">
			<div class="mz-module" >
				<div class="section-title">
					<h2 class="judul text-center">INOVASI</h2>
				</div>						
			</div>
			<div class="mz-module" >
				<div class="mz-module-about" style="display: flex; justify-content: center; flex-direction: column; align-tems: center">
					<div class="section-title">
						<h2 class="judul text-center sub">SILE (SIstem Informasi Laboratorium Elektronik)</h2>
					</div>		
					<div style="display: flex; justify-content: center; margin-bottom: 50px; ">
						<img src="assets/img/org/aplikasi/sile/login.png" width="1000" style="border-radius: 20px" />
					</div>

					<div style="display: flex; justify-content: center; margin-bottom: 50px;">
						<img src="assets/img/org/aplikasi/sile/dashboard.png" width="1000" border-radius: 20px />		
					</div>

					<div style="display: flex; justify-content: center; margin-bottom: 50px;">
						<img src="assets/img/org/aplikasi/sile/form_screenshot.png" width="1000" border-radius: 20px />		
					</div>

					<div style="display: flex; justify-content: center; margin-bottom: 50px;">
						<img src="assets/img/org/aplikasi/sile/permohonan.png" width="1000" border-radius: 20px />		
					</div>

					<div style="display: flex; justify-content: center; margin-bottom: 50px;">
						<img src="assets/img/org/aplikasi/sile/dokuen_screenshot.png" width="1000" border-radius: 20px />		
					</div>

					<div style="display: flex; justify-content: center; margin-bottom: 50px;">
						<a href="http://lab.eqosistem.com" target="_blank"><h3>Link Aplikasi SILE</h3></a>		
					</div>

				</div>					
			</div>


			<!-- end about module Pak Ridwan -->
		</div>
	</div>
	<!-- /.container -->
</section>