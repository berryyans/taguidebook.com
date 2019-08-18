<?php
//Author: Yanno Dwi Ananda
//Letakkan/include source ini di dalam tag <head>...</head>

if($_GET[idm]!=''){
	$qtitle=mysql_query("SELECT * FROM mutama where id_mutama='$_GET[idm]'");
	$htitle=mysql_fetch_array($qtitle);
	
	if(empty($_GET[lang])){
		$judulHalaman = trim($htitle[judul_in]);
	}else
	{
		$judulHalaman = trim($htitle['judul_'.$_GET[lang].'']);
	}
}
else{
	if(empty($_GET[lang])){
		$judulHalaman = "Selamat Datang di Website Resmi Bank BPD Bali";
	}else
	{
		$judulHalaman = "Welcome to Official Website Bank BPD Bali";
	}
}

?>
<title><?php echo "Bank BPD Bali :: ".$judulHalaman; ?></title>

