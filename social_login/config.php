<?php
/**
@author randiansyah
@copyright randiansyah
 */

//include "./lib/getuserinfo.php";

include "./lib/formatdate.php";
include "./lib/formattanggal.php";
include "./lib/format_dollar.php";
include "./lib/pasaranjawa.php";
//include "./lib/fungsi_kalender.php";
include "./lib/permalink.php";
include "./lib/AES/function.php";



require_once 'db.php';
require_once 'upload_validation.php';
require_once 'messages.php';

//set database
define( 'BASE_PATH', 'http://citizenbali.com/social_login');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'balp7414_taguidebook_usr');
define( 'DB_PASSWORD', 'Jhzd8mnfwX6;');
define( 'DB_NAME', 'balp7414_taguidebook');

//Facebook App Details
define('FB_APP_ID', '316138815400107'); //isi dengan ID anda
define('FB_APP_SECRET', '26177fbd7876af536f615644556f2aae'); //isi dengan aplikasi rahasia anda
define('FB_REDIRECT_URI', 'http://www.citizenbali.com/social_login/facebook.php'); //redirectkan url contoh http://takofans/facebook.php

//Google App Details
define('GOOGLE_APP_NAME', 'Browser citizen');
define('GOOGLE_OAUTH_CLIENT_ID', '583211590613-72vfuf1ilaje8oaaodm7vc3clnph9tpv.apps.googleusercontent.com');//isi dengan ID anda
define('GOOGLE_OAUTH_CLIENT_SECRET', 'NFIi5B8KnlmcAuNf1ASvZS-_'); //isi dengan aplikasi rahasia anda
define('GOOGLE_OAUTH_REDIRECT_URI', 'http://www.citizenbali.com/social_login/google.php'); //redirectkan url contoh http://google.php
define("GOOGLE_SITE_NAME", 'YOUR SITE URL'); 

//Twitter login
define('TWITTER_CONSUMER_KEY', 'JDe9xmupSXgXKbjrrXraaxSJo'); //isi dengan ID anda
define('TWITTER_CONSUMER_SECRET', 'JI2EE4AqsUbjk0LB4iOymeL7r68KbWiYLp5ASw45NYJjhZraPs'); //isi dengan aplikasi rahasia anda
define('TWITTER_OAUTH_CALLBACK', 'http://www.citizenbali.com/social_login/twitter.php');



function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
