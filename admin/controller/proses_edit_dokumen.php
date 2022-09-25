<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$nama_dokumen		=htmlspecialchars($conn->real_escape_string($_POST['nama_dokumen']));

$waktu_upload		=htmlspecialchars($conn->real_escape_string($_POST['waktu_upload']));

$kategori			=htmlspecialchars($conn->real_escape_string($_POST['kategori']));

/*Jika Tidak Ada Perubahan filenya*/

if ($_FILES['filenya']['name'] == '' && $_FILES['filenya']['error'] > 1) {

	$connection->edit("UPDATE publik SET nama_dokumen='$nama_dokumen', waktu_upload='$waktu_upload', kategori='$kategori' WHERE id ='$id'");

	echo 'sukses';


/*Jika Ada Perubahan filenya*/

}else{

	/*Upload File Baru*/

	/*Cek Extensi Yang Valid*/

	$extensiValid = ['pdf'];

	$extensi  = explode(".", $_FILES['filenya']['name']);

	$extensiDipakai = strtolower(end($extensi));

	if (!in_array($extensiDipakai, $extensiValid)) {

	  echo 'ekstensi';
	  exit();

	}

	$filenya   = "docs-".round(microtime(true)).".".$extensiDipakai;

	$folder   = $_FILES['filenya']['tmp_name'];

	$upload   = move_uploaded_file($folder, $_SERVER['DOCUMENT_ROOT']."/assets/docs/".$filenya);

	/*Cek Ukuran File*/

	if ($folder == "") {

		echo 'ukuran';
		exit();
	}

	/*Jika File Sudah Siap Upload*/

	if ($upload) {

		/*Edit Ke Database*/
		
		$connection->edit("UPDATE publik SET nama_dokumen='$nama_dokumen', waktu_upload='$waktu_upload', kategori='$kategori', filenya = '$filenya' WHERE id ='$id'");

		/*Hapus filenya Lama Bro*/

		$file  = htmlspecialchars($conn->real_escape_string($_POST['file']));

		$path = $_SERVER['DOCUMENT_ROOT']."/assets/docs/".$file;

		if(file_exists($path)) {

		    unlink($path); 
		}

		
		echo 'sukses';
	}

}





?>	