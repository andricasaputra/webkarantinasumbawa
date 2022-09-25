<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Tampil Agenda Kegiatan</h2>

                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#headline">Tambah Agenda Kegiatan</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Agenda</th>
              <th>Waktu Mulai</th>
              <th>Waktu Selesai</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilCalendar->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->title ?></td>
              <td><?php echo tgl_indo(date(substr($data->start, 0, 10))); ?></td>
              <td><?php echo tgl_indo(date(substr($data->end, 0, 10))); ?></td>
              <td><button type="button" id="tombol_edit_events" class="btn btn-warning" data-toggle="modal" data-target="#edit_events" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>&nbsp;&nbsp;<a href="home.php?halaman=events&act=delete&id=<?php echo $data->id; ?>"><button  onclick="return confirm('Yakin Ingin Hapus Agenda Ini?')" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Hapus</button></a></td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>

<!-- Modal tambah berita-->

<div id="headline" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Agenda</h4>
        </div>
        <div class="modal-body">
          <div class="column-full">
              <label for="judul">Nama Agenda Kegiatan</label>
              <input type="text" class="form-control" name="title" id="title" required>
          </div>       
          <div class="column-full">
              <label for="color">Pilih Warna Pada kalender Events</label>
              <select name="color" class="form-control" id="colorEdit">
                <option value="">Choose</option>
                <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                <option style="color:#008000;" value="#008000">&#9724; Green</option>             
                <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                <option style="color:#000;" value="#000">&#9724; Black</option>
            </select>
          </div> 
          <div class="column-full">
              <label for="penulis">Waktu Mulai Agenda</label>
              <input type="date" class="form-control" name="start" id="start">
          </div>                
          <div class="column-full">
              <label for="judul">Waktu Berakhir Agenda</label>
              <input type="date" class="form-control" name="end" id="end">
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
      
      $title   = htmlspecialchars($connect->real_escape_string(ucwords($_POST['title'])));
      $color   = htmlspecialchars($connect->real_escape_string($_POST['color']));
      $start   = htmlspecialchars($connect->real_escape_string($_POST['start']));
      $end     = htmlspecialchars($connect->real_escape_string($_POST['end']));

      if (!empty($title) && !empty($color) && !empty($start) && !empty($end)) {

          $masuk = $calendar->InsertEvents($title , $color , $start, $end);

         if($masuk = 'masuk'){
          echo '<script>alert("Berhasil Tambah Agenda");
                window.location="?halaman=events";
          </script>';
         }
         
      }else{
        echo '<script>alert("Semua Data Harus Diisi");
                window.location="?halaman=events";
          </script>';
      }
  }

  if (@$_GET['act'] == 'delete') {

    $id = $_GET['id'];

    $hapus = $calendar->DeleteEvents($id);

    if ($hapus == 'terhapus') {
        echo '<script>alert("Agenda Berhasil Dihapus");
        window.location="?halaman=events";
        </script>';
    }else{
      echo '<script>alert("Agenda Gagal Dihapus");window.location="?halaman=events";</script>';
    }
  }
?>

<!-- Modal ubah-->

<!-- Edit Berita -->

<div class="modal fade" id="edit_events" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_events"></div>
    </div>
</div>
