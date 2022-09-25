<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$title				=htmlspecialchars($conn->real_escape_string($_POST['title']));

$start				=htmlspecialchars($conn->real_escape_string($_POST['start']));

$end				=htmlspecialchars($conn->real_escape_string($_POST['end']));

$calendar->EditEvents("UPDATE events SET title='$title', start='$start', end='$end' WHERE id ='$id'");


?>	