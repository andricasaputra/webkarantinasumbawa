<?php  

require_once('templates/head.php');

?>
<style type="text/css">

section#berkala{
	margin-top: 5px;
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
<section id="berkala">
	<div class="container">
		<div class="row">

			<?php if(isset($_GET['rekapitulasi'])){ ?>

					<?php include_once('views/operasional/rekapitulasi.php'); ?>

			<?php }else{ ?>

					<div class="col-md-12 text-center top">
						<h2>Statistik </h2>
						<h3>Operasional SKP Kelas I Sumbawa Besar</h3>
					</div>
					<div id="tabs-1">
					   	<button class="accordion button-cta">Berdasarkan frekuensi</button>
						<div class="padding">
						  	<div class="container-fluid" style="margin-top: 30px">
							  	<div class="col-md-12">
							      <div class="row">
								      	<div class="col-md-12 text-center">
								      		<h3>Data Operasional Karantina Hewan</h3>
								      	</div>
							          	<div class="col-md-6"> 	
							              <div id="khchart" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto">
							              	<div class='text-center'><img src='images/ajax-loader.gif'><br/>Loading data...</div>
							              </div>
							          	</div>
							          	<div class="col-md-6">
							              <div id="khchartlastyear" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto">
							              	<div class='text-center'><img src='images/ajax-loader.gif'><br/>Loading data...</div>
							              </div>
							          	</div>
							      </div>
							      <div class="row">
							      	<div class="col-md-12" id="keterangan-chart-kh"></div>
							      </div>
							  	</div>
							  	<div class="col-md-12">
							      <div class="row">
							      		<div class="col-md-12 text-center">
							      			<h3>Data Operasional Karantina Tumbuhan</h3>
							      		</div>
							          	<div class="col-md-6">
							          	 
							              <div id="ktchart" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto">
							              	<div class='text-center'><img src='images/ajax-loader.gif'><br/>Loading data...</div>
							              </div>
							          	</div>
							          	<div class="col-md-6">
							              <div id="ktchartlastyear" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto">
							              	<div class='text-center'><img src='images/ajax-loader.gif'><br/>Loading data...</div>
							              </div>
							          	</div>
							      </div>
							      <div class="row">
							      	<div class="col-md-12" id="keterangan-chart-kt"></div>
							      </div>
							  	</div>
							  	<div class="col-md-12">
							  		<i>Sumber : <a href="http://e-office.skp1sumbawabesar.org" target="_blank" rel="noreferrer">e-office (e-laporan opersional) Sumbawa</a></i>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<a href="index" class="button-cta btn-berita">Kembali</a>
					</div>

			<?php } ?>
			
		</div>
	</div>
</section>

<script type="text/javascript">

	let date = new Date();

	let thisYear = date.getFullYear();

	let lastYear = date.getFullYear() - 1;

	let urlLastYear = dashboardApi + '/' + lastYear;

	fetchData(urlLastYear, '#khchartlastyear', '#ktchartlastyear');

	fetchData(dashboardApi, '#khchart', '#ktchart');

	function fetchData(url, containerkh, containerkt)
	{
		/*fetch data operasional for chart*/
		$.getJSON(url, function(response){

		      /*KH*/
		      Highcharts.setOptions({
		          colors: ['#bf80ff', '#ffcc00', '#33cc33', '#24CBE5']
		      });

		      pieChart(containerkh, response.kh, 'Sertifikasi Karantina Hewan Tahun');

		      /*KT*/
		      Highcharts.setOptions({
		          colors: ['#00e600', '#ffcc00', '#bf80ff', '#24CBE5']
		      });

		      pieChart(containerkt, response.kt, 'Sertifikasi Karantina Tumbuhan Tahun');

		      $('#keterangan-chart-kh').html(`

		      		<div class="col-md-6">
		      			<h4>Keterangan Data tahun ${thisYear} : </h4>
			          	<ol>
			              <li>Ekspor :<b>${response.kh.frekuensi.ekspor || 0}</b></li>
			              <li>Impor :<b>${response.kh.frekuensi.impor || 0}</b></li>
			              <li>Domestik Masuk :<b>${response.kh.frekuensi.domas || 0}</b></li>
			              <li>Domestik keluar :<b>${response.kh.frekuensi.dokel || 0}</b></li>
			          	</ol>
			      	</div>

		      `)

		      $('#keterangan-chart-kt').html(`

			      	<div class="col-md-6">
			      		<h4>Keterangan Data tahun ${thisYear} : </h4>
			          	<ol>
			              <li>Ekspor :<b>${response.kt.frekuensi.ekspor || 0}</b></li>
			              <li>Impor :<b>${response.kt.frekuensi.impor || 0}</b></li>
			              <li>Domestik Masuk :<b>${response.kt.frekuensi.domas || 0}</b></li>
			              <li>Domestik keluar :<b>${response.kt.frekuensi.dokel || 0}</b></li>
			          	</ol>
			      	</div>

		      `)

		});
	}

  	/*Init pie chart data operasional*/
  	function pieChart(container, data, title)
  	{
	    $(container).highcharts({
	      credits: false,
	          chart: {
	              backgroundColor: null,
	              plotBackgroundColor: null,
	              plotBorderWidth: null,
	              plotShadow: false,
	              type: 'pie'
	          },
	          title: {
	              text: title + ' ' + data.tahun
	          },
	          xAxis: {
	              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	          },
	          tooltip: {
	              pointFormat: 'Total: <b>{point.y}</b><br/>',
	              valueSuffix: ' Sertifikat',
	          },
	          series: [{
	              type: 'pie',
	              allowPointSelect: true,
	              keys: ['name', 'y', 'selected', 'sliced'],
	              data: [
	                  ['<b>' + 'Domas' + '</b>', parseInt(data.frekuensi.domas || 0)],
	                  ['<b>' + 'Dokel' + '</b>', parseInt(data.frekuensi.dokel || 0)],
	                  ['<b>' + 'Ekspor' + '</b>', parseInt(data.frekuensi.ekspor || 0)],
	                  ['<b>' + 'Impor' + '</b>',  parseInt(data.frekuensi.impor || 0)]
	              ],
	              showInLegend: true
	          }]
	    });

	}

</script>


<?php  

require_once('templates/footer_web.php');

?>

