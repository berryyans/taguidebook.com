<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Taguidebook.com - Your Travel Guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
    @font-face {
        font-family: 'Glyphicons Halflings';
        src: url('<?php echo site_url();?>public/frontend/assets/font/glyphicons-halflings-regular.eot');
        src: url('<?php echo site_url();?>public/frontend/assets/font/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), 
             url('<?php echo site_url();?>public/frontend/assets/font/glyphicons-halflings-regular.woff') format('woff'), 
             url('<?php echo site_url();?>public/frontend/assets/font/glyphicons-halflings-regular.ttf') format('truetype'), 
             url('<?php echo site_url();?>public/frontend/assets/font/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') 
             format('svg');
    }
    
    a.list-group-item {
        height:auto;
        min-height:200px;
    }
    a.list-group-item.active small {
        color:#fff;
    }
    .stars {
        margin:20px auto 1px;
        color:#FFCC00;    
    }
    
    .img-caption {padding:15px; position:absolute; bottom:0; left:0; right:0; display:block; width:100%; margin:0 auto; z-index:2;
        background: rgba(0,0,0,0.5);
        background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 90%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,0,0,0)), color-stop(90%, rgba(0,0,0,1)));
        background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 90%);
        background: -o-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 90%);
        background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 90%);color:#ffffff;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#333333', endColorstr='#111111', GradientType=1 );
    }
    
    .atas_slider{
        width:100%;
        height:560px;
        padding-top:0px;
        /*background:blue;*/
        /*background:rgba(0,0,0,0.7);*/
        position:absolute;
        margin-top:0px;
        top:0;
        left: 0;
        bottom: 0;
        right: 0;
    }
       
    </style>
    <link rel="stylesheet" href="<?php echo site_url();?>public/frontend/assets/css/bootstrap.css" media="screen">
    <script src="<?php echo site_url();?>public/frontend/assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo site_url();?>public/frontend/assets/js/bootstrap.js"></script>
    <link href="<?php echo site_url();?>public/frontend/assets/css/loading.css" rel="stylesheet">
    <script src="<?php echo site_url();?>public/frontend/assets/js/script.js"></script>
  </head>
  <body>
    <div class="preloader">
        <div class="loader"><img src="<?php echo site_url();?>uploads/settings/<?=$settings->image_preloader;?>" alt=""></div>
    </div>
    <?php
    echo $this->template->header;
    echo $this->template->content;
    ?>
    </div>
    <?php
    echo $this->template->footer;
    ?>
</body>
</html>