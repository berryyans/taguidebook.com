    <!-- start slider -->
    <section class="atas_slider" style="margin-top:50px;">
    <div class="row-fluid" style="background-color:#FFFFFF;padding:10px;">
        <div class="container">
            <div id="navbar" class="">
                <ul class="nav navbar-nav">
                   <style type="text/css">

                    .dropdowns nav_dropdowns, .dropdowns ul, .dropdowns li, .dropdowns a  {margin: 0; padding: 0;}

                    .dropdowns a {text-decoration: none;}

                    .toggleMenu {
                        display:  none;
                    }
                    .nav_dropdowns {
                        list-style: none;
                         *zoom: 1;
                    }
                    .nav_dropdowns:before,
                    .nav_dropdowns:after {
                        content: " "; 
                        display: table; 
                    }
                    .nav_dropdowns:after {
                        clear: both;
                    }
                    .nav_dropdowns ul {
                        list-style: none;
                    }
                    .nav_dropdowns a {
                        padding: 15px 15px;
                    }

                    .nav_dropdowns a:hover {
                        background: #003580;
                        color: #ffffff;
                    }
                    .nav_dropdowns li {
                        position: relative;
                    }
                    .nav_dropdowns > li {
                        float: left;
                    }
                    .nav_dropdowns > li > .parent {
                        background-image: url("<?=site_url();?>public/frontend/assets/img/downArrow.png");
                        background-repeat: no-repeat;
                        background-position: 98% 50%;
                    }
                    .nav_dropdowns > li > a {
                        display: block;
                    }
                    .nav_dropdowns li  ul {
                        position: absolute;
                        left: -9999px;
                    }
                    .nav_dropdowns > li.hover > ul {
                        left: 0;
                    }
                    .nav_dropdowns li li.hover ul {
                        left: 100%;
                        top: 0;
                    }
                    .nav_dropdowns li li a {
                        display: block;
                        position: relative;
                        z-index:100;
                    }
                    .nav_dropdowns li li li a {
                        z-index:200;
                    }

                    /* fonts */
                    .dropdowns {font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }

                    /* colors */

                    /* togle menu button for narrow screens */
                    .toggleMenu {
                        background: none;
                        color: #ffffff;
                    }

                    /* general navigation background color */
                    .nav_dropdowns {
                         background:none;
                    }

                    /* general navigation link font color */
                    .nav_dropdowns a {
                        color:#000000;
                        font-weight: 700;
                        font-size: 10.5pt;
                    }

                    /* first level items borders */
                    .nav_dropdowns > li {
                        /*border-top: 1px solid #104336;*/
                    }

                    /* second level navigation colors */
                    .nav_dropdowns li li a {
                        background: #2196f3;
                        border-top: 1px solid #2196F3;
                    }

                    .nav_dropdowns li li li a {
                        background: #2196f3;
                        border-top: 1px solid #2196F3;
                    }

                    /* layout */
                    .dropdowns {
                        /* width: 100%; */
                        /* max-width: 900px; */
                        margin: 8px auto;
                    }

                    a.toggleMenu {
                        padding: 10px 15px;
                    }

                    .nav_dropdowns ul {
                        width: 15em;
                    }

                    .nav_dropdowns > li > .parent {
                        
                    }

                    @media screen and (max-width: 768px) {
                        .active {
                            display: block;
                        }
                        .nav_dropdowns > li {
                            float: none;
                        }
                        .nav_dropdowns > li > .parent {
                            background-position: 95% 50%;
                        }
                        .nav_dropdowns li li .parent {
                            background-image: url("<?=site_url();?>public/frontend/assets/img/downArrow.png");
                            background-repeat: no-repeat;
                            background-position: 95% 50%;
                        }
                        .nav_dropdowns ul {
                            display: block;
                            width: 100%;
                        }
                       .nav_dropdowns > li.hover > ul , .nav_dropdowns li li.hover ul {
                            position: static;
                        }

                    }
                    </style>

                    <div class="dropdowns align-to-right">
                        <!-- <a class="toggleMenu pull-right" href="#">Menu</a> !-->
                        <div class="toggleMenu">
                            <label for="toggleMenu" id="logo-mobile">
                                <table width="100%" border="0" align="center">
                                  <tr>
                                    <td><img src="<?php echo site_url();?>public/frontend/assets/img/logo.png" class="img-responsive" style="width:300px;height:50px;" /></td>
                                    <td>&nbsp;</td>
                                    <td><href="#"><i class="fa fa-bars" style="font-size:40px;"></i></a></td>
                                  </tr>
                                </table>
                            </label>
                        </div>
                        <?=menunavbar();?>        
                        </div>

                    </div>

                    <script src="<?php echo site_url();?>public/frontend/assets/js/dropdowns.js"></script>

                    <script>
                    $(document).ready(function (){
                        $(".dropdowns").dropdowns();
                    })
                    </script>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container" style="margin-top:130px;min-height: 500px;">
    
    <!-- main content !-->
    <div class="row-fluid" style="background-color:#FFFFFF;">
        <div class="container" style="font-size:12px;padding-top:0px;padding-bottom:30px;">
           <h3><?=$menumanager_detail->menu_title;?></h3>
           <hr>
           <?=$menumanager_detail->menu_konten;?>
        </div>
    </div>
    <!-- main content !-->
    
</div>