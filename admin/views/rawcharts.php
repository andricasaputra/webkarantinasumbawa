<?php  

require_once('templates/head.php');

?>
<style type="text/css">


.mz-module{
	position: relative;
	margin-top: 70px;
}


</style>
<section>
<div class="container">
	<div class="row">
		<div class="mz-module" >
			<div class=" text-center set" >
				<div class="section-title">
					<h2 class="judul text-center" style="color: #000">Data Operasional & Keuangan <br> Tahun <?php echo(json_encode((int)$jsonKh[0][0]))  ?></h2>
				</div>	
					<div class="col-md-12 text-center">
						<div class="row">
							<div class="col-md-4">
								<div id="kh2018" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
							</div>
							<div class="col-md-4">
								<div id="keu2018" style="min-width: 210px; max-width: 350px; height: 200px; margin: 0 auto; margin-top: 100px"></div>
							</div>
							<div class="col-md-4">
								<div id="kt2018" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
							</div>
					</div>	
				</div>
			</div>
		</div>	
		<div class="mz-module" >
			<div class=" text-center" >
				<div class="section-title set">
					<h2 class="judul text-center" style="color: #000">Data Operasional & Keuangan <br> Tahun <?php echo(json_encode((int)$jsonKh[1][0]))  ?></h2>
				</div>	
					<div class="col-md-12 text-center">
						<div class="row">
							<div class="col-md-4">
								<div id="kh2017" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
							</div>
							<div class="col-md-4">
								<div id="keu2017" style="min-width: 210px; max-width: 350px; height: 200px; margin: 0 auto; margin-top: 100px"></div>
							</div>
							<div class="col-md-4">
								<div id="kt2017" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
							</div>
						</div>
					</div>
			</div>
		</div>
		<div class="mz-module" >
			<div class=" text-center set" >
				<div class="section-title">
					<h2 class="judul text-center" style="color: #000">Data Operasional & Keuangan <br> Tahun <?php echo(json_encode((int)$jsonKh[2][0]))  ?></h2>
				</div>	
					<div class="col-md-12 text-center">
						<div class="row">
							<div class="col-md-4">
								<div id="kh2016" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
							</div>
							<div class="col-md-4">
								<div id="keu2016" style="min-width: 210px; max-width: 350px; height: 200px; margin: 0 auto; margin-top: 100px"></div>
							</div>
							<div class="col-md-4">
								<div id="kt2016" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php  

require_once('templates/footer_web.php');

?>

