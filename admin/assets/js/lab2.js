



// Read Only Data Permohonan



// function makeInitialTextReadOnly(input) {

// var readOnlyLength = input.value.length;

// input.addEventListener('keydown', function(event) {

//     var which = event.which;

//     if (((which == 8) && (input.selectionStart <= readOnlyLength))

//             || ((which == 46) && (input.selectionStart < readOnlyLength))) {

//         event.preventDefault();

//     }

// });

// input.addEventListener('keypress', function(event) {

//     var which = event.which;

//     if ((event.which != 0) && (input.selectionStart < readOnlyLength)) {

//         event.preventDefault();

//     }

// });

// input.addEventListener('cut', function(event) {

//     if (input.selectionStart < readOnlyLength) {

//         event.preventDefault();

//     }

// });

// input.addEventListener('paste', function(event) {

//     if (input.selectionStart < readOnlyLength) {

//         event.preventDefault();

//     }

// });

// }



// makeInitialTextReadOnly(document.getElementById('tanggal'));  



// Edit Data Permohonan





 // Confirmation Data Permohonan



$(function() {

    $('.bs-confirmation').confirmation({

     placement: 'left',

     title: 'Anda Yakin?',

     btnCancelClass  : 'btn btn-sm btn-success',

     btnCancelLabel  : 'Hapus',

     btnCancelIcon   : 'glyphicon glyphicon-ok',

     btnOkIcon       : 'glyphicon glyphicon-remove',

     btnOkLabel      : 'Tidak',

     href            : '?page=data_permohonan',

    });

});



// Input Data Penerima Sampel



$(document). on("click", "#input_penerima_sampel", function(){

    let  id_input                    = $(this).data('id_input');

         no_permohonan_input         = $(this).data('no_permohonan_input');

         tanggal_permohonan_input    = $(this).data('tanggal_permohonan_input');

         pemohon_input               = $(this).data('pemohon_input');

         cara_pengiriman_input       = $(this).data('cara_pengiriman_input');

         pengantar_input             = $(this).data('pemohon_input');

         jumlah_kontainer_input      = $(this).data('jumlah_kontainer_input');

         lama_pengujian_input        = $(this).data('lama_pengujian_input');

         lama_pengujian2_input       = $(this).data('lama_pengujian2_input');

         lama_pengujian3_input       = $(this).data('lama_pengujian3_input');

         tanggal_diterima_input      = $(this).data('tanggal_diterima_input');

         jabatan_input               = $(this).data('jabatan_input');

         nip_penerima_sampel_input   = $(this).data('nip_penerima_sampel_input');

         no_sampel_input             = $(this).data('no_sampel_input');



      $("#modal-edit #id_input"). val(id_input);

      $("#modal-edit #no_permohonan_input"). val(no_permohonan_input);

      $("#modal-edit #tanggal_permohonan_input"). val(tanggal_permohonan_input);

      $("#modal-edit #pemohon_input"). val(pemohon_input);

      $("#modal-edit #cara_pengiriman_input"). val(cara_pengiriman_input);

      $("#modal-edit #pengantar_input"). val(pengantar_input);

      $("#modal-edit #jumlah_kontainer_input"). val(jumlah_kontainer_input);

      $("#modal-edit #lama_pengujian_input"). val(lama_pengujian_input);

      $("#modal-edit #lama_pengujian2_input"). val(lama_pengujian2_input);

      $("#modal-edit #lama_pengujian3_input"). val(lama_pengujian3_input);

      $("#modal-edit #tanggal_diterima_input"). val();

      $("#modal-edit #jabatan_input"). val(jabatan_input);

      $("#modal-edit #nip_penerima_sampel_input"). val(nip_penerima_sampel_input);

      $("#modal-edit #no_sampel_input"). val();



    });



    $(document). ready(function(e){

      $("#form_input_penerima_sampel").on("submit", (function(e){

      e.preventDefault();

      $.ajax({

      url :'models/proses_input_terimasampel.php',

      type :'POST',

      data : new FormData (this),

      contentType : false,

      cache : false,

      processData : false,

      success : function(msg){

      $('.table'). html(msg)          

        }

      });

     }));

    });



    // Edit Data Penerima Sampel



$(document). on("click", "#edit_penerima_sampel", function(){

      let id                    = $(this).data('id');

          no_permohonan         = $(this).data('no_permohonan');

          tanggal_permohonan    = $(this).data('tanggal_permohonan');

          pemohon               = $(this).data('pemohon');

          cara_pengiriman       = $(this).data('cara_pengiriman');

          pengantar             = $(this).data('pemohon');

          jumlah_kontainer      = $(this).data('jumlah_kontainer');

          lama_pengujian        = $(this).data('lama_pengujian');

          lama_pengujian2       = $(this).data('lama_pengujian2');

          lama_pengujian3       = $(this).data('lama_pengujian3');

          tanggal_diterima      = $(this).data('tanggal_diterima');

          jabatan               = $(this).data('jabatan');

          nip_penerima_sampel   = $(this).data('nip_penerima_sampel');



      $("#modal-edit #id"). val(id);

      $("#modal-edit #no_permohonan"). val(no_permohonan);

      $("#modal-edit #tanggal_permohonan"). val(tanggal_permohonan);

      $("#modal-edit #pemohon"). val(pemohon);

      $("#modal-edit #cara_pengiriman"). val(cara_pengiriman);

      $("#modal-edit #pengantar"). val(pengantar);

      $("#modal-edit #jumlah_kontainer"). val(jumlah_kontainer);

      $("#modal-edit #lama_pengujian"). val(lama_pengujian);

      $("#modal-edit #lama_pengujian2"). val(lama_pengujian2);

      $("#modal-edit #lama_pengujian3"). val(lama_pengujian3);

      $("#modal-edit #tanggal_diterima"). val(tanggal_diterima);

      $("#modal-edit #jabatan"). val(jabatan);

      $("#modal-edit #nip_penerima_sampel"). val(nip_penerima_sampel);



    });



    $(document). ready(function(e){

      $("#form_edit_penerima_sampel").on("submit", (function(e){

      e.preventDefault();

      $.ajax({

      url :'models/proses_edit_terimasampel.php',

      type :'POST',

      data : new FormData (this),

      contentType : false,

      cache : false,

      processData : false,

      success : function(msg){

      $('.table'). html(msg),

              swal({

            title: "Data",

            text: "Berhasil Diubah!",

            type: "success"

        }).then(function() {

            window.location = "?page=penerima_sampel";

        });

      }

      });

     }));

    });





  // Input Permintaan Kesiapan Pengujian



$(document). on("click", "#input_pemintaan_kesiapan_pengujian", function(){

    let id_input                 = $(this).data('id_input');

        no_permohonan_input      = $(this).data('no_permohonan_input');

        nama_sampel_input        = $(this).data('nama_sampel_input');

        jumlah_sampel_input      = $(this).data('jumlah_sampel_input');

        kode_sampel_input        = $(this).data('kode_sampel_input');

        ma_input                 = $(this).data('ma_input');

        nip_ma_input             = $(this).data('nip_ma_input');



    $("#modal-edit #id_input"). val(id_input);

    $("#modal-edit #no_permohonan_input"). val(no_permohonan_input);

    $("#modal-edit #nama_sampel_input"). val(nama_sampel_input);

    $("#modal-edit #jumlah_sampel_input"). val(jumlah_sampel_input);

    $("#modal-edit #kode_sampel_input"). val();

    $("#modal-edit #ma_input"). val(ma_input);

    $("#modal-edit #nip_ma_input"). val(nip_ma_input);



    });



    $(document). ready(function(e){

    $("#form_input_kesiapan_permintaan_pengujian").on("submit", (function(e){

    e.preventDefault();

    $.ajax({

    url :'models/proses_input_permintaan_kesiapan.php',

    type :'POST',

    data : new FormData (this),

    contentType : false,

    cache : false,

    processData : false,

    success : function(msg){

      $('.table'). html(msg)

          }                                   

        });

      }));

    });





    // Edit Permintaan Kesiapan Pengujian



$(document). on("click", "#edit_pemintaan_kesiapan_pengujian", function(){

    let id                 = $(this).data('id');

        no_permohonan      = $(this).data('no_permohonan');

        nama_sampel        = $(this).data('nama_sampel');

        jumlah_sampel      = $(this).data('jumlah_sampel');

        kode_sampel        = $(this).data('kode_sampel');

        ma                 = $(this).data('ma');

        nip_ma             = $(this).data('nip_ma');



    $("#modal-edit #id"). val(id);

    $("#modal-edit #no_permohonan"). val(no_permohonan);

    $("#modal-edit #nama_sampel"). val(nama_sampel);

    $("#modal-edit #jumlah_sampel"). val(jumlah_sampel);

    $("#modal-edit #kode_sampel"). val(kode_sampel);

    $("#modal-edit #ma"). val(ma);

    $("#modal-edit #nip_ma"). val(nip_ma);



    });



    $(document). ready(function(e){

    $("#form_edit_kesiapan_permintaan_pengujian").on("submit", (function(e){

    e.preventDefault();

    $.ajax({

    url :'models/proses_edit_permintaan_kesiapan.php',

    type :'POST',

    data : new FormData (this),

    contentType : false,

    cache : false,

    processData : false,

    success : function(msg){

      $('.table'). html(msg),

           swal({

              title: "Data",

              text: "Berhasil Diubah!",

              type: "success"

          }).then(function() {

              window.location = "?page=permintaan_kesiapan_pengujian";

          });

          }                                   

        });

      }));

    });



// Input Respon Permohonan Pengujian



