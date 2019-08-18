<style>
.listing-box h4{line-height:30px; color:#e55122}
.listing-box{background:#f2f4f4; padding:5px; float:left; width:100%; }
.poperty-details-iob {margin:5px 0; padding:8px 0; display:inline-block; border-top:#e5e5e5 1px solid;  border-bottom:#e5e5e5 1px solid; 
width:100%;}
.poperty-details-iob li{margin:0; padding:8px 15px; display:inline-block; font-family:'Roboto'; color:#333; border-right:#e5e5e5 1px solid; }
.poperty-details-iob li span{font-size:22px; color:#000;}
.listing-box p{font-size:12px; color:#838383;}
.list-of-ratings{margin:-40px 10px; padding:0; display:block; width:100%; float:left; position:relative;}
.list-of-ratings li{margin:0; padding:10px 15px 0px 0px; display:block;  width:100%; font-size:16px;}
.mr-iob-blr{margin-top:20px;}
.listing-box ul li a{color:#e55122;}
.cls-for-btn-listing{margin:0; padding:0; display:inline-block; text-align:center; width:100%; margin-top:130px;}
.cls-for-btn-listing li{margin:0; padding:0; display:inline-block; }
.cls-for-btn-listing li a{margin:0; padding:10px 15px; display:inline-block; background:#e55122 !important; border-radius:20px; color:#fff !important; }
.star-list-iob{margin:16px 0; padding:0; display:block; position:relative; float:right}
.star-list-iob li{margin:0; padding:0 3px; display:block; }
.rating-box-iob{background:#e55122; padding:8px; border-radius:5px; position:absolute; color:#fff; right:20px; margin-top:40px;} 
.btn-hover {
    /*width: 200px;*/
    /*font-size: 16px;
    font-weight: 600;*/
    color: #fff;
    cursor: pointer;
    /*margin: 20px;
    height: 55px;*/
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-1 {
    background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}
.btn-hover.color-2 {
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}
.btn-hover.color-3 {
    background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
    box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}
.btn-hover.color-4 {
    background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
    box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
}
.btn-hover.color-5 {
    background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}
.btn-hover.color-6 {
    background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
    box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
}
.btn-hover.color-7 {
    background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
    box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}
.btn-hover.color-8 {
    background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
    box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
}
.btn-hover.color-9 {
    background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
    box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
}
.btn-hover.color-10 {
        background-image: linear-gradient(to right, #ed6ea0, #ec8c69, #f7186a , #FBB03B);
    box-shadow: 0 4px 15px 0 rgba(236, 116, 149, 0.75);
}
.btn-hover.color-11 {
       background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}

/*css3 design scrollbar*/
::-webkit-scrollbar {
      width: 8px;
}
 
::-webkit-scrollbar-track {     
      background: #fff;    
}
 
::-webkit-scrollbar-thumb {
      background: #2A45DD;
      border-radius:10px;
}
.outer{
    padding: 2em 1em;
    box-shadow: 5px 5px 5px #d9d9d9;
}

.headerbar{
    background: #2A45DD !important;
    color: #ffffff !important;
    position: relative;
    margin-bottom: 1.5em;
    margin-right: -2.5em;
    margin-left: -2.5em;
    box-shadow: 5px 5px 5px #d9d9d9;
}
.headerbar:before{
    content: "";
    position: absolute;
    border-bottom: 1.5em solid #333;
    border-left: 1.5em solid transparent;
    left: 0;
    top: -1.5em;
    
}
.headerbar:after{
    content: "";
    position: absolute;
    border-top: 1.5em solid #333;
    border-right: 1.5em solid transparent;
    right: 0;
    bottom: -1.5em;
}

.headerbar:hover {
  transform:scale(1,1.1);
}

@media only screen and (max-width: 1000px) {
/* Force table to not be like tables anymore */
#no-more-tables table, 
#no-more-tables thead, 
#no-more-tables tbody, 
#no-more-tables th, 
#no-more-tables td, 
#no-more-tables tr { 
display: block; 
border-radius: 20px;
}

/* Hide table headers (but not display: none;, for accessibility) */
#no-more-tables thead tr { 
position: absolute;
top: -9999px;
left: -9999px;
}

#no-more-tables tr { border: 1px solid #ccc; }

#no-more-tables td { 
/* Behave  like a "row" */
border: none;
border-bottom: 1px solid #eee; 
position: relative;
padding-left: 50%; 
white-space: normal;
text-align:left;
}

#no-more-tables td:before { 
/* Now like a table header */
position: absolute;
/* Top/left values mimic padding */
top: 6px;
left: 6px;
width: 45%; 
padding-right: 10px; 
white-space: nowrap;
text-align:left;
font-weight: bold;
}

/*
Label the data
*/
#no-more-tables td:before { content: attr(data-title); }
}

/* centered columns styles */
.row-centered {
    text-align:center;
}

.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}

.item {
    background-color: #09F;
    border: 1px solid #333;
    width: 100%;
    height: 100%;
    padding: 20px;
}

.content {
    background-color: #FFF;
    padding: 10px;
    border: 1px solid #333;
}
</style>

 <section class="listing-page-builing">
      <div class="container">
         <div class="row">
            <div class="listing-box">
               <div class="col-md-3 mr-iob-blr">

                  
                  <div style="background: url(<?=site_url()."uploads/villa/".$result->foto;?>) 0 0 no-repeat; height:30vh; background-size:cover; 
                  background-position:center; border:#ccc 1px solid"></div>
                  
                  
                  <ul class="list-of-ratings">
                     <li><img src="images/logo.png" width="30%"></li>
                     <li>
                      <strong><a href="">Square Yards</a><br/> </strong>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                     </li>
                    </ul>
                    
                    <span class="rating-box-iob"><?=$result->rate;?></span>
                    
                    
                    
                </div>
               <div class="col-md-9">
                  <h4><strong><?=$result->nama;?></strong><!--  in Ideal Greens --><br/>
                     <span><?=$result->lokasi;?></span>
                  </h4>
                  <!-- <ul class="poperty-details-iob">
                     <li><span>87.12 L</span><br/>
                        4,250 / sq ft
                     </li>
                     <li><span>2050</span><br/>
                        Area in sq ft
                     </li>
                     <li><span>Under Construction</span><br/>
                        Construction Status
                     </li>
                  </ul>
                  <ul class="poperty-details-iob">
                     <li>Possession by Dec 2018</li>
                     <li>4 Bathrooms</li>
                     <li>1st of 19floor</li>
                  </ul> -->
                  <ul class="poperty-details-iob">
                     <li><i class="fa fa-map-marker"></i> <?=$result->alamat;?></li>
                     <li><i class="fa fa-envelope"></i> <?=$result->email;?></li>
                     <li><i class="fa fa-phone-square"></i> <?=$result->telpon;?></li>
                  </ul>
                  <p>
                    <h4>Fasilitas</h4>
                    <?=$result->fasilitas;?>
                  </p>
                  <p>
                    <h4>Deskripsi</h4>
                    <?=$result->deskripsi;?>
                  </p>
               </div>
               <div class="col-md-4"></div>
               <div class="col-md-8">
                  <ul class="cls-for-btn-listing">
                     <li>
                        <a href="<?=base_url();?>villa_listing/index" class="margin-bottom-5"><i class="fa fa-reply"></i> Kembali Ke Daftar Villa</a>
                        <a href="" class="margin-bottom-5><i class="fa fa-map"></i> Dapatkan Petunjuk Arah</a>
                     </li>
                            
                  </ul>
                        
                 
               </div>
            </div>
         </div>
      </div>
   </section>