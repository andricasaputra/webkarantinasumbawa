<?php

  require_once('../../admin/config/database.php');
  require_once('../../admin/classes/class_tarif.php');
  $db = Database::getInstance();
  $tarif = new tarif($db);

  @$kategori = $_POST['kategori'];

  @$kegiatan = $_POST['kegiatan'];

  @$komoditas = $_POST['komoditas'];

  @$jumlah = $_POST['jumlah'];

 $hasil = $tarif->hitungTarif($kategori, $kegiatan, $komoditas);

 $jasa = '';
 while($row = $hasil->fetch_assoc()){ 


    $jasa = $row["tarif"];	
      
  }

  $sertifikat = 5000;
  $biayaPemeriksaan = $tarif->rupiah($jasa * $jumlah);
  $total = ($jasa * $jumlah ) + $sertifikat;
  $totaljasa = $tarif->rupiah($total);
  $jasa2 = $tarif->rupiah($jasa);

  if ($komoditas == 'Sapi' || $komoditas ==  'Ayam' || $komoditas == 'DOC' || $komoditas == 'Kucing' || $komoditas == 'Kuda (Hewan Kesayangan)' || $komoditas == 'Kuda (Potong)') {

    $satuan = 'per ekor';
    $satuan2 = 'ekor';

  }else if($komoditas == 'Susu' || $komoditas == 'Madu' || $komoditas == 'Telur' || $komoditas == 'Buah-Buahan' || $komoditas == 'Umbi - Umbian (Bawang Merah, Ubi)/ Rimpang (Jahe Dll)'  || $komoditas == 'Benih Sayuran'){

    $satuan = 'per kilogram';
    $satuan2 = 'kilogram';

  }else if($komoditas == 'Jagung'){

    $satuan = 'per ton';
    $satuan2 = 'ton';

  }else if($komoditas == 'Bunga Potong'){

    $satuan = 'per batang';
    $satuan2 = 'batang';

  }

  $arr = array(

    "sertifikat" => $tarif->rupiah($sertifikat),
    "biayaperiksa" => $biayaPemeriksaan,
    "jasa" => $jasa2,
    "total" => $totaljasa,
    "jumlah" => $jumlah,
    "satuan" => $satuan,
    "satuan2" => $satuan2

  );
  echo json_encode($arr);

?>