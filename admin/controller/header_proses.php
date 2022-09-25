<?php  
require_once('../config/database.php');
require_once('../classes/class_berita.php');
require_once('../classes/class_calendar.php');
require_once('../classes/class_ppid.php');
require_once('../classes/class_keuangan.php');

$db = Database::getInstance();
$conn = $db->getConnection();
$connection = new berita($db);
$calendar = new calendar($db);
$ppid = new ppid($db);
$keuangan = new keuangan($db);
?>