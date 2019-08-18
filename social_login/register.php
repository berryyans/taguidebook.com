<?php require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data)$success = USER_REGISTRATION_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDKU</title>

    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
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
	#page-loader {position:fixed!important;position:absolute;top:0;right:0;bottom:0;
	left:0;z-index:9999;background:#fff url('http://2.bp.blogspot.com/-kIrasdB82T0/U6eA_bnDmlI/AAAAAAAADzw/UUio00Tw4gM/s1600/Loader2.gif') no-repeat 50% 50%;color:#fcfcfc;padding:1em 1.2em;display:none;}
	</style>
  </head>
  <body>
	<div class="container">
	
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			
			<h1 class="text-center">IDKU</h1>
			<hr class="colorgraph">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form">
				<div>
					<input name="name" id="name" type="text" class="form-control" placeholder="Name"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" placeholder="Email address" > 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="password" id="password" type="password" class="form-control" placeholder="Password"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit">Sign Up</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Forgot password? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php"> Sign In </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>