<?php

function pasaranjawa($tgl){
	// dipilih tanggal 1 Maret 2010 sebagai acuan
	// hari pasaran tanggal 1 Maret 2010 adalah 'Pon'
	$tgl1 = "2010-03-01";  
	
	// ingin mengetahui apa nama hari pasaran untuk tanggal 2 April 2010
	$tgl2 = $tgl; 
	
	
	
	// array urutan nama hari pasaran dimulai dari 'Pon'
	$pasaran = array('Pon', 'Wage', 'Kliwon', 'Legi', 'Pahing');
	
	// proses mencari selisih hari antara kedua tanggal
	$pecah1 = explode("-", $tgl1);
	$date1 = $pecah1[2];
	$month1 = $pecah1[1];
	$year1 = $pecah1[0];
	
	$pecah2 = explode("-", $tgl2);
	$date2 = $pecah2[2];
	$month2 = $pecah2[1];
	$year2 =  $pecah2[0];
	
	$jd1 = GregorianToJD($month1, $date1, $year1);
	$jd2 = GregorianToJD($month2, $date2, $year2);
	
	$selisih = $jd2 - $jd1;
	
	// hitung modulo 5 dari selisih harinya
	$mod = $selisih % 5;

	$pasaran=$pasaran[$mod];
	return $pasaran;
}
?>