<script type="text/javascript">
	$(document).ready(function(){
		Highcharts.setOptions({
		   colors: ['#bf80ff', '#ffcc00', '#33cc33', '#24CBE5', '#64E572', '#FF9655', '#FFF263',      '#6AF9C4']
		  });
		Highcharts.chart('kh2017', {
	    credits: false,
	    chart: {
	        backgroundColor:null,
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'Sertifikasi Karantina Hewan Tahun <?php echo(json_encode($jsonKh[1][0]))  ?>'
	    },

	    xAxis: {
	        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	    },

	    series: [{
	        type: 'pie',
	        allowPointSelect: true,
	        keys: ['name', 'y', 'selected', 'sliced'],
	        data: [
	            ['Domas', <?php echo(json_encode($jsonKh[1][1])) ?>, false],
	            ['Dokel', <?php echo(json_encode($jsonKh[1][2]))  ?>, false],
	            ['Ekspor', <?php echo(json_encode($jsonKh[1][3]))  ?>, false],
	            ['Impor', <?php echo(json_encode($jsonKh[1][4]))  ?>, false]
	        ],
	        showInLegend: true
	    }] 
	  });

	  Highcharts.chart('kh2016', {
	    credits: false,
	    chart: {
	        backgroundColor:null,
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'Sertifikasi Karantina Hewan Tahun <?php echo(json_encode($jsonKh[2][0]))  ?>'
	    },

	    xAxis: {
	        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	    },

	    series: [{
	        type: 'pie',
	        allowPointSelect: true,
	        keys: ['name', 'y', 'selected', 'sliced'],
	        data: [
	            ['Domas', <?php echo(json_encode($jsonKh[2][1])) ?>, false],
	            ['Dokel', <?php echo(json_encode($jsonKh[2][2]))  ?>, false],
	            ['Ekspor', <?php echo(json_encode($jsonKh[2][3]))  ?>, false],
	            ['Impor', <?php echo(json_encode($jsonKh[2][4]))  ?>, false]
	        ],
	        showInLegend: true
	    }] 
	  });
	  /*Karantina Tumbuhan*/
	  Highcharts.setOptions({
	   colors: ['#00e600', '#ffcc00', '#bf80ff', '#24CBE5', '#64E572', '#FF9655', '#FFF263',      '#6AF9C4']
	  });
	  Highcharts.chart('kt2017', {
	    credits: false,
	    chart: {
	        backgroundColor:null,
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'Sertifikasi Karantina Tumbuhan Tahun <?php echo(json_encode($jsonKt[1][0]))  ?>'
	    },

	    xAxis: {
	        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	    },

	    series: [{
	        type: 'pie',
	        allowPointSelect: true,
	        keys: ['name', 'y', 'selected', 'sliced'],
	        data: [
	            ['Domas', <?php echo(json_encode($jsonKt[1][1])) ?>, false],
	            ['Dokel', <?php echo(json_encode($jsonKt[1][2]))  ?>, false],
	            ['Ekspor', <?php echo(json_encode($jsonKt[1][3]))  ?>, false],
	            ['Impor', <?php echo(json_encode($jsonKt[1][4]))  ?>, false]
	        ],
	        showInLegend: true
	    }] 
	  });

	  Highcharts.chart('kt2016', {
	    credits: false,
	    chart: {
	        backgroundColor:null,
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'Sertifikasi Karantina Tumbuhan Tahun <?php echo(json_encode($jsonKt[2][0]))  ?>'
	    },

	    xAxis: {
	        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	    },

	    series: [{
	        type: 'pie',
	        allowPointSelect: true,
	        keys: ['name', 'y', 'selected', 'sliced'],
	        data: [
	            ['Domas', <?php echo(json_encode($jsonKt[2][1])) ?>, false],
	            ['Dokel', <?php echo(json_encode($jsonKt[2][2]))  ?>, false],
	            ['Ekspor', <?php echo(json_encode($jsonKt[2][3]))  ?>, false],
	            ['Impor', <?php echo(json_encode($jsonKt[2][4]))  ?>, false]
	        ],
	        showInLegend: true
	    }] 
	  });
	  /*Keuangan*/
	  // Tahun 2017

		let thn2017= [<?php echo(json_encode($jsonKeu[1][1])) ?>];  
		let thn2016= [<?php echo(json_encode($jsonKeu[2][1])) ?>];  
		thn2017 = thn2017.map(Number);
		thn2016 = thn2016.map(Number);
	  	let gaugeOptions2 = {

				    chart: {
				        type: 'solidgauge',
				        backgroundColor:null
				    },

				    title: null,

				    pane: {
				        center: ['50%', '85%'],
				        size: '140%',
				        startAngle: -90,
				        endAngle: 90,
				        background: {
				            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
				            innerRadius: '60%',
				            outerRadius: '100%',
				            shape: 'arc'
				        }
				    },

				    tooltip: {
				        enabled: false
				    },

				    // the value axis
				    yAxis: {
				        stops: [
				            [0.1, '#DF5353'], // green #55BF3B
				            [0.5, '#DDDF0D'], // yellow #DDDF0D
				            [0.9, '#55BF3B'] // red #DF5353
				        ],
				        lineWidth: 0,
				        minorTickInterval: null,
				        tickAmount: 2,
				        title: {
				            y: -70
				        },
				        labels: {
				            y: 16
				        }
				    },

				    plotOptions: {
				        solidgauge: {
				            dataLabels: {
				                y: 5,
				                borderWidth: 0,
				                useHTML: true
				            }
				        }
				    }
				};
		var chartSpeed2 = Highcharts.chart('keu2017', Highcharts.merge(gaugeOptions2, {

		    yAxis: {
		        min: 0,
		        max: 100,
		        title: {
		            text: 'Realisasi Anggaran Tahun'+' '+ <?php echo(json_encode($jsonKeu[1][0])) ?>
		        }
		    },

		    credits: {
		        enabled: false
		    },

		    series: [{
		        name: '',
		        data: thn2017,
		        dataLabels: {
		            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
		                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
		                   '<span style="font-size:12px;color:silver">%</span></div>'
		        },
		        tooltip: {
		            valueSuffix: '%'
		        }
		    }]

		}));

		// Tahun 2016
		var chart3 = Highcharts.chart('keu2016', Highcharts.merge(gaugeOptions,  {

		    yAxis: {
		        min: 0,
		        max: 100,
		        title: {
		            text: 'Realisasi Anggaran Tahun'+' '+ <?php echo(json_encode($jsonKeu[2][0])) ?>
		        }
		    },

		    credits: {
		        enabled: false
		    },

		    series: [{

		        name: '',
		        data: thn2016,
		        dataLabels: {
		            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
		                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
		                   '<span style="font-size:12px;color:silver">%</span></div>'
		        },
		        tooltip: {
		            valueSuffix: '%'
		        }
		    }]

		}));
	}); /*End Ready*/
</script>