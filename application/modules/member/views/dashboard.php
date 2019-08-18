<style>
.bookbox {
    background-color:#ffffff;
    padding:10px;
    margin-bottom:10px;
    -webkit-box-shadow: 0 8px 6px -6px  #999;
       -moz-box-shadow: 0 8px 6px -6px  #999;
            box-shadow: 0 8px 6px -6px #999;
}

.booktitle {
    font-weight:bold;
	padding:5px 0 5px 0;
}

.bookprice {
	border-top:1px solid #dadada;
	padding-top:5px;
}

.pricetext {
	font-weight:bold;
	font-size:1.4em;
}
</style>
<div class="container" style="margin-top:100px;">
<div class="row">
    
<?php
if (isset($documents))
{
$index = 1;
if(isset($page)&&$page!=0)
$index = $index+$page;
foreach ($documents as $baris1){
?>
<div class="col-md-3 column bookbox">
    <?php
    if($baris1->image==""){// || !file_exists(site_url().'uploads/documents/'.$baris1->image) ){
      echo '<img src="'.base_url().'uploads/documents/null.png" alt="'.$baris1->title.'" class="img-responsive">'; 
    }else{
      echo '<img src="'.site_url().'uploads/documents/'.$baris1->image.'" alt="'.$baris1->title.'" class="img-responsive" style="height:300px;">';
    }
    ?>
    <div class="booktitle">book 2</div>
    <div class="bookprice"><div class="pull-right"><a href="<?=site_url().'uploads/documents/'.$baris1->file;?>" style="color:#ffffff" target="_blank" class="btn btn-info btn-sm" role="button">DOWNLOAD</a></div><div class="pricetext">FREE</div></div>
</div>
<?php
$index++;
}
    
}
?>
<div class="row">
<?php echo $this->pagination->create_links(); ?>
</div>
</div>
</div>