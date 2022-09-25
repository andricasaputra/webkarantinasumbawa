<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Tampil Laporan Realisasi Anggaran</h2>
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#laporan">Tambah Laporan</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Tahun</th>
              <th>Link</th>
              <th>Waktu Input</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilLaporanRealisasiAnggaran->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->tahun; ?></td>
              <td style="word-wrap: break-word;"><?php echo $data->link;?></td>
              <td style="word-wrap: break-word;"><?php echo $data->waktu_input;?></td>
              <td>
                <button type="button" id="tombol_laporan_realisasi" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#edit_laporan_realisasi_anggaran" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="<?=$data->link;?>" class="btn btn-xs btn-danger" target="_blank"> Lihat File</a>
              </td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>


<div class="modal fade" id="edit_laporan_realisasi_anggaran" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_laporan_realisasi"></div>
    </div>
</div>


<div id="laporan" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah  Realisasi Anggaran</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="penulis">Tahun Laporan</label>
              <input type="number" class="form-control" name="tahun" id="tahun" required>
          </div>   
          <div class="column-full">
              <label for="penulis">Link/ URL</label>
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


      $tahun          = htmlspecialchars($connect->real_escape_string($_POST['tahun']));
      $link           = htmlspecialchars($connect->real_escape_string($_POST['link']));

      if (!empty($link) && !empty($tahun)) {

          $masuk = $keuangan->insertLaporanRealisasiAnggaran($tahun, $link);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil Tambah Laporan");
                window.location="?halaman=laporan_realisasi_anggaran";
          </script>';
         }
      }
  }
?>


