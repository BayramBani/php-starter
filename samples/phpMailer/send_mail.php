<?php

require_once '_config.php';

$to = $_REQUEST['to'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->SMTPDebug = 0;
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host = MAIL_HOST;                     //Set the SMTP server to send through
  $mail->SMTPAuth = true;                                   //Enable SMTP authentication
  $mail->Username = MAIL_USERNAME;                     //SMTP username
  $mail->Password = MAIL_PASSWORD;                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
  $mail->Port = MAIL_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
  //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
  $mail->addAddress($to);               //Name is optional
  $mail->addReplyTo(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
  //$mail->addCC('cc@example.com');
  //$mail->addBCC('bcc@example.com');

  //Attachments
  //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $subject;
  $mail->Body = $message;
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo '<b class="text-success">Message has been sent !</b>';
} catch (Exception $e) {
  echo "<b class=\"text-danger\">Message could not be sent. Mailer Error</b>: {$mail->ErrorInfo}";
}
