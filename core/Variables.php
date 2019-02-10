<?php
$css = "";
$js = "";
$body_class = "";
$include_navbar = true;
$include_footer = true;

if ($current_page == "contact"){
  $js = "
  <script src='assets/js/page/contact.js'></script>
  ";
}

if ($current_page == "login"){
  $body_class = "bg-dark";
  $include_navbar = false;
  $js = "
  <script src='assets/js/page/contact.js'></script>
  ";
}
?>
