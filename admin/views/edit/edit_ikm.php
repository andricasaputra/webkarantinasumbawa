<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_berita.php');
  $db = Database::getInstance();
  $keuangan = new berita($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $keuangan->ikm($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $tahun =$data->tahun;
    $periode =$data->periode;
    $rata_rata = $data->rata_rata;


  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_pnbp">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Data IKM</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="tahun">Tahun</label>
          <input type="text" class="form-control" name="tahun" id="tahun" value="<?=$tahun;?>">
      </div>     
      <div class="column-full">
          <label for="penulis">Periode</label>
          <input type="text" class="form-control" name="periode" id="periode" value="<?=$periode;?>">
      </div>             
      <div class="column-full">
          <label for="penulis">Rata - Rata (tidak perlu tambahkan %)</label>
          <input type="text" class="form-control" name="rata_rata" id="rata_rata" value="<?=$rata_rata;?>">
      </div>           
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit_pnbp").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_ikm.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=ikm';

      }
   });  
}));
</script>