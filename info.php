<?php

	require_once('templates/head.php');
	$tampil  = $conn->tampilWebHeader();
	$headline  = $conn->tampilHeadline();
	$tampil2 = $conn->tampilWebBerita();
	$tampil3 = $conn->tampilWebMarquee();
	$tampilDataOperasional = $conn->data_operasionalWeb();

?>

<style type="text/css">
	.info{
		margin-top: 50px;
	}
</style>

<section id="about" class="light-bg info">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Layanan Karantina Pertanian</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- about module -->
			<div class="col-md-6 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<i class="fa fa-paw"></i>
						<h3>Karantina Hewan</h3>
						<p>Temukan Semua Informasi Tentang Layanan Dibidang Karantina Hewan</p>
					</div>
					<a href="kh" class="button-cta btn-berita">Selengkapnya</a>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-6 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<i class="fa fa-leaf"></i>
						<h3>Karantina Tumbuhan</h3>
						<p>Temukan Semua Informasi Tentang Layanan Dibidang Karantina Tumbuhan</p>
					</div>
					<a href="kt" class="button-cta btn-berita">Selengkapnya</a>
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>




<?php  

	require_once('templates/footer_web.php');

?>


