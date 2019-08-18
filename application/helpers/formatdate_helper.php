<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function tgl_eng_to_ind($tgl){
	$tgl_ind=substr($tgl,8,2)."-".substr($tgl,5,2)."-".substr($tgl,0,4);
	return $tgl_ind;
}

function tgl_ind_to_eng($tgl){
	$tgl_eng=substr($tgl,6,4)."-".substr($tgl,3,2)."-".substr($tgl,0,2);
	return $tgl_eng;
}
function bulan($b) {

	$ary_con = array("January" => "Januari","February" => "Februari","March" => "Maret","April" => "April","May" => "Mei","June" => "Juni","July" => "Juli","August" => "Agustus","September" => "September","October" => "Oktober","November" => "November","December" => "Desember",);
	foreach($ary_con as $key => $val){

		if($key==$b){$b = $val;}

	}

	$bulan = $b;

	return $bulan;

}

function hari($h) {

	$ary_con = array("Sunday" => "Minggu", "Monday" => "Senin", "Tuesday" => "Selasa", "Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jumat", "Saturday" => "Sabtu");	

	foreach($ary_con as $key => $val){

		if($key==$h){$h = $val;}

	}

	$hari = $h;

	return $hari;

}

// indonesia
function format_date_in($option_format, $date){

	list($yyyy, $mm, $dd) = explode('-', $date);

	$namahari = date('l', strtotime($date));

	if ($namahari == "Sunday") $namahari = "Minggu";
	else if ($namahari == "Monday") $namahari = "Senin";
	else if ($namahari == "Tuesday") $namahari = "Selasa";
	else if ($namahari == "Wednesday") $namahari = "Rabu";
	else if ($namahari == "Thursday") $namahari = "Kamis";
	else if ($namahari == "Friday") $namahari = "Jumat";
	else if ($namahari == "Saturday") $namahari = "Sabtu";

	$ary_month = array("01" => "Januari","02" => "Februari","03" => "Maret","04" => "April","05" => "Mei","06" => "Juni","07" => "Juli","08" => "Agustus","09" => "September","10" => "Oktober","11" => "November","12" => "Desember",);

	

	foreach($ary_month as $key => $val){

		if($key==$mm){$mm = $val;}

	}			

	switch($option_format){

		case "1"	:

			$date = $namahari." ".$mm." ".$dd.", ".$yyyy;

			break;

		case "2"	:

			$date = $namahari." ".$dd." ".$mm." ".$yyyy;

			break;	

	

	}

	return 	$date;	

}

//english
function format_date_en($option_format, $date){
	list($yyyy, $mm, $dd) = explode('-', $date);
	
	$ary_month = array("01" => "January","02" => "February","03" => "March","04" => "April","05" => "May","06" => "June","07" => "July","08" => "August","09" => "September","10" => "October","11" => "November","12" => "December",);
	
	foreach($ary_month as $key => $val){
		if($key==$mm){$mm = $val;}
	}			
	switch($option_format){
		case "1"	:
			$date = $dd." ".$mm." ".$yyyy;
			break;
		case "2"	:
			$date = $mm." ".$dd.", ".$yyyy;
			break;	
	
	}
	return 	$date;	
}