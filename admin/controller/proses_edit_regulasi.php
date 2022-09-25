<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$nama_regulasi		=htmlspecialchars($conn->real_escape_string($_POST['nama_regulasi']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));

$ppid->edit("UPDATE ppid_regulasi SET nama_regulasi = '$nama_regulasi', link='$link', waktu_input = now() WHERE id ='$id'");


?>	