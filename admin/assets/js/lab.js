 $(document).ready(function () {

 	$('#menu-toggle').on("click", function (){
		$("#side").animate({left: -250}, 400), 
		$('#page-wrapper').animate({left: -250}, 400), 
		$("#menu-toggle").animate({left: -300}, 200), 
		$('#menu-toggle2').animate({left: -122}, 430),
		$(this).css("display", "none"),
		$("#menu-toggle2").css("display", "block")
	});

	$('#menu-toggle2').on('click', function (){
		$("#side").animate({left: 0}, 400), 
		$('#page-wrapper').animate({left: 0}, 400), 
		$("#menu-toggle").animate({left: 0}, 450), 
		$('#menu-toggle2').animate({left: 0}, 700)
		$(this).css("display", "none"),
		$("#menu-toggle").css("display", "block")
	});

 	$('#datatables').DataTable();

 	$('#datatables2').DataTable({

 		"bLengthChange" : false,
	    "paging": false,
	    "searching": false,
	    "ordering": false,
	    "lengthChange": false,
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": " _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    }

 	});

	$("#hilangkan").on("click",(function(){

		$("#wrapper").remove();

	}));

	/*KARANTINA TUMBUHAN
	*
	*
	*
	*
	*LABORATORIUM*/

	$('#datapermohonan').DataTable({

		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataPermohonan.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_permohonan"},
			{"data" : "tanggal_permohonan"},
			{"data" : "nama_sampel"},
			{"data" : "nama_ilmiah"},
			{"data" : "jumlah_sampel"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "media"},
			{"data" : "vektor"},
			{"data" : "daerah_asal"},
			{"data" : "nama_patogen"},
			{"data" : "target_optk"},
			{"data" : "metode_pengujian"},
			{"data" : "nama_pemilik"},
			{"data" : "alamat_pemilik"},
			{"data" : "dokumen_pendukung"},
			{"data" : "pemohon"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	

	$('#datapenerimasampel').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataTandaTerimaSampel.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_permohonan"},
			{"data" : "tanggal_diterima"},
			{"data" : "cara_pengiriman"},
			{"data" : "pengantar"},
			{"data" : "nama_pemilik"},
			{"data" : "alamat_pemilik"},
			{"data" : "nama_sampel"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "jumlah_sampel"},
			{"data" : "jumlah_kontainer"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "metode_pengujian"},
			{"data" : "lama_pengujian"},
			{"data" : "penerima_sampel"},
			{"data" : "nip_penerima_sampel"},

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	

	$('#dataperminkesiapan').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataPerminKesiapanPengujian.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_permohonan"},
			{"data" : "tanggal_diterima"},
			{"data" : "cara_pengiriman"},
			{"data" : "nama_sampel"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "jumlah_sampel"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "kode_sampel"},
			{"data" : "ma"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	
	
	$('#datarespon').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataResponPengujian.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "tanggal_permohonan"},
			{"data" : "kode_sampel"},
			{"data" : "nama_sampel"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "metode_pengujian"},
			{"data" : "penyelia"},
			{"data" : "analis"},
			{"data" : "bahan"},
			{"data" : "alat"},
			{"data" : "mt"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	

	$('#datapenyerahan').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataPenyerahan.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_permohonan"},
			{"data" : "tanggal_permohonan"},
			{"data" : "tanggal_penyerahan"},
			{"data" : "kode_sampel"},
			{"data" : "nama_sampel"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "metode_pengujian"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "yang_menyerahkan"},
			{"data" : "yang_menerima"},

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});

	$('#datakesiapan').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataKesiapan.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "kode_sampel"},
			{"data" : "tanggal_permohonan"},	
			{"data" : "nama_sampel"},
			{"data" : "nama_ilmiah"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "jumlah_sampel"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "kondisi_sampel"},
			{"data" : "mt"},
			{"data" : "nip_mt"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});

	$('#datapenugasan').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataPenugasan.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "kode_sampel"},
			{"data" : "no_sampel"},
			{"data" : "tanggal_penunjukan"},	
			{"data" : "nama_sampel"},
			{"data" : "nama_ilmiah"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "jumlah_sampel"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "nama_penyelia"},
			{"data" : "nama_analis"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});

	$("#view_data_surattugas").on("click",(function(){

	$.ajax({url: "views/data/Dataprintsurattugas.php"}).done(function( html ) {
    $("#Showprintpenugasan").after(html);

	});

}));

	$('#datapengelola').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataDistribusiSampeel.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "kode_sampel"},
			{"data" : "no_sampel"},
			{"data" : "tanggal_penunjukan"},	
			{"data" : "nama_sampel"},
			{"data" : "nama_ilmiah"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "jumlah_sampel"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "yang_menyerahkanlab"},
			{"data" : "yang_menerimalab"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});



	$('#datateknis').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDataTeknis.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "kode_sampel"},
			{"data" : "no_sampel"},
			{"data" : "tanggal_pengujian"},	
			{"data" : "nama_sampel"},
			{"data" : "nama_ilmiah"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "jumlah_sampel"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "nama_penyelia"},
			{"data" : "nama_analis"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});

	$('#datapengujian').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDatapengujian.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_sertifikat"},
			{"data" : "kode_sampel"},
			{"data" : "no_sampel"},
			{"data" : "tanggal_pengujian"},	
			{"data" : "nama_sampel"},
			{"data" : "nama_ilmiah"},
			{"data" : "bagian_tumbuhan"},
			{ "render":function(data, type, isi){	
				let a = isi.target_optk;	
				let b = isi.target_optk2;
				let c = isi.target_optk3;		
	       		let an = a +', '+b;
	       		let bn = a;
	       		let cn = a +', '+b+', '+c;
		       		if (b == null && c == null) {
		       			return "<i>"+bn+"</i>";
		       		}else if (b !== null){
		       			return "<i>"+an+"</i>";
		       		}else{
		       			return "<i>"+cn+"</i>";
		       		}
	       		}
			},
			{"data" : "kepala_plh"},
			{"data" : "nip_kepala_plh"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});

	$('#datalhu').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 30,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data/SourceDatalhu.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "kode_sampel"},
			{"data" : "no_sampel"},
			{"data" : "tanggal_lhu"},	
			{"data" : "nama_sampel"},
			{"data" : "nama_ilmiah"},
			{"data" : "bagian_tumbuhan"},
			{"data" : "no_lhu"},
			{"data" : "no_agenda"},
			{"data" : "kepala_plh2"},
			{"data" : "nip_kepala_plh2"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	
	
});

