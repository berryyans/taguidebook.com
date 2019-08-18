<?php
ob_start();
session_start();
require_once 'config.php'; 

//initalize user class
$user_obj = new Cl_User();
/*** Twitter****/
require_once('twitteroauth/twitteroauth.php');

if (TWITTER_CONSUMER_KEY === '' || TWITTER_CONSUMER_SECRET === '' || TWITTER_CONSUMER_KEY === 'TWITTER_CONSUMER_KEY_HERE' || TWITTER_CONSUMER_SECRET === 'CONSUMER_SECRET_HERE') {
	echo 'You need a consumer key and secret to test the sample code. Get one from <a href="https://dev.twitter.com/apps">dev.twitter.com/apps</a>';
	exit;
}

if(!isset( $_SESSION['oauth_token'] )){
	$connection = new TwitterOAuth(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET);
	$request_token = $connection->getRequestToken(TWITTER_OAUTH_CALLBACK);
	$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
	switch ($connection->http_code) {
		case 200:
			$url = $connection->getAuthorizeURL($token);
			break;
		default:
			$error = 'Could not connect to Twitter. Refresh the page or try again later.';
	}
}else{
	$connection = new TwitterOAuth(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
	$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
	$_SESSION['access_token'] = $access_token;
	$content = $connection->get('account/verify_credentials');
	$data = array();
	if( !empty( $content->id )){
		$data['id'] = $content->id;
		$data['name'] = $content->name;
		$data['screen_name'] = $content->screen_name;
		$data['picture'] = $content->profile_image_url;
		try {
			$user_obj->twitter_login($data);
		}catch (Exception $e) {
			$error = $e->getMessage();
		}

	}else{
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
}
/*** Twitter****/
?>
<?php 
	if( !empty( $_POST )){
		try {

			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: home.php?module=posting&page=list');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home.php?module=posting&page=list');
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDKu</title>
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
			<form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				
				<h4 class="text-center login-txt-center">login dengan twitter</h4>
				
				<a class="btn btn-default twitter" href="<?php echo $url;?>"> <i class="fa fa-twitter modal-icons"></i> Klik untuk melanjutkan </a>  
				
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Forgot password? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="register.php"> Sign Up </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>