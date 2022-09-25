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
		text-align: center;
	}
</style>
<section class="light-bg atas" id="berkala">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about text-center">
					<div class="section-title">
						<h2 class="judul">Laporan Keuangan</h2>
					</div>	
					<div class="sub-judul">
						<h3>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h3>
					</div>						
					<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="350">Nama Laporan</th>
								<th width="50">Tahun</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampilLaporan = $keuangan->laporanKeuangan();
								while ($data = $tampilLaporan->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $data->nama_laporan;?></td>
								<td><?php echo $data->tahun ?></td>
								<td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
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