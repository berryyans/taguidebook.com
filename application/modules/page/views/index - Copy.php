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
                <div class="item active">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/slider/1.jpg" class="img-responsive" />
                </div>
                <div class="item">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/slider/2.jpg" class="img-responsive" />
                </div>
                <div class="item">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/slider/3.jpg" class="img-responsive" />
                </div>
                <div class="item">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/slider/4.jpg" class="img-responsive" />
                </div>      
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
                    <li><a href="#" style="color:#000000;">Embassies & Tourist Offices</a></li>
                    <li><a href="#" style="color:#000000;">Beyond Singapore</a></li>
                    <li><a href="#" style="color:#000000;">Getting Around</a></li>
                    <li><a href="#" style="color:#000000;">Places of Interest</a></li>
                    <li><a href="#" style="color:#000000;">F&B</a></li>
                    <li><a href="#" style="color:#000000;">Shopping</a></li>
                    <li><a href="#" style="color:#000000;">Public Holidays</a></li>
                    <li><a href="#" style="color:#000000;">Deal</a></li>
                    <li><a href="#" style="color:#000000;">Tourist Guide</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:70px;">
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
    </div>  
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-12" style="background-color:#FF9900;padding-top:20px;">
                <!-- <link href="#asset/css/datepicker.css" rel="stylesheet">
                <script src="#asset/js/bootstrap-datepicker.js"></script> -->
                
                <form class="form-horizontal" action="#hotel-find/" method="POST">
                    <fieldset>

                    <!-- Prepended text-->
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                          <input id="location" name="location" value="" class="form-control" placeholder="e.g. City, Region" type="text" required>
                        </div>
                        
                      </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                          <input id="dp1" name="dp1" value="" class="form-control" placeholder="Check In" type="text" required>
                        </div>
                        
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                          <input id="dp2" name="dp2" value="" class="form-control" placeholder="Check Out" type="text" required>
                        </div>
                        
                      </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <div class="col-md-6">
                            
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <select id="adult" name="adult" class="form-control">
                                <option value="1">1 Adult</option>
                                <option value="2">2 Adults</option>
                              </select  >
                              
                            </div>
                            
                          </div>
                        
                        <div class="col-md-6">
                            
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <select id="children" name="children" class="form-control">
                                <option value="1">1 Children</option>
                                <option value="2">2 Childrens</option>
                              </select  >
                            </div>
                            
                          </div>
                      
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                      <div class="col-md-12">
                        <button id="carihotel" name="carihotel" class="btn btn-lg btn-primary col-md-12">Find Destination</button>
                      </div>
                    </div>

                    </fieldset>
                </form>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
    
    <div class="col-md-2"></div>
