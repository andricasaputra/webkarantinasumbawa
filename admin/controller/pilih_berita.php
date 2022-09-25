<?php  
require_once('header_proses.php');

$id = $_POST['id'];	

if ($_POST['tampil'] == 'Ya') {

	$tampil = 'Tidak';

}else{

	$tampil = 'Ya';

}

$connection->Edit("UPDATE berita SET tampil='$tampil' WHERE id ='$id'");


?>