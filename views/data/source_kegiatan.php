
<?php

  require_once('../../admin/config/database.php');
  require_once('../../admin/classes/class_tarif.php');
  $db = Database::getInstance();
  $tarif = new tarif($db);

  @$komoditas = $_POST['komoditas'];


   $hasil = $tarif->selectKomoditas($komoditas);


   $json = [];
   
   while($row = $hasil->fetch_assoc()){
        $json[$row['kegiatan']] = $row['komoditas'];
       	/*sort($json);*/
   }


   echo json_encode($json);
?>