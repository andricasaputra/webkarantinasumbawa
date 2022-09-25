<style type="text/css">
	#loader{
		position: fixed;
		left: 230px;
		top: 50px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url(assets/img/loader2.gif) center no-repeat #fff;
	}

	.info-box-text{
		font-size: 15pt;
	}

	.info-box-number{
		font-size: 20pt;
	}

</style>


<section class="content">
	
	<div id="dataGa">
		<div id="loader"></div>
	</div>
	
  <!-- /.row -->
</section>

<script type="text/javascript">
	$(window).on('load',function() {
		$(document).ready(function () {	

	   		 function getGaData(){

		   		  $.ajax("ga/data_analitycs.php")
				  .done(function(data) {
				  	$("#loader").fadeOut("slow"),
				    $("#dataGa").html(' '),
				    $("#dataGa").html(data);
				  }).fail(function() {
				  	$("#loader").fadeOut("slow"),
				    $("#dataGa").html(' '),
				    $("#dataGa").html('<div class="col-md-12" text-center><h2><i class="fa fa-info"></i> Silahkan Reload Kembali Halaman Anda (Google Analitycs Error When Loading Data)</h2></div>');
				  });
	   		 }

	   		 getGaData();		
		});
	});

</script>