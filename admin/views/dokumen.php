<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Tampil Dokumen-dokumen</h2>
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dokumen">Tambah Dokumen Ke Server</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Dokumen</th>
              <th>Waktu Upload</th>
              <th>Kategori</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilDokumen->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->nama_dokumen ?></td>
              <td><?php echo $data->waktu_upload ?></td>
              <td><?php echo $data->kategori;?></td>
              <td>
                <button type="button" id="tombol_dokumen" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit_dokumen" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="../assets/docs/<?=$data->filenya;?>" class="btn btn-xs btn-success" target="_blank"><i class="fa fa-eye fa-fw"></i> Lihat File</a>
                <a href="home.php?halaman=dokumen&action=delete&id=<?=$data->id;?>&filename=<?=$data->filenya;?>" class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Hapus File Ini?')"><i class="fa fa-trash fa-fw"></i> Delete</a>
              </td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>

<!-- Edit Berita -->

<div class="modal fade" id="modal_edit_dokumen" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_dokumen"></div>
    </div>
</div>


<!-- Modal tambah berita-->

<div id="dokumen" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Dokumen</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="judul">Tanggal</label>
              <input type="hidden" name="docs_server">
              <input type="date" class="form-control" name="waktu_upload" id="waktu_upload" required>
          </div> 
          <div class="column-full">
              <label for="penulis">Nama Dokumen</label>
              <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" required>
          </div>    
          <div class="column-full">
              <label for="penulis">Ketegori</label>
              <select name="kategori" class="form-control">
              	<option value="">Pilih Kategori</option>
              	<option value="ikm">IKM</option>
              	<option value="ipnbk">IPNBK</option>
                <option value="lainnya">Lain - lain</option>
              </select>
          </div>              
          <div class="column-full">
              <label for="gambar">Attatch Dokumen</label>
              <input type="file" class="form-control" name="filenya" id="filenya" required>
          </div>         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="input">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="dokumen_google" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Dokumen</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="judul">Tanggal</label>
              <input type="hidden" name="docs_google">
              <input type="date" class="form-control" name="waktu_upload" id="waktu_upload" required>
          </div> 
          <div class="column-full">
              <label for="penulis">Nama Dokumen</label>
              <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" required>
          </div>    
          <div class="column-full">
              <label for="penulis">Ketegori</label>
              <select name="kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                <option value="ikm">IKM</option>
                <option value="ipnbk">IPNBK</option>
                <option value="ipnbk">Laporan Tahunan</option>
                <option value="lainnya">Lain - lain</option>
              </select>
          </div>              
          <div class="column-full">
              <label for="gambar">Attatch Dokumen</label>
              <input type="text" class="form-control" name="link" id="link" required>
          </div>         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="input_google">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php  

  if (isset($_POST['input'])) {
      
      $waktu_upload  = htmlspecialchars($connect->real_escape_string($_POST['waktu_upload']));
      $nama_dokumen   = htmlspecialchars($connect->real_escape_string($_POST['nama_dokumen']));
      $kategori   = htmlspecialchars($connect->real_escape_string($_POST['kategori']));

      $extensiValid = ['pdf', 'docx', 'xlsx'];
      $extensi  = explode(".", $_FILES['filenya']['name']);
      $extensiDipakai = strtolower(end($extensi));

      if (!in_array($extensiDipakai, $extensiValid)) {
            
            echo '<script>alert("Format Harus PDF, MS Word, Atau MS Excel Bro")</script>';
            return false;
            exit;
      }
      
      $namaFile = $nama_dokumen."-".round(microtime(true)).".".$extensiDipakai;
      $folder   = $_FILES['filenya']['tmp_name'];
      $upload   = move_uploaded_file($folder, $_SERVER['DOCUMENT_ROOT']."/assets/docs/".$namaFile);


      if ($upload) {



          $masuk = $conn->insertDokumen($waktu_upload, $nama_dokumen, $kategori, $namaFile);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil Tambah Dokumen");
                window.location="?halaman=dokumen";
          </script>';
         }
      }
  } 

  if (@$_GET['action'] == 'delete') {

      $path = '../assets/docs/'. $_GET['filename'];

      if (file_exists($path)) {

          unlink($path);
      }

      $delete = $conn->deleteDokumen($_GET['id']);

      if ($delete == 'terhapus') {
        echo "<script>

          alert('Data Berhasil Dihapus');
          window.location='?halaman=dokumen';

        </script>";
      }
  }
?>


