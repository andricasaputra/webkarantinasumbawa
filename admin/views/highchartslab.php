Highcharts.chart('2018', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Data Operasional Karantina Hewan <?php echo(json_encode($json[0][0]))  ?>'
    },
    subtitle: {
        text: 'sampai tanggal' + ' ' +<?php echo json_encode($sampai) ?>
    }, 
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['Domas', <?php echo(json_encode($json[0][1])) ?>, false],
            ['Dokel', <?php echo(json_encode($json[0][2]))  ?>, false],
            ['Ekspor', <?php echo(json_encode($json[0][3]))  ?>, false],
            ['Impor', <?php echo(json_encode($json[0][4]))  ?>, false]
        ],
        showInLegend: true
    }] 
    /*plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Frekuensi'+ ' ' + 'Tahun' + ' ' +<?php echo(json_encode($json[0][0]))  ?>,
        colorByPoint: true,
        data: [{
            name: 'Domas',
            y: <?php echo(json_encode($json[0][1])) ?>
        }, {
            name: 'Dokel',
            y: <?php echo(json_encode($json[0][2]))  ?>
        }, {
            name: 'Ekspor',
            y: <?php echo(json_encode($json[0][3]))  ?>
        }, {
            name: 'Impor',
            y: <?php echo(json_encode($json[0][4]))  ?>
        }]
    }]*/
  });

  Highcharts.chart('2017', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Data Operasional Karantina Hewan <?php echo(json_encode($json[1][0]))  ?>'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['Domas', <?php echo(json_encode($json[1][1])) ?>, false],
            ['Dokel', <?php echo(json_encode($json[1][2]))  ?>, false],
            ['Ekspor', <?php echo(json_encode($json[1][3]))  ?>, false],
            ['Impor', <?php echo(json_encode($json[1][4]))  ?>, false]
        ],
        showInLegend: true
    }] 
    /*series: [{
        name: 'Frekuensi'+ ' ' + 'Tahun' + ' ' +<?php echo(json_encode($json[1][0]))  ?>,
        colorByPoint: true,
        data: [{
            name: 'Domas',
            y: <?php echo(json_encode($json[1][1])) ?>
        }, {
            name: 'Dokel',
            y: <?php echo(json_encode($json[1][2]))  ?>
        }, {
            name: 'Ekspor',
            y: <?php echo(json_encode($json[1][3]))  ?>
        }, {
            name: 'Impor',
            y: <?php echo(json_encode($json[1][4]))  ?>
        }]
    }]*/
  });

  Highcharts.chart('2016', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Data Operasional Karantina Hewan <?php echo(json_encode($json[2][0]))  ?>'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['Domas', <?php echo(json_encode($json[2][1])) ?>, false],
            ['Dokel', <?php echo(json_encode($json[2][2]))  ?>, false],
            ['Ekspor', <?php echo(json_encode($json[2][3]))  ?>, false],
            ['Impor', <?php echo(json_encode($json[2][4]))  ?>, false]
        ],
        showInLegend: true
    }] 
    /*series: [{
        name: 'Frekuensi'+ ' ' + 'Tahun' + ' ' +<?php echo(json_encode($json[2][0]))  ?>,
        colorByPoint: true,
        data: [{
            name: 'Domas',
            y: <?php echo(json_encode($json[2][1])) ?>
        }, {
            name: 'Dokel',
            y: <?php echo(json_encode($json[2][2]))  ?>
        }, {
            name: 'Ekspor',
            y: <?php echo(json_encode($json[2][3]))  ?>
        }, {
            name: 'Impor',
            y: <?php echo(json_encode($json[2][4]))  ?>
        }]
    }]*/
  });
/*  // Good code:
var options1 = {
    chart: {
        renderTo: 'tonase',
        type: 'pie'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
      name: 'Jumlah Tonase',
        colorByPoint: true,
    }]
};
var options2 = {
    chart: {
        renderTo: 'frekuensi',
        type: 'line'
    },

    series: [{
      
    }]
};
$.getJSON('views/data.php', function(data){
  var data1 = data[0];
  var data2 = data[1];
  options1.series[0].data = data1;
  options1.series[0].name = "Domas";
  options2.series[0].data = data2;
  var chart = new Highcharts.Chart(options1);
  var chart2 = new Highcharts.Chart(options2);
});
//   options.series.push({
//     name: 'John',
//     data: [3, 4, 2]
// });
*/