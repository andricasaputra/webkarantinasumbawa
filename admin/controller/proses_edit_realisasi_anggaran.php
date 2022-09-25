<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));

$realisasi_anggaran	=htmlspecialchars($conn->real_escape_string($_POST['realisasi_anggaran']));

$keuangan->edit("UPDATE keuangan SET tahun='$tahun', realisasi_anggaran='$realisasi_anggaran', waktu_input = now() WHERE id ='$id'");


?>	