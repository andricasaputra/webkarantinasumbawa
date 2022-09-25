<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_berita.php');
  $db = Database::getInstance();
  $conn = new berita($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $conn->tampilHeadlineAdmin($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $judul1 =$data->judul1;
    $judul2 = $data->judul2;
    $gambar = $data->gambar;

  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit" enctype="multipart/form-data">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Headline</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="penulis">Judul 1</label>
          <input type="text" class="form-control" name="judul1" id="judul1" value="<?=$judul1;?>">
      </div>                
      <div class="column-full">
          <label for="penulis">Judul 2</label>
          <input type="text" class="form-control" name="judul2" id="judul2" value="<?=$judul2;?>">
      </div> 
      <div class="column-full">
          <label for="penulis">Ubah Gambar</label>
          <input type="hidden" name="gbr" id="gbr" value="<?=$gambar;?>">
          <input type="file" name="gambar" id="gambar" value="<?=$gambar;?>">
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

   url :'controller/proses_edit_headline.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){

        if (data == 'ekstensi') {

          alert('Hanya File Bertipe JPG dan PNG yang Diperbolehkan!');

          return false;

        }else if(data == 'ukuran'){

          alert('Ukuran File Terlalu Besar!, Max 2 MB');

          return false;

        }else{

          alert('Data Berhasil Diubah');

          window.location.href = '?halaman=headline';

        }

      }
   });  
}));
</script>