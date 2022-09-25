$(document).ready(function () {
	$("#hilangkan").on("click",(function(){

		$("#wrapper").remove();

	}));

	// $("#view_data_permohonan").on("click",(function(){

	// 	$.ajax({url: "views/data/SemuaDataPermohonan.php"}).done(function( html ) {
	//     $("#Showdatapermohonan").after(html);
	// 	});

	// }));

	$("#view_data_penerima").on("click",(function(){

		$.ajax({url: "views/data/SemuaDataTandaTerimaSampel.php"}).done(function( html ) {
	    $("#Showdatatandaterima").after(html);
		});

	}));


	$("#view_data_permintaan").on("click",(function(){

		$.ajax({url: "views/data/SemuaDataPerminKesiapanPengujian.php"}).done(function( html ) {
	    $("#Showdataperminkesiapanpengujian").after(html);
		});

	}));


	/*$("#edit_data_permohonan").on("click",(function(){

		$.ajax({url: "views/data/test.php"}).done(function( html ) {
	    $("#edit_data_permohonan").append(html);
		});

	}));*/


	$("#view_data_penyerahan").on("click",(function(){

		$.ajax({url: "views/data/SemuaDataPenyerahan.php"}).done(function( html ) {
	    $("#Showdatapenyerahan").after(html);
		});

	}));


	$("#view_data_kesiapan").on("click",(function(){

		$.ajax({url: "views/data/SemuaDataKesiapan.php"}).done(function( html ) {
	    $("#Showdatakesiapan").after(html);
		});

	}));

	$("#view_data_penugasan").on("click",(function(){

		$.ajax({url: "views/data/SemuaDataPenugasan.php"}).done(function( html ) {
	    $("#Showdatapenugasan").after(html);
		});

	}));

	$("#view_data_surattugas").on("click",(function(){

		$.ajax({url: "views/data/Dataprintsurattugas.php"}).done(function( html ) {
	    $("#Showprintpenugasan").after(html);
		});

	}));


	$("#view_data_distribusi").on("click",(function(){

		$.ajax({url: "views/data/SemuaDataDistribusiSampeel.php"}).done(function( html ) {
	    $("#Showdatadistirbusi").after(html);
		});

	}));

	$("#view_data_teknis").on("click",(function(){

		$.ajax({url: "views/data/SemuaDataTeknis.php"}).done(function( html ) {
	    $("#Showdatateknis").after(html);
		});

	}));

	$("#view_data_pengujian").on("click",(function(){

		$.ajax({url: "views/data/SemuaDatapengujian.php"}).done(function( html ) {
	    $("#Showdatapengujian").after(html);
		});

	}));


	$("#view_data_lhu").on("click",(function(){

		$.ajax({url: "views/data/SemuaDatalhu.php"}).done(function( html ) {
	    $("#Showdatalhu").after(html);
		});

	}));

	
	$('#nama_patogen').DataTable({

		"ajax" : "views/data/Sourcetargetpengujian.php",

		"columns" : [

			{"data" : "nama_penyakit"},


		],

		"columnDefs": [{
	    "defaultContent": "-",
	    "targets": "_all"
	  }]

	});	
	
});








