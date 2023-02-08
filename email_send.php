<?php
$to = "ananda.hlobaltech@gmail.com";// to whom you want to send the mail
$subject ="Mail Subject";//subject of mail or heading
$message ="mail body or your email";//body of mail
$from = "globalananda21@gmail.com";// from which email account you want to send the mail
$header = "From: $from";
mail($to, $submit, $message,$header);
echo "Mail Send"; // response if mail send or not 
?>