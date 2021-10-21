$(document).ready(function() {
    $('#fiterRateApp').DataTable({
        initComplete: function() {
            this.api().columns(1).every(function() {
                var column = this;
                var select = $('<select><option value="">Tất cả</option></select>')
                    .appendTo($(column.header()).empty())
                    .on('change', function() {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });

        }
    });
});