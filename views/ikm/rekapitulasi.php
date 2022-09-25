<style>
	td:nth-child(2){
		text-align: left;
	}
</style>
<section id="prosedur" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div>
					<h2 style="color: black; font-weight: bold;">Rekapitulasi Indeks Kepuasan Masyarakat</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php include_once('selectikm.php'); ?>
		</div>
		<div class="row">
			<!-- about module -->
			<div class="col-md-12 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<table id="statistik" class="table table-stripped text-center">
							<thead>
								<th>No</th>
								<th>Pertanyaan</th>
								<th>Unsur Pelayanan</th>
								<th>Nilai NRR per unsur</th>
								<th>Nilai NRR per unsur dibagi jumlah responden</th>
								<th>NRR tertimbang per unsur</th>
							</thead>
							<tbody></tbody>
						</table>
						<div id="unit_pelayanan" style="text-align: left;"></div>
					</div>
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>

<script>
	$(document).ready(function(){

		let id = $('#select_ikm').val();

		let url =  mainApiUrl + '/statistik/ikm/' +  id;

		loader('#unit_pelayanan');

		changeRekapIkm(url);

		$('#select_ikm').on('change', function(){

			id = $(this).val();

			url = mainApiUrl + '/statistik/ikm/' +  id;

			$('#statistik').DataTable().destroy();

			$('#unit_pelayanan').empty();

			loader('#unit_pelayanan');

			changeRekapIkm(url);
		});

		function changeRekapIkm(url)
		{
			$('#statistik').DataTable({
				"ajax":{
		            "url": url,
		            "dataType": "JSON",
	            },
	            "processing": true,
		        "paginate" : false,
		        "lengthChange" : false,
		        "order" : false,
		        "searching": false,
		        "bInfo": false,
		        "pageLength" : 15,
		        "language": {
				    "processing" : "<img src='images/ajax-loader.gif'></td>"
				},
		        "columns": [
		            { "data": "DT_Row_Index" },
		            { "data": "allQuestions" },
		            { "data": "unsurPelayanan" },
		            { "data": "totalNilai" },
		            { "data": "rataRataNrr" },
		            { "data": "rataRataPerUnsurPelayanan" }
		        ]
		    });


		   $.ajax({

		   		url : url

		   }).done(function(response){

			   	let sum = [];

			   	$.each(response.data, function(key, value){

			   		sum.push(parseFloat(value.rataRataPerUnsurPelayanan));

				});
		   
		   		function getSum(total, num) {

				    return total + num;

				}

				let total = sum.reduce(getSum);

				let unsurPelayanan = total * 25;

				let kriteria = '';

				switch(true) {
			        case unsurPelayanan > 88.31:
			            kriteria = '<span style="color: #009900">A (Sangat Baik)</span>';
			            break;
			        case unsurPelayanan > 76.61:
			            kriteria = '<span style="color: #009900">B (Baik)</span>';
			            break;
			        case unsurPelayanan > 65.00:
			            kriteria = '<span style="color: #cc2900">C (Kurang Baik)</span>';
			            break;
			        default: 
			        	kriteria = '<span style="color: #cc2900">D (Tidak Baik)</span>'
			            break;
			    }

		   		$("#unit_pelayanan").html(`

		   			<h4><b>- Total NRR Tertimbang Per Unsur Pelayanan :  ${total.toFixed(3)}<sup>*</sup>  </b></h4>
		   			<hr>
		   			<h3><b>- IKM Unit Pelayanan :  ${unsurPelayanan.toFixed(3)}<sup>**</sup> <i>${kriteria}</i> </b></h3>
		   			<hr>
		   			<h5>Keterangan : </h5>
		   			<table class="table">
		   				<tr>
		   					<td>U1 s/d U9</td>
		   					<td>:</td>
		   					<td>Unsur Pelayanan</td>
		   				</tr>
		   				<tr>
		   					<td>NRR</td>
		   					<td>:</td>
		   					<td>Nilai rata-rata</td>
		   				</tr>
		   				<tr>
		   					<td>IKM</td>
		   					<td>:</td>
		   					<td>Indeks Kepuasan Masyarakat</td>
		   				</tr>
		   				<tr>
		   					<td>*)</td>
		   					<td>:</td>
		   					<td>Jumlah NRR IKM tertimbang</td>
		   				</tr>
		   				<tr>
		   					<td>**)</td>
		   					<td>:</td>
		   					<td>Jumlah NRR IKM tertimbang x 25</td>
		   				</tr>
		   				<tr>
		   					<td>NRR Per Unsur</td>
		   					<td>:</td>
		   					<td>Jumlah nilai per unsur dibagi jumlah kuisioner</td>
		   				</tr>
		   				<tr>
		   					<td>NRR tertimbang per unsur</td>
		   					<td>:</td>
		   					<td>NRR per unsur x 0,111</td>
		   				</tr>
		   				<tr>
		   					<td><i>Sumber : <a href="https://e-office.skp1sumbawabesar.org" target="_blank" rel="noreferrer">E-office Sumbawa</a></i></td>
		   					<td colspan="2" style="text-align: right">
		   						<a href="index" class="btn btn-primary">
		   							<i class="fa fa-arrow-left fa-fw"></i> Kembali
		   						</a>
		   					</td>
		   				</tr>
		   			</table>
		   		`)
		   });
		}

		function loader(container)
		{
			$(container).html(`<div class="text-center"><img src='images/ajax-loader.gif'></div>`);
		}

	})/*End Ready*/;
</script>