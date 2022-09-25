<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman RKA - KL</h2>
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#laporan">Tambah RKA - KL</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Tahun</th>
              <th>Revisi</th>
              <th>Link</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilRka_kl->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
               <td><?php echo $data->tahun;?></td>
              <td><?php echo $data->revisi; ?></td>
              <td style="word-wrap: break-word;"><?php echo $data->link;?></td>
              <td><button type="button" id="tombol_rka_kl" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_rka_kl" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button></td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>

<!-- Modal ubah-->
<div class="modal fade" id="modal_edit_rka_kl" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_rka_kl"></div>
    </div>
</div>


<div id="laporan" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Iinfo DIPA</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="penulis">Tahun</label>
              <input type="number" class="form-control" name="tahun" id="tahun" required>
          </div> 
          <div class="column-full">
              <label for="judul">Revisi</label>
              <select  class="form-control" name="revisi" id="revisi" required>
                <option disabled selected>-Revisi Ke-</option>
                <option value="awal">Awal</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
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
      $revisi         = htmlspecialchars($connect->real_escape_string($_POST['revisi']));
      $link           = htmlspecialchars($connect->real_escape_string($_POST['link']));



      if (!empty($link) && !empty($revisi)) {

          $masuk = $keuangan->InsertRka_kl($tahun, $revisi, $link);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil RKA - KL'.' '.$tahun.' '.$revisi.'");
                window.location="?halaman=rka_kl";
          </script>';
         }
      }
  }
?>

