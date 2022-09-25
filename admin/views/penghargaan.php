<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Tambah Penghargaan</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita1">
      <thead>
          <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Nama Penghargaan</th>
              <th>Foto</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilPenghargaan->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo tgl_indo(date(substr($data->waktu_upload_penghargaan, 0, 10))) ?></td>
              <td><?php echo $data->nama ?></td>
              <td><?php echo '<img src="../assets/img/penghargaan/'.$data->gambar.'" width="100">' ?></td>
              <td width="200">
                <button type="button" id="tombol_edit_penghargaan" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_penghargaan" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                 <a href="home.php?halaman=penghargaan&action=delete&id=<?=$data->id;?>&filename=<?=$data->gambar;?>" class="btn btn-primary" onclick="return confirm('Yakin Ingin Hapus File Ini?')"><i class="fa fa-trash fa-fw"></i> Delete</a>
              </td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>


    <!-- Modal tambah penghargaan-->

    <div id="input" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Penghargaan</h4>
            </div>
            <div class="modal-body">
              <div class="column-full">
                  <label for="isi">Nama Penghargaan</label>
                  <input class="form-control" name="nama" id="nama" required>
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
        
        $nama      = htmlspecialchars($connect->real_escape_string($_POST['nama']));

        $extensiValid = ['jpg', 'png'];
        $extensi  = explode(".", $_FILES['gambar']['name']);
        $extensiDipakai = strtolower(end($extensi));

         if (!in_array($extensiDipakai, $extensiValid)) {

            echo '<script>alert("Hanya Format JPG dan PNG Yang Diperbolehkan!");
                   window.location="?halaman=penghargaan";
                  </script>';
            
            return false;
            exit;
        }

        $gambar   = "penghargaan-".round(microtime(true)).".".$extensiDipakai;
        $folder   = $_FILES['gambar']['tmp_name'];
        $upload   = move_uploaded_file($folder, $_SERVER['DOCUMENT_ROOT']."/assets/img/penghargaan/".$gambar);

        if ($folder == "") {
          echo '<script>alert("Ukuran File Terlalu Besar!, Max 2 MB");
                  window.location="?halaman=penghargaan";
                 </script>';
            return false;
            exit;
        }

        if ($upload) {

            $masuk = $conn->insertPenghargaan($nama, $gambar);

           if($masuk = 'masuk'){
            echo '<script>alert("Berhasil Tambah Penghargaan");
                  window.location="?halaman=penghargaan";
            </script>';
           }
        }
    }
  ?>

<!-- Modal ubah-->

<!-- Edit penghargaan -->

<div class="modal fade" id="modal_edit_penghargaan" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_penghargaan"></div>
    </div>
</div>

<?php  

  if (@$_GET['action'] == 'delete') {

      $path = '../assets/img/penghargaan/'. $_GET['filename'];

      if (file_exists($path)) {

          unlink($path);
      }

      $delete = $conn->deletePenghargaan($_GET['id']);

      if ($delete == 'terhapus') {
        echo "<script>

          alert('Data Berhasil Dihapus');
          window.location='?halaman=penghargaan';

        </script>";
      }
  }
?>

