<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_berita.php');
  $db = Database::getInstance();
  $keuangan = new berita($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $keuangan->pnbp($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $tahun =$data->tahun;
    $total = $data->total;
    $waktu_input = $data->waktu_input;


  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_pnbp">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Data PNBP</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="tahun">Tahun</label>
          <input type="text" class="form-control" name="tahun" id="tahun" value="<?=$tahun;?>">
      </div>                
      <div class="column-full">
          <label for="penulis">Total</label>
          <input type="text" class="form-control" name="total" id="total" value="<?=$total;?>">
      </div>      
      <div class="column-full">
          <label for="penulis">Per Tanggal</label>
          <input type="date" class="form-control" name="waktu_input" id="waktu_input" value="<?=$waktu_input;?>">
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

   url :'controller/proses_edit_pnbp.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=pnbp';

      }
   });  
}));
</script>