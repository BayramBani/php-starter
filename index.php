<?php
$default_page = 'home';
if (isset($_REQUEST['page'])) $default_page = $_REQUEST['page'];
{
  $page = './core/view/' . $default_page . '.php';
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/lib/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="icon" href="favicon.ico">
  <title>PHP Starter</title>
</head>
<body>

<header>
<?php include './core/partial/navbar.php' ?>
</header>

<main>
<?php include './core/partial/sidebar.php' ?>
<?php
if (file_exists($page)) {
  require_once($page);
} else {
  require_once('./core/view/not-found.php');
}
?>
</main>

<?php include './core/partial/footer.php' ?>

<script src="./assets/lib/jquery/dist/jquery.slim.min.js"></script>
<script src="./assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
