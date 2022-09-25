<?php  

require_once('templates/head.php');


?>
<style type="text/css">
	ol li{
		padding-bottom: 10px
	}

	.atas{
		margin-top: 50px;
	}

	#about a{
		width:30%;
		font-size: 12pt;
	}
</style>

<?php  

	if (@$_GET['info'] == 'berkala') {
		
		include_once('views/ppid/berkala.php');

	}elseif (@$_GET['info'] == 'serta_merta') {
		
		include_once('views/ppid/serta_merta.php');

	}elseif (@$_GET['info'] == 'setiap_saat') {
		
		include_once('views/ppid/setiap_saat.php');

	}elseif (isset($_GET['tatacara_permohonan'])){ ?>


	<section id="about" class="light-bg" style="margin-top: 80px; margin-bottom: -150px">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 28pt; color: #000">Prosedur Permohonan Informasi Publik</h2>
						</div>							
						<img src="assets/img/org/ppid/prosedur_pengajuan_permohonan.png" style="width: 90%">
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>

	<section id="about" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 22pt">Formulir Permohonan</h2>
						</div>	
						<div>
							<h3>Silahkan unduh Formulir melalui link dibawah ini</h3>
							<hr>
						</div>						
						<a href="#" onclick="window.open('http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/FORMULIR/F-1A-Permohonan_IP_Perorangan.pdf')" class="button-cta btn-berita">Form Permohonan Perorangan (1A)</a>
						<a href="#" onclick="window.open('http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/FORMULIR/F-1B-Permohonan_IP_Kelompok.pdf')" class="button-cta btn-berita">Form Permohonan Badan Hukum (1B)</a>
						<a href="#" onclick="window.open('ppid?formulir')" class="button-cta btn-berita">Form Lainnya Klik Disini</a>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>
	
<?php } elseif (isset($_GET['tatacara_keberatan'])){  ?>


	<section id="keberatan" class="light-bg" style="margin-top: 50px">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 28pt; color: #000">Tata Cara Pengajuan Keberatan Informasi</h2>
						</div>							
						<img src="assets/img/org/ppid/prosedur_pengajuan_keberatan_permohonan_informasi_publik.png" style="width: 90%">
						<button type="submit" onclick="window.open('http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/FORMULIR/F-6-Keberatan.pdf')" class="button-cta btn-berita" style="padding: 11px 11px; font-size: 13pt;  margin-top: 30px;">Download Form Keberatan</button>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>

<?php } elseif (isset($_GET['pengaduan_masyarakat'])){ ?>

	<section id="keberatan" class="light-bg" style="margin-top: 50px">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 28pt; color: #000">Prosedur Pengaduan Masyarakat</h2>
						</div>							
						<img src="assets/img/org/ppid/alur_pengaduan_masyarakat.png" style="width: 90%">
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>


 <?php } elseif (isset($_GET['regulasi'])){ 


		include_once('views/ppid/regulasi.php');


 } elseif (isset($_GET['tim_ppid'])){ 


		include_once('views/ppid/tim_ppid.php');


 }elseif (isset($_GET['hak_informasi'])){ 


		include_once('views/ppid/hak_atas_informasi.php');


 }elseif (isset($_GET['formulir'])){ 


		include_once('views/ppid/form.php');


 } ?>





<?php 

require_once('templates/footer_web.php');

?>