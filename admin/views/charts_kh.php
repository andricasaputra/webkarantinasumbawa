<style type="text/css">
	.judul{
		margin-bottom: 30px;
	}
	.judul h2{
		font-weight: bold;
	}
</style>
<?php   

$tampilDataKh= $conn->data_operasional_kh();

$arr = array();

while($data = $tampilDataKh->fetch_object()):

$tahun = $data->tahun;

$tampilDataKh2= $conn->data_operasional_kh(null, $tahun);
    
while($data2 = $tampilDataKh2->fetch_assoc()):

  $tahun = $data2["tahun"];
  $domas = $data2["domas"];
  $dokel = $data2["dokel"];
  $ekspor = $data2["ekspor"];
  $impor = $data2["impor"]; 

endwhile;

  $dataarr = ["domas" => $domas, "dokel" => $dokel, "ekspor" => $ekspor, "impor" => $impor]; 
  $arr[$tahun] = $dataarr;  

endwhile;

?>
<div class="container-fluid" style="margin-top: 30px">
  <div class="col-md-12">
      <div class="row">
      	  <div class="col-md-12 text-center judul">
      		  <h2>Data Operasional Karantina Hewan</h2>
      	  </div>
          <div class="col-md-4">
              <div id="kh2018" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
          </div>
          <div class="col-md-4">
              <div id="kh2017" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
          </div>
          <div class="col-md-4">
              <div id="kh2016" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
          </div>
      </div>
  </div>
  <div class="col-md-12">
    <?php  
      foreach ($arr as $key => $value) { ?>
        <div class="col-md-4">
            <ol>
                <li>Ekspor :<b> <?php echo ($value["ekspor"]); ?></b></li>
                <li>Impor :<b>  <?php echo ($value["impor"]); ?></b></li>
                <li>Domestik Masuk :<b>  <?php echo ($value["domas"]); ?></b></li>
                <li>Domestik keluar :<b>  <?php echo ($value["dokel"]); ?></b></li>
            </ol>
        </div>
  <?php  } ?>
  </div>
</div>
<script type="text/javascript">
Highcharts.setOptions({
   colors: ['#bf80ff', '#ffcc00', '#33cc33', '#24CBE5', '#64E572', '#FF9655', '#FFF263',      '#6AF9C4']
  });
Highcharts.chart('kh2018', {
 
    credits: false,   
    chart: {
      backgroundColor:null,
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
        text: 'Sertifikasi Karantina Hewan Tahun <?php echo(json_encode($jsonKh[0][0]))  ?>'
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
            ['<b>'+'Domas'+'</b>', <?php echo(json_encode($jsonKh[0][1])) ?>, false],
            ['<b>'+'Dokel'+'</b>', <?php echo(json_encode($jsonKh[0][2]))  ?>, false],
            ['<b>'+'Ekspor'+'</b>', <?php echo(json_encode($jsonKh[0][3]))  ?>, false],
            ['<b>'+'Impor'+'</b>', <?php echo(json_encode($jsonKh[0][4]))  ?>, false]
        ],
        showInLegend: true
    }] 
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
    tooltip: {
        pointFormat: 'Total: <b>{point.y}</b><br/>',
        valueSuffix: ' Sertifikat',
    },
    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['<b>'+'Domas'+'</b>', <?php echo(json_encode($jsonKh[1][1])) ?>, false],
            ['<b>'+'Dokel'+'</b>', <?php echo(json_encode($jsonKh[1][2]))  ?>, false],
            ['<b>'+'Ekspor'+'</b>', <?php echo(json_encode($jsonKh[1][3]))  ?>, false],
            ['<b>'+'Impor'+'</b>', <?php echo(json_encode($jsonKh[1][4]))  ?>, false]
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
    tooltip: {
        pointFormat: 'Total: <b>{point.y}</b><br/>',
        valueSuffix: ' Sertifikat',
    },
    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['<b>'+'Domas'+'</b>', <?php echo(json_encode($jsonKh[2][1])) ?>, false],
            ['<b>'+'Dokel'+'</b>', <?php echo(json_encode($jsonKh[2][2]))  ?>, false],
            ['<b>'+'Ekspor'+'</b>', <?php echo(json_encode($jsonKh[2][3]))  ?>, false],
            ['<b>'+'Impor'+'</b>', <?php echo(json_encode($jsonKh[2][4]))  ?>, false]
        ],
        showInLegend: true
    }] 
  });

</script>
