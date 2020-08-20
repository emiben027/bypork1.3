<?php
//If you are not using composer - load the PHPmailer class files directly:
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

//The SMTP mail code looks like this:

function sendmail($to,$nameto,$subject,$message,$altmess)  {

  $from  = "info@bypork.com"; 
  $namefrom = "Bypork";
  $to = "emmie027@gmail.com";
  $nameto ="emmie027";
  $message =$_POST['message'];

  $subject =$_POST['subject'];

  $mail = new PHPMailer();

  $mail->SMTPDebug = 1;
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();
  $mail->SMTPAuth   = true;
  $mail->Host   = "smtp.privateemail.com";
  $mail->Port       = 465;
  $mail->Username   = $from;
  $mail->Password   = "JEJGreen7070?";
  $mail->SMTPSecure = "ssl";
  $mail->setFrom($from,$namefrom);
  $mail->addCC('prometheustech@hi2.in');
  $mail->Subject  = $subject;
  $mail->isHTML(true);
  $mail->Body = $message;
  $mail->AltBody  = $altmess;
  $mail->addAddress($to, $nameto);
  return $mail->send();
}

?>