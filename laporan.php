<?php  
	require_once('templates/head.php');
?>

<style type="text/css">
	section#berkala{
		margin-top: 80px;
	}
	h2.judul{
		color: #000;
		font-size: 28pt
	}
	th {
		text-align: center;
	}
	td{
		vertical-align: text-bottom;
		font-weight: 600
	}
	td:nth-of-type(2){
		text-align: left; 
		padding: 30px;
		vertical-align: text-bottom;
	}
	h4{
		text-align: center;
		color: #000;
		line-height: 30px;
		margin-top: -30px
	}

</style>
<?php  
	
	if (isset($_GET['tahunan'])) { ?>
		  
		   <section class="light-bg atas" id="berkala">
				<div class="container">
					<div class="row">
						<div class="mz-module text-center">
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul">Laporan Tahunan</h2>
								</div>	
								<div class="col-md-8 col-md-offset-2">
									<h4>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h4>
								</div>						
								<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
									<thead>
								          <tr>
								              <th>No</th>
								              <th>Nama Laporan</th>
								              <th>Tahun</th>
								              <th>Action</th>
								          </tr>
								      </thead>
								      <tbody>
								          <?php  
								              $no = 1;
								              $tampilLaporan= $conn->laporan();
								              while($data = $tampilLaporan->fetch_object()):
								          ?>
								          <tr>
								              <td><?php echo $no++ ?></td>
								              <td><?php echo $data->nama_laporan; ?></td>
								              <td><?php echo $data->tahun;?></td>
								              <td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
								          </tr>
								          <?php  
								              endwhile;
								          ?>
								      </tbody>
								</table>
							</div>
						</div>
						<!-- end about module -->
					</div>
				</div>
				<!-- /.container -->
			</section>


<?php	}elseif (isset($_GET['kinerja'])) { ?>

			<section class="light-bg atas" id="berkala">
					<div class="container">
						<div class="row">
							<div class="mz-module text-center">
								<div class="mz-module-about text-center">
									<div class="section-title">
										<h2 class="judul">Laporan Kinerja</h2>
									</div>	
									<div class="col-md-8 col-md-offset-2">
										<h4>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h4>
									</div>						
									<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
										<thead>
									          <tr>
									              <th>No</th>
									              <th>Nama Laporan</th>
									              <th>Tahun</th>
									              <th>Action</th>
									          </tr>
									      </thead>
									      <tbody>
									          <?php  
									              $no = 1;
									              $tampilLaporan= $conn->laporanKinerja();
									              while($data = $tampilLaporan->fetch_object()):
									          ?>
									          <tr>
									              <td><?php echo $no++ ?></td>
									              <td><?php echo $data->nama_laporan; ?></td>
									              <td><?php echo $data->tahun;?></td>
									              <td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
									          </tr>
									          <?php  
									              endwhile;
									          ?>
									      </tbody>
									</table>
								</div>
							</div>
							<!-- end about module -->
						</div>
					</div>
					<!-- /.container -->
				</section>

	<?php }elseif (isset($_GET['kekayaan'])) { ?>
			<!-- <style type="text/css">
				.comingsoon {
					background-attachment: fixed;
					height: 100vh;
					width: 100vw; 
					background-image: url('assets/img/tmp/comingsoon.png');
					background-repeat: no-repeat;
					background-size: cover;
					background-position: center; 
				}

			</style>
			<section class="comingsoon">	
			</section> -->

			<section class="light-bg atas" id="berkala">
					<div class="container">
						<div class="row">
							<div class="mz-module text-center">
								<div class="mz-module-about text-center">
									<div class="section-title">
										<h2 class="judul">LHKPN</h2>
									</div>	
									<div class="col-md-8 col-md-offset-2">
										<h4>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h4>
									</div>						
									<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
										<thead>
									          <tr>
									              <th>No</th>
									              <th>Nama Laporan</th>
									              <th>Tahun</th>
									              <th>Action</th>
									          </tr>
									      </thead>
									      <tbody>
									          <?php  
									              $no = 1;
									              $tampilLaporan= $keuangan->TampilLaporanKekayaan();
									              while($data = $tampilLaporan->fetch_object()):
									          ?>
									          <tr>
									              <td><?php echo $no++ ?></td>
									              <td><?php echo $data->nama_laporan; ?></td>
									              <td><?php echo $data->tahun;?></td>
									              <td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
									          </tr>
									          <?php  
									              endwhile;
									          ?>
									      </tbody>
									</table>
								</div>
							</div>
							<!-- end about module -->
						</div>
					</div>
					<!-- /.container -->
				</section> 


	<?php }elseif (isset($_GET['ppid'])) { ?>
			<!-- <style type="text/css">
				.comingsoon {
					background-attachment: fixed;
					height: 100vh;
					width: 100vw; 
					background-image: url('assets/img/tmp/comingsoon.png');
					background-repeat: no-repeat;
					background-size: cover;
					background-position: center; 
				}

			</style>
			<section class="comingsoon">	
			</section>-->	

			<section class="light-bg atas" id="berkala">
					<div class="container">
						<div class="row">
							<div class="mz-module text-center">
								<div class="mz-module-about text-center">
									<div class="section-title">
										<h2 class="judul">Laporan PPID</h2>
									</div>	
									<div class="col-md-8 col-md-offset-2">
										<h4>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h4>
									</div>						
									<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
										<thead>
									          <tr>
									              <th>No</th>
									              <th>Nama Laporan</th>
									              <th>Tahun</th>
									              <th>Action</th>
									          </tr>
									      </thead>
									      <tbody>
									          <?php  
									              $no = 1;
									              $tampilLaporan= $ppid->tampil_laporan_ppid();
									              while($data = $tampilLaporan->fetch_object()):
									          ?>
									          <tr>
									              <td><?php echo $no++ ?></td>
									              <td><?php echo $data->nama_laporan; ?></td>
									              <td><?php echo $data->tahun;?></td>
									              <td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
									          </tr>
									          <?php  
									              endwhile;
									          ?>
									      </tbody>
									</table>
								</div>
							</div>
							<!-- end about module -->
						</div>
					</div>
					<!-- /.container -->
				</section> 


	<?php }elseif (isset($_GET['laip'])) { ?>
			 <section class="light-bg atas" id="berkala">
				<div class="container">
					<div class="row">
						<div class="mz-module text-center">
							<div class="mz-module-about text-center">
								<div class="section-title">
									<h2 class="judul">Laporan Akses Informasi Publik</h2>
								</div>	
								<div class="col-md-8 col-md-offset-2">
									<h4>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h4>
								</div>						
								<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
									<thead>
								          <tr>
								              <th>No</th>
								              <th>Nama Laporan</th>
								              <th>Tahun</th>
								              <th>Action</th>
								          </tr>
								      </thead>
								      <tbody>
								          <?php  
								              $no = 1;
								              $tampilLaporan= $conn->laporanAksesIp();
								              while($data = $tampilLaporan->fetch_object()):
								          ?>
								          <tr>
								              <td><?php echo $no++ ?></td>
								              <td><?php echo $data->nama_laporan; ?></td>
								              <td><?php echo $data->tahun;?></td>
								              <td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
								          </tr>
								          <?php  
								              endwhile;
								          ?>
								      </tbody>
								</table>
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