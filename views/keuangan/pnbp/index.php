<?php  

require_once('templates/head.php');

?>
<style type="text/css">

section#berkala{
	margin-top: 5px;
}

.accordion {
    background-color: #ff9933;
    color: #424242;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: center;
    outline: none;
    font-size: 15px !important; 
    margin-top: 10px;
    display: block;
}

.active {
    background-color:  #ff9933;
    color: #424242;
}

 .accordion:hover {
    background-color:  #ff9933;
    color: #424242;
}

.accordion:after {
    content: '\002B';
    color: #424242;
    font-weight: bold;
    float: right;	    
}

.active:after {
    content: "\2212";
    color: #424242
}

.panel {
	
    padding: 0 18px;
    background-color: #fff !important;
    max-height: 0;
    overflow: hidden;
    transition: all 0.5s ease-out;
    display: block;
}

.top{
	margin-top: 80px;
	margin-bottom: 20px;
}

.top h2{
	font-weight: bold;
}

.padding{
	padding-bottom: 40px;
}
</style>
<section id="berkala">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center top">
				<h2>Statistik </h2>
				<h3>Penerimaan Negara Bukan Pajak (PNBP)</h3>
			</div>
			<div id="tabs-1">
				<button class="accordion button-cta">Penerimaan Negara Bukan Pajak</button>
				<div class="padding">
					<?php include_once('admin/views/charts_pnbp.php'); ?>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<a href="index" class="button-cta btn-berita">Kembali</a>
			</div>	
		</div>
	</div>
</section>


<?php  

require_once('templates/footer_web.php');

?>

