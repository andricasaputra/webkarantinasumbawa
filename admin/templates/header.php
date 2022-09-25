<?php  
require_once('config/database.php');
require_once('classes/class_berita.php');
require_once('classes/class_ppid.php');
require_once('classes/class_login.php');
require_once('classes/class_keuangan.php');
require_once('classes/class_calendar.php');
require_once('classes/tgl_indo.php');

/*Class Database Instance Static*/

$db = Database::getInstance();
$connect = $db->getConnection();

/*Class Instance*/

$conn = new berita($db);
$ppid = new ppid($db);
$calendar = new calendar($db);
$log = new Login($db);
$keuangan = new keuangan($db);

/*Class Berita Method*/

$tampil = $conn->tampil();
$tampilHeadline = $conn->tampilHeadlineAdmin();
$tampilPengaduan = $conn->pengaduan();
$tampilPenghargaan = $conn->tampilPenghargaan();
$tampilData = $conn->data_operasional();
$tampilDataKh = $conn->data_operasional_kh();
$tampilDataKt = $conn->data_operasional_kt();
$tampilDataKeuangan = $conn->data_keuangan();
$tampilDokumen = $conn->data_dokumen();
$tampilIkm = $conn->ikm();
$tampilPnbp = $conn->pnbp();
$tampilLaporan = $conn->laporan();
$tampilLaporanAksesIp = $conn->laporanAksesIp();
$tampilLaporanKinerja= $conn->laporanKinerja();
$tampilRencanaKerja= $conn->TampilRencanaKerja();


/*Class PPID Method*/

$tampilInfoBerkala =  $ppid->tampil_info_berkala();
$tampilInfoSetiapSaat =  $ppid->tampil_info_setiapsaat();
$tampilInfoSertaMerta =  $ppid->tampil_info_sertamerta();
$tampilLaporanPpid =  $ppid->tampil_laporan_ppid();


/*Class Calendar Method*/

$tampilCalendar =  $calendar->tampilCalendar();

/*Class Keuangan Method*/
$tampilDipa = $keuangan->Tampildipa();
$tampilNeracaKeuangan = $keuangan->TampilNeracaKeuangan();
$tampilLaporanKeuangan = $keuangan->laporanKeuangan();
$tampilLaporanRealisasiAnggaran = $keuangan->TampilLaporanRealisasiAnggaran();
$tampilRka_kl = $keuangan->TampilRka_kl();
$tampilDaftarAset = $keuangan->TampilDaftarAset();
$tampilLaporanKekayaan = $keuangan->TampilLaporanKekayaan();
$tampilRencanaAnggaran = $keuangan->tampilRencanaAnggaran();
$tampilPengadaan = $keuangan->TampilPengadaan();
$tampilRenstra = $keuangan->TampilRenstra();
$tampilArusKas = $keuangan->TampilArusKas();
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel Website</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="assets/dataTables/datatables.min.css" rel="stylesheet">
  <link href="assets/dataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <!-- jQuery 3 -->
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/highcharts.js"></script>
  <script src="assets/js/exporting.js"></script>
  <script src="assets/js/export-data.js"></script>
  <script src="assets/js/highcharts-more.js"></script>
  <script src="assets/js/solid-gauge.js"></script>
  <style>
    #tabel_berita{
      table-layout: fixed;
    }
  </style>
</head>