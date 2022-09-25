<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));

$total				=htmlspecialchars($conn->real_escape_string($_POST['total']));

$waktu_input		=htmlspecialchars($conn->real_escape_string($_POST['waktu_input']));


$connection->edit("UPDATE pnbp SET tahun='$tahun', total='$total', waktu_input='$waktu_input' WHERE id ='$id'");


?>	