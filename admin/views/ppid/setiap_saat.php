<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                  <h2>Daftar Infromasi Setiap Saat</h2>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#input">Tambah Informasi Setiap Saat</button>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Bagian Informasi</th>
              <th>Nama Informasi</th>
              <th>Keterangan</th>
              <th>URL</th>
              <th>Waktu Input</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilInfoSetiapSaat->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo ucwords($data->bagian_info) ?></td>
              <td><?php echo $data->nama_info ?></td>
              <td><?php echo $data->keterangan; ?></td>
              <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?php echo $data->link; ?></td>
              <td><?php echo tgl_indo(date($data->waktu_input)); ?></td>
              <td style="min-width: 160px;max-width: 160px"><button type="button" id="tombol_edit_info_setiap_saat" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_info_setiap_saat" data-id="<?=$data->id;?>"><i class="fa fa-edit fa-fw"></i> Edit</button>
                <a href="?halaman=ppid&ppid=setiap_saat&act=del&id=<?=$data->id;?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Hapus Data Ini?')"><i class="fa fa-trash"></i> Hapus</a>
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

<div class="modal fade" id="modal_edit_info_setiap_saat" role="dialog">
    <div class="modal-dialog">
        <div id="content-data_edit_info_setiap_saat"></div>
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
              <h4 class="modal-title">Tambah Informasi SertaMerta</h4>
            </div>
            <div class="modal-body">
              <div class="column-full">
                  <label for="penulis">Bagian Informasi</label>
                  <select class="form-control" name="bagian_info" id="bagian_info">
                  	<option>Daftar Informasi Publik SKP Kelas I Sumbawa Besar</option>
                  	<option>Informasi tentang peraturan, keputusan, dan/atau kebijakan SKP Kelas I Sumbawa Besar</option>
                  	<option>Daftar rancangan peraturan perundang-undangan di bidang keuangan negara</option>
                  	<option>Seluruh informasi yang wajib disediakan dan diumumkan secara berkala</option>
                  	<option>Informasi tentang organisasi, administrasi, kepegawaian, dan keuangan</option>
                  	<option>Profil pimpinan dan pegawai SKP Kelas I Sumbawa Besar</option>
                  	<option>Surat-surat perjanjian dengan pihak ketiga</option>
                  	<option>Surat menyurat pimpinan atau pejabat SKP Kelas I Sumbawa Besar dalam rangka pelaksanaan tugas pokok dan fungsinya</option>
                  	<option>Syarat-syarat perizinan, izin yang diterbitkan dan/atau dikeluarkan berikut dokumen pendukungnya, dan laporan penataan izin yang diberikan </option>
                  	<option>Data perbendaharaan atau inventaris </option>
                  	<option>Rencana Strategis & Rencana Kerja SKP Kelas I Sumbawa Besar</option>
                  	<option>Agenda kerja pimpinan SKP Kelas I Sumbawa Besar</option>
                  	<option>Layanan Publik SKP Kelas I Sumbawa Besar</option>
                  	<option>Jumlah, jenis, dan gambaran umum pelanggaran yang dilaporkan oleh masyarakat serta laporan penindakannya (Laporan Pengaduan Masyarakat)</option>
                  	<option>Daftar serta hasil-hasil penelitian</option>
                  	<option>Siaran Pers dan Keterangan Pers</option>
                  </select>
              </div> 
              <div class="column-full">
                  <label for="penulis">Nama Informasi</label>
                  <input type="text" class="form-control" name="nama_info" id="nama_info">
              </div>                 
              <div class="column-full">
                  <label for="judul">Keterangan Jika Tidak Ada Link/ URL</label>
                  <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Kosongkan Form Ini Jika Ada Link">
              </div>  
              <div class="column-full">
                  <label for="judul">LINK URL</label>
                  <input type="text" class="form-control" name="link" id="link" placeholder="Kosongkan Form ini jika tidak ada link/ isi form keterangan">
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

        $bagian_info  = htmlspecialchars($connect->real_escape_string(strtolower($_POST['bagian_info'])));
        $nama_info  = htmlspecialchars($connect->real_escape_string($_POST['nama_info']));
        $keterangan      = htmlspecialchars($connect->real_escape_string($_POST['keterangan']));
        $link       = htmlspecialchars($connect->real_escape_string($_POST['link']));
        
        if (!empty($nama_info) || !empty($bagian_info)) {

            $masuk = $ppid->insertInfoSetiapSaat($bagian_info, $nama_info, $keterangan ,$link);

           if($masuk = 'masuk'){
            echo '<script>alert("Berahsil Tambah Informasi Serta Merta");
                  window.location="?halaman=ppid&ppid=setiap_saat";
            </script>';
           }
        }
    }
  ?>

<?php  
  if (@$_GET['act'] == 'del') {
        
        $id = $_GET['id'];

       $hapus = $ppid->DeleteInfoSetiapSaat($id);

       if ($hapus == 'terhapus') {
            
            echo '<script>alert("Data Berhasil Dihapus");
                window.location="?halaman=ppid&ppid=setiap_saat"
            </script>';

       }else{

        echo '<script>alert("Data Gagal Dihapus");
                window.location="?halaman=ppid&ppid=setiap_saat";
            </script>';

       }

  }
?>