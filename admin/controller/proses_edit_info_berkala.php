<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$nama_info			=htmlspecialchars($conn->real_escape_string($_POST['nama_info']));

$kategori			=htmlspecialchars($conn->real_escape_string($_POST['kategori']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));

$ppid->edit("UPDATE ppid_info_berkala SET nama_info = '$nama_info', kategori='$kategori', link='$link', waktu_input = now(), jenis='berkala' WHERE id ='$id'");


?>	