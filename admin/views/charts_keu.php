<style type="text/css">
	.judul{
		margin-bottom: 30px;
	}
	.judul h2{
		font-weight: bold;
	}
	.back-top{
		position: relative;
		top: -80px
	}
</style>
<div class="container-fluid back-top" style="margin-top: 100px">
	<div class="col-md-12">
	  <div class="row">
	  	  <div class="col-md-12 text-center judul">
      		  <h2>Realisasi Anggaran</h2>
      	  </div>
	      <div class="col-md-4">
			    <div id="keu2018" style="min-width: 210px; max-width: 350px; height: 200px; margin: 0 auto"></div>
	      </div>
	      <div class="col-md-4">
	          <div id="keu2017" style="min-width: 210px; max-width: 350px; height: 200px; margin: 0 auto"></div>
	      </div>
	      <div class="col-md-4">
	          <div id="keu2016" style="min-width: 210px; max-width: 350px; height: 200px; margin: 0 auto"></div>
	      </div>
	  </div>
	</div>
    <div class="col-md-12 text-center">
        <i>Sampai Dengan Tanggal <?php 
        $tgl = str_replace('"', "", (json_encode($jsonKeu[0][2])));
        echo tgl_indo(date($tgl)); ?> Untuk Tahun <?php echo date('Y');

         ?></i>
    </div>
</div>
<script type="text/javascript">
var thn2018= [<?php echo(json_encode($jsonKeu[0][1])) ?>];  
var thn2017= [<?php echo(json_encode($jsonKeu[1][1])) ?>];  
var thn2016= [<?php echo(json_encode($jsonKeu[2][1])) ?>];  
thn2018 = thn2018.map(Number);
thn2017 = thn2017.map(Number);
thn2016 = thn2016.map(Number);

var gaugeOptions = {

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

// tahun 2018
var chartSpeed = Highcharts.chart('keu2018', Highcharts.merge(gaugeOptions, {

    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: '<b>'+'Realisasi Anggaran Tahun'+ ' ' +<?php echo(json_encode($jsonKeu[0][0])) ?>+'</b>'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: thn2018,
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

// Tahun 2017
var chartSpeed2 = Highcharts.chart('keu2017', Highcharts.merge(gaugeOptions, {

    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: '<b>'+'Realisasi Anggaran Tahun'+ ' ' +<?php echo(json_encode($jsonKeu[1][0])) ?>+'</b>'
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
            text: '<b>'+'Realisasi Anggaran Tahun'+ ' ' +<?php echo(json_encode($jsonKeu[2][0])) ?>+'</b>'
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
</script>
