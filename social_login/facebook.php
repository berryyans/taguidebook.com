<?php
ob_start();
session_start();
require_once 'config.php';

//initalize user class
$user_obj = new Cl_User();
/*********Facebook Login **********/
require_once('Facebook/FacebookSession.php');
require_once('Facebook/FacebookRedirectLoginHelper.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/FacebookSDKException.php');
require_once('Facebook/FacebookRequestException.php');
require_once('Facebook/FacebookAuthorizationException.php');
require_once('Facebook/GraphObject.php');
require_once('Facebook/GraphUser.php');
require_once('Facebook/GraphSessionInfo.php');
require_once( 'Facebook/HttpClients/FacebookHttpable.php' );
require_once( 'Facebook/HttpClients/FacebookCurl.php' );
require_once( 'Facebook/HttpClients/FacebookCurlHttpClient.php' );
require_once( 'Facebook/Entities/AccessToken.php' );
require_once( 'Facebook/Entities/SignedRequest.php' );

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;

 FacebookSession::setDefaultApplication(FB_APP_ID, FB_APP_SECRET);

$helper = new FacebookRedirectLoginHelper(FB_REDIRECT_URI);
$session = $helper->getSessionFromRedirect();



if(isset($_SESSION['token'])){
	$session = new FacebookSession($_SESSION['token']);
	try{
		$session->validate(FB_APP_ID, FB_APP_SECRET);
	}catch(FacebookAuthorizationException $e){
		echo $e->getMessage();
	}
}

$data = array();

if(isset($session)){
	$_SESSION['token'] = $session->getToken();
	$request = new FacebookRequest($session, 'GET', '/me');
	$response = $request->execute();
	$graph = $response->getGraphObject(GraphUser::className());

	$data = $graph->asArray();
	$id = $graph->getId();
	$image = "https://graph.facebook.com/".$id."/picture?width=100";
	$data['image'] = $image;
	$user_obj->fb_login($data);
	
} 
/*********Facebook Login **********/
?>
<?php 
	if( !empty( $_POST )){
		try {
			
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: index.php?module=posting&page=list');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: index.php?module=posting&page=list');
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
				
				<h4 class="text-center login-txt-center">login dengan facebook</h4>
				
				<a class="btn btn-default facebook" href="<?php echo $helper->getLoginUrl(array('email'));?>"> <i class="fa fa-facebook modal-icons"></i> Klik untuk melanjutkan </a>  
				
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