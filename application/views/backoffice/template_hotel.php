<?php
$myaccount = $this->myglobal->getLoggedInHotel();
$nama_controller=$this->router->fetch_class();
$nama_method=$this->router->fetch_method();
?>
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    if($nama_controller=="dasboard_hotel" || 
       $nama_controller=="technical_support" ||
       $nama_controller=="manage_account" ||
       $nama_method=="laporan_transaksi_driver" || 
       $nama_method=="laporan_transaksi_hotel" || 
       $nama_method=="laporan_transaksi_restoran" || 
       $nama_method=="laporan_transaksi_villa" || 
       $nama_method=="laporan_transaksi_vendor"       
      ){?>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/css/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/css/mdb/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/css/mdb/mdb.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/css/mdb/style.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/css/plugins/animate.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/css/jquery_plugins/chosen/chosen.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css" />
    <script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/build/js/global-libs.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/mdb/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/mdb/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/bootstrap/dropdown.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/jquery-plugins/bootstrap-growl.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/jquery-plugins/jquery.print-this.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/common/common.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/js/common/lazyload-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/datagrid/gcrud.datagrid.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/themes/mdb/js/datagrid/list.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery_plugins/jquery.chosen.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery_plugins/config/jquery.chosen.config.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery_plugins/jquery.fancybox-1.3.4.js"></script>
    <script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js"></script>
    <?php
    }
    ?>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css" />
</head>

<body>
    <!--Main Navigation-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="">
            <div class="container">
                <a href="<?=base_url();?>dasboard_hotel" class="navbar-brand">Dashboard</a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation" style="">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent-7" style="">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Hotel Info
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="directory">
                                <a class="dropdown-item" href="<?=base_url();?>hotel/bank">Bank</a>
                                <a class="dropdown-item" href="<?=base_url();?>hotel/contact">Contact</a>
                                <a class="dropdown-item" href="<?=base_url();?>hotel/social_media">Social Media</a>
                                <a class="dropdown-item" href="<?=base_url();?>hotel/testimonial">Testimonial</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Room & Facility
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="directory">
                                <a class="dropdown-item" href="<?=base_url();?>hotel/room">Room</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>hotel/facility">Facility</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Extras
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="directory">                                
                                <a class="dropdown-item" href="<?=base_url();?>hotel/faq">FAQ</a>
                                <a class="dropdown-item" href="<?php echo base_url()?>hotel/picture">Hotel Picture</a>
                                <a class="dropdown-item" href="<?php echo base_url()?>hotel/video">Hotel Video</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Transaksi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="directory">                                
                                <a class="dropdown-item" href="<?=base_url();?>hotel/transaksi">Histori Transaksi</a>
                                <a class="dropdown-item" href="<?php echo base_url()?>hotel/kredit">Kredit Hotel</a>
                                <a class="dropdown-item" href="<?php echo base_url()?>hotel/collect">Histori Collect</a>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" style="background:#08e64c;"><a class="nav-link" href="<?=base_url();?>technical_support">Tehcnical Support</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="directory">
                                <a class="dropdown-item" href="<?php echo base_url().'manage_account/editaccount/'.$myaccount->username ?>">Edit Account</a>
                                <a class="dropdown-item" href="<?=base_url();?>driver/card">My Card</a>
                                <a class="dropdown-item" href="<?=base_url();?>backoffice/logout">Logout</a>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Intro Section -->
        <div style="background-image: url(<?php echo base_url(); ?>assets/mdb/images/76.jpg);">
            <div class="container-fluid mt-3" style="min-height:1000px">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="intro-info-content">
                            <div class="text-center mb-1 pt-5"></div>
                            <?php
                            // This is the main content partial
                            echo $this->template->content;
                            ?>
                            <hr>
                            <?php echo $this->template->javascript; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>