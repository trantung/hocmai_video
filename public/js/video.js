// $(document).ready(function() {
//     $('.star').on('click', function() {
//         $(this).toggleClass('star-checked');
//     });
//     $('.ckbox label').on('click', function() {
//         $(this).parents('tr').toggleClass('selected');
//     });
//     $('.btn-filter').on('click', function() {
//         var $target = $(this).data('target');
//         if ($target != 'all') {
//             $('.table tr').css('display', 'none');
//             $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
//         } else {
//             $('.table tr').css('display', 'none').fadeIn('slow');
//         }
//     });
//     //dang 
//     $('#selectTime').on('change', function() {
//         if ($('#selectTime').val() == '{{ IS_PUBLISH_INACTIVE }}') {
//             $('#timeShow').append('<lable  id="timer_clock_add_label" class="control-label col-md-2 col-sm-2 ">Thời gian hiện thị hẹn giờ</lable >' + '<br/>' + '<div id="timer_clock_add" class="col-md-4 col-sm-4">' + '<input name="timer_clock" type="dateTime-local" class="form-control"></div>');
//         }
//         if ($('#selectTime').val() == '{{ IS_PUBLISH_ACTIVE }}') {
//             $('#timer_clock_add_label').remove();
//             $('#timer_clock_add').remove();
//         }
//     });
//     // remove link load video source
//     $(document).on("click", "i.del", function() {
//         $(this).parent().remove();
//     });
//     // end dang
//     //tung
//     $('#load_video_source').click(function(e) {
//         var video_source_id = $("#video_source_id").val();
//         var csrf = '{{csrf_token()}}';
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         var form = $(this);
//         var url = form.attr('action');
//         e.preventDefault();
//         $.ajax({
//             type: "POST",
//             url: url,
//             data: {
//                 video_source_id: video_source_id, // < note use of 'this' here
//                 _token: '{{csrf_token()}}'
//             },
//             dataType: 'json',
//             success: function(data) {
//                 if (data.status == 'Fail') {
//                     var error_load = '<div class="text-danger col-md-3">' + data.msg + '<i class="fa fa-times del"></i></div><br>';
//                     $("#error_load_video_source").append(error_load);
//                 }
//                 if (data.status == 'success') {
//                     var hidden = '<input type="hidden" name="video_source_id[]" value="' + data.video_id + '">';
//                     var text = '<div class="col-md-12">' + '<div class="col-md-2">' + '<a href="/admin/preview/video/' + data.source_id + '"' + 'target="_blank">' +
//                         data.video_title + '</a>' + '<i class="fa fa-times del"></i></div><br>' + hidden;
//                     $("#video_source_detail").append(text);
//                 }
//             },
//             error: function(data) {

//             }
//         });
//     });
//     //end tung
// });