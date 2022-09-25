<?php  
require_once('../config/database.php');
require_once('../classes/class_berita.php');

$db = Database::getInstance();
$conn = $db->getConnection();
$connection = new berita($db);
$tampilData = $connection->data_operasional_kh();

$json = array();

while ($data= $tampilData->fetch_object()) {
	$json[] = [
		(int)$data->tahun, 

		(int)$data->dokel, 

		(int)$data->domas, 

		(int)$data->ekspor, 

		(int)$data->impor, 
	];

}

