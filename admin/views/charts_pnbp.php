<style type="text/css">
	.judul{
		margin-bottom: 30px;
	}
	.judul h2{
		font-weight: bold;
	}
</style>
<?php   

$tampilPnbp = $conn->pnbp();

$arr = array();

while($data = $tampilPnbp->fetch_object()):

$tahun = $data->tahun;
$pertanggal = $data->waktu_input;

$tampilPnbp2= $conn->pnbp(null, $tahun);
    
while($data2 = $tampilPnbp2->fetch_assoc()):

$tahun = $data2["tahun"];
$total = $data2["total"];

endwhile;

  $dataarr = ["tahun" => $tahun, "total" => $total]; 
  $arr[$tahun] = $dataarr;  

endwhile;
$jsonTahun = array();
$jsonTotal = array();


?>
<div class="container-fluid" style="margin-top: 10px">
  <div class="col-md-12">
      <div class="row">
      	  <div class="col-md-12 text-center judul">
      		  <h2>Penerimaan Negara Bukan Pajak</h2>
      	  </div>
          <div class="col-md-6 col-md-offset-3">
              <div id="pnbp2018" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
          </div>
      </div>
  </div>
<div class="col-md-12">
	<div class="col-md-6 col-md-offset-3">
    <?php  
    	foreach ($arr as $key => $value) {
				$jsonTahun[] = (int)$value["tahun"] ;
				$jsonTotal[] = (int)$value["total"] ; ?>
        
            <div class="col-md-4 text-center">
            	<h4><b>PNBP Tahun <?php echo $key." : ".rp($value["total"]); ?></b></h4>
            </div>
        
  <?php  } ?>
  	</div>
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center"><i>Ket : Sampai Dengan Tanggal <?php echo tgl_indo(date($pertanggal)); ?> Untuk Tahun <?php echo date('Y') ?></i></div>
    </div>
  </div> 
</div>
<script type="text/javascript">
Highcharts.setOptions({
   colors: ['#24CBE5', '#ffcc00', '#bf80ff', '#33cc33',  '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
  });
Highcharts.chart('pnbp2018', {
	credits: false,  
    chart: {
        type: 'column'
    },
    title: {
        text: '<b>PNBP SKP I Sumbawa Besar 3 Tahun Terakhir</b>'
    },
    xAxis: {
        categories: 
            <?php echo(json_encode($jsonTahun)); ?>
        ,
        crosshair: true
    },
    yAxis: {            
        labels: {
            formatter: function () {
            	
                if (this.value / 1000000 == 1000) {
                	ybar = 'Rp' + ' ' +this.value / 1000000000 + ' ' +'Miliar';
                }else{
                	ybar = 'Rp' + ' ' +this.value / 1000000 + ' ' +'Juta';
                }

                return ybar;
            }            
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} Juta</b></td></tr>',
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
        name: 'PNBP',
        data:<?php echo(json_encode($jsonTotal)); ?>

    }]
});
</script>
