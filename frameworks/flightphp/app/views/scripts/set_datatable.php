<script>
    $(document).ready(function () {
        var dt = $('#example').DataTable({
            ajax: {
                url: "/contacts",
                dataSrc: ''
            },
            columns: [
                {data: "id"},
                {data: "name"},
                {data: "email"},
                {data: "date"},
                {data: "ip"}
            ],
            columnDefs: [{
                targets: 0,
                render: function (data, type, row) {
                    return data;
                }
            }],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json"
            },
            "order": [[1, "desc"]]
        });
    });
</script>