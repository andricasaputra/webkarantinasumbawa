<?php  

require_once('admin/config/database.php');
require_once('admin/classes/class_berita.php');
require_once('admin/classes/class_ppid.php');
require_once('admin/classes/class_paginator.php');
require_once('admin/classes/class_calendar.php');
require_once('admin/classes/class_keuangan.php');
require_once('admin/classes/class_tarif.php');
require_once('admin/classes/tgl_indo.php');
require_once('admin/classes/class_ikm.php');

$db = Database::getInstance();
$connect = $db->getConnection();
$conn = new berita($db);
$ppid = new ppid($db);
$calendar = new calendar($db);
$keuangan = new keuangan($db);
$ikm = new ikm();

/*Calendar*/
$tampilCalendar = $calendar->TampilCalendar();
$events = array();
while($data = $tampilCalendar->fetch_assoc()){

  $events[] = $data;
  
}

/*Statistik*/
$tampilDataKeuangan= $conn->data_keuangan();

$jsonKeu = array();
while($data = $tampilDataKeuangan->fetch_object()):
    $sampai = tgl_indo(date($data->waktu_input));
    $jsonKeu[] = [
      $data->tahun,
      $data->realisasi_anggaran,
      $data->waktu_input
    ];
endwhile;

require_once('templates/header_web.php');

?>