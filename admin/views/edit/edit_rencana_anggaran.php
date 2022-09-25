<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_keuangan.php');
  $db = Database::getInstance();
  $keuangan = new keuangan($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $keuangan->TampilRencanaAnggaran($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $tahun =$data->tahun;
    $link = $data->link;


  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_pengadaan">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Rencana Anggaran</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="tahun">Tahun</label>
          <input type="text" class="form-control" name="tahun" id="tahun" value="<?=$tahun;?>">
      </div>                
      <div class="column-full">
          <label for="penulis">Link/ URL</label>
          <input type="text" class="form-control" name="link" id="link" value="<?=$link;?>">
      </div>               
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit_pengadaan").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_rencana_anggaran.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=rencana_anggaran';

      }
   });  
}));
</script>