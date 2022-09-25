<?php  

require_once('templates/head.php');

  
	if (isset($_GET['dipa'])) { 

		include_once('views/keuangan/dipa/index.php');
		
 	}elseif (isset($_GET['rencana_anggaran'])) { 

		include_once('views/keuangan/rencana_anggaran/index.php');
		
 	}elseif (isset($_GET['realisasi_anggaran'])) {
 		
 		include_once('views/keuangan/realisasi_anggaran/index.php');

 	}elseif (isset($_GET['neraca_keuangan'])) {
 		
 		include_once('views/keuangan/neraca_keuangan/index.php');

 	}elseif (isset($_GET['laporan_keuangan'])) {
 		
 		include_once('views/keuangan/laporan_keuangan/index.php');

 	}elseif (isset($_GET['daftar_aset'])) {
 		
 		include_once('views/keuangan/daftar_aset/index.php');

 	}elseif (isset($_GET['rka_kl'])) {
 		
 		include_once('views/keuangan/rka_kl/index.php');

 	}elseif (isset($_GET['pengadaan'])) {
 		
 		include_once('views/keuangan/pengadaan/index.php');

 	}elseif (isset($_GET['pnbp'])) {
 		
 		include_once('views/keuangan/pnbp/index.php');

 	}elseif (isset($_GET['arus_kas'])) {
 		
 		include_once('views/keuangan/arus_kas/index.php');

 	}

  
require_once('templates/footer_web.php');

?>
