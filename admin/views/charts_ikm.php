<style type="text/css">
	.judul{
		margin-bottom: 30px;
	}
	.judul h2{
		font-weight: bold;
	}
</style>
<?php   

$tampilIkm = $conn->ikm();

$limit = $tampilIkm->num_rows;

$arr = array();

while($data = $tampilIkm->fetch_object()):

$tahun = $data->tahun;
$periode = $data->periode;

$tampilIkm2 = $conn->ikm(null, $tahun, $periode);
    
	while($data2 = $tampilIkm2->fetch_assoc()):

	$tahun = $data2["tahun"];
	$periode = $data2["periode"];
	$rata_rata = $data2["rata_rata"];


	endwhile;
	$dataarr = ["tahun" => $tahun, "periode" => $periode, "rata_rata" => $rata_rata]; 
	$arrayPeriode[$periode] = $dataarr;
	$arrayTahun[$tahun] = $arrayPeriode;  
	
	
endwhile;


?>
<div class="container-fluid" style="margin-top: 10px">
  <div class="col-md-12">
      <div class="row">
      	  <div class="col-md-12 text-center judul">
      		  <h2>Indeks Kepuasan Masyarakat</h2>
      	  </div>
          <div class="col-md-6 col-md-offset-3">
              <div id="ikm" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
          </div>
      </div>
  </div>
<div class="col-md-12">
	<div class="col-md-6 col-md-offset-3">
    <?php  
    	$jsonTahun = array();
		$jsonPeriode = array();
		$jsonRata = array();
		foreach ($arrayTahun as $key => $value) :
			foreach ($value as $key2 => $value2) :
				$tahun = $key;
				$periode = $key2;
				$jsonTahun[]=(int)$value2["tahun"];
				$jsonPeriode[] = (int)$value2["periode"];
				$jsonRata[] = str_replace(",", ".", $value2["rata_rata"]); 

                ?>

				<div class="col-md-6 text-center">
            		<h5>IKM Periode <?php echo $value2["periode"]." Tahun ".$key." : ". $value2["rata_rata"]."%"; ?></h5>
            	</div>
				
	<?php 	
		endforeach;
	   endforeach;

       // rsort($jsonRata);
       // rsort($jsonPeriode);
       // sort($jsonTahun);

	?>
  	</div>
  </div> 
</div>
<script type="text/javascript">
var rata = <?php echo(json_encode($jsonRata)) ?>;  
rata = rata.map(Number);
Highcharts.setOptions({
   colors: ['#64E572','#ffcc00', '#33cc33',  '#bf80ff',  '#24CBE5',  '#FF9655', '#FFF263',      '#6AF9C4']
  });
Highcharts.chart('ikm', {
	credits: false,  
    chart: {
        type: 'column'
    },
    title: {
        text: '<b>Nilai Indeks Kepuasan Masyarakat</b>'
    },
    xAxis: {
        categories: 
            <?php echo (json_encode($jsonTahun)); ?>
        ,
        crosshair: true
    },
    yAxis: {            
        labels: {
            formatter: function () {

                return this.value + ' ' +'%';
            }            
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} %</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Indeks Kepuasan Masyarakat',
        data: rata

    }]
});
/*console.log(rata);
Highcharts.setOptions({
   colors: [ '#ffcc00', '#bf80ff', '#33cc33', '#24CBE5', '#64E572', '#FF9655', '#FFF263',      '#6AF9C4']
  });
Highcharts.chart('ikm', {

    title: {
        text: 'Solar Employment Growth by Sector, 2010-2016'
    },

    subtitle: {
        text: 'Source: thesolarfoundation.com'
    },

    yAxis: {
        title: {
            text: 'Number of Employees'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: <?php print_r($tahun); ?>
        }
    },

    series: [{
        name: 'Installation',
        data: rata
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});*/
</script>
