<<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.wp.pl";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "norbisex@wp.pl";
$mail->Password = "Gimnazjum23";

$mail ->setFrom("norbisex@wp.pl", $name);
$mail ->addAddress("norbisex@wp.pl", "Dave");


$mail->Subject = "Nowy mail od {$name} z adresu mailowego {$email}" ;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");
