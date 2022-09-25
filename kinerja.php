<?php  

require_once('templates/head.php');

if (isset($_GET['renstra'])) {

	include_once('views/kinerja/renstra.php');
	
}elseif(isset($_GET['rkt'])){

	include_once('views/kinerja/rkt.php');
}	

require_once('templates/footer_web.php');