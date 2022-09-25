<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Data Operasional</h2>          
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Buat Data</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Ekspor</th>
              <th>Impor</th>
              <th>Domestik Masuk</th>
              <th>Domestik Keluar</th>
              <th>PNBP</th>
              <th>Per Tanggal</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilData->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->ekspor ?></td>
              <td><?php echo $data->impor; ?></td>
              <td><?php echo $data->domas; ?></td>
              <td><?php echo $data->dokel; ?></td>
              <td><?php echo $data->pnbp; ?></td>
              <td><?php echo $data->waktu; ?></td>
              <td>
                <button type="button" id="tombol_edit_data_operasional" class="btn btn-warning" data-toggle="modal" data-target="#edit" data-id="<?=$data->id;?>">Edit Data</button>
              </td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>


<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_operasional"></div>
    </div>
</div>

  <div id="input" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <form action="" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Data Operasional</h4>
          </div>
          <div class="modal-body">
            <div class="column-full">
                <label for="penulis">Per Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" required>
            </div>                
            <div class="column-full">
                <label for="ekspor">Ekpor</label>
                <input type="number" class="form-control" name="ekspor" id="ekspor" required>
            </div>    
            <div class="column-full">
                <label for="impor">Impor</label>
                <input type="number" class="form-control" name="impor" id="impor" required>
            </div> 
            <div class="column-full">
                <label for="domas">Domestik Masuk</label>
                <input type="number" class="form-control" name="domas" id="domas" required>
            </div> 
            <div class="column-full">
                <label for="dokel">Domestik Keluar</label>
                <input type="number" class="form-control" name="dokel" id="dokel" required>
            </div>  
            <div class="column-full">
                <label for="dokel">PNBP</label>
                <input type="number" class="form-control" name="pnbp" id="pnbp" required>
            </div>           
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="input_data">Simpan</button>
          </div>
        </form>
      </div>
    </div>
</div>


<?php  

    if (isset($_POST['input_data'])) {
        
        $tanggal    = htmlspecialchars($connect->real_escape_string($_POST['tanggal']));
        $ekspor     = htmlspecialchars($connect->real_escape_string($_POST['ekspor']));
        $impor      = htmlspecialchars($connect->real_escape_string($_POST['impor']));
        $domas      = htmlspecialchars($connect->real_escape_string($_POST['domas']));
        $dokel      = htmlspecialchars($connect->real_escape_string($_POST['dokel']));
        $pnbp       = htmlspecialchars($connect->real_escape_string($_POST['pnbp']));

        if ($tanggal !="") {

            $masuk = $conn->insertDataOperasional($tanggal, $ekspor, $impor, $domas, $dokel, $pnbp);

           if($masuk = 'masuk'){
            echo '<script>alert("Berahsil Tambah Data Operasional");
                  window.location="?halaman=data_operasional";
            </script>';
           }
        }
    }
  ?>


