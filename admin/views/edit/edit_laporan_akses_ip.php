<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_berita.php');
  $db = Database::getInstance();
  $berita = new berita($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $berita->laporanAksesIp($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $jenis_laporan =$data->jenis_laporan;
    $nama_laporan =$data->nama_laporan;
    $tahun =$data->tahun;
    $link = $data->link;


  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_laporan_akses_ip">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Data Regulasi Informasi Publik</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="nama_regulasi">Nama Info</label>
          <input type="text" class="form-control" name="nama_laporan" id="nama_laporan" value="<?=$nama_laporan;?>">
      </div>    
      <div class="column-full">
          <label for="penulis">Jenis Laporan</label>
          <select  class="form-control" name="jenis_laporan" id="jenis_laporan" required>
            <option value="<?=$jenis_laporan?>">Laporan Tahunan</option>
          </select>
      </div>   
      <div class="column-full">
          <label for="penulis">Tahun</label>
          <input type="text" class="form-control" name="tahun" id="tahun" value="<?=$tahun;?>">
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
  $("#form_edit_laporan_akses_ip").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_laporan_akses_ip.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=laporan_akses_ip';

      }
   });  
}));
</script>