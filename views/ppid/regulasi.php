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
						<h2 class="judul">Regulasi Pengelolaan Informasi Publik</h2>
					</div>						
					<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Regulasi</th>
								<th>Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil = $ppid->tampil_regulasi();
								while ($info = $tampil->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $info->nama_regulasi;?></td>
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