/*Simulasi Tarif*/ /*pilih Kategori*/
$("#kategori").on('change', function() {
    $('#kegiatan').removeAttr('disabled').empty();
    $('#komoditas').empty().attr('disabled', 'disabled');
    $('#jumlah').val('').attr("placeholder", "Jumlah/Volume *").attr('disabled', 'disabled');
    $('#kegiatan').append('<option selected disabled>- Pilih Kegiatan -</option>' + '<option value="ekspor">Ekspor</option>' + '<option value="impor">Impor</option>' + '<option value="domestik">Domestik</option>');
    $('#komoditas').append('<option selected disabled>- Pilih Komoditas -</option>'); /*pilih kegiatan*/
    $('#kegiatan').on('change', function() {
        let kegiatan = $(this).val();
        let kategori = $('#kategori').val();
        $('#jumlah').val('').attr("placeholder", "Jumlah/Volume *").attr('disabled', 'disabled');
        if (kegiatan != '') {
            $.post("views/data/source_tarif.php ", {
                data: {
                    kategori: kategori,
                    kegiatan: kegiatan
                }
            }, function(data) {
                let parse = JSON.parse(data);
                $('#komoditas').removeAttr('disabled').empty().append('<option selected disabled>- Pilih Komoditas -</option>');
                $.each(parse, function(key, value) {
                    $('#komoditas').append('<option value="' + value + '">' + value + '</option>');
                }); /*Pilih Komoditas*/
                $('#komoditas').on('change', function() {
                    let komoditas = $(this).val();
                    if (komoditas != '') {
                        $('#jumlah').removeAttr('disabled');
                        if (komoditas == 'Sapi' || komoditas == 'Ayam' || komoditas == 'DOC' || komoditas == 'Kucing' || komoditas == 'Kuda (Hewan Kesayangan)' || komoditas == 'Kuda (Potong)') {
                            $('#jumlah').removeAttr("placeholder").attr("placeholder", "volume per ekor");
                        } else if (komoditas == 'Susu' || komoditas == 'Madu' || komoditas == 'Telur' || komoditas == 'Buah-Buahan' || komoditas == 'Umbi - Umbian (Bawang Merah, Ubi)/ Rimpang (Jahe Dll)' || komoditas == 'Benih Sayuran') {
                            $('#jumlah').removeAttr("placeholder").attr("placeholder", "volume per kilogram");
                        } else if (komoditas == 'Jagung') {
                            $('#jumlah').removeAttr("placeholder").attr("placeholder", "volume per ton");
                        } else if (komoditas == 'Bunga Potong') {
                            $('#jumlah').removeAttr("placeholder").attr("placeholder", "volume per batang");
                        }
                    }
                });
            });
        } else {
            $('#komoditas').empty().attr('disabled', 'disabled');
        }
    }); /*End kegiatan*/
}); /*End Kategori*/ /*Hitung Esitimasi Tarif*/
$("#estimasiTarif").on("submit", (function(e) {
    e.preventDefault();
    let komoditas = $('#komoditas').val();
    $.ajax({
        url: 'views/data/hitung_tarif.php ',
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            let parsed = JSON.parse(data);
            $('#hapus').remove();
            $('#hasilHitung').empty().append('<div class="section-text">' + '<h3 style="color: #000; ">Estimasi Tarif Jasa Karantina</h3>' + '<h4>Total : ' + parsed.total + '*</h4>' + '<p style="color: #000; ; font-size: 11pt; font-weight: 550">Rincian :</p>' + '<p style="color: #000; ; font-size: 11pt">Biaya Pemeriksaan : ' + parsed.jasa + '/ ' + parsed.satuan + ' x ' + parsed.jumlah + ' ' + parsed.satuan2 + '</p>' + '<p style="color: #000; font-size: 11pt">Total Biaya Pemeriksaan : ' + parsed.biayaperiksa + '</p>' + '<p style="color: #000; font-size: 11pt">Biaya Sertifikat : ' + parsed.sertifikat + '</p>' + '<p style="color: #000; font-size: 11pt"><b><i>*Biaya Tanpa Pemeriksaan Laboratorium & Perlakuan</i></b></p>' + '</div>');
        }
    })
})); /*End Simulasi Tarif*/