$(document). on("click", "#input_respon_permohonan_pengujian", function(){

    let id_input                 = $(this).data('id_input');

        no_permohonan_input      = $(this).data('no_permohonan_input');        

        tanggal_diterima_input   = $(this).data('tanggal_diterima_input');        

        penyelia_input           = $(this).data('penyelia_input');

        penyelia2_input          = $(this).data('penyelia2_input');

        analis_input             = $(this).data('analis_input');

        analis2_input            = $(this).data('analis2_input');

        bahan_input              = $(this).data('bahan_input');

        bahan2_input             = $(this).data('bahan2_input');

        alat_input               = $(this).data('alat_input');

        alat2_input              = $(this).data('alat2_input');

        ma_input                 = $(this).data('ma_input');

        nip_ma_input             = $(this).data('nip_ma_input');

        saran_input              = $(this).data('saran_input');

        tanggal_selesai_input    = $(this).data('tanggal_selesai_input');

    

    $("#modal-edit #id_input"). val(id_input);

    $("#modal-edit #no_permohonan_input"). val(no_permohonan_input);

    $("#modal-edit #tanggal_diterima_input"). val(tanggal_diterima_input);

    $("#modal-edit #penyelia_input"). val(penyelia_input);

    $("#modal-edit #penyelia2_input"). val(penyelia2_input);

    $("#modal-edit #analis_input"). val(analis_input);

    $("#modal-edit #analis2_input"). val(analis2_input);

    $("#modal-edit #bahan_input"). val(bahan_input);

    $("#modal-edit #bahan2_input"). val(bahan2_input);

    $("#modal-edit #alat_input"). val(alat_input);

    $("#modal-edit #alat2_input"). val(alat2_input);

    $("#modal-edit #ma_input"). val(ma_input);

    $("#modal-edit #nip_ma_input"). val(nip_ma_input);

    $("#modal-edit #saran_input"). val(saran_input);

    $("#modal-edit #tanggal_selesai_input"). val(tanggal_selesai_input);



    });



    $(document). ready(function(e){

     $("#form_input_respon_permohonan_pengujian").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_respon_permohonan.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=respon_permohonan";

                  });

           }

        });

     }));

    });



    // Edit Respon Permohonan Pengujian



$(document). on("click", "#edit_respon_permohonan_pengujian", function(){

    let id                 = $(this).data('id');

        no_permohonan      = $(this).data('no_permohonan');

        tanggal_diterima   = $(this).data('tanggal_diterima');

        penyelia           = $(this).data('penyelia');

        penyelia2          = $(this).data('penyelia2');

        analis             = $(this).data('analis');

        analis2            = $(this).data('analis2');

        bahan              = $(this).data('bahan');

        bahan2             = $(this).data('bahan2');

        alat               = $(this).data('alat');

        alat2              = $(this).data('alat2');

        ma                 = $(this).data('ma');

        nip_ma             = $(this).data('nip_ma');

        saran              = $(this).data('saran');

        tanggal_selesai    = $(this).data('tanggal_selesai');

   

    $("#modal-edit #id"). val(id);

    $("#modal-edit #no_permohonan"). val(no_permohonan);

    $("#modal-edit #tanggal_diterima"). val(tanggal_diterima); 

    $("#modal-edit #penyelia"). val(penyelia);

    $("#modal-edit #penyelia2"). val(penyelia2);

    $("#modal-edit #analis"). val(analis);

    $("#modal-edit #analis2"). val(analis2);

    $("#modal-edit #bahan"). val(bahan);

    $("#modal-edit #bahan2"). val(bahan2);

    $("#modal-edit #alat"). val(alat);

    $("#modal-edit #alat2"). val(alat2);

    $("#modal-edit #ma"). val(ma);

    $("#modal-edit #nip_ma"). val(nip_ma);

    $("#modal-edit #saran"). val(saran);

    $("#modal-edit #tanggal_selesai"). val(tanggal_selesai);



    });



    $(document). ready(function(e){

     $("#form_edit_respon_permohonan_pengujian").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_respon_permohonan.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=respon_permohonan";

                  });

           }

        });

     }));

    });







// Input Penyerahan Sampel Pengujian



$(document). on("click", "#input_penyerahan_sampel_pengujian", function(){

    let id_input                 = $(this).data('id_input');

        no_permohonan_input      = $(this).data('no_permohonan_input');

        kode_sampel_input        = $(this).data('kode_sampel_input');

        tanggal_penyerahan_input = $(this).data('tanggal_penyerahan_input');

        yang_menyerahkan_input   = $(this).data('yang_menyerahkan_input');

        nip_ygmenyerahkan_input  = $(this).data('nip_ygmenyerahkan_input');

        yang_menerima_input      = $(this).data('yang_menerima_input');

        nip_ygmenerima_input     = $(this).data('nip_ygmenerima_input');



     

    $("#modal-edit #id_input"). val(id_input);

    $("#modal-edit #no_permohonan_input"). val(no_permohonan_input);

    $("#modal-edit #kode_sampel_input"). val(kode_sampel_input); 

    $("#modal-edit #tanggal_penyerahan_input"). val();

    $("#modal-edit #yang_menyerahkan_input"). val(yang_menyerahkan_input);

    $("#modal-edit #nip_ygmenyerahkan_input"). val(nip_ygmenyerahkan_input);

    $("#modal-edit #yang_menerima_input"). val(yang_menerima_input);

    $("#modal-edit #nip_ygmenerima_input"). val(nip_ygmenerima_input);





    });



    $(document). ready(function(e){

     $("#form_input_penyerahan_sampel_pengujian").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_penyerahan_sampel.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyerahan_sampel";

                  });

           }

             

           

        });

     }));

    });







// Edit Penyerahan Sampel Pengujian



$(document). on("click", "#edit_penyerahan_sampel_pengujian", function(){

    let id                 = $(this).data('id');

        no_permohonan      = $(this).data('no_permohonan');

        kode_sampel        = $(this).data('kode_sampel');

        tanggal_penyerahan = $(this).data('tanggal_penyerahan');

        yang_menyerahkan   = $(this).data('yang_menyerahkan');

        nip_ygmenyerahkan  = $(this).data('nip_ygmenyerahkan');

        yang_menerima      = $(this).data('yang_menerima');

        nip_ygmenerima     = $(this).data('nip_ygmenerima');



     

    $("#modal-edit #id"). val(id);

    $("#modal-edit #no_permohonan"). val(no_permohonan);

    $("#modal-edit #kode_sampel"). val(kode_sampel); 

    $("#modal-edit #tanggal_penyerahan"). val(tanggal_penyerahan);

    $("#modal-edit #yang_menyerahkan"). val(yang_menyerahkan);

    $("#modal-edit #nip_ygmenyerahkan"). val(nip_ygmenyerahkan);

    $("#modal-edit #yang_menerima"). val(yang_menerima);

    $("#modal-edit #nip_ygmenerima"). val(nip_ygmenerima);





    });



    $(document). ready(function(e){

     $("#form_edit_penyerahan_sampel_pengujian").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_penyerahan_sampel.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyerahan_sampel";

                  });

           }

             

           

        });

     }));

    });



// Input Kesiapan Pengujian



$(document). on("click", "#input_kesiapan_pengujian", function(){

    let id_input                 = $(this).data('id_input');

        kondisi_sampel_input     = $(this).data('kondisi_sampel_input');

        kode_sampel_input        = $(this).data('kode_sampel_input');

        mt_input                 = $(this).data('mt_input');

        nip_mt_input             = $(this).data('nip_mt_input');

     

    $("#modal-edit #id_input"). val(id_input);

    $("#modal-edit #kondisi_sampel_input"). val(kondisi_sampel_input);

    $("#modal-edit #kode_sampel_input"). val(kode_sampel_input);

    $("#modal-edit #mt_input"). val(mt_input);

    $("#modal-edit #nip_mt_input"). val(nip_mt_input);



    });



    // $(document). ready(function(e){

    //  $("#form_input_kesiapan_pengujian").on("submit", (function(e){

    //     e.preventDefault();

    //     $.ajax({

    //        url :'models/proses_input_kesiapan_pengujian.php',

    //        type :'POST',

    //        data: $("#form_input_kesiapan_pengujian").serialize(),

    //        contentType : false,

    //        cache : false,

    //        processData : false,

    //        success: function(data)
    //        {
    //            alert(data); // show response from the php script.
    //        }
             
    //     });

    //  }));

    // });





// Edit Kesiapan Pengujian



$(document). on("click", "#edit_kesiapan_pengujian", function(){

    let id                 = $(this).data('id');

        kondisi_sampel     = $(this).data('kondisi_sampel');

        kode_sampel        = $(this).data('kode_sampel');

        mt                 = $(this).data('mt');

        nip_mt             = $(this).data('nip_mt');

     

    $("#modal-edit #id"). val(id);

    $("#modal-edit #kondisi_sampel"). val(kondisi_sampel);

    $("#modal-edit #kode_sampel"). val(kode_sampel);

    $("#modal-edit #mt"). val(mt);

    $("#modal-edit #nip_mt"). val(nip_mt);



    });



    $(document). ready(function(e){

     $("#form_edit_kesiapan_pengujian").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_kesiapan_pengujian.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

               swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=kesiapan_pengujian";

                  });

           }

             

           

        });

     }));

    });



// Input Penyelia_Analis



$(document). on("click", "#input_penyelia_analis", function(){

    let id_input                 = $(this).data('id_input');

        hari_input               = $(this).data('hari_input');

        bulan_input              = $(this).data('bulan_input');

        tahun_input              = $(this).data('tahun_input');

        no_surat_tugas_input     = $(this).data('no_surat_tugas_input');

        tanggal_penunjukan_input = $(this).data('tanggal_penunjukan_input');

        kode_sampel_input        = $(this).data('kode_sampel_input');

        nama_sampel_input        = $(this).data('nama_sampel_input');

        no_sampel_input          = $(this).data('no_sampel_input');

        lab_penguji_input        = $(this).data('lab_penguji_input');

        nama_penyelia_input      = $(this).data('nama_penyelia_input');

        nama_analis_input        = $(this).data('nama_analis_input');

        jab_penyelia_input       = $(this).data('jab_penyelia_input');

        jab_analis_input         = $(this).data('jab_analis_input');

        mt_input                 = $(this).data('mt_input');

        nip_mt_input             = $(this).data('nip_mt_input');



     

    $("#modal-edit #id_input "). val(id_input);

    $("#modal-edit #hari_input"). val();

    $("#modal-edit #bulan_input"). val();

    $("#modal-edit #tahun_input"). val();

    $("#modal-edit #no_surat_tugas_input"). val();

    $("#modal-edit #tanggal_penunjukan_input"). val();

    $("#modal-edit #kode_sampel_input"). val(kode_sampel_input);

    $("#modal-edit #nama_sampel_input"). val(nama_sampel_input);

    $("#modal-edit #no_sampel_input"). val(no_sampel_input);   

    $("#modal-edit #lab_penguji_input"). val(lab_penguji_input);

    $("#modal-edit #nama_penyelia_input"). val(nama_penyelia_input);

    $("#modal-edit #nama_analis_input"). val(nama_analis_input);

    $("#modal-edit #jab_penyelia_input"). val(jab_penyelia_input);

    $("#modal-edit #jab_analis_input"). val(jab_analis_input);

    $("#modal-edit #mt_input"). val(mt_input);

    $("#modal-edit #nip_mt_input"). val(nip_mt_input);





    });



    $(document). ready(function(e){

     $("#form_input_penyelia_analis").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_penunjukan_penyelia_analis.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg)  

           } 

        });

     }));

    });





