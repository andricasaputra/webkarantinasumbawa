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
		font-weight: 600;


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
						<h2 class="judul">Informasi Setiap Saat</h2>
					</div>	
					<div class="col-md-8 col-md-offset-2">
						<h4>Informasi yang harus disediakan oleh Badan Publik dan siap tersedia untuk bisa langsung diberikan kepada Pemohon Informasi Publik ketika terdapat permohonan terhadap Informasi Publik tersebut</h4>
					</div>						
					<table id="info_berkala2" class="table table-striped text-center" style="width:100%">
						<thead>
							<tr>
								<th></th>
					            <th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampil = $ppid->tampil_info_setiapsaat();
								while ($data = $tampil->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<?php  
									if (!empty($data->nama_info)) { ?>

											<?php if (!empty($data->kategori)): ?>

													<td><?php echo '<span style="font-weight: 200;">'.$data->kategori.'</span><br><br>'.$data->nama_info;?></td>

											<?php else: ?>

													<td><?php echo $data->nama_info ?></td>

											<?php endif ?>

										

								<?php	}else{ ?>

										<td><?php echo ucwords($data->bagian_info) ?></td>

								<?php }
								?>

								<?php if (!empty($data->keterangan)): ?>

										<td><?php echo '<span style="font-weight: 500;">'.$data->keterangan.'</span>'; ?></td>

									<?php else: ?>

										<td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>

								<?php endif ?>
					            
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