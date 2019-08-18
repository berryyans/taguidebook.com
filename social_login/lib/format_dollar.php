<?php 
function usd($data){
$usd = "";
$jml = strlen($data);

 while($jml > 3) {
	$usd = "," . substr($data,-3) . $usd;
	$l = strlen($data) - 3;
	$data = substr($data,0,$l);
	$jml = strlen($data);
 }
 $usd = "IDR " . $data . $usd.".00" ;
 return $usd;
}
?>