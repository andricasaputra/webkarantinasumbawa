$(window).load(function() {
	$(".loader").fadeOut("slow");;
});


$(document).ready(function () {

	let acc = document.getElementsByClassName("accordion");
	let i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    let panel = this.nextElementSibling;
	    if (panel.style.maxHeight){
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  });
	}

	timer = setTimeout(function () {
        $('#show').removeClass('hide');
        $('.marquee .text').marquee({
		    duration: 20000,
		    delayBeforeStart: 0,
		    direction: 'left',
		    duplicated: true,
		    pauseOnHover: true
			});
   		 }, 1000);


	$(document).on("click", '.right', function (){
		$(this).animate({'marginLeft' : "-360px"}, 400);
		$('#pengaduan').addClass('balik');
		
	});


	$(document).on("click", ".balik", function () {

		$(this).animate({'marginLeft' : "0px"}, 400);
		$('#pengaduan').removeClass('balik');

	});

	$(document).on('click', '.has-sub', function (){

		/*$(this).find('.no-sub li a').css("display", "block");*/
		$(this).toggleClass('toggle-menu');

		$('.toggle-menu').find('.no-sub li a').css("display", "block");


		/*$('.toggle-menu').find('.no-sub li a').css("display", "none");*/

		$(document).on('click', '.toggle-menu', function (){

			$(this).find('.no-sub li a').css("display", "none");


		});


	});

	if ($(window).width() > 800) {
	   $('#cssmenu').prepend('<a class="navbar-brand page-scroll" href="#page-top"><img src="images/brand.png" class="logo"></a>');
	}else{
		$('.navbar-brand img').remove();
	}


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
	    subtitle: {
	        text: 'sampai tanggal' + ' ' +<?php echo json_encode($sampai) ?>
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
	    subtitle: {
	        text: 'sampai tanggal' + ' ' +<?php echo json_encode($sampai) ?>
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
		

	let thn2018= [<?php echo(json_encode($jsonKeu[0][1])) ?>];  
	thn2018 = thn2018.map(Number);


	let gaugeOptions = {

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

}); /*End Ready*/

( function( $ ) {
	$( document ).ready(function() {
	$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
		$('#cssmenu #menu-button').on('click', function(){
			let menu = $(this).next('ul');
			if (menu.hasClass('open')) {
				menu.removeClass('open');
			}
			else {
				menu.addClass('open');
			}
		});
	});
			} )( jQuery );
