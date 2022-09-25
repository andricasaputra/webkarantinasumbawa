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
<section class="light-bg atas" id="berkala">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about text-center">
					<div class="section-title">
						<h2 class="judul">Informasi Serta Merta</h2>
					</div>	
					<div class="col-md-8 col-md-offset-2">
						<h4>Informasi yang berkaitan dengan hajat hidup orang banyak dan ketertiban umum dan wajib diumumkan secara serta merta tanpa penundaan</h4>
					</div>						
					<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Informasi</th>
								<th>Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil = $ppid->tampil_info_SertaMerta();
								while ($info = $tampil->fetch_object()) : 	
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