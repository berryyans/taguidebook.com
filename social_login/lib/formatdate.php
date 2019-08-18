<?php
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

		list($yyyy, $mm, $dd) = split('-', $date);

		$ary_month = array("01" => "Januari","02" => "Februari","03" => "Maret","04" => "April","05" => "Mei","06" => "Juni","07" => "Juli","08" => "Agustus","09" => "September","10" => "Oktober","11" => "November","12" => "Desember",);

		

		foreach($ary_month as $key => $val){

			if($key==$mm){$mm = $val;}

		}			

		switch($option_format){

			case "1"	:

				$date = $mm." ".$dd.", ".$yyyy;

				break;

			case "2"	:

				$date = $dd." ".$mm." ".$yyyy;

				break;	

		

		}

		return 	$date;	

	}
	
	//english
	function format_date_en($option_format, $date){
		list($yyyy, $mm, $dd) = split('-', $date);
		
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

	
?>