// Edit Penyelia_Analis



$(document). on("click", "#edit_penyelia_analis", function(){

    let id                 = $(this).data('id');

        hari               = $(this).data('hari');

        bulan              = $(this).data('bulan');

        tahun              = $(this).data('tahun');

        no_surat_tugas     = $(this).data('no_surat_tugas');

        tanggal_penunjukan = $(this).data('tanggal_penunjukan');

        kode_sampel        = $(this).data('kode_sampel');

        nama_sampel        = $(this).data('nama_sampel');

        no_sampel          = $(this).data('no_sampel');

        lab_penguji        = $(this).data('lab_penguji');

        nama_penyelia      = $(this).data('nama_penyelia');

        nama_analis        = $(this).data('nama_analis');

        jab_penyelia       = $(this).data('jab_penyelia');

        jab_analis         = $(this).data('jab_analis');

        mt                 = $(this).data('mt');

        nip_mt             = $(this).data('nip_mt');



     

    $("#modal-edit #id"). val(id);

    $("#modal-edit #hari"). val(hari);

    $("#modal-edit #bulan"). val(bulan);

    $("#modal-edit #tahun"). val(tahun);

    $("#modal-edit #no_surat_tugas"). val(no_surat_tugas);

    $("#modal-edit #tanggal_penunjukan"). val(tanggal_penunjukan);

    $("#modal-edit #kode_sampel"). val(kode_sampel);

    $("#modal-edit #nama_sampel"). val(nama_sampel);

    $("#modal-edit #no_sampel"). val(no_sampel);   

    $("#modal-edit #lab_penguji"). val(lab_penguji);

    $("#modal-edit #nama_penyelia"). val(nama_penyelia);

    $("#modal-edit #nama_analis"). val(nama_analis);

    $("#modal-edit #jab_penyelia"). val(jab_penyelia);

    $("#modal-edit #jab_analis"). val(jab_analis);

    $("#modal-edit #mt"). val(mt);

    $("#modal-edit #nip_mt"). val(nip_mt);





    });



    $(document). ready(function(e){

     $("#form_edit_penyelia_analis").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_penunjukan_penyelia_analis.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyelia_analis";

                  });

           }             

        });

     }));

    });



// Input Pengelola Sampel





$(document). on("click", "#input_pengelola_sampel", function(){

    let id_input                      = $(this).data('id_input');

        kode_sampel_input             = $(this).data('kode_sampel_input');

        nama_sampel_input             = $(this).data('nama_sampel_input');

        no_sampel_input               = $(this).data('no_sampel_input');

        lab_penguji_input             = $(this).data('lab_penguji_input');

        yang_menyerahkanlab_input     = $(this).data('yang_menyerahkanlab_input');

        yang_menerimalab_input        = $(this).data('yang_menerimalab_input');

        nip_yang_menyerahkanlab_input = $(this).data('nip_yang_menyerahkanlab_input');

        nip_yang_menerimalab_input    = $(this).data('nip_yang_menerimalab_input');





     

    $("#modal-edit #id_input"). val(id_input);

    $("#modal-edit #kode_sampel_input"). val(kode_sampel_input);

    $("#modal-edit #nama_sampel_input"). val(nama_sampel_input);

    $("#modal-edit #no_sampel_input"). val(no_sampel_input);   

    $("#modal-edit #lab_penguji_input"). val(lab_penguji_input); 

    $("#modal-edit #yang_menyerahkanlab_input"). val(yang_menyerahkanlab_input);

    $("#modal-edit #yang_menerimalab_input"). val(yang_menerimalab_input);

    $("#modal-edit #nip_yang_menyerahkanlab_input"). val(nip_yang_menyerahkanlab_input);

    $("#modal-edit #nip_yang_menerimalab_input"). val(nip_yang_menerimalab_input);



    });



    $(document). ready(function(e){

     $("#form_input_pengelola_sampel").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_pengelola_sampel.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=pengelola_sampel";

                  });

           } 

        });

     }));

    });



    // Edit Pengelola Sampel





$(document). on("click", "#edit_pengelola_sampel", function(){

    let id                      = $(this).data('id');

        kode_sampel             = $(this).data('kode_sampel');

        nama_sampel             = $(this).data('nama_sampel');

        no_sampel               = $(this).data('no_sampel');

        lab_penguji             = $(this).data('lab_penguji');

        yang_menyerahkanlab     = $(this).data('yang_menyerahkanlab');

        yang_menerimalab        = $(this).data('yang_menerimalab');

        nip_yang_menyerahkanlab = $(this).data('nip_yang_menyerahkanlab');

        nip_yang_menerimalab    = $(this).data('nip_yang_menerimalab');





     

    $("#modal-edit #id"). val(id);

    $("#modal-edit #kode_sampel"). val(kode_sampel);

    $("#modal-edit #nama_sampel"). val(nama_sampel);

    $("#modal-edit #no_sampel"). val(no_sampel);   

    $("#modal-edit #lab_penguji"). val(lab_penguji); 

    $("#modal-edit #yang_menyerahkanlab"). val(yang_menyerahkanlab);

    $("#modal-edit #yang_menerimalab"). val(yang_menerimalab);

    $("#modal-edit #nip_yang_menyerahkanlab"). val(nip_yang_menyerahkanlab);

    $("#modal-edit #nip_yang_menerimalab"). val(nip_yang_menerimalab);



    });



    $(document). ready(function(e){

     $("#form_edit_pengelola_sampel").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_pengelola_sampel.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=pengelola_sampel";

                  });

           }  

        });

     }));

    });

          

// Input Data Teknis



$(document). on("click", "#input_data_teknis", function(){

      let id_input                      = $(this).data('id_input');

          tanggal_penyerahan_lab_input  = $(this).data('tanggal_penyerahan_lab_input');

          tanggal_pengujian_input       = $(this).data('tanggal_pengujian_input');

          rekomendasi_input             = $(this).data('rekomendasi_input');

          ket_kesimpulan_input          = $(this).data('ket_kesimpulan_input');

          nama_penyelia_input           = $(this).data('nama_penyelia_input');

          nama_analis_input             = $(this).data('nama_analis_input');

          nip_penyelia_input            = $(this).data('nip_penyelia_input');

          nip_analis_input              = $(this).data('nip_analis_input');

      

      $("#modal-edit #id_input"). val(id_input);

      $("#modal-edit #tanggal_penyerahan_lab_input"). val(tanggal_penyerahan_lab_input);

      $("#modal-edit #tanggal_pengujian_input"). val();

      $("#modal-edit #rekomendasi_input"). val();

      $("#modal-edit #ket_kesimpulan_input"). val();

      $("#modal-edit #nama_penyelia_input"). val(nama_penyelia_input);

      $("#modal-edit #nama_analis_input"). val(nama_analis_input);

      $("#modal-edit #nip_penyelia_input"). val(nip_penyelia_input);

      $("#modal-edit #nip_analis_input"). val(nip_analis_input);

      



    });

    

   $(document). ready(function(e){

       $("#form_input_data_teknis").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_input_data_teknis.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Di Input! ",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=data_teknis";

                    });

             }                               

          });

       }));

    });           



// Edit Data Teknis



$(document). on("click", "#edit_data_teknis", function(){

      let id                      = $(this).data('id');

          tanggal_penyerahan_lab  = $(this).data('tanggal_penyerahan_lab');

          tanggal_pengujian       = $(this).data('tanggal_pengujian');

          rekomendasi             = $(this).data('rekomendasi');

          ket_kesimpulan          = $(this).data('ket_kesimpulan');

          nama_penyelia           = $(this).data('nama_penyelia');

          nama_analis             = $(this).data('nama_analis');

          nip_penyelia            = $(this).data('nip_penyelia');

          nip_analis              = $(this).data('nip_analis');

      

      $("#modal-edit #id"). val(id);

      $("#modal-edit #tanggal_penyerahan_lab"). val(tanggal_penyerahan_lab);

      $("#modal-edit #tanggal_pengujian"). val(tanggal_pengujian);

      $("#modal-edit #rekomendasi"). val(rekomendasi);

      $("#modal-edit #ket_kesimpulan"). val(ket_kesimpulan);

      $("#modal-edit #nama_penyelia"). val(nama_penyelia);

      $("#modal-edit #nama_analis"). val(nama_analis);

      $("#modal-edit #nip_penyelia"). val(nip_penyelia);

      $("#modal-edit #nip_analis"). val(nip_analis);

      



    });

    

   $(document). ready(function(e){

       $("#form_edit_data_teknis").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_edit_data_teknis.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Diubah!",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=data_teknis";

                    });

             }                                         

          });

       }));

    });



//  Input Sertifikat



$(document). on("click", "#input_sertifikat", function(){

      let id_input                      = $(this).data('id_input');

          tanggal_penyerahan_lab_input  = $(this).data('tanggal_penyerahan_lab_input');

          tanggal_sertifikat_input      = $(this).data('tanggal_sertifikat_input');

          tanggal_pengujian_input       = $(this).data('tanggal_pengujian_input');

          kode_sampel_input             = $(this).data('kode_sampel_input');

          no_sertifikat_input           = $(this).data('no_sertifikat_input');

          rekomendasi_input             = $(this).data('rekomendasi_input');

          kepala_plh_input              = $(this).data('kepala_plh_input');

          nip_kepala_plh_input          = $(this).data('nip_kepala_plh_input');

          nama_penyelia_input           = $(this).data('nama_penyelia_input');

          nip_penyelia_input            = $(this).data('nip_penyelia_input');

          ket_kesimpulan_input          = $(this).data('ket_kesimpulan_input');

                        

      $("#modal-edit #id_input"). val(id_input);

      $("#modal-edit #tanggal_penyerahan_lab_input"). val();

      $("#modal-edit #tanggal_sertifikat_input"). val();

      $("#modal-edit #tanggal_pengujian_input"). val();

      $("#modal-edit #kode_sampel_input"). val(kode_sampel_input);                

      $("#modal-edit #no_sertifikat_input"). val();

      $("#modal-edit #rekomendasi_input"). val(rekomendasi_input);

      $("#modal-edit #kepala_plh_input"). val(kepala_plh_input);

      $("#modal-edit #nip_kepala_plh_input"). val(nip_kepala_plh_input);

      $("#modal-edit #nama_penyelia_input"). val(nama_penyelia_input);

      $("#modal-edit #nip_penyelia_input"). val(nip_penyelia_input);

      $("#modal-edit #ket_kesimpulan_input"). val(ket_kesimpulan_input);



    });

    

   $(document). ready(function(e){

       $("#form_input_sertifikat").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_input_sertifikat.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg) 

             }                                         

          });

       }));

    });







