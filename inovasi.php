<?php  

if (isset($_GET['e-office'])) {
	include_once('views/inovasi/e-office.php');
}elseif (isset($_GET['e-ikm'])) {
	include_once('views/inovasi/e-ikm.php');
}elseif (isset($_GET['sile'])) {
	include_once('views/inovasi/sile.php');
}