<script>
    $(document).ready(function () {

        $('#contact_form').on('submit', function (e) {
            e.preventDefault();
            var form_data = $('#contact_form').serialize();
            console.log('submit: ' + form_data);
            // Save to DataBase
            $.ajax({
                url: '<?php echo BASE_PATH;?>contact',
                type: 'POST',
                data: form_data,
                success: function (data) {
                    $('#status').html(data);
                },
                error: function (e) {
                    console.log(e);
                }
            });
            // Send mail
            $.ajax({
                url: './app/mails/send_mail.php',
                type: 'POST',
                data: form_data,
                success: function (data) {
                    $('#status').html(data);
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                },
                error: function (e) {
                    console.log(e);
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            });
        });
    });
</script>
