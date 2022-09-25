<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$bagian_info		=htmlspecialchars($conn->real_escape_string($_POST['bagian_info']));

$nama_info			=htmlspecialchars($conn->real_escape_string($_POST['nama_info']));

$keterangan			=htmlspecialchars($conn->real_escape_string($_POST['keterangan']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));

$ppid->edit("UPDATE ppid_info_setiapsaat SET bagian_info = '$bagian_info', nama_info = '$nama_info', keterangan = '$keterangan', link='$link', waktu_input = now(), jenis='setiap_saat' WHERE id ='$id'");


?>	