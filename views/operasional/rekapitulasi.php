<style type="text/css">

  table tbody td{

    font-size: 12pt;

    font-weight: 600 !important;

  }


  table th, table td:not(:nth-of-type(1)){

    text-align: center;

  }


  i.fa-bar-chart, i.fa-line-chart, i.fa-money, i.fa-book {

    display: inline-block;

    border-radius: 80px;

    box-shadow: 0px 0px 2px #888;

    padding: 15px;

  }


  .fa-bar-chart{

    background-color: #f73b5e;

    color: #fff

  }

  .fa-line-chart{

    background-color: #2962FF;

    color: #fff;

  }

  .fa-money{

    background-color: #FF8F29;

    color: #fff;

  }


  .fa-book{

    background-color: #12AFAF;

    color: #fff;

  }

  ol li{
  	padding-bottom: 20px;
  }

  .mz-module-about{
  	min-height: 400px;
  }

  select.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-border-radius: 0px;
    background-image: url("https://image.flaticon.com/icons/svg/60/60781.svg");
    background-position: 99% 50%;
    background-repeat: no-repeat;
    background-size: 10px;
  }

  #judul{
  	padding-top: 40px;
  	padding-bottom: 10px
  }
</style>

<h4 id="judul"></h4>

<form id="change_data">

  <div class="row mb-3">

    <div class="col-md-4 col-sm-12">

      <label for="year">Pilih Tahun</label>

      <select class="form-control" name="year" id="year">

        <?php  for($i = date('Y') - 2; $i < date('Y') + 2 ; $i++): 

 
          if(date('Y') == $i) : ?>

            <option value="<?= $i ?>" selected><?= $i ?></option>

         <?php else : ?>

            <option value="<?= $i ?>"><?= $i ?></option>

         <?php endif;

        endfor;?>

      </select>

    </div>

    <div class="col-md-4 col-sm-12">

      <label for="month">Pilih Bulan</label>

      <select class="form-control" name="month" id="month">

        <option value="all">Semua Bulan</option>

        <?php  for($i = 1; $i < 13 ; $i++): ?>

          <option value="<?= $i ?>"><?= bulan($i) ?></option>

        <?php endfor; ?>

      </select>

    </div>

    <div class="col-md-4 col-sm-12">

      <label for="wilker">Pilih Wilker</label>

      <select class="form-control" name="wilker" id="wilker">

        <option value="">Semua Wilker</option>
    
        <option value="2">Wilker Pelabuhan Ferry Poto Tano</option>

        <option value="3">Wilker Pelabuhan Laut Benete</option>

        <option value="4">Wilker Pelabuhan Laut Badas</option>

        <option value="5">Wilker Bandara Sultan M.Kaharuddin</option>

        <option value="6">Wilker Pelabuhan Laut Soro Kempo</option>
        
        <option value="7">Wilker Bandara Sultan M.Salahuddin</option>

        <option value="8">Wilker Pelabuhan Laut Bima</option>
  
      </select>

    </div>

  </div>

  <div class="row" style="text-align: left; margin-top: 15px">

    <div class="col-md-4 col-sm-12 mt-3">

     <button type="submit" class="btn btn-danger">Pilih</button>

    </div>

  </div>

</form>

<hr>

<div class="row mt-3">

  <div class="col-12">

      <div class="mz-module">

      	<div class="mz-module-about">

          <div class="table-responsive">

              <table class="table v-middle" id="table-dashboard">

                  <thead>

                      <tr class="bg-light">

                          <th class="border-top-0">Data</th>

                          <th class="border-top-0">Karantina Hewan</th>

                          <th class="border-top-0">Karantina Tumbuhan</th>

                          <th class="border-top-0">Keterangan</th>

                      </tr>

                  </thead>

                  <tbody></tbody>

              </table>

          </div>

        </div>

      </div>

  </div>

</div>



