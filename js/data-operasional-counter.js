
let url = dashboardApi;

let bulanarray = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

let bulan = new Date().getMonth();

bulan = bulanarray[bulan];

dataOperasionalCounter(url);

// data operasional counter
function dataOperasionalCounter(url)
{
  	$.ajax({

    	url : url

  	}).done(function(response){

	    let domas = parseInt(response.kh.frekuensi.domas || 0) + parseInt(response.kt.frekuensi.domas || 0);

	    let dokel = parseInt(response.kh.frekuensi.dokel || 0) + parseInt(response.kt.frekuensi.dokel || 0);

	    let ekspor = parseInt(response.kh.frekuensi.ekspor || 0) + parseInt(response.kt.frekuensi.ekspor || 0);

	    let impor = parseInt(response.kh.frekuensi.impor || 0) + parseInt(response.kt.frekuensi.impor || 0);

	    let pnbp = (response.kh.pnbp || 0)  + (response.kt.pnbp || 0);

	    $('#data_operasional_container').empty();

	    $('#data_operasional_container').html(`

            <div class="col-md-12">

                <h2 style="color: #fff">Data Operasional Sampai Dengan 01 ${bulan} ${response.kh.tahun} </h2>

            </div>

            <div class="col-md-2 mb-sm-30">

                <div class="counter-item">

                    <h2 class="stat-number" data-n="${ekspor}">0</h2>

                    <h6>Ekspor</h6>

                </div>

            </div>

            <div class="col-md-2 mb-sm-30">

                <div class="counter-item">

                    <h2 class="stat-number" data-n="${impor}">0</h2>

                    <h6>Impor</h6>

                </div>

            </div>

            <div class="col-md-2 mb-sm-30">

                <div class="counter-item">

                    <h2 class="stat-number" data-n="${dokel}">0</h2>

                    <h6>Domestik Keluar</h6>

                </div>

            </div>

            <div class="col-md-2 mb-sm-30">

                <div class="counter-item">

                    <h2 class="stat-number" data-n="${domas}">0</h2>

                    <h6>Domestik Masuk</h6>

                </div>

            </div>

            <div class="col-md-4 mb-sm-30">

                <div class="counter-item">

                    <h2 class="stat-number" data-n="${pnbp}">0</h2>

                    <h6>Penerimaan Negara Bukan Pajak</h6>

                </div>

            </div>

	    `);

	});/*end table ajax*/
}
