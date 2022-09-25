<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                  <h2>Rencana Kerja Tahunan</h2>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Tambah Info Rencana Kerja Tahunan</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita" style="table-layout: fixed;">
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
              while($data = $tampilRencanaKerja->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo 'Rencana Kerja Tahun '.$data->tahun ?></td>
              <td style="word-wrap: break-word;"><?php echo $data->link; ?></td>
              <td><?php echo tgl_indo(date($data->waktu_input)); ?></td>
              <td><button type="button" id="tombol_rencana_kerja" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit_rencana_kerja" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="<?=$data->link;?>" class="btn btn-xs btn-danger" target="_blank">Lihat File</a>
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

<div class="modal fade" id="modal_edit_rencana_kerja" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_rencana_kerja"></div>
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
              <h4 class="modal-title">Tambah Neraca Keuangan</h4>
            </div>
            <div class="modal-body">
              <div class="column-full">
                  <label for="penulis">Tahun</label>
                  <input type="number" class="form-control" name="tahun" id="tahun" required>
              </div>                  
              <div class="column-full">
                  <label for="judul">LINK URL</label>
                  <input type="text" class="form-control" name="link" id="link" required placeholder="Copy dan Paste Link dari Aplikasi SIDADO Disini">
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

            $masuk = $conn->InsertRencanaKerja($tahun, $link);

           if($masuk = 'masuk'){
            echo '<script>alert("Berahsil Tambah Neraca Keuangan Tahun '.$tahun.'");
                  window.location="?halaman=rencana_kerja";
            </script>';
           }
        }
    }
  ?>

