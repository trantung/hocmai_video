$("#schoolblock_id").change(function() {
    var class_id = $('#schoolblock_id option:selected').attr('value');

    if (class_id == "2") {
        $('#class_id').append('<label id="label_class2" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>' +
            '<div id="class2" class="col-md-8 col-sm-8 col-lg-8">' +
            '<select class="form-control" name="class_id">' +
            '<option value="4">Lớp 9</option>' +
            '<option value="5">Lớp 8</option>' +
            '<option value="6">Lớp 7</option>' +
            '<option value="7">Lớp 6</option>' +
            '</select>' +
            '</div>');
        $('#label_class1').remove();
        $('#class1').remove();
    } else {
        $('#label_class2').remove();
        $('#class2').remove();
    }
    if (class_id == "1") {
        $('#class_id').append('<label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>' +
            '<div id="class1" class="col-md-8 col-sm-8 col-lg-8">' +
            '<select class="form-control" name="class_id">' +
            '<option value="1">Lớp 12</option>' +
            '<option value="2">Lớp 11</option>' +
            '<option value="3">Lớp 10</option>' +
            '</select>' +
            '</div>');
        $('#label_class2').remove();
        $('#class2').remove();
    } else {
        $('#label_class1').remove();
        $('#class1').remove();
    }
    if (class_id == "3") {
        $('#class_id').append('<label id="label_class3" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>' +
            '<div id="class3" class="col-md-8 col-sm-8 col-lg-8">' +
            '<select class="form-control" name="class_id">' +
            '<option value="8">Lớp 5</option>' +
            '<option value="9">Lớp 4</option>' +
            '<option value="10">Lớp 3</option>' +
            '<option value="11">Lớp 2</option>' +
            '<option value="12">Lớp 1</option>' +
            '</select>' +
            '</div>');
        $('#label_class2').remove();
        $('#class2').remove();
        $('#label_class1').remove();
        $('#class1').remove();
    } else {
        $('#label_class3').remove();
        $('#class3').remove();
    }
});