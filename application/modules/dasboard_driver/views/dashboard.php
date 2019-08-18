<style type="text/css">
.bg-animate {
    width: 100wh;
    height: 100vh;
    color: #fff;
    background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
    background-size: 400% 400%;
    -webkit-animation: Gradient 15s ease infinite;
    -moz-animation: Gradient 15s ease infinite;
    animation: Gradient 15s ease infinite;
}

@-webkit-keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@-moz-keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

</style>
<div class="row bg">
<div class="container margin-top-30">
    <div class="row">
      <div class="col-sm-3 margin-bottom-10 text-center">
        <a href="<?=site_url();?>hotel_listing" class="btn btn-hover color-1 btn-hover color-1 btn-hover color-1 btn-sm padding-50 text-center" style="min-height: 100px;text-align: center;padding:50px;">
        <img src="<?=site_url();?>assets/images/hotel_icon.png" />
        <br><span style="font-size:15pt;font-weight: bold;color:#ffffff">Hotel</span>
        </a>
      </div>
      <div class="col-sm-3 margin-bottom-10 text-center">
        <a href="<?=site_url();?>villa_listing" class="btn btn-hover color-2 btn-hover color-2 btn-hover color-2 btn-sm padding-50 text-center" style="min-height: 100px;text-align: center;padding:50px;">
        <img src="<?=site_url();?>assets/images/villa_icon.png" />
        <br><span style="font-size:15pt;font-weight: bold;color:#ffffff">Villa</span>
        </a>
      </div>
      <div class="col-sm-3 margin-bottom-10 text-center">
        <a href="<?=site_url();?>restoran_listing" class="btn btn-hover color-3 btn-hover color-3 btn-hover color-3 btn-sm padding-50 text-center" style="min-height: 100px;text-align: center;padding:50px;">
        <img src="<?=site_url();?>assets/images/restoran_icon.png" />
        <br><span style="font-size:15pt;font-weight: bold;color:#ffffff">Restoran</span>
        </a>
      </div>
      <div class="col-sm-3 margin-bottom-10 text-center">
        <a href="<?=site_url();?>vendor_listing" class="btn btn-hover color-4 btn-hover color-4 btn-hover color-4 btn-sm padding-50 text-center" style="min-height: 100px;text-align: center;padding:50px;">
        <img src="<?=site_url();?>assets/images/vendor_icon.png" />
        <br><span style="font-size:15pt;font-weight: bold;color:#ffffff">Vendor</span>
        </a>
      </div>
    </div>
</div>
</div>