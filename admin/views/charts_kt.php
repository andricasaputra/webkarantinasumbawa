<style type="text/css">
	.judul{
		margin-bottom: 30px;
	}
	.judul h2{
		font-weight: bold;
	}

</style>
<?php   

$tampilDataKt= $conn->data_operasional_kt();

$arr = array();

while($data = $tampilDataKt->fetch_object()):

$tahun = $data->tahun;

$tampilDataKt2= $conn->data_operasional_kt(null, $tahun);
    
while($data2 = $tampilDataKt2->fetch_assoc()):

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
      		  <h2>Data Operasional Karantina Tumbuhan</h2>
      	  </div>
          <div class="col-md-4">
              <div id="kt2018" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
          </div>
          <div class="col-md-4">
              <div id="kt2017" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
          </div>
          <div class="col-md-4">
              <div id="kt2016" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
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
   colors: ['#00e600', '#ffcc00', '#bf80ff', '#24CBE5', '#64E572', '#FF9655', '#FFF263',      '#6AF9C4']
  });

Highcharts.chart('kt2018', {
    credits: false,
    chart: {
        backgroundColor:null,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Sertifikasi Karantina Tumbuhan Tahun <?php echo(json_encode($jsonKt[0][0]))  ?>'
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
            ['<b>'+'Domas'+'</b>', <?php echo(json_encode($jsonKt[0][1])) ?>, false],
            ['<b>'+'Dokel'+'</b>', <?php echo(json_encode($jsonKt[0][2]))  ?>, false],
            ['<b>'+'Ekspor'+'</b>', <?php echo(json_encode($jsonKt[0][3]))  ?>, false],
            ['<b>'+'Impor'+'</b>', <?php echo(json_encode($jsonKt[0][4]))  ?>, false]
        ],
        showInLegend: true
    }] 
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
    tooltip: {
        pointFormat: 'Total: <b>{point.y}</b><br/>',
        valueSuffix: ' Sertifikat',
    },
    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['<b>'+'Domas'+'</b>', <?php echo(json_encode($jsonKt[1][1])) ?>, false],
            ['<b>'+'Dokel'+'</b>', <?php echo(json_encode($jsonKt[1][2]))  ?>, false],
            ['<b>'+'Ekspor'+'</b>', <?php echo(json_encode($jsonKt[1][3]))  ?>, false],
            ['<b>'+'Impor'+'</b>', <?php echo(json_encode($jsonKt[1][4]))  ?>, false]
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
    tooltip: {
        pointFormat: 'Total: <b>{point.y}</b><br/>',
        valueSuffix: ' Sertifikat',
    },
    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['<b>'+'Domas' +'</b>', <?php echo(json_encode($jsonKt[2][1])) ?>, false],
            ['<b>'+'Dokel' +'</b>', <?php echo(json_encode($jsonKt[2][2]))  ?>, false],
            ['<b>'+'Ekspor' +'</b>', <?php echo(json_encode($jsonKt[2][3]))  ?>, false],
            ['<b>'+'Impor' +'</b>', <?php echo(json_encode($jsonKt[2][4]))  ?>, false]
        ],
        showInLegend: true
    }] 
  });

</script>
