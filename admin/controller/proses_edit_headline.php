<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$judul1				=htmlspecialchars($conn->real_escape_string($_POST['judul1']));

$judul2				=htmlspecialchars($conn->real_escape_string($_POST['judul2']));

/*Jika Tidak Ada Perubahan Gambar*/

if ($_FILES['gambar']['name'] == '' && $_FILES['gambar']['error'] > 1) {

	$connection->edit("UPDATE headline SET judul1='$judul1', judul2='$judul2' WHERE id ='$id'");

	echo 'sukses';


/*Jika Ada Perubahan Gambar*/

}else{

	/*Upload File Baru*/

	/*Cek Extensi Yang Valid*/

	$extensiValid = ['jpg', 'png'];

	$extensi  = explode(".", $_FILES['gambar']['name']);

	$extensiDipakai = strtolower(end($extensi));

	if (!in_array($extensiDipakai, $extensiValid)) {

	  echo 'ekstensi';
	  exit();

	}

	$gambar   = "headline-".round(microtime(true)).".".$extensiDipakai;

	$folder   = $_FILES['gambar']['tmp_name'];

	$upload   = move_uploaded_file($folder, $_SERVER['DOCUMENT_ROOT']."/assets/img/headline/".$gambar);

	/*Cek Ukuran File*/

	if ($folder == "") {

		echo 'ukuran';
		exit();
	}

	/*Jika File Sudah Siap Upload*/

	if ($upload) {

		/*Edit Ke Database*/

		$connection->edit("UPDATE headline SET judul1='$judul1', judul2='$judul2', gambar='$gambar' WHERE id ='$id'");

		/*Hapus Gambar Lama Bro*/

		$gbr  = htmlspecialchars($conn->real_escape_string($_POST['gbr']));

		$path = $_SERVER['DOCUMENT_ROOT']."/assets/img/headline/".$gbr;

		if(file_exists($path)) {

			chmod($path,0755); //Change the file permissions if allowed

		    unlink($path); 
		}

		echo 'sukses';
	}

}

?>	