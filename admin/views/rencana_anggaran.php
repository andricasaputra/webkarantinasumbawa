<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                  <h2>Rencana Anggaran</h2>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Tambah Info Rencana Anggaran</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita" style="table-layout: fixed; width: 100%">
      <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Link/ URL</th>
              <th>Waktu Input</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilRencanaAnggaran->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo 'Rencana Kegiatan & Anggaran '.$data->tahun ?></td>
              <td style="word-wrap: break-word"><?php echo $data->link; ?></td>
              <td><?php echo tgl_indo(date($data->waktu_input)); ?></td>
              <td>
                <button type="button" id="tombol_edit_rencana_anggaran" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit_rencana_anggaran" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="<?=$data->link;?>" class="btn btn-xs btn-success" target="_blank"><i class="fa fa-eye fa-fw"></i> Lihat File</a>
                <a href="?halaman=Rencana Anggaran&act=del&id=<?=$data->id;?>" class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Hapus Data Ini?')"><i class="fa fa-trash"></i> Hapus</a>
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
              <h4 class="modal-title">Tambah Info Rencana Anggaran</h4>
            </div>
            <div class="modal-body">
              <div class="column-full">
                  <label for="penulis">Tahun</label>
                  <input type="number" class="form-control" name="tahun" id="tahun" required>
              </div>                  
              <div class="column-full">
                  <label for="judul">LINK URL</label>
                  <input type="text" class="form-control" name="link" id="link" required placeholder="Copy dan Paste Link/ URL Disini">
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
        
        $tahun      = htmlspecialchars($connect->real_escape_string($_POST['tahun']));
        $link       = htmlspecialchars($connect->real_escape_string($_POST['link']));
        
        if (!empty($tahun)) {

            $masuk = $keuangan->InsertRencanaAnggaran($tahun, $link);

           if($masuk = 'masuk'){
            echo '<script>alert("Berhasil Tambah Rencana Anggaran '.$tahun.'");
                  window.location="?halaman=rencana_anggaran";
            </script>';
           }
        }
    }
  ?>

<!-- Modal ubah-->

<!-- Edit Berita -->

<div class="modal fade" id="modal_edit_rencana_anggaran" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_rencana_anggaran"></div>
    </div>
</div>

<?php  
  if (@$_GET['act'] == 'del') {
        
        $id = $_GET['id'];

       $hapus = $keuangan->DeleteRencanaAnggaran($id);

       if ($hapus == 'terhapus') {
            
            echo '<script>alert("Data Berhasil Dihapus");
                window.location="?halaman=Rencana Anggaran"
            </script>';

       }else{

        echo '<script>alert("Data Gagal Dihapus");
                window.location="?halaman=Rencana Anggaran";
            </script>';

       }

  }
?>
