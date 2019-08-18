<!doctype html>
<html>

<head>
    <title>Content Management System</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>public/images/golkar.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/nestle.css">
    <style>
        .table tbody tr td {
            vertical-align: middle;
        }
    </style>
    <script>
        var siteRoot = '<?php echo base_url() ?>';
    </script>
    <script src="<?php echo base_url(); ?>public/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>public/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>public/ckfinder/ckfinder.js"></script>
    <script src="<?php echo base_url(); ?>public/js/alertify.js"></script>
    <script src="<?php echo base_url(); ?>public/js/alertConfirm.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.nestable.js"></script>
    <!-- <script src="<?php //echo base_url(); ?>public/js/navmenu.js"></script> -->
    <?php
        $myaccount = $this->myglobal->getLoggedInUser();
    ?>
        <style type="text/css">
            nav,
            .navbar-default .navbar-brand,
            .navbar-default,
            .navbar-default .navbar-nav > li > a {
                color: white;
                background-color: #2780e3;
                border-color: #2780e3;
                font-size: 10pt !important;
            }
        </style>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
            <!-- Fixed navbar -->
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="<?=base_url();?>backoffice" class="navbar-brand">Dashboard</a>
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar-main">
                        <ul class="nav navbar-nav">
                            <li><a tabindex="-1" href="<?=base_url();?>manage/driver">Driver</a></li>
                            <li><a tabindex="-1" href="<?=base_url();?>manage/hotel">Hotel</a></li>
                            <li><a tabindex="-1" href="<?=base_url();?>manage/villa">Villa</a></li>
                            <li><a tabindex="-1" href="<?=base_url();?>manage/restoran">Restauran</a></li>
                            <li><a tabindex="-1" href="<?=base_url();?>manage/vendor">Vendor</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="<?=base_url();?>#" id="directory">Laporan <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="directory">
                                    <li><a tabindex="-1" href="<?=base_url();?>manage/laporan_transaksi_driver">Laporan Transaksi Driver</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="<?=base_url();?>manage/laporan_transaksi_hotel">Laporan Transaksi Hotel</a></li>
                                    <li><a tabindex="-1" href="<?=base_url();?>manage/laporan_transaksi_restoran">Laporan Transaksi Restauran</a></li>
                                    <li><a tabindex="-1" href="<?=base_url();?>manage/laporan_transaksi_villa">Laporan Transaksi Villa </a></li>
                                    <li><a tabindex="-1" href="<?=base_url();?>manage/laporan_transaksi_vendor">Laporan Transaksi Vendor</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li style="background:#08e64c;"><a href="<?=base_url();?>technical_support">Tehcnical Support</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="<?=base_url();?>#" id="directory">Account <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="directory">
                                    <li><a tabindex="-1" href="<?php echo base_url().'manage_account/editaccount/'.$myaccount->username ?>">Edit Account</a></li>
                                    <li><a tabindex="-1" href="<?=base_url();?>manage_account">Manage User</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="<?=base_url();?>backoffice/logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div style="font-weight:bold;color:#000000;height:10px;margin-top: 15px;">
            </div>
        </div>
    </div>
    <?php
    // This is the main content partial
    echo $this->template->content;
    ?>
    <hr>
    <?php echo $this->template->javascript; ?>
</body>

</html>