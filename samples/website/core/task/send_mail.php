<?php

require_once __DIR__ . "/../config.php";

$from = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$headers = "From: $from";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>PHP Starter</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "</td></tr></thead><tbody>";
$body .= "</tr><td style='border:none;'><strong>Email: </strong> {$from}</td></tr>";
$body .= "<tr><td style='border:none;'><strong>Sujet: </strong> {$subject}</td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'><strong>Message : </strong>{$message}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

// Method 1
try {
  if (@mail($to, $subject, $message, $headers)) {
    echo '<b class="text-success">Votre message a été envoyé</b>';
  } else {
    echo '<b class="text-danger">Une erreur s\'est produite!</b>';
  }
} catch (Exception $e) {
  echo 'Exception : ', $e->getMessage(), "\n";
}

// Method 2
/*try {
  mail(MAIL_TO, $subject, $message, $headers);
  echo '<b class="text-success">Votre message a été envoyé</b>';
} catch (Exception $e) {
  echo '<b class="text-danger">Une erreur s\'est produite!</b>';
  echo 'Exception : ', $e->getMessage(), "\n";
}*/

?>
