<?php
function cektipeimage($nama_file,$tipe_file,$jenis_file){
   $hasil = "Tipe Benar";  // kondisikan terlebih dahulu kalau image benar
   $nama  = $nama_file;
   $tipe  = $tipe_file;
   $jenis = $jenis_file;
   
   $temp = explode(".",$nama);
   $extension = end($temp);
   
   $image =array('image/jpg', 'image/gif', 'image/jpeg', 'image/png', 'image/tiff', 'image/bmp');
   $image2=array('jpg', 'jpeg', 'gif', 'png', 'tif', 'bmp');
   $video=array('video/mpeg', 'video/quicktime', 'video/x-msvideo', 'video/x-sgi-movie', 'video/avi', 'video/x-flv', 'video/mp4');
   $video2=array('map2', 'mpa', 'mpe', 'mpeg', 'mpg', 'mpeg', 'mov', 'qt', 'avi', 'movie', 'flv', 'swf', 'mp4', 'moov');
   $audio=array('audio/basic', 'audio/x-wav', 'audio/aiff', 'audio/x-aiff', 'audio/midi', 'audio/x-midi', 'audio/mod', 'audio/x-mod');
   $audio2= array('mp2', 'mp3', 'snd', 'wav', 'tif', 'aif', 'aifc', 'au', 'mid', 'midi', 'mod');
   $pdf = array('application/pdf','application/x-pdf', 'application/acrobat', 'applications/vnd.pdf', 'text/pdf', 'text/x-pdf'); 
   $pdf2 =  array('pdf','x-pdf', 'acrobat', 'vnd.pdf' );
   
   if($jenis=="image"){
	   if((!in_array($tipe, $image))&&(!in_array($extension, $image2))){
   		$hasil="File Salah";
	   }
   }else if($jenis=="video"){
	   if((!in_array($tipe, $video))&&(!in_array($extension, $video2))){
   		$hasil="File Salah";
	   }
   }else if($jenis=="audio"){
	   if((!in_array($tipe, $audio))&&(!in_array($extension, $audio2))){
   		$hasil="File Salah";
	   }
   }else if($jenis=="pdf"){
	   if((!in_array($tipe, $pdf))&&(!in_array($extension, $pdf2))){
   		$hasil="File Salah";
	   }
   }
   return $hasil;
}

function ceksizeimage($size_file,$max_file){
   $hasil = "Ukuran Benar";  // kondisikan terlebih dahulu kalau image benar
   $size  = $size_file;
   $max   = $max_file;
   if ($size > $max) {
	  $hasil = "Ukuran Salah"; // kondisi image salah
   }
   
   $tok="Ukuran File adalah ".$size." Byte sedangkan yang diperbolehkan adalah ".$max." Byte, ".$hasil.".";
   return $hasil;
}

/*CARA PAKE
cektipeimage(namafile,$tipefile,"pdf")
echo cektipeimage($namafile,$tipefile,"pdf");
echo ceksizeimage($sizefile,$maxfile);
*/
?>