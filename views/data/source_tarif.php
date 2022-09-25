
<?php

  require_once('../../admin/config/database.php');
  require_once('../../admin/classes/class_tarif.php');
  $db = Database::getInstance();
  $tarif = new tarif($db);

  @$data = $_POST['data'];

   $hasil = $tarif->selectKomoditas($data["kategori"], $data["kegiatan"]);

   $json = array();
   while($row = $hasil->fetch_assoc()){ 


      $json[] = ucwords($row["komoditas"]);	
      
  }

  echo json_encode($json);

?>