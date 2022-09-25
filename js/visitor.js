
function visit() {
    $.getJSON("ga/visitors.php ", function(result) {
        let hariIni = result[0] == null ? 0 : result[0];
        let totalPengunjung = result[1];
        $("#visit").html(' '), $("#visit").html('<h4><i class="fa fa-group fa-fw"></i> Pengunjung Hari Ini : ' + hariIni + ' &nbsp;&nbsp;|&nbsp;&nbsp; <i class="fa fa-line-chart fa-fw"></i> Total Pengunjung : ' + totalPengunjung + ' </h4>');
    }).fail(function() {
        $("#visit").html('<h4><i class="fa fa-info fa-fw"></i> Reload Kembali Halaman Anda Untuk Melihat Jumlah Kunjungan </h4>');
    });
};
