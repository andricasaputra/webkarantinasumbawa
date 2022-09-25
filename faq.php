<?php  

	require_once('templates/head.php');
	$db = Database::getInstance();
	$conn = new berita($db);


if(@$_GET['id'] != '') { 

				$id = $_GET['id'];

				$faq = $conn->tampilFaq($id);

				while($data = $faq->fetch_object()):

		if (@$_GET['id'] == 1) { ?>
				
				
					<section id="about" class="light-bg top-margin">
						<div class="container">
							<div class="row">
								<div class="mz-module text-center">
									<div class="mz-module-about text-center">
										<div class="section-title">
											<h2 class="judul text-center" style="font-size: 28pt"><?php echo $data->pertanyaan; ?></h2>
										</div>							
										 <p></p>
										 <p style="text-align: justify; text-justify: inter-word; text-indent: 4em; letter-spacing: 1px; color: black; font-family: 'Lato'"><?php echo $data->jawaban; ?></p> 
										  <h4 style="color: black; font-weight: 600">Lebih Lanjut Simak Video Berikut</h4>
										  <iframe width="640" height="360" src="https://www.youtube.com/embed/p0Qg61Thy3Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										  <i><h5>Video dari <a href="https://www.youtube.com/channel/UCpUidK5g6ff_Q9NDA0ztw2w">Rian HS</a></h5></i>
										  <p></p>
										  <a href="faq" class="button-cta btn-berita" style=" margin-top: 40px;">Kembali Ke Halaman FAQ</a>
										  
									</div>
									<a href="info" class="button-cta btn-berita" style=" width: 100%;">Informasi Selengkapnya</a>
								</div>
								<!-- end about module -->
							</div>
						</div>
						<!-- /.container -->
					</section>


		<?php

		}elseif (@$_GET['id'] == 2) { ?>
			
				<section id="about" class="light-bg top-margin">
						<div class="container">
							<div class="row">
								<div class="mz-module text-center">
									<div class="mz-module-about text-center">
										<div class="section-title">
											<h2 class="judul text-center" style="font-size: 28pt"><?php echo $data->pertanyaan; ?></h2>
										</div>							
										 <p></p>
										 <p style="text-align: justify; text-justify: inter-word; text-indent: 4em; letter-spacing: 1px; color: black; font-family: 'Lato'"><?php echo $data->jawaban; ?></p>
										  <h4 style="color: black; font-weight: 600">Lebih Lanjut Simak Video Berikut</h4>
										  <iframe width="640" height="360" src="https://www.youtube.com/embed/H3Y-u9K8v0o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										  <i><h5>Video dari <a href="https://www.youtube.com/channel/UCYIiTvzR0nYTrRPqtkthNcg">
ilham khalid setiawan</a></h5></i>
										  <p></p>
										  <a href="faq" class="button-cta btn-berita" style=" margin-top: 40px;">Kembali Ke Halaman FAQ</a>
										  
									</div>
									<a href="info" class="button-cta btn-berita" style=" width: 100%;">Informasi Selengkapnya</a>
								</div>
								<!-- end about module -->
							</div>
						</div>
						<!-- /.container -->
					</section>

		<?php }elseif (@$_GET['id'] == 3) { ?>
			
				<section id="about" class="light-bg top-margin">
						<div class="container">
							<div class="row">
								<div class="mz-module text-center">
									<div class="mz-module-about text-center">
										<div class="section-title">
											<h2 class="judul text-center" style="font-size: 28pt"><?php echo $data->pertanyaan; ?></h2>
										</div>							
										 <p></p>
										 <p style="text-align: justify; text-justify: inter-word; text-indent: 4em; letter-spacing: 1px; color: black; font-family: 'Lato'"><?php echo $data->jawaban; ?></p>
										  <h4 style="color: black; font-weight: 600">Lebih Lanjut Simak Video Berikut</h4>
										  <iframe width="640" height="360" src="https://www.youtube.com/embed/lUPYcLlhT9Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										  <i><h5>Video dari <a href="https://www.youtube.com/channel/UCpUidK5g6ff_Q9NDA0ztw2w">Rian HS</a></h5></i>
										  <p></p>
										  <a href="faq" class="button-cta btn-berita" style=" margin-top: 40px;">Kembali Ke Halaman FAQ</a>
										  
									</div>
									<a href="info" class="button-cta btn-berita" style=" width: 100%;">Informasi Selengkapnya</a>
								</div>
								<!-- end about module -->
							</div>
						</div>
						<!-- /.container -->
					</section>

		<?php }elseif (@$_GET['id'] == 4) { ?> 

				<style type="text/css">
					@media all and (max-width: 1200px) {
						.baganalur{
							width: 80%
						}
					}
				</style>
			
				<section id="about" class="light-bg top-margin">
						<div class="container">
							<div class="row">
								<div class="mz-module text-center">
									<div class="mz-module-about text-center">
										<div class="section-title">
											<h2 class="judul text-center" style="font-size: 28pt"><?php echo $data->pertanyaan; ?></h2>
										</div>							
										 <p></p>
										 <p style="text-align: justify; text-justify: inter-word; letter-spacing: 1px; color: black; font-family: 'Lato'">
										 	<ol style="text-align: left; font-size: 14pt;">

											<li>Dilengkapi sertifikat kesehatan dari negara asal dan negara transit bagi hewan, bahan asal hewan, hasil bahan asal hewan, ikan, tumbuhan dan bagian-bagian tumbuhan, kecuali media pembawa yang tergolong benda lain</li>
											<li>Melalui tempat-tempat pemasukan yang telah ditetapkan</li>
											<li>Dilaporkan dan diserahkan kepada petugas karantina di tempat-tempat pemasukan untuk keperluan tindakan karantina</li>

										</ol>
										 </p>
										 <br>
										  <h4 style="color: black; font-weight: 600">Lebih Lanjut Simak Gambar Berikut</h4>
										  <img src="assets/img/spp/baganalurlayanan.png" class="baganalur" width="1000">
										  <a href="faq" class="button-cta btn-berita" style=" margin-top: 40px;">Kembali Ke Halaman FAQ</a>
									</div>
									<a href="info" class="button-cta btn-berita" style=" width: 100%;">Informasi Selengkapnya</a>
								</div>
								<!-- end about module -->
							</div>
						</div>
						<!-- /.container -->
					</section>

		<?php }elseif (@$_GET['id'] == 5) { ?>

				<style type="text/css">
					@media all and (max-width: 800px) {
						.tempat{
							width: 80%
						}
					}
				</style>
			
				<section id="about" class="light-bg top-margin">
						<div class="container">
							<div class="row">
								<div class="mz-module text-center">
									<div class="mz-module-about text-center">
										<div class="section-title">
											<h2 class="judul text-center" style="font-size: 28pt"><?php echo $data->pertanyaan; ?></h2>
										</div>							
										 <p></p>
										 <p style="text-align: justify; text-justify: inter-word; text-indent: 4em; letter-spacing: 1px; color: black; font-family: 'Lato'"><?php echo $data->jawaban; ?></p>
										  <p></p>
									  <h4 style="color: black; font-weight: 600">Lebih Lanjut Simak Gambar Berikut</h4>
									  <img src="assets/img/org/tempatpemasukan.jpg" class="tempat" width="700">
									  <p></p>
									  <a href="faq" class="button-cta btn-berita" style=" margin-top: 40px;">Kembali Ke Halaman FAQ</a>
									</div>	
									<a href="tentang_kami?wilker" class="button-cta btn-berita" style=" width: 100%;">Informasi Selengkapnya</a>										
								</div>
								<!-- end about module -->
							</div>
						</div>
						<!-- /.container -->
					</section>

		<?php }elseif (@$_GET['id'] == 6) { ?>
			
				<section id="about" class="light-bg top-margin">
					<div class="container">
						<div class="row">
							<div class="mz-module text-center">
								<div class="mz-module-about text-center">
									<div class="section-title">
										<h2 class="judul text-center" style="font-size: 28pt"><?php echo $data->pertanyaan; ?></h2>
									</div>							
									 <p></p>
									 <p style="text-align: justify; text-justify: inter-word; text-indent: 4em; letter-spacing: 1px; color: black; font-family: 'Lato'"><?php echo '<span style="color: #000; font-size:15pt; line-height: 25px;">'.$data->jawaban.'</span>'; ?></p>
									 <button type="submit" onclick="window.open('assets/pnbp/pp35kh.pdf')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-top: 40px;">Download Daftar Tarif Karantina Hewan</button>
									 <button type="submit" onclick="window.open('assets/pnbp/pp35kt.pdf')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-top: 40px;">Download Daftar Tarif Karantina Tumbuhan</button>
									 <button type="submit" onclick="window.open('assets/pnbp/pp35full.pdf')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-top: 40px;">Download PP No. 35 Tahun 2016</button>
								</div>
								<a href="#" class="button-cta"  style=" width: 100%; border: none; color: #000;margin-top: 20px;margin-bottom: 30px">Simulasi Perhitungan Biaya Karantina</a>
							</div>
							<!-- end about module -->
						</div>
						<div class="row" >
							<div class="col-md-6">
								<div class="section-text" id="hapus">
									<h3 style="color: #000; ">Hitung Estimasi Tarif Jasa Karantina</h3>
									<p style="color: #000; font-weight: 600; font-size: 11pt"><i class="fa fa-book fa-fw"></i> Sesuai Dengan PP Nomor 35 Tahun 2016</p>
									<p style="color: #000; font-weight: 600; font-size: 11pt"><i class="fa fa-credit-card fa-fw"></i> Harap Melakukan Pembayaran Via Non Tunai</p>
									<p style="color: #000; font-weight: 600; font-size: 11pt"><i class="fa fa-info fa-fw"></i> Pelayanan Karantina Anti Suap, Pungli Dan Gratifikasi</p>
									<p style="color: #000; font-weight: 600; font-size: 11pt"> <i class="fa fa-phone fa-fw"></i> Kontak Kami Untuk Informasi Lebih Lanjut</p>
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
					</div>
					<!-- /.container -->
				</section>

		<?php }

		endwhile;


}else{ ?>


			<section id="features" class="section-features" style="margin-top: 40px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 style="color: #000">Pertanyaan yang Sering Diajukan</h2>
						</div>
					</div>
				</div>
				<div class="row row-gutter">
					<div class="col-md-4 col-gutter">
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-info-circle"></i></div>
							<div class="featured-text">
								<h4>Apa Itu Karantina?</h4>
								<p>Karantina adalah tempat pengasingan dan/atau tindakan sebagai upaya pencegahan...<br><a href="faq?id=1" class="btn-faq">Baca Selengkapnya</a></p>
							</div>
						</div>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-clipboard"></i></div>
							<div class="featured-text">
								<h4>Bagaimana Prosedurnya?</h4>
								<p>Dilengkapi sertifikat kesehatan dari negara asal dan negara transit, Dilaporkan dan diserahkan...<br><a href="faq?id=4" class="btn-faq">Baca Selengkapnya</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-gutter">
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-question-circle"></i></div>
							<div class="featured-text">
								<h4>Kenapa Harus Dikarantina?</h4>
								<p>Untuk mencegah masuknya hama dan penyakit hewan karantina, dan organisme penggangu tumbuhan karantina...<br><a href="faq?id=2" class="btn-faq">Baca Selengkapnya</a></p>
							</div>
						</div>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-plane"></i></div>
							<div class="featured-text">
								<h4>Dimana Lapor Karantina?</h4>
								<p>Pelabuhan Laut, Pelabuhan Penyeberangan, Bandara, Kantor Pos, dan Pos lintas batas antar Negara...<br><a href="faq?id=5" class="btn-faq">Baca Selengkapnya</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-gutter">
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-search"></i></div>
							<div class="featured-text">
								<h4>Apa Saja Komoditi Yang Wajib Lapor Karantina?</h4>
								<p>Hewan, Bagian Hewan, Produk Hewan Serta Tumbuhan dan Bagian-bagiannya...<br><a href="faq?id=3" class="btn-faq">Baca Selengkapnya</a></p>
							</div>
						</div>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-money"></i></div>
							<div class="featured-text">
								<h4>Berapa Estimasi Tarif Jasa Karantina?</h4>
								<p>Berdasarkan PP 35 Tahun 2016 Tentang Jenis dan Tarif Atas Jenis Penerimaan...<br><a href="faq?id=6" class="btn-faq">Baca Selengkapnya</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



<?php }	

require_once('templates/footer_web.php');

?>