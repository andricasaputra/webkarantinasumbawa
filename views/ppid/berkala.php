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
	h3{
		text-align: left;
		font-weight: bold !important;
		color: #000 !important;
		border-bottom: 2px solid #00b300;
		padding-bottom: 10px;
		padding-top: 10px;
		
		
	}
</style>
<section class="light-bg atas" id="berkala">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about text-center">
					<div class="section-title">
						<h2 class="judul">Daftar Informasi Berkala</h2>
					</div>	
					<div class="sub-judul">
						<h3>A. Infromasi Mengenai Profil Badan Publik</h3>
					</div>						
					<table id="info_berkala" class="table table-striped text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="400">Nama Informasi</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil_perkategori = $ppid->tampil_info_berkala_perkategori('profil');
								while ($info = $tampil_perkategori->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $info->nama_info;?></td>
								<td><a href="<?=$info->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
							</tr>
							
							<?php endwhile ?>
						</tbody>
					</table>
				</div>

				 <div class="mz-module-about text-center">
					<div class="sub-judul">
						<h3>B. Infromasi Mengenai Kinerja & Kegiatan Badan Publik</h3>
					</div>						
					<table id="info_berkala" class="table table-striped text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="400">Nama Informasi</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil_perkategori = $ppid->tampil_info_berkala_perkategori('kegiatan_kinerja');
								while ($info = $tampil_perkategori->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $info->nama_info;?></td>
								<td><a href="<?=$info->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
							</tr>
							
							<?php endwhile ?>
						</tbody>
					</table>
				</div> 

				<div class="mz-module-about text-center">
					<div class="sub-judul">
						<h3>C. Dokumen Kinerja</h3>
					</div>						
					<table id="info_berkala" class="table table-striped text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="400">Nama Informasi</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil_perkategori = $ppid->tampil_info_berkala_perkategori('dokumen_kinerja');
								while ($info = $tampil_perkategori->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $info->nama_info;?></td>
								<td><a href="<?=$info->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
							</tr>
							
							<?php endwhile ?>
						</tbody>
					</table>
				</div> 

				<div class="mz-module-about text-center">
					<div class="sub-judul">
						<h3>D. Indeks Kepuasan Masyrakat (IKM)</h3>
					</div>						
					<table id="info_berkala" class="table table-striped text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="400">Nama Informasi</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil_perkategori = $ppid->tampil_info_berkala_perkategori('ikm');
								while ($info = $tampil_perkategori->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $info->nama_info;?></td>
								<td><a href="<?=$info->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
							</tr>
							
							<?php endwhile ?>
						</tbody>
					</table>
				</div>

				<div class="mz-module-about text-center">
					<div class="sub-judul">
						<h3>E. Informasi Keuangan Badan Publik</h3>
					</div>						
					<table id="info_berkala" class="table table-striped text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="400">Nama Informasi</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil_perkategori = $ppid->tampil_info_berkala_perkategori('keuangan');
								while ($info = $tampil_perkategori->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $info->nama_info;?></td>
								<td><a href="<?=$info->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
							</tr>
							
							<?php endwhile ?>
						</tbody>
					</table>
				</div>

				<div class="mz-module-about text-center">
					<div class="sub-judul">
						<h3>F. Informasi mengenai Akses Informasi Publik</h3>
					</div>						
					<table id="info_berkala" class="table table-striped text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="400">Nama Informasi</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil_perkategori = $ppid->tampil_info_berkala_perkategori('akses_informasi_publik');
								while ($info = $tampil_perkategori->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $info->nama_info;?></td>
								<td><a href="<?=$info->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
							</tr>
							
							<?php endwhile ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>