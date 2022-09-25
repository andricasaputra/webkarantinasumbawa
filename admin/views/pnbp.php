<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman PNBP</h2>

                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#headline">Tambah Data PNBP</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Tahun</th>
              <th>Total</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilPnbp->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->tahun; ?></td>
              <td><?php echo $data->total; ?></td>
              <td><button type="button" id="tombol_edit_pnbp" class="btn btn-warning" data-toggle="modal" data-target="#edit_pnbp" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button></td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
  <?php include_once('charts_pnbp.php'); ?>
</section>

<!-- Edit PNBP -->

<div class="modal fade" id="edit_pnbp" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_pnbp"></div>
    </div>
</div>


<!-- Modal tambah berita-->

<div id="headline" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data PNBP</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="judul">Tahun</label>
              <input type="number" class="form-control" name="tahun" id="tahun" required>
          </div>            
          <div class="column-full">
              <label for="judul">Total</label>
              <input type="text" class="form-control" name="total" id="total" required>
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
      
      $tahun  		= htmlspecialchars($connect->real_escape_string($_POST['tahun']));
      $total   		= htmlspecialchars($connect->real_escape_string($_POST['total']));

      if ($tahun !="") {

          $masuk = $conn->insertPnbp($tahun, $total);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil Tambah Data PNBP");
                window.location="?halaman=pnbp";
          </script>';
         }
      }
  }
?>

