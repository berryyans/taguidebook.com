<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="muni">
    <title>Tulisan Anda | Citizen Bali</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <script type="text/javascript" src="../../mediacenter/ckfinder/ckfinder.js"></script>
    <script type="text/javascript" src="../../mediacenter/ckeditor/ckeditor.js"></script>
    
    <script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/bootstrap-datepicker.js"></script>
	<script src="./js/bootstrap-datepicker.id.js"></script>
    <link rel="stylesheet" href="./css/datepicker.css" />
	
	<!-- Alert !-->
	<link rel="stylesheet" href="assets/css/alertify.css" />
    <link rel="stylesheet" href="assets/css/alertify.default.css" id="toggleCSS" />
    <script src="assets/js/alertify.min.js"></script>
    
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
 	</head>
 	<body>

    <!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<?php 
			$demo_url = explode("/",  $_SERVER['REQUEST_URI']);
			$uri = end( $demo_url ); 
			?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($uri == 'home.php?module=posting&page=list') echo "class='active'"; ?>><a href="home.php?module=posting&page=list">Home</a></li>
					<li <?php if($uri == 'home.php?module=menu&page=add') echo "class='active'"; ?>><a href="home.php?module=menu&page=add">Tulis Artikel</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Welcome 
							
						<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="account.php">Akun saya</a> </li>
							<li class="divider"></li>
							<li style="background: #e67e22; color:#fff"> <a href="logout.php">Logout</a> </li>
						</ul>
						<?php } ?>
					</li>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>