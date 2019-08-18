<!-- start slider -->
<section class="slidepep" style="margin-top:118px;">
<style>
[data-slide="prev"]
{
    margin-right: 10px;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
}
</style>
<div class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000" id="carousel-index">
            <div class="carousel-inner">
                <?php
                if (isset($slider)){
                $islider = 0;
                foreach ($slider as $hslider){?>
                <div class="item<?php if($islider==0){echo" active";}?>">
                    <img src="<?php echo site_url();?>uploads/slider/<?=$hslider->image;?>" class="img-responsive" />
                </div>
                <?php
                $islider++;
                }
                }
                ?>     
            </div>
    </div>
    <script>
        $('.carousel').carousel({
              interval: 4000,
              pause: false
            })
    </script>
</section>
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
    <!-- <div class="container" style="margin-top:200px;">
        <div class="col-md-12" style="margin-top:10px;">
            <div align="center">
                <p>
                <h1 style="color:#ffffff;">Singapore, I'm Comming</h1>
                <h4 style="color:#ffffff;">
We have found the best deals in more than 11,663 accommodations - just enter
 </h4>
                <h4 style="color:#ffffff;">your date to see it!</h4>
                </p>
            </div>
        </div>
    </div> -->
    
    <div class="col-md-2"></div>
</section>

<div class="container" style="margin-top:60px;">
    
    <!-- main content !-->
    <div class="row-fluid" style="background-color:#FFFFFF;">
        <div class="container" style="font-size:12px;padding-top:0px;padding-bottom:30px;">
            <!-- <div align="center">
            <h3 style="margin-top:0px;">Our Patners</h3>
            <hr>
            </div> -->
            <div align="center">
                <?php
                if (isset($patner)){
                $ipatner = 0;
                foreach ($patner as $hpatner){?>
                <span><img src="<?php echo site_url();?>uploads/patner/<?=$hpatner->image;?>"/></span>
                <?php
                $ipatner++;
                }
                }
                ?>   
            </div>
        </div>
    </div>
    <!-- main content !-->
    
</div>