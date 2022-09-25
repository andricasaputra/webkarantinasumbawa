<?php require_once('templates/head.php'); ?>
<style type="text/css">
	section#berkala{
		margin-top: 80px;
	}
	h2.judul{
		color: #000;
		font-size: 28pt
	}

	 .popover{ 
	 	font-weight: 600; 
	 	box-shadow: none;
	 }
	 h3{
	 	font-weight: 600;
	 }
	 #events{
	 	padding-top: 150px
	 }

</style>
<section class="light-bg atas" id="events">
	<div class="container">
		<div class="row">
			<div class="mz-module text-center">
				<div class="mz-module-about text-center">
					<div class="section-title">
						<h2 class="judul">Agenda Kegiatan</h2>
					</div>	
					<div class="sub-judul">
						<h3>Stasiun Karantina Pertanian Kelas I Sumbawa Besar</h3>
					</div>						
					 <div id="calendar" class="col-centered">
				</div>
			</div>
			<!-- end about module -->
		</div>
	</div>
	<!-- /.container -->
</section>

<?php require_once('templates/footer_web.php') ?>

<script>

$(document).ready(function() {

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,basicWeek,basicDay'
		},
		defaultDate: '<?php echo date("Y-m-d") ?>',
		editable: false,
		eventLimit: true,
		selectable: true,
		selectHelper: true,
		monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
		monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
		dayNames : ['Minggu', 'Senin', 'Selasa', 'Rabu','Kamis', 'Jumat', 'Sabtu'],
	  	dayNamesShort : ['Ming', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
	  	buttonText : {
		  today:    'Hari Ini',
		  month:    'Bulan',
		  week:     'Minggu',
		  day:      'Hari',
		  list:     'List'
		},
		eventRender: function(event, element){
	          element.popover({
	              animation:true,
	              delay: 300,
	              content: event.title,
	              trigger: 'manual'
	          }).on("mouseenter", function () {
			    let _this = this;
			    $(this).popover("show");
			    $(".popover").on("mouseleave", function () {
			        $(_this).popover('hide');
			    });
			}).on("mouseleave", function () {
			    let _this = this;
			    setTimeout(function () {
			        if (!$(".popover:hover").length) {
			            $(_this).popover("hide");
			        }
			    }, 100);
			});
		},
		events: [
		<?php foreach($events as $event): 
		
			$start = explode(" ", $event['start']);
			$end = explode(" ", $event['end']);
			if($start[1] == '00:00:00'){
				$start = $start[0];
			}else{
				$start = $event['start'];
			}
			if($end[1] == '00:00:00'){
				$end = $end[0];
			}else{
				$end = $event['end'];
			}
		?>
			{
				id: '<?php echo $event['id']; ?>',
				title: '<?php echo $event['title']; ?>',
				start: '<?php echo $start; ?>',
				end: '<?php echo $end; ?>',
				color: '<?php echo $event['color']; ?>',
			},
		<?php endforeach; ?>
		]
	});
});/*End Ready*/

</script>