//  Edit Sertifikat



$(document). on("click", "#edit_sertifikat", function(){

      let id                      = $(this).data('id');

          tanggal_penyerahan_lab  = $(this).data('tanggal_penyerahan_lab');

          tanggal_sertifikat      = $(this).data('tanggal_sertifikat');

          tanggal_pengujian       = $(this).data('tanggal_pengujian');

          kode_sampel             = $(this).data('kode_sampel');

          no_sertifikat           = $(this).data('no_sertifikat');

          rekomendasi             = $(this).data('rekomendasi');

          kepala_plh              = $(this).data('kepala_plh');

          nip_kepala_plh          = $(this).data('nip_kepala_plh');

          nama_penyelia           = $(this).data('nama_penyelia');

          nip_penyelia            = $(this).data('nip_penyelia');

          ket_kesimpulan          = $(this).data('ket_kesimpulan');

                        

      $("#modal-edit #id"). val(id);

      $("#modal-edit #tanggal_penyerahan_lab"). val(tanggal_penyerahan_lab);

      $("#modal-edit #tanggal_sertifikat"). val(tanggal_sertifikat);

      $("#modal-edit #tanggal_pengujian"). val(tanggal_pengujian);

      $("#modal-edit #kode_sampel"). val(kode_sampel);                

      $("#modal-edit #no_sertifikat"). val(no_sertifikat);

      $("#modal-edit #rekomendasi"). val(rekomendasi);

      $("#modal-edit #kepala_plh"). val(kepala_plh);

      $("#modal-edit #nip_kepala_plh"). val(nip_kepala_plh);

      $("#modal-edit #nama_penyelia"). val(nama_penyelia);

      $("#modal-edit #nip_penyelia"). val(nip_penyelia);

      $("#modal-edit #ket_kesimpulan"). val(ket_kesimpulan);



    });

    

   $(document). ready(function(e){

       $("#form_edit_sertifikat").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_edit_sertifikat.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Diubah!",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=sertifikat";

                    });

             }                                          

          });

       }));

    });





// Input Surat Hasil Uji



$(document). on("click", "#input_surat_hasil_uji", function(){

      let id_input                = $(this).data('id_input');

          no_agenda_input         = $(this).data('no_agenda_input');

          no_lhu_input            = $(this).data('no_lhu_input');

          tanggal_lhu_input       = $(this).data('tanggal_lhu_input');

          kepala_plh2_input       = $(this).data('kepala_plh2_input');

          nip_kepala_plh2_input   = $(this).data('nip_kepala_plh2_input');



      $("#modal-edit #id_input"). val(id_input);

      $("#modal-edit #no_agenda_input"). val();

      $("#modal-edit #no_lhu_input"). val();

      $("#modal-edit #tanggal_lhu_input"). val();

      $("#modal-edit #kepala_plh2_input"). val(kepala_plh2_input);

      $("#modal-edit #nip_kepala_plh2_input"). val(nip_kepala_plh2_input);



    });

    

   $(document). ready(function(e){

       $("#form_input_surat_hasil_uji").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_input_lhu.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg)

             }                                          

          });

       }));

    });





// Edit Surat Hasil Uji



$(document). on("click", "#edit_surat_hasil_uji", function(){

      let id                = $(this).data('id');

          no_agenda         = $(this).data('no_agenda');

          no_lhu            = $(this).data('no_lhu');

          tanggal_lhu       = $(this).data('tanggal_lhu');

          kepala_plh2       = $(this).data('kepala_plh2');

          nip_kepala_plh2   = $(this).data('nip_kepala_plh2');



      $("#modal-edit #id"). val(id);

      $("#modal-edit #no_agenda"). val(no_agenda);

      $("#modal-edit #no_lhu"). val(no_lhu);

      $("#modal-edit #tanggal_lhu"). val(tanggal_lhu);

      $("#modal-edit #kepala_plh2"). val(kepala_plh2);

      $("#modal-edit #nip_kepala_plh2"). val(nip_kepala_plh2);



    });

    

   $(document). ready(function(e){

       $("#form_edit_surat_hasil_uji").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_edit_lhu.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Diubah!",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=surat_hasil_uji";

                    });

             }                                         

          });

       }));

    });



   // Database Tumbuhan



   $(document). on("click", "#edit_database_tumbuhan", function(){

           var id_tumbuhan           = $(this). data('id_tumbuhan');

           var nama_tumbuhan         = $(this). data('nama_tumbuhan');

           var nama_ilmiah_tumbuhan  = $(this). data('nama_ilmiah_tumbuhan');

           

           $("#modal-edit #id_tumbuhan"). val(id_tumbuhan);

           $("#modal-edit #nama_tumbuhan"). val(nama_tumbuhan);

           $("#modal-edit #nama_ilmiah_tumbuhan"). val(nama_ilmiah_tumbuhan);



         });

         

         $(document). ready(function(e){

           $("#form_db_tumbuhan").on("submit", (function(e){

             e.preventDefault();

             $.ajax({

               url :'database/models/proses_edit_namatumbuhan.php',

               type :'POST',

               data : new FormData (this),

               contentType : false,

               cache : false,

               processData : false,

               success : function(msg){

                 $('.table'). html(msg);

               }   

             });

           }));

         });



// Database Patogen



  $(document). on("click", "#edit_data_dbpatogen", function(){

           var id_patogen           = $(this). data('id_patogen');

           var nama_penyakit        = $(this). data('nama_penyakit');

           var nama_latin_penyakit  = $(this). data('nama_latin_penyakit');

           

           $("#modal-edit #id_patogen"). val(id_patogen);

           $("#modal-edit #nama_penyakit"). val(nama_penyakit);

           $("#modal-edit #nama_latin_penyakit"). val(nama_latin_penyakit);



         })

         

         $(document). ready(function(e){

           $("#form_db_patogen").on("submit", (function(e){

             e.preventDefault();

             $.ajax({

               url :'database/models/proses_edit_patogen.php',

               type :'POST',

               data : new FormData (this),

               contentType : false,

               cache : false,

               processData : false,

               success : function(msg){

                 $('.table'). html(msg);

               }   

             });

           }));

         });



// Database User



$(document). on("click", "#edit_data_user", function(){

           var id_pejabat          = $(this). data('id_pejabat');

           var nama_pejabat        = $(this). data('nama_pejabat');

           var nip_pejabat         = $(this). data('nip_pejabat');

           

           $("#modal-edit #id_pejabat"). val(id_pejabat);

           $("#modal-edit #nama_pejabat"). val(nama_pejabat);

           $("#modal-edit #nip_pejabat"). val(nip_pejabat);



         });

         

         $(document). ready(function(e){

           $("#form_edit_user").on("submit", (function(e){

             e.preventDefault();

             $.ajax({

               url :'database/models/proses_editnama_user.php',

               type :'POST',

               data : new FormData (this),

               contentType : false,

               cache : false,

               processData : false,

               success : function(msg){

                 $('.table'). html(msg);

               }   

             });

           }));

         });





/* -------------------------KARANTINA HEWAN-------------------------------*/



