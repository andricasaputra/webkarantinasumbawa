<style type="text/css">

</style>
<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Realisasi Anggaran</h2>

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
              <th>Realisasi Anggaran</th>
              <th>Waktu Input</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              $jsonKeu = array();

              while($data = $tampilDataKeuangan->fetch_object()):
                $jsonKeu[] = [
                  $data->tahun,
                  $data->realisasi_anggaran,
                  $data->waktu_input
                ];

               
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->tahun; ?></td>
              <td><?php echo $data->realisasi_anggaran.'%' ; ?></td>
              <td><?php echo $data->waktu_input ; ?></td>
              <td><button type="button" id="tombol_realisasi" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_realisasi" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button></td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
 
  <?php include_once('charts_keu.php') ?>
</section>


<!-- Edit Data Operasional-->

<div class="modal fade" id="modal_edit_realisasi" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_realisasi"></div>
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
            <h4 class="modal-title">Tambah Data Realiasi Anggaran</h4>
          </div>
          <div class="modal-body">
          	<div class="column-full">
                <label for="penulis">Tahun</label>
                <input type="number" class="form-control" name="tahun" id="tahun" required>
            </div>  
            <div class="column-full">
                <label for="penulis">Realisasi Anggaran</label>
                <input type="text" class="form-control" name="realisasi_anggaran" id="realisasi_anggaran" required>
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
        $tahun    				= htmlspecialchars($connect->real_escape_string($_POST['tahun']));
        $realisasi_anggaran    	= htmlspecialchars($connect->real_escape_string($_POST['realisasi_anggaran']));
        $waktu_input     		= htmlspecialchars($connect->real_escape_string($_POST['waktu_input']));

        if ($tahun !="") {

            $masuk = $conn->insertDataKeuangan($tahun, $realisasi_anggaran, $waktu_input);

             if($masuk = 'masuk'){
              echo '<script>alert("Berahsil Tambah Data Operasional");
                    window.location="?halaman=data_keuangan";
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

