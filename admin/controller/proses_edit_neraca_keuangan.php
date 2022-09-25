<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));

$keuangan->edit("UPDATE neraca_keuangan SET tahun='$tahun', link='$link', waktu_input = now() WHERE id ='$id'");


?>	