$(document). on("click", "#edit_data_permohonan_kh", function(){

   let id                       = $(this). data('id');

   let no_permohonan            = $(this). data('no_permohonan');

   let tanggal_permohonan       = $(this). data('tanggal_permohonan');

   let tanggal_acu_permohonan   = $(this). data('tanggal_acu_permohonan');

   let nama_sampel              = $(this). data('nama_sampel');

   let jumlah_sampel            = $(this). data('jumlah_sampel');

   let no_sampel_awal           = $(this). data('no_sampel_awal');

   let bagian_hewan             = $(this). data('bagian_hewan');

   let produk_hewan             = $(this). data('produk_hewan');

   let metode_pengujian         = $(this). data('metode_pengujian');

   let biaya_pengujian          = $(this). data('biaya_pengujian');

   let waktu_pengambilan_sampel = $(this). data('waktu_pengambilan_sampel');

   let area_asal                = $(this). data('area_asal');

   let cara_pengambilan_sampel  = $(this). data('cara_pengambilan_sampel');

   let target_pengujian         = $(this). data('target_pengujian');

   let lama_pengujian           = $(this). data('lama_pengujian');

   let nama_pemilik             = $(this). data('nama_pemilik');

   let alamat_pemilik           = $(this). data('alamat_pemilik');

   let dokumen_pendukung        = $(this). data('dokumen_pendukung');

   let pemohon                  = $(this). data('pemohon');

   let nip_pemohon              = $(this). data('nip_pemohon');

   

   $("#modal-edit_kh #id"). val(id);

   $("#modal-edit_kh #no_permohonan"). val(no_permohonan);

   $("#modal-edit_kh #tanggal_permohonan"). val(tanggal_permohonan);

   $("#modal-edit_kh #tanggal_acu_permohonan"). val(tanggal_acu_permohonan);

   $("#modal-edit_kh #nama_sampel"). val(nama_sampel);

   $("#modal-edit_kh #jumlah_sampel"). val(jumlah_sampel);

   $("#modal-edit_kh #no_sampel_awal"). val(no_sampel_awal);

   $("#modal-edit_kh #bagian_hewan"). val(bagian_hewan);

   $("#modal-edit_kh #produk_hewan"). val(produk_hewan);

   $("#modal-edit_kh #metode_pengujian"). val(metode_pengujian);

   $("#modal-edit_kh #biaya_pengujian"). val(biaya_pengujian);

   $("#modal-edit_kh #waktu_pengambilan_sampel"). val(waktu_pengambilan_sampel);

   $("#modal-edit_kh #area_asal"). val(area_asal);

   $("#modal-edit_kh #cara_pengambilan_sampel"). val(cara_pengambilan_sampel);          

   $("#modal-edit_kh #target_pengujian"). val(target_pengujian);

   $("#modal-edit_kh #lama_pengujian"). val(lama_pengujian);

   $("#modal-edit_kh #nama_pemilik"). val(nama_pemilik);

   $("#modal-edit_kh #alamat_pemilik"). val(alamat_pemilik);

   $("#modal-edit_kh #dokumen_pendukung"). val(dokumen_pendukung);

   $("#modal-edit_kh #pemohon"). val(pemohon);

   $("#modal-edit_kh #nip_pemohon"). val(nip_pemohon);

   

 });

 

 $(document). ready(function(e){

   $("#form_permohonan_kh").on("submit", (function(e){

     e.preventDefault();

     $.ajax({

       url :'models/proses_editdata_permohonan_kh.php',

       type :'POST',

       data : new FormData (this),

       contentType : false,

       cache : false,

       processData : false,

       success : function(msg){

        $('.table'). html(msg),

        swal({

            title: "Sukses",

            text: "Data Berhasil Diubah",

            type: "success"

        }).then(function() {

            window.location = "?page=data_permohonan";

        });

       }  

     });

   }));

 });



    // Input Penerima Sampel



 $(document). on("click", "#input_penerima_sampel_kh", function(){

   let id_input                       = $(this). data('id_input');

   let no_permohonan_input            = $(this). data('no_permohonan_input');

   let tanggal_permohonan_input       = $(this). data('tanggal_permohonan_input');

   let pemohon_input                  = $(this). data('pemohon_input');

   let lama_pengujian_input           = $(this). data('lama_pengujian_input');

   let tanggal_diterima_input         = $(this). data('tanggal_diterima_input'); 

   let jam_diterima_input             = $(this). data('jam_diterima_input');

   let cara_pengiriman_input          = $(this). data('cara_pengiriman_input');

   let nama_pengirim_input            = $(this). data('nama_pengirim_input');

   let nama_pelanggan_input           = $(this). data('nama_pelanggan_input');

   let alamat_pelanggan_input         = $(this). data('alamat_pelanggan_input');

   let jumlah_kontainer_input         = $(this). data('jumlah_kontainer_input');

   let jenis_sampel_input             = $(this). data('jenis_sampel_input');

   let target_pengujian2_input        = $(this). data('target_pengujian2_input');

   let penerima_sampel_input          = $(this). data('penerima_sampel_input');

   let nip_penerima_sampel_input      = $(this). data('nip_penerima_sampel_input');

   let no_sampel_input                = $(this). data('no_sampel_input');



   

   $("#modal-edit_kh #id_input"). val(id_input);

   $("#modal-edit_kh #no_permohonan_input"). val(no_permohonan_input);

   $("#modal-edit_kh #tanggal_permohonan_input"). val(tanggal_permohonan_input); 

   $("#modal-edit_kh #pemohon_input"). val(pemohon_input);  

   $("#modal-edit_kh #lama_pengujian_input"). val(lama_pengujian_input);

   $("#modal-edit_kh #tanggal_diterima_input"). val();

   $("#modal-edit_kh #jam_diterima_input"). val();

   $("#modal-edit_kh #cara_pengiriman_input"). val(cara_pengiriman_input);

   $("#modal-edit_kh #nama_pengirim_input"). val(nama_pengirim_input);

   $("#modal-edit_kh #nama_pelanggan_input"). val(nama_pelanggan_input);

   $("#modal-edit_kh #alamat_pelanggan_input"). val(alamat_pelanggan_input);

   $("#modal-edit_kh #jumlah_kontainer_input"). val(jumlah_kontainer_input);

   $("#modal-edit_kh #jenis_sampel_input"). val(jenis_sampel_input);

   $("#modal-edit_kh #target_pengujian2_input"). val(target_pengujian2_input);

   $("#modal-edit_kh #penerima_sampel_input"). val(penerima_sampel_input);

   $("#modal-edit_kh #nip_penerima_sampel_input"). val(nip_penerima_sampel_input);

   $("#modal-edit_kh #no_sampel_input"). val();



});



$(document). ready(function(e){

  $("#form_input_penerima_sampel_kh").on("submit", (function(e){

  e.preventDefault();

  $.ajax({

  url :'models/proses_input_terimasampel_kh.php',

  type :'POST',

  data : new FormData (this),

  contentType : false,

  cache : false,

  processData : false,

  success : function(msg){

  $('.table'). html(msg)     

  }

  });

 }));

});



 // Edit Penerima Sampel



  $(document). on("click", "#edit_penerima_sampel_kh", function(){

   let id                       = $(this). data('id');

   let no_permohonan            = $(this). data('no_permohonan');

   let tanggal_permohonan       = $(this). data('tanggal_permohonan');

   let pemohon                  = $(this). data('pemohon');

   let lama_pengujian           = $(this). data('lama_pengujian');

   let tanggal_diterima         = $(this). data('tanggal_diterima'); 

   let jam_diterima             = $(this). data('jam_diterima');

   let cara_pengiriman          = $(this). data('cara_pengiriman');

   let nama_pengirim            = $(this). data('nama_pengirim');

   let nama_pelanggan           = $(this). data('nama_pelanggan');

   let alamat_pelanggan         = $(this). data('alamat_pelanggan');

   let jumlah_kontainer         = $(this). data('jumlah_kontainer');

   let jenis_sampel             = $(this). data('jenis_sampel');

   let target_pengujian2        = $(this). data('target_pengujian2');

   let penerima_sampel          = $(this). data('penerima_sampel');

   let nip_penerima_sampel      = $(this). data('nip_penerima_sampel');

   let no_sampel                = $(this). data('no_sampel');



   

   $("#modal-edit_kh #id"). val(id);

   $("#modal-edit_kh #no_permohonan"). val(no_permohonan);

   $("#modal-edit_kh #tanggal_permohonan"). val(tanggal_permohonan); 

   $("#modal-edit_kh #pemohon"). val(pemohon);  

   $("#modal-edit_kh #lama_pengujian"). val(lama_pengujian);

   $("#modal-edit_kh #tanggal_diterima"). val(tanggal_diterima);

   $("#modal-edit_kh #jam_diterima"). val(jam_diterima);

   $("#modal-edit_kh #cara_pengiriman"). val(cara_pengiriman);

   $("#modal-edit_kh #nama_pengirim"). val(nama_pengirim);

   $("#modal-edit_kh #nama_pelanggan"). val(nama_pelanggan);

   $("#modal-edit_kh #alamat_pelanggan"). val(alamat_pelanggan);

   $("#modal-edit_kh #jumlah_kontainer"). val(jumlah_kontainer);

   $("#modal-edit_kh #jenis_sampel"). val(jenis_sampel);

   $("#modal-edit_kh #target_pengujian2"). val(target_pengujian2);

   $("#modal-edit_kh #penerima_sampel"). val(penerima_sampel);

   $("#modal-edit_kh #nip_penerima_sampel"). val(nip_penerima_sampel);

   $("#modal-edit_kh #no_sampel"). val(no_sampel);

});



$(document). ready(function(e){

  $("#form_edit_penerima_sampel_kh").on("submit", (function(e){

  e.preventDefault();

  $.ajax({

  url :'models/proses_edit_terimasampel_kh.php',

  type :'POST',

  data : new FormData (this),

  contentType : false,

  cache : false,

  processData : false,

  success : function(msg){

  $('.table'). html(msg),

          swal({

        title: "Data",

        text: "Berhasil Di Input!",

        type: "success"

    }).then(function() {

        window.location = "?page=penerima_sampel";

    });

  }

  });

 }));

});



  // Input Permintaan Kesiapan Pengujian



$(document). on("click", "#input_pemintaan_kesiapan_pengujian_kh", function(){

    let id_input                 = $(this).data('id_input');

    let no_permohonan_input      = $(this).data('no_permohonan_input');

    let nama_sampel_input        = $(this).data('nama_sampel_input');

    let jumlah_sampel_input      = $(this).data('jumlah_sampel_input');

    let kode_sampel_input        = $(this).data('kode_sampel_input');

    let ma_input                 = $(this).data('ma_input');

    let nip_ma_input             = $(this).data('nip_ma_input');



    $("#modal-edit_kh #id_input"). val(id_input);

    $("#modal-edit_kh #no_permohonan_input"). val(no_permohonan_input);

    $("#modal-edit_kh #nama_sampel_input"). val(nama_sampel_input);

    $("#modal-edit_kh #jumlah_sampel_input"). val(jumlah_sampel_input);

    $("#modal-edit_kh #kode_sampel_input"). val();

    $("#modal-edit_kh #ma_input"). val(ma_input);

    $("#modal-edit_kh #nip_ma_input"). val(nip_ma_input);



    });



    $(document). ready(function(e){

    $("#form_input_kesiapan_permintaan_pengujian_kh").on("submit", (function(e){

    e.preventDefault();

    $.ajax({

    url :'models/proses_input_permintaan_kesiapan_kh.php',

    type :'POST',

    data : new FormData (this),

    contentType : false,

    cache : false,

    processData : false,

    success : function(msg){

      $('.table'). html(msg)

          }                                   

        });

      }));

    });





    // Edit Permintaan Kesiapan Pengujian



$(document). on("click", "#edit_pemintaan_kesiapan_pengujian_kh", function(){

    let id                 = $(this).data('id');

    let no_permohonan      = $(this).data('no_permohonan');

    let nama_sampel        = $(this).data('nama_sampel');

    let jumlah_sampel      = $(this).data('jumlah_sampel');

    let kode_sampel        = $(this).data('kode_sampel');

    let ma                 = $(this).data('ma');

    let nip_ma             = $(this).data('nip_ma');



    $("#modal-edit_kh #id"). val(id);

    $("#modal-edit_kh #no_permohonan"). val(no_permohonan);

    $("#modal-edit_kh #nama_sampel"). val(nama_sampel);

    $("#modal-edit_kh #jumlah_sampel"). val(jumlah_sampel);

    $("#modal-edit_kh #kode_sampel"). val(kode_sampel);

    $("#modal-edit_kh #ma"). val(ma);

    $("#modal-edit_kh #nip_ma"). val(nip_ma);



    });



    $(document). ready(function(e){

    $("#form_edit_kesiapan_permintaan_pengujian_kh").on("submit", (function(e){

    e.preventDefault();

    $.ajax({

    url :'models/proses_edit_permintaan_kesiapan_kh.php',

    type :'POST',

    data : new FormData (this),

    contentType : false,

    cache : false,

    processData : false,

    success : function(msg){

      $('.table'). html(msg),

           swal({

              title: "Data",

              text: "Berhasil Diubah!",

              type: "success"

          }).then(function() {

              window.location = "?page=permintaan_kesiapan_pengujian";

          });

          }                                   

        });

      }));

    });


    // Input Respon Permohonan Pengujian



