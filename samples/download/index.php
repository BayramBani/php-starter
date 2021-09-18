<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Download</title>
</head>
<body>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="display-3 text-center text-primary">Download</h1>
        <form action="download.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">download</button>
        </form>
      </div>
    </div>
  </div>
</main>
</body>
</html>

