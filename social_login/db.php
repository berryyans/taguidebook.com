<?php		
$domain = "localhost";
$us = "balp7414_taguidebook_usr";
$ps = "Jhzd8mnfwX6;";
$db = "balp7414_taguidebook";	

$id_mysql=mysql_pconnect($domain,$us,$ps) or die("Koneksi gagal");
mysql_select_db($db,$id_mysql) or die("Database tidak bisa dibuka");

?>