</section>


    <div class="container" style="margin-top:60px;">
        
        
        <!-- main content !-->
        <div class="col-sm-12">
        
            <div align="center">
            <h1 style="margin-top:0px;">Best Destinations</h1>
            Discover tours, attractions and activities for your next adventure
            <hr>
            </div>
            <div class="row">
                <div class="col-sm-4" style="margin-top:0px;padding:0px;">
                  <a href="#">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/destination/1.jpg" width="380" height="245"  />
                  </a>
                  <div class="img-caption">
                    <h3>Universal Studio</h3>
                    <!-- <span style="font-weight:bold">7.900 Hotel</span> -->
                  </div>
                </div>
                <div class="col-sm-4" style="margin-top:0px;padding:0px;">
                  <a href="#">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/destination/2.jpg" width="380" height="245"  />
                  </a>
                  <div class="img-caption">
                    <h3>Marina Bay Sands</h3>
                    <!-- <span style="font-weight:bold">7.900 Hotel</span> -->
                  </div>
                </div>
                <div class="col-sm-4" style="margin-top:0px;padding:0px;">
                  <a href="#">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/destination/3.jpg" width="380" height="245"  />
                  </a>
                  <div class="img-caption">
                    <h3>Sentosa-Island</h3>
                    <!-- <span style="font-weight:bold">7.900 Hotel</span> -->
                  </div>
                </div>
                <div class="col-sm-4" style="margin-top:0px;padding:0px;">
                  <a href="#">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/region/surabaya.jpg" width="380" height="245"  />
                  </a>
                  <div class="img-caption">
                    <h3>Surabaya</h3>
                    <!-- <span style="font-weight:bold">7.900 Hotel</span> -->
                  </div>
                </div>
                <div class="col-sm-4" style="margin-top:0px;padding:0px;">
                  <a href="#">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/region/bali.jpg" width="380" height="245"  />
                  </a>
                  <div class="img-caption">
                    <h3>Bali</h3>
                    <!-- <span style="font-weight:bold">7.900 Hotel</span> -->
                  </div>
                </div>
                <div class="col-sm-4" style="margin-top:0px;padding:0px;">
                  <a href="#">
                    <img src="<?php echo site_url();?>public/frontend/assets/img/region/jogja.jpg" width="380" height="245" />
                  </a>
                  <div class="img-caption">
                    <h3>Jogjakarta</h3>
                    <!-- <span style="font-weight:bold">7.900 Hotel</span> -->
                  </div>
                </div>
            </div>
            <hr>
            <div class="list-group">
                
                <a href="#" class="list-group-item">
                        <div class="media col-md-2" style="padding:0px;">
                            <figure class="pull-left"  style="padding:0px;">
                                <img class="img-responsive"  src="<?php echo site_url();?>public/frontend/assets/img/hotel/hotel (1).jpg" alt="placehold.it/350x250"  style="padding:0px;width:100%">
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <h4 class="list-group-item-heading"> List group heading </h4>
                            <div class="stars" style="padding-top:0px;">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p class="list-group-item-text"> 
                            Jalan Legian No. 117 Badung - Bali 80361, Indonesia, Badung, Indonesia, 80361
                            </p>
                            <p><h2>IDR 1.500.000</h2></p>
                        </div>
                        <div class="col-md-3 text-center" style="margin-top:0px;">
                            
                            <p> Excellent 4.1 <small> / </small> 5 </p>
                            <h2> 13540 <small> review </small></h2>
                            <button type="button" class="btn btn-primary btn-md btn-block">More</button>
                            
                        </div>
                  </a>
                  <a href="#" class="list-group-item">
                        <div class="media col-md-2" style="padding:0px;">
                            <figure class="pull-left"  style="padding:0px;">
                                <img class="img-responsive"  src="<?php echo site_url();?>public/frontend/assets/img/hotel/hotel (2).jpg" alt="placehold.it/350x250"  style="padding:0px;width:100%">
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <h4 class="list-group-item-heading"> List group heading </h4>
                            <div class="stars" style="padding-top:0px;">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p class="list-group-item-text"> 
                            Sunset Road 88 A (Next to Krisna Oleh Oleh) , Badung, Indonesia, 80361                      
                            </p>
                            <p><h2>IDR 1.500.000</h2></p>
                        </div>
                        <div class="col-md-3 text-center" style="margin-top:0px;">
                            
                            <p> Excellent 4.1 <small> / </small> 5 </p>
                            <h2> 13540 <small> review </small></h2>
                            <button type="button" class="btn btn-primary btn-md btn-block">More</button>
                            
                        </div>
                  </a>
                  <a href="#" class="list-group-item">
                        <div class="media col-md-2" style="padding:0px;">
                            <figure class="pull-left"  style="padding:0px;">
                                <img class="img-responsive"  src="<?php echo site_url();?>public/frontend/assets/img/hotel/hotel (3).jpg" alt="placehold.it/350x250"  style="padding:0px;width:100%">
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <h4 class="list-group-item-heading"> List group heading </h4>
                            <div class="stars" style="padding-top:0px;">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p class="list-group-item-text"> 
                            Jl. Werkudara Legian Badung Bali, Badung, Indonesia, 80361
                            </p>
                            <p><h2>IDR 1.500.000</h2></p>
                        </div>
                        <div class="col-md-3 text-center" style="margin-top:0px;">
                            
                            <p> Excellent 4.1 <small> / </small> 5 </p>
                            <h2> 13540 <small> review </small></h2>
                            <button type="button" class="btn btn-primary btn-md btn-block">More</button>
                            
                        </div>
                  </a>
                  
                   <a href="#" class="list-group-item">
                        <div class="media col-md-2" style="padding:0px;">
                            <figure class="pull-left"  style="padding:0px;">
                                <img class="img-responsive"  src="<?php echo site_url();?>public/frontend/assets/img/hotel/hotel (4).jpg" alt="placehold.it/350x250"  style="padding:0px;width:100%">
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <h4 class="list-group-item-heading"> List group heading </h4>
                            <div class="stars" style="padding-top:0px;">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p class="list-group-item-text"> 
                            Sunset Road 88 A (Next to Krisna Oleh Oleh) , Badung, Indonesia, 80361                      
                            </p>
                            <p><h2>IDR 1.500.000</h2></p>
                        </div>
                        <div class="col-md-3 text-center" style="margin-top:0px;">
                            
                            <p> Excellent 4.1 <small> / </small> 5 </p>
                            <h2> 13540 <small> review </small></h2>
                            <button type="button" class="btn btn-primary btn-md btn-block">More</button>
                            
                        </div>
                  </a>
                  <a href="#" class="list-group-item">
                        <div class="media col-md-2" style="padding:0px;">
                            <figure class="pull-left"  style="padding:0px;">
                                <img class="img-responsive"  src="<?php echo site_url();?>public/frontend/assets/img/hotel/hotel (5).jpg" alt="placehold.it/350x250"  style="padding:0px;width:100%">
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <h4 class="list-group-item-heading"> List group heading </h4>
                            <div class="stars" style="padding-top:0px;">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p class="list-group-item-text"> 
                            Jl. Werkudara Legian Badung Bali, Badung, Indonesia, 80361
                            </p>
                            <p><h2>IDR 1.500.000</h2></p>
                        </div>
                        <div class="col-md-3 text-center" style="margin-top:0px;">
                            
                            <p> Excellent 4.1 <small> / </small> 5 </p>
                            <h2> 13540 <small> review </small></h2>
                            <button type="button" class="btn btn-primary btn-md btn-block">More</button>
                            
                        </div>
                  </a>
          
            </div>  
        
        </div>
        <!-- main content !-->
        
    </div>