<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["email"])) {
  //Load composer's autoloader
  require realpath(__DIR__."/../../").'/vendor/autoload.php';

  $mail = new PHPMailer(true);// Passing `true` enables exceptions
  $task = 'contact';
  try {
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
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'devbproject@gmail.com';
    $mail->Password = 'Aezakmi@1989';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('devbproject@gmail.com', 'devb Project');
    $mail->addAddress('bayram.bani@gmail.com', 'Web Master');
    $mail->addAddress($email);               // Name is optional

    $mail->isHTML(true);                                  // Set email format to HTML
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
