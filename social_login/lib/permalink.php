<?php
function getPermalink($link)
{
	$filter = array('~', '`', '!', '@', '#', '$', '%', '^', '&','*','*','(',')','-','_','=','+','.',',','/','?','"','[','{','}',']',"'","\\",'"',';','<','>','|',':');
        $link= str_replace(" ","-",trim(str_replace($filter,'',$link)));
					
	return $link.".html";
}

function getPermalink2($link)
{
	$link = str_replace('-','min',$link);
			
	$link = str_replace(' ','-',$link);
	
	$link = str_replace(',','koma',$link);
	
	$link = str_replace('"','petik',$link);
			
	$link = str_replace("'","pet",$link);
	
	$link = str_replace('%','persen',$link);
	
	$link = str_replace('(','awal',$link);
	
	$link = str_replace(')','akhir',$link);
					
	return $link;
}

function clearTitle($link)
{
	$link = str_replace('-','-',$link);
			
	$link = str_replace(' ','-',$link);
	
	$link = str_replace('','-',$link);
	
	$link = str_replace(',','-',$link);
	
	$link = str_replace('"','-',$link);
			
	$link = str_replace("'","-",$link);
	
	$link = str_replace('%','-',$link);
	
	$link = str_replace('/','-',$link);
	
	$link = str_replace('(','-',$link);
	
	$link = str_replace(')','-',$link);
					
	return $link;
}


function showPermalink($link)
{
	$link = str_replace('-',' ',$link);
	
	$link = str_replace('koma',',',$link);
	
	$link = str_replace('petik','"',$link);
	
	$link = str_replace('min','-',$link);
	
	$link = str_replace("pet","'",$link);
	
	$link = str_replace('persen','%',$link);
	
	$link = str_replace('awal','(',$link);
	
	$link = str_replace('akhir',')',$link);
	
	return $link;
}

function pecahTgl($tgl)
{
	$date=explode('-',$tgl);
	
	foreach($date as $rows)
	{
		$tahun = $date[0];
		
		$bulan = $date[1];
		
		$hari = $date[2];
	}
	
	$row->tahun=$tahun;
	
	$row->bulan=$bulan;
	
	$row->hari=$hari;
	
	return $row;
}


?>