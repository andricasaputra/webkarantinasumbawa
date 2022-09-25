<?php  
require_once('header_proses.php');

$id = $_POST['id'];	

if ($_POST['tampil'] == 'Ya') {

	$tampil = 'Tidak';

}else{

	$tampil = 'Ya';

}

$connection->Edit("UPDATE headline SET tampil='$tampil' WHERE id ='$id'");


$arr = ["id" => $id, "tampil"=>$tampil];

exit(json_encode($arr));

?>