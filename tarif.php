<?php  

require_once('templates/head.php');
$tarif = new tarif($db);

?>
<style type="text/css">
	section#tentang .form-group input, section#tentang .form-group select , section#tentang .form-group select option  {

	border-radius: 0;

}

</style>
<section id="tentang" class="light-bg top-margin have_bg">
	<div class="container">
		<div class="row"  style="margin-top: -30px">
			<div class="col-md-12 text-center">
				<a href="#" class="button-cta"  style=" width: 100%; border: none; color: #000;margin-bottom: 70px; font-size: 16pt">Simulasi Perhitungan Biaya Karantina</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="section-text" id="hapus">
					<h3 style="color: #000; ">Hitung Estimasi Tarif Jasa Karantina</h3>
					<p style="color: #000; font-weight: 600"><i class="fa fa-book fa-fw"></i> Sesuai Dengan PP Nomor 35 Tahun 2016</p>
					<p style="color: #000; font-weight: 600"><i class="fa fa-credit-card fa-fw"></i> Harap Melakukan Pembayaran Via Non Tunai</p>
					<p style="color: #000; font-weight: 600"><i class="fa fa-info fa-fw"></i> Pelayanan Karantina Anti Suap, Pungli Dan Gratifikasi</p>
					<p style="color: #000; font-weight: 600"> <i class="fa fa-phone fa-fw"></i> Kontak Kami Untuk Informasi Lebih Lanjut</p>
				</div>
				<div id="hasilHitung"></div>
			</div>
			<div class="col-md-6" style="margin-top: -20px">
				<div style="margin-bottom: 25px"></div>
				<form id="estimasiTarif">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<select class="form-control" name="kategori" id="kategori" required>
									<option selected>- Pilih Kategori -</option>
									<option value="karantina hewan">Karantina Hewan</option>
									<option value="karantina tumbuhan">Karantina Tumbuhan</option>
								</select>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<select class="form-control" name="kegiatan" id="kegiatan" disabled required>
									<option selected>- Pilih Kegiatan -</option>
								</select>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<select class="form-control" name="komoditas" id="komoditas" disabled required>
									<option selected disabled>- Pilih Komoditas -</option>
								</select>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Jumlah/Volume *" name="jumlah" id="jumlah" disabled required>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn" name="kirim_pengaduan">Hitung</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<button type="submit" onclick="window.open('assets/pnbp/pp35full.pdf')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 11pt;  margin-top: 40px;">Download Daftar Tarif Jasa Karantina</button>
			</div>
		</div>			
	</div>
</section>


<?php  

require_once('templates/footer_web.php');

?>