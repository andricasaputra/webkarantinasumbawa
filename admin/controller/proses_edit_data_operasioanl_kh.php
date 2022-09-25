<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$ekspor				=htmlspecialchars($conn->real_escape_string($_POST['ekspor']));

$impor				=htmlspecialchars($conn->real_escape_string($_POST['impor']));

$domas				=htmlspecialchars($conn->real_escape_string($_POST['domas']));

$dokel				=htmlspecialchars($conn->real_escape_string($_POST['dokel']));

$waktu_input		=htmlspecialchars($conn->real_escape_string($_POST['waktu_input']));

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));


$connection->edit("UPDATE kh_operasional SET ekspor='$ekspor', impor='$impor', domas='$domas' , dokel='$dokel' , waktu_input='$waktu_input', tahun = '$tahun'  WHERE id ='$id'");


?>	