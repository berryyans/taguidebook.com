<style type="text/css">
	body{
    background: #eee;
}
.page-container{
margin-top:40px;    
}
figure.user-card {
    background: #ffffff;
    padding: 20px;
    border-top: 3px solid #f2f2f2;
    border: 1px solid #e1e5f1;
    text-align: center;
}

figure.user-card.red {
    border-top: 3px solid #fc6d4c;
}

figure.user-card.green {
    border-top: 3px solid #3ecfac;
}

figure.user-card.blue {
    border-top: 3px solid #5a99ee;
}

figure.user-card.yellow {
    border-top: 3px solid #ffc139;
}

figure.user-card.orange {
    border-top: 3px solid #ff5000;
}

figure.user-card.teal {
    border-top: 3px solid #47BCC7;
}

figure.user-card.pink {
    border-top: 3px solid #ff9fd0;
}

figure.user-card.brown {
    border-top: 3px solid #79574b;
}

figure.user-card.purple {
    border-top: 3px solid #904e95;
}

figure.user-card.fb {
    border-top: 3px solid #3B5998;
}

figure.user-card.gp {
    border-top: 3px solid #E02F2F;
}

figure.user-card .profile {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    max-width: 72px;
    margin-bottom: 20px;
}

figure.user-card h5 {
    margin: 0 0 5px 0;
}

figure.user-card h6 {
    margin: 0 0 15px 0;
    color: #8796af;
    font-size: 14px;
}

figure.user-card p {
    margin: 0;
    padding: 0 0 15px 0;
    color: #8796af;
    line-height: 150%;
    font-size: .85rem;
}

figure.user-card ul.contacts {
    margin: 0;
    padding: 0 0 15px 0;
    line-height: 150%;
    font-size: .85rem;
}

figure.user-card ul.contacts li {
    padding: .2rem 0;
}

figure.user-card ul.contacts li a {
    color: #5a99ee;
}

figure.user-card ul.contacts li a i {
    min-width: 36px;
    float: left;
    font-size: 1rem;
}

figure.user-card ul.contacts li:last-child a {
    color: #ff5000;
}

ul li {
    list-style-type: none;
}
</style>
<div class="container page-container">
	<div class="row gutters">
	    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
	    	<figure class="user-card green">
				<figcaption>
					<img src="<?=site_url();?>uploads/hotel/<?=$data->foto;?>" alt="<?=$data->nama;?>" class="profile">
					<h5><?=$data->nama;?></h5>
					<img src="<?=site_url();?>uploads/hotel/<?=$data->username.'.png';?>" class="img-responsive text-center">
					<h6>@movies</h6>
					<p>On the 28th of October 2016 we completed a 3-part transaction with the contractor.</p>
					<ul class="contacts">
						<li>
							<a href="#">
								user@bootdey.com
							</a>
						</li>
						<li>
							<a href="#">
								www.bootdey.com
							</a>
						</li>
					</ul>
					<div class="clearfix">
						<span class="badge badge-pill badge-info">#HTML5</span>
						<span class="badge badge-pill badge-success">#CSS3</span>
						<span class="badge badge-pill badge-orange">#Angular JS</span>
					</div>
				</figcaption>
			</figure>
		</div>
	</div>
</div>