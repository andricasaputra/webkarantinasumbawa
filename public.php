
<?php  

require_once('templates/head.php');

if(@$_GET['halaman'] == 'ikm') { 

	$tampilDocs = $conn->data_dokumen(0, 'ikm');


?>

<section id="about" class="light-bg top-margin">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about" style="text-align: left;">
					<div class="section-title">
						<h2 class="judul" style="font-size: 28pt">Halaman Arsip IKM</h2>
					</div>							
					 <?php while($file = $tampilDocs->fetch_object()): ?>
					 	<p style="color: #000 !important"><?php echo $file->nama_dokumen; ?></p>
					 <button type="submit" onclick="window.open('assets/docs/<?php echo $file->filenya; ?>')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-bottom: 30px">Download <?php $file->nama_dokumen ?></button>
					<?php endwhile; ?>

				</div>
				<a href="public?halaman=arsip_dokumen" class="button-cta btn-berita">Ke Halaman Arsip Dokumen</a>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>




<?php }elseif (@$_GET['halaman'] == 'arsip_dokumen') {

$tampilDocs = $conn->data_dokumen();

?>
	
<section id="about" class="light-bg top-margin">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about" style="text-align: left;">
					<div class="section-title">
						<h2 class="judul" style="font-size: 28pt">Halaman Arsip Dokumen</h2>
					</div>							
					 <?php while($file = $tampilDocs->fetch_object()): ?>
					 	<p style="color: #000 !important"><?php echo $file->nama_dokumen; ?></p>
					 <button type="submit" onclick="window.open('assets/docs/<?php echo $file->filenya; ?>')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-bottom: 30px">Download <?php $file->nama_dokumen ?></button>
					<?php endwhile; ?>
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>

<?php  }elseif (@$_GET['halaman'] == 'form_ppid') {

$tampilDocs = $conn->data_dokumen(0, 'lainnya');

?>
	
<section id="about" class="light-bg top-margin">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about" style="text-align: left;">
					<div class="section-title">
						<h2 class="judul" style="font-size: 28pt">Halaman Arsip Dokumen</h2>
					</div>							
					 <?php while($file = $tampilDocs->fetch_object()): ?>
					 	<p style="color: #000 !important"><?php echo $file->nama_dokumen; ?></p>
					 <button type="submit" onclick="window.open('assets/docs/<?php echo $file->filenya; ?>')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-bottom: 30px">Download <?php $file->nama_dokumen ?></button>
					<?php endwhile; ?>
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>

<?php }	

require_once('templates/footer_web.php');

?>