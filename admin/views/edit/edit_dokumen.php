<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_berita.php');
  $db = Database::getInstance();
  $keuangan = new berita($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $keuangan->data_dokumen($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $nama_dokumen =$data->nama_dokumen;
    $waktu_upload =$data->waktu_upload;
    $kategori = $data->kategori;
    $filenya = $data->filenya;


  }

?>


<!-- Modal content-->
<div class="modal-content">
  <form id="form_edit_dokumen" action="" method="post" enctype="multipart/form-data">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Tambah Data IKM</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <label for="judul">Nama Dokumen</label>
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" value="<?=$nama_dokumen;?>">
      </div> 
      <div class="column-full">
          <label for="penulis">Waktu Upload</label>
          <input type="date" class="form-control" name="waktu_upload" id="waktu_upload" value="<?=$waktu_upload;?>">
      </div>                
      <div class="column-full">
          <label for="penulis">Ketegori</label>
          <select name="kategori" class="form-control">
            <option value="<?=$kategori;?>"><?=ucfirst($kategori);?></option>
            <option value="ikm">IKM</option>
            <option value="ipnbk">IPNBK</option>
            <option value="lainnya">Lain - lain</option>
          </select>
      </div> 
      <div class="column-full">
          <label for="judul">Ubah File</label>
          <input type="hidden" name="file" id="file" value="<?=$filenya;?>">
          <input type="file" class="form-control" name="filenya" id="filenya">
      </div>   
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit_dokumen").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_dokumen.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=dokumen';

      }
   });  
}));
</script>