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
	.accordion {
	    background-color: #ff9933;
	    color: #424242;
	    cursor: pointer;
	    padding: 18px;
	    width: 100%;
	    text-align: center;
	    outline: none;
	    font-size: 15px !important; 
	    margin-top: 10px;
	    display: block;
	}

	.active {
	    background-color:  #ff9933;
	    color: #424242;
	}

	 .accordion:hover {
	    background-color:  #ff9933;
	    color: #424242;
	}

	.accordion:after {
	    content: '\002B';
	    color: #424242;
	    font-weight: bold;
	    float: right;	    
	}

	.active:after {
	    content: "\2212";
	    color: #424242
	}

	.panel {
		
	    padding: 0 18px;
	    background-color: #fff !important;
	    max-height: 0;
	    overflow: hidden;
	    transition: all 0.5s ease-out;
	    display: block;
	}

	.top{
		margin-top: 80px;
		margin-bottom: 20px;
	}

	.top h2{
		font-weight: bold;
	}

	.padding{
		padding-bottom: 40px;
	}
</style>
<section class="light-bg atas" id="berkala">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about text-center">
					<div class="section-title">
						<h2 class="judul">Realisasi Anggaran</h2>
					</div>	
					<div class="sub-judul">
						<h3>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h3>
					</div>						
					<table id="info_berkala" class="table table-bordered text-center" style="width:100%">
						<thead>
							<tr>
								<th width="20">No</th>
								<th width="400">Judul</th>
								<th width="50">Link</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$no = 1;
								$tampilLaporanRealisasiAnggaran = $keuangan->tampilLaporanRealisasiAnggaran();
								while ($data = $tampilLaporanRealisasiAnggaran->fetch_object()) : 	
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo 'Laporan Realisasi Anggaran Tahun '.$data->tahun;?></td>
								<td><a href="<?=$data->link;?>" target="_blank"><button type="button"  class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Lihat</button></a></td>
							</tr>
							
							<?php endwhile ?>
						</tbody>
					</table>
				</div>
				<button class="accordion button-cta">Statistik</button>
				<div class="padding" style="margin-bottom: -130px">
					<?php include_once('admin/views/charts_keu.php'); ?>
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>