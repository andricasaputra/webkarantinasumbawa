<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_ppid.php');
  $db = Database::getInstance();
  $ppid = new ppid($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $ppid->tampil_info_berkala($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $nama_info =$data->nama_info;
    $kategori = $data->kategori;
    $kategori2 = str_replace("_", " ", $data->kategori);
    $link = $data->link;


  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_neraca_keuangan">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Informasi Berkala</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="nama_info">Nama Info</label>
          <input type="text" class="form-control" name="nama_info" id="nama_info" value="<?=$nama_info;?>">
      </div>               
      <div class="column-full">
          <label for="penulis">Kategori</label>
          <select class="form-control" name="kategori" id="kategori" required>
            <option value="<?=$kategori;?>"><?php echo ucwords($kategori2); ?></option>
            <option value="profil">Profil SKP</option>
            <option value="kegiatan_kinerja">Kegiatan Dan Kinerja SKP</option>
            <option value="dokumen_kinerja">Dokumen / Laporan Kinerja</option>
            <option value="ikm">IKM</option>
            <option value="keuangan">Keuangan</option>
            <option value="akses_informasi_publik">Akses Informasi Publik</option>
          </select>
      </div>
      <div class="column-full">
          <label for="penulis">Link</label>
          <input type="text" class="form-control" name="link" id="link" value="<?=$link;?>">
      </div>           
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit_neraca_keuangan").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_info_berkala.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=ppid&ppid=berkala';

      }
   });  
}));
</script>