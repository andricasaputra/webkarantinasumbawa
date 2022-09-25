<?php  
session_start();

if (!isset($_SESSION['admin'])) {
  header("location: login.php");
  exit;
}


ob_start();
require_once('templates/header.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Q</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Karantina Sumbawa Besar</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                <?php 

                $id = $_SESSION['admin'];
                $nama = $log->tampilNama($id);
                $tampilNama = $nama->fetch_object();


                echo $tampilNama->nama;
                ?> 
               </span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="?halaman=pengaduan"><i class="fa fa-briefcase"></i> <span>Kotak Pengaduan</span></a></li>
        <li><a href="?halaman=headline"><i class="fa fa-desktop"></i> <span>Headline</span></a></li>
        <li><a href="?halaman=berita"><i class="fa fa-file-o"></i> <span>Berita</span></a></li>
        <li><a href="?halaman=data_operasional"><i class="fa fa-line-chart"></i> <span>Semua Data Operasional</span></a></li>
        <!-- <li><a href="?halaman=data_operasional_kh"><i class="fa fa-paw"></i> <span>Data Operasional KH</span></a></li>
        <li><a href="?halaman=data_operasional_kt"><i class="fa fa-leaf"></i> <span>Data Operasional KT</span></a></li> -->
        <li><a href="?halaman=pnbp"><i class="fa fa-money"></i> <span>PNBP</span></a></li>
        <li><a href="?halaman=ikm"><i class="fa fa-file"></i> <span>IKM</span></a></li>
        <li><a href="?halaman=dokumen"><i class="fa fa-briefcase"></i> <span>Upload Dokumen</span></a></li>
        <li><a href="?halaman=penghargaan"><i class="fa fa-bar-chart"></i> <span>Penghargaan</span></a></li>
        <li><a href="?halaman=pengadaan"><i class="fa fa-list"></i> <span>Pengadaan Barang & Jasa</span></a></li>
        <li><a href="?halaman=renstra"><i class="fa fa-briefcase"></i> <span>RENSTRA</span></a></li>
        <li><a href="?halaman=rencana_kerja"><i class="fa fa-briefcase"></i> <span>Rencana Kerja</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Keuangan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?halaman=dipa"><i class="fa fa-list"></i> DIPA</a></li>
            <li><a href="?halaman=rka_kl"><i class="fa fa-list"></i> RKA - KL</a></li>
            <li><a href="?halaman=realisasi_anggaran"><i class="fa fa-list"></i> Realisasi Anggaran</a></li>
            <li><a href="?halaman=neraca_keuangan"><i class="fa fa-list"></i> Neraca Keuangan</a></li>
            <li><a href="?halaman=daftar_aset"><i class="fa fa-list"></i> Daftar Aset</a></li>
            <li><a href="?halaman=rencana_anggaran"><i class="fa fa-list"></i> Rencana Anggaran</a></li>
             <li><a href="?halaman=arus_kas"><i class="fa fa-list"></i> Arus Kas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>PPID</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?halaman=ppid&ppid=berkala">Informasi Berkala</a></li>
            <li><a href="?halaman=ppid&ppid=serta_merta">Informasi Serta Merta</a></li>
            <li><a href="?halaman=ppid&ppid=setiap_saat">Informasi Setiap Saat</a></li>
            <li><a href="?halaman=ppid&ppid=regulasi">Upload Regulasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-file-text"></i> <span>Laporan - Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?halaman=laporan_tahunan">Laporan Tahunan</a></li>
            <li><a href="#">Laporan Operasional</a></li>
            <li><a href="?halaman=laporan_keuangan">Laporan Keuangan</a></li>
            <li><a href="?halaman=laporan_realisasi_anggaran">Laporan Realisasi Anggaran</a></li>
            <li><a href="?halaman=laporan_kinerja">Laporan Kinerja</a></li>
            <li><a href="?halaman=laporan_ppid">Laporan PPID</a></li>
            <li><a href="?halaman=laporan_akses_ip">Laporan Akses Informasi Publik</a></li>
            <li><a href="?halaman=laporan_kekayaan">LHKPN</a></li>
          </ul>
        </li>
        <li><a href="?halaman=events"><i class="fa fa-calendar"></i> <span>Agenda/ Events</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Web Performance</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?halaman=analitycs"><i class="fa fa-line-chart"></i> <span>Analitycs</span></a></li>
            <li><a href="?halaman=info_cache"><i class="fa fa-gear"></i> <span>Cached Data</span></a></li>
            <li><a href="?halaman=info_php"><i class="fa fa-info"></i> <span>PHP Info</span></a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <?php  
      if ( @$_GET['halaman'] == 'berita') {
          
            include_once('views/berita.php');

      }elseif ( @$_GET['halaman'] == 'penghargaan') {
          
            include_once('views/penghargaan.php');

      }elseif ( @$_GET['halaman'] == 'data_operasional'){

            include_once('views/data_operasional.php');

      }elseif ( @$_GET['halaman'] == 'data_operasional_kh'){

            include_once('views/data_operasional_kh.php');

      }elseif ( @$_GET['halaman'] == 'data_operasional_kt'){

            include_once('views/data_operasional_kt.php');

      }elseif ( @$_GET['halaman'] == 'realisasi_anggaran'){

            include_once('views/keuangan.php');

      }elseif ( @$_GET['halaman'] == 'rencana_anggaran'){

            include_once('views/rencana_anggaran.php');

      }elseif ( @$_GET['halaman'] == 'pengadaan'){

            include_once('views/pengadaan.php');

      }elseif (@$_GET['halaman'] == 'rencana_kerja') {
            
            include_once('views/rencana_kerja.php');

      }elseif ( @$_GET['halaman'] == 'pengaduan' || @$_GET['halaman'] == ''){

            include_once('views/pengaduan.php');

      }elseif ( @$_GET['halaman'] == 'headline'){

            include_once('views/headline.php');

      }elseif ( @$_GET['halaman'] == 'dokumen'){

            include_once('views/dokumen.php');

      }elseif ( @$_GET['halaman'] == 'pnbp'){

            include_once('views/pnbp.php');

      }elseif ( @$_GET['halaman'] == 'ikm'){

            include_once('views/ikm.php');

      }elseif (@$_GET['halaman'] == 'ppid' && $_GET['ppid'] == 'berkala') {
            
            include_once('views/ppid/berkala.php');

      }elseif (@$_GET['halaman'] == 'ppid' && $_GET['ppid'] == 'serta_merta') {
            
            include_once('views/ppid/serta_merta.php');

      }elseif (@$_GET['halaman'] == 'ppid' && $_GET['ppid'] == 'setiap_saat') {
            
            include_once('views/ppid/setiap_saat.php');

      }elseif (@$_GET['halaman'] == 'ppid' && $_GET['ppid'] == 'regulasi') {
            
            include_once('views/ppid/regulasi.php');

      }elseif (@$_GET['halaman'] == 'events') {
            
            include_once('views/events.php');

      }elseif (@$_GET['halaman'] == 'laporan_tahunan') {
            
            include_once('views/laporan_tahunan.php');

      }elseif (@$_GET['halaman'] == 'laporan_akses_ip') {
            
            include_once('views/laporan_akses_ip.php');

      }elseif (@$_GET['halaman'] == 'neraca_keuangan') {
            
            include_once('views/neraca_keuangan.php');

      }elseif (@$_GET['halaman'] == 'daftar_aset') {
            
            include_once('views/daftar_aset.php');

      }elseif (@$_GET['halaman'] == 'rka_kl') {
            
            include_once('views/rka_kl.php');

      }elseif (@$_GET['halaman'] == 'laporan_keuangan') {
            
            include_once('views/laporan_keuangan.php');

      }elseif (@$_GET['halaman'] == 'laporan_realisasi_anggaran') {
            
            include_once('views/laporan_realisasi_anggaran.php');

      }elseif (@$_GET['halaman'] == 'dipa') {
            
            include_once('views/dipa.php');

      }elseif (@$_GET['halaman'] == 'laporan_kinerja') {
            
            include_once('views/laporan_kinerja.php');

      }elseif (@$_GET['halaman'] == 'laporan_kekayaan') {
            
            include_once('views/laporan_kekayaan.php');

      }elseif (@$_GET['halaman'] == 'laporan_ppid') {
            
            include_once('views/laporan_ppid.php');

      }elseif (@$_GET['halaman'] == 'info_php') {
            
            include_once('views/info_php.php');

      }elseif (@$_GET['halaman'] == 'renstra') {
            
            include_once('views/renstra.php');

      }elseif (@$_GET['halaman'] == 'arus_kas') {
            
            include_once('views/arus_kas.php');

      }elseif (@$_GET['halaman'] == 'info_cache') {
            
            include_once('../opcache/index.php');

      }elseif (@$_GET['halaman'] == 'analitycs') {
            
            include_once('ga/info_analitycs.php');

      }






    ?>
  </div>

<!-- ./wrapper -->

<?php  

  require_once('templates/footer.php');


?>


