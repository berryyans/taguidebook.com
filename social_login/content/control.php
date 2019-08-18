<?php
if($_POST[posting]=="save"){?>
<br />
<br />
<p>
<?php
	$date=$_POST["date"];
	$show_date=$_POST["show_date"];
	$category="jsw";
	$region=$_POST["region"];
	$title=str_replace("'","&#39;",$_POST['title']);
        $title=str_replace('"',"&#34;",$title);
	$subtitle=$_POST[subtitle];
	$short_content=$_POST[short_content];
	$content=str_replace("'","&#39;",$_POST['content']);
	$tags=$_POST[tags];
	$wartawan="";
	
	$today=date("Ymd");
	$query = "SELECT max(id) AS last FROM posting WHERE id LIKE '$today%'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$lastNoTransaksi = $data['last'];
	$lastNoUrut = substr($lastNoTransaksi, 8, 4);
	$nextNoUrut = $lastNoUrut + 1;
	$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);
	
	$id=$nextNoTransaksi;
	
	$lokasfile=$_FILES['img']['tmp_name'];
	$namafile	= $_FILES["img"]["name"];
	$tipefile	= $_FILES["img"]["type"];
	$maxfile	 = 1000000*10;//1000000 byte =1 mb
	$sizefile	= $_FILES["img"]["size"];

	$source_image=$_POST[source_image];
	$watermark=$_POST[watermark];
	$hit="";
	$status="Hide";
	
	$regex=mysql_fetch_array(mysql_query("SELECT title FROM region WHERE alias='$region'"));
	$regtwit=$regex["region"];
	
	$error = "";
	
	//check validasi
	if(!$date)
	{
		$error .= 'Kolom date wajib diisi <br /> ';
	}
	
	if(!$title)
	{
		$error .= 'Kolom title wajib diisi <br /> ';
	}
		
	if(!$content)
	{
		$error .= 'Kolom content wajib diisi <br /> ';
	}
	
	if(!$status)
	{
		$error .= 'Kolom status wajib diisi <br /> ';
	}
	
	if($lokasfile){
		
		$cektipe=cektipeimage($namafile,$tipefile,"image");
		$cekukuran=ceksizeimage($sizefile,$maxfile);
		
		if($cektipe!="Tipe Benar"){
			$error.=$cektipe;
		}
		if($cekukuran!="Ukuran Benar"){
			$error.=",".$cekukuran;
		}
	}
		
	if(!$error)
	{
		if(!$lokasfile){
			 $query="insert into posting SET id='$id',
			 								 date='$date',
											 show_date='$show_date',
											 id_category='$category',
											 id_region='$region',
											 title='$title',
											 subtitle='$subtitle',
											 short_content='$short_content',
											 content='$content',
											 tags='$tags',
											 wartawan='$wartawan',
										         hit='$hit',
											 status='$status',
											 entry_by='$by',
											 entry_ip='$ip'
			";
		}else{
			//memberi nama unik
			$ran = substr(1000000+rand(1,999999),-6);
			$filetype=substr($_FILES["img"]["name"],strrpos($_FILES["img"]["name"],".")+1);
			$img = clearTitle($title)."_$idd$ran.$filetype";
			
			$query="insert into posting SET id='$id',
											date='$date',
											show_date='$show_date',
											id_category='$category',
											id_region='$region',
											title='$title',
											subtitle='$subtitle',
											short_content='$short_content',
											content='$content',
											tags='$tags',
											img='$img',
											source_image='$source_image',
											wartawan='$wartawan',
										        hit='$hit',
											status='$status',
											entry_by='$by',
											entry_ip='$ip'
			";
			
			//resize image
			include "includes/resize_image.php";
			$image = new SimpleImage();
			$image->load($lokasfile);
			//$image->scale(50);
			//$image->resizeToWidth(300);
			$image->resize(996,498);
			
			if(file_exists("../assets/posting")){
				$image->save("../assets/posting/".$img);
				
				if($watermark){
					// Load the stamp and the img to apply the watermark to
					$stamp = imagecreatefrompng('assets/images/watermark.png');
					
					$im = imagecreatefromjpeg("../assets/posting/".$img);
				
					// Set the margins for the stamp and get the height/width of the stamp image
					$marge_right = 10;
					$marge_bottom = 10;
					$sx = imagesx($stamp);
					$sy = imagesy($stamp);
					 
					// Copy the stamp image onto our img using the margin offsets and the img 
					// width to calculate positioning of the stamp. 
					imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
					 
					// Output and free memory
					//header('Content-type: image/png');
					imagepng($im,"../assets/posting/".$img);
					imagedestroy($im);
				}
			}else{
				mkdir("../assets/posting");
				chmod("../assets/posting", 0777);
				$image->save("../assets/posting/".$img);
				
				if($watermark){
					// Load the stamp and the img to apply the watermark to
					$stamp = imagecreatefrompng('assets/images/watermark.png');
					
					$im = imagecreatefromjpeg("../assets/posting/".$img);
				
					// Set the margins for the stamp and get the height/width of the stamp image
					$marge_right = 10;
					$marge_bottom = 10;
					$sx = imagesx($stamp);
					$sy = imagesy($stamp);
					 
					// Copy the stamp image onto our img using the margin offsets and the img 
					// width to calculate positioning of the stamp. 
					imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
					 
					// Output and free memory
					//header('Content-type: image/png');
					imagepng($im,"../assets/posting/".$img);
					imagedestroy($im);
				}
			}
			
		}
		//simpan data
		$query;
		$simpan=mysql_query($query, $id_mysql)or die(mysql_error());

		if($simpan)
		{
		
		$sharetwit=$_POST["sharetwit"];

		if($sharetwit=="Y"){
						
			$url="http://www.beritabali.com/read/".str_replace("-","/", substr ($date, 0, 10))."/".$id."/".getPermalink($title);
			
			function getTinyUrl($url) {
				$link='http://tinyurl.com/api-create.php?url='.$url;
				$ch=curl_init();
				curl_setopt($ch,CURLOPT_URL,$link);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
				$hasil=curl_exec($ch);
				curl_close($ch);
				return $hasil;
			}
							
			require './tweetbot/tmhOAuth.php';
			require './tweetbot/tmhUtilities.php';
			$tmhOAuth = new tmhOAuth(array(
			  'consumer_key'    => '9dCfgQoyWbTeHw7ogXcmGw', // isi dengan consumer key
			  'consumer_secret' => 'hLkqjRywq7Rsh945GkVed5FhZDgSfQmCq2guyVoU0', // isi dengan consumer secret
			  'user_token'      => '88550770-ZlHjGxejwmFCXnAbtNsa4eat875px4JN9YVOVbwOC', // isi dengan user token
			  'user_secret'     => '78Niz4ih3SDNvbMnWE9G0LvOgi9lCJdhArBTgaMweM', // isi dengan user secret
			));
	
			$code = $tmhOAuth->request('POST', $tmhOAuth->url('1.1/statuses/update.json'), array(
			  'status' => "[NEWS] ".$regtwit." - ".substr(strip_tags($title),0,135)." ".getTinyUrl($url)." via @Beritabalicom"
			));
		}

		?>
			<span id="alert"></span>
			<script>
			var
			d = Alertify.dialog,
			l = Alertify.log,
			$ = Alertify.get,
			reset = function () {
				$("toggleCSS").href = "assets/css/alertify.default.css";
	
				d.labels.Ya     = "Ya";
				d.labels.Tidak = "Tidak";
				d.buttonReverse = false;
				d.buttonFocus   = "Ya";
				l.delay         = 5000;
			};
			
            d.confirm("Penyimpanan data berhasil, apakah anda ingin menambah data lagi?", function () {
				document.location = "index.php?module=posting&page=add";
			}, function () {
				document.location = "index.php?module=posting&page=list";
			});
            
			
			</script>
			<?php
			
		}else{
			echo '
				<div class="alert alert-danger">
					 <button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>
						Pesan Error:
					</h4> Penyimpanan data gagal,hubungi webmaster.
				</div>
				 ';
		}
	}
	else
	{
		echo	'
				<div class="alert alert-danger">
					 <button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>
						Pesan Error:
					</h4> '.$error.'
				</div>
				';
	}
