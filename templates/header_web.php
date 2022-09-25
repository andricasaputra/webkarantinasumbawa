<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Web Sumbawa">
	<meta name="apple-mobile-web-app-title" content="Web Sumbawa">
	<meta name="theme-color" content="#fcbe03">
	<meta name="msapplication-navbutton-color" content="#fcbe03">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="msapplication-starturl" content="/home">
	<meta property="og:url" content="
																<?php  echo $_SERVER['REQUEST_URI']  ?>" />
	<meta property="og:type" content="website" />
	<?php /*Jika Pada Halaman Berita*/ if (strpos($_SERVER[ 'REQUEST_URI'], 'berita')){if (isset($_GET[ 'id'])){$id=$_GET[ 'id']; $berita=$conn->tampilBerita($id); while ($data=$berita->fetch_object()): $judul=$data->judul; ?>
	<meta property="og:title" content="
																	<?php  echo $judul;  ?>" />
	<?php if (! is_null($data->id_facebook)){ ?>
	<meta property="og:image" content="
																		<?php  echo $data->gambar;  ?>" />
	<meta property="og:description" content="
																			<?php  echo nl2br($data->isi);  ?>" />
	<?php }else{ ?>
	<meta property="og:image" content="http://sumbawa.karantina.pertanian.go.id/assets/img/berita/
																				<?php  echo $data->gambar;  ?>" />
	<meta property="og:description" content="
																					<?php  echo html_entity_decode($data->isi);  ?>" />
	<?php } ?>
	<title>
		<?php echo $judul; ?>
	</title>
	<?php endwhile;}else{ ?>
	<title>Stasiun Karantina Pertanian Kelas I Sumbawa Besar | Index Berita</title>
	<?php }/*Jika Tidak*/}else{ ?>
	<title>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</title>
	<?php } ?>
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
	<link href="dataTables/datatables.min.css" rel="stylesheet">
	<link href="dataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet' />
	<script src="js/lazyload.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/highcharts-more.js"></script>
	<script src="js/solid-gauge.js"></script>

	<script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-117986541-1"></script>

	
	<script src="js/gpr-widget-kominfo.min.js"></script>
	<script>
		window.dataLayer=window.dataLayer || []; function gtag(){dataLayer.push(arguments);}gtag('js', new Date()); gtag('config', 'UA-117986541-1');
	</script>
	<script>
		let mainApiUrl='http://e-office.eqosistem.com/api'; let dashboardApi=mainApiUrl + '/operasional/dashboard';
	</script>
	<style>
            body {
                overflow-x: hidden;
            }
            img.logo {
                margin-top: 12px;
                width: 25%;
                margin-left: 15px;
                float: left;
                position: absolute;
            }
            img.minilogo {
                display: none;
            }
            #cssmenu #menu-button {
                display: none;
            }
            @media only screen and (max-width: 700px) {
                header {
                    display: none !important;
                }
                section#atas {
                    margin-top: 0px;
                }
                #cssmenu #menu-button {
                    display: block;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    width: 100%;
                    padding: 15px 20px;
                    text-transform: uppercase;
                    font-weight: 700;
                    font-size: 14px;
                    letter-spacing: 1px;
                    background-color: #000;
                    color: #fff;
                    cursor: pointer;
                }
                #cssmenu #menu-button:after {
                    display: block;
                    content: "";
                    position: absolute;
                    height: 3px;
                    width: 22px;
                    border-top: 2px solid #000;
                    border-bottom: 2px solid #000;
                    right: 20px;
                    top: 16px;
                    z-index: 1000;
                }
                #cssmenu #menu-button:before {
                    display: block;
                    content: "";
                    position: absolute;
                    height: 3px;
                    width: 22px;
                    border-top: 2px solid #fff;
                    right: 20px;
                    top: 26px;
                    z-index: 1000;
                }
            }
            @media only screen and (min-width: 500px) and (max-width: 1000px) {
                img.logo {
                    display: none;
                }
                img.minilogo {
                    display: block;
                    width: 50%;
                    margin-top: 0px;
                    margin-left: 25px;
                }
                header .intro-heading {
                    font-size: 32pt !important;
                }
                header img {
                    position: relative;
                    width: 50%;
                    margin-top: 30px !important;
                    margin-bottom: -150px !important;
                }
                header .intro-text {
                    margin-top: -150px;
                }
            }
            @media only screen and (min-width: 1001px) and (max-width: 1200px) {
                img.logo {
                    display: none;
                }
                img.minilogo {
                    display: block;
                    width: 60%;
                    margin-top: 0px;
                    margin-left: 25px;
                }
                header .intro-heading {
                    font-size: 40pt !important;
                }
                header img {
                    position: relative;
                    width: 50%;
                    margin-top: 30px !important;
                    margin-bottom: -20px !important;
                }
            }
            @media only screen and (min-width: 1201px) and (max-width: 1520px) {
                img.logo {
                    width: 33% !important;
                    margin-top: 10px;
                } /*#cssmenu ul li a{width: 50% !important;}*/
                header img {
                    position: relative;
                    width: 60%;
                    margin-top: 30px !important;
                    margin-bottom: -20px !important;
                }
            }
            @media only screen and (max-width: 1700px){
            	 img.logo {
                    width: 35% !important;
                }
            }
        </style>
</head>

<body id="page-top">
	<div class="loader"></div>
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
									<li>	<a href="http://skp1sumbawabesar.ppid.pertanian.go.id/" target="_blank">Portal PPID</a>
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
	<div class="mainResult" id="result"></div>