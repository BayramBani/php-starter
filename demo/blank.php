<?php
// $assets = 'cdn' or 'local'
$assets = 'local'
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  if ($assets == 'local') {
    ?>
    <link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.min.css">
    <?php
  } else {
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?php
  }
  ?>
  <title>Blank Page</title>
  <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
</head>
<body>

<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="display-3 text-center text-primary">Blank</h1>
      </div>
    </div>
  </div>
</main>


<?php
if ($assets == 'local') {
  ?>
<link rel="stylesheet" href="../assets/lib/jquery/jquery.min.js">
<link rel="stylesheet" href="../assets/lib/bootstrap/js/bootstrap.bundle.min.js">
<?php
} else {
?>
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
          integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
          integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
          crossorigin="anonymous"></script>
  <?php
}
?>
</body>
</html>