?>
</p>
<?php			
}

else if($_POST[posting]=="update"){?>
<br />
<br />
<p>
<?php
	$date=$_POST["date"];
	$show_date=$_POST["show_date"];
	$category=$_POST["category"];
	$region=$_POST["region"];
	$title=str_replace("'","&#39;",$_POST['title']);
        $title=str_replace('"',"&#34;",$title);
	$subtitle=$_POST[subtitle];
	$short_content=$_POST[short_content];
	$content=str_replace("'","&#39;",$_POST['content']);
	$tags=$_POST[tags];
	$wartawan=$_POST[wartawan];
	
	$lokasfile=$_FILES['img']['tmp_name'];
	$namafile	= $_FILES["img"]["name"];
	$tipefile	= $_FILES["img"]["type"];
	$maxfile	 = 1000000*10;//1000000 byte =1 mb
	$sizefile	= $_FILES["img"]["size"];
	
	$source_image=$_POST[source_image];
	$watermark=$_POST[watermark];
	
	$hit=$_POST[hit];
	$status="Hide";
	
	$regex=mysql_fetch_array(mysql_query("SELECT title FROM region WHERE alias='$region'"));
	$regtwit=$regex["region"];
	
	$error = "";
	
	//check validasi
	if(!$date)
	{
		$error .= 'Kolom tanggal wajib diisi <br /> ';
	}
	
	if(!$title)
	{
		$error .= 'Kolom title wajib diisi <br /> ';
	}
		
	if(!$content)
	{
		$error .= 'Kolom content wajib diisi <br /> ';
	}
	
	if(!$status)
	{
		$error .= 'Kolom status wajib diisi <br /> ';
	}
		
	if(!$error)
	{
		if(!$lokasfile){
		$query="UPDATE posting SET 	date='$date',
									show_date='$show_date',
									id_category='$category',
									id_region='$region',
									title='$title',
									subtitle='$subtitle',
									short_content='$short_content',
									content='$content',
									source_image='$source_image',
                                                                        tags='$tags',
									wartawan='$wartawan',
									hit='$hit',
									status='$status',
									entry_by='$by',
									entry_ip='$ip'
								WHERE id='$_GET[kode]'
			";
		}else{
			//hapus foto yg lama
			$q3="select * from posting where id='$_GET[kode]' ";
			$h3=mysql_query($q3,$id_mysql);
			$b3=mysql_fetch_array($h3);
			
			if(file_exists("../assets/posting/$b3[img]")){
				unlink("../assets/posting/$b3[img]");
			}
			
			//memberi nama unik
			$ran = substr(1000000+rand(1,999999),-6);
			$filetype=substr($_FILES["img"]["name"],strrpos($_FILES["img"]["name"],".")+1);
			$direktorfile="../assets/posting/$idd$ran.$filetype";
			$img = clearJudul($title)."_$idd$ran.$filetype";
				
			//resize image
			include "includes/resize_image.php";
			$image = new SimpleImage();
			$image->load($lokasfile);
			//$image->scale(50);
			//$image->resizeToWidth(300);
			$image->resize(996,498);
			
			if(file_exists("../assets/posting")){
				$image->save("../assets/posting/".$img);
				
				if($watermark){
					// Load the stamp and the img to apply the watermark to
					$stamp = imagecreatefrompng('assets/images/watermark.png');
					
					$im = imagecreatefromjpeg("../assets/posting/".$img);
				
					// Set the margins for the stamp and get the height/width of the stamp image
					$marge_right = 10;
					$marge_bottom = 10;
					$sx = imagesx($stamp);
					$sy = imagesy($stamp);
					 
					// Copy the stamp image onto our img using the margin offsets and the img 
					// width to calculate positioning of the stamp. 
					imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
					 
					// Output and free memory
					//header('Content-type: image/png');
					imagepng($im,"../assets/posting/".$img);
					imagedestroy($im);
				}
			}else{
				mkdir("../assets/posting");
				chmod("../assets/posting", 0777);
				$image->save("../assets/posting/".$img);
				
				if($watermark){
					// Load the stamp and the img to apply the watermark to
					$stamp = imagecreatefrompng('assets/images/watermark.png');
					
					$im = imagecreatefromjpeg("../assets/posting/".$img);
				
					// Set the margins for the stamp and get the height/width of the stamp image
					$marge_right = 10;
					$marge_bottom = 10;
					$sx = imagesx($stamp);
					$sy = imagesy($stamp);
					 
					// Copy the stamp image onto our img using the margin offsets and the img 
					// width to calculate positioning of the stamp. 
					imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
					 
					// Output and free memory
					//header('Content-type: image/png');
					imagepng($im,"../assets/posting/".$img);
					imagedestroy($im);
				}
			}
			
			$query="UPDATE posting SET 	date='$date',
										show_date='$show_date',
										id_category='$category',
										id_region='$region',
										title='$title',
										subtitle='$subtitle',
										short_content='$short_content',
										content='$content',
										tags='$tags',
										img='$img',
										source_image='$source_image',
										wartawan='$wartawan',
										hit='$hit',
										status='$status',
										entry_by='$by',
										entry_ip='$ip'
								    WHERE id='$_GET[kode]'
			";
			
			
		}
		//simpan data
		$simpan=mysql_query($query, $id_mysql)or die(mysql_error());

		if($simpan)
		{
			$sharetwit=$_POST["sharetwit"];
	
			if($sharetwit=="Y"){
				
				$url="http://www.beritabali.com/read/".str_replace("-","/", substr ($date, 0, 10))."/".$_GET[kode]."/".getPermalink($title);
			
				function getTinyUrl($url) {
					$link='http://tinyurl.com/api-create.php?url='.$url;
					$ch=curl_init();
					curl_setopt($ch,CURLOPT_URL,$link);
					curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
					$hasil=curl_exec($ch);
					curl_close($ch);
					return $hasil;
				}
								
				require './tweetbot/tmhOAuth.php';
				require './tweetbot/tmhUtilities.php';
				$tmhOAuth = new tmhOAuth(array(
				  'consumer_key'    => '9dCfgQoyWbTeHw7ogXcmGw', // isi dengan consumer key
				  'consumer_secret' => 'hLkqjRywq7Rsh945GkVed5FhZDgSfQmCq2guyVoU0', // isi dengan consumer secret
				  'user_token'      => '88550770-ZlHjGxejwmFCXnAbtNsa4eat875px4JN9YVOVbwOC', // isi dengan user token
				  'user_secret'     => '78Niz4ih3SDNvbMnWE9G0LvOgi9lCJdhArBTgaMweM', // isi dengan user secret
				));
		
				$code = $tmhOAuth->request('POST', $tmhOAuth->url('1.1/statuses/update.json'), array(
				  'status' => "[NEWS] ".$regtwit." - ".substr(strip_tags($title),0,135)." ".getTinyUrl($url)." via @Beritabalicom"
				));
			}
			?>
			<span id="alert"></span>
			<script>
			var
			d = Alertify.dialog,
			l = Alertify.log,
			$ = Alertify.get,
			reset = function () {
				$("toggleCSS").href = "assets/css/alertify.default.css";
	
				d.labels.Ya     = "Ya";
				d.labels.Tidak = "Tidak";
				d.buttonReverse = false;
				d.buttonFocus   = "Ya";
				l.delay         = 5000;
			};
			
            d.confirm("Penyimpanan data berhasil, apakah anda ingin menambah data?", function () {
				document.location = "index.php?module=posting&page=add";
			}, function () {
				document.location = "index.php?module=posting&page=list";
			});
			
			
			</script>
			<?php
			
		}else{
			echo '
				<div class="alert alert-danger">
					 <button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>
						Pesan Error:
					</h4> Penyimpanan data gagal,hubungi webmaster.
				</div>
				 ';
		}
	}
	else
	{
		echo	'
				<div class="alert alert-danger">
					 <button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>
						Pesan Error:
					</h4> '.$error.'
				</div>
				';
	}
?>
</p>
<?php			
}