$(document). on("click", "#input_respon_permohonan_pengujian_kh", function(){

    let id_input                 = $(this).data('id_input');

    let no_permohonan_input      = $(this).data('no_permohonan_input');        

    let tanggal_diterima_input   = $(this).data('tanggal_diterima_input');        

    let penyelia_input           = $(this).data('penyelia_input');

    let penyelia2_input          = $(this).data('penyelia2_input');

    let analis_input             = $(this).data('analis_input');

    let analis2_input            = $(this).data('analis2_input');

    let bahan_input              = $(this).data('bahan_input');

    let bahan2_input             = $(this).data('bahan2_input');

    let alat_input               = $(this).data('alat_input');

    let alat2_input              = $(this).data('alat2_input');

    let ma_input                 = $(this).data('ma_input');

    let nip_ma_input             = $(this).data('nip_ma_input');

    let saran_input              = $(this).data('saran_input');

    let tanggal_selesai_input    = $(this).data('tanggal_selesai_input');

    

    $("#modal-edit_kh #id_input"). val(id_input);

    $("#modal-edit_kh #no_permohonan_input"). val(no_permohonan_input);

    $("#modal-edit_kh #tanggal_diterima_input"). val(tanggal_diterima_input);

    $("#modal-edit_kh #penyelia_input"). val(penyelia_input);

    $("#modal-edit_kh #penyelia2_input"). val(penyelia2_input);

    $("#modal-edit_kh #analis_input"). val(analis_input);

    $("#modal-edit_kh #analis2_input"). val(analis2_input);

    $("#modal-edit_kh #bahan_input"). val(bahan_input);

    $("#modal-edit_kh #bahan2_input"). val(bahan2_input);

    $("#modal-edit_kh #alat_input"). val(alat_input);

    $("#modal-edit_kh #alat2_input"). val(alat2_input);

    $("#modal-edit_kh #ma_input"). val(ma_input);

    $("#modal-edit_kh #nip_ma_input"). val(nip_ma_input);

    $("#modal-edit_kh #saran_input"). val(saran_input);

    $("#modal-edit_kh #tanggal_selesai_input"). val(tanggal_selesai_input);



    });



    $(document). ready(function(e){

     $("#form_input_respon_permohonan_pengujian_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_respon_permohonan_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=respon_permohonan";

                  });

           }

        });

     }));

    });



    // Edit Respon Permohonan Pengujian



$(document). on("click", "#edit_respon_permohonan_pengujian_kh", function(){

    let id                 = $(this).data('id');

    let no_permohonan      = $(this).data('no_permohonan');

    let tanggal_diterima   = $(this).data('tanggal_diterima');

    let penyelia           = $(this).data('penyelia');

    let penyelia2          = $(this).data('penyelia2');

    let analis             = $(this).data('analis');

    let analis2            = $(this).data('analis2');

    let bahan              = $(this).data('bahan');

    let bahan2             = $(this).data('bahan2');

    let alat               = $(this).data('alat');

    let alat2              = $(this).data('alat2');

    let ma                 = $(this).data('ma');

    let nip_ma             = $(this).data('nip_ma');

    let saran              = $(this).data('saran');

    let tanggal_selesai    = $(this).data('tanggal_selesai');

   

    $("#modal-edit_kh #id"). val(id);

    $("#modal-edit_kh #no_permohonan"). val(no_permohonan);

    $("#modal-edit_kh #tanggal_diterima"). val(tanggal_diterima); 

    $("#modal-edit_kh #penyelia"). val(penyelia);

    $("#modal-edit_kh #penyelia2"). val(penyelia2);

    $("#modal-edit_kh #analis"). val(analis);

    $("#modal-edit_kh #analis2"). val(analis2);

    $("#modal-edit_kh #bahan"). val(bahan);

    $("#modal-edit_kh #bahan2"). val(bahan2);

    $("#modal-edit_kh #alat"). val(alat);

    $("#modal-edit_kh #alat2"). val(alat2);

    $("#modal-edit_kh #ma"). val(ma);

    $("#modal-edit_kh #nip_ma"). val(nip_ma);

    $("#modal-edit_kh #saran"). val(saran);

    $("#modal-edit_kh #tanggal_selesai"). val(tanggal_selesai);



    });



    $(document). ready(function(e){

     $("#form_edit_respon_permohonan_pengujian_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_respon_permohonan_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=respon_permohonan";

                  });

           }

        });

     }));

    });



    // Input Penyerahan Sampel Pengujian



$(document). on("click", "#input_penyerahan_sampel_pengujian", function(){

    let id_input                 = $(this).data('id_input');

    let no_permohonan_input      = $(this).data('no_permohonan_input');

    let kode_sampel_input        = $(this).data('kode_sampel_input');

    let tanggal_penyerahan_input = $(this).data('tanggal_penyerahan_input');

    let yang_menyerahkan_input   = $(this).data('yang_menyerahkan_input');

    let nip_ygmenyerahkan_input  = $(this).data('nip_ygmenyerahkan_input');

    let yang_menerima_input      = $(this).data('yang_menerima_input');

    let nip_ygmenerima_input     = $(this).data('nip_ygmenerima_input');



     

    $("#modal-edit #id_input"). val(id_input);

    $("#modal-edit #no_permohonan_input"). val(no_permohonan_input);

    $("#modal-edit #kode_sampel_input"). val(kode_sampel_input); 

    $("#modal-edit #tanggal_penyerahan_input"). val();

    $("#modal-edit #yang_menyerahkan_input"). val(yang_menyerahkan_input);

    $("#modal-edit #nip_ygmenyerahkan_input"). val(nip_ygmenyerahkan_input);

    $("#modal-edit #yang_menerima_input"). val(yang_menerima_input);

    $("#modal-edit #nip_ygmenerima_input"). val(nip_ygmenerima_input);





    });



    $(document). ready(function(e){

     $("#form_input_penyerahan_sampel_pengujian").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_penyerahan_sampel.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyerahan_sampel";

                  });

           }

             

           

        });

     }));

    });







// Edit Penyerahan Sampel Pengujian



$(document). on("click", "#edit_penyerahan_sampel_pengujian", function(){

    let id                 = $(this).data('id');

    let no_permohonan      = $(this).data('no_permohonan');

    let kode_sampel        = $(this).data('kode_sampel');

    let tanggal_penyerahan = $(this).data('tanggal_penyerahan');

    let yang_menyerahkan   = $(this).data('yang_menyerahkan');

    let nip_ygmenyerahkan  = $(this).data('nip_ygmenyerahkan');

    let yang_menerima      = $(this).data('yang_menerima');

    let nip_ygmenerima     = $(this).data('nip_ygmenerima');



     

    $("#modal-edit #id"). val(id);

    $("#modal-edit #no_permohonan"). val(no_permohonan);

    $("#modal-edit #kode_sampel"). val(kode_sampel); 

    $("#modal-edit #tanggal_penyerahan"). val(tanggal_penyerahan);

    $("#modal-edit #yang_menyerahkan"). val(yang_menyerahkan);

    $("#modal-edit #nip_ygmenyerahkan"). val(nip_ygmenyerahkan);

    $("#modal-edit #yang_menerima"). val(yang_menerima);

    $("#modal-edit #nip_ygmenerima"). val(nip_ygmenerima);


    });



    $(document). ready(function(e){

     $("#form_edit_penyerahan_sampel_pengujian").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_penyerahan_sampel.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyerahan_sampel";

                  });

           }    
        });

     }));

    });


    // Input Penyerahan Sampel Pengujian



$(document). on("click", "#input_penyerahan_sampel_pengujian_kh", function(){

    let id_input                 = $(this).data('id_input');

        no_permohonan_input      = $(this).data('no_permohonan_input');

        kode_sampel_input        = $(this).data('kode_sampel_input');

        tanggal_penyerahan_input = $(this).data('tanggal_penyerahan_input');

        yang_menyerahkan_input   = $(this).data('yang_menyerahkan_input');

        nip_ygmenyerahkan_input  = $(this).data('nip_ygmenyerahkan_input');

        yang_menerima_input      = $(this).data('yang_menerima_input');

        nip_ygmenerima_input     = $(this).data('nip_ygmenerima_input');



     

    $("#modal-edit_kh #id_input"). val(id_input);

    $("#modal-edit_kh #no_permohonan_input"). val(no_permohonan_input);

    $("#modal-edit_kh #kode_sampel_input"). val(kode_sampel_input); 

    $("#modal-edit_kh #tanggal_penyerahan_input"). val();

    $("#modal-edit_kh #yang_menyerahkan_input"). val(yang_menyerahkan_input);

    $("#modal-edit_kh #nip_ygmenyerahkan_input"). val(nip_ygmenyerahkan_input);

    $("#modal-edit_kh #yang_menerima_input"). val(yang_menerima_input);

    $("#modal-edit_kh #nip_ygmenerima_input"). val(nip_ygmenerima_input);





    });



    $(document). ready(function(e){

     $("#form_input_penyerahan_sampel_pengujian_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_penyerahan_sampel_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyerahan_sampel";

                  });

           }   

        });

     }));

    });







// Edit Penyerahan Sampel Pengujian



$(document). on("click", "#edit_penyerahan_sampel_pengujian_kh", function(){

    let id                 = $(this).data('id');

        no_permohonan      = $(this).data('no_permohonan');

        kode_sampel        = $(this).data('kode_sampel');

        tanggal_penyerahan = $(this).data('tanggal_penyerahan');

        yang_menyerahkan   = $(this).data('yang_menyerahkan');

        nip_ygmenyerahkan  = $(this).data('nip_ygmenyerahkan');

        yang_menerima      = $(this).data('yang_menerima');

        nip_ygmenerima     = $(this).data('nip_ygmenerima');



     

    $("#modal-edit_kh #id"). val(id);

    $("#modal-edit_kh #no_permohonan"). val(no_permohonan);

    $("#modal-edit_kh #kode_sampel"). val(kode_sampel); 

    $("#modal-edit_kh #tanggal_penyerahan"). val(tanggal_penyerahan);

    $("#modal-edit_kh #yang_menyerahkan"). val(yang_menyerahkan);

    $("#modal-edit_kh #nip_ygmenyerahkan"). val(nip_ygmenyerahkan);

    $("#modal-edit_kh #yang_menerima"). val(yang_menerima);

    $("#modal-edit_kh #nip_ygmenerima"). val(nip_ygmenerima);





    });



    $(document). ready(function(e){

     $("#form_edit_penyerahan_sampel_pengujian_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_penyerahan_sampel_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyerahan_sampel";

                  });

           }

             

           

        });

     }));

    });


    // Input Kesiapan Pengujian



