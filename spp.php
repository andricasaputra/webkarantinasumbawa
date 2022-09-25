<?php  

require_once('templates/head.php');

?>

<style>
	#tentang{
		margin-top: 45px
	}
</style>

<?php

if (isset($_GET['dasar_hukum'])) {
	include_once('views/spp/dasarhukum.php');
}elseif (isset($_GET['maklumat'])) {
	include_once('views/spp/maklumat.php');
}elseif (isset($_GET['standar_waktu'])) {
	include_once('views/spp/standarwaktu.php');
}elseif (isset($_GET['jam_layanan'])) {
	include_once('views/spp/jamlayanan.php');
}elseif (isset($_GET['produk_pelayanan'])) {
	include_once('views/spp/produkpelayanan.php');
}elseif (isset($_GET['alur_layanan'])) {
	include_once('views/spp/baganalurlayanan.php');
}elseif (isset($_GET['info_pelayanan'])) {
	include_once('views/spp/infopengaduan.php');
}

require_once('templates/footer_web.php');

?>