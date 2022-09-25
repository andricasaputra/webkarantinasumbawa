<section class="content container-fluid">
  <div class="row-fluid">
      <div class="navbar">
          <div class="navbar-inner">
              <ul class="breadcrumb">
                 <h2>Halaman Pengaduan Masyarakat</h2>
              </ul>
          </div>
      </div>
  </div>
  <table class="table table-hover table-striped" id="tabel_berita">
      <thead>
          <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>No Telepon</th>
              <th>Email</th>
              <th>Isi Pengaduan</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilPengaduan->fetch_object()):
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->tanggal; ?></td>
              <td><?php echo $data->nama; ?></td>
              <td><?php echo $data->telepon; ?></td>
              <td><?php echo $data->email; ?></td>
              <td><?php echo $data->isi; ?></td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>