$(document). on("click", "#input_kesiapan_pengujian_kh", function(){

    let id_input                 = $(this).data('id_input');

        kondisi_sampel_input     = $(this).data('kondisi_sampel_input');

        kode_sampel_input        = $(this).data('kode_sampel_input');

        mt_input                 = $(this).data('mt_input');

        nip_mt_input             = $(this).data('nip_mt_input');

     

    $("#modal-edit_kh #id_input"). val(id_input);

    $("#modal-edit_kh #kondisi_sampel_input"). val(kondisi_sampel_input);

    $("#modal-edit_kh #kode_sampel_input"). val(kode_sampel_input);

    $("#modal-edit_kh #mt_input"). val(mt_input);

    $("#modal-edit_kh #nip_mt_input"). val(nip_mt_input);



    });



    $(document). ready(function(e){

     $("#form_input_kesiapan_pengujian_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_kesiapan_pengujian_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

               swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=kesiapan_pengujian";

                  });

           }

             

           

        });

     }));

    });





// Edit Kesiapan Pengujian



$(document). on("click", "#edit_kesiapan_pengujian_kh", function(){

    let id                 = $(this).data('id');

        kondisi_sampel     = $(this).data('kondisi_sampel');

        kode_sampel        = $(this).data('kode_sampel');

        mt                 = $(this).data('mt');

        nip_mt             = $(this).data('nip_mt');

     

    $("#modal-edit_kh #id"). val(id);

    $("#modal-edit_kh #kondisi_sampel"). val(kondisi_sampel);

    $("#modal-edit_kh #kode_sampel"). val(kode_sampel);

    $("#modal-edit_kh #mt"). val(mt);

    $("#modal-edit_kh #nip_mt"). val(nip_mt);



    });



    $(document). ready(function(e){

     $("#form_edit_kesiapan_pengujian_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_kesiapan_pengujian_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

               swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=kesiapan_pengujian";

                  });

           }

             

           

        });

     }));

    });


    // Input Penyelia_Analis



$(document). on("click", "#input_penyelia_analis_kh", function(){

    let id_input                 = $(this).data('id_input');

    let hari_input               = $(this).data('hari_input');

    let bulan_input              = $(this).data('bulan_input');

    let tahun_input              = $(this).data('tahun_input');

    let no_surat_tugas_input     = $(this).data('no_surat_tugas_input');

    let tanggal_penunjukan_input = $(this).data('tanggal_penunjukan_input');

    let kode_sampel_input        = $(this).data('kode_sampel_input');

    let nama_sampel_input        = $(this).data('nama_sampel_input');

    let no_sampel_input          = $(this).data('no_sampel_input');

    let lab_penguji_input        = $(this).data('lab_penguji_input');

    let nama_penyelia_input      = $(this).data('nama_penyelia_input');

    let nama_analis_input        = $(this).data('nama_analis_input');

    let jab_penyelia_input       = $(this).data('jab_penyelia_input');

    let jab_analis_input         = $(this).data('jab_analis_input');

    let mt_input                 = $(this).data('mt_input');

    let nip_mt_input             = $(this).data('nip_mt_input');



     

    $("#modal-edit_kh #id_input "). val(id_input);

    $("#modal-edit_kh #hari_input"). val();

    $("#modal-edit_kh #bulan_input"). val();

    $("#modal-edit_kh #tahun_input"). val();

    $("#modal-edit_kh #no_surat_tugas_input"). val();

    $("#modal-edit_kh #tanggal_penunjukan_input"). val();

    $("#modal-edit_kh #kode_sampel_input"). val(kode_sampel_input);

    $("#modal-edit_kh #nama_sampel_input"). val(nama_sampel_input);

    $("#modal-edit_kh #no_sampel_input"). val(no_sampel_input);   

    $("#modal-edit_kh #lab_penguji_input"). val(lab_penguji_input);

    $("#modal-edit_kh #nama_penyelia_input"). val(nama_penyelia_input);

    $("#modal-edit_kh #nama_analis_input"). val(nama_analis_input);

    $("#modal-edit_kh #jab_penyelia_input"). val(jab_penyelia_input);

    $("#modal-edit_kh #jab_analis_input"). val(jab_analis_input);

    $("#modal-edit_kh #mt_input"). val(mt_input);

    $("#modal-edit_kh #nip_mt_input"). val(nip_mt_input);





    });



    $(document). ready(function(e){

     $("#form_input_penyelia_analis_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_penunjukan_penyelia_analis_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg)  

           } 

        });

     }));

    });





// Edit Penyelia_Analis



$(document). on("click", "#edit_penyelia_analis_kh", function(){

    let id                 = $(this).data('id');

    let hari               = $(this).data('hari');

    let bulan              = $(this).data('bulan');

    let tahun              = $(this).data('tahun');

    let no_surat_tugas     = $(this).data('no_surat_tugas');

    let tanggal_penunjukan = $(this).data('tanggal_penunjukan');

    let kode_sampel        = $(this).data('kode_sampel');

    let nama_sampel        = $(this).data('nama_sampel');

    let no_sampel          = $(this).data('no_sampel');

    let lab_penguji        = $(this).data('lab_penguji');

    let nama_penyelia      = $(this).data('nama_penyelia');

    let nama_analis        = $(this).data('nama_analis');

    let jab_penyelia       = $(this).data('jab_penyelia');

    let jab_analis         = $(this).data('jab_analis');

    let mt                 = $(this).data('mt');

    let nip_mt             = $(this).data('nip_mt');



     

    $("#modal-edit_kh #id"). val(id);

    $("#modal-edit_kh #hari"). val(hari);

    $("#modal-edit_kh #bulan"). val(bulan);

    $("#modal-edit_kh #tahun"). val(tahun);

    $("#modal-edit_kh #no_surat_tugas"). val(no_surat_tugas);

    $("#modal-edit_kh #tanggal_penunjukan"). val(tanggal_penunjukan);

    $("#modal-edit_kh #kode_sampel"). val(kode_sampel);

    $("#modal-edit_kh #nama_sampel"). val(nama_sampel);

    $("#modal-edit_kh #no_sampel"). val(no_sampel);   

    $("#modal-edit_kh #lab_penguji"). val(lab_penguji);

    $("#modal-edit_kh #nama_penyelia"). val(nama_penyelia);

    $("#modal-edit_kh #nama_analis"). val(nama_analis);

    $("#modal-edit_kh #jab_penyelia"). val(jab_penyelia);

    $("#modal-edit_kh #jab_analis"). val(jab_analis);

    $("#modal-edit_kh #mt"). val(mt);

    $("#modal-edit_kh #nip_mt"). val(nip_mt);





    });



    $(document). ready(function(e){

     $("#form_edit_penyelia_analis_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_penunjukan_penyelia_analis_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=penyelia_analis";

                  });

           }             

        });

     }));

    });


    // Input Pengelola Sampel





$(document). on("click", "#input_pengelola_sampel_kh", function(){

    let id_input                      = $(this).data('id_input');

    let kode_sampel_input             = $(this).data('kode_sampel_input');

    let nama_sampel_input             = $(this).data('nama_sampel_input');

    let no_sampel_input               = $(this).data('no_sampel_input');

    let lab_penguji_input             = $(this).data('lab_penguji_input');

    let yang_menyerahkanlab_input     = $(this).data('yang_menyerahkanlab_input');

    let yang_menerimalab_input        = $(this).data('yang_menerimalab_input');

    let nip_yang_menyerahkanlab_input = $(this).data('nip_yang_menyerahkanlab_input');

    let nip_yang_menerimalab_input    = $(this).data('nip_yang_menerimalab_input');





     

    $("#modal-edit_kh #id_input"). val(id_input);

    $("#modal-edit_kh #kode_sampel_input"). val(kode_sampel_input);

    $("#modal-edit_kh #nama_sampel_input"). val(nama_sampel_input);

    $("#modal-edit_kh #no_sampel_input"). val(no_sampel_input);   

    $("#modal-edit_kh #lab_penguji_input"). val(lab_penguji_input); 

    $("#modal-edit_kh #yang_menyerahkanlab_input"). val(yang_menyerahkanlab_input);

    $("#modal-edit_kh #yang_menerimalab_input"). val(yang_menerimalab_input);

    $("#modal-edit_kh #nip_yang_menyerahkanlab_input"). val(nip_yang_menyerahkanlab_input);

    $("#modal-edit_kh #nip_yang_menerimalab_input"). val(nip_yang_menerimalab_input);



    });



    $(document). ready(function(e){

     $("#form_input_pengelola_sampel_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_input_pengelola_sampel_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Di Input! ",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=pengelola_sampel";

                  });

           } 

        });

     }));

    });



    // Edit Pengelola Sampel





$(document). on("click", "#edit_pengelola_sampel_kh", function(){

    let id                      = $(this).data('id');

    let kode_sampel             = $(this).data('kode_sampel');

    let nama_sampel             = $(this).data('nama_sampel');

    let no_sampel               = $(this).data('no_sampel');

    let lab_penguji             = $(this).data('lab_penguji');

    let yang_menyerahkanlab     = $(this).data('yang_menyerahkanlab');

    let yang_menerimalab        = $(this).data('yang_menerimalab');

    let nip_yang_menyerahkanlab = $(this).data('nip_yang_menyerahkanlab');

    let nip_yang_menerimalab    = $(this).data('nip_yang_menerimalab');





     

    $("#modal-edit_kh #id"). val(id);

    $("#modal-edit_kh #kode_sampel"). val(kode_sampel);

    $("#modal-edit_kh #nama_sampel"). val(nama_sampel);

    $("#modal-edit_kh #no_sampel"). val(no_sampel);   

    $("#modal-edit_kh #lab_penguji"). val(lab_penguji); 

    $("#modal-edit_kh #yang_menyerahkanlab"). val(yang_menyerahkanlab);

    $("#modal-edit_kh #yang_menerimalab"). val(yang_menerimalab);

    $("#modal-edit_kh #nip_yang_menyerahkanlab"). val(nip_yang_menyerahkanlab);

    $("#modal-edit_kh #nip_yang_menerimalab"). val(nip_yang_menerimalab);



    });



    $(document). ready(function(e){

     $("#form_edit_pengelola_sampel_kh").on("submit", (function(e){

        e.preventDefault();

        $.ajax({

           url :'models/proses_edit_pengelola_sampel_kh.php',

           type :'POST',

           data : new FormData (this),

           contentType : false,

           cache : false,

           processData : false,

           success : function(msg){

              $('.table'). html(msg),

              swal({

                      title: "Data",

                      text: "Berhasil Diubah!",

                      type: "success"

                  }).then(function() {

                      window.location = "?page=pengelola_sampel";

                  });

           }  

        });

     }));

    });

    // Input Data Teknis



