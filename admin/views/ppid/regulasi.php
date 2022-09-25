<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                  <h2>Daftar Regulasi Keterbukaan Informasi dan Dokumentasi</h2>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Tambah Regulasi</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Informasi</th>
              <th>URL</th>
              <th>Waktu Input</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              $tampilRegulasi = $ppid->tampil_regulasi();
              while($data = $tampilRegulasi->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td width="450"><?php echo $data->nama_regulasi; ?></td>
              <td><?php echo $data->link; ?></td>
              <td><?php echo tgl_indo(date($data->waktu_input)); ?></td>
              <td width="250"><button type="button" id="tombol_edit_regulasi" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit_regulasi" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="<?=$data->link;?>" class="btn btn-xs btn-success" target="_blank"><i class="fa fa-eye"></i> Lihat File</a>
                <a href="?halaman=ppid&ppid=regulasi&act=del&id=<?=$data->id;?>" class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Hapus Data Ini?')"><i class="fa fa-trash"></i> Hapus</a>
              </td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>

<!-- Modal ubah-->

<!-- Edit Berita -->

<div class="modal fade" id="modal_edit_regulasi" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_regulasi"></div>
    </div>
</div>

    <!-- Modal tambah berita-->

    <div id="input" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Regulasi/ Peraturan</h4>
            </div>
            <div class="modal-body">
              <div class="column-full">
                  <label for="penulis">Nama Regulasi/ Peraturan</label>
                  <input type="text" class="form-control" name="nama_regulasi" id="nama_regulasi" required>
              </div>                 
              <div class="column-full">
                  <label for="judul">LINK URL</label>
                  <input type="text" class="form-control" name="link" id="link" required>
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
        
        $nama_regulasi  = htmlspecialchars($connect->real_escape_string($_POST['nama_regulasi']));
        $link       	= htmlspecialchars($connect->real_escape_string($_POST['link']));
        
        if (!empty($nama_regulasi)) {

            $masuk = $ppid->insertRegulasi($nama_regulasi, $link);

           if($masuk = 'masuk'){
            echo '<script>alert("Berahsil Tambah Regulasi");
                  window.location="?halaman=ppid&ppid=regulasi";
            </script>';
           }
        }
    }
  ?>

<?php  
  if (@$_GET['act'] == 'del') {
        
        $id = $_GET['id'];

       $hapus = $ppid->DeleteInfoRegulasi($id);

       if ($hapus == 'terhapus') {
            
            echo '<script>alert("Data Berhasil Dihapus");
                window.location="?halaman=ppid&ppid=regulasi"
            </script>';

       }else{

        echo '<script>alert("Data Gagal Dihapus");
                window.location="?halaman=ppid&ppid=regulasi";
            </script>';

       }

  }
?>