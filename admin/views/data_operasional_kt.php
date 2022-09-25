<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Data Operasional Karatina Tumbuhan</h2>

                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input_data">Buat Data</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Tahun</th>
              <th>Ekspor</th>
              <th>Impor</th>
              <th>Domestik Masuk</th>
              <th>Domestik Keluar</th>
              <th>Per Tanggal</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              $jsonKt = array();
              $arr = array();
              while($data = $tampilDataKt->fetch_object()):
                $tahun = $data->tahun;
                $sampai = tgl_indo(date($data->waktu_input));
                $jsonKt[] = [
                  (int)$data->tahun, 
                  (int)$data->domas, 
                  (int)$data->dokel,  
                  (int)$data->ekspor,
                  (int)$data->impor
                ];

          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->tahun; ?></td>
              <td><?php echo $data->ekspor; ?></td>
              <td><?php echo $data->impor; ?></td>
              <td><?php echo $data->domas; ?></td>
              <td><?php echo $data->dokel; ?></td>
              <td><?php echo $data->waktu_input; ?></td>
              <td><button type="button" id="tombol_edit_data_operasional_kt" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_data_operasional_kt" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button></td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
  <?php 
  include_once('charts_kt.php'); 
  ?>


</section>

<!-- Edit Data Operasional-->

<div class="modal fade" id="modal_edit_data_operasional_kt" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_operasional_kt"></div>
    </div>
</div>


<!-- Modal tambah data operasional-->

  <div id="input_data" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <form action="" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Data Operasional Karantina Tumbuhan</h4>
          </div>
          <div class="modal-body">
            <div class="column-full">
                <label for="penulis">Tahun</label>
                <input type="number" class="form-control" name="tahun" id="tahun" required>
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
                <label for="dokel">Waktu Input</label>
                <input type="text" class="form-control" name="waktu_input" id="waktu_input" value="<?=date('Y-m-d');?>" readonly>
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
        
        $tahun    			= htmlspecialchars($connect->real_escape_string($_POST['tahun']));
        $ekspor     		= htmlspecialchars($connect->real_escape_string($_POST['ekspor']));
        $impor      		= htmlspecialchars($connect->real_escape_string($_POST['impor']));
        $domas      		= htmlspecialchars($connect->real_escape_string($_POST['domas']));
        $dokel      		= htmlspecialchars($connect->real_escape_string($_POST['dokel']));
        $waktu_input    = htmlspecialchars($connect->real_escape_string($_POST['waktu_input']));

        if ($tahun !="") {

            $masuk = $conn->insertDataOperasionalKt($tahun, $ekspor, $impor, $domas, $dokel, $waktu_input);

             if($masuk = 'masuk'){
              echo '<script>alert("Berahsil Tambah Data Operasional");
                    window.location="?halaman=data_operasional_kt";
              </script>';
             }else{
             echo '<script>alert("Gagal Tambah Data");
              </script>';
             }

        }else{

           echo '<script>alert("Data Kurang Lengkap");
            </script>';
        }
    }
  ?>

