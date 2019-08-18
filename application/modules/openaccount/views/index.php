<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | CitizenBali.com</title>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="<?=base_url(); ?>social_login/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url(); ?>social_login/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url(); ?>social_login/css/login.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/5D193407-ACA0-7E40-BC47-244412AA56EB/main.js" charset="UTF-8"></script>
    <script src="<?=base_url(); ?>social_login/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url(); ?>social_login/js/bootstrap.min.js"></script>
    <style type="text/css">
        .colorgraph {
            height: 5px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
        /* CSS Loading Page */
        
        #page-loader {
            position: fixed!important;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999;
            background: #fff url('http://2.bp.blogspot.com/-kIrasdB82T0/U6eA_bnDmlI/AAAAAAAADzw/UUio00Tw4gM/s1600/Loader2.gif') no-repeat 50% 50%;
            color: #fcfcfc;
            padding: 1em 1.2em;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="login-form">

            <h1 class="text-center">Register</h1>
            <hr class="colorgraph">
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
			<div id="errors">
			    <?php echo $this->session->flashdata('error'); ?>
			</div>
			<form action="<?=base_url();?>openaccount/send" method="POST" class="plainForm">
                <br>
                
                <div class="form-group">
                    <input name="firstName" type="text" class="form-control" placeholder="First Name" value="<?php echo $firstName; ?>"/><?php echo form_error('firstName'); ?>
                </div>
                <div class="form-group">
                    <input name="lastName" type="text" class="form-control" placeholder="Last Name" value="<?php echo $lastName; ?>"/><?php echo form_error('lastName'); ?>
                </div>
                <div class="form-group">
                    <input autocomplete="off" name="email" type="text" class="form-control" placeholder="Email address" value="<?php echo $email; ?>"/><?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                    <input autocomplete="off" name="password" value="" type="password" class="form-control">
                </div>
                <div class="form-group">
                    <input autocomplete="off" name="repeatPassword" value="" type="password" class="form-control">
                </div>
                <button class="btn btn-block bt-login" type="submit">Masuk</button>

                <h5 class="text-center login-txt-center">Atau masuk dengan menggunakan sosial media</h5>

                <a class="btn btn-default google" href="google.php"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google+ </a>
                &nbsp;
                <a class="btn btn-default facebook" href="facebook.php"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-default twitter" href="twitter.php"> <i class="fa fa-twitter modal-icons"></i> &nbsp; &nbsp; &nbsp;Signin with Twitter </a>

                    </form>
                    <div class="form-footer">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <i class="fa fa-lock"></i>
                                <a href="forget_password.php">Lupa password? </a>

                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <i class="fa fa-check"></i>
                                <a href="register.php"> Daftar </a>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <!-- /container -->
    <script src="<?=base_url(); ?>social_login/js/jquery.validate.min.js"></script>
    <script src="<?=base_url(); ?>social_login/js/login.js"></script>
</body>

</html>