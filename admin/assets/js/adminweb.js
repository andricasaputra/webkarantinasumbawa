$(document).ready(function () {

	$('#tabel_berita').DataTable();
	$('#tabel_berita1').DataTable();

	$('[data-toggle="tooltip"]').tooltip();

	/*Edit Headline*/
	  $(document).on('click','#tombol_headline',function(e){
	    e.preventDefault();
	    let per_id_headline = $(this).data('id');
	    $('#content-data_edit').html('');
	    $.ajax({
	        url:'views/edit/edit_headline.php',
	        type:'POST',
	        data:'id=' + per_id_headline,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_headline').html('');
	        $('#content-data_edit_headline').html(data);
	    }).fail(function(){
	        $('#content-data_edit_headline').html('<p>Error</p>');
	    });
	  });

	  /*Pilih Headline*/
	  $('#tabel_berita').on('click','#pilihHeadline',function(e){
	    e.preventDefault();
	    let per_id_pilih_headline     = $(this).data('id');
	    let per_tampil_pilih_headline = $(this).data('tampil');
	    $.ajax({
	        url:'controller/pilih_headline.php',
	        type:'POST',
	        data: {id: per_id_pilih_headline, tampil: per_tampil_pilih_headline}
	    }).done(function(data){

	        window.location = "?halaman=headline";

	    });
	  });

	/*Edit Berita*/
	  $(document).on('click','#tombol_edit',function(e){
	    e.preventDefault();
	    let per_id = $(this).data('id');
	    $('#content-data_edit').html('');
	    $.ajax({
	        url:'views/edit/edit_berita.php',
	        type:'POST',
	        data:'id=' + per_id,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit').html('');
	        $('#content-data_edit').html(data);
	    }).fail(function(){
	        $('#content-data_edit').html('<p>Error</p>');
	    });
	  });
	  /*Edit Penghargaan*/
	  $(document).on('click','#tombol_edit_penghargaan',function(e){
	    e.preventDefault();
	    let per_id = $(this).data('id');
	    $('#content-data_edit_penghargaan').html('');
	    $.ajax({
	        url:'views/edit/edit_penghargaan.php',
	        type:'POST',
	        data:'id=' + per_id,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_penghargaan').html('');
	        $('#content-data_edit_penghargaan').html(data);
	    }).fail(function(){
	        $('#content-data_edit_penghargaan').html('<p>Error</p>');
	    });
	  });

	  /*Pilih berita*/
	  $(document).on('click','#pilihBerita',function(e){
	    e.preventDefault();
	    let per_id_pilih_headline     = $(this).data('id');
	    let per_tampil_pilih_headline = $(this).data('tampil');
	    $.ajax({
	        url:'controller/pilih_berita.php',
	        type:'POST',
	        data: {id: per_id_pilih_headline, tampil: per_tampil_pilih_headline},
	        success : function(response){

                window.location = "?halaman=berita";

           }
	    });
	  });

	  /*Edit Events*/
	  $(document).on('click','#tombol_edit_events',function(e){
	    e.preventDefault();
	    let per_id_events = $(this).data('id');
	    $('#content-data_edit_events').html('');
	   /* console.log(per_id_events);*/
	    $.ajax({
	        url:'views/edit/edit_events.php',
	        type:'POST',
	        data:'id=' + per_id_events,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_events').html('');
	        $('#content-data_edit_events').html(data);
	    }).fail(function(){
	        $('#content-data_edit_events').html('<p>Error</p>');
	    });
	  });

	  /*Edit Rencana Kerja*/
	  $(document).on('click','#tombol_rencana_kerja',function(e){
	    e.preventDefault();
	    let per_id_neraca = $(this).data('id');
	    $('#content-data_edit_rencana_kerja').html('');
	    $.ajax({
	        url:'views/edit/edit_rencana_kerja.php',
	        type:'POST',
	        data:'id=' + per_id_neraca,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_rencana_kerja').html('');
	        $('#content-data_edit_rencana_kerja').html(data);
	    }).fail(function(){
	        $('#content-data_edit_rencana_kerja').html('<p>Error</p>');
	    });

	  });

	  /*Edit Renstra*/
	  $(document).on('click','#tombol_renstra',function(e){
	    e.preventDefault();
	    let per_id_neraca = $(this).data('id');
	    $('#content-data_edit_renstra').html('');
	    $.ajax({
	        url:'views/edit/edit_renstra.php',
	        type:'POST',
	        data:'id=' + per_id_neraca,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_renstra').html('');
	        $('#content-data_edit_renstra').html(data);
	    }).fail(function(){
	        $('#content-data_edit_renstra').html('<p>Error</p>');
	    });

	  });

	  /*Edit Arus Kas*/
	  $(document).on('click','#tombol_edit_arus_kas',function(e){
	    e.preventDefault();
	    let per_id_neraca = $(this).data('id');
	    $('#content-data_edit_arus_kas').html('');
	    $.ajax({
	        url:'views/edit/edit_arus_kas.php',
	        type:'POST',
	        data:'id=' + per_id_neraca,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_arus_kas').html('');
	        $('#content-data_edit_arus_kas').html(data);
	    }).fail(function(){
	        $('#content-data_edit_arus_kas').html('<p>Error</p>');
	    });

	  })

	  /*Edit Daftar aset */
	  $(document).on('click','#tombol_edit_daftar_aset',function(e){
	    e.preventDefault();
	    let per_id = $(this).data('id');
	    $('#content-data_edit_daftar_aset').html('');
	    $.ajax({
	        url:'views/edit/edit_daftar_aset.php',
	        type:'POST',
	        data:'id=' + per_id,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_daftar_aset').html('');
	        $('#content-data_edit_daftar_aset').html(data);
	    }).fail(function(){
	        $('#content-data_edit_daftar_aset').html('<p>Error</p>');
	    });
	  });

	  /*Edit Rencana Anggaran */
	  $(document).on('click','#tombol_edit_rencana_anggaran',function(e){
	    e.preventDefault();
	    let per_id = $(this).data('id');
	    $('#content-data_edit_rencana_anggaran').html('');
	    $.ajax({
	        url:'views/edit/edit_rencana_anggaran.php',
	        type:'POST',
	        data:'id=' + per_id,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_rencana_anggaran').html('');
	        $('#content-data_edit_rencana_anggaran').html(data);
	    }).fail(function(){
	        $('#content-data_edit_rencana_anggaran').html('<p>Error</p>');
	    });
	  });

	  /*Edit Pengadaan */
	  $(document).on('click','#tombol_edit_pengadaan',function(e){
	    e.preventDefault();
	    let per_id = $(this).data('id');
	    $('#content-data_edit_pengadaan').html('');
	    $.ajax({
	        url:'views/edit/edit_pengadaan.php',
	        type:'POST',
	        data:'id=' + per_id,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_pengadaan').html('');
	        $('#content-data_edit_pengadaan').html(data);
	    }).fail(function(){
	        $('#content-data_edit_pengadaan').html('<p>Error</p>');
	    });
	  });

	  /*Edit Semua Data Opersional */
	  $(document).on('click','#tombol_edit_data_operasional',function(e){
	    e.preventDefault();
	    let per_id_semua_data_operasional = $(this).data('id');
	    $('#content-data_edit_operasional').html('');
	    $.ajax({
	        url:'views/edit/edit_data_operasional.php',
	        type:'POST',
	        data:'id=' + per_id_semua_data_operasional,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_operasional').html('');
	        $('#content-data_edit_operasional').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_operasional').html('<p>Error</p>');
	    });
	  });

	  /*Edit Data Opersional KH*/
	  $(document).on('click','#tombol_edit_data-operasional_kh',function(e){
	    e.preventDefault();
	    let per_id_data_operasional_kh = $(this).data('id');
	    $('#content-data_edit_operasional_kh').html('');
	    $.ajax({
	        url:'views/edit/edit_data_operasional_kh.php',
	        type:'POST',
	        data:'id=' + per_id_data_operasional_kh,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_operasional_kh').html('');
	        $('#content-data_edit_operasional_kh').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_operasional_kh').html('<p>Error</p>');
	    });
	  });

	  /*Edit Data Opersional KT*/
	  $(document).on('click','#tombol_edit_data_operasional_kt',function(e){
	    e.preventDefault();
	    let per_id_data_operasional_kt = $(this).data('id');
	    $('#content-data_edit_operasional_kt').html('');
	    $.ajax({
	        url:'views/edit/edit_data_operasional_kt.php',
	        type:'POST',
	        data:'id=' + per_id_data_operasional_kt,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_operasional_kt').html('');
	        $('#content-data_edit_operasional_kt').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_operasional_kt').html('<p>Error</p>');
	    });
	  });

	  /*Edit Data Opersional KT*/
	  $(document).on('click','#tombol_edit_pnbp',function(e){
	    e.preventDefault();
	    let per_id_pnbp = $(this).data('id');
	    $('#content-data_edit_pnbp').html('');
	    $.ajax({
	        url:'views/edit/edit_pnbp.php',
	        type:'POST',
	        data:'id=' + per_id_pnbp,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_pnbp').html('');
	        $('#content-data_edit_pnbp').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_pnbp').html('<p>Error</p>');
	    });
	  });

	  /*Edit Data Opersional KT*/
	  $(document).on('click','#tombol_ikm',function(e){
	    e.preventDefault();
	    let per_id_ikm = $(this).data('id');
	    $('#content-data_edit_ikm').html('');
	    $.ajax({
	        url:'views/edit/edit_ikm.php',
	        type:'POST',
	        data:'id=' + per_id_ikm,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_ikm').html('');
	        $('#content-data_edit_ikm').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_ikm').html('<p>Error</p>');
	    });
	  });

	  /*Edit Data Upload Dokumen*/
	  $(document).on('click','#tombol_dokumen',function(e){
	    e.preventDefault();
	    let per_id_dokumen = $(this).data('id');
	    $('#content-data_edit_dokumen').html('');
	    $.ajax({
	        url:'views/edit/edit_dokumen.php',
	        type:'POST',
	        data:'id=' + per_id_dokumen,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_dokumen').html('');
	        $('#content-data_edit_dokumen').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_dokumen').html('<p>Error</p>');
	    });
	  });

	  /*=========KEUANGAN SECTION==========*/
	  /*Edit Dipa*/
	  $(document).on('click','#tombol_dipa',function(e){
	    e.preventDefault();
	    let per_id_dipa = $(this).data('id');
	    $('#content-data_edit_dipa').html('');
	    $.ajax({
	        url:'views/edit/edit_dipa.php',
	        type:'POST',
	        data:'id=' + per_id_dipa,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_dipa').html('');
	        $('#content-data_edit_dipa').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_dipa').html('<p>Error</p>');
	    });
	  });

	  /*Edit RKA-KL*/
	  $(document).on('click','#tombol_rka_kl',function(e){
	    e.preventDefault();
	    let per_id_rka_kl = $(this).data('id');
	    $('#content-data_edit_rka_kl').html('');
	    $.ajax({
	        url:'views/edit/edit_rka_kl.php',
	        type:'POST',
	        data:'id=' + per_id_rka_kl,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_rka_kl').html('');
	        $('#content-data_edit_rka_kl').html(data);
	        /*console.log(data)*/
	    }).fail(function(){
	        $('#content-data_edit_rka_kl').html('<p>Error</p>');
	    });
	  });

	  /*Edit Realisasi Anggaran*/
	  $(document).on('click','#tombol_realisasi',function(e){
	    e.preventDefault();
	    let per_id_realisasi = $(this).data('id');
	    $('#content-data_edit_realisasi').html('');
	    $.ajax({
	        url:'views/edit/edit_realisasi_anggaran.php',
	        type:'POST',
	        data:'id=' + per_id_realisasi,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_realisasi').html('');
	        $('#content-data_edit_realisasi').html(data);
	    }).fail(function(){
	        $('#content-data_edit_realisasi').html('<p>Error</p>');
	    });

	  });

	  /*Edit Realisasi Anggaran*/
	  $(document).on('click','#tombol_neraca_keuangan',function(e){
	    e.preventDefault();
	    let per_id_neraca = $(this).data('id');
	    $('#content-data_edit_neraca_keuangan').html('');
	    $.ajax({
	        url:'views/edit/edit_neraca_keuangan.php',
	        type:'POST',
	        data:'id=' + per_id_neraca,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_neraca_keuangan').html('');
	        $('#content-data_edit_neraca_keuangan').html(data);
	    }).fail(function(){
	        $('#content-data_edit_neraca_keuangan').html('<p>Error</p>');
	    });

	  });

	  /*=========PPID SECTION==========*/

	  /*Edit Informasi berkala*/
	  $(document).on('click','#tombol_edit_info_berkala',function(e){
	    e.preventDefault();
	    let per_id_info_berkala = $(this).data('id');
	    $('#content-data_edit_info_berkala').html('');
	    $.ajax({
	        url:'views/edit/edit_info_berkala.php',
	        type:'POST',
	        data:'id=' + per_id_info_berkala,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_info_berkala').html('');
	        $('#content-data_edit_info_berkala').html(data);
	    }).fail(function(){
	        $('#content-data_edit_info_berkala').html('<p>Error</p>');
	    });

	  });

	  /*Edit Informasi berkala*/
	  $(document).on('click','#tombol_edit_info_serta_merta',function(e){
	    e.preventDefault();
	    let per_id_info_serta_merta = $(this).data('id');
	    $('#content-data_edit_info_serta_merta').html('');
	    $.ajax({
	        url:'views/edit/edit_info_serta_merta.php',
	        type:'POST',
	        data:'id=' + per_id_info_serta_merta,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_info_serta_merta').html('');
	        $('#content-data_edit_info_serta_merta').html(data);
	    }).fail(function(){
	        $('#content-data_edit_info_serta_merta').html('<p>Error</p>');
	    });

	  });

	  /*Edit Informasi berkala*/
	  $(document).on('click','#tombol_edit_info_setiap_saat',function(e){
	    e.preventDefault();
	    let per_id_info_setiap_saat = $(this).data('id');
	    $('#content-data_edit_info_setiap_saat').html('');
	    $.ajax({
	        url:'views/edit/edit_info_setiap_saat.php',
	        type:'POST',
	        data:'id=' + per_id_info_setiap_saat,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_info_setiap_saat').html('');
	        $('#content-data_edit_info_setiap_saat').html(data);
	    }).fail(function(){
	        $('#content-data_edit_info_setiap_saat').html('<p>Error</p>');
	    });

	  });

	  /*Edit Regulasi Informasi*/
	  $(document).on('click','#tombol_edit_regulasi',function(e){
	    e.preventDefault();
	    let per_id_regulasi = $(this).data('id');
	    $('#content-data_edit_regulasi').html('');
	    $.ajax({
	        url:'views/edit/edit_regulasi.php',
	        type:'POST',
	        data:'id=' + per_id_regulasi,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_regulasi').html('');
	        $('#content-data_edit_regulasi').html(data);
	    }).fail(function(){
	        $('#content-data_edit_regulasi').html('<p>Error</p>');
	    });

	  });

	  /*=========LAPORAN SECTION==========*/

	  /*Edit Laporan Tahunan*/
	  $(document).on('click','#tombol_laporan_tahunan',function(e){
	    e.preventDefault();
	    let per_id_laporan_tahunan = $(this).data('id');
	    $('#content-data_edit_laporan_tahunan').html('');
	    $.ajax({
	        url:'views/edit/edit_laporan_tahunan.php',
	        type:'POST',
	        data:'id=' + per_id_laporan_tahunan,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_laporan_tahunan').html('');
	        $('#content-data_edit_laporan_tahunan').html(data);
	    }).fail(function(){
	        $('#content-data_edit_laporan_tahunan').html('<p>Error</p>');
	    });

	  });

	  /*Edit Laporan Akses IP*/
	  $(document).on('click','#tombol_laporan_akses_ip',function(e){
	    e.preventDefault();
	    let per_id_laporan_akses_ip = $(this).data('id');
	    $('#content-data_edit_laporan_akses_ip').html('');
	    $.ajax({
	        url:'views/edit/edit_laporan_akses_ip.php',
	        type:'POST',
	        data:'id=' + per_id_laporan_akses_ip,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_laporan_akses_ip').html('');
	        $('#content-data_edit_laporan_akses_ip').html(data);
	    }).fail(function(){
	        $('#content-data_edit_laporan_akses_ip').html('<p>Error</p>');
	    });

	  });

	  /*Edit Laporan Keuangan*/
	  $(document).on('click','#tombol_laporan_keuangan',function(e){
	    e.preventDefault();
	    let per_id_laporan_keuangan = $(this).data('id');
	    $('#content-data_edit_laporan_keuangan').html('');
	    $.ajax({
	        url:'views/edit/edit_laporan_keuangan.php',
	        type:'POST',
	        data:'id=' + per_id_laporan_keuangan,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_laporan_keuangan').html('');
	        $('#content-data_edit_laporan_keuangan').html(data);
	    }).fail(function(){
	        $('#content-data_edit_laporan_keuangan').html('<p>Error</p>');
	    });

	  });

	  /*Edit Laporan Realisasi Anggaran*/
	  $(document).on('click','#tombol_laporan_realisasi',function(e){
	    e.preventDefault();
	    let per_id_laporan_realisasi = $(this).data('id');
	    $('#content-data_edit_laporan_realisasi').html('');
	    $.ajax({
	        url:'views/edit/edit_laporan_realisasi_anggaran.php',
	        type:'POST',
	        data:'id=' + per_id_laporan_realisasi,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_laporan_realisasi').html('');
	        $('#content-data_edit_laporan_realisasi').html(data);
	    }).fail(function(){
	        $('#content-data_edit_laporan_realisasi').html('<p>Error</p>');
	    });

	  });

	  /*Edit Laporan Keuangan*/
	  $(document).on('click','#tombol_laporan_kinerja',function(e){
	    e.preventDefault();
	    let per_id_laporan_kinerja = $(this).data('id');
	    $('#content-data_edit_laporan_kinerja').html('');
	    $.ajax({
	        url:'views/edit/edit_laporan_kinerja.php',
	        type:'POST',
	        data:'id=' + per_id_laporan_kinerja,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_laporan_kinerja').html('');
	        $('#content-data_edit_laporan_kinerja').html(data);
	    }).fail(function(){
	        $('#content-data_edit_laporan_kinerja').html('<p>Error</p>');
	    });

	  });

	  /*Edit Laporan PPID*/
	  $(document).on('click','#tombol_laporan_ppid',function(e){
	    e.preventDefault();
	    let per_id_laporan_ppid= $(this).data('id');
	    $('#content-data_edit_laporan_ppid').html('');
	    $.ajax({
	        url:'views/edit/edit_laporan_ppid.php',
	        type:'POST',
	        data:'id=' + per_id_laporan_ppid,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_laporan_ppid').html('');
	        $('#content-data_edit_laporan_ppid').html(data);
	    }).fail(function(){
	        $('#content-data_edit_laporan_ppid').html('<p>Error</p>');
	    });

	  });

	  /*Edit Laporan Kekayaan*/
	  $(document).on('click','#tombol_laporan_kekayaan',function(e){
	    e.preventDefault();
	    let per_id_laporan_kekayaan= $(this).data('id');
	    $('#content-data_edit_laporan_kekayaan').html('');
	    $.ajax({
	        url:'views/edit/edit_laporan_kekayaan.php',
	        type:'POST',
	        data:'id=' + per_id_laporan_kekayaan,
	        dataType:'html'
	    }).done(function(data){
	        $('#content-data_edit_laporan_kekayaan').html('');
	        $('#content-data_edit_laporan_kekayaan').html(data);
	    }).fail(function(){
	        $('#content-data_edit_laporan_kekayaan').html('<p>Error</p>');
	    });

	  });


});/*End Ready*/