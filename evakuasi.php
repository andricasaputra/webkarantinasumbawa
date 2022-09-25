<?php  

require_once('templates/head.php');

  
	if (isset($_GET['gempa'])) { 

		include_once('views/evakuasi&peringatandini/gempa_bumi.php');
		
 	} elseif(isset($_GET['tsunami'])) {

 		include_once('views/evakuasi&peringatandini/tsunami.php');
 	} else {

 		include_once('views/evakuasi&peringatandini/index.php');
 	}

  
require_once('templates/footer_web.php');

?>
