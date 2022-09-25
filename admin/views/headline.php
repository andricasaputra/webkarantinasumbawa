<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Tampil Headline</h2>

                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#headline">Tambah Headline</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Judul 1</th>
              <th>Judul 2</th>
              <th>Gambar</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilHeadline->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->judul1 ?></td>
              <td><?php echo $data->judul2; ?></td>
              <td><?php echo '<img src="../assets/img/headline/'.$data->gambar.'" width="100">' ?></td>
              <td id="tempat_tombol">
                <button type="button" id="tombol_headline" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_headline" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="home.php?halaman=headline&action=delete&id=<?=$data->id;?>&filename=<?=$data->gambar;?>" class="btn btn-primary" onclick="return confirm('Yakin Ingin Hapus File Ini?')"><i class="fa fa-trash fa-fw"></i> Delete</a>
                <?php  

                  if ($data->tampil == 'Ya') {
                    ?>
                      <a href="#" class="btn btn-success pilih" id="pilihHeadline" data-toggle="tooltip" title="Click Untuk Sembunyikan Headline Ini" data-id="<?=$data->id;?>" data-tampil="<?=$data->tampil;?>"><i class="fa fa-eye"></i></a>
                    <?php
                  }else{
                    ?>
                      <a href="#" class="btn btn-danger pilih" id="pilihHeadline" data-toggle="tooltip" title="Click Untuk Menampilkan Headline Ini" data-id="<?=$data->id;?>" data-tampil="<?=$data->tampil;?>"><i class="fa fa-eye-slash"></i></a>
                    <?php

                  }

                ?>
              </td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>

<!-- Modal tambah berita-->

<div id="headline" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Tampilan</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="judul">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" id="tanggal" required>
          </div> 
          <div class="column-full">
              <label for="penulis">Judul 1</label>
              <input type="text" class="form-control" name="judul1" id="judul1">
          </div>                
          <div class="column-full">
              <label for="judul">Judul 2</label>
              <input type="text" class="form-control" name="judul2" id="judul2">
          </div>   
          <div class="column-full">
              <label for="gambar">Foto</label>
              <input type="file" class="form-control" name="gambar" id="gambar" required>
          </div>         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="input">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php  

  if (isset($_POST['input'])) {
      
      $tanggal  = htmlspecialchars($connect->real_escape_string($_POST['tanggal']));
      $judul1   = htmlspecialchars($connect->real_escape_string($_POST['judul1']));
      $judul2   = htmlspecialchars($connect->real_escape_string($_POST['judul2']));

      $extensiValid = ['jpg', 'png'];
      $extensi  = explode(".", $_FILES['gambar']['name']);
      $extensiDipakai = strtolower(end($extensi));

       if (!in_array($extensiDipakai, $extensiValid)) {


          echo '<script>alert("Hanya Format JPG dan PNG Yang Diperbolehkan!");
                window.location="?halaman=headline";
          </script>';

          return false;
          exit;
      }


      $gambar   = "headline-".round(microtime(true)).".".$extensiDipakai;
      $folder   = $_FILES['gambar']['tmp_name'];
      $upload   = move_uploaded_file($folder, $_SERVER['DOCUMENT_ROOT']."/assets/img/headline/".$gambar);

      if ($folder == "") {
        echo '<script>alert("Ukuran File Terlalu Besar!, Max 2 MB");
                window.location="?halaman=headline";
          </script>';
          return false;
          exit;
      }


      if ($upload) {

          $masuk = $conn->insertHeadline($tanggal, $judul1, $judul2, $gambar);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil Tambah Headline");
                window.location="?halaman=headline";
          </script>';

         }
      }
  }
?>

<!-- Modal ubah-->

<!-- Edit Berita -->

<div class="modal fade" id="modal_edit_headline" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_headline"></div>
    </div>
</div>



<?php  

  if (@$_GET['action'] == 'delete') {

      $path = '../assets/img/headline/'. $_GET['filename'];

      if (file_exists($path)) {

          unlink($path);
      }

      $delete = $conn->deleteHeadline($_GET['id']);

      if ($delete == 'terhapus') {
        echo "<script>

          alert('Data Berhasil Dihapus');
          window.location='?halaman=headline';

        </script>";
      }
  }
?>
