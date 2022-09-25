<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Tampil Laporan Kinerja</h2>
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#laporan">Tambah Laporan Kinerja</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Jenis Laporan</th>
              <th>Nama Laporan</th>
              <th>Tahun</th>
              <th>Link</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilLaporanKinerja->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo ucwords(str_replace("_", " ",$data->jenis_laporan)); ?></td>
              <td><?php echo $data->nama_laporan; ?></td>
              <td><?php echo $data->tahun;?></td>
              <td style="word-wrap: break-word;"><?php echo $data->link;?></td>
              <td><button type="button" id="tombol_laporan_kinerja" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit_laporan_kinerja" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="<?=$data->link?>" class="btn btn-xs btn-success" target="_blank"><i class="fa fa-eye fa-fw"></i> Lihat File</a>
                 <a href="?halaman=laporan_kinerja&act=del&id=<?=$data->id;?>" class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Hapus Data Ini?')"><i class="fa fa-trash"></i> Hapus</a>
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

<div class="modal fade" id="modal_edit_laporan_kinerja" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_laporan_kinerja"></div>
    </div>
</div>

<div id="laporan" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Laporan Kinerja</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="judul">Jenis Laporan</label>
              <select  class="form-control" name="jenis_laporan" id="jenis_laporan" required>
                <option value="laporan_kinerja">Laporan Kinerja</option>
              </select>
          </div> 
          <div class="column-full">
              <label for="penulis">Nama Laporan</label>
              <input type="text" class="form-control" name="nama_laporan" id="nama_laporan" required>
          </div>    
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

      
      $jenis_laporan  = htmlspecialchars($connect->real_escape_string($_POST['jenis_laporan']));
      $nama_laporan   = htmlspecialchars($connect->real_escape_string($_POST['nama_laporan']));
      $tahun          = htmlspecialchars($connect->real_escape_string($_POST['tahun']));
      $link           = htmlspecialchars($connect->real_escape_string($_POST['link']));



      if (!empty($link) && !empty($nama_laporan)) {

          /*Insert Laporan Lewat Class Berita Bro*/

          $masuk = $conn->insertLaporan($jenis_laporan, $nama_laporan, $tahun, $link);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil Tambah'.' '.$nama_laporan.'");
                window.location="?halaman=laporan_kinerja";
          </script>';
         }
      }
  }

  if (@$_GET['act'] == 'del') {

    $id = $_GET['id'];

    $hapus = $conn->DeleteLaporanKinerja($id);

    if ($hapus == 'terhapus') {
        echo '<script>alert("Agenda Berhasil Dihapus");
        window.location="?halaman=laporan_kinerja";
        </script>';
    }else{
      echo '<script>alert("Agenda Gagal Dihapus");window.location="?halaman=laporan_kinerja";</script>';
    }
  }
?>

