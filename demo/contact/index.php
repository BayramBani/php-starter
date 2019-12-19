<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <title>Contact</title>
</head>
<body>

<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="display-3 text-center text-primary">Contact</h1>
        <form id="contact_form">
          <div class="form-group">
          <div class="form-group">
            <label for="i_email">Email</label>
            <input type="email" class="form-control" id="i_email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="i_name">Subject</label>
            <input type="text" class="form-control" id="i_subject" name="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <label for="ta_message">Message</label>
            <textarea class="form-control" id="ta_message" name="message" rows="3"></textarea>
          </div>
          <div class="form-group">
            <div id="result"></div>
          </div>
          <button type="submit" class="btn btn-primary" id="btn_submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</main>

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
<script>
  $(document).ready(function () {
    $('#contact_form').on('submit', function (e) {
      e.preventDefault();
      $('#btn_submit').html('Sending ...');
      console.log($('#contact_form').serialize());
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
