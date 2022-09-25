/*KH*/
Highcharts.setOptions({
    colors: ['#bf80ff', '#ffcc00', '#33cc33', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
});
Highcharts.chart('kh2018', {
    credits: false,
    chart: {
        backgroundColor: null,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Sertifikasi Karantina Hewan Tahun <?php echo(json_encode($jsonKh[0][0])) ?>'
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
            ['<b>' + 'Domas' + '</b>', <?php echo(json_encode($jsonKh[0][1])) ?> , false],
            ['<b>' + 'Dokel' + '</b>', <?php echo(json_encode($jsonKh[0][2])) ?> , false],
            ['<b>' + 'Ekspor' + '</b>', <?php echo(json_encode($jsonKh[0][3])) ?> , false],
            ['<b>' + 'Impor' + '</b>', <?php echo(json_encode($jsonKh[0][4])) ?> , false]
        ],
        showInLegend: true
    }]
}); /*KT*/
Highcharts.setOptions({
    colors: ['#00e600', '#ffcc00', '#bf80ff', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
});
Highcharts.chart('kt2018', {
    credits: false,
    chart: {
        backgroundColor: null,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Sertifikasi Karantina Tumbuhan Tahun <?php echo(json_encode($jsonKt[0][0])) ?>'
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
            ['<b>' + 'Domas' + '</b>', <?php echo(json_encode($jsonKt[0][1])) ?> , false],
            ['<b>' + 'Dokel' + '</b>', <?php echo(json_encode($jsonKt[0][2])) ?> , false],
            ['<b>' + 'Ekspor' + '</b>', <?php echo(json_encode($jsonKt[0][3])) ?> , false],
            ['<b>' + 'Impor' + '</b>', <?php echo(json_encode($jsonKt[0][4])) ?> , false]
        ],
        showInLegend: true
    }]
}); /*Keuangan*/
let thn2018 = [ <?php echo(json_encode($jsonKeu[0][1])) ?> ];
thn2018 = thn2018.map(Number);
let gaugeOptions = {
    chart: {
        type: 'solidgauge',
        backgroundColor: null
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
    yAxis: {
        stops: [
            [0.1, '#DF5353'],
            [0.5, '#DDDF0D'],
            [0.9, '#55BF3B']
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
var chartSpeed = Highcharts.chart('keu2018', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: '<b>' + 'Realisasi Anggaran Tahun' + ' ' + <?php echo(json_encode($jsonKeu[0][0])) ?> +'</b>'
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Speed',
        data: thn2018,
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' + ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' + '<span style="font-size:12px;color:silver">%</span></div>'
        },
        tooltip: {
            valueSuffix: '%'
        }
    }]
}));