/*KARANTINA HEWAN
*
*
*
*
*LABORATORIUM LIHAT TABEL SEMUA DATA*/

 $(document).ready(function() {

 	$('#datapermohonan_kh').DataTable({

		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data_kh/SourceDataPermohonan_kh.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_permohonan"},
			{"data" : "tanggal_permohonan"},
			{"data" : "nama_sampel"},
			{"data" : "jumlah_sampel"},
			{"data" : "no_sampel_awal"},
			{"data" : "nama_sampel"},
			{"data" : "produk_hewan"},
			{"data" : "metode_pengujian"},
			{"data" : "biaya_pengujian"},
			{"data" : "waktu_pengambilan_sampel"},
			{"data" : "area_asal"},
			{"data" : "cara_pengambilan_sampel"},
			{"data" : "target_pengujian2"},
			{"data" : "lama_pengujian"},
			{"data" : "nama_pemilik"},
			{"data" : "alamat_pemilik"},
			{"data" : "pemohon"},
			{"data" : "nip_pemohon"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	

	 $('#datapenerimasampel_kh').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data_kh/SourceDataTandaTerimaSampel_kh.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_permohonan"},
			{"data" : "tanggal_diterima"},
			{"data" : "cara_pengiriman"},
			{"data" : "pengantar"},
			{"data" : "nama_pemilik"},
			{"data" : "alamat_pemilik"},
			{"data" : "nama_sampel"},
			{"data" : "bagian_hewan"},
			{"data" : "jumlah_sampel"},
			{"data" : "jumlah_kontainer"},
			{"data" : "target_pengujian2"},
			{"data" : "metode_pengujian"},
			{"data" : "lama_pengujian"},
			{"data" : "penerima_sampel"},
			{"data" : "nip_penerima_sampel"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	

	$('#dataperminkesiapan_kh').DataTable({
		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data_kh/SourceDataPerminKesiapanPengujian_kh.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "no_permohonan"},
			{"data" : "tanggal_diterima"},
			{"data" : "nama_sampel"},
			{"data" : "bagian_hewan"},
			{"data" : "jumlah_sampel"},
			{"data" : "target_pengujian2"},
			{"data" : "kode_sampel"},
			{"data" : "ma"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	


	$('#datarespon_kh').DataTable({

		"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },

		"ajax" : "views/data_kh/SourceDataResponPengujian_kh.php",

		"columns" : [

			{"data" : "0"},
			{"data" : "tanggal_permohonan"},
			{"data" : "kode_sampel"},
			{"data" : "nama_sampel"},
			{"data" : "target_pengujian2" },
			{"data" : "metode_pengujian"},
			{"data" : "penyelia"},
			{"data" : "analis"},
			{"data" : "bahan"},
			{"data" : "alat"},
			{"data" : "mt"}

		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});

 });/*end ready functions*/



/*END TABEL LIHAT SEMUA DATA*/
  

$(document).ready(function(){

	/*Laboratorium Karantina Tumbuhan*/

	 $('.input-daterange').datepicker({
		  todayBtn:'linked',
		  format: "yyyy-mm-dd",
		  autoclose: true
		 });

 	/*Tabel Data Permohonan*/

	 fetch_data_permohonan('no');

	 function fetch_data_permohonan(is_date_search, start_date='', end_date='')
	 {
	  let dataTable_permohonan = $('#tb_permohonan').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_permohonan.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_permohonan', function(){

	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_permohonan').DataTable().destroy();

		   fetch_data_permohonan('yes', start_date, end_date);

		   $('#search_permohonan').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_permohonan').DataTable().destroy();

		   		fetch_data_permohonan('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_permohonan" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 }); 


    /*Input Data*/

     $('#top').one('click','#tombol_input_permohonan' ,function(e){

        e.preventDefault();

        $.post("views/input/inputdata_permohonan.php", function(data) {

        	$("#content-data_input_permohonan").html(data);

        	$("#modal_input_permohonan").modal('show');

        });
    });

     /*Eit Permohonan*/

    $('#tb_permohonan').on('click','#tombol_edit_permohonan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_permohonan').html('');
        $.ajax({
            url:'views/edit/editdata_permohonan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_permohonan').html('');
            $('#content-data_permohonan').html(data);
        }).fail(function(){
            $('#content-data_permohonan').html('<p>Error</p>');
        });
    });

    $(document).on("click", "#hapus", function(){

    	return confirm("Yakin Ingin Hapus Data Ini?");


    });


   
    /*Tabel Data Penerima Sampel*/

    fetch_data_penerima_sampel('no');

    function fetch_data_penerima_sampel(is_date_search, start_date='', end_date='')
	 {
	  let dataTable_penerima_sampel = $('#tb_penerima_sampel').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_penerima_sampel.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }


	  $('#clear').on('click', '#search_penerima_sampel', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_penerima_sampel').DataTable().destroy();

		   fetch_data_penerima_sampel('yes', start_date, end_date);

		   $('#search_penerima_sampel').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_penerima_sampel').DataTable().destroy();

		   		fetch_data_penerima_sampel('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_penerima_sampel" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 }); 

    /*input*/
    
    $('#tb_penerima_sampel').on('click','#tombol_input_penerima_sampel',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_penerima_sampel').html('');
        $.ajax({
            url:'views/input/inputdata_penerima_sampel.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_penerima_sampel').html('');
            $('#content-data_input_penerima_sampel').html(data);
        }).fail(function(){
            $('#content-data_input_penerima_sampel').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_penerima_sampel').on('click','#tombol_edit_penerima_sampel',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_penerima_sampel').html('');
        $.ajax({
            url:'views/edit/editdata_penerima_sampel.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_penerima_sampel').html('');
            $('#content-data_edit_penerima_sampel').html(data);
        }).fail(function(){
            $('#content-data_edit_penerima_sampel').html('<p>Error</p>');
        });
    });

    /*End Table Penerima Sampel*/

    /*Tabel Permintaan kesiapan Pengujian*/

    fetch_data_permintaan_kesiapan('no');

    function fetch_data_permintaan_kesiapan(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_permintaan_kesiapan = $('#tb_permintaan_kesiapan').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_permintaan_kesiapan.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }


	  $('#clear').on('click', '#search_permintaan_kesiapan', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_permintaan_kesiapan').DataTable().destroy();

		   fetch_data_permintaan_kesiapan('yes', start_date, end_date);

		   $('#search_permintaan_kesiapan').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_permintaan_kesiapan').DataTable().destroy();

		   		fetch_data_permintaan_kesiapan('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_permintaan_kesiapan" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });


    /*input*/
    
    $('#tb_permintaan_kesiapan').on('click','#tombol_input_permintaan_kesiapan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_permintaan_kesiapan').html('');
        $.ajax({
            url:'views/input/inputdata_permintaan_kesiapan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_permintaan_kesiapan').html('');
            $('#content-data_input_permintaan_kesiapan').html(data);
        }).fail(function(){
            $('#content-data_input_permintaan_kesiapan').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_permintaan_kesiapan').on('click','#tombol_edit_permintaan_kesiapan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_permintaan_kesiapan').html('');
        $.ajax({
            url:'views/edit/editdata_permintaan_kesiapan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_permintaan_kesiapan').html('');
            $('#content-data_edit_permintaan_kesiapan').html(data);
        }).fail(function(){
            $('#content-data_edit_permintaan_kesiapan').html('<p>Error</p>');
        });
    });

    /*End Tabel Permintaan Kesiapan*/

    /*Tabel Respon Permohonan*/


    fetch_data_respon_permohonan('no');

    function fetch_data_respon_permohonan(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_respon_permohonan = $('#tb_respon_permohonan').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_respon_permohonan.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_respon_permohonan', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_respon_permohonan').DataTable().destroy();

		   fetch_data_respon_permohonan('yes', start_date, end_date);

		   $('#search_respon_permohonan').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_respon_permohonan').DataTable().destroy();

		   		fetch_data_respon_permohonan('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_respon_permohonan" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });


    /*input*/
    
    $('#tb_respon_permohonan').on('click','#tombol_input_respon_permohonan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_respon_permohonan').html('');
        $.ajax({
            url:'views/input/inputdata_respon_permohonan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_respon_permohonan').html('');
            $('#content-data_input_respon_permohonan').html(data);
        }).fail(function(){
            $('#content-data_input_respon_permohonan').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_respon_permohonan').on('click','#tombol_edit_respon_permohonan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_respon_permohonan').html('');
        $.ajax({
            url:'views/edit/editdata_respon_permohonan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_respon_permohonan').html('');
            $('#content-data_edit_respon_permohonan').html(data);
        }).fail(function(){
            $('#content-data_edit_respon_permohonan').html('<p>Error</p>');
        });
    });

    /*End Tabel Respon*/

    /*Tabel Penyerahan Sampel*/

    fetch_data_penyerahan_sampel('no');

    function fetch_data_penyerahan_sampel(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_penyerahan_sampel = $('#tb_penyerahan_sampel').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_penyerahan_sampel.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_penyerahan_sampel', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_penyerahan_sampel').DataTable().destroy();

		   fetch_data_penyerahan_sampel('yes', start_date, end_date);

		   $('#search_penyerahan_sampel').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_penyerahan_sampel').DataTable().destroy();

		   		fetch_data_penyerahan_sampel('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_penyerahan_sampel" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });

    /*input*/
    
    $('#tb_penyerahan_sampel').on('click','#tombol_input_penyerahan_sampel',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_penyerahan_sampel').html('');
        $.ajax({
            url:'views/input/inputdata_penyerahan_sampel.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_penyerahan_sampel').html('');
            $('#content-data_input_penyerahan_sampel').html(data);
        }).fail(function(){
            $('#content-data_input_penyerahan_sampel').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_penyerahan_sampel').on('click','#tombol_edit_penyerahan_sampel',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_penyerahan_sampel').html('');
        $.ajax({
            url:'views/edit/editdata_penyerahan_sampel.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_penyerahan_sampel').html('');
            $('#content-data_edit_penyerahan_sampel').html(data);
        }).fail(function(){
            $('#content-data_edit_penyerahan_sampel').html('<p>Error</p>');
        });
    });

    /*End Tabel Permintaan Kesiapan*/

    /*Bagian Manajer Teknis*/

    /*Tabel Kesiapan Pengujian*/


    fetch_data_kesiapan_pengujian('no');

    function fetch_data_kesiapan_pengujian(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_kesiapan_pengujian = $('#tb_kesiapan_pengujian').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_kesiapan_pengujian.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_kesiapan_pengujian', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_kesiapan_pengujian').DataTable().destroy();

		   fetch_data_kesiapan_pengujian('yes', start_date, end_date);

		   $('#search_kesiapan_pengujian').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_kesiapan_pengujian').DataTable().destroy();

		   		fetch_data_kesiapan_pengujian('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_kesiapan_pengujian" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });

    /*input*/
    
    $('#tb_kesiapan_pengujian').on('click','#tombol_input_kesiapan_pengujian',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_kesiapan_pengujian').html('');
        $.ajax({
            url:'views/input/inputdata_kesiapan_pengujian.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_kesiapan_pengujian').html('');
            $('#content-data_input_kesiapan_pengujian').html(data);
        }).fail(function(){
            $('#content-data_input_kesiapan_pengujian').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_kesiapan_pengujian').on('click','#tombol_edit_kesiapan_pengujian',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_kesiapan_pengujian').html('');
        $.ajax({
            url:'views/edit/editdata_kesiapan_pengujian.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_kesiapan_pengujian').html('');
            $('#content-data_edit_kesiapan_pengujian').html(data);
        }).fail(function(){
            $('#content-data_edit_kesiapan_pengujian').html('<p>Error</p>');
        });
    });

    /*End Tabel Permintaan Kesiapan*/

    /*Tabel Usulan Penunjukan Penyelia/Analis & Surat Tugas*/

    fetch_data_usulan_penunjukan('no');

    function fetch_data_usulan_penunjukan(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_usulan_penunjukan = $('#tb_usulan_penunjukan').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_usulan_penunjukan.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_usulan_penunjukan', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_usulan_penunjukan').DataTable().destroy();

		   fetch_data_usulan_penunjukan('yes', start_date, end_date);

		   $('#search_usulan_penunjukan').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_usulan_penunjukan').DataTable().destroy();

		   		fetch_data_usulan_penunjukan('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_usulan_penunjukan" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });

    /*input*/
    
    $('#tb_usulan_penunjukan').on('click','#tombol_input_usulan_penunjukan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_usulan_penunjukan').html('');
        $.ajax({
            url:'views/input/inputdata_usulan_penunjukan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_usulan_penunjukan').html('');
            $('#content-data_input_usulan_penunjukan').html(data);
        }).fail(function(){
            $('#content-data_input_usulan_penunjukan').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_usulan_penunjukan').on('click','#tombol_edit_usulan_penunjukan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_usulan_penunjukan').html('');
        $.ajax({
            url:'views/edit/editdata_usulan_penunjukan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_usulan_penunjukan').html('');
            $('#content-data_edit_usulan_penunjukan').html(data);
        }).fail(function(){
            $('#content-data_edit_usulan_penunjukan').html('<p>Error</p>');
        });
    });

    /* End Tabel Usulan Penunjukan Penyelia/Analis & Surat Tugas*/

    /*Tabel Pengelola Sampel or Distribusi Sampel*/

    fetch_data_pengelola_sampel('no');

    function fetch_data_pengelola_sampel(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_pengelola_sampel = $('#tb_pengelola_sampel').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_pengelola_sampel.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_pengelola_sampel', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_pengelola_sampel').DataTable().destroy();

		   fetch_data_pengelola_sampel('yes', start_date, end_date);

		   $(this).remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_pengelola_sampel').DataTable().destroy();

		   		fetch_data_pengelola_sampel('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_pengelola_sampel" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });


    /*input*/
    
    $('#tb_pengelola_sampel').on('click','#tombol_input_pengelola_sampel',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_pengelola_sampel').html('');
        $.ajax({
            url:'views/input/inputdata_pengelola_sampel.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_pengelola_sampel').html('');
            $('#content-data_input_pengelola_sampel').html(data);
        }).fail(function(){
            $('#content-data_input_pengelola_sampel').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_pengelola_sampel').on('click','#tombol_edit_pengelola_sampel',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_pengelola_sampel').html('');
        $.ajax({
            url:'views/edit/editdata_pengelola_sampel.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_pengelola_sampel').html('');
            $('#content-data_edit_pengelola_sampel').html(data);
        }).fail(function(){
            $('#content-data_edit_pengelola_sampel').html('<p>Error</p>');
        });
    });

    /* End Tabel Pengelola Sampel or Distribusi Sampel*/

    /*Tabel Data Teknis*/

    fetch_data_data_teknis('no');

    function fetch_data_data_teknis(is_date_search, start_date='', end_date='', choice='')
	 {
	   let dataTable_data_teknis = $('#tb_data_teknis').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_data_teknis.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date, choice:choice
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_data_teknis', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

	  var choice = $('#choice').val();

		  if(start_date != '' && end_date !='' && choice !='')
		  {
		   $('#tb_data_teknis').DataTable().destroy();

		   fetch_data_data_teknis('yes', start_date, end_date, choice);

		   $(this).remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_data_teknis').DataTable().destroy();

		   		fetch_data_data_teknis('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_data_teknis" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });


    /*input*/
    
    $('#tb_data_teknis').on('click','#tombol_input_data_teknis',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_data_teknis').html('');
        $.ajax({
            url:'views/input/inputdata_data_teknis.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_data_teknis').html('');
            $('#content-data_input_data_teknis').html(data);
        }).fail(function(){
            $('#content-data_input_data_teknis').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_data_teknis').on('click','#tombol_edit_data_teknis',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_data_teknis').html('');
        $.ajax({
            url:'views/edit/editdata_data_teknis.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_data_teknis').html('');
            $('#content-data_edit_data_teknis').html(data);
        }).fail(function(){
            $('#content-data_edit_data_teknis').html('<p>Error</p>');
        });
    });

    /* End Tabel Data Teknis*/

    /*Tabel Hasil Pengujian*/

    fetch_data_hasil_pengujian('no');

    function fetch_data_hasil_pengujian(is_date_search, start_date='', end_date='', choice='')
	 {
	   let dataTable_hasil_pengujian = $('#tb_hasil_pengujian').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": "",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_hasil_pengujian.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date, choice:choice
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_hasil_pengujian', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

	  var choice = $('#choice').val();

		  if(start_date != '' && end_date !='' && choice !='')
		  {
		   $('#tb_hasil_pengujian').DataTable().destroy();

		   fetch_data_hasil_pengujian('yes', start_date, end_date, choice);

		   $(this).remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_hasil_pengujian').DataTable().destroy();

		   		fetch_data_hasil_pengujian('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		$('#choice').html(
		   			
		   			'<option value="all" selected>Semua</option>' +

		   			'<option value="not_yet">Permohonan Belum Tersertifikasi</option>' +

                  	'<option value="done">Permohonan Sudah Tersertifikasi</option>'

		   			);
		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_hasil_pengujian" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });


    /*input*/
    
    $('#tb_hasil_pengujian').on('click','#tombol_input_hasil_pengujian',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_hasil_pengujian').html('');
        $.ajax({
            url:'views/input/inputdata_hasil_pengujian.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_hasil_pengujian').html('');
            $('#content-data_input_hasil_pengujian').html(data);
        }).fail(function(){
            $('#content-data_input_hasil_pengujian').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_hasil_pengujian').on('click','#tombol_edit_hasil_pengujian',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_hasil_pengujian').html('');
        $.ajax({
            url:'views/edit/editdata_hasil_pengujian.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_hasil_pengujian').html('');
            $('#content-data_edit_hasil_pengujian').html(data);
        }).fail(function(){
            $('#content-data_edit_hasil_pengujian').html('<p>Error</p>');
        });
    });

    /* End Tabel Hasil Pengujian*/

    /*Tabel LHU*/

    fetch_data_lhu('no');

    function fetch_data_lhu(is_date_search, start_date='', end_date='', choice='')
	 {
	   let dataTable_lhu = $('#tb_lhu').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": "",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data/sumber_data_lhu.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date, choice:choice
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_lhu', function(){
	 	
	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

	  var choice = $('#choice').val();

		  if(start_date != '' && end_date !='' && choice !='')
		  {
		   $('#tb_lhu').DataTable().destroy();

		   fetch_data_lhu('yes', start_date, end_date, choice);

		   $(this).remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_lhu').DataTable().destroy();

		   		fetch_data_lhu('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		$('#choice').html(
		   			
		   			'<option value="all" selected>Semua</option>' +

		   			'<option value="not_yet">Permohonan Belum Tersertifikasi</option>' +

                  	'<option value="done">Permohonan Sudah Tersertifikasi</option>'

		   			);
		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_lhu" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 });

    /*input*/
    
    $('#tb_lhu').on('click','#tombol_input_lhu',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_lhu').html('');
        $.ajax({
            url:'views/input/inputdata_lhu.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_lhu').html('');
            $('#content-data_input_lhu').html(data);
        }).fail(function(){
            $('#content-data_input_lhu').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_lhu').on('click','#tombol_edit_lhu',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_lhu').html('');
        $.ajax({
            url:'views/edit/editdata_lhu.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_lhu').html('');
            $('#content-data_edit_lhu').html(data);
        }).fail(function(){
            $('#content-data_edit_lhu').html('<p>Error</p>');
        });
    });

    /* End Tabel LHU*/

    /*Tabel database_tumbuhan*/

    let dataTable_database_tumbuhan = $('#tb_database_tumbuhan').DataTable({
    	"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
        "processing": true,
        "serverSide":true,
        "ajax":{
            url:"database/views/data/sumber_data_database_tumbuhan.php",
            type:"POST"
        }
    });


    /*Edit*/

    $(document).on('click','#tombol_edit_database_tumbuhan',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_database_tumbuhan').html('');
        $.ajax({
            url:'database/views/edit/editdata_database_tumbuhan.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_database_tumbuhan').html('');
            $('#content-data_edit_database_tumbuhan').html(data);
        }).fail(function(){
            $('#content-data_edit_database_tumbuhan').html('<p>Error</p>');
        });
    });

    $(document).on("click", "#hapus_database_tumbuhan", function(){

    	return confirm("Yakin Ingin Hapus Data Ini?");


    });

    /* End Tabel database_tumbuhan*/

    /*Tabel database_patogen*/

    let dataTable_database_patogen = $('#tb_database_patogen').DataTable({
    	"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 15,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
        "processing": true,
        "serverSide":true,
        "ajax":{
            url:"database/views/data/sumber_data_database_patogen.php",
            type:"POST"
        }
    });


    /*Edit*/

    $(document).on('click','#tombol_edit_database_patogen',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_database_patogen').html('');
        $.ajax({
            url:'database/views/edit/editdata_database_patogen.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_database_patogen').html('');
            $('#content-data_edit_database_patogen').html(data);
        }).fail(function(){
            $('#content-data_edit_database_patogen').html('<p>Error</p>');
        });
    });

    $(document).on("click", "#hapus_database_patogen", function(){

    	return confirm("Yakin Ingin Hapus Data Ini?");


    });

    /* End Tabel database_patogen*/

    /*Tabel database_patogen*/

    let dataTable_lihat_data_permohonan = $('#tb_lihat_data_permohonan').DataTable({
    	"dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 15,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
        "processing": true,
        "serverSide":true,
        "ajax":{
            url:"views/data/sumber_data_lihat_data_permohonan.php",
            type:"POST"
        }
    });


    /* End Tabel lihat_data_permohonan*/

    /*Laboratorium Karantina Hewan*/

 	/*Tabel Data Permohonan*/

 	fetch_data_permohonan_kh('no');

	 function fetch_data_permohonan_kh(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_permohonan_kh = $('#tb_permohonan_kh').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data_kh/sumber_data_permohonan_kh.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_permohonan_kh', function(){

	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_permohonan_kh').DataTable().destroy();

		   fetch_data_permohonan_kh('yes', start_date, end_date);

		   $('#search_permohonan_kh').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_permohonan_kh').DataTable().destroy();

		   		fetch_data_permohonan_kh('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_permohonan_kh" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 }); 


    /*Input Data*/

     $('#tb_permohonan_kh').one('click','#tombol_input_permohonan_kh' ,function(e){

        e.preventDefault();

        $.post("views/input_kh/inputdata_permohonan_kh.php", function(data) {

        	$("#content-data_input_permohonan_kh").html(data);

        	$("#modal_input_permohonan_kh").modal('show');

        });
    });

     /*Edit Permohonan*/

    $('#tb_permohonan_kh').on('click','#tombol_edit_permohonan_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_permohonan_kh').html('');
        $.ajax({
            url:'views/edit_kh/editdata_permohonan_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_permohonan_kh').html('');
            $('#content-data_permohonan_kh').html(data);
        }).fail(function(){
            $('#content-data_permohonan_kh').html('<p>Error</p>');
        });
    });

    $('#tb_permohonan_kh').on("click", "#hapus_kh", function(){

    	return confirm("Yakin Ingin Hapus Data Ini?");


    });

    /*Tabel Data Penerima Sampel*/

    fetch_data_penerima_sampel_kh('no');

	 function fetch_data_penerima_sampel_kh(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_penerima_sampel_kh = $('#tb_penerima_sampel_kh').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data_kh/sumber_data_penerima_sampel_kh.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_penerima_sampel_kh', function(){

	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_penerima_sampel_kh').DataTable().destroy();

		   fetch_data_penerima_sampel_kh('yes', start_date, end_date);

		   $('#search_penerima_sampel_kh').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_penerima_sampel_kh').DataTable().destroy();

		   		fetch_data_penerima_sampel_kh('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_penerima_sampel_kh" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 }); 

    /*input*/
    
    $('#tb_penerima_sampel_kh').on('click','#tombol_input_penerima_sampel_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_penerima_sampel_kh').html('');
        $.ajax({
            url:'views/input_kh/inputdata_penerima_sampel_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_penerima_sampel_kh').html('');
            $('#content-data_input_penerima_sampel_kh').html(data);
        }).fail(function(){
            $('#content-data_input_penerima_sampel_kh').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_penerima_sampel_kh').on('click','#tombol_edit_penerima_sampel_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_penerima_sampel_kh').html('');
        $.ajax({
            url:'views/edit_kh/editdata_penerima_sampel_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_penerima_sampel_kh').html('');
            $('#content-data_edit_penerima_sampel_kh').html(data);
        }).fail(function(){
            $('#content-data_edit_penerima_sampel_kh').html('<p>Error</p>');
        });
    });

    /*End Table Penerima Sampel*/

    /*Tabel Permintaan kesiapan Pengujian*/

    fetch_data_permintaan_kesiapan_kh('no');

	 function fetch_data_permintaan_kesiapan_kh(is_date_search, start_date='', end_date='')
	 {
	    let dataTable_permintaan_kesiapan_kh = $('#tb_permintaan_kesiapan_kh').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data_kh/sumber_data_permintaan_kesiapan_kh.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_permintaan_kesiapan_kh', function(){

	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_permintaan_kesiapan_kh').DataTable().destroy();

		   fetch_data_permintaan_kesiapan_kh('yes', start_date, end_date);

		   $('#search_permintaan_kesiapan_kh').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_permintaan_kesiapan_kh').DataTable().destroy();

		   		fetch_data_permintaan_kesiapan_kh('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_permintaan_kesiapan_kh" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 }); 


    /*input*/
    
    $('#tb_permintaan_kesiapan_kh').on('click','#tombol_input_permintaan_kesiapan_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_permintaan_kesiapan_kh').html('');
        $.ajax({
            url:'views/input_kh/inputdata_permintaan_kesiapan_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_permintaan_kesiapan_kh').html('');
            $('#content-data_input_permintaan_kesiapan_kh').html(data);
        }).fail(function(){
            $('#content-data_input_permintaan_kesiapan_kh').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_permintaan_kesiapan_kh').on('click','#tombol_edit_permintaan_kesiapan_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_permintaan_kesiapan_kh').html('');
        $.ajax({
            url:'views/edit_kh/editdata_permintaan_kesiapan_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_permintaan_kesiapan_kh').html('');
            $('#content-data_edit_permintaan_kesiapan_kh').html(data);
        }).fail(function(){
            $('#content-data_edit_permintaan_kesiapan_kh').html('<p>Error</p>');
        });
    });

    /*End Tabel Permintaan Kesiapan*/

    /*Tabel Respon Permohonan*/

    fetch_data_respon_permohonan_kh('no');

	 function fetch_data_respon_permohonan_kh(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_respon_permohonan_kh = $('#tb_respon_permohonan_kh').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data_kh/sumber_data_respon_permohonan_kh.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_respon_permohonan_kh', function(){

	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_respon_permohonan_kh').DataTable().destroy();

		   fetch_data_respon_permohonan_kh('yes', start_date, end_date);

		   $('#search_respon_permohonan_kh').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_respon_permohonan_kh').DataTable().destroy();

		   		fetch_data_respon_permohonan_kh('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_respon_permohonan_kh" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});

		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 }); 

    /*input*/
    
    $('#tb_respon_permohonan_kh').on('click','#tombol_input_respon_permohonan_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_respon_permohonan_kh').html('');
        $.ajax({
            url:'views/input_kh/inputdata_respon_permohonan_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_respon_permohonan_kh').html('');
            $('#content-data_input_respon_permohonan_kh').html(data);
        }).fail(function(){
            $('#content-data_input_respon_permohonan_kh').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_respon_permohonan_kh').on('click','#tombol_edit_respon_permohonan_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_respon_permohonan_kh').html('');
        $.ajax({
            url:'views/edit_kh/editdata_respon_permohonan_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_respon_permohonan_kh').html('');
            $('#content-data_edit_respon_permohonan_kh').html(data);
        }).fail(function(){
            $('#content-data_edit_respon_permohonan_kh').html('<p>Error</p>');
        });
    });

    /*End Tabel Respon*/

    /*Tabel Penyerahan Sampel*/

    fetch_data_penyerahan_sampel_kh('no');

	 function fetch_data_penyerahan_sampel_kh(is_date_search, start_date='', end_date='')
	 {
	   let dataTable_penyerahan_sampel_kh = $('#tb_penyerahan_sampel_kh').DataTable({
		  "dom": "<'row'<'col-sm-2'f><'col-sm-1'><'col-sm-9'p>>" +
   		 "<'row'<'col-sm-12'>>" +
         "<'row'<'col-sm-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
	    "iDisplayLength": 10,
	    "bLengthChange": false,
	    "pagingType": "simple",	
	    "oLanguage": {
	    	"sInfoFiltered": " - difilter dari _MAX_ data",
	    	"sSearch": "Cari:",
	    	"sLengthMenu": "Lihat _MENU_ Data",
	    	"sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
	    	"sEmptyTable": "Data Masih Kosong",
	    	"sZeroRecords": "Data Tidak Ditemukan",
		      "oPaginate": {
		        "sNext": "Next",
		        "sPrevious": "Back"    
	      }
	    },
	   "processing" : true,
	   "serverSide" : true,
	   "order" : [],
	   "ajax" : {
	    url:"views/data_kh/sumber_data_penyerahan_sampel_kh.php",
	    type:"POST",
	    data:{
	     is_date_search:is_date_search, start_date:start_date, end_date:end_date
	    }
	   }
	  });
	 }

	 $('#clear').on('click', '#search_penyerahan_sampel_kh', function(){

	  var start_date = $('#start_date').val();

	  var end_date = $('#end_date').val();

		  if(start_date != '' && end_date !='')
		  {
		   $('#tb_penyerahan_sampel_kh').DataTable().destroy();

		   fetch_data_penyerahan_sampel_kh('yes', start_date, end_date);

		   $('#search_penyerahan_sampel_kh').remove();

		   $('#clear').append('<button id="cleardate" class="btn btn-kuprimary"><i class="fa fa-refresh"></i> Clear</button>');

		   $('#cleardate').click(function () {

		   		$('#tb_penyerahan_sampel_kh').DataTable().destroy();

		   		fetch_data_penyerahan_sampel_kh('no');

		   		$('#start_date').val('').datepicker('update');

		   		$('#end_date').val('').datepicker('update');

		   		
		   		$('#clear').one("click", "#cleardate", function() {
		   			$(this).remove();

					$('#clear').append('<button name="search" id="search_penyerahan_sampel_kh" class="btn btn-kuprimary"><i class="fa fa-sort"></i> Sortir</button>');
				});
		   });
		  }
		  else
		  {
		   swal({

	            title: "",

	            text: "Pilih Semua Tanggal Terlebih Dahulu",

	            type: "info"

	        });
		  }
	 }); 

    /*input*/
    
    $('#tb_penyerahan_sampel_kh').on('click','#tombol_input_penyerahan_sampel_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_input_penyerahan_sampel_kh').html('');
        $.ajax({
            url:'views/input_kh/inputdata_penyerahan_sampel_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_input_penyerahan_sampel_kh').html('');
            $('#content-data_input_penyerahan_sampel_kh').html(data);
        }).fail(function(){
            $('#content-data_input_penyerahan_sampel_kh').html('<p>Error</p>');
        });
    });

    /*Edit*/

    $('#tb_penyerahan_sampel_kh').on('click','#tombol_edit_penyerahan_sampel_kh',function(e){
        e.preventDefault();
        let per_id = $(this).data('id');
        $('#content-data_edit_penyerahan_sampel_kh').html('');
        $.ajax({
            url:'views/edit_kh/editdata_penyerahan_sampel_kh.php',
            type:'POST',
            data:'id=' + per_id,
            dataType:'html'
        }).done(function(data){
            $('#content-data_edit_penyerahan_sampel_kh').html('');
            $('#content-data_edit_penyerahan_sampel_kh').html(data);
        }).fail(function(){
            $('#content-data_edit_penyerahan_sampel_kh').html('<p>Error</p>');
        });
    });

    /*End Tabel Permintaan Kesiapan*/
    


}); /*End Ready Functions*/















