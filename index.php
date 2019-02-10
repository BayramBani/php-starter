<?php
$current_page = 'home';

if (isset($_REQUEST['page'])) $current_page = $_REQUEST['page'];
{
  $page = './core/view/' . $current_page . '.php';
}
$menu = $current_page;
if (isset($_REQUEST['menu'])) $menu = $_REQUEST['menu'];

require_once('core/Variables.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="icon" href="favicon.ico">
  <title>Starter</title>

  <?php echo $css; ?>

</head>
<body class="<?php echo $body_class; ?>">

<header>
  <?php
  if ($include_navbar) {
    include './core/partial/navbar.php';
  } ?>
</header>

<main>

  <?php
  if (file_exists($page)) {
    require_once($page);
  } else {
    require_once('./core/view/not-found.php');
  }
  ?>
</main>

<footer class="bg-dark">
  <?php
  if ($include_footer) {
    include './core/partial/footer.php';
  } ?>
</footer>

<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php echo $js; ?>

</body>
</html>
