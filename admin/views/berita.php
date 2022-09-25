<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Tambah Berita</button>
                  <a href="../views/socials/facebook/save_berita.php" class="btn btn-primary"><i class="fa fa-facebook fa-fw"></i> Ambil Dari Facebook</a>
                  <a href="../views/socials/facebook/update_gambar.php" class="btn btn-success"><i class="fa fa-facebook fa-fw"></i> Update Gambar Dari Facebook</a>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita1">
      <thead>
          <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Penulis</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Foto</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampil->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo tgl_indo(date(substr($data->waktu_upload_berita, 0, 10))) ?></td>
              <td><?php echo $data->penulis ?></td>
              <td><?php echo $data->judul; ?></td>
              <td><?php echo html_entity_decode($data->isi); ?></td>
              <?php if (! is_null($data->id_facebook)) { ?>
               <td><?php echo'<img src="'.$data->gambar.'" width="100">'?></td>
              <?php } else { ?>
                <td><?php echo '<img src="../assets/img/berita/'.$data->gambar.'" width="100">' ?></td>
              <?php } ?>
              <td width="200">
                <button type="button" id="tombol_edit" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                 <a href="home.php?halaman=berita&action=delete&id=<?=$data->id;?>&filename=<?=$data->gambar;?>" class="btn btn-primary" onclick="return confirm('Yakin Ingin Hapus File Ini?')"><i class="fa fa-trash fa-fw"></i> Delete</a>
                 <?php  

                  if ($data->tampil == 'Ya') {
                    ?>
                      <a href="#" class="btn btn-success pilih" id="pilihBerita" data-toggle="tooltip" title="Click Untuk Sembunyikan Berita Ini" data-id="<?=$data->id;?>" data-tampil="<?=$data->tampil;?>"><i class="fa fa-eye"></i></a>
                    <?php
                  }else{
                    ?>
                      <a href="#" class="btn btn-danger pilih"  id="pilihBerita" data-toggle="tooltip" title="Click Untuk Menampilkan Berita Ini" data-id="<?=$data->id;?>" data-tampil="<?=$data->tampil;?>"><i class="fa fa-eye-slash"></i></a>
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

    <div id="input" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Berita</h4>
            </div>
            <div class="modal-body">
              <div class="column-full">
                  <label for="penulis">Penulis</label>
                  <input type="text" class="form-control" name="penulis" id="penulis" required>
              </div>                
              <div class="column-full">
                  <label for="judul">Judul Tulisan</label>
                  <input type="text" class="form-control" name="judul" id="judul" required>
              </div> 
              <div class="column-full">
                  <label for="isi">Isi Tulisan</label>
                  <textarea class="form-control ckeditor" name="isi" id="isi" rows="20" required></textarea>
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

        ini_set('display_errors', true);
        error_reporting(E_ALL);
        
        $penulis  = htmlspecialchars($connect->real_escape_string($_POST['penulis']));
        $judul    = htmlspecialchars($connect->real_escape_string($_POST['judul']));
        $isi      = htmlspecialchars($connect->real_escape_string($_POST['isi']));

        $extensiValid = ['jpg', 'png', 'jpeg'];
        $extensi  = explode(".", $_FILES['gambar']['name']);
        $extensiDipakai = strtolower(end($extensi));

         if (!in_array($extensiDipakai, $extensiValid)) {

            echo '<script>alert("Hanya Format JPG dan PNG Yang Diperbolehkan!");
                   window.location="?halaman=berita";
                  </script>';
            
            return false;
            exit;
        }

        $gambar   = "web-".round(microtime(true)).".".$extensiDipakai;
        $folder   = $_FILES['gambar']['tmp_name'];
        $target   = realpath(dirname(getcwd())) . DIRECTORY_SEPARATOR ."assets". DIRECTORY_SEPARATOR."img". DIRECTORY_SEPARATOR."berita" . DIRECTORY_SEPARATOR;

        $upload = move_uploaded_file($folder, "$target/$gambar");

        if ($upload) {

            $masuk = $conn->insert($penulis, $judul, $isi, $gambar);

           if($masuk = 'masuk'){
            echo '<script>alert("Berhasil Tambah Berita");
                  window.location="?halaman=berita";
            </script>';
           }
        }
    }
  ?>

<!-- Modal ubah-->

<!-- Edit Berita -->

<div class="modal fade" id="modal_edit" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit"></div>
    </div>
</div>

<?php  

  if (@$_GET['action'] == 'delete') {

      $path = '../assets/img/berita/'. $_GET['filename'];

      if (file_exists($path)) {

          unlink($path);
      }

      $delete = $conn->deleteBerita($_GET['id']);

      if ($delete == 'terhapus') {
        echo "<script>

          alert('Data Berhasil Dihapus');
          window.location='?halaman=berita';

        </script>";
      }
  }
?>

<script src="./assets/ckeditor/ckeditor.js"></script>
