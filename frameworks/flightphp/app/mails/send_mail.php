<?php

require_once __DIR__ . '/../config.php';

$subject = "Agalé Contact Client";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

$headers = "From: " . $name . " <" . $email . " > \r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Cc: " . MAIL_CC . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$body = "<!DOCTYPE html><html lang='fr'><head><meta charset='UTF-8'><title>{$subject}</title></head>";
$body .= "<body style='font-family:Segoe UI,Helvetica,monospace;'></body><section style='border: 1px solid #dee2e6; border-radius: 10px; padding: 20px; margin-left: 20%;margin-right: 20%;'>";
$body .= "<div style='text-align: center;'><img src='https://universalwebsoft.com/assets/img/logo2.jpg' alt='uws' width='175'></div> <hr style='height: 1px;background-color: #dee2e6;border: none;'>";
$body .= "<div style='text-align: center;'><h1>{$subject}</h1></div>";
$body .= "<table><tr><td><strong>Nom & Prénom : </strong></td><td>{$name}</td></tr>";
$body .= "<tr><td><strong>Email</strong>: </td><td>{$email}</td></tr>";
$body .= "</table></section></body></html>";

try {
    if (isset($_REQUEST['email']))
        if (@mail(MAIL_TO, $subject, $body, $headers)) {
            echo '<b class="text-success">Sent !</b>';
        } else {
            echo '<b class="text-danger">Error !</b>';
        }
} catch (Exception $e) {
    echo '<script>console.log("' . $e->getMessage() . '")</script>';
}