<?php
// source = cdn | local
$source = "cdn";
// common script
$common_css = "";
$common_js = "";
// specific page script
$css = "";
$js = "";
// configuration
$body_class = "";
$include_navbar = true;
$include_footer = true;

if ($source == "local") {
  $common_css = '<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/style.css">
';
  $common_js = '<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>';

} elseif ($source == "cdn") {
  $common_css = '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/style.css">
';
  $common_js = '<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js" integrity="sha384-VoPFvGr9GxhDT3n8vqqZ46twP5lgex+raTCfICQy73NLhN7ZqSfCtfSn4mLA2EFA" crossorigin="anonymous"></script>
';
}

if ($current_page == "contact") {
  $js = '<script src="assets/js/page/contact.js"></script>';
}
if ($current_page == "login") {
  $body_class = "bg-dark";
  $include_navbar = false;
}
if ($current_page == "login2") {
  $body_class = "bg-dark";
  $include_navbar = false;
}
if ($current_page == "register") {
  $body_class = "bg-dark";
  $include_navbar = false;
}
?>