<div class="row">

	<div class="col-md-4">

	  <label for="frekKh">Pilih Jenis Permohonan</label>

	  <select name="frekKh" id="selectCatKh" class="form-control">

	    <option value="Domestik Keluar Karantina Hewan">Domestik Keluar</option>

	    <option value="Domestik Masuk Karantina Hewan">Domestik Masuk</option>

	    <option value="Ekspor Karantina Hewan">Ekspor</option>

	    <option value="Impor Karantina Hewan">Impor</option>

	  </select>

	</div>

</div>



<div class="row" style="margin-top: 15px">

	<div class="col-md-7">

	    <div class="mz-module">

	        <div class="mz-module-about" id="chartFrekuensiKh"></div>

	    </div>

	</div>

	<div class="col-md-5">

	    <div class="mz-module">

	        <div class="mz-module-about">

	            <h4 class="card-title"><i class="fa fa-history" aria-hidden="true"></i> &nbsp;&nbsp;<b>Top 5 Komoditi Karantina Hewan</b>  </h4>

	            <h6>Berdasarkan Frekuensi</h6>

	            <div class="feed-widget">

	                <ol class="list-style-none feed-body m-0 p-b-20" id="topFiveKh"></ol>

	            </div>

	        </div>

	    </div>

	</div>

</div>



<div class="row">

	<div class="col-md-4">

	  <label for="frekKt">Pilih Jenis Permohonan</label>

	  <select name="frekKt" id="selectCatKt" class="form-control">

	    <option value="Domestik Keluar Karantina Tumbuhan">Domestik Keluar</option>

	    <option value="Domestik Masuk Karantina Tumbuhan">Domestik Masuk</option>

	    <option value="Ekspor Karantina Tumbuhan">Ekspor</option>

	    <option value="Impor Karantina Tumbuhan">Impor</option>

	  </select>

	</div>

</div>



<div class="row" style="margin-top: 15px">

	<div class="col-md-7">

	  <div class="mz-module">

	      <div class="mz-module-about" id="chartFrekuensiKt"></div>

	  </div>

	</div>

	<div class="col-md-5">

	    <div class="mz-module">

	        <div class="mz-module-about">

	            <h4 class="card-title"><i class="fa fa-history" aria-hidden="true"></i> &nbsp;&nbsp;<b>Top 5 Komoditi Karantina Tumbuhan</b>  </h4>

	            <h6>Berdasarkan Frekuensi</h6>

	            <div class="feed-widget">

	                <ol class="list-style-none feed-body m-0 p-b-20" id="topFiveKt"></ol>

	            </div>

	        </div>

	    </div>

	</div>

	<div class="row">
		<div class="col-xs-12">
			<i>Sumber : <a href="https://e-office.skp1sumbawabesar.org/login" target="_blank" rel="noreferrer">e-office (e-laporan operasional) Sumbawa</a></i>
		</div>
	</div>

</div>

