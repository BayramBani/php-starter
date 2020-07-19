<?php
session_start();
require_once('core/var.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<?php echo $js; ?>
</body>
</html>
