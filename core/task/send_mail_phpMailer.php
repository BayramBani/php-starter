<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST["email"])) {
  require realpath(__DIR__."/../../")."/vendor/autoload.php";
  require_once realpath(__DIR__."/../")."/Config.php";
  $mail = new PHPMailer(true);
  $task = 'contact';
  try {
    $to = $_POST["to"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $subject = $_POST["subject"];
    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>PHP Starter</title></head><body>";
    $body .= "<h1 style='color: #005cbf;'>devb Project</h1>";
    $body .= "<table class='table' style='width: 100%;'>";
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "</td></tr></thead><tbody>";
    $body .= "<tr><td style='border:none;'><strong>Nom: </strong> {$name}</td></tr>";
    $body .= "</tr><td style='border:none;'><strong>Email: </strong> {$email}</td></tr>";
    $body .= "<tr><td style='border:none;'><strong>Sujet: </strong> {$subject}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'><strong>Message : </strong>{$message}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    //Recipients
    $mail->setFrom(SMTP_USER);
    $mail->addAddress($to);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();

    echo '<b class="text-success">Votre message a été envoyé</b>';
  } catch (Exception $e) {
    echo '<b class="text-danger">Une erreur s\'est produite!</b>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
}
?>
