<?php
$halaman="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];//getcwd();//$_SERVER['PHP_SELF'];
$tanggal=date("Y-m-d");
$jam=date("H:i:s");

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$useragent = $browser['userAgent']." Version : ".$browser['version'];//$_SERVER ['HTTP_USER_AGENT'];
$os=$browser['platform'];

//echo "Anda berada di : ".$halaman;

/*$query=mysql_query("select * from statistik_accespages where halaman='$halaman'");
$cek=mysql_num_rows($query);

if($cek==0){
	$jml=1;
*/
	$insert=mysql_query("insert into statistik_accespages(halaman,tanggal,jam,host,ip,browser,os) values('$halaman','$tanggal','$jam','$hostname','$ip','$useragent','$os')");
/*
}else{
	$update=mysql_query("update statistik_accespages set jml=jml+1 where halaman='$halaman'");
}
*/
?>