<script>

  $(document).ready(function(){

    /*add loader*/
    loader();

    let year      = $('#year').val();

    let month     = $('#month').val();

    let wilker    = $('#wilker').val();

    let tableUrl  = dashboardApi;

    /*chart properties*/

    let khValue     = 'Domestik Keluar Karantina Hewan';

    let ktValue     = 'Domestik Keluar Karantina Tumbuhan';

    let khUrl       =  mainApiUrl + '/kh/rekapitulasi/chart' ;

    let ktUrl       =  mainApiUrl + '/kt/rekapitulasi/chart' ;

    let chartKhUrl  =  khUrl + '/' + khValue + '/' + year;

    let chartKtUrl  =  ktUrl + '/' + ktValue + '/' + year;

    /*set judul halaman*/
    $('#judul').html(`<b>Rekapitulasi Data Operasional Tahun : ${year}</b>`);

    /*init table, charts, and display top 5 komoditi*/
    tableInfo(tableUrl);

    chartKh(chartKhUrl, khValue);

    chartKt(chartKtUrl, ktValue);

    $('#change_data').on('submit', function(e){

      e.preventDefault();

      /*add loader*/
      loader();

      year        = $('#year').val();

      month       = $('#month').val();

      wilker      = $('#wilker').val();

      if (wilker != '') {

      	wilker = '/' + wilker;

      }

      newtableUrl = tableUrl + '/' + year + '/' + month + wilker;

      chartKhUrl  = khUrl + '/' + khValue + '/' + year;

      chartKtUrl  = ktUrl + '/' + ktValue + '/' + year;

      /*update judul halaman*/

      let monthText   = $('#month option:selected').text();

      let wilkerText  = $('#wilker option:selected').text();

      $('#judul').html(`<b>Ringkasan Data Operasional Tahun : ${year}, Bulan : ${monthText}, Wilker : ${wilkerText}</b>`);

      /*update table, charts, and display top 5 komoditi*/
      tableInfo(newtableUrl);

      chartKh(chartKhUrl, khValue);

      chartKt(chartKtUrl, ktValue);

    });

    /*Table & top 5*/
    function tableInfo(url)
    {

      $.ajax({

        url : url

      }).done(function(response){

        /*table ringkasan data*/
        let volumeKh  = [];

        let volumeKt  = [];

        let dokumenKh = [];

        let dokumenKt = [];

        $.each(response.kh.volume, function(key, value){

          volumeKh += `<p>${value}</p>`;

        });

        $.each(response.kt.volume, function(key, value){

          volumeKt += `<p>${value}</p>`;     

        });

        $.each(response.kh.dokumen, function(key, value){

          dokumenKh += `<p>${value.dokumen} : ${value.total}</p>`;
         
        });

        $.each(response.kt.dokumen, function(key, value){

          dokumenKt += `<p>${value.dokumen} : ${value.total}</p>`;

        });

        $('#table-dashboard tbody').html(`

          <tr>
            <td>
              <i class="fa fa-line-chart"></i>&nbsp;&nbsp;<span style="font-weight: bold;">Frekuensi</span>
            </td>
            <td>
              <span style="font-weight: bold;">${response.kh.frekuensi.total} Kali</span>
            </td>

            <td>
              <span style="font-weight: bold;">${response.kt.frekuensi.total} Kali</span>

            </td>

            <td>
                <label class="label label-primary">Berdasarkan Komoditas</label>

            </td>

          </tr>

          <tr>

            <td>

              <i class="fa fa-bar-chart"></i>&nbsp;&nbsp;<span style="font-weight: bold;">Volume</span>

            </td>

            <td>

              <span style="font-weight: bold;">${volumeKh}</span>

            </td>

            <td>

              <span style="font-weight: bold;">${volumeKt}</span>

            </td>

            <td>

              <label class="label label-success">Berdasarkan Satuan</label>

            </td>

          </tr>

          <tr>

            <td>

              <i class="fa fa-money"></i>&nbsp;&nbsp;<span style="font-weight: bold;">PNBP</span>

            </td>

            <td>

              <span style="font-weight: bold;">${formatRupiah(response.kh.pnbp)}</span>

            </td>

            <td>

              <span style="font-weight: bold;">${formatRupiah(response.kt.pnbp)}</span>

            </td>

            <td>

              <label class="label label-danger">Berdasarkan Sertifikasi</label>

            </td>

          </tr>

          <tr>
            <td>

              <i class="fa fa-book"></i> &nbsp;&nbsp;<span style="font-weight: bold;">Pemakaian Dokumen</span>

            </td>

            <td>

              <span style="font-weight: bold;">${dokumenKh}</span>

            </td>

            <td>

              <span style="font-weight: bold;">${dokumenKt}</span>

            </td>

            <td>

              <label class="label label-info">Berdasarkan Sertifikasi</label>

            </td>

          </tr>

        `);

        /*top Five Komoditi Kh*/
        $('#topFiveKh').empty();

        $.each(response.kh.topFive, function(key, value){

          $('#topFiveKh').append(

            `<li>
            	<div class="col-sm-9">${key} </div>
            	<div class="col-sm-3"><span class="ml-auto font-14 text-muted" style="color: #000 !important; font-weight: bold;">${value}</span> </div>
            </li>`

            );
        });

        /*top Five Komoditi Kt*/
        $('#topFiveKt').empty();

        $.each(response.kt.topFive, function(key, value){

          $('#topFiveKt').append(

            `<li>
            	<div class="col-sm-9">${key} </div>
            	<div class="col-sm-3"><span class="ml-auto font-14 text-muted" style="color: #000 !important; font-weight: bold;">${value}</span> </div>
            </li>`

            );

        });

      });/*end table ajax*/

    }

    /*Charts*/
    function chartKh(url, type)
    {
        $.ajax({

          url : url

        }).done(function(response){

          let dataKh = {

            data : [],

            name : []

          };

          $.each(response, function(key, value){

            dataKh.name.push(value.bln); 

            dataKh.data.push(parseInt(value.data));  

          });


          /*Hightchart colors option*/
          Highcharts.setOptions({

            colors: ['#7460EE']

          });

          /*Chart KH*/
          let chartKh = Highcharts.chart('chartFrekuensiKh', {

            credits : false,

            chart: {

                type: 'column'

            },

            title: {

                text: 'Frekuensi Operasional Karantina Hewan'

            },

            subtitle: {

                text: type

            },

            xAxis: {

                categories:  dataKh.name,

                crosshair: true

            },

            yAxis: {

                min: 0,

                title: {

                    text: 'Frekuensi (kali)'

                }

            },

            tooltip: {

                shared: true,

                useHTML: true

            },

            plotOptions: {

                column: {

                    pointPadding: 0.2,

                    borderWidth: 0

                }

            },

            series: [{

                name:'Frekuensi' ,

                data: dataKh.data

            }]

        });

      });/*End Ajax KH*/

    }

    function chartKt(url, type)
    {

        $.ajax({

          url : url

        }).done(function(response){

          let dataKt = {

            data : [],

            name : []

          };

          $.each(response, function(key, value){

            dataKt.name.push(value.bln); 

            dataKt.data.push(parseInt(value.data)); 

          });

          /*Hightchart colors option*/
          Highcharts.setOptions({

            colors: ['#12AFAF', '#F62D51', '#64E572', '#2962FF']

          });

          /*Chart KH*/
          let chartKt = Highcharts.chart('chartFrekuensiKt', {

            credits : false,

            chart: {

                type: 'column'

            },

            title: {

                text: 'Frekuensi Operasional Karantina Tumbuhan'

            },

            subtitle: {

                text: type

            },

            xAxis: {

                categories:  dataKt.name,

                crosshair: true

            },

            yAxis: {

                min: 0,

                title: {

                    text: 'Frekuensi (kali)'

                }

            },

            tooltip: {

                shared: true,

                useHTML: true

            },

            plotOptions: {

                column: {

                    pointPadding: 0.2,

                    borderWidth: 0

                }

            },

            series: [{

                name:'Frekuensi' ,

                data: dataKt.data

            }]

        });

      });/*End Ajax KT*/

    }

    $('#selectCatKh').change(function(){

        khValue     = $('#selectCatKh').val();

        chartKhUrl  = khUrl + '/' + khValue + '/' + year;

        chartKh(chartKhUrl, khValue);

    });/*End Select KH*/

    $('#selectCatKt').change(function(){

      ktValue = $('#selectCatKt').val();

      chartKtUrl  = ktUrl + '/' + ktValue + '/' + year;

      chartKt(chartKtUrl, ktValue);

    });/*End Select KT*/

    function loader()
    {

      /*table data loader*/

      $('#table-dashboard tbody').html(`<td colspan="4" style="text-align: center;"><img src='images/ajax-loader.gif'></td>`);

      /*top 5 komoditi loader*/

      $('#topFiveKh').html(`<div class='text-center'><img src='images/ajax-loader.gif'></div>`);

      $('#topFiveKt').html(`<div class='text-center'><img src='images/ajax-loader.gif'></div>`);

      /*charts loader*/

      $('#chartFrekuensiKh').html(`<div class='text-center'><img src='images/ajax-loader.gif'></div>`);

      $('#chartFrekuensiKt').html(`<div class='text-center'><img src='images/ajax-loader.gif'></div>`);

    }

  });/*End Ready*/

</script>

