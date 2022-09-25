<?php

function tgl_indo($tanggal){

	$bulan = array (

		1 =>   'Januari',

		'Februari',

		'Maret',

		'April',

		'Mei',

		'Juni',

		'Juli',

		'Agustus',

		'September',

		'Oktober',

		'November',

		'Desember'

	);

	$pecahkan = explode('-', $tanggal);

	

	// variabel pecahkan 0 = tanggal

	// variabel pecahkan 1 = bulan

	// variabel pecahkan 2 = tahun



	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];

}



function tgl_indo2($tanggal2){

	$bulan2 = array (

		1 =>   'Januari',

		'Februari',

		'Maret',

		'April',

		'Mei',

		'Juni',

		'Juli',

		'Agustus',

		'September',

		'Oktober',

		'November',

		'Desember'

	);

	$pecahkan2 = explode('-', $tanggal2);

	

	// variabel pecahkan 0 = tanggal

	// variabel pecahkan 1 = bulan

	// variabel pecahkan 2 = tahun



	return $pecahkan2[2] . ' ' . $bulan2[ (int)$pecahkan2[1] ] ;

}





// FUNGSI BULAN DALAM BAHASA INDONESIA

function bulan($bln){

	$bulan = $bln;

		Switch ($bulan){

			 case 1 : $bulan="Januari";

			 Break;

			 case 2 : $bulan="Februari";

			 Break;

			 case 3 : $bulan="Maret";

			 Break;

			 case 4 : $bulan="April";

			 Break;

			 case 5 : $bulan="Mei";

			 Break;

			 case 6 : $bulan="Juni";

			 Break;

			 case 7 : $bulan="Juli";

			 Break;

			 case 8 : $bulan="Agustus";

			 Break;

			 case 9 : $bulan="September";

			 Break;

			 case 10 : $bulan="Oktober";

			 Break;

			 case 11 : $bulan="November";

			 Break;

			 case 12 : $bulan="Desember";

			 Break;

	 }

	return $bulan;

}



//CARA MEMANGGIL FUNGSI BULAN



// $bulan = bulan(date("m"));

// echo $bulan;

function hari($tanggal){

$hari   = date('l', microtime($tanggal));

$hari_indonesia = array('Monday'  => 'Senin',

	'Tuesday'  => 'Selasa',

	'Wednesday' => 'Rabu',

	'Thursday' => 'Kamis',

	'Friday' => 'Jum'."'".'at',

	'Saturday' => 'Sabtu',

	'Sunday' => 'Minggu');

$hari_ini = $hari_indonesia[$hari];

return $hari_ini;

}

function rp($rupiah)  
{  
     $jadi = "Rp ".number_format($rupiah,2,",",".");  
     return $jadi;  
}

?>