$(document). on("click", "#input_data_teknis_kh", function(){

      let id_input                      = $(this).data('id_input');

      let tanggal_penyerahan_lab_input  = $(this).data('tanggal_penyerahan_lab_input');

      let tanggal_pengujian_input       = $(this).data('tanggal_pengujian_input');

      let rekomendasi_input             = $(this).data('rekomendasi_input');

      let ket_kesimpulan_input          = $(this).data('ket_kesimpulan_input');

      let nama_penyelia_input           = $(this).data('nama_penyelia_input');

      let nama_analis_input             = $(this).data('nama_analis_input');

      let nip_penyelia_input            = $(this).data('nip_penyelia_input');

      let nip_analis_input              = $(this).data('nip_analis_input');

      

      $("#modal-edit_kh #id_input"). val(id_input);

      $("#modal-edit_kh #tanggal_penyerahan_lab_input"). val();

      $("#modal-edit_kh #tanggal_pengujian_input"). val();

      $("#modal-edit_kh #rekomendas_inputi"). val(rekomendasi_input);

      $("#modal-edit_kh #ket_kesimpulan_input"). val(ket_kesimpulan_input);

      $("#modal-edit_kh #nama_penyelia_input"). val(nama_penyelia_input);

      $("#modal-edit_kh #nama_analis_input"). val(nama_analis_input);

      $("#modal-edit_kh #nip_penyelia_input"). val(nip_penyelia_input);

      $("#modal-edit_kh #nip_analis_input"). val(nip_analis_input);

      



    });

    

   $(document). ready(function(e){

       $("#form_input_data_teknis_kh").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_input_data_teknis_kh.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Di Input! ",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=data_teknis";

                    });

             }                               

          });

       }));

    });           



// Edit Data Teknis



$(document). on("click", "#edit_data_teknis_kh", function(){

      let id                      = $(this).data('id');

      let tanggal_penyerahan_lab  = $(this).data('tanggal_penyerahan_lab');

      let tanggal_pengujian       = $(this).data('tanggal_pengujian');

      let rekomendasi             = $(this).data('rekomendasi');

      let ket_kesimpulan          = $(this).data('ket_kesimpulan');

      let nama_penyelia           = $(this).data('nama_penyelia');

      let nama_analis             = $(this).data('nama_analis');

      let nip_penyelia            = $(this).data('nip_penyelia');

      let nip_analis              = $(this).data('nip_analis');

      

      $("#modal-edit_kh #id"). val(id);

      $("#modal-edit_kh #tanggal_penyerahan_lab"). val(tanggal_penyerahan_lab);

      $("#modal-edit_kh #tanggal_pengujian"). val(tanggal_pengujian);

      $("#modal-edit_kh #rekomendasi"). val(rekomendasi);

      $("#modal-edit_kh #ket_kesimpulan"). val(ket_kesimpulan);

      $("#modal-edit_kh #nama_penyelia"). val(nama_penyelia);

      $("#modal-edit_kh #nama_analis"). val(nama_analis);

      $("#modal-edit_kh #nip_penyelia"). val(nip_penyelia);

      $("#modal-edit_kh #nip_analis"). val(nip_analis);

      



    });

    

   $(document). ready(function(e){

       $("#form_edit_data_teknis_kh").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_edit_data_teknis_kh.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Diubah!",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=data_teknis";

                    });

             }                                         

          });

       }));

    });


   //  Input Sertifikat



$(document). on("click", "#input_sertifikat_kh", function(){

      let id_input                      = $(this).data('id_input');

      let tanggal_penyerahan_lab_input  = $(this).data('tanggal_penyerahan_lab_input');

      let tanggal_sertifikat_input      = $(this).data('tanggal_sertifikat_input');

      let tanggal_pengujian_input       = $(this).data('tanggal_pengujian_input');

      let kode_sampel_input             = $(this).data('kode_sampel_input');

      let no_sertifikat_input           = $(this).data('no_sertifikat_input');

      let rekomendasi_input             = $(this).data('rekomendasi_input');

      let kepala_plh_input              = $(this).data('kepala_plh_input');

      let nip_kepala_plh_input          = $(this).data('nip_kepala_plh_input');

      let nama_penyelia_input           = $(this).data('nama_penyelia_input');

      let nip_penyelia_input            = $(this).data('nip_penyelia_input');

      let ket_kesimpulan_input          = $(this).data('ket_kesimpulan_input');

                        

      $("#modal-edit_kh #id_input"). val(id_input);

      $("#modal-edit_kh #tanggal_penyerahan_lab_input"). val();

      $("#modal-edit_kh #tanggal_sertifikat_input"). val();

      $("#modal-edit_kh #tanggal_pengujian_input"). val();

      $("#modal-edit_kh #kode_sampel_input"). val(kode_sampel_input);                

      $("#modal-edit_kh #no_sertifikat_input"). val();

      $("#modal-edit_kh #rekomendasi_input"). val(rekomendasi_input);

      $("#modal-edit_kh #kepala_plh_input"). val(kepala_plh_input);

      $("#modal-edit_kh #nip_kepala_plh_input"). val(nip_kepala_plh_input);

      $("#modal-edit_kh #nama_penyelia_input"). val(nama_penyelia_input);

      $("#modal-edit_kh #nip_penyelia_input"). val(nip_penyelia_input);

      $("#modal-edit_kh #ket_kesimpulan_input"). val(ket_kesimpulan_input);



    });

    

   $(document). ready(function(e){

       $("#form_input_sertifikat_kh").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_input_sertifikat_kh.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg) 

             }                                         

          });

       }));

    });







//  Edit Sertifikat



$(document). on("click", "#edit_sertifikat_kh", function(){

      let id                      = $(this).data('id');

      let tanggal_penyerahan_lab  = $(this).data('tanggal_penyerahan_lab');

      let tanggal_sertifikat      = $(this).data('tanggal_sertifikat');

      let tanggal_pengujian       = $(this).data('tanggal_pengujian');

      let kode_sampel             = $(this).data('kode_sampel');

      let no_sertifikat           = $(this).data('no_sertifikat');

      let rekomendasi             = $(this).data('rekomendasi');

      let kepala_plh              = $(this).data('kepala_plh');

      let nip_kepala_plh          = $(this).data('nip_kepala_plh');

      let nama_penyelia           = $(this).data('nama_penyelia');

      let nip_penyelia            = $(this).data('nip_penyelia');

      let ket_kesimpulan          = $(this).data('ket_kesimpulan');

                        

      $("#modal-edit_kh #id"). val(id);

      $("#modal-edit_kh #tanggal_penyerahan_lab"). val(tanggal_penyerahan_lab);

      $("#modal-edit_kh #tanggal_sertifikat"). val(tanggal_sertifikat);

      $("#modal-edit_kh #tanggal_pengujian"). val(tanggal_pengujian);

      $("#modal-edit_kh #kode_sampel"). val(kode_sampel);                

      $("#modal-edit_kh #no_sertifikat"). val(no_sertifikat);

      $("#modal-edit_kh #rekomendasi"). val(rekomendasi);

      $("#modal-edit_kh #kepala_plh"). val(kepala_plh);

      $("#modal-edit_kh #nip_kepala_plh"). val(nip_kepala_plh);

      $("#modal-edit_kh #nama_penyelia"). val(nama_penyelia);

      $("#modal-edit_kh #nip_penyelia"). val(nip_penyelia);

      $("#modal-edit_kh #ket_kesimpulan"). val(ket_kesimpulan);



    });

    

   $(document). ready(function(e){

       $("#form_edit_sertifikat_kh").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_edit_sertifikat_kh.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Diubah!",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=sertifikat";

                    });

             }                                          

          });

       }));

    });


// Input Surat Hasil Uji



$(document). on("click", "#input_surat_hasil_uji_kh", function(){

      let id_input                = $(this).data('id_input');

          no_agenda_input         = $(this).data('no_agenda_input');

          no_lhu_input            = $(this).data('no_lhu_input');

          tanggal_lhu_input       = $(this).data('tanggal_lhu_input');

          kepala_plh2_input       = $(this).data('kepala_plh2_input');

          nip_kepala_plh2_input   = $(this).data('nip_kepala_plh2_input');



      $("#modal-edit_kh #id_input"). val(id_input);

      $("#modal-edit_kh #no_agenda_input"). val();

      $("#modal-edit_kh #no_lhu_input"). val();

      $("#modal-edit_kh #tanggal_lhu_input"). val();

      $("#modal-edit_kh #kepala_plh2_input"). val(kepala_plh2_input);

      $("#modal-edit_kh #nip_kepala_plh2_input"). val(nip_kepala_plh2_input);



    });

    

   $(document). ready(function(e){

       $("#form_input_surat_hasil_uji_kh").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_input_lhu_kh.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg)

             }                                          

          });

       }));

    });





// Edit Surat Hasil Uji



$(document). on("click", "#edit_surat_hasil_uji_kh", function(){

      let id                = $(this).data('id');

          no_agenda         = $(this).data('no_agenda');

          no_lhu            = $(this).data('no_lhu');

          tanggal_lhu       = $(this).data('tanggal_lhu');

          kepala_plh2       = $(this).data('kepala_plh2');

          nip_kepala_plh2   = $(this).data('nip_kepala_plh2');



      $("#modal-edit_kh #id"). val(id);

      $("#modal-edit_kh #no_agenda"). val(no_agenda);

      $("#modal-edit_kh #no_lhu"). val(no_lhu);

      $("#modal-edit_kh #tanggal_lhu"). val(tanggal_lhu);

      $("#modal-edit_kh #kepala_plh2"). val(kepala_plh2);

      $("#modal-edit_kh #nip_kepala_plh2"). val(nip_kepala_plh2);



    });

    

   $(document). ready(function(e){

       $("#form_edit_surat_hasil_uji_kh").on("submit", (function(e){

          e.preventDefault();

          $.ajax({

             url :'models/proses_edit_lhu_kh.php',

             type :'POST',

             data : new FormData (this),

             contentType : false,

             cache : false,

             processData : false,

             success : function(msg){

                $('.table'). html(msg),

                swal({

                        title: "Data",

                        text: "Berhasil Diubah!",

                        type: "success"

                    }).then(function() {

                        window.location = "?page=surat_hasil_uji";

                    });

             }                                         

          });

       }));

    });





















   