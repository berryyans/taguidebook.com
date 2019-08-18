<?Php
session_start();
header("Content-type: image/png");

$captcha_image = imagecreatefrompng("captcha.png");
$captcha_font = imageloadfont("font.gdf");

$kamut[] = "denpasar";
$kamut[] = "sanur";
$kamut[] = "kumbasari";
$kamut[] = "puputan";
$kamut[] = "kertalangu";
$kamut[] = "art center";
$kamut[] = "mangrove";
$kamut[] = "pemecutan";
$kamut[] = "gajah mada";
$kamut[] = "museum bali";
$kamut[] = "catur muka";
$kamut[] = "maospahit";
$kamut[] = "jagatnatha";
$kamut[] = "renon";
$kamut[] = "serangan";
$kamut[] = "padang galak";
$kamut[] = "lemayeur";
$kamut[] = "mertasari";
$kamut[] = "pantai sindhu";
$kamut[] = "blanjong";
$kamut[] = "sakenan";
$kamut[] = "krupuk klejat";
$kamut[] = "warung satria";
$kamut[] = "pasar satria";
$kamut[] = "pasar kereneng";
$kamut[] = "bajra sandhi";
$kamut[] = "peguyangan";
$kamut[] = "dauh puri";
$kamut[] = "ubung";
$kamut[] = "panjer";
$kamut[] = "grenceng";
$kamut[] = "kesiman";

srand ((double) microtime() * 1000000); $acak = rand(0,count($kamut)-1);

$captcha_text = $kamut[$acak];

$_SESSION['captcha_session'] = $captcha_text;

$captcha_color = imagecolorallocate($captcha_image,0,0,0);
imagestring($captcha_image,$captcha_font,15,5,$captcha_text,$captcha_color);
imagepng($captcha_image);
imagedestroy($captcha_image);
?>
