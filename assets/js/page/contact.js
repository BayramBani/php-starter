$(document).ready(function () {
  $('#btn_reset').on('click', function () {
    $('#result').html('');
  });
  $('#contact_form').on('submit', function (e) {
    e.preventDefault();
    $('#btn_submit').html('Sending ...');
    $.ajax({
      //url: './core/task/send_mail.php',
      url: './core/task/send_mail_smtp.php',
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
