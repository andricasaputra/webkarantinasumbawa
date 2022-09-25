<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$nama_info			=htmlspecialchars($conn->real_escape_string($_POST['nama_info']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));

$ppid->edit("UPDATE ppid_info_sertamerta SET nama_info = '$nama_info', link='$link', waktu_input = now(), jenis='serta_merta' WHERE id ='$id'");


?>	