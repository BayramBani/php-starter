<?php

$from = 'mail@sendmail.php';
$to = $_REQUEST['to'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Send Mail</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "</td></tr></thead><tbody>";
$body .= "<tr><td style='border:none;'><strong>Subject: </strong> {$subject}</td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'><strong>Message : </strong>{$message}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

try {
  if (@mail($to, $subject, $message, $headers)) {
    echo '<b class="text-success">Message has been sent !</b>';
  } else {
    echo '<b class="text-danger">Message could not be sent !</b>';
  }
} catch (Exception $e) {
  echo '<script>console.log("' . $e->getMessage() . '")</script>';
}
?>