else if($_GET[module]=="posting" && $_GET[action]=="delete")
{
	
	//hapus foto yg lama
	$q3="select * from posting where id='$_GET[kode]' ";
	$h3=mysql_query($q3,$id_mysql);
	$b3=mysql_fetch_array($h3);
	
	if(file_exists("../../assets/posting/$b3[img]")){
		unlink("../../assets/posting/$b3[img]");
	}
	
	$query="delete from posting where id=$_GET[kode]";

	$execute=mysql_query($query,$id_mysql);
	
	if($execute){
		$pesannya="Hapus data berhasil, apakah anda ingin melanjutkan?";
	}else{
		$pesannya="Hapus data gagal, hubungi webmaster, apakah anda ingin melanjutkan?";
	}
	
	?>
	<span id="alert"></span>
	<script>
	var
	d = Alertify.dialog,
	l = Alertify.log,
	$ = Alertify.get,
	reset = function () {
		$("toggleCSS").href = "assets/css/alertify.default.css";

		d.labels.Lanjutkan     = "Lanjutkan";
		d.buttonReverse = false;
		d.buttonFocus   = "Lanjutkan";
		l.delay         = 5000;
	};
	
	d.alert("<?php echo $pesannya;?>", function () {
		document.location = "index.php?module=posting&page=list";
	}, function () {
		document.location = "index.php?module=posting&page=list";
	});
	
	</script>
	<?php
	

}
?>