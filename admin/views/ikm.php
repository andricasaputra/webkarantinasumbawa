<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman IKM</h2>

                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#headline">Tambah Data IKM</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Tahun</th>
              <th>Periode</th>
              <th>Rata-rata</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilIkm->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->tahun; ?></td>
              <td><?php echo $data->periode; ?></td>
              <td><?php echo $data->rata_rata."%"; ?></td>
              <td><button type="button" id="tombol_ikm" class="btn btn-warning" data-toggle="modal" data-target="#edit_ikm" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button></td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
  <?php include_once('charts_ikm.php'); ?>
</section>

<!-- Edit IKM -->

<div class="modal fade" id="edit_ikm" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_ikm"></div>
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
          <h4 class="modal-title">Tambah Data IKM</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="judul">Tahun</label>
              <input type="number" class="form-control" name="tahun" id="tahun" required>
          </div> 
          <div class="column-full">
              <label for="penulis">Periode</label>
              <select class="form-control" name="periode" id="periode" required>
              	<option>1</option>
              	<option>2</option>
              </select>
          </div>                
          <div class="column-full">
              <label for="judul">Nilai Rata-rata (tidak perlu tambahkan %)</label>
              <input type="text" class="form-control" name="rata_rata" id="rata_rata" required>
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
      $periode   	= htmlspecialchars($connect->real_escape_string($_POST['periode']));
      $rata_rata   	= htmlspecialchars($connect->real_escape_string($_POST['rata_rata']));

      if ($tahun !="") {

          $masuk = $conn->insertIkm($tahun, $periode, $rata_rata);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil Tambah Data IKM");
                window.location="?halaman=ikm";
          </script>';
         }
      }
  }
?>
