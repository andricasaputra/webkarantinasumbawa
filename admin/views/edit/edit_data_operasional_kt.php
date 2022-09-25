<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_berita.php');
  $db = Database::getInstance();
  $conn = new berita($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $conn->data_operasional_kt($id);
    $data = $tampil->fetch_object();

    $id         = $data->id;
    $ekspor     = $data->ekspor;
    $impor      = $data->impor;
    $domas      = $data->domas;
    $dokel      = $data->dokel;
    $tahun      = $data->tahun;

  }

?>



<div class="modal-content">
  <form id="form_edit">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Data Operasional Karantina Tumbuhan</h4>
    </div>
    <div class="modal-body">
        <div class="column-full">
            <label for="penulis">Tahun</label>
            <input type="hidden" name="id" id="id" value="<?=$id?>" >
            <input type="number" class="form-control" name="tahun" id="tahun" value="<?=$tahun;?>">
        </div> 
        <div class="column-full">
            <label for="penulis">Per Tanggal</label>
            <input type="date" class="form-control" name="waktu_input" id="waktu_input" value="<?=date('Y-m-d');?>">
        </div>                
        <div class="column-full">
            <label for="ekspor">Ekpor</label>
            <input type="text" class="form-control" name="ekspor" id="ekspor" value="<?=$ekspor;?>" >
        </div>    
        <div class="column-full">
            <label for="impor">Impor</label>
            <input type="text" class="form-control" name="impor" id="impor" value="<?=$impor;?>" >
        </div> 
        <div class="column-full">
            <label for="domas">Domestik Masuk</label>
            <input type="text" class="form-control" name="domas" id="domas" value="<?=$domas;?>" >
        </div> 
        <div class="column-full">
            <label for="dokel">Domestik Keluar</label>
            <input type="text" class="form-control" name="dokel" id="dokel" value="<?=$dokel;?>" >
        </div>              
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_data_operasioanl_kt.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){

        alert('data berhasil diubah');

          window.location.href = '?halaman=data_operasional_kt';

      }
   });  
}));
</script>