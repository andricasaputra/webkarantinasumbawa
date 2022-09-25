<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                  <h2>Daftar Infromasi Serta Merta</h2>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Tambah Informasi Serta Merta</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita" style="table-layout: fixed; width: 100%">
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
              while($data = $tampilInfoSertaMerta->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->nama_info ?></td>
              <td style="word-wrap: break-word"><?php echo $data->link; ?></td>
              <td><?php echo tgl_indo(date($data->waktu_input)); ?></td>
              <td><button type="button" id="tombol_edit_info_serta_merta" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_info_serta_merta" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="?halaman=ppid&ppid=serta_merta&act=del&id=<?=$data->id;?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Hapus Data Ini?')"><i class="fa fa-trash"></i> Hapus</a>
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

<div class="modal fade" id="modal_edit_info_serta_merta" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_info_serta_merta"></div>
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
              <h4 class="modal-title">Tambah Informasi SertaMerta</h4>
            </div>
            <div class="modal-body">
              <div class="column-full">
                  <label for="penulis">Nama Informasi</label>
                  <input type="text" class="form-control" name="nama_info" id="nama_info" required>
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
        
        $nama_info  = htmlspecialchars($connect->real_escape_string($_POST['nama_info']));
        $link       = htmlspecialchars($connect->real_escape_string($_POST['link']));
        
        if (!empty($nama_info)) {

            $masuk = $ppid->insertInfoSertaMerta($nama_info, $link);

           if($masuk = 'masuk'){
            echo '<script>alert("Berahsil Tambah Informasi Serta Merta");
                  window.location="?halaman=ppid&ppid=serta_merta";
            </script>';
           }
        }
    }
  ?>

<?php  
  if (@$_GET['act'] == 'del') {
        
        $id = $_GET['id'];

       $hapus = $ppid->DeleteInfoSertaMerta($id);

       if ($hapus == 'terhapus') {
            
            echo '<script>alert("Data Berhasil Dihapus");
                window.location="?halaman=ppid&ppid=serta_merta"
            </script>';

       }else{

        echo '<script>alert("Data Gagal Dihapus");
                window.location="?halaman=ppid&ppid=serta_merta";
            </script>';

       }

  }
?>
