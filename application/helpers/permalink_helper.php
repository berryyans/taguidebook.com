<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function getPermalink($link){
	$link = str_replace('-','min',$link);
	$link = str_replace(' ','-',$link);
	$link = str_replace(',','koma',$link);
	$link = str_replace('"','petik',$link);
	$link = str_replace("'","pet",$link);
	$link = str_replace('%','persen',$link);
	$link = str_replace('/','garis_miring',$link);
	$link = str_replace('(','awal',$link);
	$link = str_replace(')','akhir',$link);
	return $link.".html";
}

function showPermalink($link){
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

function clearTitle($link)
{
	$filter = array('~', '`', '!', '@', '#', '$', '%', '^', '&','*','*','(',')','-','_','=','+','.',',','/','?','"','[','{','}',']',"'","\\",'"',';','<','>','|',':');
        $link= str_replace(" ","-",trim(str_replace($filter,'',$link)));
					
	return $link;
}
?>