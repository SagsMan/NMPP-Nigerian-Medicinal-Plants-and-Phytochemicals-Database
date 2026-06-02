<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/home/nctests/public_html/nmppdb.com.ng/contactform/vendor/phpmailer/Exception.php';
require '/home/nctests/public_html/nmppdb.com.ng/contactform/vendor/phpmailer/PHPMailer.php';
require '/home/nctests/public_html/nmppdb.com.ng/contactform/vendor/phpmailer/SMTP.php';


function sendmail($to,$nameto,$subject,$message,$altmess)  {
  $from  = "info@nmppdb.com.ng"; 
  $namefrom = "NMPPDB";
  $mail = new PHPMailer();
  $mail->SMTPDebug = 0;
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();
  $mail->SMTPAuth   = true;
  $mail->Host   = "webmail.nmppdb.com.ng";
  $mail->Port       = 465;
  $mail->Username   = $from;
  $mail->Password   = "TeamWork@12";
  $mail->SMTPSecure = "ssl";
  $mail->setFrom($from,$namefrom);
  $mail->addCC($from,$namefrom);
  $mail->Subject  = $subject;
  $mail->isHTML();
  $mail->Body = $message;
  $mail->AltBody  = $altmess;
  $mail->addAddress($to, $nameto);
  return $mail->send();
}

