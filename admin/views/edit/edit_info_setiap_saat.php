<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_ppid.php');
  $db = Database::getInstance();
  $ppid = new ppid($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $ppid->tampil_info_setiapsaat($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $bagian_info =$data->bagian_info;
    $nama_info =$data->nama_info;
    $kategori =$data->kategori;
    $keterangan =$data->keterangan;
    $link = $data->link;


  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_neraca_keuangan">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Informasi Setiap Saat</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <label for="penulis">Bagian Informasi</label>
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <select class="form-control" name="bagian_info" id="bagian_info">
            <option><?php echo $bagian_info; ?></option>
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
          <input type="text" class="form-control" name="nama_info" id="nama_info" value="<?=$nama_info;?>">
      </div>                 
      <div class="column-full">
          <label for="judul">Keterangan Jika Tidak Ada Link/ URL</label>
          <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Kosongkan Form Ini Jika Ada Link" value="<?=$keterangan;?>">
      </div>  
      <div class="column-full">
          <label for="judul">LINK URL</label>
          <input type="text" class="form-control" name="link" id="link" placeholder="Kosongkan Form ini jika tidak ada link/ isi form keterangan" value="<?=$link;?>">
      </div>           
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit_neraca_keuangan").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_info_setiap_saat.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){


        alert('data berhasil diubah');

          window.location.href = '?halaman=ppid&ppid=setiap_saat';

      }
   });  
}));
</script>