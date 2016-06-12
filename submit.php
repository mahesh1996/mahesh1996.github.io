<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From: ".$email . "\r\n";
mail("maheshbhuva2@gmail.com",$subject,$message,$headers);
?>