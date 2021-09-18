<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Send Mail</title>
</head>
<body>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="display-3 text-center text-primary">Send Mail</h1>
        <form id="contact_form">
          <div class="mb-3">
            <label for="email" class="form-label">To</label>
            <input id="to" name="to" type="email" class="form-control" placeholder="Email"
                   required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" class="form-control" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <div id="result"></div>
          </div>
          <button type="submit" class="btn btn-primary" id="btn_submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('#contact_form').on('submit', function (e) {
      e.preventDefault();
      $('#btn_submit').html('Sending ...');
      //console.log($('#contact_form').serialize());
      $.ajax({
        url: './send_mail.php',
        type: 'POST',
        data: $('#contact_form').serialize(),
        success: function (data) {
          $('#result').html(data);
          $('#btn_submit').html('Send');
        },
        error: function (e) {
          console.log(e);
          $('#btn_submit').html('Send');
        }
      });
    });
  });
</script>
</body>
</html>
