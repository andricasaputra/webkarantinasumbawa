<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));

$revisi				=htmlspecialchars($conn->real_escape_string($_POST['revisi']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));

$keuangan->edit("UPDATE rka_kl SET tahun='$tahun', revisi='$revisi', link='$link', waktu_input = now() WHERE id ='$id'");


?>	