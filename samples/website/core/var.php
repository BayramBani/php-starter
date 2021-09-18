<?php
// source = cdn | local | prod
$load = "local";
// common script
$css = "";
$js = "";
// configuration
$body_class = "";
$include_navbar = true;
$include_footer = true;
// Pages
$current_page = "home";
$visibility = "public";

if ($load == "local") {
  $css = '
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link href="assets/css/font-awesome.all.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">';
  $js = '
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/font-awesome.all.js"></script>';

} elseif ($load == "cdn") {
  $css = '
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
';
  $js = '
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js" integrity="sha384-VoPFvGr9GxhDT3n8vqqZ46twP5lgex+raTCfICQy73NLhN7ZqSfCtfSn4mLA2EFA" crossorigin="anonymous"></script>
';
} else if ($load == "prod") {
  $css = "<link href='assets/bundel.min.css' rel='stylesheet'/>";
  $js = "<script src='assets/bundel.min.js'></script>";
}


if (isset($_REQUEST['page']) && $_REQUEST['page'] != "") $current_page = $_REQUEST["page"];

if (file_exists("assets/css/page/" . $current_page . ".css")) {
  $css .= "<link rel='stylesheet' href='assets/css/page/{$current_page}.css'>";
}
if (file_exists("assets/js/page/" . $current_page . ".js")) {
  $js .= "<script src='assets/js/page/{$current_page}.js'></script>";
}
if ($current_page == "login") {
  $body_class = "bg-dark";
  $include_navbar = false;
}
if ($current_page == "register") {
  $body_class = "bg-dark";
  $include_navbar = false;
}
if ($current_page == "profile") {
  $visibility = "private";
}
if ($current_page == "settings") {
  $visibility = "private";
}
if (!isset($_SESSION['username']) && $visibility == "private") {
  header("location: /login");
}
$page = './core/view/' . $current_page . '.php';
?>
