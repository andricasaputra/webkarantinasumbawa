<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));

$link				=htmlspecialchars($conn->real_escape_string($_POST['link']));


$keuangan->UpdateRencanaAnggaran($tahun, $link, $id);


?>	