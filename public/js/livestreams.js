$(function() {
    $("#kenh, #lop, #giaovien,#mon").append(new Option("Selectall", "all"));
    $("#kenh option[value=all]").attr('selected', 'selected');
    $("#lop option[value=all]").attr('selected', 'selected');
    $("#giaovien option[value=all]").attr('selected', 'selected');
    $("#mon option[value=all]").attr('selected', 'selected');
    $("#kenh, #lop, #giaovien,#mon").change(function() {
        search();
    });

    function search() {
        let schoolblock_id = $('#kenh').val(),
            class_id = $('#lop').val(),
            teacher_id = $('#giaovien').val(),
            subject_id = $('#mon').val();
        $('.filter-row').show(); //reset
        if (schoolblock_id != 'all')
            $('.filter-row td:nth-child(6):not(:contains(' + schoolblock_id + '))').parent().hide();

        if (class_id != 'all')
            $('.filter-row td:nth-child(7):not(:contains(' + class_id + '))').parent().hide();

        if (teacher_id != 'all')
            $('.filter-row td:nth-child(8):not(:contains(' + teacher_id + '))').parent().hide();

        if (subject_id != 'all')
            $('.filter-row td:nth-child(9):not(:contains(' + subject_id + '))').parent().hide();
    }

});