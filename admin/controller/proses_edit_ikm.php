<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$tahun				=htmlspecialchars($conn->real_escape_string($_POST['tahun']));

$periode			=htmlspecialchars($conn->real_escape_string($_POST['periode']));

$rata_rata			=htmlspecialchars($conn->real_escape_string($_POST['rata_rata']));


$connection->edit("UPDATE ikm SET tahun='$tahun', periode='$periode', rata_rata='$rata_rata' WHERE id ='$id'");


?>	