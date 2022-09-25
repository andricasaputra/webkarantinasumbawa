<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_berita.php');
  $db = Database::getInstance();
  $conn = new berita($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $conn->tampil($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $penulis =$data->penulis;
    $judul = $data->judul;
    $isi = $data->isi;
    $gambar = $data->gambar;

  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit" enctype="multipart/form-data">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Berita</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="penulis">Penulis</label>
          <input type="text" class="form-control" name="penulis" id="penulis" value="<?=$penulis;?>">
      </div>                
      <div class="column-full">
          <label for="penulis">Judul Tulisan</label>
          <input type="text" class="form-control" name="judul" id="judul" value="<?=$judul;?>">
      </div> 
      <div class="column-full">
          <label for="penulis">Judul Tulisan</label>
          <textarea class="form-control" name="isi" id="isi" rows="20"><?php echo $isi ?></textarea>
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

   url :'controller/proses_edit_berita.php',

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

          window.location.href = '?halaman=berita';

        }

        
      }
   });  
}));
</script>