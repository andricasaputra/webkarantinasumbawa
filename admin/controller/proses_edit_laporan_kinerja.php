<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$nama_laporan		=htmlspecialchars($conn->real_escape_string($_POST['nama_laporan']));

$jenis_laporan		=htmlspecialchars($conn->real_escape_string($_POST['jenis_laporan']));

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));

$connection->edit("UPDATE laporan SET nama_laporan = '$nama_laporan', jenis_laporan = '$jenis_laporan', tahun = '$tahun', link='$link', waktu_input = now() WHERE id ='$id' AND jenis_laporan = '$jenis_laporan'");


?>	